@extends('layouts.frontPage2')

@section('content')

    <div class="continer">


        <div class="jumbotron">


            <form action="">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID No</th>
                            <th>Order No</th>
                            <th>Item No</th>
                            <th>Remarks</th>
                            <th>Rejected By</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($qcRetrive as $item)
                            <tr style="background:white;">
                                @if (session()->exists($item->orderNo))
                                @else
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->orderNo }}</td>
                                    <td>{{ $item->itemNo }}</td>
                                    <td>{{ $item->reasonForRejcet }}</td>
                                    <td>{{ $item->rejectedBy }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td><a href="{{ action('rejectedController@edit', $item->id) }}"
                                            class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form role="" method="post"
                                            action="{{ action('rejectedController@destroy', $item->id) }}">
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
