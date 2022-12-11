<?php if($this->session->userdata('language') == 'en'){ ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img6">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
							Contact Us
			            </h1>
                        <span class="sub-text"></span>
			            <ul class="breadcrumbs-area">
                           <li title="Go to konstruk">
                               <a class="active" href="<?= site_url('') ?>">Home</a>
                           </li>
                          <li>Contact Us</li>
                       </ul>
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->
		
			<!-- Contact Section Start -->
			<div class="rs-contact contact-style6 pb-120 md-pb-80">
			    <div class="row no-gutters">
			    	<div class="col-lg-4">
			    		<div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d55481.49949333415!2d112.6675113709336!3d-7.496804079436135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1db67af79cf%3A0xee7bc56cc79ca7fe!2sKonsultan%20Pajak%20Eko%20%26%20Rekan%20Affiliated%20With%20Advokat%20Koes!5e0!3m2!1sen!2sid!4v1669689091518!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			    		</div>
			    	</div>
			        <div class="col-lg-4">
        				<div class="contact-section">
                            <div class="contact-wrap">
                            	<div class="sec-title mb-60">
                            		<h2 class="title title4 ser-style4">Get in touch</h2>
                            	</div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="nama" name="nama" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="notelepon" name="notelepon" placeholder="Phone" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="layanan" name="layanan" placeholder="Service" required="">
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Message" required=""></textarea>
                                            </div>
											<input class="from-control" type="hidden" id="telepon" name="telepon" value="081331907979">
											</div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <button type="button" onclick="send()" class="btn btn-warning btn-lg"><b>Send It Now</b></button>
                                            </div>
                                        </div> 
										<div id="pesan"></div>
                                    <!-- </fieldset> -->
                                </form> 
                            </div>
                        </div>
			        </div>
			        <div class="col-lg-4 contact-project"></div>
			    </div>
			    <!-- Contact Icons Section End -->
			
			    <div class="rs-contact pt-120 md-pt-80">
			        <div class="container">
			            <div class="row">
			                <div class="col-lg-4 col-md-6 md-mb-30">
			                   <div class="contact-box">
			                       <div class="contact-icon">
			                           <img src="<?php echo base_url() ?>assets/klien/images/contact/style1/icons/1.png" alt="images">
			                       </div>
			                       <div class="content-text">
			                           <h4 class="title"><a href="#">Office Address</a></h4>
			                           <p class="services-txt"> Taman Anggun Sejahtera 4, Cluster Gardenia Blok D2-07, Candi Sidoarjo</p>
			                       </div>
			                   </div>
			                </div>
			                <div class="col-lg-4 col-md-6 sm-mb-30">
			                   <div class="contact-box">
			                       <div class="contact-icon">
			                           <img src="<?php echo base_url() ?>assets/klien/images/contact/style1/icons/2.png" alt="images">
			                       </div>
			                       <div class="content-text">
			                           <h4 class="title"><a href="#">Email</a></h4>
			                           <span><a href="mailto:support@devsdesign.net">kkpekobudisetiawan@gmail.com</a></span><br>
			                           <span><a href="mailto:info@codesless.com">globalmanajementconsultant01@gmail.com</a></span>
			                       </div>
			                   </div>
			                </div>
			                <div class="col-lg-4 col-md-6">
			                   <div class="contact-box">
			                       <div class="contact-icon">
			                           <img src="<?php echo base_url() ?>assets/klien/images/contact/style1/icons/3.png" alt="images">
			                       </div>
			                       <div class="content-text">
			                           <h4 class="title"><a href="#">Phone</a></h4>
			                           <span><a href="tel:(+088)589-8745">(+62) 813-3190-7979</a></span><br>
			                          	<span> <a href="tel:(+088)222-9999">(+62) 856-0757-5713</a></span>
			                       </div>
			                   </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <!-- Contact Icons Section End -->
			</div>
			<!-- Contact Section End -->

<?php }else{ ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img6">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			               	Hubungi Kami
			            </h1>
                        <span class="sub-text"></span>
			            <ul class="breadcrumbs-area">
                           <li title="Go to konstruk">
                               <a class="active" href="<?= site_url('') ?>">Beranda</a>
                           </li>
                          <li>Hubungi Kami</li>
                       </ul>
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->
		
			<!-- Contact Section Start -->
			<div class="rs-contact contact-style6 pb-120 md-pb-80">
			    <div class="row no-gutters">
			    	<div class="col-lg-4">
			    		<div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d55481.49949333415!2d112.6675113709336!3d-7.496804079436135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1db67af79cf%3A0xee7bc56cc79ca7fe!2sKonsultan%20Pajak%20Eko%20%26%20Rekan%20Affiliated%20With%20Advokat%20Koes!5e0!3m2!1sen!2sid!4v1669689091518!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			    		</div>
			    	</div>
			        <div class="col-lg-4">
        				<div class="contact-section">
                            <div class="contact-wrap">
                            	<div class="sec-title mb-60">
                            		<h2 class="title title4 ser-style4">Get in touch</h2>
                            	</div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="nama" name="nama" placeholder="Nama" required="">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="notelepon" name="notelepon" placeholder="Telepon" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="layanan" name="layanan" placeholder="Layanan" required="">
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Pesan" required=""></textarea>
                                            </div>
											<input class="from-control" type="hidden" id="telepon" name="telepon" value="081331907979">
											</div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <button type="button" onclick="send()" class="btn btn-warning btn-lg"><b>Kirimkan Sekarang</b></button>
                                            </div>
                                        </div> 
										<div id="pesan"></div>
                                    <!-- </fieldset> -->
                                </form> 
                            </div>
                        </div>
			        </div>
			        <div class="col-lg-4 contact-project"></div>
			    </div>
			    <!-- Contact Icons Section End -->
			
			    <div class="rs-contact pt-120 md-pt-80">
			        <div class="container">
			            <div class="row">
			                <div class="col-lg-4 col-md-6 md-mb-30">
			                   <div class="contact-box">
			                       <div class="contact-icon">
			                           <img src="<?php echo base_url() ?>assets/klien/images/contact/style1/icons/1.png" alt="images">
			                       </div>
			                       <div class="content-text">
			                           <h4 class="title"><a href="#">Alamat Kantor</a></h4>
			                           <p class="services-txt"> Taman Anggun Sejahtera 4, Cluster Gardenia Blok D2-07, Candi Sidoarjo</p>
			                       </div>
			                   </div>
			                </div>
			                <div class="col-lg-4 col-md-6 sm-mb-30">
			                   <div class="contact-box">
			                       <div class="contact-icon">
			                           <img src="<?php echo base_url() ?>assets/klien/images/contact/style1/icons/2.png" alt="images">
			                       </div>
			                       <div class="content-text">
			                           <h4 class="title"><a href="#">Email</a></h4>
			                           <span><a href="mailto:support@devsdesign.net">kkpekobudisetiawan@gmail.com</a></span><br>
			                           <span><a href="mailto:info@codesless.com">globalmanajementconsultant01@gmail.com</a></span>
			                       </div>
			                   </div>
			                </div>
			                <div class="col-lg-4 col-md-6">
			                   <div class="contact-box">
			                       <div class="contact-icon">
			                           <img src="<?php echo base_url() ?>assets/klien/images/contact/style1/icons/3.png" alt="images">
			                       </div>
			                       <div class="content-text">
			                           <h4 class="title"><a href="#">Telepon</a></h4>
			                           <span><a href="tel:(+088)589-8745">(+62) 813-3190-7979</a></span><br>
			                          	<span> <a href="tel:(+088)222-9999">(+62) 856-0757-5713</a></span>
			                       </div>
			                   </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <!-- Contact Icons Section End -->
			</div>
			<!-- Contact Section End -->
<?php } ?>

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
