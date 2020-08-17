<div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="book-open" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Produk Hukum</h3>
           <p class="text-subtitle text-muted">List Produk hukum</p>
         </div>
       </div>

    <section class="section">
    <div class="card">
        <div class="card-header">
            <a href="<?php echo base_url(); ?>produkhukum/addprodukhukum" class="btn btn-success">
                <i  data-feather="plus"></i>&nbsp;Add New
            </a>
        </div>
        <div class="card-body">
            <table class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th></th>
                        <th>Bentuk Peraturan</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Lingkup / Wilayah</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < 1 ; $i++) { ?>
                        <tr>

                          <td><input type="checkbox" class=" form-check-input"></td>
                          <td>Perda</td>
                          <td>Bentuk lambang daerah</td>
                          <td>Masi berlaku</td>
                          <td>Provinsi Lampung</td>
                          <td>
                            <a href="detail-produk-hukum.php" class="btn btn-secondary cs-btn">
                                <i data-feather="eye"></i>
                            </a>
                            <a href="edit-produk-hukum.php" class="btn btn-primary cs-btn">
                                <i data-feather="edit-3"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#border-less-delete" class="btn btn-danger cs-btn">
                                <i data-feather="trash-2"></i>
                            </a>
                        </td>    
                    </tr>                     
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</section>