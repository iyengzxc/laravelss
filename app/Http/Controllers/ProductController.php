<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    function __construct(){
        $this->products = new Products;
    }
    function index(){
        $products = $this->products->getProducts();
        return view('home', compact('products'));
    }
    function save_products(Request $request){
        $data = [
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'quantityinstock' => $request->quantityinstock,
        ];
        $this->products->saveProducts($data);
        return back();
    }
    function delete_products($id){
        $this->products->deleteProducts($id);
        return back();
    }
    function update_products($id){
        $products = $this->products->updateProducts($id);
        return view('update_products', compact('products'));
    }
    function save_updated_products(Request $request){
        $data = [
            'product_name' => $request->update_product_name,
            'description' => $request->update_description,
            'price' => $request->update_price,
            'quantityinstock' => $request->update_quantityinstock,
        ];
        $this->products->updatedProducts($data, $request->id);
        return redirect()->route('home');
    }

}
