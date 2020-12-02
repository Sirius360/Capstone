<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;



class AdminController extends Controller
{
    public function index(Request $request){



            $result = DB::table('users')->first();
            if($result){

             // Session::put('last_name',$result->last_name);
             Session::put('name',$result->name);
            // Session::put('id',$result->id);




            }



         //    echo'<pre>';
         //    print_r ($result);
         //    echo'<\pre>';


        return view('admin.home');
    }


    public function new_announcement(){
        return view('admin.new-announcement');
    }
    public function manage_announcements(){
        return view('admin.manage-announcements');
    }



    public function account_settings(){
        return view('admin.account-settings');
    }
    public function control_panel(){
        return view('admin.control-panel');
    }
    public function edit_group(){
        return view('admin.edit-group');
    }
    public function edit_team(){
        return view('admin.edit-team');
    }
    public function group_details(){
        return view('admin.group-details');
    }
    public function manage_departments(){
        return view('admin.manage-departments');
    }
    public function manage_faculties(){
        return view('admin.manage-faculties');
    }
    public function manage_groups(){
        return view('admin.manage-groups');
    }
    public function manage_plans(){
        return view('admin.manage-plans');
    }
    public function manage_tasks(){
        return view('admin.manage-tasks');
    }
    public function manage_topics(){
        return view('admin.manage-topics');
    }
    public function new_department(){
        return view('admin.new-department');
    }
    public function new_faculty(){
        return view('admin.new-faculty');
    }
    public function new_group(){
        return view('admin.new-group');
    }
    public function new_team(){
        return view('admin.new-team');
    }
    public function new_task(){
        return view('admin.new-task');
    }
    public function new_plan(){
        return view('admin.new-plan');
    }
    public function new_topic(){
        return view('admin.new-topic');
    }
    public function pending_topics(){
        return view('admin.pending-topics');
    }
    public function statistics(){
        return view('admin.statistics');
    }
    public function team_details(){
        return view('admin.team-details');
    }
    public function template(){
        return view('admin.template');
    }

}
