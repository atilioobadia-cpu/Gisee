<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Show the Gisee Infotech marketing homepage.
     *
     * All presentational content is read from config/site.php inside the
     * Blade views, so the controller only needs to render the page.
     */
    public function index(): View
    {
        return view('home');
    }
}
