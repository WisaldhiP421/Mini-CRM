<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        $pegawai = Employee::with('company')->get();
        $data = [
             'pegawai' => $pegawai,
             'company' => $company
        ];
        return view ('pegawai.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $pegawai = Employee::create([
            'fname' => $req->fname,
            'lname' => $req->lname,
            'email' => $req->email,
            'no_hp' => $req->no_hp,
            'user_id' => $req->user_id,
            
        ]);

        return redirect()->route('pegawai.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $pegawai = Employee::where('id', $req->id)->update([
            'fname' => $req->fname,
            'lname' => $req->lname,
            'email' => $req->email,
            'no_hp' => $req->no_hp,
            'user_id' => $req->user_id,
           
        ]);

        return redirect()->route('pegawai.index');
    }

    public function delete($id)
    {
        $pegawai = Employee::find($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index');

    }
    public function getPegawai($id)
    {
        $pegawai = Employee::find($id);

        return json_encode($pegawai);

    }
}
