<?php

namespace App\Http\Controllers;

use App\Career;
use App\Site_settings;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CareerController extends Controller
{
    public function _construct()
    {

    }

    public function index(Request $request)
    {
        if ($request->session()->has('admin')) {
            $data["title"] = "Career";
            $data["admin"] = $request->session()->get('admin');
            $data['site_settings'] = Site_settings::first();
            return view("admin/career", $data);
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/admin");
        }
    }
    public function career(Request $request)
    {
        if ($request->session()->has('admin')) {
            return Datatables::of(Career::orderBy("created_at", "desc"))->make(true);
        } else {
            return redirect("/admin");
        }
    }
}
