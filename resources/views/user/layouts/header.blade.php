<header class="color-1 hovered menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nav"> 
                    <a href="/" class="logo">
                        <h2><span style="font-weight: normal;">traveler's</span><b>BD</b></h2>
                    </a>
                    <div class="nav-menu-icon">
                        <a href="#"><i></i></a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li class="type-1">
                                <a href="/">Home</a>
                            </li>
                            <li class="type-1">
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="type-1">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="type-1">
                                <a href="{{ route('privacy') }}">Privacy</a>
                            </li>
                            <li class="type-1">
                                <a href="{{ route('contact.home') }}">Contact</a>
                            </li>
                            <li class="type-1">
                                @if (Auth::guest())    
                                    <a href="{{ route('login') }}">Login</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>