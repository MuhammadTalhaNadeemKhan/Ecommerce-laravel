<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class ShopSidebarRightController extends Controller
{
    public function shopSidebarRight()
    {
        return view('frontend.shop-sidebar-right'); // Shop with Sidebar page
    }
}
