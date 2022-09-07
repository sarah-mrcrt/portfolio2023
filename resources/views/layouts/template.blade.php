{{-- bienvenu dans le code source de mon portfolio :) --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159966936-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-159966936-1');

        </script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- ------- Encodage ------- -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>

        <!-- ------- Référencement ------- -->
        <meta name="robots" content="index, follow, archive" />
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- -------  Open Graph Meta Tags ------- -->
        <!-- HTML Meta Tags -->
        <title>@yield('meta_title') | Sarah Mauriaucourt | Portfolio</title>
        <meta name="description"
            content="@yield("meta_description")">
        <meta name="author" content="Sarah Mauriaucourt">
        <!-- Facebook Meta Tags -->
        <meta property="og:title" content="@yield('title') | Sarah Mauriaucourt | Portfolio">
        <meta property="og:site_name" content="Sarah Mauriaucourt | Portfolio">
        <meta property="og:url" content="https://sarahmauriaucourt.fr">
        <meta property="og:description"
            content="@yield("description")">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:image" content="{{ asset('images/Miniature_Open_Graph.jpg')}}">
        <meta property="og:image:width" content="1280">
        <meta property="og:image:height" content="720">
        <meta property="og:image:type" content="image/png">
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="sarahmauriaucourt.fr">
        <meta property="twitter:url" content="https://sarahmauriaucourt.fr/">
        <meta name="twitter:title" content="@yield('title') | Sarah Mauriaucourt | Portfolio">
        <meta name="twitter:description"
            content="@yield("description")">
        <meta name="twitter:image" content="{{ asset('images/Miniature_Open_Graph.jpg')}}">

        <!-- -------  Favicon ------- -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icones/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icones/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icones/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('images/icones/site.webmanifest')}}">
        <link rel="mask-icon" href="{{ asset('images/icones/safari-pinned-tab.svg')}}" color="#ffffff">
        <link rel="shortcut icon" href="{{ asset('images/icones/favicon.ico')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-config" content="{{ asset('images/icones/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">

        <!-- -------  Font awesome ------- -->
        <script src="https://kit.fontawesome.com/a9438ed46f.js" crossorigin="anonymous"></script>

        <!-- -------  Stylesheet ------- -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}" />

        <!-- ------- JSON-LD, schema.org | Person ------- -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Person",
                "name": "Sarah Mauriaucourt",
                "jobTitle": "Étudiante en Design Graphique et d'Interaction",
                "url": "https://www.sarahmauriaucourt.fr",
                "sameAs": [
                    "https://www.linkedin.com/in/sarahmauriaucourt",
                    "https://www.behance.net/sarahmauriaucourt",
                    "https://www.instagram.com/sarahmrcrt_photo/"
                ],
                "contactPoint": {
                    "@type": "ContactPoint",
                    "availableLanguage": ["fr-FR", "en-EN"],
                    "email": "mauriaucourt.sarah@gmail.com",
                    "telephone": "+33642703078",
                    "contactType": "Contact professionnel"
                },
                "alumniOf": "Université de Valenciennes",
                "nationality": "Française",
                "image": "./images/sarah.jpg"
            }
        </script>
    </head>

    <body>
        <!-- ------- HEADER ------- -->
        <header id="header-mix-blend-mode">
            <h1 class="col-2">
                <a href="{{ url('/') }}" aria-label="Logo">
                    <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="121" height="82" viewBox="0 0 121 82">
                        <g fill="none" stroke="#fff" stroke-width="1">
                            <rect width="90" height="27" stroke="none"></rect>
                            <rect x="0.5" y="0.5" width="89" height="26" fill="none"></rect>
                        </g>
                        <g transform="translate(0 55)" fill="none" stroke="#fff" stroke-width="1">
                            <rect width="90" height="27" stroke="none"></rect>
                            <rect x="0.5" y="0.5" width="89" height="26" fill="none"></rect>
                        </g>
                        <g transform="translate(0 29)" fill="#fff" stroke="#fff" stroke-width="1">
                            <rect width="90" height="24" stroke="none"></rect>
                            <rect x="0.5" y="0.5" width="89" height="23" fill="none"></rect>
                        </g>
                        <g transform="translate(121) rotate(90)" fill="#fff" stroke="#fff" stroke-width="1">
                            <rect width="27" height="26" stroke="none"></rect>
                            <rect x="0.5" y="0.5" width="26" height="25" fill="none"></rect>
                        </g>
                        <g transform="translate(121 29) rotate(90)" fill="none" stroke="#fff" stroke-width="1">
                            <rect width="53" height="26" stroke="none"></rect>
                            <rect x="0.5" y="0.5" width="52" height="25" fill="none"></rect>
                        </g>
                    </svg>
                </a>
            </h1>
            <span id="closee"><i class="fas fa-bars" aria-hidden="true"></i></span>
        </header>

        <!-- Header principal -->
        <header id="header">
            <h1 class="col-2">
                <a href="{{ url('/') }}" aria-label="Logo">
                    <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="121" height="82" viewBox="0 0 121 82">
                        <g fill="none" stroke="#fff" stroke-width="1">
                            <rect width="90" height="27" stroke="none" />
                            <rect x="0.5" y="0.5" width="89" height="26" fill="none" />
                        </g>
                        <g transform="translate(0 55)" fill="none" stroke="#fff" stroke-width="1">
                            <rect width="90" height="27" stroke="none" />
                            <rect x="0.5" y="0.5" width="89" height="26" fill="none" />
                        </g>
                        <g transform="translate(0 29)" fill="#fff" stroke="#fff" stroke-width="1">
                            <rect width="90" height="24" stroke="none" />
                            <rect x="0.5" y="0.5" width="89" height="23" fill="none" />
                        </g>
                        <g transform="translate(121) rotate(90)" fill="#fff" stroke="#fff" stroke-width="1">
                            <rect width="27" height="26" stroke="none" />
                            <rect x="0.5" y="0.5" width="26" height="25" fill="none" />
                        </g>
                        <g transform="translate(121 29) rotate(90)" fill="none" stroke="#fff" stroke-width="1">
                            <rect width="53" height="26" stroke="none" />
                            <rect x="0.5" y="0.5" width="52" height="25" fill="none" />
                        </g>
                    </svg>
                </a>
            </h1>

            <!-- <menu> -->
            <span id="close"><i class="fas fa-times"></i></span>
            <nav class="col-7 navigation-link">
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/projets') }}">Projets</a></li>
                    <li><a href="{{ url('#contact') }}">Contact</a></li>
                </ul>
            </nav>
            <ul class="col-2 social-media">
                <li>
                    <a href="https://www.linkedin.com/in/sarahmauriaucourt" aria-label="Linkedin"
                        rel="nofollow noopener" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="https://www.behance.net/sarahmauriaucourt" aria-label="Behance" rel="nofollow noopener"
                        target="_blank"><i class="fa-brands fa-behance"></i></a>
                </li>
                <li><a href="https://www.instagram.com/sarahmrcrt_photo/" aria-label="Instagram" rel="nofollow noopener"
                        target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%6D%61%75%72%69%61%75%63%6F%75%72%74%2E%73%61%72%61%68%40%67%6D%61%69%6C%2E%63%6F%6D"
                        aria-label="Mail" rel="nofollow noopener"><i class="fa-solid fa-at"></i></a></li>
            </ul>
            <!-- </menu> -->
            <span id="open"><i class="fas fa-bars"></i></span>
        </header>

        <main id="@yield("main")">
            @yield('content')
        </main>

        <!-- ------- FOOTER ------- -->
        <footer id="contact">
            <p>Je suis là pour vous ! Envoyer un <a class="link"
                    href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%6D%61%75%72%69%61%75%63%6F%75%72%74%2E%73%61%72%61%68%40%67%6D%61%69%6C%2E%63%6F%6D"
                    rel="noopener">mail</a> ou <a class="link" href="tel:+33642703078" rel="noopener">appelez-moi</a>.
            </p>
            <div>
                <hr>
                <article>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/sarahmauriaucourt" aria-label="Linkedin" rel="noopener"
                                target="_blank">Linkedin</a></li>
                        <li><a href="https://www.behance.net/sarahmauriaucourt" aria-label="Behance" rel="noopener"
                                target="_blank">Behance</a></li>
                        <li><a href="https://www.instagram.com/sarahmrcrt_photo/" aria-label="Instagram"
                                rel="noopener nofollow" target="_blank">Instagram</a></li>
                    </ul>
                    <p>@ 2022 | Sarah Mauriaucourt. Tous droits réservés.</p>
                </article>
            </div>
        </footer>

        <!-- ------- Scripts ------- -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
