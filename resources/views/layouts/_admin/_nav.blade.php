<nav>
        <div class="nav-wrapper blue">
            <div class="container">
                <a href="{{route('admin.principal')}}" class="brand-logo">SisAdmin</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('admin.principal')}}">Incio</a></li>
                    <li><a target="_blank" href="{{route('site.home')}}">Site</a></li>

                    @if(Auth::guest())
                        <li><a href="{{route('admin.login')}}">Login</a></li>
                    @else
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('admin.login.sair')}}">Sair</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="{{route('admin.principal')}}">Incio</a></li>
        <li><a target="_blank" href="{{route('site.home')}}">Site</a></li>
        @if(Auth::guest())
            <li><a href="{{route('admin.login')}}">Login</a></li>
        @else
            <li><a href="#">{{Auth::user()->name}}</a></li>
            <li><a href="{{route('admin.login.sair')}}">Sair</a></li>
        @endif
    </ul>
