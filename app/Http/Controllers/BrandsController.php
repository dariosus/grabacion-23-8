<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandsController extends Controller
{
    public function all() {
      $brands = Brand::all();

      return view("brands", compact("brands"));
    }

    public function detail($id) {
      $brand = Brand::find($id);

      return view("brand", compact("brand"));
    }
}
