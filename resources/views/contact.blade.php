
@include('navigation')
<!-- Bootstrap CSS File -->
<link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

<style>

       .box{
margin-top: 200px;

    }
    .red{
        background-color: #f6f3ef;
    }
</style>
  <!--/ Section Contact-Footer Star /-->
  <section>
<div class="red mt-4">
    <div class="container box">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-9">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Contactez-moi!
                    </h5>
                  </div>
                  <div>
                      <form action="{{ url('contact') }}" method="post" role="form" class="contactForm">
                        @csrf
                      <div id="sendmessage">Votre message a été envoyé. Merci!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="Votre nom" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="phone_number" class="form-control  @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" placeholder="Votre numéro de téléphone" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control  @error('secteur') is-invalid @enderror" name="secteur" id="secteur" placeholder="Votre secteur d'activité">{{ old('secteur') }}</textarea>
                                @error('secteur')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                Avez-vous déja démarré votre activité?
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="oui" name="started">
                                    <label class="custom-control-label" for="oui">Oui</label>
                                  </div>
<div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="non" name="started">
    <label class="custom-control-label" for="non">Non</label>
  </div>
                            </div>
                        </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control  @error('sites') is-invalid @enderror" name="sites" id="sites" rows="8" placeholder="Indiquez-moi les sites ou les comptes qui vous plaisent ou vous inspirent">{{ old('sites') }}</textarea>
                                @error('sites')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" rows="8" placeholder="Expliquez-moi votre besoin et ce que vous attendez de notre collaboration">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Envoyer mon Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Parlons de votre projet
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                        Remplissez ce questionnaire afin que je puisse étudier votre demande et vous recontacter rapidement.
                    </p>

                  </div>
                  <div class="socials">
                    <ul>

                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>

