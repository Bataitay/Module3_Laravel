@extends('admin.master')
@section('content')
<h2>Information</h2>
<table >
    <tr>
      <th rowspan="4"><img src="{{asset('assets/images/categories/'.$category->image)}}" width="420px"></th>
      <th>Contact</th>

    </tr>
    <tr>
      <td></td>
      <td>{{ $category->id }}</td>

    </tr>
    <tr>
      <td></td>
      <td>{{ $category->name }}</td>
    </tr>
    
    <tr>
      <td></td>
      <td>{{ $category->created_at }}</td>
    </tr>
    <td class="">
      <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
  </td>
  </table>

@endsection



