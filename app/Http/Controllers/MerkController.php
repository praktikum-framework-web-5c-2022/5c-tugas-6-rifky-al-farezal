<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;
use App\Models\Produk;

class MerkController extends Controller
{
    public function index(){
        $merk = Merk::all();
        $all_produk = Merk::withCount('produks')->get();
        return view('merk.index', compact('merk','all_produk'));
    }

    public function create(){
        return view('merk.create');
    }

    public function createproduct(){
        $merk = Merk::get();
        return view('produk.create',compact('merk'));
    }

    public function store(Request $request){
        Merk::create($request->all());
        return redirect()->route('merks.index')->with('success', 'Merk Berhasil Ditambahkan');
    }

    public function storeproduct(Request $request){
        Produk::create($request->all());
        return redirect()->route('merks.index')->with('success', 'Produk Berhasil Ditambahkan');
    }
}
