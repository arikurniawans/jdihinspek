<div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="eye" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Detail User</h3>
           <p class="text-subtitle text-muted">Detail User </p>
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
          <div class="col-lg-12">
            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Username
                <span><?php echo $a->username; ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Nama Lengkap
                <span><?php echo strtoupper($a->nama_lengkap); ?></span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                Status
                <span><?php if($a->publish == "T"){echo "Active"; }else if($a->publish == "F"){echo "Non Active";} ?></span>
              </li>

            </ul>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
  </div>
</div>