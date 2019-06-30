@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 col-xl-12 col-sm-12 ">
                <h1>Checkout</h1>
                <h4>Yout Total is: ${{$total}}</h4>
            </div>
        </div>

        @if (Session::has('success'))

             @php
               Session::forget('cart');
             @endphp

            <div class="alert alert-success">
                <strong>Hurrah</strong> 
                <p>Payment processes successfully</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Something went wrong<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row p-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form  method="post" action="{{route('checkout1')}}">
                    {{--will throw page expired error if not used--}}
                    @csrf
                    <div class="card border-0 shadow p-5 ">
                        <h3 class="title">Credit Card Details</h3>
                        <div class="row">
                            <div class="form-group col-sm-7">
                                <label for="card-holder">Card Holder</label>
                                <input id="card-holder" name="cardholder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="">Expiration Date</label>
                                <div class="input-group expiration-date">
                                    <input type="text" class="form-control" name="month" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
                                    <span class="date-separator">/</span>
                                    <input type="text" class="form-control" name="year" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="card-number">Card Number</label>
                                <input id="card-number" type="text" class="form-control" name="card-no" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="cvc">CVC</label>
                                <input id="cvc" name="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-2">

            </div>


        </div>

    </div>


@endsection