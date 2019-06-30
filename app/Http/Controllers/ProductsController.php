<?php

namespace App\Http\Controllers;

use Cartalyst\Stripe\Stripe;
use Illuminate\Http\Request;
use App\Product;
use App\cart;
use Session;

use Illuminate\Support\Facades\Redirect;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shopitems=Product::all();

       //dd($shopitems);

        return view('shop.index')->with('shopitems',$shopitems);

    }


    public function addToCart(Request $request, $id)
    {
        //
        $product=Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart'): null; //checks whether the old cart exists and passes the cart or a null value

        $cart=new Cart($oldCart);

        $cart->add($product,$product->id);

        Session::put('cart',$cart);

      //  dd(Session::get('cart'));

        return Redirect::action('ProductsController@index');

        
    }



    public function getCart(){
        if(!Session::has('cart')){

            return view('shop.shopping-cart')->with('products',null);
        }else{
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);

            return view('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
        }


    }

    public function getCheckout(){
        if(!Session::has('cart')){

            return view('shop.shopping-cart')->with('products',null);
        }else{
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            $total=$cart->totalPrice;

            return view('shop.checkout',['total'=>$total]);
        }


    }


    public function postToStripe(Request $request){
        //dd($request->all());
        $this->validate($request, [
            'card-no' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvc' => 'required',
        ]);

       $stripe=Stripe::make('sk_test_x0K6HnsdhJmWQqaE6Wn5J3mp00nTwBr8xN');
       //dd($stripe);
       try{
           $token = $stripe->tokens()->create([
               'card' => [
                   'number' => $request->get('card-no'),
                   'exp_month' => $request->get('month'),
                   'exp_year' => $request->get('year'),
                   'cvc' => $request->get('cvc'),
               ],
           ]);


           if (!isset($token['id'])) {
               return back();
           }

           $charge = $stripe->charges()->create([
               'card' => $token['id'],
               'currency' => 'USD',
               'amount' => 15,
               'description' => 'wallet',
           ]);

           if($charge['status'] == 'succeeded') {

               Session::flash('success','Payment processed successfully');

               return back();
           }


       }catch (\Exception $exception){
           return $exception->getMessage();
       }

       // dd($request->all());

       // return back();
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       dd($request->all());
//        $this->validate($request, [
//            'card-no' => 'required',
//            'month' => 'required',
//            'year' => 'required',
//            'cvc' => 'required',
//        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
