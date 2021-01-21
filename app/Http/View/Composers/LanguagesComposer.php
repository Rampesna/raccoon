<?php

namespace App\Http\View\Composers;

use App\Models\Language;
use Illuminate\View\View;

class LanguagesComposer
{
    protected $languages;

    public function __construct()
    {
        $this->languages = Language::all();
    }

    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('languages', $this->languages);
    }
}
