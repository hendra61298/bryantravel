@extends('tampilan.layout.apps')

@section('title','Halaman Home')

@section('meta')
    @include('tampilan.include.meta')
@endsection

@section('header')
    @include('tampilan.include.header')
@endsection

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="margin-top: 3rem">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/1.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/2.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/3.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div  id="tentang-kami" class="container" style="margin-bottom: 2rem; min-height: 40rem">
        <div class="row text-center" style="margin-top: 3rem; margin-bottom: 3rem">
            <p   class="text-bryan">Bryan Travel Pilihan Terbaik!!!</p>
        </div>
        <div class="row" style="text-align: -webkit-center;">
            <div class="col-lg-4" style="margin-top: 1rem">
                <div class="card card-style shadow h-100 " style="width: 18rem; margin-top: 1rem">
                    <div class="card-body  text-center">
                        <button type="button " class="btn btn-me text-center "><img src="{{asset('img/5.png')}}" class="d-block w-100" alt="..."></button>
                        <h6 class="card-subtitle mb-2 text-muted " style="margin-top: 1rem">Travel Dengan Armada Terawat</h6>
                        <p class="card-text  text-me" >Semua Armada di BRYAN TRAVEL selalu di lakukan perawatan secara berkala, untuk menjamin kenyamanan dan keamanan anda</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top: 1rem">
                <div class="card card-style shadow h-100 " style="width: 18rem;margin-top: 1rem">
                    <div class="card-body text-center">
                        <button type="button " class="btn btn-me text-center "><img src="{{asset('img/6.png')}}" class="d-block w-100" alt="..."></button>
                        <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 1rem">Driver Profesional</h6>
                        <p class="card-text text-me">Driver kami akan memberikan pelayanan yang mengutamakan kenyamanan dan keamanan bagi anda</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top: 1rem">
                <div class="card card-style shadow h-100 " style="width: 18rem;margin-top: 1rem">
                    <div class="card-body text-center">
                        <button type="button " class="btn btn-me text-center "><img src="{{asset('img/7.png')}}" class="d-block w-100" alt="..."></button>
                        <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 1rem">Harga Promo</h6>
                        <p class="card-text text-me">Bryan Travel memberikan harga yang bersaing dengan promo-promo yang dapat membuat anda lebih menikmati perjalanan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  id="tentang-kami1">
        <div class="container">
            <div class="row"  >
                <div class="col-sm-6" style="margin-top: 3rem">
                    <h2 class="title-bryan" style="margin-bottom: 1rem">TENTANG BRYAN TRAVEL</h2>
                    <div class="col-12" style="text-align: justify;color: #777">
                        <span style="line-height: 2rem;font-size: 1.2rem">Kami terinspirasi untuk memberikan pelayanan jasa transportasi darat. Baik Jasa Rental Mobil dan Trip Wisata, maupun Travel Antar Jemput Paket dan Penumpang dengan armada yang relatif baru, bersih dan terawat serta didukung oleh sopir yang ramah, sopan dan berpengalaman sehingga perjalanan anda akan terasa nyaman dan menyenangkan.</span>
                    </div>
                    <a href="https://wa.me/6281377939899" type="button" class="btn btn-danger" style="margin-top:3rem;margin-bottom: 3rem;border-radius: 20px;background: orangered">PESAN SEKARANG</a>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset('img/9.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;margin-top: 3rem">
            <h2 class="title-bryan"> RUTE DAN HARGA BRYAN TRAVEL</h2>
            <span style="color: #777;font-size: 1.3rem">Bryan Travel melengkapi kebutuhan mobilisasi anda menggunakan Armada</span>
            <p style="color: #777;font-size: 1.3rem">Transportasi Darat via Tol Trans Sumatera</p>
        </div>

        <div class="row">

        </div>
    </div>




    <a href="#" class="float float-button">
        <img src="{{asset('img/logoWhatsapp.png')}}" class="d-block" alt="..." style="width: 2rem;height: 2rem; margin-top: 0.4rem; margin-left: 1rem">
        <p class="text-light" style="margin-top: -1.8rem; margin-left: 1.5rem">Hubungi Admin</p>
        <i class="fa fa-plus my-float"></i>
    </a>
@endsection

@section('footer')
    @include('tampilan.include.footer')
@endsection

@section('custom_script')
    @include('tampilan.include.custom_script')

@endsection
