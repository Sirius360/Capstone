<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Validator;




class AdminController extends Controller
{
    public function index(Request $request){



            $result = DB::table('users')->first();
            if($result){

             // Session::put('last_name',$result->last_name);
             Session::put('name',$result->name);
            // Session::put('id',$result->id);
        }

         $manage_announcements=DB::table('announcements')->orderBy('created_at','desc')->get();

         $all_manage_announcements=view('admin.home')->with('manage_announcements', $manage_announcements);


         return view('layouts.master')->with('admin.home', $all_manage_announcements);
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
    public function edit_topic(){
        return view('admin.edit-topic');
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

    //INPUT ==========================================
    public function save_announcement(Request $request){
        $data = [];
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['announcement_visibility']=$request->input('visibility');

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'title' => 'required|min:5|max:255|unique:announcements',
                'content' => 'required|min:5',
                'visibility' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('announcements')->insert($data);
            return redirect('admin')->withSuccess('Post Created Successfully!');
        }

        // $data = array();
        // $data['title']=$request->name;// ten cot roi den ten form
        // $data['content']=$request->description;// ten cot roi den ten form
        // $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form
        // if($data['title']==null||$data['content']==null||$data['announcement_visibility']==null){
        //     Alert::toast('Đăng thất bại!', 'error');
        //     return  redirect('admin/announcements/new');
        // }

        // else{

        //     DB::table('announcements')->insert($data);
        //     Alert::toast('Đăng thành công!', 'success');
        //     return  redirect('admin/announcements/new');
        // }

    }

    public function save_announcement_home(Request $request){
        $data = array();
        $data['title']=$request->note_name;// ten cot roi den ten form
        $data['content']=$request->note_description;// ten cot roi den ten form
        $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form
        if($data['title']==null||$data['content']==null||$data['announcement_visibility']==null){
            Alert::toast('Đăng thất bại!', 'error');
            return redirect('admin');
        }
        else{

            DB::table('announcements')->insert($data);
            return redirect('admin');
        }

    }

    // =========== update, edit & delete function  ===========
    // =======================================================
    public function edit_announcement($id){
        $edit_new_announcement=DB::table('announcements')->orderBy('created_at','desc')->where('id',$id)->get();

        $all_manage_announcements=view('admin.edit-announcement')->with('edit_new_announcement', $edit_new_announcement);

        return view('layouts.master')->with('admin.edit-announcement', $all_manage_announcements);
    }

    public function edit_announcement_home($id){
        $edit_new_announcement=DB::table('announcements')->where('id', $id)->get();

        $all_manage_announcements=view('admin.edit-announcement-home')->with('edit_new_announcement', $edit_new_announcement);

        return view('layouts.master')->with('admin.edit-announcement-home', $all_manage_announcements);
    }

    public function update_announcement(Request $request, $id){

        $data = array();
        $data['title']=$request->name;// ten cot roi den ten form
        $data['content']=$request->description;// ten cot roi den ten form
        $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form

        if($data['title']==null||$data['content']==null||$data['announcement_visibility']==null){

            Session::put('message','Cập nhật thất bại');

            return  redirect('admin/announcements/management/'.$id.'/edit');}

        else{

            DB::table('announcements')->where('id',$id)->update($data);

            return  redirect('admin/announcements');
        }

    }
    public function update_announcement_home(Request $request, $id){

        $data = array();
        $data['title']=$request->name;// ten cot roi den ten form
        $data['content']=$request->description;// ten cot roi den ten form
        $data['announcement_visibility']=$request->visibility;// ten cot roi den ten form

        if($data['title']==null||$data['content']==null||$data['announcement_visibility']==null){

            Session::put('message','Cập nhật thất bại');

            return  redirect('admin/announcements/'.$id.'/edit');}

        else{

            DB::table('announcements')->where('id',$id)->update($data);

            return  redirect('admin');
        }

    }
    public function delete_announcement(Request $request, $id){

        DB::table('announcements')->where('id',$id)->delete();

        Session::put('message','Xóa thành công');

        return  redirect('admin/announcements');

    }

    public function delete_announcement_home(Request $request, $id){

        DB::table('announcements')->where('id',$id)->delete();

        Session::put('message','Xóa thành công');

        return  redirect('admin');
    }
}
