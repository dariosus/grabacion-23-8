<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

class ProductsController extends Controller
{
    public function all() {
      $products = Product::paginate(20);

      return view("products", compact("products"));
    }

    public function detail($id) {
      $product = Product::find($id);

      return view("product", compact("product"));
    }

    public function search(Request $req) {
      $search = $req["search"];

      $products = Product::where("name", "like", "%" . $search . "%")->get();

      return view("search", compact("products", "search"));
    }

    public function add() {
      $brands = Brand::all();
      $categories = Category::all();

      return view("addProduct", compact("brands", "categories"));
    }

    public function store(Request $req) {
      $rules = [
        "name" => "required|string|min:3|max:255",
        "price" => "required|numeric|min:0|max:1000",
        "stock" => "required|integer|min:0|max:1000",
        "brand" => "required|exists:brands,id",
        "category" => "required|exists:categories,id"
      ];

      $this->validate($req, $rules);

      $product = new Product();

      $product->name = $req->name;
      $product->price = $req->price;
      $product->stock = $req->stock;
      $product->brand_id = $req->brand;
      $product->category_id = $req->category;

      $product->save();

      return redirect("/product/" . $product->id);
    }

    public function delete(Request $req) {
      $idProd = $req["id"];

      $prod = Product::find($idProd);

      $prod->delete();

      return redirect("/");
    }
}
