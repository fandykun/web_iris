<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="{{ '/' }}"><img src="{{ asset('iris/logo-header-green.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                    <li class="nav-item nav-home"><a class="nav-link" href="{{ '/' }}">Home</a></li>
                    <li class="nav-item nav-team"><a class="nav-link" href="{{ '/team' }}">Team</a></li>
                    <li class="nav-item nav-gallery"><a class="nav-link" href="{{ '/gallery' }}">Gallery</a></li>
                    <li class="nav-item nav-achievement"><a class="nav-link" href=" {{ '/achievement' }} ">Achievement</a>
                    <li class="nav-item nav-qualification submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Qualification</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ '/qualification/robocup-2019'}}">Robocup 2019</a></li>
                        </ul>
                    </li>
                        <li class="nav-item nav-contact"><a class="nav-link" href=" {{ '/contact' }} ">Contact</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->