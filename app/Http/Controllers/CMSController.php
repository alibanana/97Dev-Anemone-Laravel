<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function showEditTitle()
    {
        return view('admin-page/edit-title-page');
    }
}
