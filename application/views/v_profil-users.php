<?php if($this->session->flashdata('success')){ ?>
<script>
    alert('Reset password berhasil, anda akan diarahkan ke laman login');
    window.location = '<?php echo base_url(); ?>login';
    <?php session_destroy(); ?>
</script>
<?php } ?>
<div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="user" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Profile Saya</h3>
           <p class="text-subtitle text-muted">Berikut adalah data profile</p>
         </div>
       </div>

       <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="<?php echo base_url(); ?>dashboard" class="btn btn-secondary float-right">
              <i  data-feather="arrow-left"></i>&nbsp;Back
            </a>
          </div>
          <div class="card-body">
          <?php foreach($userdata as $a){ ?>
            <form class="form form-vertical" method="post" action="<?php echo base_url(); ?>users/updateprofil">
              <div class="form-body">
                <div class="row">

                  <div class="col-lg-12">
                    <p class="text-center">
                      <img src="<?php echo base_url(); ?>assets/images/avatar/avatar-user.svg" width="150" alt="">
                    </p>  
                  </div>

                  <input type="hidden" name="idusers" value="<?php echo $a->id_user; ?>"/>
                  
                  <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="form-group">
                      <label>Username :</label>
                      <input type="text" class="form-control" value="<?php echo $a->username; ?>" disabled placeholder="Username..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Name :</label>
                      <input type="text" class="form-control" value="<?php echo strtoupper($a->username); ?>" disabled placeholder="Name..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Password :</label>
                      <input type="Password" class="form-control" name="password" placeholder="Password..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-6">  
                    <div class="form-group">
                      <label>Active :</label>
                      <input type="text" class="form-control" value="<?php echo strtoupper($a->username); ?>" disabled placeholder="Name..">
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