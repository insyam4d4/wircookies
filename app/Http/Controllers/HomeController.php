<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategory;
use App\Models\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menuCategories = MenuCategory::active()->get();
        $menus = Menu::active()->get();

        return view('home', compact('menuCategories', 'menus'));
    }
}
