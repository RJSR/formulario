<header class="header_section">
    @foreach($colors as $color)
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            @foreach($datos as $dato)
            <a class="navbar-brand" href="/"><img width="70" src="images/logo.png" alt="#" />
                <li class="nav-item active">
                    <a class="nav-link NombreEmpresa" href="/">{{ $dato->nombre }}</a>
                </li>
            </a>
            @endforeach
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                
                <span class=""> </span>

                
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Contact</a>
                    </li>

                    @if (Route::has('login'))

                    @auth
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
                            <span class="nav-label">{{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input class="btn mx-2 py-2" type="submit" value="Logout">
                                </form>
                            </li>
                            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>

                    @endauth
                    @endif

                </ul>
            </div>
        </nav>
    </div>
    <style>
        .header_section{
            background-color: {{$color->bgcolor}};
            
            
        }
        .custom_nav-container .navbar-nav .nav-item .nav-link{
            color: {{$color->seccolor}};
        }
        .custom_nav-container .navbar-nav .nav-item:hover .nav-link, .custom_nav-container .navbar-nav .nav-item.active .nav-link{
            color: {{$color->thirdcolor}};
        }

        .NombreEmpresa{
            font-size: large;
            padding: 5px 20px;
            text-align: center;
            text-transform: uppercase;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 700;
            color: {{$color->seccolor}};
            
        }
    </style>

    @endforeach
</header>