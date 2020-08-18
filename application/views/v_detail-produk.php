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
            <form class="form form-vertical" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>produkhukum/uploadproduk">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">
                    <div class="form-group">
                      <label>Judul : <span style="color:red;font-size:1.4em;">*</span></label>
                      <input type="text" class="form-control" name="judul" required placeholder="Judul..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Jenis/Bentuk Peraturan : <span style="color:red;font-size:1.4em;">*</span></label>
                      <select class="form-select" name="jenis" required>
                          <option disabled="">Pilih</option>
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
                      <input type="number" class="form-control" name="no_peraturan" required placeholder="Nomor Peraturan..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Nomor Panggil :</label>
                      <input type="number" class="form-control" name="no_panggil" placeholder="Nomor Panggil..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>T.E.U Badan / Pengarang :</label>
                      <input type="text" class="form-control" name="pengarang" placeholder="Pengarang..">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Cetakan / Edisi :</label>
                      <input type="text" class="form-control" name="cetakan" placeholder="Cetakan / Edisi..">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Tahun Pengundangan : <span style="color:red;font-size:1.4em;">*</span></label>
                          <?php 
                              $now=date('Y');
                              echo "<select class='form-select' name='thn_pengundangan' required>";
                              for ($a=2020;$a<=$now;$a++)
                              {
                                  echo "<option value='$a'>$a</option>";
                              }
                              echo "</select>";
                          ?>
                          
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Tanggal Pengundangan : <span style="color:red;font-size:1.4em;">*</span></label>      
                      <div class="input-group date" data-date-format="yyyy.mm.dd">
                        <input  type="text" class="form-control mb-0" name="tgl_perundangan" required placeholder="Tanggal Pengundangan..">
                        <div class="input-group-addon">
                          <p class="date-icon">></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Tempat Penerbit :</label>
                      <input type="text" class="form-control" name="tempat_penerbit" placeholder="Tempat Penerbit..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Penerbit :</label>
                      <input type="text" class="form-control" name="penerbit" placeholder="Penerbit..">
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Kolasi (Deskripsi fisik) :</label>
                      <input type="text" class="form-control" name="kolasi" placeholder="Kolasi (Deskripsi fisik)..">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Sumber :</label>
                      <input type="text" class="form-control" name="sumber" placeholder="Sumber..">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Subjek :</label>
                      <input type="text" class="form-control" name="subjek" placeholder="Subjek..">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>ISBN :</label>
                      <input type="text" class="form-control" name="isbn" placeholder="ISBN..">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Status : <span style="color:red;font-size:1.4em;">*</span></label>
                      <select class="form-select" name="status" required>
                                <option disabled="">Pilih</option>
                                <option value="Mencabut">Mencabut</option>
                                <option value="Dicabut">Dicabut</option>
                                <option value="Diubah">Diubah</option>
                                <option value="Mengubah">Mengubah</option>
                                <option value="Masih Berlaku">Masih Berlaku</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bahasa :</label>
                      <input type="text" class="form-control" name="bahasa" placeholder="Bahasa..">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bidang Hukum :</label>
                      <input type="text" class="form-control" name="bidang_hukum" placeholder="Bidang Hukum..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Nomor Induk Buku :</label>
                      <input type="text" class="form-control" name="no_induk" placeholder="Nomor Induk Buku..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Unggah Berkas: <span style="color:red;font-size:1.4em;">*</span></label><br>
                      <input type="file" class="form-control-file loking" name="file_produk" required>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Lingkup : <span style="color:red;font-size:1.4em;">*</span></label>
                      <select class="form-select" name="lingkup" required>
                                <option disabled="">Pilih</option>
                                <option value="Provinsi">Provinsi</option>
                                <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Wilayah : <span style="color:red; font-size:1.4em;">*</span></label>
                      <select class="form-select" name="wilayah" required>
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


                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-save mr-1 mb-1">
                      <i data-feather="save"></i>&nbsp;<span>SIMPAN</span>
                    </button>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>