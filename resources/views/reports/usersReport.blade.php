@extends('reports.root')
@section('title','Users Report')
@section('content')
<table>
    <thead>
        <tr>
            <th>
                <strong>ID</strong>
            </th>
            <th>
                <strong>Name</strong>
            </th>
            <th>
                <strong>Email</strong>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>
                {{$user->id}}
            </td>
            <td>
                {{$user->name}}
            </td>
            <td>
                {{$user->email}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection