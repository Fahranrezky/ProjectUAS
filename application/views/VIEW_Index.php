<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lacasa DE Papel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css?v2" rel="stylesheet">
    <style type="text/css">
        
        h2 {
            display:inline;
        }
        .div1, .div2 {
            width:700px;
            margin:0 
            auto;
        }
        .div1 {
            margin-top:30px;
            margin-bottom:60px;
            text-align:center;
            line-height:20px;
        }
        .div1 {font-size:18px;}
        .div1 a, .div2 a {color:#07C; }
        .div1 a {margin:0 8px;}
        .div1 a.current {color:black; text-decoration:none;}
        .div2 {margin-top:70px;}
        .div2 li {padding-top:6px;padding-bottom:6px;}
        .green {color:Green;}
        .cn {font-family: "Courier New", Georgia;}
        #status {
            display:inline-block; 
            margin-left:26px;
            line-height:50px;
            height:50px;
            vertical-align:middle;
        }
        .code {
            border: dashed 1px #BCBCCB; 
            padding:8px 12px; 
            background-color: #F3F3F9; 
            white-space:pre; 
            font-family:"Courier New", Georgia;
            font-size:12px; 
            margin:6px 0;
            overflow:auto; 
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css?v2" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>assets/themes/2/js-image-slider.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>generic.css" rel="stylesheet" type="text/css" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner"></div>
    </div>
    <div class="container">
        <div class="logo"></div>
        <div class="banner"></div>
      
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#"></a>
                    <ul class="nav">
                        <li class="active"><a href="#"><i class="icon-home icon-large"></i> Home</a></li>
                        <li>
                            <a href="<?php echo site_url('CTR_Product/index')?>"><i class="icon-th-list icon-large"></i> Character</a>
                        </li>
                        <li><a href="<?php echo site_url('CTR_Gallery/index')?>"><i class="icon-picture icon-large"></i> Gallery</a></li>
                        <li><a href="<?php echo site_url('CTR_Index/About')?>"><i class="icon-book icon-large"></i> About Us</a></li>
                        <li><a href="<?php echo site_url('CTR_Contact/index')?>"><i class="icon-phone icon-large"></i> Contact Us</a></li>
                    </ul>
             </div>
        </div>
      
        <div id="sliderFrame">
        <div id="slider">
            <a href="#" target="_blank">
                <img src="<?php echo base_url(); ?>assets/images/3.jpg" alt="" />
            </a>
            <a class="lazyImage" href="<?php echo base_url(); ?>assets/images/4.jpg" title=""></a>
            <a href=""><b data-src="<?php echo base_url(); ?>assets/images/23.jpg"></b></a>
            <a class="lazyImage" href="<?php echo base_url(); ?>assets/images/25.jpg" title=""></a>
            <a class="lazyImage" href="<?php echo base_url(); ?>assets/images/10.jpg" title=""></a>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/3.jpg" /></div>
                <div class="thumb-content"><p>THE Professor</p>He is the mastermind of the heist.</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/4.jpg" /></div>
                <div class="thumb-content"><p>Art</p>SalvadorDali</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/23.jpg" /></div>
                <div class="thumb-content"><p>The City</p>Fictional Character</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/25.jpg" /></div>
                <div class="thumb-content"><p>Fact</p>It is the Fact of Spanyol</div>
                <div style="clear:both;"></div>
            </div>  
            <div class="thumb">
                <div class="frame"><img src="<?php echo base_url(); ?>assets/images/10.jpg" /></div>
                <div class="thumb-content"><p>Madrid</p>Royal Mind Of Spain</div>
                <div style="clear:both;"></div>
            </div>  
        </div>
        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;height:0;"></div>
    </div>
    <br><br><br>
      <!-- Example row of columns -->
        <div class="row">
            <div class="span9">
                <div class="latest"><i class="icon-info-sign icon-large"></i> Latest Information</div>
                    <div class="info"> 
                        <?php foreach ($daftar_info as $row) { ?>
                        <p align="center"><b><?php echo $row->Title; ?></b><br>
                        <?php echo $row->Content; ?><br><br>
                        <img src="<?php echo base_url('gambar/'.$row->Photo)?>">
                        </p>
                        <?php } ?>
                    </div>
                </div>
            <div class="span3">
            <div class="one">   
                <h3><center><i class="icon-book icon-large"></i> Visi dan Misi</center></h3></div>
                <p><b><i class="icon-book"></i> Vision and Mission</b><br><br>
                <b>Visi<br></b>
                <ol>
                    <li>Menjadi Program Studi yang unggul dalam pengembangan keilmuan teknologi informasi untuk mendukung ekonomi kreatif tahun 2033</li>
                </ol>
               
                <b>Misi<br></b>
                <ol>
                    <li>Menyelenggarakan pendidikan pada bidang teknologi informasi yang berkualitas</li>
                    <li>Menyelenggarakan Penelitian di bidang teknologi informasi yang berkualitas</li>
                    <li>Menyelenggarakan pengabdian masyarakat di bidang teknologi informasi dalam rangka meningkatkan kualitas sumber daya manusia</li>
                </ol>
                </p>
                <p><div class="pull-right"><a class="btn" href="#">View More &raquo;</a></div></p><br><br>
                <hr>
                <div class="one"> 
                <h3><center><i class="icon-book icon-large"></i> Tujuan Penulisan</center></h3></div>
                <p><b><i class="icon-book"></i> Tujuan </b><br><br>
    
                <ol>
                    <li>Menghasilkan lulusan yang memiliki kemampuan dalam mengimplementasikan ilmu pengetahuan dan teknologi informasi yang mendukung ekonomi kreatif</li>
                        <li>Menghasilkan lulusan yang berkompeten, kreatif, inovatif, kompetitif dan berakhlak mulia</li>
                        <li>Menghasilkan penelitian dan karya Ilmiah di bidang teknologi informasi yang diakui pada tingkat nasional dan internasional.</li>
                   </ol>
                </p>
                
                <hr>
            </div>
            <div class="one">
                    <center><p style="font-size:18px;"><b><i class="icon-sitemap icon-large"></i> Site Map</b></center></div>
                <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8710109803196!2d106.7251379146855!3d-6.148020795548701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7f961c04f65%3A0x91667efd0496a1cd!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Cengkareng%20(UBSI%20Cengkareng)!5e0!3m2!1sid!2sid!4v1656236012162!5m2!1sid!2sid" width="290" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>


        </div>
        </div>

        <footer>
            <center>
            <p><img src="<?php echo base_url(); ?>assets/images/profile.jpg" width="80">Copyright &copy; All Rights Reserved | BSI Lover's 2022</p> 
            </center>
        </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
