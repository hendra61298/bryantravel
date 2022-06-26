@extends('tampilan.layout.apps')

@section('title','Halaman Home')

@section('meta')
    @include('tampilan.include.meta')
@endsection

@section('header')
    @include('tampilan.include.header')
@endsection

@section('content')
    <div  id="tentang-kami" class="container" style="margin-bottom: 2rem; min-height: 40rem">
        <div class="row text-center" style="margin-top: 3rem; margin-bottom: 3rem">
            <h1  class="text-bryan">Bryan Travel Pilihan Terbaik!!!</h1>
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
            <div class="row" >
                <div class="col-sm-6" style="margin-top: 3rem">
                    <h2 class="title-bryan" style="margin-bottom: 1rem">TENTANG BRYAN TRAVEL</h2>
                    <div class="col-12" style="text-align: justify;color: #777">
                        <span style="line-height: 2rem;font-size: 1.2rem">Kami terinspirasi untuk memberikan pelayanan jasa transportasi darat. Baik Jasa Rental Mobil dan Trip Wisata, maupun Travel Antar Jemput Paket dan Penumpang dengan armada yang relatif baru, bersih dan terawat serta didukung oleh sopir yang ramah, sopan dan berpengalaman sehingga perjalanan anda akan terasa nyaman dan menyenangkan.</span>
                    </div>
                    <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger" style="margin-top:3rem;margin-bottom: 3rem;border-radius: 20px;background: orangered">Hubungi Bryan Travel</a>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset('img/9.png')}}" alt="Girl in a jacket" width="100%" height="100%">
                </div>
            </div>
    </div>


        <a href="https://wa.me/6281369356712" class="float float-button">
            <img src="{{asset('img/logoWhatsapp.png')}}" class="d-block" alt="..." style="width: 2rem;height: 2rem; margin-top: 0.4rem; margin-left: 1rem">
            <p class="text-light" style="margin-top: -1.8rem; margin-left: 1.5rem">Hubungi Admin</p>
        </a>
@endsection

@section('footer')
    @include('tampilan.include.footer')
@endsection

@section('custom_script')
    @include('tampilan.include.custom_script')

@endsection
