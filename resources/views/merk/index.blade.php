@extends('layouts.app');
@section('title','KONTER HAPE')
@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <h1 style="font-size: 80px;text-align:center">KONTER HAPE</h1>
    </div>
</div>
<div class="row">
    <div class="d-flex justify-content-center mb-5">
        <div class="button mb-3">
            <a href="{{ route('merks.create') }}" class="btn btn-info shadow">Masukan Merk</a>
            <a href="{{ route('merks.createproduct') }}" class="btn btn-danger shadow">Masukan Produk</a>
        </div>
    </div>
</div>
    <div class="row">
        @foreach ($all_produk as $item)    
        <div class="col-md-6">
            <a href="{{route('produks.index',$item->id)}}" style="text-decoration: none;text-transform:uppercase;">
                <div class="card bg-warning p-4 mb-4 text-light shadow">
                    <div class="card-body">
                        <div class="d-flex-justify-content-center">
                            <div class="row">
                                <div class="col-md-8 d-flex justify-content-start">
                                    <h2>{{ $item->merk_produk }}</h2>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                    @if ($item->produks_count == 0)
                                    <h5 style="text-align: end">Tidak Ada Produk</h5>
                                    @else
                                    <h5 style="text-align: end"><span>{{ $item->produks_count }}</span> Produk tersedia</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection