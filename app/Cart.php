<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Cart 
{
    //

    public $items=null;
    public $totalPrice=0;
    public $totalQty=0;


    public function __construct($oldCart){

        if($oldCart){
            $this->items=$oldCart->items;
            $this->totalPrice=$oldCart->totalPrice;
            $this->totalQty=$oldCart->totalQty;
        }


    }


    public function add($item,$id){
        //new item
        $storedItem=[
            'qty'=>0,
            'price'=>$item->price,
            'item'=>$item
        ];

        //checking whter the items already exist in cart
        if($this->items){
            //if items are in the cart check for the specific item
            if(array_key_exists($id,$this->items)){
                //if the item exist do the following
                $storedItem=$this->items[$id];
            }
        }

        $storedItem['qty']++; //adds the qty by one
        $storedItem['price']=$item->price * $storedItem['qty'];



        $this->items[$id]=$storedItem;//stores values of the new item 
        $this->totalQty++;
        $this->totalPrice+=$item->price;
    }



}
