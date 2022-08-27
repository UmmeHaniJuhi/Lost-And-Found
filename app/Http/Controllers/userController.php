<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('userAuth');
    }

    public function load_createPost($type)
    {
      $data['type']= $type;
        return view('createPost',$data);
    }


    public function logout()
    {
        session()->forget('user');
        session()->forget('email');
        return redirect()->route('homePage');
    }


    public function load_userDashboard()
    {
       // $user_result = DB::table('posts')->where('email',  session('email'))->get();
       $user_result = DB::table('posts')->where('email',  session('email'))->where('status',  'active')->get();

        $sendData['leftResults'] = $user_result;

        $user_resultFound = DB::table('posts')->where('email',  session('email'))->where('status', 'found')->get();

        $sendData['foundResults'] = $user_resultFound;


        return view('userDashboard', $sendData);
    }

    // public function found(Request $request){
    //     $id=$request->id;
    //     DB::table('posts')
    //     ->where('id', $id)
    //     ->update([
    //         'status'     => "archived"
    //     ]);
    //     return $this->load_userDashboard($request);

    // }


    public function create_post(Request $req)
    { 
        $show_email = false;
        $urgent = false;

        if ($req->show_email === 'on') {
            $show_email = true;
        }

        // if($req->urgent === 'on'){
        //     $urgent = true;
        // }
        $postId = DB::table('posts')->insertGetId([
            'title' => $req->name,
            'date' => Carbon::now(),
            'urgent' => false,
            'reported' => false,
            'description' => $req->description,
            'location' => $req->division,
            'category' => $req->category,
            'status' => 'active',
            'phone' => $req->phone_number,
            'email' => session('email'),
            'show_email' => $show_email,
            'type' => $req->type,
        ]);


        $front_img_name = strval($postId) . "_1" .  ".jpg";
        $back_img_name = strval($postId) . "_2" .  ".jpg";
        $extra_img_name = strval($postId) . "_3" .  ".jpg";

        $req->img1->move(public_path('images'), $front_img_name);
        $req->img2->move(public_path('images'), $back_img_name);
        $req->img3->move(public_path('images'), $extra_img_name);
        return redirect()->route('user_Dashboard');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id',  $id)->where('email', session('email'))->get()->first();
        $data['post'] = $post;
        // return redirect()->route('editPost');
        return view('editPost', $data);
    }



    public function found($id)
    {
        DB::table('posts')->where('id',  $id)->update(['status' => 'found']);

        return redirect()->back();
    }


    public function delete($id)
    {
        DB::table('posts')->where('id',  $id)->delete();
      

        return redirect()->back();
    }







    public function editPost(Request $req)
    {
        $post = DB::table('posts')->where('id',  $req->id)->where('email', session('email'))->get()->first();
        DB::table('posts')->where('id', $req->id)
            ->update([
                'title' => $req->name,
                'date' => $req->date,
                'description' => $req->description,
                'location' => $req->division,
                'category' => $req->category,
                'phone' => $req->phone_number,
                'show_email' => isset($req->show_email) ? true : false,
            ]);


        if (isset($req->img1)) {
            $front_img_name = $req->id . "_1";
            $req->img1->move(public_path('images'), $front_img_name . ".jpg");
        }

        if (isset($req->img2)) {
            $back_img_name = $req->id . "_2";
            $req->img2->move(public_path('images'), $back_img_name . ".jpg");
        }

        if (isset($req->img3)) {
            $extra_img_name = $req->id . "_3";
            $req->img3->move(public_path('images'), $extra_img_name . ".jpg");
        }

        $data['leftResults'] = DB::table('posts')->where('email',  session('email'))->get();
        return redirect()->route('user_Dashboard');
    }
}
