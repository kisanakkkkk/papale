<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing
{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'listingone',
                'company' => 'polytron',
                'description' => 'hai'
            ],
            [
                'id' => 2,
                'title' => 'listingtwo',
                'company' => 'samsung',
                'description' => 'hai2'
            ],
            [
                'id' => 3,
                'title' => 'listingtri',
                'company' => 'ipong',
                'description' => 'hai3'
            ]
        ];
    }
    public static function find($id) {
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
