<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::all();
        return view('company.index', [
            'company' => $company
        ]);
    }

    public function create(Request $req){
        $file_name = uniqid('logo-') . '.' .$req->file('logo')->extension();
        Storage::putFileAs('public/images', $req->file('logo'), $file_name );
        Company::create([
            'name' => $req->name,
            'email' => $req->email,
            'logo' => $file_name,
            'website' => $req->website,
        ]);
        return redirect()->route('company.index');
    }

    public function update(Request $req){
        $company = Company::find($req->id);
        if($req->hasFile('logo'))   
        Storage::putFileAs('public/images', $req->file('logo'), $company->logo );
        $company->update([
            'name' => $req->name,
            'email' => $req->email,
            'website' => $req->website,
        ]);
        return redirect()->route('company.index');
    }

    public function delete($id){
        $company = Company::find($id);
        $company->delete();
        if (Storage::exists('images/'.$company->logo)){
            Storage::delete('images/'.$company->logo);
        }
        return redirect()->route('company.index');
    }

    public function getCompany($id){
        $company = Company::find($id);
        return json_encode($company);
    }
}
