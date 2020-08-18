<!-- include logout popup -->
<div class="modal fade text-left modal-borderless" id="border-less-logout" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-center">
                <img src="<?php echo base_url(); ?>assets/images/avatar/logout-ilustration.svg" class="img-fluid img-delete" alt="">
            </p>
            <p class="text-center sure-txt">Apakah anda yakin ingin keluar ?</p>
            <p class="text-center">
                <a href="<?php echo base_url(); ?>login/signout" class="btn btn-primary">Ya, Yakin</a>&nbsp;
                <a href="" class="btn btn-danger" data-dismiss="modal">Batal</a>
            </p>
        </div>
    </div>
</div>
 <!-- include logout popup -->
</body>
</html>
<script src="<?php echo base_url(); ?>assets/js/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendors.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datepicker/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datepicker/datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script>
  $('.input-group.date').datepicker({format: "yyyy-mm-dd"}); 
</script>