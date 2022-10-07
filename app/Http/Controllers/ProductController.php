<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # TODO: Implement Product Pagination.
        $products = Product::all();
        return view('store.index')->with('products',$products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        # TODO Bring related products
        $product = Product::where('id',$product_id)->first();
        return view("store.product")->with('product',$product);
    }

    public function create(){
        return view('admin.products.create');
    }

    public function save(Request $request){
        $form_fields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => ['required','numeric'],
            'image' => ['required','max:2048']
        ]);

        if($request->hasFile('image')){
            $form_fields['image'] = $request->file('image')->store('wines','public');
        }

        // Create product
        $product = Product::create($form_fields);

        return redirect('/admin/products/edit/'.$product->id);
    }

    public function edit($id){
        $product = Product::find($id);
        if($product){
            return view('admin.products.edit')->with('product', $product);
        }
        return redirect("/admin")->with("error","Product not found");
    }

    public function update(Request $request, $id){

        $form_fields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => ['required','numeric'],
            'image' => 'max:2048'
        ]);

        if($request->hasFile('image')){
            $form_fields['image'] = $request->file('image')->store('wines','public');
        }

        
        $product = Product::find($id);
        if(!$product){
            return redirect("/admin")->with("error","Product not found");
        }
        $product->update($form_fields);

        return redirect('/admin/products/edit/'.$product->id);
    }

    public function delete($id){

        $product = Product::find($id);
        if(!$product){
            return redirect("/admin")->with("error","Product not found");
        }

        $product->delete();
        return redirect('/admin')->with("success","Product deleted successfully");
    }
}
