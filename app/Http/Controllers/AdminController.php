<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(Request $request){

        $result = DB::table('users')->first();

        if($result){
            Session::put('full_name',$result->full_name);
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

        $manage_faculties=DB::table('faculties')->orderBy('created_at','desc')->get();

        $all_manage_faculties=view('admin.manage-departments')->with('manage_faculties', $manage_faculties);

        return view('layouts.master')->with('admin.manage-departments', $all_manage_faculties);
    }

    public function manage_faculties(){
        $manage_faculties=DB::table('faculties')->orderBy('created_at','desc')->get();

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

        $manage_faculties=DB::table('faculties')->orderBy('id','asc')->get();

        $all_manage_faculties=view('admin.new-department')->with('manage_faculties', $manage_faculties);

        return view('layouts.master')->with('admin.new-department', $all_manage_faculties);
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
    // =====================================================


    /**
     * THIS IS FOR ANNOUNCEMENTS FUNCTION IN MANAGEMENT
     * =====================================================
     * @param Request $request
     * @return void
     */
    public function save_announcement(Request $request){
        $data = [];
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['visibility']=$request->input('visibility');

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'title' => 'required|min:5|max:255',
                'content' => 'required|min:5',
                'visibility' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('announcements')->insert($data);
            return redirect('admin/announcements/new')->withSuccess('Post Created Successfully!');
        }

    }

    public function edit_announcement(Request $request, $id){

        $edit_new_announcement=DB::table('announcements')->orderBy('created_at','desc')->where('id',$id)->get();

        $all_manage_announcements=view('admin.edit-announcement')->with('edit_new_announcement', $edit_new_announcement);

        return view('layouts.master')->with('admin.edit-announcement', $all_manage_announcements);
    }

    public function update_announcement(Request $request, $id){
        $data = [];
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['visibility']=$request->input('visibility');

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'title' => 'required|min:5|max:255',
                'content' => 'required|min:5',
                'visibility' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('announcements')->where('id',$id)->update($data);
            return redirect('/admin/announcements')->withSuccess('Post Created Successfully!');
        }

    }

    public function delete_announcement(Request $request, $id){

        DB::table('announcements')->where('id', $id)->delete();
        Alert::success('Success Title', 'Success Message');
        return  redirect('admin/announcements');
    }
    // =====================================================


    /**
     * THIS IS FOR ANNOUNCEMENTS AT HOME PAGE
     * =====================================================
     * @param Request $request
     * @return void
     */
    public function save_announcement_home(Request $request){

        $data = [];
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['visibility']=$request->input('visibility');

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'title' => 'required|min:5|max:255',
                'content' => 'required|min:5',
                'visibility' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('announcements')->insert($data);
            return redirect('admin')->withSuccess('Post Created Successfully!');
        }

    }

    public function edit_announcement_home(Request $request, $id){
        $edit_new_announcement=DB::table('announcements')->where('id', $id)->get();

        $all_manage_announcements=view('admin.edit-announcement-home')->with('edit_new_announcement', $edit_new_announcement);

        return view('layouts.master')->with('admin.edit-announcement-home', $all_manage_announcements);
    }

    public function update_announcement_home(Request $request, $id){

        $data = [];
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['visibility']=$request->input('visibility');

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'title' => 'required|min:5|max:255',
                'content' => 'required|min:5',
                'visibility' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('announcements')->where('id',$id)->update($data);
            return redirect('admin')->withSuccess('Post Created Successfully!');
        }
    }

    public function delete_announcement_home(Request $request, $id){

        DB::table('announcements')->where('id',$id)->delete();

        Session::put('message','Xóa thành công');

        return  redirect('admin');
    }
    // =====================================================

    /**
     * THIS IS FOR FACULTY FUNCTION
     * =====================================================
     * @param Request $request
     * @return void
     */
    public function save_new_faculty(Request $request){

        $data = [];
        $data['faculty_name'] = $request->input('faculty_name');
        $data['description'] = $request->input('description');

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'faculty_name' => 'required|min:3|max:100|unique:faculties',
                'description' => 'required|max:500',
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('faculties')->insert($data);
            return redirect('/admin/faculties/new')->withSuccess('Post Created Successfully!');
        }
    }

    public function save_new_department(Request $request){
    // Nó không hiển thị thông báo là vì hiện thị faculty trong new-department 

        $data = [];
        $data['department_name'] = $request->input('department_name');
        $data['description'] = $request->input('description');
        // $data['faculty_name'] = $request->input('abc');
        /**
         * TODO: Cần sửa chỗ này
         */

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'department_name' => 'required|min:3|max:100|unique:departments',
                'description' => 'required|max:500',
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('departments')->insert($data);
            return redirect('/admin/departments/new')->withSuccess('Post Created Successfully!');
        }

    }

    public function edit_faculties(Request $request, $id){
        $edit_new_faculty=DB::table('faculties')->orderBy('created_at','desc')->where('id',$id)->get();

        $all_manage_faculty=view('admin.edit-faculty')->with('edit_new_faculty', $edit_new_faculty);


        return view('layouts.master')->with('admin.edit-faculty', $all_manage_faculty);
    }

    public function update_faculties(Request $request,$id){
        $data = [];
        $data['name'] = $request->input('faculty_name');
        $data['description'] = $request->input('description');
       // $data['visibility']=$request->input('visibility');

        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'faculty_name' => 'required|min:3|max:100', //form
                'description' => 'required|max:500',
               // 'visibility' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }

            DB::table('faculties')->where('id',$id)->update($data);
            return redirect('admin/faculties')->withSuccess('Successfully!');
        }

    }

    public function delete_faculties(Request $request,$id){

        DB::table('faculties')->where('id',$id)->delete();
        Session::put('messages','Xóa thành công');

        return  redirect('admin/faculties');

    }

}

