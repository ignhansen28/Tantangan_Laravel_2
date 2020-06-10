<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function create(){
        return view('create-company');
    }

    public function store(Request $request){
        Company::create([
            'name' => $request->company_name
        ]);
        return back();
    }
}
