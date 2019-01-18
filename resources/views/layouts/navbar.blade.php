<header id="header">
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <h1><a href="{{'/'}}"><img src="{{ URL::asset('img/logo.png') }}" alt="Logo" style="width: 135px"/></a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="{{'/'}}">Home</a></li>
                <li><a href="{{'/team'}}">Team</a></li>
                <li><a href="{{'/achievement'}}">Achievement</a></li>
                <li><a href="{{'/gallery'}}">Gallery</a></li>
                <li><a href="{{'/qualification'}}">Qualification</a></li>
                <li><a href="{{'/contact'}}">Contact</a></li>
                @guest
                @else
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Logout
                    </a>
        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>                
                @endguest
            </ul>
        </nav>

    </div>
</header><!-- #header -->