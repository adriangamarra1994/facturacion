<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('facturacion.companies.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('facturacion.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'razon_social' => 'required|string',

            'ruc' => [
                'required',
                'string',
                'regex:/^(10|20)\d{9}$/',
                // 'unique:companies,ruc'
                new \App\Rules\UniqueRucRuler(),
            ],

            'direccion' => 'required|string',
            'logo' => 'nullable|image',
            'sol_user' => 'required|string',
            'sol_pass' => 'required|string',

            //extension .pem
            'cert' => 'nullable|File|mimes:pem,txt',
            'client_id' => 'nullable|string',
            'client_secret' => 'nullable|string',
            'production' => 'nullable|boolean',
        ]);

        if($request->hasFile('logo')){
            $data['logo_path'] = $request->file('logo')->store('logos');
        }

        $data['cert_path'] = $request->file('cert')->store('certs');
        $data['user_id'] = auth()->id();


        Company::create($data);

        // return response()->json([
        //     'message' => 'Empresa creada',
        //     'company' => $company
        // ], 201);

        return redirect()->route('facturacion.companies.index')->with('alert', 'Registro exitoso..!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }

}
