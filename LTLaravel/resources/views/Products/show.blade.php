@extends('Products.default')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top: 15px;"  href="{{route('product.index')}}">Back</a>
            </div>
        </div>

    </div>
    <table class="table">
        <tr class="success">
            <td>Name</td>
            <td>{{ $item->name }}</td>
        </tr>
        <tr class="danger">
            <td>Description</td>
            <td>{{ $item->description }}</td>
        </tr>
        <tr class="success">
            <td>Price</td>
            <td> {{ $item->price }}</td>
        </tr>
        <tr class="">
            <td>Photo</td>
            <td><img src="{{ asset('photo/'. $item->photo) }}"
                     style="height: 300px; width: 450px ; text-align: center"></td>
        </tr>
    </table>

@endsection