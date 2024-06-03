
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
                            Kabag
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">

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
                    <h1 class="mt-4 mb-4">Detail Anggota</h1>

                    <a href="{{ url('/kabag/data_pribadi') }}" class="btn btn-success" style="width:80px;">Kembali</a>
        <p></p>
                    <p></p>
        <div class="card">
            <div class="card-header">
                Data Pribadi
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap (sesuai KTP):</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $anggota['nama_lengkap'] }}" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nik" class="form-label">NIK :</label>
                            <input type="number" class="form-control" style="width: 100%;" name="nik" value="{{ $anggota['nik'] }}" readonly>
                        </div>
                    </div>
                </div>
                <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="masa_berlaku_ktp" class="form-label">Masa Berlaku KTP:</label>
                                        <input type="text" class="form-control" name="masa_berlaku_ktp"
                                            id="masa_berlaku_ktp" value="{{ $anggota['masa_berlaku_ktp'] }}"readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tempat_lahir" class="form-label">Tempat & Tanggal
                                            Lahir :</label>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    value="{{ $anggota['tempat_lahir'] }}" readonly>
                                            </div>
                                            <div class="col">
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    value="{{ $anggota['tanggal_lahir'] }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin
                                            :</label>
                                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                                            value="{{ $anggota['jenis_kelamin'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="alamat" class="form-label">Alamat KTP :</label>
                                        <textarea type="text" class="form-control" name="alamat_ktp"
                                            placeholder="{{ $anggota['alamat'] }}" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kelurahan" class="form-label">Kelurahan KTP
                                            :</label>
                                        <input type="text" class="form-control" name="kelurahan_ktp"
                                            value="{{ $anggota['kelurahan_ktp'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kecamatan" class="form-label">Kecamatan KTP
                                            :</label>
                                        <input type="text" class="form-control" name="kecamatan_ktp"
                                            value="{{ $anggota['kecamatan_ktp'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kabupaten" class="form-label">Kota/Kabupaten KTP
                                            :</label>
                                        <input type="text" class="form-control" name="kota_ktp"
                                            value="{{ $anggota['kota_ktp'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kode_pos" class="form-label">Kode Pos KTP :</label>
                                        <input type="number" class="form-control" name="kodepos_ktp"
                                            value="{{ $anggota['kodepos_ktp'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="alamat" class="form-label">Alamat Tinggal :</label>
                                        <textarea type="text" class="form-control" name="alamat"
                                            placeholder="{{ $anggota['alamat_ktp'] }}" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kelurahan" class="form-label">Kelurahan Tinggal
                                            :</label>
                                        <input type="text" class="form-control" name="kelurahan"
                                            value="{{ $anggota['kelurahan_ktp'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kecamatan" class="form-label">Kecamatan Tinggal
                                            :</label>
                                        <input type="text" class="form-control" name="kecamatan"
                                            value="{{ $anggota['kecamatan_ktp'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kabupaten" class="form-label">Kota/Kabupaten Tinggal
                                            :</label>
                                        <input type="text" class="form-control" name="kota"
                                            value="{{ $anggota['kota_ktp'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kode_pos" class="form-label">Kode Pos Tinggal :</label>
                                        <input type="number" class="form-control" name="kodepos"
                                            value="{{ $anggota['kodepos_ktp'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_telepon">No. Telepon </label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_telepon" class="form-label">Rumah :</label>
                                        <input type="text" class="form-control" name="no_telepon_rumah"
                                            value="{{ $anggota['no_telepon_rumah'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_telepon" class="form-label">HP :</label>
                                        <input type="text" class="form-control" name="no_telepon_hp"
                                            value="{{ $anggota['no_telepon_hp'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="status_tempat_tinggal" class="form-label">Status
                                            Tempat Tinggal
                                            :</label><br>
                                        <input name="status_tempat_tinggal" id="status_tempat_tinggal"
                                            class="form-control" value="{{ $anggota['status_tempat_tinggal'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="menempati_alamat_sejak" class="form-label">Menempati
                                            Alamat tsb Sejak
                                            :</label>
                                        <input type="date" class="form-control" name="menempati_alamat_tsb_sejak"
                                            value="{{ $anggota['menempati_alamat_tsb_sejak'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="pendidikan_terakhir" class="form-label">Pendidikan
                                            Terakhir :</label><br>
                                        <input name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control"
                                            value="{{ $anggota['pendidikan_terakhir'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="status_perkawinan" class="form-label">Status
                                            Perkawinan :</label><br>
                                        <input name="status_perkawinan" id="status_perkawinan" class="form-control"
                                            value="{{ $anggota['status_perkawinan'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama_istri_suami" class="form-label">Nama Istri /
                                            Suami :</label>
                                        <input type="text" class="form-control" name="nama_istri_suami"
                                            value="{{ $anggota['nama_istri_suami'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jumlah_anak" class="form-label">Jumlah Anak
                                            :</label>
                                        <div class="row">
                                            <div class="col">
                                                <input type="number" class="form-control" class="form-check-input"
                                                    name="jumlah_anak" value="{{ $anggota['jumlah_anak'] }}"
                                                    readonly>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Orang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama_ibu_kandung_pemohon" class="form-label">Nama
                                            Ibu Kandung Pemohon
                                            :</label>
                                        <input type="text" class="form-control" name="nama_ibu_kandung_pemohon"
                                            value="{{ $anggota['nama_ibu_kandung_pemohon'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="npwp_pribadi" class="form-label">NPWP Pribadi
                                            :</label>
                                        <input type="number" class="form-control" name="npwp_pribadi"
                                            value="{{ $anggota['npwp_pribadi'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama_ahli_waris" class="form-label">Nama Ahli Waris
                                            :</label>
                                        <input type="text" class="form-control" name="nama_ahli_waris"
                                            value="{{ $anggota['nama_ahli_waris'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hubungan_ahli_waris" class="form-label">Hubungan
                                            Ahli Waris
                                            :</label><br>
                                        <input name="hubungan_ahli_waris" id="hubungan_ahli_waris" class="form-control"
                                            value="{{ $anggota['tanggal_lahir'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="card">
                        <div class="card-header">
                            Data Pekerjaan
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_telp_ext_kantor" class="form-label">No. Telp ext
                                            Kantor :</label>
                                        <input type="number" class="form-control" name="no_telp_ext_kantor"
                                            value="{{ $anggota['no_telp_ext_kantor'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nip" class="form-label">Nomor Induk Pegawai
                                            :</label>
                                        <input type="number" class="form-control" name="nip"
                                            value="{{ $anggota['nip'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nomor_rekening" class="form-label">Nomor Rekening
                                            BNI :</label>
                                        <input type="text" class="form-control" name="nomor_rekening"
                                            value="{{ $anggota['nomor_rekening'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="bagian" class="form-label">Divisi/ Jabatan :</label>
                                        <input type="text" class="form-control" name="bagian"
                                            value="{{ $anggota['bagian'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tgl_masuk_perusahaan" class="form-label">Tgl Masuk
                                            Ke Perusahaan
                                            :</label>
                                        <input type="date" class="form-control" name="tgl_masuk_keperusahaan"
                                            value="{{ $anggota['tgl_masuk_ke_perusahaan'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="status_karyawan" class="form-label">Status Karyawan
                                            :</label>
                                        <input name="status_karyawan" id="status_karyawan" class="form-control"
                                            value="{{ $anggota['status_karyawan'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="card">
                        <div class="card-header">
                            File Pendukung
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="foto" class="form-label">Foto (2x3) :</label>
                                        <img class="img-thumbnail" src="img/<?php echo $anggota['foto']; ?>"
                                            style="width:150px;height:150px;" alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="foto_KTP" class="form-label">Foto KTP :</label>
                                        <img class="img-thumbnail" src="img/<?php echo $anggota['foto_ktp']; ?>"
                                            style="width:150px;height:150px;" alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ttd" class="form-label">Tanda Tangan :</label>
                                        <img src="img/<?php echo $anggota['ttd']; ?>" style="width:150px;height:150px;"
                                            alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="id_card" class="form-label">Id Card :</label>
                                        <img src="img/<?php echo $anggota['id_card']; ?>" style="width:150px;height:150px;"
                                            alt="Foto Anggota">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; KELOMMPOK 1 TRPL-REGULER-2B</div>
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

</html>
