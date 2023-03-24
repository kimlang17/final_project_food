@extends('frontend.layout')
@section('content')
        <!-- Header-->
        <header class="bg-success py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Farm Food</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Farm Food, where you can find 100% natural and healthy food.</p>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/img/about/farm.png" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Our Farm</h1>
                    <p>This is our farm which is located in Battambang province. </p>
                    <a class="btn btn-success" href="/contact">Contact Us!</a>
                </div>
            </div>
            <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/farm.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2004-2009</h4>
                                <h4 class="subheading">We started to grow plants in our farm in 2004.</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">From 2004 util 2009 we plants fruits and vegetables to sell in Battambang province.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/animals.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">We started to feed animal for meat</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Since March 2011 we changed our plan to add more food, we feed animal like cow,pig,chicken for meat.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/newFarm.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">New farm to grow plants and feed animal.</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Another new place located next to the previous farm is our new farm that we use to plants more vegetables, fruits and also feed animals.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pic4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2022</h4>
                                <h4 class="subheading">Win the reward from Ministry</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">We win the reward of GOOD FOOD,HEALTHY FOOD from Ministry of Health, our farm is clean, our food are natural and good quality.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image bg-success">
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
            <!-- Call to Action-->
            <div class="card text-white bg-success my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Why eating healthy food is the best for you?</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">No seasoning added</h2>
                            <p class="card-text">We provided the good food and tasty food without seasioning added that are cooked by our chef who have many years of experience in cooking.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success btn-sm" href="{{url('/list')}}">View Menu</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Natural and Healthy</h2>
                            <p class="card-text">We make sure to choose healthy vegetable and healthy meat for our customer. We are sure that our food is clean and healthy for you since we grow our own vegetable and feed our own chicken,pig,cow.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success btn-sm" href="{{url('/list')}}">View Menu</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Good Serve to Customer</h2>
                            <p class="card-text">We make sure that we serve you politely and as fast as we can , since we have many staff working here.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success btn-sm" href="{{url('/list')}}">View Menu</a></div>
                    </div>
                </div>
            </div>
            <center>
                <div class="embed-responsive embed-responsive-1by1">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/APs8QwFxZBo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/LGF33NN4B8U"></iframe>
                </div>
            </center>
        </div>
        
@endsection
