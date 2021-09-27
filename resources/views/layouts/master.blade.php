<!DOCTYPE html>
<html lang="en"
dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible"
  content="IE=edge">
  <meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> @yield('title')</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots"
  content="noindex">

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&display=swap"
  rel="stylesheet">

  <!-- Perfect Scrollbar -->
  <link type="text/css"
  href="assets/vendor/perfect-scrollbar.css"
  rel="stylesheet">

  <!-- Material Design Icons -->
  <link type="text/css"
  href="assets/css/material-icons.css"
  rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link type="text/css"
  href="assets/css/fontawesome.css"
  rel="stylesheet">

  <!-- Preloader -->
  <link type="text/css"
  href="assets/vendor/spinkit.css"
  rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css"
  href="assets/css/app.css"
  rel="stylesheet">

</head>

<body class=" layout-fluid">

  <div class="preloader">
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>

    <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

  <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
</div>

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

  <!-- Header -->

  <div id="header"
  data-fixed
  class="mdk-header js-mdk-header mb-0">
  <div class="mdk-header__content">

    <!-- Navbar -->
    <nav id="default-navbar"
    class="navbar navbar-expand navbar-light bg-white m-0">
    <div class="container-fluid">
      <!-- Toggle sidebar -->
      <button class="navbar-toggler d-block"
      data-toggle="sidebar"
      type="button">
      <span class="material-icons">menu</span>
    </button>

    <!-- Brand -->
    <a href="student-dashboard.html"
    class="navbar-brand">
    <img src="assets/images/logo/white.svg"
    class="mr-2"
    alt="LearnPlus" />
    <span class="d-none d-xs-md-block">CapaciTAM</span>
  </a>

  <!-- Search -->
  <form class="search-form d-none d-md-flex">
    <input type="text"
    class="form-control"
    placeholder="Search">
    <button class="btn"
    type="button"><i class="material-icons font-size-24pt">search</i></button>
  </form>
  <!-- // END Search -->

  <div class="flex"></div>

  <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
    <li class="nav-item">
      <a class="nav-link">Hola, {{  Auth::user()->name}}</a>
    </li>
  </ul>

  <!-- User dropdown -->
  <li class="nav-item dropdown ml-1 ml-md-3">
    <a class="nav-link dropdown-toggle"
    data-toggle="dropdown"
    href="#"
    role="button"><img src="assets/images/people/50/guy-6.jpg"
    alt="Avatar"
    class="rounded-circle"
    width="40"></a>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item"
      href="{{route('perfil')}}">
      <i class="material-icons">edit</i> Mi perfil
    </a>
    <a class="dropdown-item"
    href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    <i class="material-icons">lock</i> Salir

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </a>
</div>
</li>
<!-- // END User dropdown -->

</ul>
<!-- // END Menu -->
</div>
</nav>
<!-- // END Navbar -->

</div>
</div>

<!-- // END Header -->

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

  <div data-push
  data-responsive-width="992px"
  class="mdk-drawer-layout js-mdk-drawer-layout">
  <div class="mdk-drawer-layout__content page ">
    <div class="container-fluid page__container">
        @yield('main')
    </div>
  </div>

  <div class="mdk-drawer js-mdk-drawer"
  id="default-drawer">
  <div class="mdk-drawer__content ">
    <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
    data-perfect-scrollbar>
    <div class="sidebar-p-y">

      <!-- Account menu -->
      <div class="sidebar-heading">Mi cuenta</div>
      <ul class="sidebar-menu">
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button sidebar-js-collapse"
          data-toggle="collapse"
          href="#account_menu">
          <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
          {{ Auth::user()->name}}
          <span class="ml-auto sidebar-menu-toggle-icon"></span>
        </a>
        <ul class="sidebar-submenu sm-indent collapse"
        id="account_menu">
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button"
          href="guest-signup.html">
          <span class="sidebar-menu-text">Salir</span>
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button"
        href="{{route('perfil')}}">
        <span class="sidebar-menu-text">Mi Perfil</span>
      </a>
    </li>
  </ul>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button"
  data-toggle="collapse"
  href="#messages_menu">
  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Mensajes
  <span class="ml-auto sidebar-menu-toggle-icon"></span>
</a>
<ul class="sidebar-submenu sm-indent collapse"
id="messages_menu">
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button"
  href="student-messages.html">
  <span class="sidebar-menu-text">Mi conversaciones</span>
  <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="sidebar-heading">Estudiante</div>
<ul class="sidebar-menu sm-active-button-bg">
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button"
    href="{{route('e.cursos')}}">
    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> Explorar Cursos
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button"
  href="{{route('e.cursos')}}">
  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Mis Cursos
</a>
</li>
</ul>
<div class="sidebar-heading">Instructor</div>
<ul class="sidebar-menu sm-active-button-bg">
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button" href="{{route('e.manager')}}">
      <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Manager de Cursos
    </a>
  </li>
</ul>

<div class="sidebar-heading">Adminsitrador</div>
<ul class="sidebar-menu sm-active-button-bg">
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button" href="{{route('e.cursos')}}">
      <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Todos los Cursos
    </a>
  </li>
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button" href="{{route('e.usuarios')}}">
      <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i> Todos los Usuarios
    </a>
  </li>
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button" href="{{route('e.roles')}}">
      <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Roles y Permisos
    </a>
  </li>
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button" href="{{route('e.dependencias')}}">
      <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i> Dependencias
    </a>
  </li>
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button" href="{{route('e.categorias')}}">
      <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i> Categorías
    </a>
  </li>
</ul>

</div>
</div>
</div>
</div>

</div>


</div>
</div>

<!-- jQuery -->
<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="assets/vendor/perfect-scrollbar.min.js"></script>

<!-- MDK -->
<script src="assets/vendor/dom-factory.js"></script>
<script src="assets/vendor/material-design-kit.js"></script>

<!-- App JS -->
<script src="assets/js/app.js"></script>

<!-- Highlight.js -->
<script src="assets/js/hljs.js"></script>

<!-- App Settings (safe to remove) -->
<script src="assets/js/app-settings.js"></script>

<!-- Global Settings -->
<script src="assets/js/settings.js"></script>


</body>

</html>
