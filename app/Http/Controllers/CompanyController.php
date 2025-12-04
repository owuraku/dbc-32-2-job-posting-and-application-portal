<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyCreateRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class CompanyController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [
            new Middleware('permission:companies.read', only: ['index']),
            new Middleware('permission:companies.create', only: ['create', 'store']),
            new Middleware('permission:companies.update', only: ['edit', 'update']),
            new Middleware('permission:companies.delete', only: ['destroy']),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $companies = Company::all();
        return view('admin.companies.index', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyCreateRequest $request)
    {
        // using save(): create an object, set properties and save the object
        // $company = new Company();
        // $company->name = $request->input('name');
        // $company->address = $request->input('address');
        // $company->contact = $request->input('contact');
        // $company->save();
        // return $company;

        // using create(): pass an array of properties to the create method
        $company = Company::create($request->validated());
        return redirect(route('admin.companies.index'))->with('status', [
            'message' => $company->name . ' created successfully',
            'error' => false
        ]);;
        // return $company;
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
        return view('admin.companies.show', [
            'company' => $company
        ]);
        // return $company;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {

        return view('admin.companies.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyCreateRequest $request, Company $company)
    {
        // similar to create, only difference is no object is created (i.e new Company())
        // $company->name = $request->input('name');
        // $company->address = $request->input('address');
        // $company->contact = $request->input('contact');
        // $company->save();
        // return $company;

        // method 2
        $company->update($request->validated()); // supply an array of properties to update
        return redirect(route('admin.companies.index'))->with('status', [
            'message' => $company->name . ' updated successfully',
            'error' => false
        ]);

        // method 3
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect(route('admin.companies.index'))->with('status', [
            'message' => "Company $company->name has been deleted successfully",
        ]);
    }
}
