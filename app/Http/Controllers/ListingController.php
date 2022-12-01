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

}
