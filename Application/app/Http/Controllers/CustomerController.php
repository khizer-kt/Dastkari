<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Sellers;
use App\Models\Customers;

use Illuminate\Support\Facades\Auth;

\DB::enableQueryLog();
use Session;
use Stripe;

class CustomerController extends Controller
{
    public function index()
    {
        return view('Customers.userpage');
    }
    public function view_product($id)
    {

        // dd($id);
        $products = Products::where([
            'category_id' => $id

        ])->get();
        // dd($products);
        //  dd(\DB::getQueryLog());



        return view('Customers.products', ['product' => $products]);



    }
    public function view_product_details($id)
    {

        // dd($id);
        $products = Products::where([
            'idproducts' => $id

        ])->get();
        //  dd($products);
        //  dd(\DB::getQueryLog());


        return view('Customers.productdetails', ['products' => $products]);



    }
    public function add_cart(Request $request, $id)
    {


        if (Auth::id()) {
            $user = Auth::user();
            // dd($user);
            //     $products = Products::where([
            //         'idproducts' => $id

            //  ])->get();
            $products = Products::Find($id);
            //   dd($products);
            //$cart = new Orders;
            $customer = new Customers;
            if ($products->quantity_available == 0) {
                return redirect()->back()->with('message', 'ITEMS ARE OUT OF STOCK');
            }

            $order_items = new Order_items;
            if (Customers::where('idcustomers', $user->id)->exists()) {
                $order_items->product_id = $products->idproducts;
                $order_items->quantity = $request->quantity;
                if ($order_items->quantity > $products->quantity_available) {
                    return redirect()->back()->with('mess', 'THIS MUCH QUANTITY OF PRODUCTS NOT AVAILABLE!');
                } else {
                    $products->quantity_available = ($products->quantity_available) - ($request->quantity);


                    //  dd($products->quantity);
                    $products->save();
                    $order_items->price = $products->price * $request->quantity;
                    $order_items->customer_id = $user->id;
                    $order_items->seller_id = $products->seller_id;
                    $order_items->save();
                }
            } else {

                $customer->idcustomers = $user->id;
                $customer->name = $user->name;
                $customer->email = $user->email;
                $customer->password = $user->password;
                $customer->address = $user->address;
                $customer->save();
                $order_items->product_id = $products->idproducts;
                $order_items->quantity = $request->quantity;
                $products->quantity_available = ($products->quantity_available) - ($request->quantity);
                $products->save();
                $order_items->price = $products->price * $request->quantity;
                $order_items->customer_id = $user->id;
                $order_items->seller_id = $products->seller_id;
                $order_items->save();
            }


            return view('Customers.userpage');
        } else {
            return redirect('login');
        }

    }
    public function view_cart_details()
    {
        $id = Auth::user()->id;
        $cart_item = Order_items::where('customer_id', "=", $id)->get();
        //  dd($cart_item);
        if ($cart_item->isEmpty()) {
            return view(('Customers.emptycart'));

        } else {

            return view('Customers.viewcart', compact('cart_item'));
        }
    }
    public function remove_items($id)
    {
        //  $cart_item=Order_items::where('idorder_items',"=",$id)->get();
        //  dd($cart_item);

        $cart_item = Order_items::find($id);
        $quantity = $cart_item->quantity;
        $products_id = $cart_item->product_id;
        $product = Products::find($products_id);
        $product->quantity_available = $product->quantity_available + $quantity;

        $product->save();
        $cart_item->delete();
        return redirect()->back();
    }

    public function cart_order($cust_id, $price)
    {
        $orders = new Orders;
        $orders->total_price = $price;
        $orders->customer_id = $cust_id;
        $orders->created_at = now();
        $orders->shipping_status = "order placed";
        $orders->save();
        $cart_item = Order_items::where('customer_id', "=", $cust_id)->get();
        foreach ($cart_item as $cart_item) {
            $cart_item->delete();
        }

        return view('Customers.cardpayment', ['price' => $price]);


    }

    public function card_payment(Request $request, $price)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $price * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        Session::flash('success', 'Payment successful!');

        // return view('Customers.orderplaced');
        return back();
    }
}