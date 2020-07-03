<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <!-- <link href="<?= base_url('assets/css/semantic.min.css')?>" rel="stylesheet">
     <link href="<?= base_url('assets/css/semanticui.min.css')?>" rel="stylesheet"> -->
     <script src="<?= base_url('assets/js/jquery.dataTables.min.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
</head>
<body>
  <div id="page-wrapper">
    <div class="main-page">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Tanggal</td>
                    <td>Produk</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($transaksi as $p){ 
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td hidden><?php echo $p->id_td?></td>
                    <td><?php echo $p->transaction_date?></td>
                    <td><?php echo $p->items?></td>
            </tr>
        <?php }?>
            </tbody>             
        </table>   
   
        </div>
  </div>
 

</body>
</html>