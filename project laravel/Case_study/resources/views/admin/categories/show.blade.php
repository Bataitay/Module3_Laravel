@extends('admin.master')
@section('content')
<table class="table table-striped table-sm text-center align-middle">
    <thead>
            <tr class=" btn-danger ">#</tr>
            <tr>information</tr>
    </thead>
    <tbody>
                <th>{{ $category->id }}</th>
                <th>{{ $category->name }}</th>
                <th></th>
                <th>{{ $category->created_at }}</th>
                <td class="">
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </td>
    </tbody>
</table>
@endsection
