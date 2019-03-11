<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Site_settings;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class EmployeeController extends Controller
{
    public function _construct()
    {

    }

    public function index(Request $request)
    {
        if ($request->session()->has('admin')) {
            $data["title"] = "Employee";
            $data["admin"] = $request->session()->get('admin');
            $data['site_settings'] = Site_settings::first();
            return view("admin/employee", $data);
        } else {
            $request->session()->flash('fail', 'Log In First To Access The Panel!');
            return redirect("/buzanom_security");
        }
    }
    public function employee_all(Request $request)
    {
        if ($request->session()->has('admin')) {
            return Datatables::of(
                Employee::selectRaw("employee.*,department.department,post.department as post")
                ->join("department","department.id","=","employee.department_id")
                ->join("department as post","post.id","=","employee.post_id")
                ->orderBy("employee.created_at", "desc")
            )->make(true);
        } else {
            return redirect("/buzanom_security");
        }
    }
    public function employee_current(Request $request)
    {
        if ($request->session()->has('admin')) {
            return Datatables::of(
                    Employee::selectRaw("employee.*,department.department,post.department as post")
                    ->join("department","department.id","=","employee.department_id")
                    ->join("department as post","post.id","=","employee.post_id")
                    ->where("employee.status",1)
                    ->orderBy("employee.created_at", "desc")
                )->make(true);
        } else {
            return redirect("/buzanom_security");
        }
    }
    public function employee_previous(Request $request)
    {
        if ($request->session()->has('admin')) {
            return Datatables::of(
                    Employee::selectRaw("employee.*,department.department,post.department as post")
                    ->join("department","department.id","=","employee.department_id")
                    ->join("department as post","post.id","=","employee.post_id")
                    ->where("employee.status",0)
                    ->orderBy("employee.created_at", "desc")
                )->make(true);
        } else {
            return redirect("/buzanom_security");
        }
    }
}
