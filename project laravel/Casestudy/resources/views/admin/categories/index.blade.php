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
                            <button class="btn btn-light" style="--clr:#ff1867" data-bs-toggle="modal"
                                data-bs-target="#addCategoryModal"></i><span>Add New Category</span><i></i>
                            </button>
                        </div>
                        @include('admin.categories.add')
                    </div>
                    <div class="card-body" id="show_all_categories">
                        <h5 class="text-center text-secondary ">Loading...</h5>
                        <div class="card-body" id="show_all_categories">
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
                                        <th>The.Number.of.categorys</th>
                                        <th>Create Date</th>
                                        <th>Manipulation</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">

                                    @foreach ($categories as $category)
                                        <tr class="item-{{ $category->id }}">
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->products->count() }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td class="">
                                                <a href="{{ route('category.edit', $category->id) }}"><i
                                                        class="bi-pencil-square h4"></i></a>
                                                <a href="{{ route('category.show', $category->id) }}"><i
                                                        class="bi bi-eye h4"></i></a>
                                                <a href="#" id="{{ $category->id }}"
                                                    class="text-danger mx-1 deleteIcon"><i class="bi-trash h4 h4"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $categories->appends(request()->query()) }}
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
                        url: '{{ route('category.destroy',$category->id) }}',
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
                            $('.item-'+ id).remove();

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
