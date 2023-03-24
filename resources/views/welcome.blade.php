@extends('admin.layout')
@section('content')

                <!-- Masthead-->
                <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://cdn.britannica.com/36/123536-050-95CB0C6E/Variety-fruits-vegetables.jpg" alt="Los Angeles" >
            </div>
            <div class="carousel-item">
            <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2022%2F11%2F17%2Farticle_291139_the-top-10-healthiest-foods-for-kids_-02.jpg&q=60" alt="Chicago"> 
            </div>
            <div class="carousel-item">
            <img src="http://static1.squarespace.com/static/53b839afe4b07ea978436183/53bbeeb2e4b095b6a428a13e/5fd2570b51740e23cce97919/1676678395594/traditional-food-around-the-world-Travlinmad.jpg?format=1500w" alt="New York">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
        <br>
        <br>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Here are some service at our restaurants: </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-seedling fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Natural Vegetables and Fruits</h4>
                        <p class="text-muted">We grow our own vegetables and fruits. Natural and Healthy 100%.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-seedling fa-stack-1x fa-inverse "></i>
                        </span>
                        <h4 class="my-3">Juice for Health</h4>
                        <p class="text-muted">Drinks and juice that are made from the natural fruit and vegetables.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-seedling fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Fresh Meat</h4>
                        <p class="text-muted">We feed the animal for meat and eggs</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="menu">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Menu</h2>
                    <h3 class="section-subheading text-muted">Here are some food at our restaurant</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4"> 
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/food/food1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tom Yam Sea Food</div>
                                <div class="portfolio-caption-subheading text-muted">5.5 $</div>
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
                                <img class="img-fluid" src="assets/img/food/food2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Long Bean Fried</div>
                                <div class="portfolio-caption-subheading text-muted">7 $</div>
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
                                <img class="img-fluid" src="assets/img/food/food3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Roasted Chicken</div>
                                <div class="portfolio-caption-subheading text-muted">8 $</div>
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
                                <img class="img-fluid" src="assets/img/food/food4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fried Chicken With Rice</div>
                                <div class="portfolio-caption-subheading text-muted">6 $</div>
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
                                <img class="img-fluid" src="assets/img/food/food5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Noodles with red pork</div>
                                <div class="portfolio-caption-subheading text-muted"> 6.5 $</div>
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
                                <img class="img-fluid" src="assets/img/food/food6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fried Noodle</div>
                                <div class="portfolio-caption-subheading text-muted">5.9 $</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center"><a href="menu.php" class="btn btn-success m-5">See More</a></div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About US</h2>
                    <h3 class="section-subheading text-muted">Our Restaurant started in 2004.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pic1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2004-2009</h4>
                                <h4 class="subheading">We started our business in 2004.</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">From 2004 util 2009 our location was at Battambang province and we only have 20 foods in our menu.Our restaurant is also one of the popular restaurant in Battambang.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pic2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">Change the location to PhnomPenh</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Since March 2011 we changed our location from Battambang to PhnomPenh.Our first location is in Toul Kouk , Phnom Penh.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pic3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">We have more than one location in Phnom Penh.</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Another new location located at ChroyChongVa,PhnomPenh.And we increase our sales alot.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pic4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2022</h4>
                                <h4 class="subheading">Win the reward from Ministry</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">We win the reward of GOOD FOOD, GOOD SERVE,GOOD ENVIRONMENT from Ministry of Tourism, our restaurant is clean , and our food are delicious with good quality.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Our Next
                                <br />
                                Achivement
                                <br />
                                Coming Soon!
                            </h4>
                        </div>
                    </li>
                </ul>
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
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/luu.meng.18/" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/me2.jpg" alt="..." />
                            <h4>So Kimlang</h4>
                            <p class="text-muted">Founder of Farm Food</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/chefnak/" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/ChefNak.png" alt="..." />
                            <h4>Rotanak Ros</h4>
                            <p class="text-muted">Marketing and Finance</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/events/808380046591046/808380056591045/?acontext=%7B%22ref_newsfeed_story_type%22%3A%22regular%22%2C%22source%22%3A%223%22%2C%22feed_story_type%22%3A%2222%22%2C%22action_history%22%3A%22null%22%7D" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
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
                                    <h2 class="text-uppercase">Lunch</h2>
                                    <p class="item-intro text-muted">This is a popular food in our restaurant.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/food/food1.jpg" alt="..." />
                                    <p>This food is made of sea food with the taste of sour sweet and salty in the same food.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Tom Yam Sea Food
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            5.5 $
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
                                    <h2 class="text-uppercase">Lunch</h2>
                                    <p class="item-intro text-muted">This food is the popular food.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/food/food2.jpg" alt="..." />
                                    <p>long beans fried with pork and add chilli on it, make it taste more tasty. this food is sweet and salty.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Long Bean Fried
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            7 $
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
                                    <h2 class="text-uppercase">Lunch / Dinner</h2>
                                    <p class="item-intro text-muted">Taste delicious for lunch and dinner</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/food/food3.jpg" alt="..." />
                                    <p>This roasted chicken is made of chicken with honey and more ingredients to make it tastes good.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Roasted Chicken
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            8 $
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
                                    <h2 class="text-uppercase">BreakFast</h2>
                                    <p class="item-intro text-muted">Delicious Breakfast with fried chicken.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/food/food4.jpg" alt="..." />
                                    <p>Our rice is form Battambang which is number 1 rice and the chicken is cooked well and it tastes yummy by the ingredients.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Fried Chicken With Rice
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            6 $
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
                                    <h2 class="text-uppercase">BreakFast</h2>
                                    <p class="item-intro text-muted">This is the noodle with red pork and taste so good.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/food/food5.jpg" alt="..." />
                                    <p>Many Porks in one bowl make the noodle taste better and make customer feel good about this. The red pork taste uniquely from the simple one.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Noodles with red pork
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                           6.5 $
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
                                    <h2 class="text-uppercase">BreakFast</h2>
                                    <p class="item-intro text-muted">This taste is from Battambanger. It taste unique and tasty.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/food/food6.jpg" alt="..." />
                                    <p>This food is made of noodles fried and add some nuts make it taste differently and yummy.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Food:</strong>
                                            Fried Noodles
                                        </li>
                                        <li>
                                            <strong>Price:</strong>
                                            5.9 $
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