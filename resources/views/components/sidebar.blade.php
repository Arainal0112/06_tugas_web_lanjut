<div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/Polinema.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">TI-2G Kelompok 2</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/ikmal.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Ikmal Faris Musyaffa</a>
                </div>
            </div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/arainal.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Arainal Aldiansyah</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{Route('dashboard')}}" class="nav-link {{$dashboard}}">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{$profil}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Profil
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{Route('profil', ['slug'=>'ikmal'])}}" class="nav-link {{$ikmal}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ikmal Faris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('profil', ['slug'=>'arainal'])}}" class="nav-link {{$arainal}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Arainal Aldiansyah</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{Route('pengalamanKuliah')}}" class="nav-link {{$pengalaman}}">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Pengalaman Kuliah
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>