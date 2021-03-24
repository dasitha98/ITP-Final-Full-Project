@extends('deliveryItem.insertForm')

@section('table')

<div class="continer">

    
    <div class="jumbotron">
       
            
            <form action="">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sr.No</th>
                            <th>Order No</th>
                            <th>Remarks</th>    
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($delivery as $item)
                        <tr style="background:white;">
                        <td>{{$item->id}}</td>
                        <td>{{$item->orderNo}}</td>
                        <td>{{$item->remarks}}</td>
                        <td>{{$item->customerName}}</td>
                        <td>{{$item->customerAddress}}</td>

                        </tr>
                        @endforeach

                    </tbody>


                </table>
            </form>

    </div>


</div>

@endsection