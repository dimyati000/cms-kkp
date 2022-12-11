<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Membuat multi language</title>
</head>

<body>
	<h3>Coba</h3>
	<ul>
		<li><a href="<?php echo site_url('Klien/translate/in'); ?>">Indonesia</a></li>
		<li><a href="<?php echo site_url('Klien/translate/en'); ?>">English</a></li>
	</ul>

	<?php if($this->session->userdata('language') == 'en'){ ?>

	<p>What is Lorem Ipsum?
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
		standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
		a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
		Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
		of Lorem Ipsum.</p>
	<?php }else if($this->session->userdata('language') == 'in'){ ?>

        <p>Apa itu Lorem Ipsum
		Lorem Ipsum hanyalah teks tiruan dari industri percetakan dan penyusunan huruf. Lorem Ipsum telah menjadi
		standar contoh teks sejak tahun 1500-an, ketika seorang tukang cetak yang tidak dikenal mengambil kumpulan teks
		dan mengacaknya untuk membuat buku contoh huruf. Itu bertahan tidak hanya selama lima abad, tetapi juga lompatan
		ke pengaturan huruf elektronik, yang pada dasarnya tetap tidak berubah. Itu dipopulerkan pada tahun 1960-an
		dengan dirilisnya lembaran Letraset yang berisi bagian-bagian Lorem Ipsum, dan baru-baru ini dengan perangkat
		lunak desktop publishing seperti Aldus PageMaker termasuk versi Lorem Ipsum.</p>
    <?php }else{ ?>
        <p>What is Lorem Ipsum?
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
		standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
		a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
		Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
		of Lorem Ipsum.</p>
    <?php } ?>
</body>

</html>
