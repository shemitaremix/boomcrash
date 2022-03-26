<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/templatemo-xtra-blog.css" rel="stylesheet">
<!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Boomcrash</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item {{! Route::is('inicio') ?: 'active'}} "><a href="{{route('inicio')}}" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a></li>
                    <li class="tm-nav-item {{! Route::is('post') ?: 'active'}}"><a href="{{route('post')}}" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Post
                    </a></li>
                    <li class="tm-nav-item {{! Route::is('post') ?: 'active'}}"><a href="post.html" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Crear Post
                    </a></li>
                    <li class="tm-nav-item {{! Route::is('blog') ?: 'active'}}"><a href="{{route('blog')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Blog
                    </a></li>
                    <li class="tm-nav-item" {{! Route::is('contacto') ?: 'active'}}><a href="{{route('contacto')}}" class="tm-nav-link"">
                        <i class="far fa-comments"></i>
                        Contacto
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                Boomcrash es una red social para todos los talentos locales, para que estos fuesen conocidos y exista un gran apoyo al increible talento local.
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>        
            @yield('body')
            
            @yield('footer')           
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://github.com/shemitaremix" class="tm-external-link">ShemitaRemix</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright Boomcrash-ShemitaRemix &copy; 2022
                </div>
            </footer>
        </main>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/templatemo-script.js"></script>
</body>
</html>