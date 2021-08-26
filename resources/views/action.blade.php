@extends('layouts.app')
@section('content')




    <div class="album py-5 bg-light" style="padding-top: 120px !important">
        <div class="container">

            <div class="row ">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-12">
                        <div class="card mb-4 box-shadow">
                            <div class="card-img-top">
                                {!! $post->body !!}


                            </div>
                            <div class="card-body">
                                <h1>{{ $post->title }}</h1>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <div class="d-flex justify-content-between align-items-center">

                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>


        @endsection
