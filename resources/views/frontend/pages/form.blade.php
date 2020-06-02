@extends('frontend.theme.master')
@section('title', 'Application Form')



@section('content')

    <div class="jumbotron text-left">
        <h1>Application Form</h1>
        <br>
             @if ( Session::get('msg', '') != '')
            <div class="alert alert-primary" role="alert">
                {{Session::get('msg', '')}}
            </div>
             @endif


        <div class="col-6">
            <form action="{{ route('applicationForm') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required>

            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>

            </div>
            <div class="form-group">
                <label for="phn">Phone:</label>
                <input type="text" class="form-control" id="phn" placeholder="Enter password" name="phone" required>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>

@stop
