<div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="book-open" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Users</h3>
           <p class="text-subtitle text-muted">List Users</p>
         </div>
       </div>

    <section class="section">
    <div class="card">
        <div class="card-header">
            <a href="<?php echo base_url(); ?>users/addusers" class="btn btn-success">
                <i  data-feather="plus"></i>&nbsp;Add New
            </a>
        </div>
        <div class="card-body">
        <table class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th></th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($userdata as $a) { ?>
                        <tr>
                            <td></td>
                            <td><?php echo $a->username; ?></td>
                            <td><?php echo strtoupper($a->nama_lengkap); ?></td>
                            <td><?php if($a->publish == "T"){echo "Active"; }else if($a->publish == "F"){echo "Non Active";} ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>users/detailusers/<?php echo $a->id_user; ?>" class="btn btn-secondary  cs-btn">
                                    <i data-feather="eye"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>users/editusers/<?php echo $a->id_user; ?>" class="btn btn-primary cs-btn">
                                    <i data-feather="edit-3"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>users/deleteusers/<?php echo $a->id_user; ?>" onclick="return confirm('Anda yakin akan menghapus user berikut ?')" class="btn btn-danger cs-btn">
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