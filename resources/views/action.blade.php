@extends('layouts.app')
@section('content')




    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row ">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-12">
                        <div class="card-body">
                            <h1>{{ $post->title }}</h1>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                        </div>
                        <div class="card mb-4 box-shadow">
                            <div class="card-img-top " style="height: 400px;">
                                {!! $post->body !!}


                            </div>
                        </div>
                    </div>


                @endforeach
            </div>


        @endsection
