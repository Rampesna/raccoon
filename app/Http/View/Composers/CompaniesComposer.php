<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class CompaniesComposer
{
    protected $companies;

    public function __construct()
    {
        $this->companies = auth()->check() ? auth()->user()->companies : null;
    }

    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('companies', $this->companies);
    }
}
