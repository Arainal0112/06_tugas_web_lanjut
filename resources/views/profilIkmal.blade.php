@extends('layouts.content')

@section('title', 'Profil Ikmal')

@section('content')
<x-sidebar dashboard="" profil="active" ikmal="active" arainal="" pengalaman="" />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profil Ikmal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Ikmal</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{asset('AdminLTE-3.2.0')}}/dist/img/ikmal.jpg" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$student->name}}</h3>

              <p class="text-muted text-center">Mahasiswa</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Kelas</b> <a class="float-right">{{$student->class}}</a>
                </li>
                <li class="list-group-item">
                  <b>Nomor</b> <a class="float-right">{{$student->number}}</a>
                </li>
                <li class="list-group-item">
                  <b>NIM</b> <a class="float-right">{{$student->sin}}</a>
                </li>
              </ul>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Tempat, Tanggal Lahir</strong>

              <p class="text-muted">
                {{$student->birth}}
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

              <p class="text-muted">{{$student->address}}</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

              <p class="text-muted">
                <span class="tag tag-danger">Java,</span>
                <span class="tag tag-success">PHP Laravel,</span>
                <span class="tag tag-info">Frontend (HTML Javascript),</span>
                <span class="tag tag-warning">Dart Flutter</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Hobi</strong>

              <p class="text-muted">{{$student->hobby}}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">My Activity</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Post an Activity</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE-3.2.0')}}/dist/img/ikmal.jpg" alt="user image">
                      <span class="username">
                        <a href="#">Ikmal Faris Musyaffa</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Shared publicly - 7:30 PM today</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      Kuliah sangat menyenangkan!!
                    </p>

                    <p>
                      <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                      <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                      <span class="float-right">
                        <a href="#" class="link-black text-sm">
                          <i class="far fa-comments mr-1"></i> Comments (0)
                        </a>
                      </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                  </div>
                  <!-- /.post -->
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="{{asset('AdminLTE-3.2.0')}}/dist/img/ikmal.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Ikmal Faris Musyaffa</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Shared privately - 5 days ago</span>
                    </div>
                    <!-- /.user-block -->
                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <img class="img-fluid" src="{{asset('AdminLTE-3.2.0')}}/dist/img/1.png" alt="Photo">
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="{{asset('AdminLTE-3.2.0')}}/dist/img/2.jpg" alt="Photo">
                            <img class="img-fluid" src="{{asset('AdminLTE-3.2.0')}}/dist/img/3.jpg" alt="Photo">
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="{{asset('AdminLTE-3.2.0')}}/dist/img/4.jpg" alt="Photo">
                            <img class="img-fluid" src="{{asset('AdminLTE-3.2.0')}}/dist/img/1.png" alt="Photo">
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <p>
                      <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                      <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                      <span class="float-right">
                        <a href="#" class="link-black text-sm">
                          <i class="far fa-comments mr-1"></i> Comments (0)
                        </a>
                      </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                  </div>
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea class="form-control" id="inputExperience" placeholder="Tulis sesuatu untuk dipost"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Post publicly</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger">Post</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  @endsection