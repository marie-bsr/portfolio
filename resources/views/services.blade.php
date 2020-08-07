
@include('navigation')
<!-- Bootstrap CSS File -->
<link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

<style>
       .box{
margin-top: 200px;
    }

.tab-content {
  padding: 0;
}

.card {
  border-radius: 0 0 .25rem .25rem;
  border-top: 0;
}

.nav-tabs {
  height: 42px;
  padding: 0;
  position: relative;

  .nav-item {
    margin-left: 0;

    a {
      color: black;
      display: block;
      padding: 8px 25px;
    }


    &.overflow-tab {
      background-color: white;
      display: none;
      position: absolute;
      right: 0;
      width: 150px;
      z-index: 1;

      a {
        border: 1px solid lightgray;
        border-radius: 0;
        padding: 6px 10px;

        &:hover,
        &:focus,
        &:active,
        &.active {
          background-color: lightgray;
        }
      }

      &:last-child {
        border-radius: 0 0 0 4px;
      }

    }

    &.overflow-tab-action {
      position: absolute;
      right: 0;
    }
  }

}

</style>
  <!--/ Section Services Star /-->
  <section id="services" class="services-mf route">
    <div class="container box">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="service-box">
            <p>1. Votre site web est un investissement et non une dépense
                À court et moyen termes, vous pourrez constater les bienfaits d'un site Internet. Vos dépenses en impression seront diminuées, votre service à la clientèle sera amélioré, vos ventes augmenteront, votre entreprise acquerra une notoriété supplémentaire, etc. Le Web est un monde sans frontières qui est accessible en tout temps. Votre site Internet ne sera jamais fermé contrairement à votre boutique. Votre page web peut vendre et répondre à des questions de manière autonome.

                2. Une vitrine disponible en tout temps et accessible de partout
                Ce qui est formidable avec le Web, c'est que c'est accessible en tout temps et de partout. Votre clientèle peut donc consulter votre site Internet et trouver l'information par rapport au produit ou au service qui l'intéresse, et ce, à toute heure du jour et de la nuit. Par le fait même, l'internaute peut naviguer sur votre page web pour répondre à ses questions sans déranger l'un de vos employés qui peut continuer de vaquer à ses occupations pendant ce temps.</p>
        </div>
      </div>
    </div>
    <div class="layout--tabs">
        <div class="container">
          <div class="header">
            <h2>Ma manière de travailler: les étapes de réalisation d'un projet</h2>
          </div>

          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" id="tabs-title-region-nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#etape-1" aria-selected="false" aria-controls="etape-1" id="etape-1-tab">Prise de contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#etape-2" aria-selected="false" aria-controls="etape-2" id="etape-2-tab">Devis et réservation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#etape-3" aria-selected="false" aria-controls="etape-3" id="etape-3-tab">Questionnaire détaillé</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#etape-4" aria-selected="false" aria-controls="etape-4" id="etape-4-tab">Conception et réalisation </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#etape-5" aria-selected="false" aria-controls="etape-5" id="etape-5-tab">Finalisation</a>
              </li>

            </ul>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="tab-content">

                <div id="etape-1" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="etape-1-tab">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div id="etape-2" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="etape-2-tab">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
                <div id="etape-3" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="etape-3-tab">
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                  <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div>
                <div id="etape-4" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="etape-4-tab">
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
                <div id="etape-5" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="etape-5-tab">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <script src=" {{ asset('js/servicesTabs.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


