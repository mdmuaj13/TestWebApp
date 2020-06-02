@extends('frontend.theme.master')
@section('title', 'Applications List')


@section('content')

    <div class="container">
        <h2>Application list</h2>

        <table class="table table-striped .table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $col )
                <tr>
                    <th scope="row">{{ $col['id'] }}</th>
                    <td>{{ $col['name'] }}</td>
                    <td>{{ $col['email'] }}</td>
                    <td>{{ $col['phone'] }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>


@endsection
