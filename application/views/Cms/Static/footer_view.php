<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>
        <!-- Footer Alanı -->
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        Admin Template : Uplon / PHP Coder : Tolga TURAN
                        <div style="float:right">
                            tolgaturants@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--#Footer Alanı -->


    </div> <!-- container -->


</div> <!-- End wrapper -->



    <!-- jQuery  -->
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="<?php echo base_url('public/admin/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/waves.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/switchery/switchery.min.js"></script>
    <!--Morris Chart-->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/raphael/raphael-min.js"></script>
    <!-- Counter Up  -->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Etiket İnputu -->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
    <!-- Data Table -->
    <script src="<?php echo base_url('public/admin/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Ck Editör -->
    <script src="<?php echo base_url('public/admin/'); ?>ckeditor/ckeditor.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.core.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/jquery.app.js"></script>
    <!-- Page specific js -->
    <script src="<?php echo base_url('public/admin/'); ?>pages/jquery.dashboard.js"></script>
    <!-- Data Table Başlat -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });
            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );
    </script>

</body>
</html>
