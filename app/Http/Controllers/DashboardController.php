<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function page(){
        $data = Pages::all();
        return view('Dashboard/Page/index', compact('data'));
    }
    public function add_page(Request $req){
    
        Pages::create([
            'page' => $req->page,
            'status' => $req->status,
        ]); 
        return redirect()->back()->with('success', 'Berhasil Menambahkan Pages');
    }
}
