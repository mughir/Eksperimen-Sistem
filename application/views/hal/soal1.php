

<?php 



$this->load->view("penjualan/soal"); 



if($this->session->userdata("navigasi") == 1){

?>

<div class="progressContainer">

      <ul class="progressbar">

          <li><a href='<?php echo base_url("penjualan/pesanan"); ?>'>Pesanan Penjualan</a></li>

          <li><a href='<?php echo base_url("penjualan/pengiriman"); ?>'>Pengiriman Barang</a></li>

          <li><a href='<?php echo base_url("penjualan/penagihan"); ?>'>Kirim Tagihan</a></li>

          <li><a href='<?php echo base_url("penjualan/pembayaran"); ?>'>Terima Pembayaran</a></li>

          <li><a href='<?php echo base_url("penjualan/laporan"); ?>'>Laporan Penjualan</a></li>

 	 </ul>

</div>

<?php } ?>



    <div class="row dokumen" style="text-align:justify;">



        <div class="col-sm-12">
<h3>Kerjakan Case Berikut Secara Berurutan</h3>
		 <h3>Case - Penjualan</h3>
<ol>
		 <li>

		 Tanggal 3 September 2018, pelanggan Konveksi Baju Baru membatalkan pesanannya dengan ID Pesanan S003. </li><li>

Tanggal 5 September 2018, Konveksi Baju Baru menerima pesanan dari Tuan Andy yaitu 50 Lusin Baju Sablon Warna Putih. Harga baju sablon warna putih perlusinnya adalah Rp 500.000 dan biaya pengiriman dilakukan oleh pembeli.</li><li>

Pengiriman untuk pesanan Tuan Andy dengan ID Pesanan S003 seluruhnya dilakukan tanggal 8 September 2018 menggunakan jasa pengiriman JNE dengan nomor resi BDO001, biaya pengiriman sebesar Rp 250.000 ditanggung oleh pembeli.</li><li>

10 September 2018 Konveksi Baju Baru menerbitkan nota tagihan dengan nomor tagihan SI003 atas resi pengiriman BDO001 untuk pesanan Tuan Andy.</li><li>

Tuan Andy membayarkan tagihan SI003 pada tanggal 15 September 2018 sebesar Rp 25.250.000 melalui transfer bank. Konveksi Baju Baru mencatat pembayaran Tuan Andy dengan ID Pembayaran CR002 .</li><li>

Petugas penjualan setiap akhir bulan (30 September) melakukan pengecekan Laporan penjualan pada bulan tersebut berdasarkan produk yang terjual.</li>
</ol>
<br>



 <a class="btn btn-primary" href='<?php echo base_url("penjualan/pesanan"); ?>'">Berikutnya</a>

        </div>



    </div>