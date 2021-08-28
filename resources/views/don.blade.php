@extends('layouts.app')
@section('content')

    <div class="imgdon">
        <div class="d-flex ">
            <div class="m-auto pt-5 pt-5 text-center">
                <h4 class="display-2 text-white mb-5">
                    Qui sommes nous ?
                </h4>



            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-6 offset-md-3 d-flex justify-content-center">
            <form action=" https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="KWTMMZNQGPJW8" />
                <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0"
                    name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
            </form>
        </div>
    </div>
@endsection
