<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB User</title>
        <link href="{{asset('admin/css/card.css')}}" rel="stylesheet" />
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">SITESI</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Cari ..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu Utama</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Beranda
                            </a>
                            <div class="sb-sidenav-menu-heading">Pengaturan</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Biodata
                            </a>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Account
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        User
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">TES PSIKOLOGI</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Kenali dirimu lebih dalam dengan mengikuti tes dibawah ini !</li>
                        </ol>    
                    </div>
                    <main class="container">
	            <article class="postcard blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="admin/image/disc.jpg" alt="Image Title" />
		        </a>
                <div class="postcard__text">
                    <h1>DISC</h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Beberapa perusahan menggunakan metode ini untuk perekrutan dan kesesuaian terhadap pekerjaan. Tes psikologi ini akan fokus pada sifat-sifat dominasi, bujukan, pengajuan, dan kepatuhan. DISC juga dapat mendeteksi cara berkomunikasi, kepribadian, hingga tingkat stres.</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play blue">
                            <a href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
                </article>
                <article class="postcard red">
                <a>
                    <img class="postcard__img" src="admin/image/mbti.jfif" alt="Image Title" />	
                </a>
                <div class="postcard__text">
                    <h1>Indikator Tipe Myer-Briggs (MBTI)</h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Pemeriksaan kepribadian ini dilakukan atas dasar setiap orang memahami dunia melalui sensasi, intuisi, perasaan, dan pemikiran. MBTI akan memeriksa tiap individu menurut empat dimensi bipolar, yaitu : sikap, fungsi pengindraan, fungsi penilaian, dan prefensi gaya hidup</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play red">
                            <a href="#">Daftar</a>
                        </li>
                    </ul>
		        </div>
	            </article>
                <article class="postcard green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="admin/image/wartegg.png" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1>Wartegg</h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Tes ini bertujuan untuk meneliti karakter kepribadian seseorang (mengeksplorasi) terutama dalam hal emosi, imajinasi, dinamisme, kontrol, dan fungsi realitas yang dimiliki oleh setiap orang, tetapi dengan tingkatan dan hubungan satu sama lain yang cukup berbeda.</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play green">
                            <a href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
	            </article>
                <article class="postcard yellow">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="admin/image/analogi.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1>Kemampaun Verbal</h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Tes ini bertujuan untuk mengukur kemampuan dalam memahami, mengevaluasi secara kritis terkait dengan informasi tertulis, kecakapan, keterampilan, kecepatan, dan kebenaran mengolah kata atau untuk melihat cara berpikir seseorang dalam menggunakan kata-kata.</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play yellow">
                            <a href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
                </article>
                <article class="postcard green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="admin/image/numerik.png" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1>Numerik</a></h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Tes kemampuan numerik ada 3 jenis yaitu aljabar, aritmatika dan deret.</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play green">
                            <a href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
	            </article>
                <article class="postcard green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="admin/image/kraepelin.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title green"><a href="#">Kraepelin</a></h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Tes ini digunakan untuk mengukur atensi seseorang ketika mengerjakan suatu tugas. Adapun aspek yang diujikan dalam tes ini, yaitu : daya tahan, kemauan, emosi, penyesuaian diri, dan stabilitas diri.</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play green">
                            <a href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
	            </article>
                </main>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SITESI 2020</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>