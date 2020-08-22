<div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="eye" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Detail Produk Hukum</h3>
           <p class="text-subtitle text-muted">Detail produk hukum </p>
         </div>
       </div>

       <section class="section">
        <div class="card">

         <div class="card-header">
            <a href="<?php echo base_url(); ?>produkhukum" class="btn btn-secondary float-right">
              <i  data-feather="arrow-left"></i>&nbsp;Back
            </a>
        </div>

        <div class="card-body">
        <?php foreach($detailproduk as $a){ ?>
          <div class="col-lg-12">
            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Jenis Peraturan
                <span><?php if($a->jenis_produk == 1){echo "PERATURAN DAERAH";}
                                        else if($a->jenis_produk == 2){echo "PERATURAN GUBERNUR";}else if($a->jenis_produk == 3){echo "[KEPGUB] KEPUTUSAN GUBERNUR";
                                        }else if($a->jenis_produk == 4){echo "INSTRUKSI GUBERNUR";}else if($a->jenis_produk == 5){echo "[SKGUB] SURAT KEPUTUSAN GUBERNUR";}
                                        else if($a->jenis_produk == 6){echo "MoU";} ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Judul
                <span><?php echo ucwords($a->judul_produk); ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Nomor Peraturan
                <span><?php echo $a->nomor_peraturan; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Nomor Panggil
                <span><?php echo $a->nomor_panggil; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                T.E.U Badan / Pengarang
                <span><?php echo $a->pengarang; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Cetakan / Edisi
                <span><?php echo $a->cetakan; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Tahun Pengundangan
                <span><?php echo $a->thn_pengundangan; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Tanggal Pengundangan
                <span><?php echo $a->tgl_pengundangan; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Tempat Terbit
                <span><?php echo $a->tempat_penerbit; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Penerbit
                <span><?php echo $a->penerbit; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Kolasi (Deskripsi Fisik)
                <span><?php echo $a->kolasi; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Sumber
                <span><?php echo $a->sumber; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Subjek
                <span><?php echo $a->subjek; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                ISBN
                <span><?php echo $a->isbn; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Status
                <span><?php echo $a->status; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Bahasa
                <span><?php echo $a->bahasa; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Bidang Hukum
                <span><?php echo $a->bidang_hukum; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                No Induk Buku
                <span><?php echo $a->no_induk_buku; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Lingkup
                <span><?php if($a->lingkup == "prov"){echo "Provinsi";}else if($a->lingkup == "kab_kota"){echo "Kabupaten/Kota";} ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Wilayah
                <span><?php echo $a->wilayah; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Nama File
                <span><a href="<?php echo base_url(); ?>produk_hukum/<?php echo $a->file_produk; ?>" target="_blank"><?php echo $a->file_produk; ?></a></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                URL Halaman
                <span>
                  <a href="javascipt:void(0);">Web Inspektorat</a>
                </span>
              </li>

            </ul>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    </div>
  </div>
</div>