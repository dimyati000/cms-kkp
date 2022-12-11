<?php if($this->session->userdata('language') == 'en'){ ?>
<!-- Contact Section Start -->
<div class="rs-contact contact-style1 bg5">
	<div class="row">
		<div class="col-lg-4 offset-2 con-left-6">
			<div class="contact-section">
				<div class="contact-wrap">
					<div class="sec-title mb-45">
						<span class="sub-text">
							<img src="<?= base_url() ?>assets/klien/images/shape-1.png" alt="Images">
							Consultation Form
						</span>
						<h2 class="sub-text">
						Fill out the form below and we will contact you.
						</h2>
					</div>
					<!-- <form id="contact-form" method="post" action="mailer.php"> -->
					<form method="post" autocomplete="off">
						<!-- <fieldset> -->
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="nama" name="nama" placeholder="Name"
										required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="email" name="email" placeholder="Email"
										required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="notelepon" name="notelepon"
									placeholder="Phone Number" required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="layanan" name="layanan"
									placeholder="Service Type" required="">
								</div>
								<div class="col-lg-12 mb-30">
									<textarea class="from-control" id="message" name="message"
									placeholder="Message" required=""></textarea>
								</div>
								<input class="from-control" type="hidden" id="telepon" name="telepon" value="081331907979">
							</div>
							<div class="btn-part">
								<div class="form-group mb-0">
								<button type="button" onclick="send()" class="btn btn-warning btn-sm"><b>Send</b></button>
									
									<!-- <input   class="readon more submit" type="submit" value="a"> -->
								</div>
							</div>
							<div id="pesan"></div>
						<!-- </fieldset> -->
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
			<div class="contact-box-item">
				<div class="contact-box mb-20">
					<div class="contact-icon">
						<img src="<?= base_url() ?>assets/klien/images/contact/style1/icons/1.png" alt="images">
					</div>
					<div class="content-text">
						<h4 class="title"><a href="#">Address Office</a></h4>
						<p class="services-txt">Taman Anggun Sejahtera 4, Cluster Gardenia Blok D2-07,<br> Sidodadi Candi, Sidoarjo</p>
					</div>
				</div>
				<div class="contact-box mb-20">
					<div class="contact-icon">
						<img src="<?= base_url() ?>assets/klien/images/contact/style1/icons/2.png" alt="images">
					</div>
					<div class="content-text">
						<h4 class="title"><a href="#">Email</a></h4>
						<p class="services-txt">
							<a href="mailto:test@gamil.com">kkpekobudisetiawan@gmail.com</a><br>
						</p>
					</div>
				</div>
				<div class="contact-box">
					<div class="contact-icon">
						<img src="<?= base_url() ?>assets/klien/images/contact/style1/icons/3.png" alt="images">
					</div>
					<div class="content-text">
						<h4 class="title"><a href="#">Phone</a></h4>
						<p class="services-txt">
							<a href="tel:(+62) 813-3190-7979">(+62) 813-3190-7979</a><br>
							<a href="tel:(+62) 856-0757-5713">(+62) 856-0757-5713 </a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 contact-right-img"></div>
	</div>
</div>
<!-- Contact Section End -->
<!-- Kirim Chat WA -->
<script>
	function send() {
		var nama = document.getElementById('nama').value;
		var email = document.getElementById('email').value;
		var notelepon = document.getElementById('notelepon').value;
		var telepon = document.getElementById('telepon').value;
		var layanan = document.getElementById('layanan').value;
		var message = document.getElementById('message').value;
		if (pesan.length != 0) {
			var namaEncode = encodeURI(nama);
			var emailEncode = encodeURI(email);
			var noteleponEncode = encodeURI(notelepon);
			var teleponEncode = encodeURI(telepon);
			var layananEncode = encodeURI(layanan);
			var messageEncode = encodeURI(message);
			var link = document.createElement('a');
			fixed = telepon - 0;
			link.id = 'link'; //give it an ID!
			link.href = 'https://wa.me/62' + fixed + '?text=Halo%20admin,%20saya%20' + namaEncode +
			'%0A' + '%20Email:%20' + emailEncode +
			'%0A' + '%20Nomor Telepon:%20' + noteleponEncode + 
			'%0A' + '%20Layanan:%20' + layananEncode +
			'%0A' + '%20Pesan:%20' + messageEncode; // Your URL
			console.log(link)
			document.getElementById("pesan").appendChild(link);
			document.getElementById('link').click();

		} else {
			alert('harap lengkapi formulir !');
		}
	}
</script>

<?php }else{ ?>
    <!-- Contact Section Start -->
<div class="rs-contact contact-style1 bg5">
	<div class="row">
		<div class="col-lg-4 offset-2 con-left-6">
			<div class="contact-section">
				<div class="contact-wrap">
					<div class="sec-title mb-45">
						<span class="sub-text">
							<img src="<?= base_url() ?>assets/klien/images/shape-1.png" alt="Images">
							Form Konsultasi
						</span>
						<h2 class="sub-text">
						Isi formulir di bawah ini dan kami akan menghubungi Anda.
						</h2>
					</div>
					<!-- <form id="contact-form" method="post" action="mailer.php"> -->
					<form method="post" autocomplete="off">
						<!-- <fieldset> -->
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="nama" name="nama" placeholder="Nama"
										required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="email" name="email" placeholder="Email"
										required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="notelepon" name="notelepon"
									placeholder="Telepon" required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
									<input class="from-control" type="text" id="layanan" name="layanan"
									placeholder="Jenis Layanan" required="">
								</div>
								<div class="col-lg-12 mb-30">
									<textarea class="from-control" id="message" name="message"
									placeholder="Pesan" required=""></textarea>
								</div>
								<input class="from-control" type="hidden" id="telepon" name="telepon" value="081331907979">
							</div>
							<div class="btn-part">
								<div class="form-group mb-0">
								<button type="button" onclick="send()" class="btn btn-warning btn-sm"><b>Kirim</b></button>
									
									<!-- <input   class="readon more submit" type="submit" value="a"> -->
								</div>
							</div>
							<div id="pesan"></div>
						<!-- </fieldset> -->
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
			<div class="contact-box-item">
				<div class="contact-box mb-20">
					<div class="contact-icon">
						<img src="<?= base_url() ?>assets/klien/images/contact/style1/icons/1.png" alt="images">
					</div>
					<div class="content-text">
						<h4 class="title"><a href="#">Alamat Kantor</a></h4>
						<p class="services-txt">Taman Anggun Sejahtera 4, Cluster Gardenia Blok D2-07,<br> Sidodadi Candi, Sidoarjo</p>
					</div>
				</div>
				<div class="contact-box mb-20">
					<div class="contact-icon">
						<img src="<?= base_url() ?>assets/klien/images/contact/style1/icons/2.png" alt="images">
					</div>
					<div class="content-text">
						<h4 class="title"><a href="#">Email</a></h4>
						<p class="services-txt">
							<a href="mailto:test@gamil.com">kkpekobudisetiawan@gmail.com</a><br>
						</p>
					</div>
				</div>
				<div class="contact-box">
					<div class="contact-icon">
						<img src="<?= base_url() ?>assets/klien/images/contact/style1/icons/3.png" alt="images">
					</div>
					<div class="content-text">
						<h4 class="title"><a href="#">Telepon</a></h4>
						<p class="services-txt">
							<a href="tel:(+62) 813-3190-7979">(+62) 813-3190-7979</a><br>
							<a href="tel:(+62) 856-0757-5713">(+62) 856-0757-5713 </a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 contact-right-img"></div>
	</div>
</div>
<!-- Contact Section End -->
<!-- Kirim Chat WA -->
<script>
	function send() {
		var nama = document.getElementById('nama').value;
		var email = document.getElementById('email').value;
		var notelepon = document.getElementById('notelepon').value;
		var telepon = document.getElementById('telepon').value;
		var layanan = document.getElementById('layanan').value;
		var message = document.getElementById('message').value;
		if (pesan.length != 0) {
			var namaEncode = encodeURI(nama);
			var emailEncode = encodeURI(email);
			var noteleponEncode = encodeURI(notelepon);
			var teleponEncode = encodeURI(telepon);
			var layananEncode = encodeURI(layanan);
			var messageEncode = encodeURI(message);
			var link = document.createElement('a');
			fixed = telepon - 0;
			link.id = 'link'; //give it an ID!
			link.href = 'https://wa.me/62' + fixed + '?text=Halo%20admin,%20saya%20' + namaEncode +
			'%0A' + '%20Email:%20' + emailEncode +
			'%0A' + '%20Nomor Telepon:%20' + noteleponEncode + 
			'%0A' + '%20Layanan:%20' + layananEncode +
			'%0A' + '%20Pesan:%20' + messageEncode; // Your URL
			console.log(link)
			document.getElementById("pesan").appendChild(link);
			document.getElementById('link').click();

		} else {
			alert('harap lengkapi formulir !');
		}
	}
</script>

<?php } ?>