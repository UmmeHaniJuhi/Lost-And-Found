<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class globalController extends Controller
{
    //

    public function load_login()
    {
        return view('login');
    }

    public function load_register()
    {
        return view('register');
    }

    public function register(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:3|confirmed',
            'phone' => 'required|max:11|regex:/(01)[0-9]{9}/'
        ]);

        DB::table('user')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'phone' => $req->phone,
        ]);

        $insert = DB::table('user')->where('email', $req->email)->get()->first();
        if ($insert) {
            session(['user' => $req->name]);
            session(['email' => $req->email]);
            return redirect()->route('homePage');
        } else {
            echo "404 server error";
            die;
        }
        // dd($matched_password);
    }

    public function login(Request $req)
    {
        $user = DB::table('user')->where('email', $req->email)->get()->first();

        $matched_password = Hash::check($req->password, $user->password);
        if ($user && $matched_password) {
            session(['user' => $user->name]);
            session(['email' => $user->email]);
            return redirect()->route('homePage');
        }
        return redirect()->back()->with('error');
        // dd($matched_password);
    }




    public function load_homePage()
    {
        $foundPost['foundPost'] = (int)DB::table('posts')->where('status', 'found')->count();

        return view('home', $foundPost);
    }


    public function load_viewPosts($id)
    {
        $post = DB::table('posts')->where('id', $id)->get()->first();
        $data['post'] = $post;
        return view('viewPosts', $data);
        // return redirect()->route('viewPosts')->with('post', $data);
    }


    public function report_a_post($id)
    {
        DB::table('posts')->where('id', $id)->update(['reported' => true]);

        return redirect()->route('searchResults');
    }

    //footer pages
    public function load_aboutUs()
    {
        return view('footer.aboutUs');
    }

    public function load_contactUs()
    {
        return view('footer.contactUs');
    }

    public function insert_load_contactUs(Request $req)
    {
        DB::table('message')->insert([
            'email' => $req->email,
            'message' => $req->message,
        ]);

        $insert = DB::table('message')->where('message',  $req->message)->get()->first();
        if ($insert) {
            return redirect()->route('homePage');
        } else {
            echo '404 server error';
            die;
        }
    }

    public function load_privacyPolicy()
    {
        return view('footer.privacyPolicy');
    }

    public function load_toc()
    {
        return view('footer.toc');
    }

    public function unauthorized()
    {
        return view('unauthorized');
    }




    //home page search engine
    public function load_searchResults(Request $req)
    {
        $result = DB::table('posts')->where('category', $req->category)
            ->where('location', $req->location)->where('status', '!=', 'archived')->where('status', '!=', 'found')
            ->where('type', '!=', $req->type)->where('urgent', false)->get();
        // dd($result);

        $search_text = explode(' ', $req->search_text);
        $list = array();

        $max = -1;
        foreach ($result as $value) {
            $title = explode(' ', $value->title);
            $count = 0;
            foreach ($title as $value2) {
                foreach ($search_text as $value3) {
                    $value2 = strtolower($value2);
                    $value3 = strtolower($value3);
                    if ($value2 === $value3) {
                        $count++;
                    }
                }
                if ($max < $count) {
                    $max = $count;
                }
            }
        }


        if ($max == 0) {
            // right search results;
            $result2 = DB::table('posts')->where('status', '!=', 'archived')->where('urgent', true)->take(3)->get();
            $sendData['leftResults'] = $list;
            $sendData['rightResults'] = $result2;
            return view('searchResults', $sendData);
        }

        foreach ($result as $value) {
            $title = explode(' ', $value->title);
            $count = 0;
            foreach ($title as $value2) {
                foreach ($search_text as $value3) {
                    $value2 = strtolower($value2);
                    $value3 = strtolower($value3);

                    if ($value2 === $value3) {
                        $count++;
                    }
                }
                if ($count === $max) {
                    array_push($list, $value);
                    $count = 0;
                }
            }
        }

        $result = DB::table('posts')->where('status', '!=', 'archived')->where('urgent', true)->take(3)->get();
        // dd($result['rightResults']);
        $sendData['leftResults'] = $list;
        $sendData['rightResults'] = $result;
        return view('searchResults', $sendData);
    }


    public function createContactUs(Request $req)
    {
        DB::table('message')->insert([
            'email' => $req->email,
            'message' => $req->message,
        ]);

        $foundPost['foundPost'] = (int) DB::table('posts')->where('status', 'found')->count();
        return view('home', $foundPost);
    }
}
