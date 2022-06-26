@extends('tampilan.layout.apps')

@section('title','Halaman Home')

@section('meta')
    @include('tampilan.include.meta')
@endsection

@section('header')
    @include('tampilan.include.header')
@endsection

@section('content')
    <div class="container" id="rental-mobil" >
        <div class="row" style="text-align: center;margin-top: 4rem">
            <h2 class="title-bryan"> LAYANAN RENTAL MOBIL</h2>
            <span style="color: #777;font-size: 1.3rem">Bryan Travel juga melayani jasa rental unit mobil dengan driver atau lepas kunci</span>
            <p style="color: #777;font-size: 1.3rem">Untuk Wilayah Sumatera</p>
        </div>
        <div class="row  justify-content-center">
            <div class="card card-cutome-1 text-center" style="margin-bottom: 4rem">
                <img src="{{asset('img/10.png')}}" class="card-img-top img-custome" alt="..." >
                <div class="card-body">
                    <h4 class="card-title title-style">INOVA</h4>
                    <p style="color: white;font-size: 1rem">Klik tombol pesan untuk informasi lebih lanjut mengenai penyewaan unit mobil</p>
                    <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger btn-bryan-1">PESAN SEKARANG</a>
                </div>
            </div>
            <div class="card card-cutome-1 text-center" style="margin-bottom: 4rem">
                <img src="{{asset('img/12.png')}}" class="card-img-top img-custome" alt="..." style="width: 100%;height: 100%" >
                <div class="card-body">
                    <h4 class="card-title title-style">AVANZA</h4>
                    <p style="color: white;font-size: 1rem">Klik tombol pesan untuk informasi lebih lanjut mengenai penyewaan unit mobil</p>
                    <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger btn-bryan-1">PESAN SEKARANG</a>
                </div>
            </div>
            <div class="card card-cutome-1 text-center" style="margin-bottom: 4rem">
                <img src="{{asset('img/13.png')}}" class="card-img-top img-custome" alt="..." style="width: 100%;height: 100%">
                <div class="card-body">
                    <h4 class="card-title title-style">XENIA</h4>
                    <p style="color: white;font-size: 1rem">Klik tombol pesan untuk informasi lebih lanjut mengenai penyewaan unit mobil</p>
                    <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger btn-bryan-1">PESAN SEKARANG</a>
                </div>
            </div>
            <div class="card card-cutome-1 text-center" style="margin-bottom: 4rem">
                <img src="{{asset('img/14.png')}}" class="card-img-top img-custome" alt="..." style="width: 100%;height: 100%">
                <div class="card-body">
                    <h4 class="card-title title-style">HIACE</h4>
                    <p style="color: white;font-size: 1rem">Klik tombol pesan untuk informasi lebih lanjut mengenai penyewaan unit mobil</p>
                    <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger btn-bryan-1">PESAN SEKARANG</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('tampilan.include.footer')
@endsection

@section('custom_script')
    @include('tampilan.include.custom_script')

@endsection
