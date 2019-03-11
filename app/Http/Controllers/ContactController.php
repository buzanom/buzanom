<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\Site_settings;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ContactController extends Controller
{
    public function _construct()
    {

    }

    public function index(Request $request)
    {
        if ($request->session()->has('admin')) {
            $data["title"] = "Contact";
            $data["admin"] = $request->session()->get('admin');
            $data['site_settings'] = Site_settings::first();
            return view("admin/contact", $data);
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }
    public function contact(Request $request)
    {
        if ($request->session()->has('admin')) {
            return Datatables::of(Contactus::all())->make(true);
        } else {
            return redirect("/buzanom_security");
        }
    }
}
