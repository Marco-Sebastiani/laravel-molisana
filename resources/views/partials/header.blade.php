<header class="p-20">
    <div class="container">
        <div id="logo">
            <img src=" {{asset('img/logo.png')}} " alt="">
        </div>
    
        <div class="main-menu">
            <nav>
                <ul>
                    <li>
                        <a href="{{route('pagina-home')}}" 
                        class="{{(Request::route()->getName() == 'pagina-home') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pagina-prodotti')}}"
                        class="{{(Request::route()->getName() == 'pagina-prodotti') ? 'active' : '' }}">
                            Prodotti
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pagina-notizie')}}"
                        class="{{(Request::route()->getName() == 'pagina-notizie') ? 'active' : '' }}">
                            News
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>