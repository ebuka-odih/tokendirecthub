<?php

namespace App\Http\Controllers\Admin;

use App\CopyTraders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCopyTraderController extends Controller
{
    public function index()
    {
        $traders = CopyTraders::all();
        return view('admin.copytrades.list', compact('traders'));
    }
}
