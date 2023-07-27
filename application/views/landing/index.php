<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WebGIS Kualitas Bangunan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <?php $this->load->view('vendor/vendor-css.php')?>
    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    <!-- 
	    Header start
	    ==================== -->
        <?php $this->load->view('vendor/navbar.php')?>

	    <section id="hero-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class="block">
	                        <h1 class="wow fadeInDown">WebGIS Kualitas Bangunan Pemukiman di Desa Srimulyo</h1>
	                        <p class="wow fadeInDown" data-wow-delay="0.3s">Web ini berisi data informasi kualitas dan persebaran bangunan pemukiman yang  ada pada desa srimulyo kec piyungan kabuaten bantul.</p>
	                        <div class="wow fadeInDown" data-wow-delay="0.3s">
	                        	<a class="btn btn-default btn-home" href="<?= base_url('landing/map')?>" role="button">Get Started</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 wow zoomIn">
                        <img src="<?= base_url()?>assets/images/home.png">
	                </div>
	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->
        
        <!-- 
        About start
        ==================== -->
        <section id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 wow fadeInLeft">
                    	<div class="sub-heading">
                    		<h3>About Us</h3>
                    	</div>
                        <div class="block">
                            <p>
                            Dalam web ini menggunakan point/titik-titik bangunan yang digunakan untuk memvisualisasikan persebaran dan kualitas bangunan yang ada pada desa srimulyo. Dalam penentuan kualitas bangunan kami menggunakan beberapa variabel yang berpotensi diantaranya adalah kualitas bangunan, status bangunan, luas bangunan, jumlah penghuni bangunan, bahan dasar bangunan, dan bentuk bangunan. <br> Dari setiap variabel yang telah didapatkan dilakukan proses skoring/pembobotan sehingga menghasilkan nilai akhir/skor akhir yang kami gunakan dalam mengidentifikasi kualitas bangunan pemukiman yang ada pada desa Srimulyo. Untuk identifikasi persebaran kami menggunakan data koordinat geografis yang telah kami kumpulkan.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="about-slider">
                        	<div class="init-slider">
                        		<div class="about-item">
                        			<img src="<?= base_url()?>assets/images/Gam-1.jpg" alt="" class="img-responsive">
                        		</div>
                        		<div class="about-item">
                        			<img src="<?= base_url()?>assets/images/gam-2.jpg" alt="" class="img-responsive">
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy;  <?= date('Y'); ?> <a href="<?= base_url('landing/index')?>">WebGIS</a> Kualitas Bangunan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    <?php $this->load->view('vendor/vendor-js.php')?>
    </body>
</html>
