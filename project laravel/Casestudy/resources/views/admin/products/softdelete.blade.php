@extends('admin.master')
@section('content')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-secondary  d-flex justify-content-between align-items-center">
                        <h3 class="text-light">recycle bin</h3>
                    </div>
                    <div class="card-body" id="show_all_products">
                        <a href="{{ route('product.index') }}" class="btn btn-info btn-sm">View All Products</a>
                        <div class="card-body" id="show_all_products">
                            @if (Session::has('message'))
                                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                                    class="col-sm-6 alert alert-success">
                                    <strong>Success!</strong>{{ session::get('message') }}
                                </div>
                            @endif
                            <table class="table table-striped table-sm text-center align-middle">
                                <thead>
                                    <tr>
                                        <th class=" btn-danger ">#</th>
                                        <th>Name</th>
                                        <th>price</th>
                                        <th>quantity</th>
                                        <th>color</th>
                                        <th>Manipulation</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    @if ($products->count() > 0)
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>{{ $product->color }}</td>
                                                <td class="action">
                                                    <span class="action-restore">
                                                        <form action="{{ route('products.restore', $product->id) }}"
                                                            method="">
                                                            @csrf
                                                            <button type="submit" class="text-success mx-1 "
                                                                onclick="return confirm('do you want restore?')"><i
                                                                    class="bi bi-reply-all h4"></i></button>
                                                        </form>
                                                    </span>
                                                    <span class="action-delete">
                                                        <form action="{{ route('products.forceDelete', $product->id) }}"
                                                            method="POST ">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-danger mx-1 "
                                                                onclick="return confirm('do you want delete forever?')"><i
                                                                    class="bi-trash h4"></i></button>
                                                        </form>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                        <h5 class="text-center text-secondary my-5">No record present in the database!</h5>;
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

@endsection
