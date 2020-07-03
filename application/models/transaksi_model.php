<?php
class transaksi_model extends CI_Model{ 

	public function __construct()
	{
		parent::__construct();
	}
	function tampil_data(){
		$query = $this->db->query("SELECT * FROM tb_transaction order by transaction_date asc");
		return $query;
	}
	function tambahData(){
		include 'assets/excel_reader2.php';
		$id_td;
			$result =  $this->db->count_all_results('tb_transaction');
			if($result <=9){
				$id_td = "0000".(string)$result;
			}elseif($result <99){
				$id_td = "000".(string)$result;
			}elseif($result <999){
				$id_td = "00".(string)$result;
			}elseif($result <999){
				$id_td = "0".(string)$result;
			}else{
				$id_td = "".(string)$result;
			}
			

			$data = new Spreadsheet_Excel_Reader($_FILES['file_data_transaksi']['tmp_name']);

	        $baris = $data->rowcount($sheet_index=0);
	        $column = $data->colcount($sheet_index=0);
	          for ($i=2; $i<=$baris; $i++) {
            for($c=1; $c<=$column; $c++){
                $value[$c] = $data->val($i, $c);
                
            }
              $table = "tb_transaction";
              $id_tr = $id_td;
                   
              		//$temp_date = $value[1];
                    $temp_date = date_format($value[1], "Y-m-d");
                    $produkIn = $value[2];
                    //mencegah ada jarak spasi
                    $produkIn = str_replace(" ,", ",", $produkIn);
                    $produkIn = str_replace("  ,", ",", $produkIn);
                    $produkIn = str_replace("   ,", ",", $produkIn);
                    $produkIn = str_replace("    ,", ",", $produkIn);
                    $produkIn = str_replace(", ", ",", $produkIn);
                    $produkIn = str_replace(",  ", ",", $produkIn);
                    $produkIn = str_replace(",   ", ",", $produkIn);
                    $produkIn = str_replace(",    ", ",", $produkIn);
                   
                    //$sql = "INSERT INTO transaksi (id_td, transaction_date, produk) VALUES ";
              
                    $sql = " ('$id_tr', '$temp_date', '$produkIn')";
                    //$db_object->db_query($sql);

                    $this->db->query("INSERT INTO tb_transaction (id_td, transaction_date, items) VALUES $sql;");
		}
	}
	function analisis_arm(){
		include 'assets/mining.php';
		include 'proses_apriori.php';


	}
}
?>