@extends('layout')

@section('title')
User Detail
@endsection

@section('content')

<table class="table table-responsive table-hover">

<tr>
    <th>Name :</th>
    <td>{{ $users->name }}</td>
</tr>

<tr>
    <th>Email :</th>
    <td>{{ $users->email }}</td>
</tr>

<tr>
    <th>Age :</th>
    <td>{{ $users->age }}</td>
</tr>

<tr>
    <th>City :</th>
    <td>{{ $users->city }}</td>
</tr>
</table>

<a href="{{route('user.index')}}" class="btn btn-info">Back</a>
@endsection