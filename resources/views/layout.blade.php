<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tea-Acompaño</title>
        <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Bulma Version 0.7.1-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/hero.css">
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    </head>
<body>
          <section class="hero is-info is-medium is-bold">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                    <div class="navbar-brand">
            <a class="navbar-item" href="../">
              <img src="http://www.espiralsantacruz.com/wp-content/uploads/2017/02/ada75c21274f58497cd22cda18cadf15.png" alt="Logo">  
            </a>
            <!--Menu responsivo-->
              <span class="navbar-burger burger" data-target="navbarMenu">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
              </span>
              </div>
               <div id="navbarMenu" class="navbar-menu">
                  <div class="navbar-end">
                  <div class="tabs is-right">
                <ul>
              <li class="is-active"><a href="inicio">
                Inicio
              </a></li>
                <li><a href="about">
                Sobre nosotros
              </a></li>
              @auth
                <li><a href="https://josearandav.github.io/Tea-Docs/docs/">
                Zona de descargas
              </a></li>
              @endauth
              @guest
                <li><a href="register">
                Registro
              </a></li>

                <li><a href="login">
                Login
              </a></li>
              @endguest
              @auth
                <li><a href="/">
                Deslogear
              </a></li>
              @endauth

                </ul>
              <!--<a class="navbar-item" href="inicio">
                Inicio
              </a>
              <a class="navbar-item" href="about">
                Sobre nosotros
              </a>
              @auth
              <a class="navbar-item" href="https://josearandav.github.io/Tea-Docs/docs/">
                Zona de descargas
              </a>
              @endauth
              @guest
              <a class="navbar-item" href="register">
                Registro
              </a>

              <a class="navbar-item" href="login">
                Login
              </a>
              @endguest
              @auth
               <a class="navbar-item" href="/">
                Deslogear
              </a>
              @endauth-->
              <span class="navbar-item">
                <a class="button is-white is-outlined is-small" href="http://127.0.0.1:8000/logout">
                  <span class="icon">
                    <i class="fa fa-github"></i>
                  </span>
                  <span>Ver el codigo</span>
                </a>
              </span>
            </div>
            </div>
          </div>
        </div>
      </nav> 
    
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          TEA-acompaño &lt;Entre mayor el desafío mayor es la victoria&gt;
        </h1>
        <img src="http://saludiario.grupodecomunicac.netdna-cdn.com/wp-content/uploads/2016/10/autismo-730x487.jpg" alt="Autismo" width="300" height="50">
        <h2 class="subtitle"> Juntos hacia el futuro!
        </h2>
      </div>
    </div>
  </section>
  <div class="box cta">
    <p class="has-text-centered">
      <span class="tag is-primary">TEA-acompaño</span> En este camino, la unión y el amor es quien nos lleva a la victoria!.
    </p>
  </div>

    @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>Tea-Acompaño</strong> by <a href="https://josearandav.github.io/">José Aranda Vera</a>. Todos los derechos de esta pagina tienen licencia
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
        </p>
        <p>
          <a class="icon" href="https://github.com/josearandav">
            <i class="fa fa-github"></i>
          </a>
        </p>
      </div>
    </div>
  </footer>
  <script async type="text/javascript" src="../js/bulma.js"></script>
  <script src="../js/bulma.js"></script>
</body>
</html>

 