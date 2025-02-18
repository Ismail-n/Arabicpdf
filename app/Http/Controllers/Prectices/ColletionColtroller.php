<?php

namespace App\Http\Controllers\Prectices;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class ColletionColtroller extends Controller
{
    public $request_stuff;
    public function __construct(Request $request_stuff){
        $this->request_stuff = $request_stuff;
    }
    /**
     * Here we work with colletions
     **/
    public function workWithColletiions(){
        $collection = collect($this->request_stuff->names)->map(function (?string $name) {
            // return strtoupper($name);
            return Str::camel($name); // a string function for converting values into camelCase
            // return Str::apa($name); // a string function converts the given string to title case following
        });
        // $rejected = $collection->reject(function(string $name){
        //     return $name == 'JAVED';
        // });
        // return $rejected->values();
        // $fn1 = fn($x) => $x + explode($collection);
        return $collection;

    }
}
