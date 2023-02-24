<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products['products'] = Product::all();
        return view('product.product',$products);
    }

    function tambah(){
        $data = [
            'nm_product'=>'',
            'harga'=>'',
            'deskripsi'=>'',
            'image'=>'',
            'kd_kategori'=>'',
            'action' => url('/product/add'),
            'tombol' => 'Tambah'
        ];
        return view('product.productadd',$data);
    }

    function add(Request $req){
        if ($req->hasfile('image')) {
            $img = $req->file('image')->store('gambar');
       }else{
           $img = "";
       }
        $data = [
            'nm_product'=>$req->nm_product,
            'harga'=>$req->harga,
            'deskripsi'=>$req->deskripsi,
            'image'=>$img,
            'kd_kategori'=>$req->kd_kategori
        ];
        Product::create($data);
        return redirect('/product');
    }

    function delete(Request $req){
        $delete = Product::where('kd_product', $req->kd_product)->delete();
        if ($delete) {
            return redirect('/member')->with('pesan','Member Berhasil Di Hapus');
        }else{
            return redirect('/member')->with('pesan','Member Tidak Bisa Di Hapus');
        }
    }

    function edit(Request $req){
        $edit = Product::find($req->kd_product);
        $data = [
            'nm_product' => $edit->nm_product,
            'harga' => $edit->harga,
            'deskripsi' => $edit->deskripsi,
            'image' => $edit->image,
            'kd_kategori' => $edit->kd_kategori,
            'action' =>  url('/product/update').'/'.$edit->kd_product,
            'tombol' => 'Update'
        ];

        return view('product.productadd',$data);
    }
    function update(Request $req){
        $data = [
            'nm_product'=>$req->nm_product,
            'harga'=>$req->harga,
            'deskripsi'=>$req->deskripsi,
            'kd_kategori'=>$req->kd_kategori
        ];

        if ($req->hasfile('image')) {
            $data['image'] = $req->file('image')->store('gambar');
       }
        Product::where('kd_product',$req->kd_product)->update($data);
        return redirect('/product');
    }
}
