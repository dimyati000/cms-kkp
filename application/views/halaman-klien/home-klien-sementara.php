<?php if($this->session->userdata('language') == 'en'){ ?>
<!-- Slider Start -->
<?php include('tata-letak-klien/tema-slider.php') ?>
<!-- Slider End -->

<!-- About Start -->
<div class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
	<div class="container">
		<div class="row y-middle">
			<div class="col-lg-6 md-mb-50">
				<div class="images-part">
					<img src="<?php echo base_url() ?>assets/klien/images/bg/tax4.jpg" alt="About">
				</div>
			</div>
			<div class="col-lg-6 pl-50 md-pl-15">
				<div class="sec-title">
					<span class="sub-text">
						<img src="<?php echo base_url() ?>assets/klien/images/shape-1.png" alt="Images">
						About Us
					</span>
					<h2 class="title pb-20">
						Tax Consultant Official Eko & partners
					</h2>
					<p class="desc pb-37">
						membantu anda untuk memahami,
						mengelola dan membantu anda dalam memberikan layanan konsultasi usaha anda. Sehingga anda
						dapat lebih fokus dalam mengembangkan bisnis anda. Kantor Konsultan Pajak dan Hukum Terdaftar
						Eko dan Rekan memiliki tim dan konsultan yang berpengalaman dibidangnya sehingga anda dapat
						mengurangi resiko usaha dikemudian hari.
					</p>
					<div class="row y-middle">
						<div class="col-lg-4 col-md-4 sm-mb-30">
							<div class="about-img">
								<img src="<?php echo base_url() ?>assets/klien/images/about/style1/icon-about-kecil.png"
									alt="About">
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<ul class="check-lists">
								<li class="list-item">
									<span class="icon-list-icon">
										<i class="fa fa-check-circle"></i>
									</span>
									<span class="list-text">Jasa Perpajakan</span>
								</li>
								<li class="list-item">
									<span class="icon-list-icon">
										<i class="fa fa-check-circle"></i>
									</span>
									<span class="list-text">Jasa Akuntansi</span>
								</li>
								<li class="list-item">
									<span class="icon-list-icon">
										<i class="fa fa-check-circle"></i>
									</span>
									<span class="list-text">Jasa Hukum</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="row mt-47 md-mt-25">
						<div class="col-lg-6 col-md-4 sm-mb-30">
							<div class="btn-part">
								<a class="readon more know" href="<?php echo site_url('Klien/About') ?>">Selengkapnya</a>
							</div>
						</div>
						<!-- <div class="col-lg-6 col-md-8">
							<div class="signeture-img">
								<img src="<?php echo base_url() ?>assets/klien/images/about/style1/signeture1.png" alt="Images">
							</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
	<!-- Services Section Start -->
	<div id="Service" class="rs-services services-style1 pt-120 md-pt-70">
		<div class="container">
			<div class="sec-title text-center mb-50">
				<span class="sub-text sub-text2">
					Services
				</span>
				<h2 class="title">
					Memberikan solusi untuk permasalahan terkait<br>
					perpajakan, akuntansi dan hukum yang anda butuhkan.
				</h2>
			</div>
			<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
				data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
				data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
				data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
				data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
				data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
				data-md-device-nav="false" data-md-device-dots="true">
				<div class="services-slider">
					<div class="services-img">
						<a href="general-construction.html">
							<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/PJ.png"
								alt="Services">
						</a>
					</div>
					<div class="services-content">
						<div class="services-titles">
							<h4 class="title"><a href="general-construction.html">Jasa Perpajakan</a></h4>
						</div>
						<p class="services-txt">
							Konsultasi Pelaporan Pajak Bulanan, Konsultasi Pelaporan Pajak Tahunan, Konsultasi
							Permasalahan Pajak, dll.
						</p>
						<div class="services-btn btn-style2">
							<a class="btn-text" href="<?php echo site_url('Jasa/perpajakan') ?>">Selengkapnya<i
									class="fi fi-rr-arrow-small-right"></i></a>
						</div>
					</div>
				</div>
				<div class="services-slider">
					<div class="services-img">
						<a href="property-maintenance.html">
							<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/AK.png"
								alt="Services">
						</a>
					</div>
					<div class="services-content">
						<div class="services-titles">
							<h4 class="title"><a href="property-maintenance.html">Jasa Akuntansi</a></h4>
						</div>
						<p class="services-txt">
							Menyusun buku neraca, software akuntansi beserta
							implementasinya yang ditangani oleh konsultan dan divisi terkait.
						</p>
						<div class="services-btn btn-style2">
							<a class="btn-text" href="<?php echo site_url('Jasa/akuntansi') ?>">Selengkapnya<i
									class="fi fi-rr-arrow-small-right"></i></a>
						</div>
					</div>
				</div>
				<div class="services-slider">
					<div class="services-img">
						<a href="project-managment.html">
							<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/HK.png"
								alt="Services">
						</a>
					</div>
					<div class="services-content">
						<div class="services-titles">
							<h4 class="title"><a href="project-managment.html">Jasa Hukum</a></h4>
						</div>
						<p class="services-txt">
							Jasa Hukum/Lawyer/Pengacara Perceraian, Pidana Umum, Utang Piutang, Pertanahan, dan
							Gugatan PMH.
						</p>
						<div class="services-btn btn-style2">
							<a class="btn-text" href="<?php echo site_url('Jasa/hukum') ?>">Selengkapnya<i
									class="fi fi-rr-arrow-small-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Section End -->
</div>
<!-- About End -->

<!-- Call To Action Choose Start -->
<div class="rs-cta bg4 pt-120 pb-115 md-pt-80 md-pb-75">
	<div class="container">
		<div class="call-action">
			<div class="sec-title text-center">
				<span class="sub-text yellow-color">
					<img src="<?php base_url() ?>assets/klien/images/shape-1.png" alt="Images">
					BEKERJA DENGAN KAMI !
				</span>
				<h2 class="title white-color pb-20">
				Mulai Konsultasikan Pajak dan Bisnis Anda<br>
				dan Berkembang Bersama Kami.
				</h2>
				<p class="desc desc3 pb-35">
				Terpercaya dalam Kerahasiaan Data dan Kemudahan Pengusaha
untuk Mengurus Legalitas.
				</p>
				<div class="btn-part">
					<a class="readon more contact" target="_blank" href="https://api.whatsapp.com/send?phone=6281331907979&text=Halo%20admin%20Kantor%20Konsultan%20Pajak%20dan%20Hukum%20terdaftar%20Eko%20dan%20rekan,%20saya%20mau%20tanya%20.....">Mulai Konsultasi</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Call To Action Choose End -->

<?php }else{ ?>
    <!-- Slider Start -->
<?php include('tata-letak-klien/tema-slider.php') ?>
<!-- Slider End -->

<!-- About Start -->
<div class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
	<div class="container">
		<div class="row y-middle">
			<div class="col-lg-6 md-mb-50">
				<div class="images-part">
					<img src="<?php echo base_url() ?>assets/klien/images/bg/tax4.jpg" alt="About">
				</div>
			</div>
			<div class="col-lg-6 pl-50 md-pl-15">
				<div class="sec-title">
					<span class="sub-text">
						<img src="<?php echo base_url() ?>assets/klien/images/shape-1.png" alt="Images">
						Tentang Kami
					</span>
					<h2 class="title pb-20">
						Kantor Konsultan Pajak dan Hukum Terdaftar Eko dan Rekan
					</h2>
					<p class="desc pb-37">
						membantu anda untuk memahami,
						mengelola dan membantu anda dalam memberikan layanan konsultasi usaha anda. Sehingga anda
						dapat lebih fokus dalam mengembangkan bisnis anda. Kantor Konsultan Pajak dan Hukum Terdaftar
						Eko dan Rekan memiliki tim dan konsultan yang berpengalaman dibidangnya sehingga anda dapat
						mengurangi resiko usaha dikemudian hari.
					</p>
					<div class="row y-middle">
						<div class="col-lg-4 col-md-4 sm-mb-30">
							<div class="about-img">
								<img src="<?php echo base_url() ?>assets/klien/images/about/style1/icon-about-kecil.png"
									alt="About">
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<ul class="check-lists">
								<li class="list-item">
									<span class="icon-list-icon">
										<i class="fa fa-check-circle"></i>
									</span>
									<span class="list-text">Jasa Perpajakan</span>
								</li>
								<li class="list-item">
									<span class="icon-list-icon">
										<i class="fa fa-check-circle"></i>
									</span>
									<span class="list-text">Jasa Akuntansi</span>
								</li>
								<li class="list-item">
									<span class="icon-list-icon">
										<i class="fa fa-check-circle"></i>
									</span>
									<span class="list-text">Jasa Hukum</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="row mt-47 md-mt-25">
						<div class="col-lg-6 col-md-4 sm-mb-30">
							<div class="btn-part">
								<a class="readon more know" href="<?php echo site_url('Klien/About') ?>">Selengkapnya</a>
							</div>
						</div>
						<!-- <div class="col-lg-6 col-md-8">
							<div class="signeture-img">
								<img src="<?php echo base_url() ?>assets/klien/images/about/style1/signeture1.png" alt="Images">
							</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
	<!-- Services Section Start -->
	<div id="Service" class="rs-services services-style1 pt-120 md-pt-70">
		<div class="container">
			<div class="sec-title text-center mb-50">
				<span class="sub-text sub-text2">
					Services
				</span>
				<h2 class="title">
					Memberikan solusi untuk permasalahan terkait<br>
					perpajakan, akuntansi dan hukum yang anda butuhkan.
				</h2>
			</div>
			<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
				data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
				data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
				data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
				data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
				data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
				data-md-device-nav="false" data-md-device-dots="true">
				<div class="services-slider">
					<div class="services-img">
						<a href="general-construction.html">
							<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/PJ.png"
								alt="Services">
						</a>
					</div>
					<div class="services-content">
						<div class="services-titles">
							<h4 class="title"><a href="general-construction.html">Jasa Perpajakan</a></h4>
						</div>
						<p class="services-txt">
							Konsultasi Pelaporan Pajak Bulanan, Konsultasi Pelaporan Pajak Tahunan, Konsultasi
							Permasalahan Pajak, dll.
						</p>
						<div class="services-btn btn-style2">
							<a class="btn-text" href="<?php echo site_url('Jasa/perpajakan') ?>">Selengkapnya<i
									class="fi fi-rr-arrow-small-right"></i></a>
						</div>
					</div>
				</div>
				<div class="services-slider">
					<div class="services-img">
						<a href="property-maintenance.html">
							<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/AK.png"
								alt="Services">
						</a>
					</div>
					<div class="services-content">
						<div class="services-titles">
							<h4 class="title"><a href="property-maintenance.html">Jasa Akuntansi</a></h4>
						</div>
						<p class="services-txt">
							Menyusun buku neraca, software akuntansi beserta
							implementasinya yang ditangani oleh konsultan dan divisi terkait.
						</p>
						<div class="services-btn btn-style2">
							<a class="btn-text" href="<?php echo site_url('Jasa/akuntansi') ?>">Selengkapnya<i
									class="fi fi-rr-arrow-small-right"></i></a>
						</div>
					</div>
				</div>
				<div class="services-slider">
					<div class="services-img">
						<a href="project-managment.html">
							<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/HK.png"
								alt="Services">
						</a>
					</div>
					<div class="services-content">
						<div class="services-titles">
							<h4 class="title"><a href="project-managment.html">Jasa Hukum</a></h4>
						</div>
						<p class="services-txt">
							Jasa Hukum/Lawyer/Pengacara Perceraian, Pidana Umum, Utang Piutang, Pertanahan, dan
							Gugatan PMH.
						</p>
						<div class="services-btn btn-style2">
							<a class="btn-text" href="<?php echo site_url('Jasa/hukum') ?>">Selengkapnya<i
									class="fi fi-rr-arrow-small-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Section End -->
</div>
<!-- About End -->

<!-- Call To Action Choose Start -->
<div class="rs-cta bg4 pt-120 pb-115 md-pt-80 md-pb-75">
	<div class="container">
		<div class="call-action">
			<div class="sec-title text-center">
				<span class="sub-text yellow-color">
					<img src="<?php base_url() ?>assets/klien/images/shape-1.png" alt="Images">
					BEKERJA DENGAN KAMI !
				</span>
				<h2 class="title white-color pb-20">
				Mulai Konsultasikan Pajak dan Bisnis Anda<br>
				dan Berkembang Bersama Kami.
				</h2>
				<p class="desc desc3 pb-35">
				Terpercaya dalam Kerahasiaan Data dan Kemudahan Pengusaha
untuk Mengurus Legalitas.
				</p>
				<div class="btn-part">
					<a class="readon more contact" target="_blank" href="https://api.whatsapp.com/send?phone=6281331907979&text=Halo%20admin%20Kantor%20Konsultan%20Pajak%20dan%20Hukum%20terdaftar%20Eko%20dan%20rekan,%20saya%20mau%20tanya%20.....">Mulai Konsultasi</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Call To Action Choose End -->
<?php } ?>