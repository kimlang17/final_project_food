@extends('frontend.layout')
@section('content')

    <div id="demo" class="carousel slide col-9 container" data-ride="carousel" >
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/img/slides/slide1.jpg" alt="slide1">
            </div>
            <div class="carousel-item">
            <img src="assets/img/slides/slide2.jpg" alt="slide2"> 
            </div>
            <div class="carousel-item">
            <img src="assets/img/slides/slide3.png" alt="slide3">
            </div>
            <div class="carousel-item">
            <img src="assets/img/slides/slide4.jpg" alt="slide4">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Here are some service at our farm: </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-carrot text-warning fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Natural Vegetables and Fruits</h4>
                        <p class="text-muted">We grow our own vegetables and fruits. Natural and Healthy 100%.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-apple-whole text-danger fa-stack-1x fa-inverse "></i>
                        </span>
                        <h4 class="my-3">Juice for Health</h4>
                        <p class="text-muted">Drinks and juice that are made from the natural fruit and vegetables.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-drumstick-bite text-warning fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Fresh Meat</h4>
                        <p class="text-muted">We provide fresh meat that we feed naturally at our farm.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="menu">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Menu</h2>
                    <h3 class="section-subheading text-muted">Here are some menu at our Farm</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4"> 
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="assets/img/food/Chicken.jpg"   width="350px" height="300px" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Chicken</div>
                                <div class="portfolio-caption-subheading text-muted">11.00 $</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="assets/img/food/ChickenLeg.jpg"   width="350px" height="300px" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Chicken Leg</div>
                                <div class="portfolio-caption-subheading text-muted">8.00 $</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="assets/img/food/ChickenWing.jpg"   width="350px" height="300px" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Chicken Wing</div>
                                <div class="portfolio-caption-subheading text-muted">9.00 $</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="assets/img/food/MangoJuice.png"   width="350px" height="300px" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mango Juice</div>
                                <div class="portfolio-caption-subheading text-muted">3 $</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="assets/img/food/Papaya.png"   width="350px" height="300px" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Papaya</div>
                                <div class="portfolio-caption-subheading text-muted"> 2.00 $</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="assets/img/food/PineappleJuice.png"  width="350px" height="300px" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pine apple Juice</div>
                                <div class="portfolio-caption-subheading text-muted">5.00 $</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center"><a href="{{url('/list')}}" class="btn btn-success m-5">See More</a></div>
            </div>
        </section>
        
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Team</h2>
                    <h3 class="section-subheading text-muted">We work together for the best foods serve.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/farmer.png" alt="..." />
                            <h4>David Eve</h4>
                            <p class="text-muted">Farm Manager</p>
                            <a class="btn btn-success btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-success btn-social mx-2" href="https://www.facebook.com/david.eve.180" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-success btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/me2.jpg" alt="..." />
                            <h4>So Kimlang</h4>
                            <p class="text-muted">Founder of Farm Food</p>
                            <a class="btn btn-success btn-social mx-2" href="https://t.me/lang17_Mar" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-success btn-social mx-2" href="https://www.facebook.com/kimlang.so.9" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-success btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/ChefNak.png" alt="..." />
                            <h4>Rotanak Ros</h4>
                            <p class="text-muted">Marketing and Finance</p>
                            <a class="btn btn-success btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-success btn-social mx-2" href="https://www.facebook.com/chefnak/" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-success btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Our chef are expert in cooking different kind of food, delicious and with good quality of taste.</p></div>
                </div>
            </div>
        </section>   
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Meat</h2>
                                    <p class="item-intro text-muted">This is the meat from our farm.</p>
                                    <img class=" d-block mx-auto" src="assets/img/food/Chicken.jpg" height="400px" alt="..." />
                                    <p>This is the chicken from our farm that we feed it naturally.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Menu:</strong>
                                            Chicken
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            11.00 $
                                        </li>
                                    </ul>
                                    <button class="btn btn-success btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Meat</h2>
                                    <p class="item-intro text-muted">This meat is from our farm.</p>
                                    <img class=" d-block mx-auto" src="assets/img/food/ChickenLeg.jpg" height="400px" alt="..." />
                                    <p>This is chicken leg from our farm.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Chicken Leg
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            8.00 $
                                        </li>
                                    </ul>
                                    <button class="btn btn-success btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Meat</h2>
                                    <p class="item-intro text-muted">Taste delicious and natural from our farm</p>
                                    <img class="d-block mx-auto" src="assets/img/food/ChickenWing.jpg" height="400px" alt="..." />
                                    <p>This is chicken wing from our farm.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Menu:</strong>
                                            Chicken Wing
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            9.00 $
                                        </li>
                                    </ul>
                                    <button class="btn btn-success btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Drinks</h2>
                                    <p class="item-intro text-muted">Delicious naturally and Healthy.</p>
                                    <img class="d-block mx-auto" src="assets/img/food/MangoJuice.png" height="400px" alt="..." />
                                    <p>This is the mango juice made from the mango from our farm</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Menu:</strong>
                                            Mango Juice
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                             3.00 $
                                        </li>
                                    </ul>
                                    <button class="btn btn-success btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Fruit</h2>
                                    <p class="item-intro text-muted">This is the fruit from our farm.</p>
                                    <img class="d-block mx-auto" src="assets/img/food/Papaya.png" height="400px" alt="..." />
                                    <p>The natural papaya grow in our farm.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Papaya
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                           2.00 $
                                        </li>
                                    </ul>
                                    <button class="btn btn-success btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup -->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Drinks</h2>
                                    <p class="item-intro text-muted">This taste is good for your health. It tastes unique and tasty.</p>
                                    <img class="d-block mx-auto" src="assets/img/food/PineappleJuice.png" height="400px" alt="..." />
                                    <p>This pineapple juice is made of the pineapple from our farm contains vitamin C.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Menu:</strong>
                                            Pineapple Juice
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            5.00 $
                                        </li>
                                    </ul>
                                    <button class="btn btn-success btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height: 70%;
            }
        </style>
@endsection