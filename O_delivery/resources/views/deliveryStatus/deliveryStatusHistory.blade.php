@extends('deliveryStatus.deliveryStatusHome')

@section('content')


    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <!--<th>Order No</th>-->
                
            </tr>
        </thead>
        <tbody>
            @foreach ($qcRetrive as $item)
            <tr style="background:rgb(26, 25, 25);">
                
            <td><a href="http://localhost/ITPFromZaman2/O_delivery/public/deliveryStatus/{{$item->orderNo}}">{{$item->orderNo}}</a></td>
            <td><a href ='{{route('deliveryStatus.show',$item->orderNo)}}'>Click here to find the status</a></td>
           

            </tr>
            @endforeach

        </tbody>


    </table>


@endsection
