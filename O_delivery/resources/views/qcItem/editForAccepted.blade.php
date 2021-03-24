@extends('layouts.frontPage2')

@section('content')

<div class="continer">


    <div class="jumbotron">


            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

        <form class="form-horizontal" role="form" method="post" action="{{action('acceptedController@update',$accepted->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH"/>
                
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="remarks">{{$accepted->remarks}}</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Save" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
                
            </form>

        
    </div>
</div> 

@endsection

