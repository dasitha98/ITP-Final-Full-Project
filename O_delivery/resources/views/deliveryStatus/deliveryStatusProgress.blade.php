@extends('deliveryStatus.deliveryStatusHome')

@section('content')

<form action="{{route('deliveryStatus.show',$num)}}" method="GET" class="form-horizontal" autocomplete="on">
    <div class="form-group row">
        <h5>Delivery status for order Number {{$orderNum}}</h5>
    </div>
</form>
<br>





<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        
        <div class="contact__widget">
            <img src="{{ asset('img/delivery/rightMark.jpg')}}" alt="right" class="rounded-pill">
            <h4>Order Confirmed</h4>
                
        </div>

    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            @if($num >= '1')
            <div class="contact__widget">
                <img src="{{ asset('img/delivery/rightMark.jpg')}}" alt="right" class="rounded-pill">
                <h4>Packing Order</h4>
                
            </div>
        @else
            <div class="contact__widget">
                <img src="{{ asset('img/delivery/withoutrightMark.jpg')}}" alt="right" class="rounded-pill">
                <h4>Packing Order</h4>
                
            </div>

        @endif
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        @if($num >= '2')
            <div class="contact__widget">
                <img src="{{ asset('img/delivery/rightMark.jpg')}}" alt="right" class="rounded-pill">
                <h4>Order on truck</h4>
                
            </div>
        @else
            <div class="contact__widget">
                <img src="{{ asset('img/delivery/withoutrightMark.jpg')}}" alt="right" class="rounded-pill">
                <h4>Order on truck</h4>
                
            </div>

        @endif
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        @if($num >= '3')
            <div class="contact__widget">
                <img src="{{ asset('img/delivery/rightMark.jpg')}}" alt="right" class="rounded-pill">
                <h4>Order Delivered</h4>
                
            </div>
        @else
            <div class="contact__widget">
                <img src="{{ asset('img/delivery/withoutrightMark.jpg')}}" alt="right" class="rounded-pill">
                <h4>Order Delivered</h4>
                
            </div>

        @endif
    </div>
</div>
@endsection