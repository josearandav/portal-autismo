@extends('layout')
@section('content')
  <section class="container">
    <div class="columns features">
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
              <i class="fa fa-paw"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4>Que es el autismo?. </h4>
              <p>El autismo es un trastorno neurológico complejo que generalmente dura toda la vida. Es parte de un grupo de trastornos conocidos como trastornos del espectro autista (ASD por sus siglas en inglés).</p>
              <p><a href="https://www.autismspeaks.org/qu%C3%A9-es-el-autismo">Leer mas</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
              <i class="fa fa-empire"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4>Tipos de autismo.</h4>
              <p>El autismo generalmente se diagnostica a la edad de 3 años y es importante tratarlo con la ayuda de un profesional. Hoy en día hay cuatro más tipos de autismo que voy a explicar a continuación. No te pierdas los detalles de las características de cada uno de ellos para saber diferenciarlos.</p>
              <p><a href="https://tiposdeautismo.com/">Leer mas</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
              <i class="fa fa-id-card-o"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4> Cuales son los sintomas y signos?.  </h4>
              <p>Los signos y síntomas del Autismo tanto en niños como en adultos, los signos y características del Trastorno del Espectro Autista (TEA) afectarán las relaciones sociales, la comunicación y los comportamientos e intereses.</p>
              <p><a href="https://tiposdeautismo.com/cuales-son-los-signos-y-sintomas-del-autismo/">Leer mas</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="intro column is-8 is-offset-2">
      <h2 class="title">Perfecto, si estas acá, es hora que comencemos a trabajar juntos!!</h2><br>
      <p class="subtitle">Nuestro propósito principal es crear una comunidad de ayuda, acá estaremos para compartir nuestras experiencias. Ponemos a disposición nuestras redes sociales y noticias, ademas de secciones de foro y chat.</p>
    </div>
    <!--
    <div class="sandbox">
      <div class="tile is-ancestor">
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Hello World</p>
            <p class="subtitle">What is up?</p>
          </article>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Foo</p>
            <p class="subtitle">Bar</p>
          </article>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Third column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      -->
      <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
          <div class="tile">
            <div class="tile is-parent is-vertical">
              <article class="tile is-child notification is-white">
                <p class="title">Noticia de la semana</p>
                <p class="subtitle">Noticias y actualidad</p>
                <iframe src="https://www.publimetro.cl/cl/noticias/2018/04/02/autismo-autista.html" width="380" height="510" marginwidth="0" marginheight="0" frameborder="no" scrolling="yes" style="border:0px;"></iframe>
              </article>
              <!--
              <article class="tile is-child notification is-white">
                <p class="title">Vertical tiles</p>
                <p class="subtitle">Bottom box</p>
              </article>  
              -->            
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-white">
                <p class="title">Twitter</p>
                <p class="subtitle">Siguenos en nuestro twitter</p>
                <article>
                  <a class="twitter-timeline" href="https://twitter.com/AcompanoTea?ref_src=twsrc%5Etfw">Tweets de Tea-Acompaño</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                </article>
            </div>
          </div>
          <div class="tile is-parent is-shady">
            <article class="tile is-child notification is-white">
              <p class="title">"Material descargable"</p>
              <p class="subtitle">Sección con aportes de la comunidad!</p>
              <div class="content">
                <p> Puedes acceder a nuestra plataforma de material descargable con solo <b>registrándote</b> en nuestra web, alli encontraras material didactico, libros, cursos o tutoriales, juegos. También puedes hacer aportes a esta sección registrándote en la aplicación y envianos un mail comentando el tipo de material que quieres aportar. </p>
              </div>
            </article>
          </div>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <div class="content">
              <p class="title">Comunicate con nosotros</p>
              <p class="subtitle"></p>
              <div class="content">
                <!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTeaAyudo%2F&tabs=messages&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=193751147899457" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>-->
                <iframe
                   allow="microphone;"
                   width="300"
                   height="600"
                   src="https://console.dialogflow.com/api-client/demo/embedded/144d700a-272b-41b6-a926-37aab5df898f">
                </iframe>
              </div>
            </div>
          </article>
        </div>
      </div>

      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <article class="tile is-child notification is-white">
            <p class="title">Side column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div> -->
        <div class="tile is-parent is-8 is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Sitios web de interés</p>
            <p class="subtitle">Publicaremos links de interés, y noticias</p>
            <div class="content">
              <p>
              <ul>
                <li>
                  <a href="https://amasperger.wordpress.com/">Amasperger</a>
                  <br>
                  <a href="http://www.autismochile.org/">Autismo Chile</a>
                  <br>
                  <a href="http://apoyoautismochile.blogspot.com/">Apoyo Autismo Chile</a>
                  <br>
                  <a href="https://educrea.cl/educacion-y-autismo-la-importancia-del-estimulo-visual/">Educrea Chile</a>
                  <br>
                </li>
              </ul>
              </p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
 @stop
 