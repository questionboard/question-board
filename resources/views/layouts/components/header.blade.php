<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title"  onclick="window.location = '/'">
            <img class="h-brand-img" src="/img/ouakademi-logo-colored.svg" alt="">
            <h3>Soru Tahtası</h3>
        </div>
    </div>
    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links ">
        <a href="{{ route('event.index') }}">Etkinlikler</a>

        @if(isset(Auth::user()->id))
            <a href="{{ route('event.create') }}">Etkinlik oluştur</a>

                <li class="button-dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle">
                        {{ Auth::user()->name }} <span>▼</span>
                    </a>
                    <ul class="dropdown-menu" style="display: none">
                        <li><a href="{{ route('profile.show') }}">Profilim</a></li>
                        <li><a href="{{ route('dashboard') }}">Panelim</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><button type="submit">Çıkış Yap</button></li>
                            </form>

                        </li>
                    </ul>
                </li>

            @if(false)
                <div class="fink">
                    <details>
                        <summary>{{ Auth::user()->name }}</summary>
                        <li><a href="{{ route('profile.show') }}">Profilim</a></li>
                        <li><a href="{{ route('dashboard') }}">Panelim</a></li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <li><button type="submit">Çıkış Yap</button></li>
                        </form>
                    </details>
                </div>
            @endif




        @else
            <a href="{{ route('login') }}">Giriş Yap</a>
            <a href="{{ route('register') }}">Kayıt Ol</a>
        @endif
    </div>
</div>


