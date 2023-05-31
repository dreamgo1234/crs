<?php
include('header.php');
 
if(isset($_GET['id']) && $_GET['id'] != NULL){
    $id = base64_decode($_GET['id']);
    $res = mysqli_query($conn,"SELECT * FROM `birthmanual` WHERE id='$id'");
    $data = mysqli_fetch_assoc($res);

}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">View Birth Certificate</h1>
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

				<!-- general form elements -->
				<div class="card card-default">

				  
				    <div class="card-body row">

							<div class="form-group col-md-6">
								<label for="name" style="font-weight: 500;">ID: <strong><?php echo $data['id'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="name" style="font-weight: 500;">Register No: <strong><?php echo $data['regno'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="name" style="font-weight: 500;">नाम / Full Name: <strong><?php echo $data['name'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="aadhar" style="font-weight: 500;">आधार नंबर / Aadhar Number: <strong><?php echo $data['aadharno'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="gender" style="font-weight: 500;">लिंग / Gender: <strong><?php echo $data['gender'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="date_of_birth" style="font-weight: 500;">जन्म तिथि / Date of birth: <strong><?php echo $data['dob'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="dob_word" style="font-weight: 500;">जन्म तिथि / Date of birth(IN WORD): <strong><?php echo $data['dobwords'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="birth_place" style="font-weight: 500;">जन्म स्थान / Place of Birth: <strong><?php echo $data['placeofbirth'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="father_name" style="font-weight: 500;">पिता का नाम / Father Name: <strong><?php echo $data['fname'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="father_aadhar" style="font-weight: 500;">पिता का आधार / Father Aadhar: <strong><?php echo $data['faadhar'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="mother_name" style="font-weight: 500;">माता का नाम / Mother Name: <strong><?php echo $data['mname'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="mother_aadhar" style="font-weight: 500;">माता का आधार / Mother Aadhar: <strong><?php echo $data['maadhar'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="permanent_address" style="font-weight: 500;">स्थायी पता / Permanent Address: <strong><?php echo $data['permanentaddress'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="birth_address" style="font-weight: 500;">जन्म के समय पता / Address at time of birth: <strong><?php echo $data['birthaddress'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="gender" style="font-weight: 500;">पंजीकरण की तिथि / Date of Registration: <strong><?php echo $data['dateofregister'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="state_id" style="font-weight: 500;">State: <strong><?php echo $data['state'] ?> </strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="hospital_id" style="font-weight: 500;">Hospital: <strong><?php echo $data['hospital'] ?></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="full_name" style="font-weight: 500;">User: <strong><a href="#" class="text-info" style="font-weight: 600;text-decoration: underline;"><?php echo $_SESSION['name'] ?></a></strong></label>
							</div>

							<div class="form-group col-md-6">
								<label for="payment_status" style="font-weight: 500;">Payment Status: <strong class="text-success">Success</strong></label>
							</div>

														<div class="form-group col-md-12">
								<a type="button" href="web/index.php/auth/birthCertificate/view/B/bWF4VExRZC9GTnhBWkhtZTNrdWhUZz09.php?id=<?php echo $data['id'] ?>&cont=Anjsjdn" class="btn btn-dark btn-sm" style="width: 190px;">Download Certificate</a>
							</div>
							
				    </div>
				    <!-- /.card-body -->

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
function alertMessage(type,message) {
  if (type=='error') {
    type = 'danger';
  }

  return "<div class='alert alert-"+type+" alert-dismissible'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> "+message+" </div>";
}
</script>

<script>
function getHospitalsByStateId(){
	var state_id = $("#state_id").val();
	$.ajax({
      type: "POST",
      url: "http://crsorgiup.co.in/admin/getHospitalsByStateId",
      data: {state_id:state_id,"_token":"aJ3saaa9dqVqVIcyVh3fTV2Kn6NB8M1sXOcpjcAS"},
      beforeSend: function (data) {
      	$(".main-loader").show();
      },
      success: function (response) {
        setTimeout(function () {
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
      error: function () {
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