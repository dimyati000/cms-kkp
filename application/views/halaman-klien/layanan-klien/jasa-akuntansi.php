<?php if($this->session->userdata('language') == 'en'){ ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img2">
	<div class="container">
		<div class="breadcrumbs-inner">
			<h1 class="page-title">
				Accounting Service
			</h1>
			<span class="sub-text">We do our best to serve you in all accounting matters.</span>
			<ul class="breadcrumbs-area">
				<li title="Go to konstruk">
					<a class="active" href="<?= site_url('') ?>">Home</a>
				</li>
				<li>Accounting Service</li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumbs End -->

<!-- Pricing Section Start -->
<div class="rs-pricing pricing-style1 pt-120 pb-120 md-pt-80 md-pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 md-mb-50">
				<div class="pricing-table-wrap">
					<div class="pricing-table-header">
						<h3 class="pricing-table-title">Accounting Service</h3>
					</div>
					<div class="pricing-icon">
						<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/ac1.png"
							alt="Images">
					</div>
					<div class="pricing-table-price-tag">
						<h5>Starting From</h5>
						<span class="pricing-table-currency">Rp</span>
						<span class="pricing-table-price-text">50Jt</span>
						<span class="pricing-table-period">Year</span>
					</div>
					<ul class="pricing-table-features-list">
						<li>
							<span class="feature-text">The consultant will assist the company to prepare a balance
								sheet. With this service, companies will have the opportunity to focus more on their
								business because the company's financial management matters will be handled by
								consultants and divisions related to corporate finance. Companies can also focus more on
								communicating with investors, banks and business partners. The accounting services
								offered are accounting software and its implementation.</span>
						</li>
					</ul>
					<div class="btn-part mt-45 md-mt-30 text-center">
						<a class="readon more pricing" href="<?= site_url('Jasa/Form_Konsultasi') ?>"><span>Consult
								Now</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Pricing Section End -->
<?php }else{ ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img2">
	<div class="container">
		<div class="breadcrumbs-inner">
			<h1 class="page-title">
				Jasa Akuntansi
			</h1>
			<span class="sub-text">Kami melakukan yang terbaik dalam melayani anda pada segala masalah akuntansi.</span>
			<ul class="breadcrumbs-area">
				<li title="Go to konstruk">
					<a class="active" href="<?= site_url('') ?>">Beranda</a>
				</li>
				<li>Jasa Akuntansi</li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumbs End -->

<!-- Pricing Section Start -->
<div class="rs-pricing pricing-style1 pt-120 pb-120 md-pt-80 md-pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 md-mb-50">
				<div class="pricing-table-wrap">
					<div class="pricing-table-header">
						<h3 class="pricing-table-title">Jasa Akuntansi</h3>
					</div>
					<div class="pricing-icon">
						<img src="<?php echo base_url() ?>assets/klien/images/services/main-home/main-icons/ac1.png"
							alt="Images">
					</div>
					<div class="pricing-table-price-tag">
						<h5>Mulai Dari</h5>
						<span class="pricing-table-currency">Rp</span>
						<span class="pricing-table-price-text">50Jt</span>
						<span class="pricing-table-period">Tahun</span>
					</div>
					<ul class="pricing-table-features-list">
						<li>
							<span class="feature-text">Konsultan akan membantu perusahaan untuk menyusun buku neraca.
								Dengan adanya layanan ini, perusahaan akan memiliki kesempatan untuk lebih fokus lagi
								pada bisnisnya karena urusan manajemen keuangan perusahaan akan ditangani oleh konsultan
								dan divisi terkait dengan keuangan perusahaan. Perusahaan juga bisa lebih fokus menjalin
								komunikasi dengan para investor, bank, dan mitra bisnis. Jasa akuntan yang ditawarkan
								adalah software akuntansi beserta implementasinya.</span>
						</li>
					</ul>
					<div class="btn-part mt-45 md-mt-30 text-center">
						<a class="readon more pricing" href="<?= site_url('Jasa/Form_Konsultasi') ?>"><span>Konsultasi
								Sekarang</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Pricing Section End -->
<?php } ?>
