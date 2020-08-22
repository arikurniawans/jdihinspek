<div class="main-content container-fluid">

        <div class="page-title">
         <h3>Hallo, <?php echo $this->session->userdata('nama_lengkap'); ?></h3>
         <p class="text-subtitle text-muted">Selamat datang di panel JDIH</p>
       </div>

       <div class="row bc-order-card">
       <?php if($this->session->userdata('role') == "admin"){ ?>
        <!-- top-card -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  order-card">
            <div class="card-block">
              <p class="backup-top-data-admin">
                <i data-feather="user" class="admin-icon"></i>
                <span class="num-dash float-right"><?php echo $users->users; ?></span>
              </p>
              <br>
              <p class="m-b-0 jum-num-dash">
               <span class="sub-num-dash"><?php echo $users->users; ?></span>&nbsp;
               <span>Jumlah User</span>
             </p>
           </div>
         </div>
       </div>
       <!-- top-card -->
       <?php } ?>

       <!-- top-card -->
       <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card  order-card">
          <div class="card-block">
            <p class="backup-top-data-admin">
              <i data-feather="book-open" class="admin-icon bg-2"></i>
              <span class="num-dash float-right"><?php echo $perda->perda; ?></span>
            </p>
            <br>
            <p class="m-b-0 jum-num-dash">
             <span class="sub-num-dash"><?php echo $perda->perda; ?></span>&nbsp;
             <span>Perda</span>
           </p>
         </div>
       </div>
     </div>
     <!-- top-card -->

     <!-- top-card -->
     <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card  order-card">
        <div class="card-block">
          <p class="backup-top-data-admin">
            <i data-feather="briefcase" class="admin-icon bg-3"></i>
            <span class="num-dash float-right"><?php echo $pergub->pergub; ?></span>
          </p>
          <br>
          <p class="m-b-0 jum-num-dash">
           <span class="sub-num-dash"><?php echo $pergub->pergub; ?></span>&nbsp;
           <span>Pergub</span>
         </p>
       </div>
     </div>
   </div>
   <!-- top-card -->

   <!-- top-card -->
   <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card  order-card">
      <div class="card-block">
        <p class="backup-top-data-admin">
          <i data-feather="file-text" class="admin-icon bg-4"></i>
          <span class="num-dash float-right"><?php echo $kepgub->kepgub; ?></span>
        </p>
        <br>
        <p class="m-b-0 jum-num-dash">
         <span class="sub-num-dash"><?php echo $kepgub->kepgub; ?></span>&nbsp;
         <span>Kepgub</span>
       </p>
     </div>
   </div>

 </div>

 <div class="row bc-order-card">

        <!-- top-card -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  order-card">
            <div class="card-block">
              <p class="backup-top-data-admin">
                <i data-feather="book-open" class="admin-icon"></i>
                <span class="num-dash float-right"><?php echo $insgub->insgub; ?></span>
              </p>
              <br>
              <p class="m-b-0 jum-num-dash">
               <span class="sub-num-dash"><?php echo $insgub->insgub; ?></span>&nbsp;
               <span>Jumlah Insgub</span>
             </p>
           </div>
         </div>
       </div>
       <!-- top-card -->

       <!-- top-card -->
       <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card  order-card">
          <div class="card-block">
            <p class="backup-top-data-admin">
              <i data-feather="book-open" class="admin-icon bg-2"></i>
              <span class="num-dash float-right"><?php echo $skgub->skgub; ?></span>
            </p>
            <br>
            <p class="m-b-0 jum-num-dash">
             <span class="sub-num-dash"><?php echo $skgub->skgub; ?></span>&nbsp;
             <span>Jumlah Skgub</span>
           </p>
         </div>
       </div>
     </div>
     <!-- top-card -->

   <!-- top-card -->
   <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card  order-card">
      <div class="card-block">
        <p class="backup-top-data-admin">
          <i data-feather="file-text" class="admin-icon bg-4"></i>
          <span class="num-dash float-right"><?php echo $mou->mou; ?></span>
        </p>
        <br>
        <p class="m-b-0 jum-num-dash">
         <span class="sub-num-dash"><?php echo $mou->mou; ?></span>&nbsp;
         <span>Jumlah MoU</span>
       </p>
     </div>
   </div>

 </div>
 