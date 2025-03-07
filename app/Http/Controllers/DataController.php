<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
        public function open() 
        {
            $data = "This data is open and can be accessed without the client being authenticated";
            return response()->json([
                'success' => true,
                'data'    => $data,
            ], 200);

        }

        public function closed() 
        {
            $data = "Only authorized users can see this";
            return response()->json([
                'success' => true,
                'data'    => $data,
            ], 200);
        }
}

