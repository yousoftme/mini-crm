<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('created_at', 'desc')->paginate(10);
        return Inertia::render('Companies', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ]);

        if ($request->hasFile('attachment')) {
            $name =$request->file('attachment')->getClientOriginalName();
            $path = $request->file('attachment')->storeAs('/companies/'.$company->id.'/logo', $name, 'public');
        }
        $company->update([
            'logo' => url('storage/'.$path),
        ]);
        return response()->json($company);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request)
    {
        $company = Company::find($request->company_id);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ];
        if ($request->hasFile('attachment')) {
            $name =$request->file('attachment')->getClientOriginalName();
            Storage::deleteDirectory('/companies/'.$company->id.'/logo');
            $path = $request->file('attachment')->storeAs('/companies/'.$company->id.'/logo', $name, 'public');
        }
        if (isset($path)) {
            $data['logo'] = url('storage/'.$path);
        }
        $company->update($data);
        return response()->json($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        Storage::deleteDirectory('/companies/'.$company->id.'/logo');
        $company->delete();
    }
}
