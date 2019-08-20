<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Atma">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Jumbotron-with-Particles-js-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Jumbotron-with-Particles-js.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Responsive-Card-Item-List.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin-top: -26px;margin-bottom: 13px;">
            <div class="container"><a class="navbar-brand" href="#" style="font-family: Atma, cursive;font-size: 23px;">Lapak Malang</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Produk</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Cara Order</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Tentang</a></li>
                    </ul><span class="navbar-text actions"> <a href="#" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
    </div>
    </nav>
    </div>
    <div class="jumbotron jumbotron-fluid jumbotron-main"><script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <div id="particles-js">
    <canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
    </div>
        <div class="container center-vertically-holder" style="margin-top:-20px;">
            <div class="row center-vertically">
                <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top: 100px;margin-bottom: 173px;">
                    <h1 style="font-family: Atma, cursive;font-size: 58px;margin-top: -40px;">Lapak Malang<br><br></h1>
                    <hr style="border-top: 1px;color: rgba(255,255,255,0.9);width: 60%;margin: 0px;margin-top: -71px;margin-bottom: 10px;margin-left: 20%;">
                    <p style="margin-top: -31px;"><br>Lapak malang merupakan situs belanja online terpercaya yang menjual berbagai macam produk kebutuhan rumah anda<br><br></p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card border-white border rounded shadow-sm" style="margin-top: -108px;filter: brightness(101%) grayscale(0%) saturate(106%);opacity: 1;">
            <div class="card-header d-xl-flex justify-content-xl-center" data-aos="zoom-in">
                <ul class="nav nav-tabs card-header-tabs" role="tablist" style="background-color: #ffffff;">
                    <li class="nav-item"><a class="nav-link active text-truncate d-flex float-left visible" href="#item-1-1" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true">Cari Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#item-1-2" id="item-1-2-tab" data-toggle="tab" role="tab" aria-controls="item-1-2" aria-selected="false">Second Item</a></li>
                    <li class="nav-item"><a class="nav-link" href="#item-1-3" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-3" aria-selected="false">Third Item</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div id="nav-tabContent" class="tab-content">
                    <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Cari Barang.....</span></div><input class="form-control" type="text">
                            <div class="input-group-append"><button class="btn btn-primary" type="button">Go!</button></div>
                        </div>
                    </div>
                    <div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab"></div>
                    <div id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron border rounded-0"></div>
    </div>
    <div class="container">
        <h1 style="font-family: Atma, cursive;font-size: 40px;">Elektronik<br><br></h1>
    </div>
    <div class="container" style="margin-top: -50px;">
    <div class="row product-list">
        
        <?php 
        for ($i=0; $i < 4; $i++) { 
        ?>
        <div class="col-sm-4 col-md-3 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">iPhone 6s</a></h2>
                    </div>
                    <div class="col-4"><a href="#" class="small-text">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">$599.00 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    </div>
</div>
<div class="container">
        <h1 style="font-family: Atma, cursive;font-size: 40px;">Travel<br><br></h1>
    </div>
    <div class="container" style="margin-top: -50px;">
    <div class="row product-list">
        
        <?php 
        for ($i=0; $i < 4; $i++) { 
        ?>
        <div class="col-sm-4 col-md-3 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">iPhone 6s</a></h2>
                    </div>
                    <div class="col-4"><a href="#" class="small-text">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">$599.00 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    </div>
</div>
<div class="container">
        <h1 style="font-family: Atma, cursive;font-size: 40px;">Fashion<br><br></h1>
    </div>
    <div class="container" style="margin-top: -50px;">
    <div class="row product-list">
        
        <?php 
        for ($i=0; $i < 4; $i++) { 
        ?>
        <div class="col-sm-4 col-md-3 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">iPhone 6s</a></h2>
                    </div>
                    <div class="col-4"><a href="#" class="small-text">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price">$599.00 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    </div>
</div>
    <div class="footer-dark" style="height: 100%;">
        <footer>
            <div class="container">
                <div class="row" style="margin-top: -21px;">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>