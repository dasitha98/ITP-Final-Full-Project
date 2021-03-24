@extends('layouts.frontPage2')

@section('content')

<div class="continer">


    <div class="jumbotron">
        
            
            <form action="">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sr.No</th>
                            <th>Order No</th>
                            <th>Item No</th>
                            <th>Description</th>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Supplier Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mainRetrive as $item)
                        <tr style="background:white;">
                        <td>{{$item->id}}</td>    
                        <td>{{$item->orderNo}}</td>
                        <td>{{$item->itemNo}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->customerName}}</td>
                        <td>{{$item->customerAddress}}</td>
                        <td>{{$item->supplierName}}</td>
                        

                        </tr>
                        @endforeach

                    </tbody>


                </table>
            </form>

    </div>


</div>

@endsection