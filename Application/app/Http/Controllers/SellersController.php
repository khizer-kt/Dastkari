<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Sellers;
use App\Models\CategoryTable;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SellersController extends Controller
{   

    public function mainpage()
    {
        return view('Sellers.sellerpage');
    }
    public function view_product()
    {
        $id=Auth::user()->id;
        $products = Products::where('seller_id',"=",  $id)->get();
        //dd($products);
        return view('Sellers.sellerproducts',['sellerproduct'=> $products]);
    }

    public function categories() //it will send all data of category table to this page
    {
        $category = CategoryTable::all();
        //dd($category);
        return view('Sellers.addsellerproducts',['categoryname'=>$category]);
    }

    // public function add_product(){
    //     $id=Auth::user()->id;
    //             $cart_item=Order_items::where('customer_id',"=",$id)->get();
    // }
     public function add_product(Request $request)
    {   
        $product=new Products;

        $categorytab = CategoryTable::where('name',"=",  $request->category)->first();
        //$categoryid = $categorytab['id'];
        $sellerid=Auth::user()->id;

                $product->name = $request->name;
                $product->price = $request->price;
                $product->quantity_available = $request->quantity;
                $product->description = $request->description;
                $product->seller_id=$sellerid;

                $product->category_id = $categorytab->idcategory;
                $product->created_at = now();
                // $product->updated_at = now();


                $img = $request->image;
                $imgname = time().'.'.$img->getClientOriginalExtension();
                $request->image->move('images',$imgname);

                $product->image = $imgname;
                $product->save();

        return redirect()->back()->with('message','PRODUCT ADDED SUCCESSFULLY');
    
}
}
