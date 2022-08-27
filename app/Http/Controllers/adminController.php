<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\MonthlyUsersChart;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class adminController extends Controller
{
    //
    public function posts_dashboard()
    {
        $results = DB::table('posts')->get();
        $data['results'] = $results;
        return view('adminDashboard.posts', $data);
    }

    public function archive_post($id)
    {
        DB::table('posts')->where('id', $id)
            ->update([
                'status' => 'archived',
            ]);
        toast('Archived successfully', 'success')->position('top-end');


        return redirect()->route('posts_dashboard');
    }

    public function activate_post($id)
    {
        DB::table('posts')->where('id', $id)
            ->update([
                'status' => 'active',
            ]);
        toast('Post updated successfully', 'success')->position('top-end')->autoClose(2000);


        return redirect()->route('posts_dashboard');
    }

    public function make_urgent($id)
    {
        DB::table('posts')->where('id', $id)
            ->update([
                'urgent' => true,
            ]);
        toast('Post updated successfully', 'success')->position('top-end')->autoClose(2000);

        return redirect()->route('posts_dashboard');
    }

    public function revoke_urgency($id)
    {
        DB::table('posts')->where('id', $id)
            ->update([
                'urgent' => false,
            ]);
        toast('Post updated successfully', 'success')->position('top-end')->autoClose(2000);


        return redirect()->route('posts_dashboard');
    }

    public function load_messages()
    {
        $results = DB::table('message')->get();
        $data['results'] = $results;
        return view('adminDashboard.messages', $data);
    }

    public static function usage_report(MonthlyUsersChart $chart)
    {
        return view('adminDashboard.report', ['chart' => $chart->build()]);
    }
}
