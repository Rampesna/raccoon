<?php

namespace App\Http\Controllers\User\Earnings;

use App\DataTables\CustomersDataTable;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class Customer extends Controller
{
    public function index($company_id = null)
    {
        try {
            $company_id = !is_null($company_id) ? Crypt::decrypt($company_id) : auth()->user()->companies()->first()->id;
        } catch (\Exception $exception) {
            return abort(404);
        }
        return auth()->user()->companies()->where('id', $company_id)->exists() ?
            view('user.earnings.customer.index', [
                'customers' => Company::find($company_id)->customers,
                'company_id' => $company_id
            ]) : abort(403);
    }

    public function create()
    {
        return view('user.earnings.customer.create');
    }

    public function store(Request $request)
    {

    }

    public function show($customer)
    {

    }

    public function edit($customer)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy(Request $request)
    {

    }
}
