<div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="plus" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Edit Produk Hukum</h3>
           <p class="text-subtitle text-muted">Edit produk hukum </p>
         </div>
       </div>
       <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
       <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="<?php echo base_url(); ?>produkhukum" class="btn btn-secondary float-right">
              <i  data-feather="arrow-left"></i>&nbsp;Back
            </a>
          </div>
          <div class="card-body">
          <?php foreach($detailproduk as $a){ ?>
            <form class="form form-vertical" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>produkhukum/updateproduk">
              <div class="form-body">
                <div class="row">
                <input type="hidden" name="idproduk" value="<?php echo $a->id_produk; ?>"/>

                  <div class="col-12">
                    <div class="form-group">
                      <label>Judul : <span style="color:red;font-size:1.4em;">*</span></label>
                      <input type="text" class="form-control" name="judul" required placeholder="Judul.." value="<?php echo $a->judul_produk; ?>">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Jenis/Bentuk Peraturan : <span style="color:red;font-size:1.4em;">*</span></label>
                      <select class="form-select" name="jenis" required>
                          <option disabled="">Pilih</option>
                          <option value="<?php echo $a->jenis_produk; ?>" selected><?php if($a->jenis_produk == 1){echo "[PERDA] PERATURAN DAERAH";}
                                        else if($a->jenis_produk == 2){echo "[PERGUB] PERATURAN GUBERNUR";}else if($a->jenis_produk == 3){echo "[KEPGUB] KEPUTUSAN GUBERNUR";
                                        }else if($a->jenis_produk == 4){echo "[INSGUB] INSTRUKSI GUBERNUR";}else if($a->jenis_produk == 5){echo "[SKGUB] SURAT KEPUTUSAN GUBERNUR";}
                                        else if($a->jenis_produk == 6){echo "[MoU] MoU";} ?></option>
                          <option value="1">[PERDA] PERATURAN DAERAH</option>
                          <option value="2">[PERGUB] PERATURAN GUBERNUR</option>
                          <option value="3">[KEPGUB] KEPUTUSAN GUBERNUR</option>
                          <option value="4">[INSGUB] INSTRUKSI GUBERNUR</option>
                          <option value="5">[SKGUB] SURAT KEPUTUSAN GUBERNUR</option>
                          <option value="6">[MoU] MoU</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Nomor Peraturan : <span style="color:red;font-size:1.4em;">*</span></label>
                      <input type="number" class="form-control" name="no_peraturan" required placeholder="Nomor Peraturan.." value="<?php echo $a->nomor_peraturan; ?>">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Nomor Panggil :</label>
                      <input type="number" class="form-control" name="no_panggil" placeholder="Nomor Panggil.." value="<?php echo $a->nomor_panggil; ?>">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>T.E.U Badan / Pengarang :</label>
                      <input type="text" class="form-control" name="pengarang" placeholder="Pengarang.." value="<?php echo $a->pengarang; ?>">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Cetakan / Edisi :</label>
                      <input type="text" class="form-control" name="cetakan" placeholder="Cetakan / Edisi.." value="<?php echo $a->cetakan; ?>">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Tahun Pengundangan : <span style="color:red;font-size:1.4em;">*</span></label>
                      <select class="form-select" name="thn_pengundangan">
                        <option value="<?php echo $a->thn_pengundangan; ?>" selected><?php echo $a->thn_pengundangan; ?></option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Tanggal Pengundangan : <span style="color:red;font-size:1.4em;">*</span></label>     
                      <div class="input-group date" data-date-format="yyyy.mm.dd">
                        <input  type="text" class="form-control mb-0" name="tgl_perundangan" required placeholder="Tanggal Pengundangan.." value="<?php echo $a->tgl_pengundangan; ?>">
                        <div class="input-group-addon">
                          <p class="date-icon">></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Tempat Penerbit :</label>
                      <input type="text" class="form-control" name="tempat_penerbit" placeholder="Tempat Penerbit.." value="<?php echo $a->tempat_penerbit; ?>">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Penerbit :</label>
                      <input type="text" class="form-control" name="penerbit" placeholder="Penerbit.." value="<?php echo $a->penerbit; ?>">
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Kolasi (Deskripsi fisik) :</label>
                      <input type="text" class="form-control" name="kolasi" placeholder="Kolasi (Deskripsi fisik).." value="<?php echo $a->kolasi; ?>">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Sumber :</label>
                      <input type="text" class="form-control" name="sumber" placeholder="Sumber.." value="<?php echo $a->sumber; ?>">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Subjek :</label>
                      <input type="text" class="form-control" name="subjek" placeholder="Subjek.." value="<?php echo $a->subjek; ?>">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>ISBN :</label>
                      <input type="text" class="form-control" name="isbn" placeholder="ISBN.." value="<?php echo $a->isbn; ?>">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Status : <span style="color:red;font-size:1.4em;">*</span></label>
                      <select class="form-select" name="status" required>
                                <option disabled="">Pilih</option>
                                <option value="<?php echo $a->status; ?>" selected><?php echo ucwords($a->status); ?></option>
                                <option value="Mencabut">Mencabut</option>
                                <option value="Dicabut">Dicabut</option>
                                <option value="Diubah">Diubah</option>
                                <option value="Mengubah">Mengubah</option>
                                <option value="Masih Berlaku">Masih Berlaku</option>
                                <option value="Tidak Berlaku">Tidak Berlaku</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bahasa :</label>
                      <input type="text" class="form-control" name="bahasa" placeholder="Bahasa.." value="<?php echo $a->bahasa; ?>">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bidang Hukum :</label>
                      <input type="text" class="form-control" name="bidang_hukum" placeholder="Bidang Hukum.." value="<?php echo $a->bidang_hukum; ?>">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Nomor Induk Buku :</label>
                      <input type="text" class="form-control" name="no_induk" placeholder="Nomor Induk Buku.." value="<?php echo $a->no_induk_buku; ?>">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Ubah Berkas: <span style="color:red;font-size:1.4em;">*</span></label><br>
                      <input type="file" class="form-control-file loking" name="file_produk">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Lingkup : <span style="color:red;font-size:1.4em;">*</span></label>
                      <select class="form-select" name="lingkup" required>
                                <option disabled="">Pilih</option>
                                <option value="<?php echo $a->lingkup; ?>" selected><?php if($a->lingkup == "prov"){echo "Provinsi";}else if($a->lingkup == "kab_kota"){echo "Kabupaten/Kota";} ?></option>
                                <option value="prov">Provinsi</option>
                                <option value="kab_kota">Kabupaten/Kota</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Wilayah : <span style="color:red; font-size:1.4em;">*</span></label>
                      <select class="form-select" name="wilayah" required>
                                <option value="<?php echo $a->wilayah; ?>" selected><?php echo $a->wilayah; ?></option>
                                <option value="Kabupaten Lampung Barat">Kabupaten Lampung Barat</option>
                                <option value="Kabupaten Lampung Selatan">Kabupaten Lampung Selatan</option>
                                <option value="Kabupaten Lampung Tengah">Kabupaten Lampung Tengah</option>
                                <option value="Kabupaten Lampung Timur">Kabupaten Lampung Timur</option>
                                <option value="Kabupaten Lampung Utara">Kabupaten Lampung Utara</option>
                                <option value="Kabupaten Mesuji">Kabupaten Mesuji</option>
                                <option value="Kabupaten Pesawaran">Kabupaten Pesawaran</option>
                                <option value="Kabupaten Pesisir Barat">Kabupaten Pesisir Barat</option>
                                <option value="Kabupaten Pringsewu">Kabupaten Pringsewu</option>
                                <option value="Kabupaten Tanggamus">Kabupaten Tanggamus</option>
                                <option value="Kabupaten Tulang Bawang">Kabupaten Tulang Bawang</option>
                                <option value="Kabupaten Way Kanan">Kabupaten Way Kanan</option>
                                <option value="Kota Bandar Lampung">Kota Bandar Lampung</option>
                                <option value="Kota Metro">Kota Metro</option></select>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Berkas saat ini : </label>
                            <br>
                            <a href="<?php echo base_url(); ?>produk_hukum/<?php echo $a->file_produk; ?>" target="_blank"><?php echo $a->file_produk; ?></a>
                        </div>
                    </div>


                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-save mr-1 mb-1">
                      <i data-feather="save"></i>&nbsp;<span>SIMPAN PERUBAHAN</span>
                    </button>
                  </div>

                </div>
              </div>
            </form>
            <?php } ?>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>