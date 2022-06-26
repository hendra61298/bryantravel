@extends('tampilan.layout.apps')

@section('title','Halaman Home')

@section('meta')
    @include('tampilan.include.meta')
@endsection

@section('header')
    @include('tampilan.include.header')
@endsection

@section('content')
    <div  id="tentang-kami1">
        <div class="row" style="text-align: center;margin-top: 3rem" id="rute-travel">
            <h2 class="title-bryan"> RUTE DAN HARGA BRYAN TRAVEL</h2>
            <span style="color: #777;font-size: 1.3rem">Bryan Travel melengkapi kebutuhan mobilisasi anda menggunakan Armada</span>
            <p style="color: #777;font-size: 1.3rem">Transportasi Darat via Tol Trans Sumatera</p>
        </div>
        <div class="container">
            <div class="row  justify-content-center">
                <div class="card card-cutome text-center" style="margin-bottom: 4rem; margin-left: 1rem">
                    <img src="{{asset('img/10.png')}}" class="card-img-top img-custome" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-title title-style"  style="margin-top: 2rem">Palembang - Lampung</h4>
                        <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger btn-bryan">PESAN SEKARANG</a>
                    </div>
                </div>
                <div class="card card-cutome text-center" style="margin-bottom: 4rem; margin-left: 1rem">
                    <img src="{{asset('img/10.png')}}" class="card-img-top img-custome" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-title title-style" style="margin-top: 2rem">Lampung - Palembang</h4>
                        <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger btn-bryan">PESAN SEKARANG</a>
                    </div>
                </div>
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
