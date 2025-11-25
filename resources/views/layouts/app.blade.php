<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit2Fou</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/06b6a43379.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="menu">
            <div class="logo">
                <p>PRODUIT2FOU</p>
            </div>
            <div class="lien">
                <nav id="menu-nav">
                    <ul>
                        <li><a href="{{ url('/') }}" id="nonmarge"><i class="fa-solid fa-house fa-xl" style="color: #ffffff;"></i></a>
                            <a href="{{ url('/') }}" id="ici">Accueil</a>
                        </li>
                        <li><a href="{{ url('/produits') }}" id="nonmarge"><i class="fa-solid fa-tag fa-xl" style="color: #ffffff;"></i></a><a href="{{ url('/produits') }}">Produits</a></li>
                        <li><a href="{{ url('/services') }}" id="nonmarge"><i class="fa-solid fa-paint-roller fa-xl" style="color: #ffffff;"></i></a><a href="{{ url('/services') }}">Nos Services</a></li>
                        <li><a href="{{ url('/contacte') }}" id="nonmarge"><i class="fa-solid fa-envelope fa-xl" style="color: #ffffff;"></i></a><a href="{{ url('/contacte') }}">Contacte</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content') <!-- Le contenu de chaque page sera injecté ici -->
        <!-- Image pour PC -->
        <img src="img/pc-background.jpg" alt="Background PC" class="background-img">

        <!-- Vidéo pour mobile -->
        <video class="mobile-video" autoplay muted loop playsinline>
            <source src="{{asset('img/background.mp4')}}" type="video/mp4">
        </video>
    </main>

    <footer>

    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>