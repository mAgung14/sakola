@extends('navbar.navbar')
@section('navbar')
<h2>HALAMAN PRODUCT</h2>

<form action="" method="post">
   @csrf
   <input type="text" name="cari" id="">
   <input type="submit" value="CARI" name="bCari">
</form>
<br>
<a class="btn btn-primary " href="/product/add" role="button">Tambah</a>
<table border="1" class="table table-dark table-striped-columns mt-2">
     <tr>
        <td scope="col">No</td>
        <td scope="col">Nama Proudct</td>
        <td scope="col">Harga</td>
        <td scope="col">Deskripsi</td>
        <td scope="col">Gambar</td>
        <td scope="col">kd_kategori</td>
        <td scope="col" colspan="2" class="text-center">Aksi</td>
     </tr>
     @foreach ($products as $key => $value )
         <tr>
            <td scope="row">{{ $key+1 }}</td>
            <td>{{ $value->nm_product }}</td>
            <td>{{ $value->harga }}</td>
            <td>{{ $value->deskripsi }}</td>
            <td><img src="/storage/{{ $value->image }}" alt="" width="50px" height="50px" srcset=""></td>
            <td>{{ $value->kd_kategori }}</td>
            <td><a href="{{ url('/product/update').'/'.$value->kd_product }}">update</a></td>
            <td><a href="{{ url('/product/delete/'.$value->kd_product) }}">hapus</a></td>
         </tr>
     @endforeach
</table>

{{-- {{ Session::get('pesan') }} --}}
@endsection