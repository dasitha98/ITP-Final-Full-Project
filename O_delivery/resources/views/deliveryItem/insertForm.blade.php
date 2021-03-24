@extends('layouts.frontPage2')

@section('content')

    <div class="continer">

        <div class="jumbotron">




            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}

                </div>
            @endif

            <!--<form action="CheckingItem" method="POST" class="form-horizontal" autocomplete="on">-->
            <form action="deliveryItem" method="post" class="form-horizontal" autocomplete="on">

                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="OrderNo" class="col-sm-2 control-label">Order No</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="orderNo" name="orderNo">
                        <div id="countryList">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ItemNo" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" rows="4" name="remarks" id="remarks"></textarea>

                        <!-- <input type="text" class="form-control" name="remarks" id="remarks"> -->

                        <div id="itemList">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" value="save/insert_Data" class="btn btn-primary btn-lg">S A V
                            E</button>
                    </div>
                </div>


            </form>

            <main class="py-4">
                @yield('table')
            </main>

        </div>
    </div>


@endsection
