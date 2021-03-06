<!DOCTYPE html>
<html>
<head>
    <title>Produk Hukum Inspektorat Provinsi Lampung - Jaringan Dokumentasi dan Informasi Hukum | Kantor Inspektorat Provinsi Lampung</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="https://getbootstrap.com/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="https://jdih.lampungprov.go.id/uploads/logo_masterweb_jdih.png" width="150" height="40"/></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Kantor Inspektorat Provinsi Lampung</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Kategori Hukum</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>main">
              <span data-feather="file-text"></span>
              Tampilkan Semua <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>main/perda">
              <span data-feather="file-text"></span>
              Peraturan Daerah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url(); ?>main/pergub">
              <span data-feather="file-text"></span>
              Peraturan Gubernur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>main/kepgub">
              <span data-feather="file-text"></span>
              Keputusan Gubernur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>main/insgub">
              <span data-feather="file-text"></span>
              Instruksi Gubernur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>main/skgub">
              <span data-feather="file-text"></span>
              Surat Kep. Gubernur
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>main/mou">
              <span data-feather="file-text"></span>
              MoU
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Produk Hukum</h1>
      </div>
      <table border="0" style="width:30%;">
        <tbody>
          <tr>
            <td><b>Kategori</b></td>
            <td>:</td>
            <td>(PERATURAN GUBERNUR)</td>
          </tr>
          <tr>
            <td><b>Total Produk</b></td>
            <td>:</td>
            <td><?php echo $totalproduct; ?> Produk</td>
          </tr>
          <tr>
            <td><b>Berlaku</b></td>
            <td>:</td>
            <td><?php echo $totalaktif; ?> Produk</td>
          </tr>
        </tbody>
      </table><hr>

            <table id="tabel-data">
            <thead>
                <tr>			
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Tanggal Pembaharuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pergubproduct as $a){ ?>
                <tr>
                    <td><?php if($a->jenis_produk == 1){echo "PERDA";}else if($a->jenis_produk == 2){echo "PERGUB";}else if($a->jenis_produk == 3){echo "KEPGUB";
									            }else if($a->jenis_produk == 4){echo "INSGUB";}else if($a->jenis_produk == 5){echo "SKGUB";}else if($a->jenis_produk == 6){echo "MoU";} ?></td>
                    <td><?php echo strtoupper($a->judul_produk); ?></td>
                    <td><?php echo date('D, d M Y',strtotime($a->updated_at)) ; ?></td>
                    <td><a class="nav-link" href="<?php echo base_url(); ?>main/detail/<?php echo $a->id_produk; ?>">Detail</a></td>
                </tr>
                <?php } ?>
            </tbody>

                <script>
                $(document).ready(function(){
                    $('#tabel-data').DataTable();
                });
            </script>

            </table>

    </main>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.js"></script>

</body>
</html>