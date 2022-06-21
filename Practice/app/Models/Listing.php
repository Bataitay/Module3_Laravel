<?php

namespace App\Models;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'tilte'=> 'Listing One',
                'decription' => 'Note that we receive the container itself as an argument to the resolver.
                 We can then use the container to resolve sub-dependencies of the object we are building.'
            ],
            [
                'id' => 2,
                'tilte'=> 'Listing Two',
                'decription' => 'As mentioned, you will typically be interacting with the container
                 within service providers; however, if you would like to interact with the container 
                 outside of a service provider, you may do so via the App facade:'
            ]
            ];
    }
    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}

?>