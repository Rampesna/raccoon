<?php

namespace App\Http\Controllers\User\Expenses;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Button;

class Supplier extends Controller
{

    public function ajax(Request $request)
    {
        $company = Company::find($request->company_id);
        $suppliers = $company->customers()->select(['name','surname','email']);
//        $suppliers = Customer::select(['name','surname','email']);
        return Datatables::of($suppliers)->make();
    }

    public function index()
    {
        return view('user.expenses.supplier.index');
    }
}
