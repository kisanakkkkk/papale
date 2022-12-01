<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Products;

class ListingController extends Controller
{
    //show all listing
    public function index(){
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }
    //show single listing
    public function show(Listing $listing){
        return view('listing', [
            'listing' => $listing
        ]);
    }

    public function view(){
        // $id = Products::find('id');
        // $name = $id->name;
        // $Company = $id->Company;
        // $Price = $id->Price;
        // $Description = $id->Description;
        $products = Products::all();
        return view('view', compact('products'));
    }

    public function viewMasuk(){
        return view('masuk');
    }

    public function createMasuk(Request $request){
        $request->validate([
            'price' => ['integer','min:1000','max:15000']
        ]);
        Products::create([
            //penamaan sangat penting
            //'nama kolom di DB' => 'nama var dari blade (input masuk dari user)'
            'name' => $request->name,
            'Company' => $request->company,
            'Price' => $request->price,
            'Description' => $request->description
        ]);
        $products = Products::all();
        return view('view', compact('products'));
    }
}
