<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formController extends Controller
{
    //
    public function formLoad(Request $req)
    {
        // dd($req->email);

        $arr['first'] = ['e' => $req->email, 'n' => (int)$req->num, 'indexName' => 3434];

        $arr['second'] = ['e' => "Ahnaf@asdasd.com", 'n' => 999];

        $this->validate($req, [
            'email' => 'required|max:255',
            'num' => 'required|max:3',
            'phone' => 'required|max:11|regex:/(01)[0-9]{9}/'
        ]);

        // return view('formView', $arr);
        return redirect()->route('loadSuccessForm'); //->with('frontEndVariable', 'Success');

    }

    private function convertToDollar($taka)
    {
        $res = $taka / 84.0;
        return round($res, 1);
        // return $res;
    }

    public function loadConvertResult(Request $req)
    {
        $res['dollar'] = $this->convertToDollar($req->taka);

        return view('formView', $res);
    }


    public function login(Request $req)
    {
        // dd($req);
        if ($req->email === "ahnaf@something.com" && $req->password === "123") {

            session()->put('user', $req->email);
            return redirect()->route('home');
            // return view('welcome');
        }

        return "password is wrong";
    }

    public function getApple($val, $val2, $val3)
    {
        // dd($val, $val2, $val3);
        return view('formView');
    }

    public function createNewCustomer(Request $req)
    {
        $c = new Customer;

        $c->name =  $req->name;
        $c->email = $req->email;
        $c->password = $req->password;

        $c->save();

        session()->put('user', $req->email);

        return redirect()->route('home');
    }

    public function searchItem(Request $req)
    {
        //dd($req);
        $result = DB::table('posts')->where('catagory', $req->catagory)
            ->where('location', $req->location)->get();

        $search_text = explode(' ', $req->search_text);
        $list = array();

        $max = -1;
        foreach ($result as $value) {
            $title = explode(' ', $value->title);
            $count = 0;
            foreach ($title as $value2) {
                foreach ($search_text as $value3) {
                    if ($value2 === $value3) {
                        $count++;
                    }
                }
                if($max < $count){
                    $max = $count;
                }
            }
        }

        foreach ($result as $value) {
            $title = explode(' ', $value->title);
            $count = 0;
            foreach ($title as $value2) {
                foreach ($search_text as $value3) {
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
        
        dd($list);
    }



    public function create()
    {
        // $customers = DB::table('customers')->all(); //Select * FROM customers
        dd("Create");
    }
    public function read()
    {
        $customers = DB::table('customers')->where('name', 'Azwad')->get(); //Select * FROM customers
        dd($customers);
    }
    public function update()
    {
        dd('Update');
    }
    public function delete()
    {
        dd('Delete');
    }


}
