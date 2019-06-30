@extends('layouts.master')


@section('title')
    Laravel shopping cart
@endsection

@section('content')

   <div class="container">

             <header class="bg-primary text-center py-2 mb-4 mt-4">
                <div class="container">
                  <h1 class="font-weight-light text-white">Purchase products</h1>
                </div>
              </header>



              
              <!-- Page Content -->
              <div class="container">
              <div class="row">
                @foreach ($shopitems as $item)
                {{-- https://source.unsplash.com/9UVmlIb0wJU/500x350 image place holder--}}
                    <!-- Team Member 2 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-0 shadow">
                        <img src="{{$item->imagepath}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h6 class="card-title mb-0">{{$item->title}}</h6>
                          <div class="card-text text-black-50">Lorem, ipsum dolor sit amet 
                              consectetur adipisicing elit. Reiciendis aliquid laboriosam ullam! Ipsam mollitia placeat aliquam, 
                              sunt rem libero nulla officiis sint quis, iste iusto voluptates cumque quia at delectus.
                          </div>
  
                        </div>
  
                         <div class="">
                              <a name="" id="" class="btn btn-primary  pull-right m-2" href="{{route('product_cart', ['id' => $item->id])}}" role="button"> Add to cart</a>
                              <span class="pull-left m-3 price">{{$item->price}}</span>
                         </div>
                      </div>
                    </div>

                @endforeach
              </div>
              <!-- /.row -->
              
              </div>
              <!-- /.container -->

   </div>
    
@endsection



