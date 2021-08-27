@extends('layouts.app')
@section('content')



    <div class="album py-5 bg-light" style="padding-top: 120px !important">
        <div class="container">

            <div class="row ">
                @foreach ($pages as $page)
                    <div class="col-12">
                        <div class="card-body">
                            <h1>{{ $page->title }}</h1>
                            <p class="card-text">{{ $page->excerpt }}</p>
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                        </div>
                        <div class="card mb-12 box-shadow">
                            <div class="card-img-top">
                                {!! $page->content !!}


                            </div>

                        </div>
                    </div>


                @endforeach
            </div>









        @endsection
