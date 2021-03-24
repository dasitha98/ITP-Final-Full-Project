@extends('layouts.frontPage2')

@section('content')

<div class="continer">

    <div class="jumbotron">



            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                
            </div>
            @endif


            <form action="CheckingItem" method="POST" class="form-horizontal" autocomplete="on">

                
                <div class="form-group row">
                <label for="OrderNo" class="col-sm-2 control-label">Order No</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="orderNo" name="orderNo">
                    <div id="countryList">
                    </div>
                </div>
                </div>
                <div class="form-group row">
                <label for="ItemNo" class="col-sm-2 control-label">Item No</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="itemNo" id="itemNo">
                    <div id="itemList">
                    </div>
                </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" value="save/insert_Data" class="btn btn-primary btn-lg">S A V E</button>
                </div>
                </div>

                {{ csrf_field() }}
            </form>

            <main class="py-4">
                @yield('table')
            </main>
    
    </div>
</div>   


@endsection

