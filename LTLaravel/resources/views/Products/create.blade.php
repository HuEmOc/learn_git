@extends('Products.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" style="margin-top: 15px;"  href="{{route('product.index')}}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div style="color: red">
        @if ( $errors->any() )
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        </div>


        <form method="post" enctype="multipart/form-data" action="{{route('product.index')}}">
            {!! csrf_field() !!}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input placeholder="Name" class="form-control" name="name" type="text" value="{{old('name')}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea placeholder="Description" class="form-control" name="description"  value="{{old('description')}}" ></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input placeholder="Price" class="form-control" name="price" type="number" value="{{old('price')}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Photo:</strong>
                    <input placeholder="Photo" class="form-control" name="photo" type="file" value="{{old('photo')}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>




    </div>


@endsection