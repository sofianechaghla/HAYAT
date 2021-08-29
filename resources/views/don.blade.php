@extends('layouts.app')
@section('content')


    <div class="jumbotron imgdon text-white">
        <div class="container">
            <h1 class="display-3">Bonjour, le monde!</h1>
            <p>Lorsqu’un enfant est petit, les parents lui apprennent à partager. Cette éducation n’a pas de sens si les
                parents eux-mêmes ne la suivent pas. En faisant un don, vous pouvez, peut-être, montrer un bon exemple à vos
                enfants. De plus, comme le disait l’acteur Leonard Nimoy : « Plus on partage, plus on possède. Voilà le
                miracle ! »</p>


            <div class="row mt-5">
                <div class="col-12 col-md-6 offset-md-3 d-flex justify-content-center">
                    <form action=" https://www.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="hosted_button_id" value="KWTMMZNQGPJW8" />
                        <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif"
                            style="border: 0px;" name="submit" title="PayPal - The safer, easier way to pay online!"
                            alt="Donate with PayPal button" />
                        <img alt="" style="border: 0px;" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1"
                            height="1" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
