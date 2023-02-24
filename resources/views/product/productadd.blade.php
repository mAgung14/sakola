@extends('navbar.navbar')
@section('navbar')
<br>
<div class="w3-container w3-teal">
  <h2>Input Form</h2>
</div>

<form class="w3-container-indigo" action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
  <label class="w3-text-teal"><b>Nama Product</b></label>
  <input class="w3-input w3-border w3-light-grey" name="nm_product" type="text" value="{{ $nm_product }}">

  <label class="w3-text-teal"><b>Harga</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="harga" value="{{ $harga }}">

  <label class="w3-text-teal"><b>deskripsi</b></label>
  <textarea  class="w3-input w3-border w3-light-grey" name="deskripsi" id="" cols="30" rows="5">{{ $deskripsi }}</textarea>

  <br>
@if ($image!='')
  <label class="w3-text-teal"><b>Gambar</b></label>
  <img src="{{ url('storage') .'/' .$image }}" alt="" srcset="" width="100px" height="100px">  
@endif

  <br>

  <label class="w3-text-teal"><b>Gambar</b></label>
  <input class="w3-input w3-border w3-light-grey" type="file" name="image">

  <label class="w3-text-teal"><b>kd_kategori</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="kd_kategori" value="{{ $kd_kategori }}">
<br>
  <button class="w3-btn w3-blue-grey" name="simpan">{{ $tombol }}</button>
</form>
@endsection