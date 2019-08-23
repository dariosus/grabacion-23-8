<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
  public function all() {
    $categories = Category::all();

    return view("categories", compact("categories"));
  }

  public function detail($id) {
    $category = Category::find($id);

    return view("category", compact("category"));
  }
}
