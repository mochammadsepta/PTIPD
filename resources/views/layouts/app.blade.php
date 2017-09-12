<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PTIPD') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/gt.png') }}">
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('table/css/dataTables.bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/selectize.bootstrap3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen" >
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Theme CSS -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="home">
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                  <a class="navbar-brand js-scroll-trigger navbar-brand left" href="#page-top">P T I P D</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    @role('admin')
                        <li><a href="{{ url('/home') }}">Beranda</a></li>
                        <li><a href="{{ route('hak-akses.index') }}">Hak Akses</a></li>
                        <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profil-sekolah.index') }}">Sekilas PTIPD</a></li>
                            <li><a href="{{ route('kejuruan.index') }}">Struktur Organisasi</a></li>
                            <li><a href="{{ route('fasilitas.index') }}">JobDesk</a></li>
                        </ul>
                        </li>
                        <li><a href="{{ route('artikel.index') }}">Artikel</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('kejuruan')
                        <li><a href="">Beranda</a></li>
                        <li><a href="{{ route('kejuruan.index') }}">Kejuruan</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('ekskul')
                        <li><a href="">Beranda</a></li>
                        <li><a href="{{ route('ekskul.index') }}">Ekstrakurikuler</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('fasilitas')
                        <li><a href="">Beranda</a></li>
                        <li><a href="{{ route('fasilitas.index') }}">Fasilitas</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('artikel')
                        <li><a href="">Beranda</a></li>
                        <li><a href="{{ route('artikel.index') }}">Berita</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @if (Auth::guest())
        			</button>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/profil') }}">Sekilas PTIPD</a></li>
                            <li><a href="{{ url('/kejuruannnnnnnnn') }}">Jobdesk</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/profil') }}">Training ICT</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/berita') }}">Kebijakan dan Tatatertib</a></li>
                    <li><a href="{{ url('/fasilitas') }}">Gallery</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
    
    @yield('content')
    
    <!-- Social links. @TODO: replace by link/instructions in template -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4 widget">
                        <h3 class="widget-title">Kontak</h3>
                        <div class="widget-body">
                            <p><i class="glyphicon glyphicon-phone"> 0822-1234-5678</i><br>
                                <a href="mailto:ptipd@uinsgd.ac.id"><i class="glyphicon glyphicon-envelope"> ptipd@uinsgd.ac.id</a></i><br>
                                <br>
                                Jl. AH Nasution No. 105
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        
                    </div>

                    <div class="col-md-5 widget">
                        <h3 class="widget-title">Ikuti Kami</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href="https://twitter.com/uinbandung?lang=id"><i class="fa fa-twitter fa-2"></i></a>
                                <a href="https://www.youtube.com/watch?v=nJzKys72gso"><i class="fa fa-youtube fa-2"></i></a>
                                <a href="https://www.instagram.com/infouinsgd/"><i class="fa fa-instagram fa-2"></i></a>
                                <a href="https://www.facebook.com/pages/PTIPD-UIN-Sunan-Gunung-Djati-Bandung/266583033777122"><i class="fa fa-facebook fa-2"></i></a>
                            </p>    
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="{{ url('/') }}">Beranda</a> |
                                <a href="{{ url('/berita') }}">Berita</a> |
                                <a href="{{ url('/kontak') }}">Kontak</a> |
                                <b><a href="{{ url('/login') }}">Masuk</a></b>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2017 Pusat Teknologi Informasi Pengumpulan Data
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('table/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('table/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
    <script src="{{ asset('assets/js/headroom.min.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.headroom.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script src="/js/custom.js"></script>
    @yield('scripts')
</body>
</html>