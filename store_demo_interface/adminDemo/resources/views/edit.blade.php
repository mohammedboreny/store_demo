@extends('Master')
@section('content')

    <div class="container w-50 ">
        <a class="btn btn-danger text-center mt-5" href="{{ url('admin') }}">back</a>
        <form method="POST" action="{{ url('admin/' . $products->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="floatingInput" class="form-label">Name</label>
                <input type="text" name="name" value="{{ $products->name }}" class="form-control" id="floatingInput"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="floatingInput">Email address</label>
                <input name="price" class="form-control" value="{{ $products->price }}" type="text"
                    placeholder="Default input" id='floatingInput' aria-label="default input example">
            </div>
           
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> Description</label>
                    <textarea name="description" class="form-control" value="{{ $products->description }}" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Logo</label>
                <input class="form-control" value="{{ $products->img }}" type="file" name="logo" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">edit</button>
        </form>
    </div>
    @if (Session::has('status'))
        <div class="alert alert-success text-center">
            {{ Session::get('status') }}
            @php
                Session::forget('status');
            @endphp
    @endif
    </div>
@endsection
