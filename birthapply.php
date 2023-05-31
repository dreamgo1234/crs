<?php
include('header.php');
$state_submitted = false;
if (isset($_POST['ahkweb']) && $_POST['ahkweb'] == "ahkwebsolutions") {
    $state_submitted = true;
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $sres = mysqli_query($conn, "SELECT * FROM `portal` WHERE state='$state' ");
}


if(isset($_POST['cert_var']) && $_POST['cert_var'] == "ahkweb"){
    $registration_no = "B-2022: 9-90347-00".rand(0000, 9999);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $aadhar = mysqli_real_escape_string($conn,$_POST['aadhar']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $date_of_birth = mysqli_real_escape_string($conn,$_POST['date_of_birth']);
    $dob_word = mysqli_real_escape_string($conn,$_POST['dob_word']);
    $birth_place = mysqli_real_escape_string($conn,$_POST['birth_place']);
    $father_name = mysqli_real_escape_string($conn,$_POST['father_name']);
    $father_aadhar = mysqli_real_escape_string($conn,$_POST['father_aadhar']);
    $mother_name = mysqli_real_escape_string($conn,$_POST['mother_name']);
    $mother_aadhar = mysqli_real_escape_string($conn,$_POST['mother_aadhar']);
    $permanent_address = mysqli_real_escape_string($conn,$_POST['permanent_address']);
    $birth_address = mysqli_real_escape_string($conn,$_POST['birth_address']);
    $register_date = mysqli_real_escape_string($conn,$_POST['register_date']);
    $hospital_id = mysqli_real_escape_string($conn,$_POST['hospital_id']);
    $state = mysqli_real_escape_string($conn,$_POST['state']);

    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $dateof_issue = date('d-m-y h:i:s');
    $dateof_update = date('d-m-y h:i:s');
    $username = $_SESSION['phone'];
    // Birth fee 
    
    $fee = $ahkweb['birth_fee'];
    $debit_fee = $wallet_amount - $fee;
    if($wallet_amount > $fee){
        $ires = mysqli_query($conn,"INSERT INTO `birthmanual`(`name`, `aadharno`, `dob`, `dobwords`, `placeofbirth`, `mname`, `maadhar`, `fname`, `faadhar`, `birthaddress`, `permanentaddress`, `regno`, `dateofregister`, `dateofissue`, `updatedate`, `username`, `gender`, `state`, `hospital`) VALUES ('$name','$aadhar','$date_of_birth','$dob_word','$birth_place','$mother_name','$mother_aadhar','$father_name','$father_aadhar','$birth_address','$permanent_address','$registration_no','$register_date','$dateof_issue','$dateof_update','$username','$gender','$state','$hospital_id')");
        $debit = mysqli_query($conn,"UPDATE `usertable` SET walletamount='$debit_fee' WHERE phone='$username'");
    
    if($ires){
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Success',
                    'Birth Application Submitted Successfully!',
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
                    'Internal Server Error!',
                    'error'
                )
            });
        </script>
        <?php
    }

    }else{
        ?>
        <script>
            $(function(){
                Swal.fire(
                    'Opps',
                    'Wallet Balance Insufficient ! Please Recharge ',
                    'error'
                )
            });
            window.setTimeout(function(){
                window.location.href='wallet.php';
            },1500);
            
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
                    <h1 class="m-0">Create Birth Certificate</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right">
                    <a href="birthlist.php" class="btn btn-primary btn-sm">Birth Certificate List</a>
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
                    <!-- form Start From here  -->
                    <?php
                    if ($state_submitted == false) {
                    ?>

                        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
                            <div class="form-group col-md-6">
                                <label for="state">State <span class="text-danger">*</span></label>
                                <input type="hidden" name="ahkweb" value="ahkwebsolutions">
                                <select onchange='if(this.value != 0) { this.form.submit(); }' type="text" class="form-control" id="state" name="state" required="">
                                    <option value="">Select State</option>
                                    <option value="Uttar Pradesh">UTTAR PRADESH (उत्तर प्रदेश)</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh </option>
                                    <option value="Bihar">BIHAR (बिहार)</option>
                                    <option value="Assam">Assam ()</option>
                                    <option value="Haryana">HARYANA (हरियाणा)</option>
                                    <option value="Jharkhand">JHARKHAND (झारखंड)</option>
                                    <option value="Rajasthan">RAJASTHAN (राजस्थान)</option>
                                    <option value="Delhi">NCT OF DELHI (राष्ट्रीय राजधानी क्षेत्र दिल्ली)</option>
                                    <option value="Uttarakhand">UTTARAKHAND (उत्तराखंड)</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh ()</option>
                                    <option value="Chhattisgarh">CHHATTISGARH (छतीसगढ़)</option>
                                    <option value="Madhya Pradesh">MADHYA PRADESH (मध्य प्रदेश)</option>
                                    <option value="West Bengal">WEST BENGAL (পশ্চিমবঙ্গ)</option>
                                    <option value="Andhra Pradesh">ANDHRA PRADESH (ఆంధ్రప్రదేశ్)</option>
                                    <option value="Maharashtra">MAHARASHTRA (महाराष्ट्र)</option>
                                    <option value="Punjab">PUNJAB (ਪੰਜਾਬ)</option>
                                    <option value="Chandigarh">CHANDIGARH (चंडीगढ)</option>
                                </select>
                            </div>
                        </form>
                    <?php

                    }

                    if ($state_submitted != false) {
                    ?>
                        <!-- general form elements -->
                        <div class="card card-default">


                            <!-- form start -->
                            <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="aJ3saaa9dqVqVIcyVh3fTV2Kn6NB8M1sXOcpjcAS">
                                <div class="card-body row">
                                    <input type="hidden" name="cert_var"  value="ahkweb">
                                    <input type="hidden" name="state" value="<?php echo $state; ?>">
                                    <div class="form-group col-md-6">
                                        <label for="name">नाम / Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="FULL NAME" value="" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="aadhar">आधार नंबर / Aadhar Number</label>
                                        <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="AADHAR NUMBER" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="gender">लिंग / Gender <span class="text-danger">*</span></label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male">Male / पुरुष</option>
                                            <option value="Female">Female / महिला</option>
                                            <option value="Other">Transgender / ट्रांसजेंडर</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date_of_birth">जन्म तिथि / Date of birth <span class="text-danger">*</span></label>
                                        <div class="input-group date" id="d_date_of_birth" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#d_date_of_birth" id="date_of_birth" name="date_of_birth" placeholder="PLACE OF BIRTH" value="" required="">
                                            <div class="input-group-append" data-target="#d_date_of_birth" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="dob_word">जन्म तिथि / Date of birth(IN WORD)</label>
                                        <input type="text" class="form-control" id="dob_word" name="dob_word" placeholder="Ex: FIFTEENH-JULY-TWO THOUSAND ELEVEN" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date_of_birth">जन्म स्थान / Place of Birth <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="birth_place" name="birth_place" placeholder="PLACE OF BIRTH" value="" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="father_name">पिता का नाम / Father Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="father_name" name="father_name" placeholder="FATHER NAME" value="" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="father_aadhar">पिता का आधार / Father Aadhar</label>
                                        <input type="text" class="form-control" id="father_aadhar" name="father_aadhar" placeholder="FATHER AADHAR" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="mother_name">माता का नाम / Mother Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="MOTHER NAME" value="" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="mother_aadhar">माता का आधार / Mother Aadhar</label>
                                        <input type="text" class="form-control" id="mother_aadhar" name="mother_aadhar" placeholder="MOTHER AADHAR" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="permanent_address">स्थायी पता / Permanent Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="permanent_address" name="permanent_address" placeholder="PERMANENT ADDRESS" value="" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="birth_address">जन्म के समय पता / Address at time of birth <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="birth_address" name="birth_address" placeholder="ADDRESS OF BIRTH" value="" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="register_date">पंजीकरण की तिथि / Date of Registration <span class="text-danger">*</span></label>
                                        <div class="input-group date" id="d_register_date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#d_register_date" id="register_date" name="register_date" placeholder="PLACE OF BIRTH" value="05-08-2022 " required="">
                                            <div class="input-group-append" data-target="#d_register_date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="hospital_id">Hospital <span class="text-danger">*</span></label>
                                        <select type="text" class="form-control" id="hospital_id" name="hospital_id" required="">
                                            <option value="">Select Hospital</option>
                                            <?php
                                            if (mysqli_num_rows($sres) > 0) {
                                                while ($sdata = mysqli_fetch_assoc($sres)) {
                                            ?>
                                                    <option value="<?php echo $sdata['hospital']; ?>"><?php echo $sdata['hospital']; ?> - <?php echo $sdata['hospitalnamelocal'] ?></option>
                                            <?php

                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer text-right pt-3 pb-3 mt-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Next</button>
                                </div>
                            </form>
                        </div>

                    <?php
                    }

                    ?>


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

<script>
    //Date picker
    $('#d_date_of_birth').datetimepicker({
        format: 'L',
        format: 'DD-MM-YYYY'
    });
    $('#d_register_date').datetimepicker({
        format: 'L',
        format: 'DD-MM-YYYY'
    });


    function getHospitalsByStateId() {
        var state_id = $("#state_id").val();
        $.ajax({
            type: "POST",
            url: "http://crsorgiup.co.in/admin/getHospitalsByStateId",
            data: {
                state_id: state_id,
                "_token": "aJ3saaa9dqVqVIcyVh3fTV2Kn6NB8M1sXOcpjcAS"
            },
            beforeSend: function(data) {
                $(".main-loader").show();
            },
            success: function(response) {
                setTimeout(function() {
                    $(".main-loader").hide();
                    var obj;
                    try {
                        obj = JSON.parse(response);

                        if (obj.status == 'success') {

                            var records = obj.records;

                            var row_html = "<option value=''>Select Hospital</option>";

                            for (i = 0; i < records.length; i++) {
                                var row = records[i];
                                row_html += "<option value='" + row.id + "'>" + row.name + "</option>";
                            }
                            $("#hospital_id").html(row_html);

                        } else {

                            $.toast({
                                heading: '',
                                text: obj.message,
                                position: 'top-right',
                                stack: false,
                                icon: 'error',
                                loader: false
                            });

                        }
                    } catch (err) {

                        $.toast({
                            heading: '',
                            text: 'Some error occurred, please try again.',
                            position: 'top-right',
                            stack: false,
                            icon: 'error',
                            loader: false
                        });

                    }
                }, 100);
            },
            error: function() {
                $(".main-loader").hide();

                $.toast({
                    heading: '',
                    text: 'Some error occurred, please try again.',
                    position: 'top-right',
                    stack: false,
                    icon: 'error',
                    loader: false
                });

            }

        });
    }
</script>

</body>

</html>