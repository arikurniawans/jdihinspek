<div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="plus" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Ubah User</h3>
           <p class="text-subtitle text-muted">Ubah User </p>
         </div>
       </div>

       <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="<?php echo base_url(); ?>users" class="btn btn-secondary float-right">
              <i  data-feather="arrow-left"></i>&nbsp;Back
            </a>
          </div>
          <div class="card-body">
          <?php foreach($userdata as $a){ ?>
            <form class="form form-vertical" method="post" action="<?php echo base_url(); ?>users/updateusers">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">
                  
                  <input type="hidden" name="idusers" value="<?php echo $a->id_user; ?>"/>

                    <div class="form-group">
                      <label>Username : <span style="color:red;font-size:1.4em;">*</span></label>
                      <input type="text" class="form-control" name="username" required value="<?php echo $a->username; ?>" placeholder="Username..">
                    </div>

                    <div class="form-group">
                      <label>Nama Lengkap : <span style="color:red;font-size:1.4em;">*</span></label>
                      <input type="text" class="form-control" name="nama" required value="<?php echo $a->nama_lengkap; ?>" placeholder="Name..">
                    </div>

                    <div class="form-group">
                      <label>Password : <span style="color:red;font-size:1.4em;">*</span></label>
                      <input type="Password" class="form-control" name="password" placeholder="Password..">
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