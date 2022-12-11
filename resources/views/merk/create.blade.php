@extends('layouts.app')
@section('title','Masukan Merk')
@section('content')
<form action="{{ route('merks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Merk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="merk_produk">
    </div>
    <button type="submit" class="btn btn-primary">Masukan Merk baru</button>
  </form>
@endsection