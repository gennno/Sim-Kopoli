<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Koperasi Polibatam</title>
    <link rel="icon" type="image/x-icon" href="/img/659px-Logo_Politeknik_Negeri_Batam copy.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/table.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-kuning">
        <!-- Sidebar Toggle-->
        <button class="btn btn-lg order-lg-0 me-3 ms-1" id="sidebarToggle" href="#!">
            <i class="fas fa-bars gelap"></i></button>
        <!-- Navbar Brand-->
        <a class="navbar-brand d-none d-sm-inline" href="index.html">
            <img src="/img/logo Koperasi.png" alt="" height="40px"></a>
        <span class="navbar-brand d-block d-sm-none" href="#">
            <img src="/img/logo polibatam.png" height="40px" width="58px">
        </span>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle gelap" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw gelap"></i></a>
                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                    <li><button class="dropdown-item" type="button"><b>Halo, {{ Auth::guard('anggota')->user()->nama_lengkap; }}
                                </b></button></li>
                    <li><a class="dropdown-item" type="button" href="ganti-pass.php">Ganti Password</a></li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav mt-4">
                        <a class="nav-link" href="dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Ketua
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="data_anggota">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Data Anggota
                                </a>
                                <a class="nav-link" href="calon_anggota">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Calon Anggota
                                </a>
                                <a class="nav-link" href="status_biasa">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Permintaan Pinjaman
                                </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAnggota" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Anggota
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseAnggota" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="data_pribadi">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i> </div>
                                    Data Anggota
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePinjam" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Pinjaman
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePinjam" aria-labelledby="headingOne" data-bs-parent="#collapseAnggota">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="formbiasa">Pinjaman Biasa</a>
                                        <a class="nav-link" href="formkhusus">Pinjaman Khusus</a>
                                        <a class="nav-link" href="formurgent">Pinjaman Urgent</a>
                                    </nav>
                                </div>
                                <a class="nav-link" href="status">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i> </div>
                                    Status Peminjaman
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Build for PBL TRPL</div>
                    2B REGULER KELOMPOK 1
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid row justify-content px-4">
                    <h1 class="mt-4 mb-4">Data Calon Anggota Koperasi</h1>


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Calon Anggota
                        </div>
                        <div class="card-body table-responsive">
                            <div style="overflow-x: auto;">
                                <table id="datatablesSimple" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Nomor KTP</th>
                                            <th>Tanggal Daftar</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidates as $candidate)
                                            <tr>
                                                <td>{{ $candidate->nama_lengkap }}</td>
                                                <td>{{ $candidate->nik }}</td>
                                                <td>{{ $candidate->tanggal_daftar }}</td>
                                                <td>
                                                    <a href="{{ route('detail_calon', ['id' => $candidate->nik]) }}" class="btn btn-success">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; KELOMMPOK 1 TRPL-REGULER-2B3</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>


</body>

</html>
