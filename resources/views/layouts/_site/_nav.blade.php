
    <nav>
        <div class="nav-wrapper blue">
            <div class="container">
                <a href="{{route('site.home')}}" class="brand-logo">Imobiliária do Naldão</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('site.home')}}">Home</a></li>        
                    <li><a href="{{route('site.sobre')}}">Sobre</a></li>        
                    <li><a href="{{route('site.contato')}}">Contato</a></li>        
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
       <li><a href="{{route('site.home')}}">Home</a></li>
       <li><a href="{{route('site.sobre')}}">Sobre</a></li>        
       <li><a href="{{route('site.contato')}}">Contato</a></li>
    </ul>           