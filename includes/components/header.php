<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGU Calabanga</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/main.css">

    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>

</head>


<header class="">
    <nav>
        <div class="nav-brand">
            <div class="brand-logo">
                <img src="/img/logo-seal.png" alt="">
                <div class="brand-name">
                    CALABANGA
                </div>
            </div>
            <div class="brand-desc">
                <div class="brand-text-1">Republic of the Philippines | Province of Camarines Sur</div>
                <div class="brand-sep"></div>
                <div class="brand-text-2">MUNICIPALITY OF CALABANGA</div>
            </div>
        </div>

        <ul class="nav-items">
            <li class="nav-item"><a href="/index.php">Home</a></li>
            <li class="nav-item"><a>News</a>
                <div class="nav-item-dropdown">
                    <ul>
                        <li><a href="/news.php"> <i class="far fa-newspaper"></i> News and
                                Events</a></li>
                        <li><a href="/announcement.php"> <i class="fas fa-newspaper"></i>
                                Announcements</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a>About</a>
                <div class="nav-item-dropdown">
                    <ul>
                        <li><a href="/about/about.php"> <i class="far fa-address-card"></i> Calabanga
                                Profile</a></li>
                        <li><a href="/about/mission-vision.php"> <i class="fas fa-bullseye"></i> Mission And
                                Vision</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a>Office</a>
                <div class="nav-item-dropdown office-dropdown" id="simple-bar">
                    <ul>
                        <li class="nav-mega-item"><i class="fas fa-users"></i><a href="/offices/omm.php"> Office of The Municipal Mayor</a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/accounting.php"> Municipal Accounting Office</a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/mpdc.php"> Municipal Planning And Development Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/mto.php"> Municipal Treasurers Office</a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/mao.php"> Municipal Agiriculture Office</a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/mho.php"> Municipal Health Office </a>
                        </li>
                        <li><i class="fas fa-users"></i><a href="/offices/mswd.php"> Municipal Social Welfare and Development </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/masso.php"> Municipal Assessor Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/meo.php"> Municipal Engineering Office</a></li>
                    </ul>

                    <ul>
                        <li><i class="fas fa-users"></i><a href="/offices/mhro.php"> Municipal Human Resource Management Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/mcro.php"> Municipal Civil Registrar Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/mbo.php"> Municipal Budget Office </a></li>

                        <li><i class="fas fa-users"></i><a href="/offices/bpls.php"> Business Permit And Licensing Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/market.php"> Market Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/bir.php"> BIR Municipal Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/kalahi.php"> Kalahi 4Ps</a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/pso.php"> Public Safety Office </a></li>
                        <li><i class="fas fa-users"></i><a href="/offices/gen.php"> General Services Office </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a>Service</a>

                <div class="nav-item-dropdown">
                    <ul>
                        <li><a href="/services/citizenscharter.php"> <i class="fas fa-book"></i> Citizens Charter</a></li>
                        <li><a href="/page-template.php"> <i class="fas fa-download"></i> Application Forms Download</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item" id="contact-btn"><a href="/under-construction.php">Transparency</a></li>
            <li class="nav-item" id="contact-btn"><a href="#contacts">Contact</a></li>
        </ul>

        <div class="burger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>
</header>