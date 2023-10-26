<?php

namespace App\Http\Controllers;

use App\Models\Employees_Details;
use App\Models\school_management;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data=Employees_Details::all();
        return view('Index',compact('data'));
    }
    public function create()
    {
        return view('create');

    }
    public function edit($id)
    {
        $data=Employees_Details::find($id);
        return view('edit',compact('data'));

    }
    public function store(Request $request)
    {

        $request->validate(['name'=>'required',

            'age'=>'required','jd'=>'required','designation'=>'required','emailid'=>'required','sallery'=>'required'

        ]);
//        dd($request->all());
        Employees_Details::create($request->all());
        return redirect('Index');

    }
    public function update(Request $request, Employees_Details $employee_detail)
    {


        $request->validate(['name'=>'required',

            'age'=>'required','jd'=>'required','designation'=>'required','emailid'=>'required','sallery'=>'required'

        ]);
//        dd($request->all());
        $employee_detail->update($request->all());
        return redirect('Index');

    }
    public function delete(Employees_Details $employee_detail)
    {
        $employee_detail->delete();
        return redirect('Index');

    }

}
