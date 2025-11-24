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
        $companies = Company::all();
        // $companyName = 'Ghana India -Kofi Annan Centre of Excellence in ICT';
        $companyName = 'Ghana India -Kofi Annan Centre of Excellence in ICT';

        // return $companies;
        return view('companies.index', [
            'company' => $companyName,
            'age' => 10,
            'registered' => false,
            'listOfFruits' => ['Banana', 'Mango', 'Orange'],
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return csrf_token();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // using save(): create an object, set properties and save the object
        // $company = new Company();
        // $company->name = $request->input('name');
        // $company->address = $request->input('address');
        // $company->contact = $request->input('contact');
        // $company->save();
        // return $company;

        // using create(): pass an array of properties to the create method
        $data = $request->all();
        $company = Company::create($data);
        return $company;
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        // show(Company $company) : Laravel will automatically fetch record from the db with the specified id
        // find($id) : fetch a record from the db with the specified id
        // findOrFail($id) : fetch a record from the db with the specified id, throw a 404 error when not found
        // $c = Company::findOrFail($company);
        // return $c;
        return $company;
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
        // similar to create, only difference is no object is created (i.e new Company())
        // $company->name = $request->input('name');
        // $company->address = $request->input('address');
        // $company->contact = $request->input('contact');
        // $company->save();
        // return $company;

        // method 2
        $company->update($request->all()); // supply an array of properties to update
        return $company;

        // method 3
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return [
            "message" => "Company $company->name has been deleted successfully"
        ];
    }
}
