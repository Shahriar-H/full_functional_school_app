<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Scrollnotice;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Notice;
use App\Models\Writting;
use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\String\b;

class DashboardContrller extends Controller
{
    function admin_system(){
        if(session()->has('userinfo')){
            return view('admin_system');
        }else{
            return view('/admin_system');
        }
    }
    function dash_logout(Request $req){
        if(session()->has('userinfo')){
            session()->forget('userinfo');
            return view('/admin_system');
        }else{
            return view('/admin_system');
        }
    }
    function dash_home(){
        if(session()->has('userinfo')){
            return view('dash_home');
        }else{
            return view('/admin_system');
        }
    }
    function dash_adminadd(){
        if(session()->has('userinfo')){
            return view('dash_admininfo');
        }else{
            return view('/admin_system');
        }
    }
    function dash_adminaddnew(Request $req){
        if(session()->has('userinfo')){
        $newuser = new User;
        $newuser->username = $req->input('username');
        $newuser->email = $req->input('email');
        $newuser->phone = $req->input('phone');
        $newuser->password = Hash::make($req->input('password'));
        $newuser->save();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function adminlogin(Request $req){
        $emailis = $req->input('email');
        $phoneis = $req->input('phone');
        $password = $req->input('password');

        $users = User::where(['email'=>$emailis])->first();
        if($users){
            if(Hash::check($password, $users->password) && $users['phone']==$phoneis){
                $req->session()->put('userinfo',$users);
                return redirect('/dash_home');
            }else{
                $req->session()->flash('userinfo','Wrong Information Given');
                return view('/admin_system');
            }
        }else{
            $req->session()->flash('userinfo','Wrong Information Given');
            return view('/admin_system');
        }


    }
    function getheader(){
        if(session()->has('userinfo')){
            $logois = Logo::all();
            return view('dash_logo',['logois'=>$logois]);
        }else{
            return view('/admin_system');
        }
    }
    function logoup($id, Request $req){
        if(session()->has('userinfo')){
        $rightphoto = Logo::find($id);
        $rightphoto->mainlogo = $req->file('logo')->store('myfiles');
        $rightphoto->save();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function home(Request $req)
    {
        $logoandphoto = Logo::all();
        return view('home',['logos'=>$logoandphoto]);
        //return $logoandphoto;
    }
    function slider(){
        if(session()->has('userinfo')){
            $allslider = Slider::all();
            return view('dash_slider',['slide'=>$allslider]);
        }else{
            return view('/admin_system');
        }
    }
    function slideup(Request $req){
        if(session()->has('userinfo')){
        $upslide = new Slider;
        $upslide->slide = $req->file('slide')->store('myfiles');
        $upslide->caption = $req->input('caption');
        $upslide->save();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function scrollnotice(){
        if(session()->has('userinfo')){
        $allscrollnotice = Scrollnotice::all();
        return view('dash_scrollnotice',['scrollnotic'=>$allscrollnotice]);
        }else{
            return view('/admin_system');
        }
    }
    function scrollnoticeup(Request $req){
        if(session()->has('userinfo')){
        $scrollnotice = new Scrollnotice;
        $scrollnotice->notice = $req->input('snotice');
        $scrollnotice->save();
        return back();
        }else{
            return view('/admin_system');
        }
    }

    function allteachers(){
        $allt = Teacher::where('authtype','Teacher')->get();
        return view('allteacherlist', ['allt'=>$allt]);
    }
    function allmanagingcommity(){
        $allt = Teacher::where('authtype','MMC')->get();
        return view('allteacherlist', ['allt'=>$allt]);
    }
    function teachercon(){
        if(session()->has('userinfo')){
        $teacher = Teacher::all();
        return view('dash_teacher',['teacher'=>$teacher]);
        }else{
            return view('/admin_system');
        }

    }
    function teacherup(Request $req){
        if(session()->has('userinfo')){
        $teacher = new Teacher;
        $teacher->tname = $req->input('tname');
        $teacher->authtype = $req->input('authtype');
        $teacher->tphoto = $req->file('tphoto')->store('myfiles');
        $teacher->teducation = $req->input('teducation');
        $teacher->tpodobi = $req->input('tdesignation');
        $teacher->tabout = $req->input('tword');
        $teacher->save();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function teachereditup(Request $req,$id){
        if(session()->has('userinfo')){
        $teacher = Teacher::find($id);
        $teacher->tname = $req->input('tname');
        $teacher->authtype = $req->input('authtype');

        if($req->file('tphoto') !=''){
            $teacher->tphoto = $req->file('tphoto')->store('myfiles');
        }else{
            $teacher->tphoto = $req->input('unchangephoto');
        }        $teacher->teducation = $req->input('teducation');
        $teacher->tpodobi = $req->input('tdesignation');
        $teacher->tabout = $req->input('tword');
        $teacher->save();
        return redirect('/teachercon');
        }else{
            return view('/admin_system');
        }
    }

    function dash_students(){
        if(session()->has('userinfo')){
            return view('dash_students');
        }else{
            return view('/admin_system');
        }
    }
    function dash_students_save(Request $req){
        if(session()->has('userinfo')){
        $studentup = new Student;
        $studentup->sname = $req->input('sname');
        $studentup->sphoto = $req->file('sphoto')->store('myfiles');
        $studentup->sclass = $req->input('sclass');
        $studentup->beton = $req->input('sbeton');
        $studentup->sroll = $req->input('sroll');
        $studentup->sphone = $req->input('sphone');
        $studentup->sid = $req->input('sid');
        $studentup->save();

        return back();
        }else{
            return view('/admin_system');
        }
    }
    function dash_students_edit(Request $req, $id){
        if(session()->has('userinfo')){
        $studentup = Student::find($id);
        $studentup->sname = $req->input('sname');
        if($req->file('sphoto')==''){
            $studentup->sclass = $req->input('sphotonotchange');
        }else{
            $studentup->sphoto = $req->file('sphoto')->store('myfiles');
        }
        $studentup->sclass = $req->input('sclass');
        $studentup->beton = $req->input('sbeton');
        $studentup->monthdate = $req->input('monthdate');
        $studentup->comment = $req->input('comment');
        $studentup->sroll = $req->input('sroll');
        $studentup->sphone = $req->input('sphone');
        $studentup->sid = $req->input('sid');
        $studentup->save();
        $cl = $req->input('sclass');
        return redirect('/dash_studentslist'.'/'.$cl);
        }else{
            return view('/admin_system');
        }
    }
    function dash_studentslist($class){
        if(session()->has('userinfo')){
        $classStudent = Student::where('sclass',$class)->get();
        return view('dash_studentslist',['cstudents'=>$classStudent]);
        }else{
            return view('/admin_system');
        }
    }

    function studentsloginresult(Request $req){
        $studentid = $req->input('studentid');
        $sinfo = Student::where('sid', $studentid)->first();
        if($sinfo){
            return view('studentsloginresult',['sinfo'=>$sinfo]);
        }else{
            $req->session()->flash('erroris','Wrong Student ID');
            return view('aboutstudents');
        }
    }

    function payplease($sid){
        $findstudent = Student::where('sid',$sid)->first();
        return view('exampleHosted',['sinfois'=>$findstudent]);
    }

    function dash_notice(Request $req){
        if(session()->has('userinfo')){
        $getnotice = DB::table('notices')->orderBy('id','DESC')->get();
        return view('dash_notice',['getnotice'=>$getnotice]);
        }else{
            return view('/admin_system');
        }
    }
    function noticeup(Request $req){
        if(session()->has('userinfo')){
        $nd = date('d');
        $nm = date('M');
        $noticeup = new Notice;
        $noticeup->noticefile = $req->file('nfile')->store('myfiles');
        $noticeup->title = $req->input('title');
        $noticeup->ndate = $nd;
        $noticeup->nmonth = $nm;
        $noticeup->save();
        return back();
        }else{
            return view('/admin_system');
        }

    }
    function deletenotice($nid){
        if(session()->has('userinfo')){
        $findnotice = Notice::find($nid);
        $findnotice->delete();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function dash_writting(){
        if(session()->has('userinfo')){
        $write = Writting::all();
        return view('dash_writting',['writting'=>$write]);
        }else{
            return view('/admin_system');
        }
    }
    function writtingup(Request $req){
        if(session()->has('userinfo')){
        $writeup = new Writting;
        $writeup->title = $req->input('title');
        $writeup->category = $req->input('category');
        $writeup->wname = $req->input('wname');
        $writeup->postbody = $req->input('pbody');
        $writeup->save();
        return back();
        }else{
            return view('/admin_system');
        }

    }
    
    function deletewrite($pid){
        if(session()->has('userinfo')){
            $depost = Writting::find($pid);
            $depost->delete();
            return back();
        }else{
            return view('/admin_system');
        }
    }
    function seepost($id){
        
        $getthepost = Writting::where('id',$id)->first();
        return view('viewpost',['seepost'=>$getthepost]);
    }

    function dash_photo(){
        if(session()->has('userinfo')){
        $getgallery = Gallery::all();
        return view('dash_photo',['photo'=>$getgallery]);
        }else{
            return view('/admin_system');
        }
    }

    function galleryup(Request $req){
        if(session()->has('userinfo')){
        $gallery = new Gallery;
        $gallery->gfile = $req->file('gfile')->store('myfiles');
        $gallery->title = $req->input('title');
        $gallery->save();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function gallery(){
        $photo = Gallery::paginate(3);
        return view('gallery',['photo'=>$photo]);
    }
    function dash_video(){
        if(session()->has('userinfo')){
        $getvideo = Video::paginate(4);
        return view('dash_video',['getvideo'=>$getvideo]);
        }else{
            return view('/admin_system');
        }
    }
    function video(){
        $getv = Video::all();
        return view('video',['getvideo'=>$getv]);
    }
    function aboutteacher($id){
        $geaboutteacher = Teacher::find($id);
        return view('aboutteachers',['getabout'=>$geaboutteacher]);
    }

    function videoup(Request $req){
        if(session()->has('userinfo')){
        $videoup = new Video;
        $videoup->vfile = $req->file('vfile')->store('myfiles');
        $videoup->save();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function dash_editteacher($id){
        if(session()->has('userinfo')){
        $editt = Teacher::find($id);
        return view('dash_editteacher', ['teacher'=>$editt]);
        }else{
            return view('/admin_system');
        }
    }
    function deletevideo($id){
        if(session()->has('userinfo')){
        $dv = Video::find($id);
        $dv->delete();
        return back();
        }else{
            return view('/admin_system');
        }
    }

    function deletescrollnotic($id){
        if(session()->has('userinfo')){
        $dv = Scrollnotice::find($id);
        $dv->delete();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function deleteteacher($id){
        if(session()->has('userinfo')){
        $dv = Teacher::find($id);
        $dv->delete();
        return back();
        }else{
            return view('/admin_system');
        }
    }
    function dash_studentedit($id){
        if(session()->has('userinfo')){
        $students=Student::find($id);
        return view('dash_studentedit',['studentis'=>$students]);
        }else{
            return view('/admin_system');
        }
    }

    function golden_jubilee(){
        return view('golden_jubilee');
    }
    function dashboard(){
        if(session()->has('userinfo')){
            return view('dashboardmaster');
        }else{
            return view('/admin_system');
        }
    }














}
