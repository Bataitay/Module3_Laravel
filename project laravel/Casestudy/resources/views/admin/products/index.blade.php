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
                        <h3 class="text-light">Manage Categories</h3>
                        <div class="card-btn">
                            <a href="{{ route('product.create') }}" class="btn btn-light" style="--clr:#ff1867">
                                </i><span>Add New product</span><i></i></a>
                        </div>
                    </div>
                    <div class="card-body" id="show_all_products">

                        <div class="bin col-md-12">
                            <div class="col-md-6">
                                <a href="{{ route('products.trashed') }}" class="btn btn-primary btn-sm">recycle bin</a>
                            </div>
                            <?php $counter = 0; ?>
                            @if (!empty($categories))
                                @foreach ($categories as $category)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" {{ $counter == 0 ? 'checked' : '' }}
                                            attr-name="{{ $category->name }}"
                                            class="custom-control-input category_checkbox" id="{{ $category->id }}">
                                        <label class="custom-control-label"
                                            for="{{ $category->id }}">{{ ucfirst($category->name) }}</label>
                                    </div>
                                    <?php $counter++; ?>
                                @endforeach
                            @endif
                        </div>
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
                                            <tr class="item-{{ $product->id }}">
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>{{ $product->color }}</td>
                                                <td class="">
                                                    @if (request()->has('view_deleted'))
                                                        <a href="{{ route('product.restore', $product->id) }}"
                                                            class="text-success mx-1 "><i
                                                                class="bi bi-reply-all h4"></i></a>
                                                    @else
                                                        <a href="{{ route('product.edit', $product->id) }}"><i
                                                                class="bi-pencil-square h4"></i></a>
                                                        <a href="{{ route('product.show', $product->id) }}"><i
                                                                class="bi bi-eye h4"></i></a>
                                                    @endif
                                                    <a href="#" id="{{ $product->id }}"
                                                        class="text-danger mx-1 deleteIcon"><i
                                                            class="bi-trash h4"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <h5 class="text-center text-secondary my-5">No record present in the database!</h5>;
                                    @endif
                                </tbody>
                            </table>
                            {{ $products->onEachSide(5)->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('product.destroy', 0) }}',
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(res) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            $('.item-' + id).remove();

                        }

                    });
                }
            })
        });

        $(document).ready(function() {
            $('#myInput').on('keyup', function(event) {
                event.preventDefault();
                let key = $(this).val().toLowerCase();
                $('#myTable tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(key) > -1);
                });
            });
        });
    </script>
@endsection
