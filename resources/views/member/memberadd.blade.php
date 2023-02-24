@extends('navbar.navbar')
@section('navbar')
<br>
<div class="w3-container w3-teal">
  <h2>Input Form</h2>
</div>

<form class="w3-container-indigo" action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
  <label class="w3-text-teal"><b>Name</b></label>
  <input class="w3-input w3-border w3-light-grey" name="name" type="text" value="{{ $name }}">

  <label class="w3-text-teal"><b>Email</b></label>
  <input class="w3-input w3-border w3-light-grey" type="email" name="email" value="{{ $email }}">

  <label class="w3-text-teal"><b>No Handphone</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" name="nohp" value="{{ $nohp }}">
<br>
@if ($image!='')
<label class="w3-text-teal"><b>Gambar</b></label>
<img src="{{ url('storage') .'/' .$image }}" alt="" srcset="" width="100px" height="100px">  
@endif
  <br>
  <label class="w3-text-teal"><b>Gambar</b></label>
  <input class="w3-input w3-border w3-light-grey" type="file" name="image">
<br>
  <button class="w3-btn w3-blue-grey" name="simpan">{{ $tombol }}</button>
</form>
@endsection