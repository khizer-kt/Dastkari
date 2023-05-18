<?php

namespace App\Http\Controllers;
use App\Models\AllProduct;
use App\Models\CategoryTable;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{   
    // public function show(){
    //     $data = CategoryTable::all();

    // }

    public function view_category(){
        $data = CategoryTable::all();
        
        return view('admin.category',['data'=> $data]);
    }
    public function view_product($id){
        $products = Products::with('seller')->where([
            'category_id' => $id,
        
     ])->get();
    
        // dd($data);
        return view('admin.products',['product'=> $products]);
        
        
        
    }
    public function all_products(){
        // $products = Products::all();
        $products = Products::with('seller')->get();
    //    $sellers= Sellers::where('idsellers',$i['seller_id'] );
        // dd($products);
        return view('admin.all_products',['products'=>  $products]);
    }
    public function all_orders(){
        $orders = Orders::with('customers')->get();
        
        return view('admin.Orders',['orders'=> $orders]);
    }
    public function all_customers(){
        $customer = Customers::all();
        // dd($data);
        return view('admin.Customers',['customer'=> $customer]);
    }
    public function all_sellers(){
        $sellers = Sellers::all();
        
        return view('admin.Sellers',['sellers'=> $sellers]);
    }
  
   
    public function remove_category($id){
        // $cart_item=Order_items::where('idorder_items',"=",$id)->get();
        $category=CategoryTable::find($id);
        
        $products = Products::where([
            'category_id' => $id,
        
     ])->get();
     foreach($products as $products){
        $products->delete();
     }
        $category->delete();
        return redirect()->back();
    }

    public function add_category(){
        return view('admin.addcategory');
    }
    public function main(){
        return view('admin.home');
    }


    public function added_category(Request $request){
        $category=new CategoryTable;
       $name= $request->input('name');
        $categoryExists = CategoryTable::where('name', $name)->exists();
        if($categoryExists){
            return redirect()->back()->with('mess','ALLREADY EXISTS!');
        }
        else{
            $category->name=$request->input('name');
        $category->created_at = now();
        $category->save();
        return redirect()->back()->with('message','CATEGORY ADDED!');}
    }
}