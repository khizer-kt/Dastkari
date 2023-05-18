<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//get usertpe data from db using AUTH::::::
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Sellers;

class HomeController extends Controller
{
    //FUNCTION TO DIRECT ADMIN TO HIS PAGE:::
    public function index()
    {
        return view('home.userpage');
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype; //getting usertpe from db

        if (!empty(Auth::user()) && $usertype == '1') {
            return view('admin.home');
        } else if ($usertype == 'Customer') {
            return view('Customers.userpage');
        } elseif ($usertype == 'Seller') {
            $user = Auth::user();
            if (Sellers::where('idsellers', $user->id)->exists()) {
                return view('Sellers.sellerpage');
            } else {
                $sellers = new Sellers;

                $sellers->idsellers = $user->id;
                $sellers->name = $user->name;
                $sellers->email = $user->email;
                $sellers->password = $user->password;
                $sellers->address = $user->address;
                $sellers->save();
                return view('Sellers.sellerpage');
            }
        }


    }
    public function view_product($id)
    {

        // dd($id);
        $products = Products::where([
            'category_id' => $id

        ])->get();
        // dd($products);
        //  dd(\DB::getQueryLog());



        return view('home.products', ['product' => $products]);



    }
    //<k>
    public function search_product($id, $searchQuery)
    {
        $products = Products::where('category_id', $id)
            ->where(function ($query) use ($searchQuery) {
                $query->where('name', 'LIKE', "%$searchQuery%");
            })
            ->get();

        return view('home.products', ['product' => $products]);
    }

    //</k>
    public function view_product_details($id)
    {

        // dd($id);
        $products = Products::where([
            'idproducts' => $id

        ])->get();
        //  dd($products);
        //  dd(\DB::getQueryLog());



        return view('home.productsdetails', ['products' => $products]);
    }



    public function add_cart($id)
    {


        return redirect('login');



    }
    public function show_cart()
    {


        return redirect('login');



    }
}