  <!-- FOOTER -->


  <footer class="footer-distributed">

      <div class="footer-left">

          <h3>HAYAT<span>logo</span></h3>

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

          <p class="footer-company-name">Company HAYAT © 2021</p>

          <div class="footer-icons">

              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>

          </div>

      </div>

      <div class="footer-right">

          <p>Contact Us</p>
          @if (Session::has('message_sent'))
              <div class="alert alert-success" role="alert">
                  {{ Session::get('message_sent') }}


          @endif
          <form method="post" action="{{ route('contact.send') }}" enctype="multipart/form-data">
              @csrf

              <input type="text" name="name" placeholder="Nom" class="from-control">

              <input type="text" name="phone" placeholder="Numéro de telephone" class="from-control">

              <input type="text" name="email" placeholder="Email" class="from-control">
              <textarea name="message" placeholder="Message"></textarea>
              <button type="submit">Envoyer</button>

          </form>

      </div>

  </footer>
