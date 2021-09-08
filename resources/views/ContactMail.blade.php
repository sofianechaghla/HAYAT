@extends('layouts.app')
@section('content')


    <div class="row">

        <div>
            <h1>Contact Message</h1>
            <p>Name:{{ $details['name'] }}</p>
            <p>phone:{{ $details['phone'] }}</p>
            <p>email:{{ $details['email'] }}</p>
            <p>message:{{ $details['message'] }}</p>
        </div>
    </div>






@endsection
