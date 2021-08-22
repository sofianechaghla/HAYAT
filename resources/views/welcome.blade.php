@extends('layouts.app')
@section('content')


    <main role="main">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="9000"
            data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src=".\img\eau_amerique_latine.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src=".\img\eau_afrique.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src=".\img\eau_enfant.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>

    <!-- Marketing messaging and featurettes
                                      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">

                <!-- <svg class=" bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                                              role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                                              <title>Placeholder</title> -->
                <img class="photo1" src="./img/photo1.png" />
                <!-- <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text> -->


                <h2>Michel cohen</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first
                    column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                </svg>

                <h2>Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.
                </p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                        dy=".3em">140x140</text>
                </svg>

                <h2>Heading</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->


        @foreach ($articles as $article)


            <hr class="featurette-divider">
            @if ($loop->iteration % 2 == 0)
                <div class="row-featurette">
                    <div class="col-md-5">
                        <img class="fearturette-img" src="{{ $article->urlToImage }}" alt="" height="100%" width="100%">


                    </div>
                    <div class="col-md-7">
                        <h2 class="ml-5 featurette-heading"> {{ $article->title }}</h2>
                        <p class="ml-5 lead">{{ $article->description }}</p>
                        <a href="{{ $article->url }}" target="_blank"><button></button></a>
                    </div>

                </div>
            @else

                <div class="row-featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading"> {{ $article->title }}</h2>
                        <p class="lead">{{ $article->description }}</p>
                        <a href="{{ $article->url }}" target="_blank"><button></button></a>
                    </div>
                    <div class="col-md-5">
                        <img class="fearturette-img" src="{{ $article->urlToImage }}" alt="" height="100%" width="100%">


                    </div>
                </div>
            @endif
        @endforeach


        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
    <hr class="featurette-divider">

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
@endsection
