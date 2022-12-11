<?php if($this->session->userdata('language') == 'en'){ ?>
<!-- Menu Start -->
<div class="menu-area menu-sticky">
    <div class="container">
        <div class="row-table">
            <div class="col-cell header-logo">
                <!-- <div class="logo-area"> -->
                <!-- <a href="/"> -->
                <!-- <img style="width: 30%;"; class="normal-logo" src="<?php echo base_url() ?>assets/img/logo-kkp-removebg.png"
									alt="logo"> -->
                <img style="width:30%" class="sticky-logo"
                    src="<?php echo base_url() ?>assets/img/logo-kkp-removebg.png" alt="logo">
                <!-- </a> -->
                <!-- </div> -->
            </div>
            <div class="col-cell">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <nav class="rs-menu hidden-md">
                            <ul class="nav-menu">
                                <li>
                                    <a href="<?= site_url('') ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('Klien/About') ?>">About</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= site_url('Jasa/Perpajakan') ?>">Tax Service</a></li>
                                        <li><a href="<?= site_url('Jasa/Akuntansi') ?>">Accounting Service</a></li>
                                        <li><a href="<?= site_url('Jasa/Hukum') ?>">Legal Services</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= site_url('Blog') ?>">Blog</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('Contact') ?>">Contact Us</a>
                                </li>
                                <!-- <li><a href="<?php echo site_url('Klien/translate/in'); ?>">Indonesia</a></li>
                                <li><a href="<?php echo site_url('Klien/translate/en'); ?>">English</a></li> -->
                            </ul> <!-- //.nav-menu -->
                        </nav>
                    </div> <!-- //.main-menu -->
                </div>
            </div>
            <div class="col-cell">
                <div class="expand-btn-inner">
                    <ul>
                        <!-- <li class="search-parent">
                            <a class="hidden-xs rs-search" href="#">
                                <i class="fi fi-rr-search"></i>
                            </a>
                            <div class="sticky_form">
                                <form role="search" class="bs-search search-form" method="get">
                                    <div class="search-wrap">
                                        <label class="screen-reader-text active">
                                            Search for: </label>
                                        <input type="search" placeholder="Searching..." name="s" class="search-input"
                                            value="">
                                        <button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li> -->
                        <li class="btn-quote"><a class="quote-button" target="_blank"
                                href="https://api.whatsapp.com/send?phone=6281331907979&text=Halo%20admin%20Kantor%20Konsultan%20Pajak%20dan%20Hukum%20terdaftar%20Eko%20dan%20rekan,%20saya%20mau%20tanya%20.....">Let's
                                Talk</a>
                        </li>
                        <li class="humburger">
                            <a id="nav-expander" class="nav-expander bar" href="#">
                                <div class="bar">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                    <span class="dot4"></span>
                                    <span class="dot5"></span>
                                    <span class="dot6"></span>
                                    <span class="dot7"></span>
                                    <span class="dot8"></span>
                                    <span class="dot9"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- Canvas Mobile Menu start -->
<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
    <div class="close-btn">
        <a id="nav-close2" class="nav-close">
            <div class="line">
                <span class="line1"></span>
                <span class="line2"></span>
            </div>
        </a>
    </div>
    <!-- //.nav-menu -->
    <ul class="nav-menu">
    <div class="canvas-contact">
            <div class="address-area">
                <div class="address-list">
                    <div class="info-icon">
                        <li class="menu-item-has-children" style="align:center; justify:center">

                        <a href="<?php echo site_url('Klien/translate/in'); ?>">
                                <img style="width:25%" src="<?php echo base_url() ?>assets/img/bahasa-id.png">
                            <em> ID</em>
                            <!-- <em class="ml-5">ID</em> -->
                            </a>
                        </li>
                    </div>
                    <div class="info-icon">
                    <li class="menu-item-has-children" style="align:center; justify:center">
                        <a class="" href="<?php echo site_url('Klien/translate/en'); ?>">
                            <img style="width:25%" src="<?php echo base_url() ?>assets/img/bahasa-uk.png">
                            <em> EN</em>
                            <!-- <em class="ml-5">EN</em> -->
                        </a>
                    </li>
                    </div>
                </div>
            </div>
        </div>
        <li class="menu-item-has-children current-menu-item">
            <a href="index.html">Home</a>
        </li>
        <li>
            <a href="<?= site_url('Klien/about') ?>">About</a>
        </li>
        <li class="menu-item-has-children">
            <a>Services</a>
            <ul class="sub-menu">
                <li><a href="<?= site_url('Jasa/perpajakan') ?>">Tax Service</a></li>
                <li><a href="<?= site_url('Jasa/akuntansi') ?>">Accounting Service</a></li>
                <li><a href="<?= site_url('Jasa/hukum') ?>">Legal Services</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= site_url('Blog') ?>">Blog</a>
        </li>
        <li>
            <a href="<?= site_url('Klien/kontak') ?>">Contact</a>
        </li>
    </ul>
    <!-- //.nav-menu -->

    <!-- //.canvas-contact -->
    <div class="canvas-contact">
        <div class="address-area">
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-map-marker-home"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Contact</h4>
                    <em>31 New Street, NY, USA</em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-envelope-plus"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Email</h4>
                    <a href="mailto:kkpekobudisetiawan@gmail.com">kkpekobudisetiawan@gmail.com</a>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-phone-call"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Free Call</h4>
                    <a href="tel:(+62)813-3190-7979">(+62) 813-3190-7979</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //.canvas-contact -->
</nav>
<!-- Canvas Menu end -->

<?php }else{ ?>
<!-- Menu Start -->
<div class="menu-area menu-sticky">
    <div class="container">
        <div class="row-table">
            <div class="col-cell header-logo">
                <!-- <div class="logo-area"> -->
                <!-- <a href="/"> -->
                <!-- <img style="width: 30%;"; class="normal-logo" src="<?php echo base_url() ?>assets/img/logo-kkp-removebg.png"
									alt="logo"> -->
                <img style="width:30%" class="sticky-logo"
                    src="<?php echo base_url() ?>assets/img/logo-kkp-removebg.png" alt="logo">
                <!-- </a> -->
                <!-- </div> -->
            </div>
            <div class="col-cell">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <nav class="rs-menu hidden-md">
                            <ul class="nav-menu">
                                <li>
                                    <a href="<?= site_url('') ?>">Beranda</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('Klien/About') ?>">Tentang Kami</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>Layanan</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= site_url('Jasa/Perpajakan') ?>">Jasa Perpajakan</a></li>
                                        <li><a href="<?= site_url('Jasa/Akuntansi') ?>">Jasa Akuntansi</a></li>
                                        <li><a href="<?= site_url('Jasa/Hukum') ?>">Jasa Hukum</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= site_url('Blog') ?>">Blog</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('Contact') ?>">Hubungi Kami</a>
                                </li>
                                <!-- <li><a href="<?php echo site_url('Klien/translate/in'); ?>">Indonesia</a></li>
                                <li><a href="<?php echo site_url('Klien/translate/en'); ?>">English</a></li> -->
                            </ul> <!-- //.nav-menu -->
                        </nav>
                    </div> <!-- //.main-menu -->
                </div>
            </div>
            <div class="col-cell">
                <div class="expand-btn-inner">
                    <ul>
                        <!-- <li class="search-parent">
                            <a class="hidden-xs rs-search" href="#">
                                <i class="fi fi-rr-search"></i>
                            </a>
                            <div class="sticky_form">
                                <form role="search" class="bs-search search-form" method="get">
                                    <div class="search-wrap">
                                        <label class="screen-reader-text active">
                                            Search for: </label>
                                        <input type="search" placeholder="Searching..." name="s" class="search-input"
                                            value="">
                                        <button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li> -->
                        <li class="btn-quote"><a class="quote-button" target="_blank"
                                href="https://api.whatsapp.com/send?phone=6281331907979&text=Halo%20admin%20Kantor%20Konsultan%20Pajak%20dan%20Hukum%20terdaftar%20Eko%20dan%20rekan,%20saya%20mau%20tanya%20.....">Mari
                                Konsultasi</a>
                        </li>
                        <li class="humburger">
                            <a id="nav-expander" class="nav-expander bar" href="#">
                                <div class="bar">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                    <span class="dot4"></span>
                                    <span class="dot5"></span>
                                    <span class="dot6"></span>
                                    <span class="dot7"></span>
                                    <span class="dot8"></span>
                                    <span class="dot9"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- Canvas Mobile Menu start -->
<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
    <div class="close-btn">
        <a id="nav-close2" class="nav-close">
            <div class="line">
                <span class="line1"></span>
                <span class="line2"></span>
            </div>
        </a>
    </div>
    <!-- //.nav-menu -->
    <ul class="nav-menu">
        <div class="canvas-contact">
            <div class="address-area">
                <div class="address-list">
                    <div class="info-icon">
                        <li class="menu-item-has-children" style="align:center; justify:center">

                        <a href="<?php echo site_url('Klien/translate/in'); ?>">
                                <img style="width:25%" src="<?php echo base_url() ?>assets/img/bahasa-id.png">
                            <em> ID</em>
                            <!-- <em class="ml-5">ID</em> -->
                            </a>
                        </li>
                    </div>
                    <div class="info-icon">
                    <li class="menu-item-has-children" style="align:center; justify:center">
                        <a class="" href="<?php echo site_url('Klien/translate/en'); ?>">
                            <img style="width:25%" src="<?php echo base_url() ?>assets/img/bahasa-uk.png">
                            <em> EN</em>
                            <!-- <em class="ml-5">EN</em> -->
                        </a>
                    </li>
                    </div>
                </div>
            </div>
        </div>
      
        <li class="menu-item-has-children current-menu-item">
            <a href="index.html">Beranda</a>
        </li>
        <li>
            <a href="<?= site_url('Klien/about') ?>">Tentang Kami</a>
        </li>
        <li class="menu-item-has-children">
            <a>Layanan</a>
            <ul class="sub-menu">
                <li><a href="<?= site_url('Jasa/perpajakan') ?>">Jasa Perpajakan</a></li>
                <li><a href="<?= site_url('Jasa/akuntansi') ?>">Jasa Akuntansi</a></li>
                <li><a href="<?= site_url('Jasa/hukum') ?>">Jasa Hukum</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= site_url('Blog') ?>">Blog</a>
        </li>
        <li>
            <a href="<?= site_url('Klien/kontak') ?>">Hubungi Kami</a>
        </li>
    </ul>
    <!-- //.nav-menu -->

    <!-- //.canvas-contact -->
    <div class="canvas-contact">
        <div class="address-area">
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-map-marker-home"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Contact</h4>
                    <em>31 New Street, NY, USA</em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-envelope-plus"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Email</h4>
                    <a href="mailto:kkpekobudisetiawan@gmail.com">kkpekobudisetiawan@gmail.com</a>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-phone-call"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Free Call</h4>
                    <a href="tel:(+62)813-3190-7979">(+62) 813-3190-7979</a>

                </div>
            </div>
        </div>
    </div>
    <!-- //.canvas-contact -->
</nav>
<!-- Canvas Menu end -->
<?php } ?>
