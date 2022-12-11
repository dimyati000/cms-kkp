<?php if($this->session->userdata('language') == 'en'){ ?>
<!-- Toolbar Area Start -->
<div class="toolbar-area topbar-style1 hidden-md">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-10">
                <!-- <div class="col-lg-12 col-md-10 col-sm-11"> -->
                <div class="toolbar-contact">
                    <ul class="rs-contact-info">
                        <li>
                            <i class="fi fi-rr-envelope-plus"></i>
                            <a href="mailto:kkpekobudisetiawan@gmail.com">kkpekobudisetiawan@gmail.com</a>
                        </li>
                        <li>
                            <i class="fi fi-rr-phone-call"></i>
                            <a href="tel:(+62)813-3190-7979">(+62) 813-3190-7979</a>
                        </li>
                        <li>
                            <i class="fi-rr-map-marker-home"></i>
                            <a href="https://goo.gl/maps/mM29wiJFTbewjQ1A9">Sidoarjo</a>
                        </li>
                        <li>
                            <i class="fi-rr-time-add"></i>
                            Monday - Saturday: 8.00 am - 5.00 pm
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <!-- <div class="col-lg-12 col-md-2 col-sm-1"> -->
                <div class="toolbar-sl-share">
                    <ul class="clearfix">
                        <li class="opening" style="align:center; justify:center">
                            <a href="<?php echo site_url('Klien/translate/in'); ?>">
                                <img style="width:12%" src="<?php echo base_url() ?>assets/img/bahasa-id.png">
                                <em> ID</em>
                                <!-- <em class="ml-5">ID</em> -->
                            </a>
                            <a class="ml-12" href="<?php echo site_url('Klien/translate/en'); ?>">
                                <img style="width:12%" src="<?php echo base_url() ?>assets/img/bahasa-uk.png">
                                <em> EN</em>
                                <!-- <em class="ml-5">EN</em> -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Toolbar Area End -->

<?php }else{ ?>
<!-- Toolbar Area Start -->
<div class="toolbar-area topbar-style1 hidden-md">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-10">
                <!-- <div class="col-lg-12 col-md-10 col-sm-11"> -->
                <div class="toolbar-contact">
                    <ul class="rs-contact-info">
                        <li>
                            <i class="fi fi-rr-envelope-plus"></i>
                            <a href="mailto:kkpekobudisetiawan@gmail.com">kkpekobudisetiawan@gmail.com</a>
                        </li>
                        <li>
                            <i class="fi fi-rr-phone-call"></i>
                            <a href="tel:(+62)813-3190-7979">(+62) 813-3190-7979</a>
                        </li>
                        <li>
                            <i class="fi-rr-map-marker-home"></i>
                            <a href="https://goo.gl/maps/mM29wiJFTbewjQ1A9">Sidoarjo</a>
                        </li>
                        <li>
                            <i class="fi-rr-time-add"></i>
                            Senin - Sabtu: 8.00 am - 5.00 pm
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <!-- <div class="col-lg-12 col-md-2 col-sm-1"> -->
                <div class="toolbar-sl-share">
                    <ul class="clearfix">
                        <li class="opening" style="align:center; justify:center">
                            <a href="<?php echo site_url('Klien/translate/in'); ?>">
                                <img style="width:12%" src="<?php echo base_url() ?>assets/img/bahasa-id.png">
                                <em> ID</em>
                                <!-- <em class="ml-5">ID</em> -->
                            </a>
                            <a class="ml-12" href="<?php echo site_url('Klien/translate/en'); ?>">
                                <img style="width:12%" src="<?php echo base_url() ?>assets/img/bahasa-uk.png">
                                <em> EN</em>
                                <!-- <em class="ml-5">EN</em> -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Toolbar Area End -->
<?php } ?>