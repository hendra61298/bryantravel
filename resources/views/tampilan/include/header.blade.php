
<nav class="navbar navbar-expand-lg navbar-light bg-light box-shadow">
    <div class="container">
        <a class="navbar-brand" href="{{route('home.index')}}">
            <img src="{{asset('img/4.png')}}" alt="" width="220" height="100%" class="d-inline-block align-text-center">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-content" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-content" href="{{route('home.index')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-content" href="{{route('home.profil')}}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-content" href="{{route('home.rute')}}">Rute Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-content" href="{{route('home.rental')}}">Rental Mobil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-content" href="#footer">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger" style="border-radius: 20px;background: orangered">PESAN SEKARANG</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
