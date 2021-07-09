<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use Auth;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        $supplier = Supplier::all();

        return view('inventory.showInventory', ['products' => $products, 'categories' => $category, 'suppliers' => $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('inventory.addProduct', ['categories' =>$categories, 'suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
            'description' => "required",
            'quantity_stock' => "required|numeric",
            'critical_quantity' => "required|numeric",
            'price' => "required|numeric",
            'discounted_price' => "required|numeric",
            'category_id' => "required|numeric",
            'supplier_id' => "required|numeric",
        ]);
        
        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->quantity_stock = $request->quantity_stock;
        $newProduct->critical_quantity = $request->critical_quantity;
        $newProduct->price = $request->price;
        $newProduct->discounted_price = $request->discounted_price;
        $newProduct->category_id = $request->category_id;
        $newProduct->supplier_id = $request->supplier_id;
        $newProduct->save();

        return redirect('inventory')->with("addProduct","Product has been added successfully");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->get();
        $category = Category::where('category_id', $product[0]->category_id)->get();
        $supplier = Supplier::where('supplier_id', $product[0]->supplier_id)->get();
        return view('inventory.viewProduct', ['product' => $product, 'category' => $category, 'supplier' => $supplier] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('inventory.editProduct', ['categories' =>$categories, 'suppliers' => $suppliers, 'product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => "required|max:50",
            'description' => "required:max:100",
            'quantity_stock' => "required|numeric",
            'critical_quantity' => "required|numeric",
            'price' => "required|numeric",
            'discounted_price' => "required|numeric",
            'category_id' => "required|numeric",
            'supplier_id' => "required|numeric",
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity_stock = $request->quantity_stock;
        $product->critical_quantity = $request->critical_quantity;
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->save();

        return redirect('inventory')->with("editProduct","Product has been edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Product::find($id);
       $data->delete();
       return redirect('inventory')->with('deleteProduct', 'Product Deleted Successfully');
    }

    
}
