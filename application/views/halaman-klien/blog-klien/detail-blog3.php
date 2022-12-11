<?php if($this->session->userdata('language') == 'en'){ ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Blog Details
            </h1>
            <span class="sub-text">You will get an explanation of the information related to taxation, accounting and law that you find.</span>
            <ul class="breadcrumbs-area">
                <li title="Go to konstruk">
                    <a class="active" href="<?= site_url('') ?>">Home</a>
                </li>
                <li><a class="active" href="<?= site_url('Blog') ?>">Blog</li>
                </li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section 2 Start -->
<div class="rs-inner-blog pt-120 pb-105 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 md-mb-50">
                <div class="blog-details">
                    <div class="bs-img mb-50">
                        <a href="#"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak3.jpeg"
                                alt=""></a>
                    </div>
                    <div class="blog-full">
                        <div class="blog-content-full">
                            <p class="pb-25">
                                Sidoarjo, KKP Indonesia - Confused about how to print a Taxpayer Identification Number (NPWP) card? 
                                You can now reprint your NPWP card from anywhere because it can be done online.
                            </p>
                            <p class="pb-25">
                                Quoting the official website, a damaged or lost NPWP can indeed be reprinted, 
                                either online or by visiting the Tax Service Office (KPP) in person.
                            </p>
                            <p class="pb-25">
                                Then, how do you reprint NPWP cards online and offline?
                            </p>
                            <h3 class="title pb-24">How to Print NPWP Online</h3>
                            <p class="pb-25">
                                There are several conditions for reprinting NPWP cards online. 
                                You can access the www.pajak.go.id site and follow these steps:
                            </p>
                            <p>
                                • Open the tax.go.id site. If you don't have an account yet, you must create one first.
                            </p>
                            <p>
                                • Click login in the top right corner.
                            </p>
                            <p>
                                • You will be directed to the DJP online page.
                            </p>
                            <p>
                                • You can enter your NPWP, password and security code.
                            </p>
                            <p>
                                • If you do not yet have an online DGT account, you can register by asking the Tax Office or 
                                  where you are registered as your EFIN taxpayer. You can also apply for an EFIN online.
                            </p>
                            <p>
                                • If you are already logged in, select the Information menu, and click the send email button.
                            </p>
                            <p>
                                • After that, the system will send an electronic NPWP directly to your e-mail address.
                            </p>
                            <p>
                                • If successful, you will get a notification. You can then check your email inbox, 
                                  and download the included attachments and print out the NPWP.
                            </p>
                            <p class="pb-25">
                                <h3 class="title pb-24">How to Print NPWP Offline</h3>
                            </p>
                            <p class="pb-30">
                                For those of you who want to print your NPWP offline, you can go directly to the nearest KPP. 
                                Taxpayers can apply for a reprint of their NPWP card at the KPP by bringing their original KTP, 
                                filling out the application, and will get a new NPWP card.
                            </p>
                            <div class="bs-info">
                                Tags:
                                <a href="#">Taxation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 pl-25 md-pl-15">
                <div class="widget-area">
                    <!-- <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </div> -->
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Recent Posts</h3>
                        </div>
                        <div class="recent-post-widget no-border">
                            <div class="post-img">
                                <a href="blog-single.html"><img
                                        src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritaakuntan.jpg"
                                        alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-single.html">Definition of trial balance and its function</a>
                                <span class="date-post"> <i class="fi fi-rr-calendar"></i>October 23, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-single.html"><img
                                        src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak3.jpeg"
                                        alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-single.html">The new way to reprint damaged or lost NPWP</a>
                                <span class="date-post"> <i class="fi fi-rr-calendar"></i>November 08, 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="categories mb-50">
                        <div class="widget-title mb-15">
                            <h3 class="title">Categories</h3>
                        </div>
                        <ul>
                            <li><a href="#">Taxation</a></li>
                            <li><a href="#">Accountancy</a></li>
                            <li><a href="#">Law</a></li>
                        </ul>
                    </div>
                    <div class="tags-cloud">
                        <div class="widget-title pb-23">
                            <h3 class="title">Tags</h3>
                        </div>
                        <div class="tagcloud">
                            <a href="#">Taxation</a>
                            <a href="#">Accountancy</a>
                            <a href="#">Law</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section 2 End -->

<?php }else{ ?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Detail Blog
            </h1>
            <span class="sub-text">Anda akan mendapatkan penjelasan terhadap informasi terkait perpajakan, akuntansi dan
                hukum yang anda temukan.</span>
            <ul class="breadcrumbs-area">
                <li title="Go to konstruk">
                    <a class="active" href="<?= site_url('') ?>">Beranda</a>
                </li>
                <li><a class="active" href="<?= site_url('Blog') ?>">Blog</li>
                </li>
                <li>Detail Blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section 2 Start -->
<div class="rs-inner-blog pt-120 pb-105 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 md-mb-50">
                <div class="blog-details">
                    <div class="bs-img mb-50">
                        <a href="#"><img src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak3.jpeg"
                                alt=""></a>
                    </div>
                    <div class="blog-full">
                        <div class="blog-content-full">
                            <p class="pb-25">
                                Sidoarjo, KKP indonesia - Anda bingung bagaimana cara mencetak kartu Nomor Pokok Wajib
                                Pajak (NPWP)? Anda kini bisa mencetak ulang kartu NPWP dari mana saja karena dapat
                                dilakukan secara online.
                            </p>
                            <p class="pb-25">
                                Mengutip laman resmi pajak.go.id NPWP yang rusak atau hilang memang bisa dicetak ulang,
                                baik itu melalui online atau mendatangi langsung Kantor Pelayanan Pajak (KPP).
                            </p>
                            <p class="pb-25">
                                Lalu, bagaimana cara mencetak ulang kartu NPWP secara online dan offline?
                            </p>
                            <h3 class="title pb-24">Cara Mencetak NPWP Secara Online</h3>
                            <p class="pb-25">
                                Ada sejumlah persyaratan mencetak ulang kartu NPWP secara online. Anda dapat mengakses
                                situs www.pajak.go.id dan mengikuti langkah-langkah sebagai berikut:
                            </p>
                            <p>
                                • Buka situs pajak.go.id. Jika Anda tidak memiliki akun, maka harus membuat akun
                                terlebih dahulu.
                            </p>
                            <p>
                                • Klik login di pojok kanan atas.
                            </p>
                            <p>
                                • Anda akan diarahkan ke halaman DJP online.
                            </p>
                            <p>
                                • Anda dapat memasukkan NPWP, kata sandi, dan kode keamanan.
                            </p>
                            <p>
                                • Jika belum memiliki akun DJP online, Anda dapat melakukan pendaftaran dengan meminta
                                EFIN kepada KPP atau tempat Anda terdaftar sebagai wajib pajak. Anda juga bisa melakukan
                                permohonan EFIN secara online.
                            </p>
                            <p>
                                • Jika Anda sudah login, pilih menu Informasi, dan klik tombol kirim email.
                            </p>
                            <p>
                                • Setelah itu, sistem akan mengirimkan NPWP elektronik tersebut langsung ke alamat email
                                Anda.
                            </p>
                            <p>
                                • Jika berhasil, Anda akan mendapatkan notifikasi. Anda kemudian dapat mengecek inbox
                                email, dan mendownload lampiran yang disertakan dan mencetak NPWP tersebut.
                            </p>
                            <p class="pb-25">
                                <h3 class="title pb-24">Cara Mencetak NPWP Secara Offline</h3>
                            </p>
                            <p class="pb-30">
                                Bagi Anda yang ingin mencetak NPWP secara offline dapat mendatangi langsung KPP
                                terdekat. Wajib pajak dapat mengajukan permohonan cetak ulang kartu NPWP di KPP dengan
                                membawa KTP asli, mengis permohonan, dan akan mendapatkan kartu NPWP yang baru.
                            </p>
                            <div class="bs-info">
                                Tags:
                                <a href="#">Perpajakan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 pl-25 md-pl-15">
                <div class="widget-area">
                    <!-- <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </div> -->
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Postingan Terbaru</h3>
                        </div>
                        <div class="recent-post-widget no-border">
                            <div class="post-img">
                                <a href="blog-single.html"><img
                                        src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritaakuntan.jpg"
                                        alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-single.html">Pengertian Neraca Saldo dan Fungsinya</a>
                                <span class="date-post"> <i class="fi fi-rr-calendar"></i>23 Oktober, 2022</span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-single.html"><img
                                        src="<?php echo base_url() ?>assets/klien/images/blog/style1/beritapajak3.jpeg"
                                        alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-single.html">Cara Baru Cetak Ulang NPWP yang rusak Atau Hilang</a>
                                <span class="date-post"> <i class="fi fi-rr-calendar"></i>08 November, 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="categories mb-50">
                        <div class="widget-title mb-15">
                            <h3 class="title">Kategori</h3>
                        </div>
                        <ul>
                            <li><a href="#">Perpajakan</a></li>
                            <li><a href="#">Akuntansi</a></li>
                            <li><a href="#">Hukum</a></li>
                        </ul>
                    </div>
                    <div class="tags-cloud">
                        <div class="widget-title pb-23">
                            <h3 class="title">Tag</h3>
                        </div>
                        <div class="tagcloud">
                            <a href="#">Perpajakan</a>
                            <a href="#">Akuntansi</a>
                            <a href="#">Hukum</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section 2 End -->
<?php } ?>