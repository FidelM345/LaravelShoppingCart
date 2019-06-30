@extends('layouts.master')

@section('title')
    Laravel shopping cart
@endsection


@section('content')

    <div class="container text-center">
        @if(Session::has('cart'))

            <div class="row  offset-md-3">
                <div class="col-md-6 mb-5 mt-3">
                    <ul class="list-group">

                        @foreach ($products as $item)
                            <li class="list-group-item">
                                <span class="badge badge-primary">{{$item['qty']}}</span>
                                <strong>{{$item['item']['title']}}</strong>
                                <span class="label label-success">{{$item['price']}}</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Reduce by 1</a></li>
                                        <li><a href="#">Reduce All</a></li>
                                    </ul>
                                </div>
                            </li>

                        @endforeach

                    </ul>


                </div>



            </div>

            <div class="row offset-md-3">
                <div class="col-md-6 ">
                    <strong>Total Price: ${{$totalPrice}}</strong>
                </div>

            </div>

            {{-- checkout button --}}
            <div class="row offset-md-3">
                <div class="col-md-6 col-md-offset-3">
                    <a  href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
                </div>

            </div>



        @else

            <div class="row offset-md-3">
                <div class="col-md-6 col-md-offset-3">
                    <h1>No items in cart</h1>
                </div>

            </div>

        @endif




    </div>



@endsection



