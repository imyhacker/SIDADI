<?php

namespace App\Http\Controllers;

use App\Models\Diri;
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
    public function switch(Request $req){
        $data = Pages::find($req->id);
        $a = $data->update([
            'status' => $req->status,
        ]);
    }

    // data diri
    public function data_diri(){
        $page = Pages::all();
        $data_diri = Diri::first();
        return view('Dashboard/Profil/data_diri', compact('page', 'data_diri'));
    }
    public function up_diri(Request $req){
        $cek = Diri::first();
        $gambar = $req->file('media');

        if($cek == null){

            if($gambar == null){
                 
            $data = Diri::create([
                'page' => $req->page,
                'nama_lengkap' => $req->nama_lengkap,
                'nama_panggilan' => $req->nama_panggilan,
                'kontak'    => $req->kontak,
                'email'     => $req->email,
                'tentang_saya' => $req->tentang_saya,
            ]);
                dd($data);
            }else{

            $path   = 'media';
            $n_file = $gambar->getClientOriginalName();
            $x_file = $gambar->getClientOriginalExtension();
            $file   = $n_file.".".$x_file;
            $gambar->move($path, $file);

             
            $data = Diri::create([
                'page' => $req->page,
                'media' => $file,
                'nama_lengkap' => $req->nama_lengkap,
                'nama_panggilan' => $req->nama_panggilan,
                'kontak'    => $req->kontak,
                'email'     => $req->email,
                'tentang_saya' => $req->tentang_saya,

            ]);
            dd($data);


            }
           
        }else{
            if($gambar == null){
                 
                $data = Diri::first()->update([
                    'page' => $req->page,
                    'nama_lengkap' => $req->nama_lengkap,
                    'nama_panggilan' => $req->nama_panggilan,
                    'kontak'    => $req->kontak,
                    'email'     => $req->email,
                    'tentang_saya' => $req->tentang_saya,
                ]);
                    dd($data);
                }else{
    
                $path   = 'media';
                $n_file = $gambar->getClientOriginalName();
                $x_file = $gambar->getClientOriginalExtension();
                $file   = $n_file.".".$x_file;
                $gambar->move($path, $file);
    
                 
                $data = Diri::first()->update([
                    'page' => $req->page,
                    'media' => $file,
                    'nama_lengkap' => $req->nama_lengkap,
                    'nama_panggilan' => $req->nama_panggilan,
                    'kontak'    => $req->kontak,
                    'email'     => $req->email,
                    'tentang_saya' => $req->tentang_saya,
    
                ]);
                dd($data);
    
    
                }
        }       
    }
}
