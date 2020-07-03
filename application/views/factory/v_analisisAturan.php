<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="<?= base_url('assets/css/daterangepicker/daterangepicker-bs3.css') ?>">
</head>
<body>
	<div id="page-wrapper">
		<div class="main-page">
			<form method="post" action="aksi_arm">
        <div class="row">
          <div class="col-lg-6 " >
            <div class="form-group">
              <label>Min Support: </label>
              <input name="min_support" type="text" value="" class="form-control" placeholder="Min Support">
            </div>
            <div class="form-group">
              <label>Min Confidence: </label>
              <input name="min_confidence" type="text" value="" class="form-control" placeholder="Min Confidence">
            </div>
                     
            <!-- Date range -->
            <div class="form-group">
              <label>Tanggal: </label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" name="range_tanggal" id="reservation" required="" placeholder="Date range" value="">
                </div>
                <input type="hidden" name="id_process" value=""><br>
                <div class="form-group">
                  <input name="submit" type="submit" value="Proses" class="btn btn-success">
                </div>
            </div>
          </div>
        </div>
      </form>
    </div>
	</div>
     <!-- date-range-picker -->
    <script src="<?= base_url('assets/css/daterangepicker/moment-cloud.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/daterangepicker/daterangepicker.js') ?>"></script>

    <!-- Page script -->
    <script>
      $(function () {
        //Date range picker
        $('#reservation').daterangepicker(
                {format: 'DD/MM/YYYY'}
                );
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

      });
    </script>

</body>
</html>