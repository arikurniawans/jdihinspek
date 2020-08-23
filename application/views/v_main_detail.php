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
            <a class="nav-link" href="<?php echo base_url(); ?>main/pergub">
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
    <?php foreach($detailproduk as $a){ ?>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <center><h1 class="h2"><?php echo strtoupper($a->judul_produk); ?></h1></center>
      </div>

      <div class="row">
                <div class="col-md-4">
                    <iframe src="<?php echo base_url(); ?>produk_hukum/<?php echo $a->file_produk; ?>" height="500" width="100%"></iframe>
                </div>

                <div class="col-md-8">
                    
                    <a href="<?php echo base_url(); ?>main/downloadproduct/<?php echo $a->id_produk; ?>" class="btn btn-primary btn-icon"><i class="fa fa-cloud-download"></i>Download</a><br/><br/>
                    <div class="portofolio-details mt-lg">
                        <h5 class="mt-sm mb-xs ml-xs">Informasi Produk Hukum</h5>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">Jenis</td>
                                    <td><?php if($a->jenis_produk == 1){echo "PERDA";}else if($a->jenis_produk == 2){echo "PERGUB";}else if($a->jenis_produk == 3){echo "KEPGUB";
									            }else if($a->jenis_produk == 4){echo "INSGUB";}else if($a->jenis_produk == 5){echo "SKGUB";}else if($a->jenis_produk == 6){echo "MoU";} ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Tempat Penetapan</td>
                                    <td><?php if($a->tempat_penerbit == ""){ echo "-"; }else{ echo strtoupper($a->tempat_penerbit); } ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Tanggal Penetapan</td>
                                    <td><?php echo date('d F Y',strtotime($a->tgl_pengundangan)) ; ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Tanggal Diundangkan</td>
                                    <td><?php echo date('d F Y',strtotime($a->tgl_pengundangan)) ; ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Sumber</td>
                                    <td><?php if($a->sumber == ""){ echo "Tidak ada sumber"; }else{ echo strtoupper($a->sumber); } ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">T.E.U Badan</td>
                                    <td><?php if($a->pengarang == ""){ echo "-"; }else{ echo strtoupper($a->pengarang); } ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">
                                        Status Produk Hukum
                                    </td>
                                <td><?php echo ucwords($a->status); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
    <?php } ?>

    </main>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.js"></script>

</body>
</html>
