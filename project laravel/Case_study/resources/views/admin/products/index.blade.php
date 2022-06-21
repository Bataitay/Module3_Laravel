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
                                        <th>The.Number.of.Products</th>
                                        <th>Create Date</th>
                                        <th>Manipulation</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td></td>
                                            <td>{{ $category->created_at }}</td>
                                            <td class="">
                                                <a href="{{ route('categories.edit', $category->id) }}"><i
                                                        class="bi-pencil-square h4"></i></a>
                                                <a href="{{ route('categories.show', $category->id) }}"><i
                                                        class="bi bi-eye h4"></i></a>
                                                <a href="#" id="{{ $category->id }}"
                                                    class="text-danger mx-1 deleteIcon"><i class="bi-trash h4 h4"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- {{ $categories->appends(request()->query()) }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <style>
        .card-btn .btn-light {
            color: #fff;
            background: #444;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            transition: 0.5s;
            border: none;
        }

        .card-btn button:hover {
            letter-spacing: 0.25em;
            /* background: var(--clr); */
            color: var(--clr);
            box-shadow: 0 0 35px var(--clr);
        }

        .card-btn button::before {
            content: "";
            position: absolute;
            inset: 2px;
            /* background: #27282c; */
        }

        .card-btn button span {
            position: relative;
            z-index: 1;
        }

        .card-btn button i {
            position: absolute;
            inset: 0;
            display: block;
        }

        .card-btn button i::before {
            content: "";
            position: absolute;
            border: 2px solid var(--clr);
            top: 8.5px;
            left: 94%;
            width: 15px;
            height: 6px;
            background: #27282c;
            transform: translateX(-50%);
            transition: 0.5s;
        }

        .card-btn button:hover i::before {
            width: 20px;
            left: 82%;
        }

        .card-btn button i::after {
            content: "";
            position: absolute;
            border: 2px solid var(--clr);
            bottom: 7.7px;
            left: 85%;
            width: 15px;
            height: 5.8px;
            background: #27282c;
            transform: translateX(-50%);
            transition: 0.5s;
        }

        .card-btn button:hover i::after {
            width: 20px;
            left: 94%;
        }
    </style>
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
                        url: '{{ route('categories.destroy',$category->id) }}',
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(res) {
                            // console.log(response);
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    });
                }
            })
        });
    </script>
@endsection
