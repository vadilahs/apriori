<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once "header.php";
include "assets/excel_reader2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	<div id="page-wrapper">
		<div class="main-page">
			<!--UPLOAD EXCEL FORM-->
            <form method="post" enctype="multipart/form-data" action="tambah_data">
                <div class="form-group">
                    <div class="input-group">
                        <label>Import data from excel</label>
                        <input name="file_data_transaksi" type="file" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <input name="submit" type="submit" value="Upload Data" class="btn btn-success">
                </div>
                <div class="form-group">
                    <button name="delete" type="submit"  class="btn btn-danger" >
                        <i class="fa fa-trash-o"></i> Delete All Data Transaction
                    </button>
                </div>
            </form>
          
        </div>
	</div>
</body>
</html>