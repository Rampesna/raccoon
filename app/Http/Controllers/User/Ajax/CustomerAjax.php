<?php

namespace App\Http\Controllers\User\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CustomerAjax extends Controller
{
    public function getCustomerCategoriesByCompanyID(Request $request)
    {
        return response()->json(Company::find($request->id)->customerCategories, 200);
    }
}
