@extends('layouts.page')

@section('content')

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="flex-column">
        <div class="col-lg-6 pt-5">
            <h1>PEPSI J-COLA - SAKURA</h1>


        </div>
        <div class="row">
            <p>
                <img class="mx-2" src="{{ asset('pictures/pepsi-cola-sakura.jpg') }}" alt="Responsive image" width="380" height="380">
            </p>
            <div class=" row flex-grow-1 mx-sm-2 d-flex justify-content-between">
                <div class="p-2">
                    <p>Ref: 605674</p>
                    <p>Poids: 0.560Kg</p>
                </div>
                <div>

                    <p class="text-right"><i class="fa fa-eur"></i></p>
                </div>
                <div class="p-2 justify-self-end">
                    <i class="fa fa-minus-circle"></i>
                    <input type="text" name="qty" id="quantity_wanted" value="1" size="4" maxlength="5">
                    <i class="fa fa-plus-circle"></i>
                    <p class="p-2 text-right ml-auto">
                        <a href=""><i class="fa fa-cart-plus" style="font-size:50px"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>




@stop


