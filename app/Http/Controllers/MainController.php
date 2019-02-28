<?php

namespace App\Http\Controllers;

use App\Career;
use App\Contactus;
use App\Site_settings;
use Illuminate\Http\Request;

class MainController extends Controller
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
            $data['title'] = "COMING SOON";
            $data['site_settings'] = Site_settings::first();
            $data['time'] = date("Y-m-d H:i:s", strtotime("2019-02-09 12:36:00"));
            return view("user/coming_soon", $data);
        } else {
            $data['title'] = "WELCOME";
            $data['site_settings'] = Site_settings::first();
            return view("user/main", $data);
        }
    }
    public function contactus(Request $request){  
        $data = array(
            "name"=>$request->input('name'),
            "email"=>$request->input('email'),
            "subject"=>$request->input('subject'),
            "message"=>$request->input('message'),
        );
        $result = Contactus::insertGetid($data);
        echo 1;
    }
    public function career(Request $request){
        $data['title'] = "CAREER";
        $data['site_settings'] = Site_settings::first();
        return view("user/career/form",$data);
    }
    public function careerpost(Request $request){
        $data = array(
			"position"=>$request->input('position'),
            "name"=>$request->input('name'),
            "email"=>$request->input('email'),
            "phone"=>$request->input('contact'),
            "gender"=>$request->input('gender'),
			"objective"=>$request->input('objective'),
			"qualification"=>$request->input('qualification'),
			"grade"=>$request->input('grade'),
			"employeement"=>$request->input('employeement'),
            "address"=>$request->input('address'),            
        );
        $result = Career::insertGetid($data);
		if($result){
			$request->session()->flash('success', 'Career Applied Successfully!');
			return redirect("/careers");
		}
		else {
			$request->session()->flash('fail', 'Career Applied Failed ! Try Again');
			return redirect("/careers");
		}
    }
}
