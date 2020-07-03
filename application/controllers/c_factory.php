<?php 

/**
* 
*/
class c_factory extends CI_Controller{
	
	// function __construct()
	// {
		
	// }
	function index(){
		$this->load->view('factory/v_factory');
	}
	function v_dataTransaksi(){
		$this->load->view('factory/v_datatrans');
	}
	function v_analisisAturan(){
		$this->load->view('factory/v_analisisAturan');
	}
	function v_hasilAnalisis(){
		$this->load->view('factory/v_lihatHasil');
	}
	function v_tambahTransaksi(){
		$this->load->view('factory/v_tambahTrans');
	}
	function v_lihatTransaksi(){
		$this->load->model("transaksi_model");
		$data['transaksi'] = $this->transaksi_model->tampil_data()->result();
		$this->load->view('factory/v_lihatTrans',$data);
	}
	function tambah_data(){
		$this->load->model("transaksi_model");
		$this->transaksi_model->tambahData();

		redirect(site_url('c_factory/v_lihatTransaksi'));
	}
	function aksi_arm(){
		$this->load->model("transaksi_model");
		$this->transaksi_model->analisis_arm();

		redirect(site_url('c_factory/v_lihatHasil'));
	}
}
?>