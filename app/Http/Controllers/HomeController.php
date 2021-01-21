<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function language(Request $request)
    {
        Cookie::queue('language', $request->language, 525600);
        App::setLocale($request->language);
        return response()->json('success', 200);
    }

    public function index()
    {
        return 'index';
    }

    public function other()
    {
        return 'other';
    }

    public function example(Request $request)
    {
        return $serialized = serialize($request->all());
        return unserialize($serialized);
    }

    public function customers()
    {
        return collect(auth()->user()->customers())->collapse();
    }
}
