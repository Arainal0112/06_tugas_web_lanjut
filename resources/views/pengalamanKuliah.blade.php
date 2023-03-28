@extends('layouts.content')

@section('title', 'Pengalaman Kuliah')

@section('content')
<x-sidebar dashboard="" profil="" ikmal="" arainal="" pengalaman="active" />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pengalaman Kuliah</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Pengalaman Kuliah</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Curhatan Mahasiswa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
              <div class="col-12">
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE-3.2.0')}}/dist/img/arainal.jpg" alt="user image">
                    <span class="username">
                      <a href="#">Arainal Aldiansyah</a>
                    </span>
                    <span class="description">Shared publicly - 7:45 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Saya bangga Kuliah di Polinema
                  </p>
                </div>

                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE-3.2.0')}}/dist/img/ikmal.jpg" alt="User Image">
                    <span class="username">
                      <a href="#">Ikmal Faris Musyaffa</a>
                    </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Kuliah sangat menyenangkan!!
                  </p>
                </div>

                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE-3.2.0')}}/dist/img/arainal.jpg" alt="user image">
                    <span class="username">
                      <a href="#">Arainal Aldiansyah</a>
                    </span>
                    <span class="description">Shared publicly - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Pemrograman Web Lanjut menyenangkan
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
            <h3 class="text-primary">Curhatan Mahasiswa Polinema</h3>
            <p class="text-muted">Tempat para mahasiswa untuk bercurhat, berkeluh kesah, dan mengutarakan isi hati. Tetap diingat bahwa tulisan anda masih dapat dilihat oleh orang lain.</p>
            <h5 class="mt-5 text-muted">Link Github Anggota Kelompok</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://github.com/Elfeny7" class="btn-link text-secondary"></i> Ikmal : https://github.com/Elfeny7</a>
              </li>
              <li>
                <a href="https://github.com/Arainal0112" class="btn-link text-secondary"></i> Arainal : https://github.com/Arainal0112</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection