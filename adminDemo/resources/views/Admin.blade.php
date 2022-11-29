@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-grey">
        @if (Session::has('message'))
            <div class="alert alert-success text-center">
                {{ Session::get('message') }}
                @php
                    Session::forget('message');
                @endphp
            </div>
        @endif
        @if (Session::has('status'))
            <div class="alert alert-success text-center">
                {{ Session::get('status') }}
                @php
                    Session::forget('status');
                @endphp
            </div>
        @endif
        <div class="container justify-content-center ">

            <h1 class="display-3 text-center">Admin Dashboard </h1>
            <p class="lead">
            </p>
        </div>
    </div>

    <div class="card w-100">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add product
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fill Product Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ url('admin') }}" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                {{ method_field('post') }}
                                <div class="mb-3">
                                    <label for="floatingInput" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="floatingInput"
                                        aria-describedby="default input example">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingInput">Price</label>
                                    <input name="price" class="form-control" type="text" placeholder="Default input"
                                        id='floatingInput' aria-label="default input example">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"> Description</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">upload image</label>
                                    <input class="form-control" type="file" name="logo" id="formFile">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Featured
                </div>

                <div class="container mt-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">#</th>
                                <th scope="col" width="15%">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">website</th>
                                <th scope="col">Logo</th>
                            </tr>
                        </thead>
                        <tbody class="align-bottom">
                            @foreach ($products as $product)
                                <tr >
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td><details>{{ $product->description }}</details></td>
                                    <td class="w-25 h-25">
                                        <img class="rounded-circle rounded-3 d-block w-25 h-25" src="{{ asset('/storage/images/logos/' . $product->img) }}"
                                            alt="">
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ url('admin/' . $product->id . '/edit') }}">
                                            edit product
                                        </a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ url('admin/' . $product->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">
                                                delete product
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex">
                        {!! $products->links() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
@endsection
