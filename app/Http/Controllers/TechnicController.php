<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technic;

class TechnicController extends Controller {

    public function getTechnics(Request $request) {
        // Get all technics associated with the request
        $technics = Technic::all();
        return $technics;
        
    }

    

}