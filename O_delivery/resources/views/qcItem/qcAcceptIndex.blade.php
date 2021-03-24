@extends('layouts.frontPage2')

@section('content')

    <div class="continer">

        <div class="jumbotron">


            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                
            </div>
            @endif

            
            <form action="">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID No</th>
                            <th>Order No</th>
                            <th>Item No</th>
                            <th>remarks</th>
                            <th>approvedBy</th>
                            <th>Created date & time</th>
                            <th>Updated date & time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($qcRetrive ?? '' as $item)
                            <tr style="background:white;">
                                @if (session()->exists($item->orderNo))
                                @else
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->orderNo }}</td>
                                    <td>{{ $item->itemNo }}</td>
                                    <td>{{ $item->remarks }}</td>
                                    <td>{{ $item->approvedBy }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>



                                    <td><a href="{{ action('acceptedController@edit', $item->id) }}"
                                            class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form role="" method="post"
                                            action="{{ action('acceptedController@destroy', $item->id) }}">
                                            {{ csrf_field() }}
                                            <div>
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <input id="submit" name="submit" type="submit" value="Delete"
                                                    class="btn btn-primary">

                                            </div>
                                        </form>
                                    </td>

                                @endif

                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </form>

        </div>


    </div>

@endsection
