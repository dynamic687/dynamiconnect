@extends('layouts.app')


@section('content')
    @extends('layouts.header')

    <div class="container" id="topScroll" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-3 side-menu content-desktop">
                <ul>
                    <li>
                        <a href="">Beranda</a>
                    </li>
                    <li>
                        <hr>
                        <small class="hr-dasbor-1">Kategori</small>
                    </li>
                    <li>
                        <a class="text-primary" href="">Semua</a>
                    </li>
                    <li>
                        <a class="text-kategori" href="">Pesantren</a>
                    </li>
                    <li>
                        <a class="text-kategori" href="">Diskusi Ilmiah</a>
                    </li>
                    <li>
                        <a class="text-kategori" href="">Inovasi</a>
                    </li>
                    <li>
                        <a class="text-kategori" href="">Pendidikan</a>
                    </li>
                    <li>
                        <a class="text-kategori" href="">Bisnis</a>
                    </li>
                    <li>
                        <a class="text-kategori" href="">Seni dan Budaya</a>
                    </li>
                    <li>
                        <a class="text-kategori" href="">Donasi</a>
                    </li>
                    <li>
                        <a href="#" id="createPost" class="btn btn-primary text-white">Buat Pos</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 side-postingan">
                <div class="card" id="cardPost">
                    <div class="card-header">
                        <strong>Buat Postingan</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="" id="ideaText" class="form-control" required>
                                <option value="#">Pilih Kategori</option>
                                <option value="Pesantren">Pesantren</option>
                                <option value="Diskusi Ilmiah">Diskusi Ilmiah</option>
                            </select>
                        </div>
                        <div class="show-post-form">
                            <div class="form-group" >
                                <textarea name="idea" id="postForm" cols="30" rows="3" class="form-control" placeholder="Bagikan postinganmu disini" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="images" id="images">
                            </div>
                            <div class="form-group float-right">
                                <a href="#" id="closePost" class="btn btn-secondary">Batal</a>
                                <a href="#" class="btn btn-danger">Bagikan</a>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <hr>

                <div class="post-section feeds">
                    @for($a = 1; $a < 250; $a++)
                    <div class="card card-postingan">
                        <div class="card-body">
                            <img src="{{ asset('img/profile.jpg') }}" alt="" class="img-profile-md float-left mt-2 mr-3">
                            wildan maulana membagikan postingan <strong>Seni dan Budaya</strong> <br>
                            <small>24 Agustus 2019 - 14.23</small>
    
                            <div class="mt-3">
                                <div class="ifImg">
                                    <img src="{{ asset('img/img1.jpg') }}" class="img-post-sm" alt="">
                                    <img src="{{ asset('img/img2.jpg') }}" class="img-post-sm" alt="">
                                </div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, molestias, deserunt deleniti et, neque consequatur porro eveniet nisi illum non illo! Ut eligendi eius facilis voluptate quae aliquam quod unde?
                                <a href="#" class="ml-2">
                                    <strong>Lihat lebih</strong>
                                </a>
                                <hr>
                                <small><strong>24 </strong>Komentar</small>
                            </div>
                        </div>
                    </div>
                    @endfor

                </div>

                <!-- status elements -->
                <div class="scroller-status text-center">
                    <div class="infinite-scroll-request loader-ellips">
                    ...
                    </div>
                    <p class="infinite-scroll-last">End of content</p>
                    <p class="infinite-scroll-error">No more pages to load</p>
                </div>
                
                <!-- pagination has path -->
                <p class="pagination">
                    <a class="pagination__next" href="page2.html">Next page</a>
                </p>

            </div>

            <div class="col-md-3 content-desktop">
                <div class="card">
                    <div class="card-body">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
<script>
    $( document ).ready(function() {
        $( "select#ideaText" ).change(function() {
            $("#cardPost").addClass("card-add-post");
        });
        $( "#closePost" ).click(function() {
            $("#cardPost").removeClass("card-add-post");
        });

        $("#createPost").click(function() {
            $("#topScroll").scrollTop(0);
            $("#cardPost").addClass("card-add-post");
        });
    });

    $('#images').fileuploader({
        addMore: true
    });

    $('.feeds').infiniteScroll({
        path: '.pagination__next',
        append: '.card-postingan',
        status: '.scroller-status',
        hideNav: '.pagination',
    });
</script>
@endpush