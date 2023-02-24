<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index(){
        $kategori['kategori'] = Kategori::all();
        return view('kategori.kategori',$kategori);
    }
    

    function tambah(){
        $data = [
            'name'=> '',
            'action' =>  url('/kategori/add'),
            'tombol' => 'Tambah'
        ];

        return view('kategori.kategoriadd',$data);
    }

    function add(Request $req){
        $data = [
            'nm_kategori' => $req->nm_kategori
        ];
        Kategori::create($data);
        return redirect('/kategori');
    }

    function delete(Request $req){
        $delete = Kategori::where('kd_kategori', $req->kd_kategori)->delete();
        if ($delete) {
            return redirect('/kategori')->with('pesan','kategori Berhasil Di Hapus');
        }else{
            return redirect('/kategori')->with('pesan','kategori Tidak Bisa Di Hapus');
        }
    }

    function edit(Request $req){
        $edit = Kategori::find($req->kd_kategori);
        $data = [
            'nm_kategori' => $edit->nm_kategori,
            'action' =>  url('/member/update').'/'.$edit->kd_kategori,
            'tombol' => 'Update'
        ];
        
        return view('kategori.kategoriadd',$data);
    }

    function update(Request $req){
        $data = [
            'nm_kategori'=>$req->nm_kategori,
        ];
        Kategori::where('kd_kategori',$req->kd_kategori)->update($data);
        return redirect('/kategori');
    }
}