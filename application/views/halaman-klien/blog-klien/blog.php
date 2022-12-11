<?php if($this->session->userdata('language') == 'en'){ ?>   
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
	<div class="container">
		<div class="breadcrumbs-inner">
			<h1 class="page-title">
				Blog
			</h1>
			<span class="sub-text">You can find information related to taxation, accounting and law</span>
			<ul class="breadcrumbs-area">
				<li title="Go to konstruk">
					<a class="active" href="<?= site_url('') ?>">Home</a>
				</li>
				<li>Blog</li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div id="rs-blog" class="rs-blog blog-main-home blog-modify1 bg7 pt-120 pb-115 md-pt-80 md-pb-80">
	<div class="container">
		<div class="sec-title text-center mb-50">
			<span class="sub-text sub-text2">
                News & Articles
			</span>
			<h2 class="title">
                Our latest news & articles
			</h2>
		</div>
		<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
			data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
			data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
			data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
			data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
			data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
			data-md-device-dots="false">
			<div class="blog-item">
				<div class="image-wrap">
					<a href="<?php echo site_url('Blog/Detail_Blog') ?>"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak1.jpeg"
							alt=""></a>
				</div>
				<div class="blog-content">
					<ul class="blog-meta">
						<li class="date"><i class="fa fa-calendar-check-o"></i>November 08, 2022</li>
						<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
					</ul>
					<h3 class="blog-title"><a href="<?php echo site_url('Blog/Detail_Blog') ?>">The 'Pede' Tax Office has reached the target of depositing IDR 1,485 T in 2022</a></h3>
					<p class="desc">Sidoarjo, KKP Indonesia - The Directorate General of Taxes, Ministry of Finance believes that the 2022 tax revenue target of IDR 1,485 trillion can be achieved....</p>
					<div class="blog-button blog-bnt2">
						<a href="<?php echo site_url('Blog/Detail_Blog') ?>">
							<span class="btn-text">
								Read More
							</span>
							<i class="fi fi-rr-arrow-small-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="image-wrap">
					<a href="<?php echo site_url('Blog/Detail_Blog2') ?>"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritaakuntan.jpg"
							alt=""></a>
				</div>
				<div class="blog-content">
					<ul class="blog-meta">
						<li class="date"><i class="fa fa-calendar-check-o"></i>October 23, 2022</li>
						<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
					</ul>
					<h3 class="blog-title"><a href="<?php echo site_url('Blog/Detail_Blog') ?>">Definition of trial balance and its function</a></h3>
					<p class="desc">According to Yayah Pudin Shatu in the book Mastering Profit and Loss Accounting Details (2016), a trial balance is a book that contains a list of aggregated balances from data for each account....</p>
					<div class="blog-button blog-bnt2">
						<a href="<?php echo site_url('Blog/Detail_Blog2') ?>">
							<span class="btn-text">
								Read More
							</span>
							<i class="fi fi-rr-arrow-small-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="image-wrap">
					<a href="<?php echo site_url('Blog/Detail_Blog3') ?>"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak3.jpeg"
							alt=""></a>
				</div>
				<div class="blog-content">
					<ul class="blog-meta">
						<li class="date"><i class="fa fa-calendar-check-o"></i>November 08, 2022</li>
						<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
					</ul>
					<h3 class="blog-title"><a href="<?php echo site_url('Blog/Detail_Blog') ?>">The new way to reprint damaged or lost NPWP</a>
					</h3>
					<p class="desc">Sidoarjo, KKP Indonesia - Confused about how to print a Taxpayer Identification Number (NPWP) card? You can now reprint your NPWP card from anywhere because it can be done online....</p>
					<div class="blog-button blog-bnt2">
						<a href="<?php echo site_url('Blog/Detail_Blog3') ?>">
							<span class="btn-text">
								Read More
							</span>
							<i class="fi fi-rr-arrow-small-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog Section End -->
			
<?php }else{ ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
	<div class="container">
		<div class="breadcrumbs-inner">
			<h1 class="page-title">
				Blog
			</h1>
			<span class="sub-text">Anda dapat menemukan seputar informasi terkait perpajakan, akuntansi dan
				hukum.</span>
			<ul class="breadcrumbs-area">
				<li title="Go to konstruk">
					<a class="active" href="<?= site_url('') ?>">Beranda</a>
				</li>
				<li>Blog</li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div id="rs-blog" class="rs-blog blog-main-home blog-modify1 bg7 pt-120 pb-115 md-pt-80 md-pb-80">
	<div class="container">
		<div class="sec-title text-center mb-50">
			<span class="sub-text sub-text2">
				Berita & Artikel
			</span>
			<h2 class="title">
				Berita dan Artikel Terbaru Kami
			</h2>
		</div>
		<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
			data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
			data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
			data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
			data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
			data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
			data-md-device-dots="false">
			<div class="blog-item">
				<div class="image-wrap">
					<a href="<?php echo site_url('Blog/Detail_Blog') ?>"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak1.jpeg"
							alt=""></a>
				</div>
				<div class="blog-content">
					<ul class="blog-meta">
						<li class="date"><i class="fa fa-calendar-check-o"></i>29 November 2022</li>
						<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
					</ul>
					<h3 class="blog-title"><a href="<?php echo site_url('Blog/Detail_Blog') ?>">Kantor Pajak 'Pede' Target Setoran Rp1.485 T di 2022 Tercapai</a></h3>
					<p class="desc">Sidoarjo, KKP Indonesia - Direktorat Jenderal Pajak Kementerian Keuangan meyakini target penerimaan pajak 2022 senilai Rp 1.485 triliun dapat tercapai....</p>
					<div class="blog-button blog-bnt2">
						<a href="<?php echo site_url('Blog/Detail_Blog') ?>">
							<span class="btn-text">
								Baca Selengkapnya
							</span>
							<i class="fi fi-rr-arrow-small-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="image-wrap">
					<a href="<?php echo site_url('Blog/Detail_Blog2') ?>"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritaakuntan.jpg"
							alt=""></a>
				</div>
				<div class="blog-content">
					<ul class="blog-meta">
						<li class="date"><i class="fa fa-calendar-check-o"></i>23 Oktober 2022</li>
						<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
					</ul>
					<h3 class="blog-title"><a href="<?php echo site_url('Blog/Detail_Blog') ?>">Pengertian Neraca Saldo dan Fungsinya</a></h3>
					<p class="desc">Menurut Yayah Pudin Shatu dalam buku Kuasai Detail Akuntansi Laba dan Rugi (2016), neraca saldo adalah buku berisi daftar kumpulan saldo dari data tiap rekening.</p>
					<div class="blog-button blog-bnt2">
						<a href="<?php echo site_url('Blog/Detail_Blog2') ?>">
							<span class="btn-text">
                            Baca Selengkapnya
							</span>
							<i class="fi fi-rr-arrow-small-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="image-wrap">
					<a href="<?php echo site_url('Blog/Detail_Blog3') ?>"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak3.jpeg"
							alt=""></a>
				</div>
				<div class="blog-content">
					<ul class="blog-meta">
						<li class="date"><i class="fa fa-calendar-check-o"></i>08 November 2022</li>
						<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
					</ul>
					<h3 class="blog-title"><a href="<?php echo site_url('Blog/Detail_Blog') ?>">Cara Baru Cetak Ulang NPWP yang Rusak Atau Hilang</a>
					</h3>
					<p class="desc">Sidoarjo, KKP Indonesia - Anda bingung bagaimana cara mencetak kartu Nomor Pokok Wajib Pajak (NPWP)? Anda kini bisa mencetak ulang kartu NPWP dari mana saja karena dapat dilakukan secara online....</p>
					<div class="blog-button blog-bnt2">
						<a href="<?php echo site_url('Blog/Detail_Blog3') ?>">
							<span class="btn-text">
                            Baca Selengkapnya
							</span>
							<i class="fi fi-rr-arrow-small-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog Section End -->			        
<?php } ?>