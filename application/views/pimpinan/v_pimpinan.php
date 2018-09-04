<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><center><?php echo @$judul ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <?php echo form_open("cbarang/saveAdd/") ?>
    <div class="row">
        <div class="col-lg-12">

            <center>
            <div id="body">
                
                
                <div>
                    <img src="<?php echo base_url('images/logoeuro.jpg');?>"/>
                </div>
                <H4>
                    
				Halaman ini hanya diperuntukkan bagi Pimpinan. Digunakan untuk mengecek/melihat laporan setiap saat<br>
				terjadi transaksi. <?php echo $this->session->userdata('username'); ?><br><br>

                </H4>
                </center>
            </div>


            
        </div>