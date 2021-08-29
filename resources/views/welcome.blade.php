@extends('layouts.app')
@section('content')

    <body>
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
                <div class="col-lg-4 col-12">

                    <title>President</title>
                    <img class="photo1" src="./img/photo1.png" />
                    <h2>Chaghla sofiane</h2>
                    <p>Fondateur de l'association HAYAT.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-12">

                    <title>Trésorier</title>
                    <img class="photo1" src="./img/photo1.png" />

                    <h2>Cohen michel</h2>
                    <p>Co-fondateur de HAYAT et responsable logitiques.
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-12">
                    <img class="photo1" src="./img/photo1.png" />

                    <h2>Doma luca</h2>
                    <p>Trésorier.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->


            @foreach ($articles as $article)


                <hr class="featurette-divider">
                @if ($loop->iteration % 2 == 0)
                    <div class="row-featurette">
                        <div class="col-md-5 smart">
                            <img class="fearturette-img" src="{{ $article->urlToImage }}" alt="" height="100%"
                                width="100%">


                        </div>
                        <div class="col-md-7 col-12">
                            <h2 class=" featurette-heading"> {{ $article->title }}</h2>
                            <p class=" lead">{{ $article->description }}</p>
                            <a href="{{ $article->url }}" target="_blank">
                                <button type="button" class="button">
                                    <span>Lire la suite!</span>
                                </button>
                            </a>
                        </div>

                    </div>
                @else

                    <div class="row-featurette">
                        <div class="col-md-7 col-sm-12">
                            <h2 class="featurette-heading"> {{ $article->title }}</h2>
                            <p class="lead">{{ $article->description }}</p>
                            <a href="{{ $article->url }}" target="_blank">
                                <button type="button" class="button">
                                    <span>Lire la suite!</span>
                                </button>
                            </a>
                        </div>
                        <div class="col-md-5 smart">
                            <img class="fearturette-img" src="{{ $article->urlToImage }}" alt="" height="100%"
                                width="100%">


                        </div>
                    </div>
                @endif
            @endforeach


            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
        <hr class="featurette-divider">

        <!-- FOOTER -->


        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Company<span>logo</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Blog</a>
                    ·
                    <a href="#">Pricing</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Faq</a>
                    ·
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">Company Name © 2015</p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

            </div>

            <div class="footer-right">

                <p>Contact Us</p>

                <form action="#" method="post">

                    <input type="text" name="email" placeholder="Email">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button>Send</button>

                </form>

            </div>

        </footer>


    </body>
@endsection
