<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{$generalSetting && $generalSetting->logo ? asset($generalSetting->logo) : asset('img/MDLD.PNG')}}" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="far fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('portfolio')}}">Portefeuille</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('blog')}}">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
