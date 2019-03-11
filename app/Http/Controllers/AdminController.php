<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Career;
use App\Employee;
use App\Emp_Track;
use App\Site_settings;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function _construct()
    {

    }

    public function index(Request $request)
    {
        if ($request->input("debug")) {
            $debug = $request->input("debug");
        } else {
            $debug = env('APP_ENV');
        }
        if ($debug == "development") {
            $data['title'] = "UNDER CONSTRUCTION";
            $data['time'] = date("Y-m-d H:i:s", strtotime("2019-02-09 12:36:00"));
            $data['site_settings'] = Site_settings::first();
            return view("admin/coming_soon", $data);
        } else {
            if ($request->session()->has('admin')) {
                return redirect("/dashboard");
            } else {
                $data["title"] = "Login";
                return view("admin/index", $data);
            }
        }
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $type = $request->input('type');
        if($type == "A"){
            $result = Admin::whereRaw("email = '" . $email . "' and password = '" . $password . "'")->count();
            if ($result != 0) {
                $data = Admin::whereRaw("email = '" . $email . "' and password = '" . $password . "'")->first();
                $request->session()->put('admin', $data);
                $request->session()->flash('success', 'Logged In Successfully!');
                return redirect("/dashboard");
            } else {
                $request->session()->flash('fail', 'Wrong Login Credentials! Try Again');
                return redirect("/buzanom_security");
            }
        }else if($type == "E"){
            $result = Employee::whereRaw("email = '" . $email . "' and password = '" . $password . "'")->count();
            if ($result != 0) {
                $data = Employee::whereRaw("email = '" . $email . "' and password = '" . $password . "'")->first();
                $request->session()->put('employee', $data);
                $request->session()->flash('success', 'Logged In Successfully!');
                return redirect("/edashboard");
            } else {
                $request->session()->flash('fail', 'Wrong Login Credentials! Try Again');
                return redirect("/buzanom_security");
            }
        }else{
            $request->session()->flash('fail', 'Select Type & Try Again');
            return redirect("/buzanom_security");
        }
    }

    public function dashboard(Request $request)
    {
        if ($request->session()->has('admin')) {
            $data["title"] = "Dashboard";
            $data["admin"] = $request->session()->get('admin');
            $data['site_settings'] = Site_settings::first();
            $data["pcareer"] = Career::where("status",0)->count();
            $data["tcareer"] = Career::count();
            $cratio = $data["pcareer"] / $data["tcareer"];
            if($cratio >= "0.6" || $cratio <= "0.9"){
                $clabel = "text-danger";
            }else if($cratio <= "0.6" || $cratio >= "0.3"){
                $clabel = "text-warning";
            }else{
                $clabel = "";
            }
            $data["text_color"] = $clabel;
            $data["git_issues"] = 0;
            $data["pending_projects"] = 0;
            $data["pending_leaves"] = 0;
            return view("admin/dashboard", $data);
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function edashboard(Request $request)
    {
        if ($request->session()->has('employee')) {
            $data["title"] = "Employee - Dashboard";
            $data["employee"] = $employee = $request->session()->get('employee');
            $elogincount = Emp_Track::where(array("emp_id"=>$employee["id"],"date"=>date("Y-m-d")))->count();
            if($elogincount > 0){
                $data["timeleft"] = Emp_Track::where(array("emp_id"=>$employee["id"],"date"=>date("Y-m-d")))->orderBy("created_at","desc")->first();
            }else{
                Emp_Track::insertGetid(array("emp_id"=>$employee["id"],"date"=>date("Y-m-d"),"starttime"=>date("H:i:s"),"timeleft"=>"08:00:00","status"=>"P"));
            }
            $data['site_settings'] = Site_settings::first();
            return view("admin/edashboard", $data);
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function facetrack(Request $request){
        if ($request->session()->has('employee')) {
            $employee = $request->session()->get('employee');
            $faceloop = $request->input('count');
            $lefttime = $request->input('lefttime');
            $workedmin = $faceloop;
            echo $result = Emp_Track::where(array("emp_id"=>$employee["id"],"date"=>date("d-m-Y")))->update(array("faceloop"=>$faceloop,"timeleft"=>$lefttime));
        } else {
            echo 0;
        }
    }

    public function profile(Request $request)
    {
        if ($request->session()->has('admin')) {
            $data["title"] = "Profile";
            $admin = $request->session()->get('admin');
            $data["admin"] = Admin::whereRaw("id = '" . $admin['id'] . "'")->first();
            $data['site_settings'] = Site_settings::first();
            return view("admin/profile", $data);
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function adminemailcheck(Request $request)
    {
        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $email = $request->input('email');
            $ecount = Admin::whereRaw("id != '" . $admin['id'] . "' and email = '" . $email . "'")->count();
            echo $ecount;
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function adminmobilecheck(Request $request)
    {
        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $mobile = $request->input('mobile');
            $mcount = Admin::whereRaw("id != '" . $admin['id'] . "' and mobile = '" . $mobile . "'")->count();
            echo $mcount;
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function adminoldpwdcheck(Request $request)
    {
        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $oldpwd = $request->input('oldpwd');
            $mcount = Admin::whereRaw("id == '" . $admin['id'] . "' and password = '" . $oldpwd . "'")->count();
            echo $mcount;
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }   
    }

    public function adminusernamecheck(Request $request)
    {
        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $username = $request->input('username');
            $ucount = Admin::whereRaw("id != '" . $admin['id'] . "' and username = '" . $username . "'")->count();
            echo $ucount;
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function uploadadminprofilepic(Request $request){
        if($request->hasFile('profile_pic')) {
            $admin = $request->session()->get('admin');
            $file = $request->file('profile_pic');
            $name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
            $image['filePath'] = $name;
            $file->move(public_path().'/assets/buzanom_security/uploads', $name);
            $result = Admin::whereRaw("id != '" . $admin['id'] . "'")->update(array("profile_pic",$name));
            echo $result;
        }
    }

    public function site_settings(Request $request){
        if ($request->session()->has('admin')) {
            $data["title"] = "Site Settings";
            $admin = $request->session()->get('admin');
            $data["admin"] = Admin::whereRaw("id = '" . $admin['id'] . "'")->first();
            $data['site_settings'] = Site_settings::first();
            return view("admin/site_settings", $data);
        }else{
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function site_setting_update(Request $request){
        if ($request->session()->has('admin')) {
            $data = array(
                "address1"=>$request->input("address1"),
                "address2"=>$request->input("address2"),
                "lat"=>$request->input("lat"),
                "lang"=>$request->input("lang"),
                "support_email"=>$request->input("support_email"),
                "info_email"=>$request->input("info_email"),
                "hr_email"=>$request->input("hr_email"),
                "contact1"=>$request->input("contact1"),
                "contact2"=>$request->input("contact2"),
                "facebook_link"=>$request->input("facebook_link"),
                "linkedin_link"=>$request->input("linkedin_link"),
                "pinterest_link"=>$request->input("pinterest_link"),
                "twitter_link"=>$request->input("twitter_link"),
                "googleplus_link"=>$request->input("googleplus_link"),
                "skype_link"=>$request->input("skype_link"),
                "github_link"=>$request->input("github_link"),
                "tagline"=>$request->input("tagline")
            );
            if($request->hasFile('logo')) {
                $file = $request->file('logo');
                $name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
                $image['filePath'] = $name;
                $file->move(public_path().'/assets/buzanom_security/uploads', $name);
                $data["logo"] = $name;
            }
            Site_settings::where("id","=","1")->update($data);
            $request->session()->flash('success', 'Site Settings updated Successfully!');
            return redirect("/profile");
        }else{
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function changepassword(Request $request){
        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $password = $request->input("newpwd");
            Account::where("id","=",$admin["id"])->update(array("password"=>$password));
            $request->session()->flash('success', 'Password updated Successfully!');
            return redirect("/buzanom_security");
        }else{
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }

    public function logout(Request $request)
    {
        if ($request->session()->has('admin')) {
            $request->session()->forget('admin');
            $request->session()->flush();
            $request->session()->flash('success', 'Logged Out Successfully!');
            return redirect("/buzanom_security");
        } else if ($request->session()->has('employee')) {
            $employee = $request->session()->get('employee');
            $endtime = date("Y-m-d");
            $timeleft = $request->input("timeleft");
            $faceloop = $request->input("faceloop");
            Emp_Track::where(array("emp_id"=>$employee["id"],"date"=>date("Y-m-d")))->update(array("timeleft"=>$timeleft,"faceloop"=>$faceloop,"endtime"=>$endtime));
            $employee = $request->session()->forget('employee');
            $request->session()->flush();
            $request->session()->flash('success', 'Logged Out Successfully!');
            return redirect("/buzanom_security");
        }else{
            return redirect("/buzanom_security");
        }
    }
}
