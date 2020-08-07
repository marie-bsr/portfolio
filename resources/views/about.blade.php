@include('navigation')
<!-- Bootstrap CSS File -->
<link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

<style>
       .box{
margin-top: 200px;
    }

</style>


<section id="about" class="about-mf sect-pt4 route">
    <div class="container box">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/freelancer.png" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Nom: </span> <span>Marie</span></p>
                      <p><span class="title-s">Profil: </span> <span>Full stack developer</span></p>
                      <p><span class="title-s">Email: </span> <span>marie.basri@gmail.com</span></p>
                      <p><span class="title-s">Portable: </span> <span>06 81 97 37 91</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Compétences</p>
                  <span>HTML</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="85" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>CSS3</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>PHP</span> <span class="pull-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      A propos
                    </h5>
                  </div>
                  <p class="lead">
                    Conceptrice et développeuse d'applications, je crée des solutions adaptées à vos besoins.
                  </p>
                  <p class="lead">
                    Mes priorités: réaliser des sites sécurisés, accessibles, responsives en favorisant l'expérience utilisateur.
                  </p>
                  <p class="lead">
                    Passionnée de design, j'attache beaucoup d'importance au visuel.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



