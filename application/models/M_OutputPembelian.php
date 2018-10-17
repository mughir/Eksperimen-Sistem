<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class m_OutputPembelian extends CI_Model {

	public function jumlah(){

		$this->load->database();



		$dari=$this->input->post("dari")." 00:00:00";

		$sampai=$this->input->post("sampai")." 23:59:59";

		$order=$this->input->post("sampai");

		$group=$this->input->post("group");

		$peserta = $this->session->userdata("id");



		if(!$dari || !$sampai || !$order) redirect(base_url("penjualan/laporan"));



		$n19 = 0;

		$n20 = 0;



		if($dari == "2018-10-01 00:00:00" && $sampai == "2018-10-31 23:59:59") $n19 =1;

		if($group == "produk") $n20 =1;



		$data = array(

			"case2_19" => $n19,

			"case2_20" => $n20,

			"case2_a5" => 1

		);



		$this->db->where("peserta_id",$peserta)->update("eksperimen_case2",$data);



		$this->db->where("tagihan_tanggal <=",$sampai);

		$this->db->where("tagihan_tanggal >=",$dari);

		$this->db->where("t.peserta_id",$peserta);



		$this->db->order_by($order=="produk" ? "barang_nama" : "tsubtotal","ASC");

		$this->db->group_by($group=="produk" ? "b.barang_id" : "t.kontak_id");

		$this->db->select($group=="produk" ? "barang_nama as uraian" : "kontak_nama as uraian");

		$this->db

				->select_sum("k.baristagihan_jumlah","tjumlah")

				->select_sum("baristagihan_subtotal","tsubtotal");

		$data=$this->db->from("eksperimen_tagihan t")

				->join("eksperimen_baristagihan k","t.tagihan_id=k.tagihan_id")

				->join("eksperimen_barang b","b.barang_id=k.barang_id")

				->join("eksperimen_kontak o","o.kontak_id=t.kontak_id")

				->get()->result();

		 $selesai = $this->db->where("peserta_id",$peserta)->get("eksperimen_case2")->row();
		if($selesai->case2_a1 == 1 && $selesai->case2_a2 == 1 && $selesai->case2_a3 == 1 && $selesai->case2_a4 == 1 && $selesai->case2_a5 == 1)
		$this->session->set_flashdata("hasil",["berhasil","Anda telah menyelesaikan semua soal pada case ini, klik tombol <a href='". base_url("soal/selesai/".md5("case2"))."'>Selesai</a> 
untuk menuju halaman berikutnya"]);



		return($data);

	}

}

?>