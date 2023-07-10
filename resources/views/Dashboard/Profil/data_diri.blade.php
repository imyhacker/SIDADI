<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">
            <form action="{{route('up_diri')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Diri</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Foto Formal</label>
                                            <input type="file" class="form-control-file" name="media">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <label>Halaman Page</label>
                                            <select name="page" class="form-control">
                                                @foreach($page as $pages)
                                                <option @if($pages->page == $data_diri->page) selected @endif>{{$pages->page}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>Nama Lengkap</label>
                                            <input type="text" value="{{$data_diri->nama_lengkap ?? ''}}" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>Nama Panggilan</label>
                                            <input type="text" value="{{$data_diri->nama_panggilan ?? ''}}" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>Nomor Kontak</label>
                                            <input type="number" name="kontak" class="form-control" placeholder="Nomor Kontak">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>Email Aktif</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email Aktif">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <label>Tentang Saya</label>
                                            <textarea name="tentang_saya" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-primary" value="Kirim Data / Update Data">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->
            </form>


            </section>
        </div>
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
