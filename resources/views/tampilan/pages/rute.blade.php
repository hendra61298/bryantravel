@extends('tampilan.layout.apps')

@section('title','Halaman Home')

@section('meta')
    @include('tampilan.include.meta')
@endsection

@section('header')
    @include('tampilan.include.header')
@endsection

@section('content')
    <div class="container">
        <div class="row" style="text-align: center;margin-top: 3rem">
            <h2 class="title-bryan"> RUTE YANG TERSEDIA DI BRYAN TRAVEL</h2>
            <span style="color: #777;font-size: 1.3rem">Bryan Travel memiliki rute yang sangat lengkap dan memiliki harga yang terjangkau</span>
            <p style="color: #777;font-size: 1.3rem">Transportasi Darat Yang Sangat Nyaman</p>
        </div>
        <div class="row" style="margin-top: 2rem">
            <div class="col-sm-6">
                <table class="table table-orangered" style="margin-top: 2rem;margin-bottom: 1rem">
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Palembang</td>
                        <td><i class="fa fa-arrows-h fa-lg" aria-hidden="true"></i></td>
                        <td>Lampung</td>
                        <td><a href="{{route('home.palembang')}}" type="button" class="btn btn-danger " style="background-color: orangered; border-radius: 15px">DETAIL</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lampung</td>
                        <td><i class="fa fa-arrows-h fa-lg" aria-hidden="true"></i></td>
                        <td colspan="2">Jambi</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lampung</td>
                        <td><i class="fa fa-arrows-h fa-lg" aria-hidden="true"></i></td>
                        <td colspan="2">Jakarta</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jakarta</td>
                        <td><i class="fa fa-arrows-h fa-lg" aria-hidden="true"></i></td>
                        <td colspan="2">Bandung</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Lampung</td>
                        <td><i class="fa fa-arrows-h fa-lg" aria-hidden="true"></i></td>
                        <td colspan="2">Bandung</td>
                    </tr>
                    <tr>
                        <th scope="row">#</th>
                        <td colspan="2">Tujuan Lainya Hubungi Admin</td>
                        <td  colspan="2"> <a href="https://wa.me/6281369356712" type="button" class="btn btn-danger" style="border-radius: 20px;background: orangered">Hubungi Admin</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('img/11.png')}}" alt="Girl in a jacket" width="100%" height="100%">
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
