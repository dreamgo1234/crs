<?php
include('header.php');
if (isset($_GET['id']) && $_GET['id'] != NULL) {
    $id = base64_decode($_GET['id']);
    $res = mysqli_query($conn, "SELECT * FROM `dmanual` WHERE id='$id'");
    $data = mysqli_fetch_assoc($res);
}


if (isset($_POST['ahkweb'])  && $_POST['ahkweb'] == "ahkwebsolutions") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
    $date_of_death = mysqli_real_escape_string($conn, $_POST['date_of_death']);
    $hus_name = mysqli_real_escape_string($conn, $_POST['hus_name']);
    $hus_aadhar = mysqli_real_escape_string($conn, $_POST['hus_aadhar']);
    $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
    $father_aadhar = mysqli_real_escape_string($conn, $_POST['father_aadhar']);
    $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
    $mother_aadhar = mysqli_real_escape_string($conn, $_POST['mother_aadhar']);
    $permanent_address = mysqli_real_escape_string($conn, $_POST['permanent_address']);
    $death_address = mysqli_real_escape_string($conn, $_POST['death_address']);

    $username = $_SESSION['phone'];
    $ires = mysqli_query($conn,"UPDATE `dmanual` SET `name`='$name',`aadharno`='$aadhar',`dob`='$date_of_death',`mname`='$mother_name',`maadhar`='$mother_aadhar',`fname`='$father_name',`faadhar`='$father_aadhar',`birthaddress`='$death_address',`permanentaddress`='$permanent_address',`hwname`='$hus_name',`hwaadhar`='$hus_aadhar' WHERE username='$username' AND id='$id'");

    if($ires){
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Success',
                    'Data Updated Successfully',
                    'success'
                )
            });
        </script>
        <?php
    }else{
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Opps',
                    'Internal Server Error Please try Agin Later',
                    'error'
                )
            });
        </script>
        <?php
    }
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Death Certificate</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right">
                    <a href="deathlist.php" class="btn btn-primary btn-sm">Death Certificate List</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                    <!-- general form elements -->
                    <div class="card card-default">


                        <!-- form start -->
                        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="1TDde6CMH369W5RCLWCgTOjV8fR50kKPMlAfDgjN"> <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="ahkweb" value="ahkwebsolutions">
                            <div class="card-body row">

                                <div class="form-group col-md-6">
                                    <label for="name">मृतक का नाम / Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="FULL NAME" value="<?php echo $data['name'] ?>" required="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="aadhar">आधार नंबर / Aadhar Number</label>
                                    <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="AADHAR NUMBER" value="<?php echo $data['aadharno'] ?>">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="date_of_death">मृत्यु का स्थान / Place of Death <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="date_of_death" name="date_of_death" placeholder="PLACE OF BIRTH" value="<?php echo $data['placeofbirth'] ?>" required="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>पति / पत्नी का नाम / NAME OF HUSBAND / WIFE</label>
                                    <input type="text" required class="form-control" name="hus_name" placeholder="FNAME OF HUSBAND / WIFE" value="<?php echo $data['hwname'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">पति / पत्नी का आधार संख्या / HUSBAND / WIFE AADHAAR NO</label>
                                    <input type="text" maxlength="12" class="form-control" name="hus_aadhar" placeholder="HUSBAND / WIFE AADHAAR NO" value="<?php echo $data['hwaadhar'] ?>">
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="father_name">पिता का नाम / Father Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="father_name" name="father_name" placeholder="FATHER NAME" value="<?php echo $data['fname'] ?>" required="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="father_aadhar">पिता का आधार / Father Aadhar</label>
                                    <input type="text" class="form-control" id="father_aadhar" name="father_aadhar" placeholder="FATHER AADHAR" value="<?php echo $data['faadhar'] ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="mother_name">माता का नाम / Mother Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="MOTHER NAME" value="<?php echo $data['mname'] ?>" required="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="mother_aadhar">माता का आधार / Mother Aadhar</label>
                                    <input type="text" class="form-control" id="mother_aadhar" name="mother_aadhar" placeholder="MOTHER AADHAR" value="<?php echo $data['maadhar'] ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="permanent_address">स्थायी पता / Permanent Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="permanent_address" name="permanent_address" placeholder="PERMANENT ADDRESS" value="<?php echo $data['permanentaddress'] ?>" required="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="death_address">मृत्यु के समय पता / Address at time of death <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="death_address" name="death_address" placeholder="ADDRESS OF BIRTH" value="<?php echo $data['birthaddress'] ?>" required="">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-right pt-3 pb-3 mt-2">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->

<!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer> -->

<!-- Control Sidebar -->
<!-- <aside class="control-sidebar control-sidebar-dark"> -->
<!-- Control sidebar content goes here -->
<!-- </aside> -->
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function alertMessage(type, message) {
        if (type == 'error') {
            type = 'danger';
        }

        return "<div class='alert alert-" + type + " alert-dismissible'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> " + message + " </div>";
    }
</script>


</body>

</html>