@extends('navbar.navbar')
@section('navbar')
<h2>HALAMAN MEMBER</h2>

<form action="" method="post">
   @csrf
   <input type="text" name="cari" id="">
   <input type="submit" value="CARI" name="bCari">
</form>
<br>
<a class="btn btn-primary " href="/kategori/add" role="button">Tambah</a>

<table border="1" class="table table-dark table-striped-columns mt-2">
     <tr>
        <td scope="col">No</td>
        <td scope="col">Nama kategori</td>
        <td scope="col" colspan="2" class="text-center">Aksi</td>
     </tr>
     @foreach ($kategori as $key => $value )
         <tr>
            <td scope="row">{{ $key+1 }}</td>
            <td>{{ $value->nm_kategori }}</td>
            <td><a href="{{ url('/kategori/update').'/'.$value->kd_kategori }}">update</a></td>
            <td><a href="{{ url('/kategori/delete/'.$value->kd_kategori) }}">hapus</a></td>
         </tr>
     @endforeach
</table>

{{-- {{ Session::get('pesan') }} --}}
@endsection