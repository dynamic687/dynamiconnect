@extends('layouts.app')

@section('title')
    Dynamiconnect - Connecting Dynamic everywhere
@endsection

@section('content')
    <div class="container home-container">
        <div class="row">
            <div class="col-md-6 home-text">
                <img src="{{ asset('img/logo_dc.png') }}" class="home-logo" alt="">
                
                <h1>connecting <span>Dynamic everywhere</span></h1>
                <p><strong>Dynamiconnect</strong> menghubungkan marhalah Dynamic seluruh dunia. Bergabunglah sekarang untuk mendapatkan akses marhalah dynamic seluruh dunia</p>
                <br>
                <!--
                <form action="">
                    <div class="form-group row row-5">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </form> -->
                <a href="#" class="btn btn-lg btn-home-login" data-toggle="modal" data-target="#modalLogin">Masuk</a>
                <a href="#" class="btn btn-lg btn-home-daftar" data-toggle="modal" data-target="#modalDaftar">Daftar</a>
            </div>
            <div class="col-md-6 content-desktop">
                <img src="{{ asset('img/7d25.gif') }}" class="home-img" alt="">
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-7">
                <h5>About</h5>
                <p>Dynamiconnect merupakan media untuk menghubungkan alumni Gontor tahun 2013 di seluruh dunia. Dikembangkan untuk memudahkan seluruh alumni untuk dapat terhubung</p>
                
            </div>
            <div class="col-md-5">
                <h5>Developer</h5>
                <p>Portal ini dibangun dan dikembankan oleh  <a href="https://gidicode.com" target="blank">Gidicode Project</a>, Yogyakarta. Kode dan desain oleh Wildan Maulana</p>
            </div>
            <div class="col-md-12 text-center">
                    <hr>
                    Developed with <i class="fas fa-heart" style="color:red"></i> by Wildan Maulana - <a href="https://gidicode.com" target="blank">Gidicode Project</a>
            </div>
        </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="" class="btn btn-google form-control">
                        <i class="fab fa-google mr-2"></i> Masuk dengan Google
                    </a>
                    <hr>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username / Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-danger form-control">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Signup -->
    <div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="" class="btn btn-google form-control">
                        <i class="fab fa-google mr-2"></i> Daftar dengan Google
                    </a>
                    <hr>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Nomor Stambuk">
                            <small>isi 0 jika anda lupa nomor stambuk anda</small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                            <small>Isi nama lengkap sesuai dengan Ijazah Gontor / ID Card anda</small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-danger form-control">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection