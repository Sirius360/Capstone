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
         $manage_announcements=DB::table('announcements')->orderBy('created_at','desc')->get();

         $all_manage_announcements=view('admin.home')->with('manage_announcements', $manage_announcements);
         
 
         return view('layouts.master')->with('admin.home', $all_manage_announcements);
    
       // return view('admin.home');
    }
    

    public function new_announcement(){
        return view('admin.new-announcement');
    }
    public function manage_announcements(){
        $manage_announcements=DB::table('announcements')->orderBy('created_at','desc')->get();

        $all_manage_announcements=view('admin.manage-announcements')->with('manage_announcements', $manage_announcements);
        

        return view('layouts.master')->with('admin.manage-announcements', $all_manage_announcements);
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

        $manage_faculties=DB::table('faculty')->get();
        $edit_new_department=DB::table('department')->orderBy('created_at','desc')->get();

        //$all_manage_faculties=view('admin.edit-department')
        $all_manage_department=view('admin.manage-departments')->with('edit_new_department', $edit_new_department)->with('manage_faculties', $manage_faculties);
        

        return view('layouts.master')->with('admin.manage-departments', $all_manage_department );
        
    }
    public function manage_faculties(){

    $manage_faculties=DB::table('faculty')->orderBy('created_at','desc')->get();

    $all_manage_faculties=view('admin.manage-faculties')->with('manage_faculties', $manage_faculties);
        

    return view('layouts.master')->with('admin.manage-faculties', $all_manage_faculties);

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
        //return view('admin.new-department');
        $manage_faculties=DB::table('faculty')->orderBy('created_at','desc')->get();

        $all_manage_faculties=view('admin.new-department')->with('manage_faculties', $manage_faculties);
            
    
        return view('layouts.master')->with('admin.new-department', $all_manage_faculties);
    }
    public function new_faculty(){
        return view('admin.new-faculty');
    }
    public function new_group(){
        return view('admin.new-group');
    }
    public function new_task(){
        return view('admin.new-task');
    }
    public function new_plan(){
        return view('admin.new-plan');
    }
    public function new_topic(){

        $group_topic=DB::table('groups')->orderBy('id','desc')->get();
        $team_topic=DB::table('teams')->orderBy('id','desc')->get();

        //$all_manage_faculties=view('admin.edit-department')
        $all_manage_topic=view('admin.new-topic')->with('team_topic', $team_topic)->with('group_topic', $group_topic);
        

        return view('layouts.master')->with('admin.new-topic', $all_manage_topic );
        //code
        //return view('admin.new-topic');
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

//INPUT ==========================================
public function save_announcement(Request $request){
    $data= array();
    $data['title']=$request->note_name;// ten cot roi den ten form
    $data['content']=$request->note_description;// ten cot roi den ten form
    $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form
    if($data['title']==null||$data['content']==null){
        Session::put('message','Them that bai');
        return  Redirect::to('admin');}
 
    else{
        
        DB::table('announcements')->insert($data);
        Session::put('message','Them thanh cong');
        return  Redirect::to('admin');}

    }    

    // test
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>'


    public function save_new_announcement(Request $request){
        $data= array();
        $data['title']=$request->name;// ten cot roi den ten form
        $data['content']=$request->description;// ten cot roi den ten form
        $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form
        if($data['title']==null||$data['content']==null){
            Session::put('message','Them that bai');
            return  Redirect::to('admin/new-announcement');}
     
        else{
            
            DB::table('announcements')->insert($data);
            Session::put('message','Them thanh cong');
            return  Redirect::to('admin/new-announcement');}
    
        }    

        
        public function save_new_faculty(Request $request){
            $data= array();
            $data['name']=$request->faculty_name;// ten cot roi den ten form
            $data['description']=$request->note_description;// ten cot roi den ten form
            if($data['name']==null||$data['description']==null){
                Session::put('message','Them that bai');
                return  Redirect::to('admin/new-faculty');}
         
            else{
                
                DB::table('faculty')->insert($data);
                Session::put('message','Them thanh cong');
                return  Redirect::to('admin/new-faculty');}
        
            }  
            
            
            public function save_new_department(Request $request){
                $data= array();
                $data['name']=$request->department_name;// ten cot roi den ten form
                $data['description']=$request->note_description;// ten cot roi den ten form
                $data['faculty_id']=$request->abc;
                $data['faculty']=$request->faculty;

                if($data['name']==null||$data['description']==null){
                    Session::put('message','Them that bai');
                    return  Redirect::to('admin/new-department');}
             
                else{
                    
                    DB::table('department')->insert($data);
                    Session::put('message','Them thanh cong');
                    return  Redirect::to('admin/new-department');}
            
                }   
                
                

                public function save_new_topic(Request $request){
                    $data= array();
                    $data['title_eng']=$request->english_title;// ten cot roi den ten form
                    $data['title_vie']=$request->vietnamese_title;// ten cot roi den ten form
                    $data['title_ini']=$request->initial_title;
                    $data['description']=$request->note_description;// ten cot roi den ten form
                    $data['group_id']=$request->groups;// ten cot roi den ten form
                    $data['team_id']=$request->teams;
                    $data['is_approved']=1;

                    //$data['faculty']=$request->faculty;
    
                    if($data['team_id']==null||$data['description']==null){
                        Session::put('message','Them that bai');
                        return  Redirect::to('admin/new-topic');}
                 
                    else{
                        
                        DB::table('topics')->insert($data);
                        Session::put('message','Them thanh cong');
                        return  Redirect::to('admin/new-topic');}
                
                    }    
            
                       
        
    
        // test
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>'

       //======================================================================================= announcement_visibility 

       // Mệt quá éo làm nữa 
       
    //    public function public_announcements($announcement_visibility_id){
    //        DB::table('announcements')->where('id',$announcement_visibility_id)->update(['announcement_visibility'=>1]);
    //        return  Redirect::to('admin/manage-announcements');
 

    //    }
       
    //    public function members_announcements($announcement_visibility_id){
    //     DB::table('announcements')->where('id',$announcement_visibility_id)->update(['announcement_visibility'=>2]);
    //     return  Redirect::to('admin/manage-announcements');
           
    //    }
    //   public function lock_announcements($announcement_visibility_id){
    //     DB::table('announcements')->where('id',$announcement_visibility_id)->update(['announcement_visibility'=>3]);
    //     return  Redirect::to('admin/manage-announcements');
           
    //   }

           //======================================================================================= edit & delete & update

    public function edit_announcement($id){
        $edit_new_announcement=DB::table('announcements')->orderBy('created_at','desc')->where('id',$id)->get();

        $all_manage_announcements=view('admin.edit-announcement')->with('edit_new_announcement', $edit_new_announcement);
        

        return view('layouts.master')->with('admin.edit-announcement', $all_manage_announcements);
    }
    public function edit_announcementt($id){
        $edit_new_announcement=DB::table('announcements')->where('id',$id)->get();

        $all_manage_announcements=view('admin.edit-announcementt')->with('edit_new_announcement', $edit_new_announcement);
        

        return view('layouts.master')->with('admin.edit-announcementt', $all_manage_announcements);
    }

    public function update_announcement(Request $request,$id){

        $data= array();
        $data['title']=$request->name;// ten cot roi den ten form
        $data['content']=$request->description;// ten cot roi den ten form
        $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form
        if($data['title']==null||$data['content']==null){
            Session::put('message','Cập nhật thất bại');
            return  Redirect::to('admin/edit-announcement/'.$id);}
     
        else{
            
            DB::table('announcements')->where('id',$id)->update($data);
            
            return  Redirect::to('admin/manage-announcements');}
    
           

    }
    public function update_announcementt(Request $request,$id){

        $data= array();
        $data['title']=$request->name;// ten cot roi den ten form
        $data['content']=$request->description;// ten cot roi den ten form
        $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form
        if($data['title']==null||$data['content']==null){
            Session::put('message','Cập nhật thất bại');
            return  Redirect::to('admin/edit-announcementt/'.$id);}
     
        else{
            
            DB::table('announcements')->where('id',$id)->update($data);
            
            return  Redirect::to('admin');}
    
           

    }
    public function delete_announcement(Request $request,$id){


            
            DB::table('announcements')->where('id',$id)->delete();
            Session::put('message','Xóa thành công');

            return  Redirect::to('admin/manage-announcements');
    
           

    }
    public function delete_home_announcement(Request $request,$id){


            
        DB::table('announcements')->where('id',$id)->delete();
        Session::put('message','Xóa thành công');

        return  Redirect::to('admin');}

//=================================================================

    public function edit_faculties($id){
        $edit_new_faculty=DB::table('faculty')->orderBy('created_at','desc')->where('id',$id)->get();

        $all_manage_faculty=view('admin.edit-faculty')->with('edit_new_faculty', $edit_new_faculty);
        

        return view('layouts.master')->with('admin.edit-faculty', $all_manage_faculty);
    }

    public function update_faculties(Request $request,$id){

        $data= array();
        $data['name']=$request->faculty_name;// ten cot roi den ten form
        $data['description']=$request->note_description;// ten cot roi den ten form
        
        if($data['name']==null||$data['description']==null){
            Session::put('message','Cập nhật thất bại');
            return  Redirect::to('admin/edit-faculty/'.$id);}
     
        else{
            
            DB::table('faculty')->where('id',$id)->update($data);
            
            return  Redirect::to('admin/manage-faculties');}
    
           

    }
    public function delete_faculties(Request $request,$id){


            
            DB::table('faculty')->where('id',$id)->delete();
            Session::put('messages','Xóa thành công');

            return  Redirect::to('admin/manage-faculties');
    
           

    }
    //==================================department
    public function edit_department($id){

             
        $manage_faculties=DB::table('faculty')->get();
        $edit_new_department=DB::table('department')->orderBy('created_at','desc')->where('id',$id)->get();

        //$all_manage_faculties=view('admin.edit-department')
        $all_manage_department=view('admin.edit-department')->with('edit_new_department', $edit_new_department)->with('manage_faculties', $manage_faculties);
        

        return view('layouts.master')->with('admin.edit-department', $all_manage_department );
    }

    public function update_department(Request $request,$id){

        $data= array();
        $data['name']=$request->department_name;// ten cot roi den ten form
        $data['description']=$request->note_description;// ten cot roi den ten form
        $data['faculty_id']=$request->abc;
        $data['faculty']=$request->faculty;

        if($data['name']==null||$data['description']==null){
            Session::put('message','Cập nhật thất bại');
            return  Redirect::to('admin/edit-department/'.$id);}
     
        else{
            
            DB::table('department')->where('id',$id)->update($data);
            
            return  Redirect::to('admin/manage-departments');}
    
           

    }
    public function delete_department(Request $request,$id){


            
            DB::table('department')->where('id',$id)->delete();
            Session::put('messages','Xóa thành công');

            return  Redirect::to('admin/manage-departments');
    
           

    }
}

