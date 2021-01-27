<!DOCTYPE html>
<?php 
    require "connection.php";
    include "login.php";
?>
<html lang="en">
    <head>
        <title>Orphanage Main Page</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

        <!-- =========================
             PRE LOADER       
        ============================== -->
        <div class="preloader">

            <div class="sk-rotating-plane"></div>

        </div>


        <!-- =========================
             NAVIGATION LINKS     
        ============================== -->
        <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
            <div class="container">

                <!-- navbar header -->
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Shephard Organization</a>
                </div>

                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#intro" class="smoothScroll">Home</a></li>
                        <li><a href="#overview" class="smoothScroll">About Us</a></li>
                        <li><a href="#speakers" class="smoothScroll">Support</a></li>
                        <li><a href="#volunteer" class="smoothScroll">Volunteer</a></li>
                        <li><a href="#register" class="smoothScroll">Registerations</a></li>
                        <li><a href="signin.php" class="smoothScroll">Sign In</a></li>
                        <li><a href="#contact" class="smoothScroll">Contact Us</a></li>
                        <li><a href="donations.php" class="smoothScroll">Donate</a></li>
                    </ul>

                </div>

            </div>
        </div>


        <!-- =========================
            INTRO SECTION   
        ============================== -->
        <section id="intro" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <h3 class="wow bounceIn" data-wow-delay="0.9s">Help Us</h3>
                        <h1 class="wow fadeInUp" data-wow-delay="1.6s">Be a part of our Organization</h1>
                        <a href="#overview" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">LEARN MORE</a>
                        <a href="donations.php" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">DONATE TO HELP US</a>
                    </div>


                </div>
    
            </div>
        </section>


        <!-- =========================
            OVERVIEW SECTION 1  
        ============================== -->
        <section id="overview" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
                        <h3>Our Indian Shepard Organization</h3>
                        <p>In the heart of every child is a hunger for home. Not just for food and a place to sleep, but for safety and community. Most importantly: for love. At the Good Shepherd Agricultural Mission, 350kms east of Delhi in the town of Banbasa, we are much more than a home for unwanted Indian orphans.</p>
                        <p>We are a family, where God’s love guides us all as we grow and expand year after year. Not just an Indian orphanage, we are a nearly self-sustaining organization; a working farm, a vibrant school, receiving no government assistance of any kind. Take a look around and if you have any questions just get in contact with us via the menu above!</p>
                        <br/>
                        <a href="donations.php" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">Donate Us Online</a>
                        
                        <h3>About Us</h3>                        
                        <p>Our orphanage history is one of great adventures, overcoming huge odds and most importantly love. Orphanages rarely have a story to tell like ours does; some might find parts of it hard to believe but we assure you, it is all truth.</p>
                    </div>

                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
                        <img src="images/topRanked.png" class="img-responsive" alt="Overview">
                    </div>
                    <div class="row">
                        <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
                            <p>The Good Shepherd Agricultural Mission was founded in 1948 by Maxton Davis Strong and his wife, Shirley. Maxton Strong had been a professor of Agricultural Engineering at the Allahabad Agricultural Institute in India, previous to this, having come from the USA with the American Presbyterian Board of Foreign Missions. After seeing the need of practical “hands on” agricultural training for aspiring young farmers, he acquired 160 acres of good fertile land along the foothills of the Himalayas, which was being offered on a permanent lease by the Indian Government.</p>
                        </div>
                        <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
                            <p>Having been to the USA and raised funds for some equipment, Maxton, Shirley and their three children, Jack, Maxine, and Jay, returned to India by ship along with their supplies. They landed in Bombay with a John Deere tractor, a four-wheeled trailer, a two-wheeled threshing machine, and some other equipment. They assembled the tractor, which had come in parts, on the Bombay docks and started driving up country. Along with a couple of young Indian men, they moved over five tonnes of equipment, heading for Banbasa, on the Western boarder of Nepal. The entire trip by tractor was over 3000km and took several weeks. Shirley and the children traveled by train and met Max at their new home.</p>
                        </div>
                        <img src="images/abt1.JPG" class="img-responsive" alt="about">
                        <p>The land was wild and unpopulated, largely because of the deadly effects of malaria. For the first few years, the little family lived in a US army surplus tent. The month of May is very hot (between 35-50°C), but the shade of a large mango tree helped keep the Strong family cool. Wild animals of many kinds lived around them and, as the children grew, they learned to respect the animals they encountered and acquired a love for the wild. There were tigers, leopards, many kinds of deadly snakes, monkeys, large iguana lizards, various types of deer, wild pigs and elephants. Hunting was a way of life in those days and there were very few restrictions on what could be shot. Life was hard, the diet limited, and wild meat was appreciated for the table.</p>
                        <p>There were a few primitive tribal people called Tharus in the vicinity, who befriended the Strong family and taught them the ways of the wild animals. Later some land was given to the Tharu people and the Mission assisted them in setting up housing and agricultural projects to help them earn a living. Sadly, Maxton and Shirley’s oldest son, Jack, died of a fever in the early years, and years later their younger son, Jay, also died in a tractor accident. During that time, they had two more daughters, Carol and Rebecca, who eventually returned to the USA to live.</p>
                        <p></p>
                    </div>

                </div>
            </div>
        </section>


        <!-- =========================
            DETAIL SECTION   
        ============================== -->
        <section id="detail" class="parallax-section">
            <div class="container">
                <div class="row">
                    <?php
                        $qry1 = "select count(*) from orphanage_details";
                        $res_cnt = $conn->query($qry1);
                        $orphanage_count = mysqli_fetch_row($res_cnt);
                        
                    ?>
                    <div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
                        <i class="fa fa-group"></i>
                        <h3><?php echo $orphanage_count[0] ?> Orphanages</h3>
                        <p>We are managing <?php echo $orphanage_count[0] ?> orphanages accross India.</p>
                    </div>

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                        <i class="fa fa-clock-o"></i>
                        <h3>24 Hours Services</h3>
                        <p>We are available and ready to help 24 Hours for you. We need support.</p>
                    </div>

                    <div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
                        <i class="fa fa-microphone"></i>
                        <h3>Hear about us on</h3>
                        <p>Instagram @shephardOrganization <br>
                        <p>Facebook @shephardOrganization <br>
                        <p>Radio Mirchi @9 A.M.</p>
                    </div>

                </div>
            </div>
        </section>


        <!-- =========================
            VIDEO SECTION   
        ============================== -->
        <section id="video" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.3s">
                        <h2>Introduction Video</h2>
                        <p>For more than 70 years, with the help of caring individuals worldwide and a lot of hard work, we wake up each day with the same goal: to bring as much love to as many unwanted children as possible. It’s not always easy, it comes with a long list of challenges to overcome… but we are doing it! Lives are being changed and stories rewritten. We are excited to have you along for the ride. Take a look at our introduction video, it was put together by long time friend of our organization, Shubham.</p>
                    </div>
                    <div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.6s">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XDPwXQjAlB0" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- =========================
            VOLUNTEER SECTION   
        ============================== -->
        <section id="volunteer" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <h1 class="wow fadeInUp" data-wow-delay="1.6s">LOOKING TO VOLUNTEER?</h1>
                        <h3 style="color:dodgerblue;">See how you can make a difference</h3>
                        <h2>First Step:</h2>
                        <h3>Learn what it means to volunteer with us.</h3>
                        <h2>Second Step:</h2>
                        <h3>Read our Frequently Asked Questions Page for answer to all your concerns.</h3>
                        <h2>Third Step:</h2>
                        <h3>Apply to Volunteer via our online form. It's quict and easy to do.</h3>
                        <a href="#" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s" disabled>APPLY TO VOLUNTEER</a><h4 id="err">We are not taking registeration right now due to Corona Virus</h3>
                    </div>
                </div> 
            </div>
        </section>
        <img class="volunteerImg" src="images/volunteerWork.JPG">
        <img class="volunteerImg" src="images/volunteerWork1.JPG">
        <img class="volunteerImg" src="images/volunteerWork3.JPG">

                

        <!-- =========================
            Support SECTION   
        ============================== -->
        <section id="speakers" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 wow bounceIn">
                        <div class="section-title">
                            <h2>Our 6 Pillars</h2>
                            <p>The majority of our work can be divided up into what we call our 6 Pillars. Each one a separate field that supports or lifts up our organization as a whole:</p>
                        </div>
                    </div>

                    <!-- Testimonial Owl Carousel section
                    ================================================== -->
                    <div id="owl-speakers" class="owl-carousel">

                        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
                            <div class="speakers-wrapper">
                                <img src="images/p1.jpg" class="img-responsive" alt="speakers">
                                    <div class="speakers-thumb">
                                        <h3>Our Orphanage</h3>
                                        <h6>Our orphanage is the very heart of what we do, our children inspire us and we hope, as you look around, they will inspire you!</h6>
                                    </div>
                            </div>
                        </div>

                        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                            <div class="speakers-wrapper">
                                <img src="images/p2.jpg" class="img-responsive" alt="speakers">
                                    <div class="speakers-thumb">
                                        <h3>Our School</h3>
                                        <h6>To generate income while educating our kids we run a great kindergarten, primary and high school!</h6>
                                    </div>
                            </div>
                        </div>

                        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
                            <div class="speakers-wrapper">
                                <img src="images/p3.jpg" class="img-responsive" alt="speakers">
                                    <div class="speakers-thumb">
                                        <h3>Our Farm</h3>
                                        <h6>To save costs, feed our big family and generate some funds ourselves, we run a large farm, dairy, fish tanks and more!</h6>
                                    </div>
                            </div>
                        </div>

                        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                            <div class="speakers-wrapper">
                                <img src="images/p4.jpg" class="img-responsive" alt="speakers">
                                    <div class="speakers-thumb">
                                        <h3>Leprocy Mission</h3>
                                        <h6>For more than 40 years we have cared for families suffering from leprosy, providing them with food, a home and support.</h6>
                                    </div>
                            </div>
                        </div>

                        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                            <div class="speakers-wrapper">
                                <img src="images/p5.jpg" class="img-responsive" alt="speakers">
                                    <div class="speakers-thumb">
                                        <h3>Disaster Relief</h3>
                                        <h6>In times of need we believe we should support each other; be it floods, earthquakes or landslides we are here to help.</h6>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                            <div class="speakers-wrapper">
                                <img src="images/p6.jpg" class="img-responsive" alt="speakers">
                                    <div class="speakers-thumb">
                                        <h3>Vocational Training</h3>
                                        <h6>One of our latest projects is the running of vocational sewing and computer training courses for the local community!</h6>
                                    </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- =========================
            OVERVIEW SECTION 2 
        ============================== -->
        <section id="overview" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
                        <h3>Our Orphan Children</h3>
                        <p>Please take some time to sit and browse through the rest of our orphanages website, we do our best to update it regularly. There is plenty of information to see that we hope will bring you closer to understanding us, our orphans, our goals and our dreams. If you are looking for volunteering information or volunteer work with our orphans please take a look at our visitors information section.</p>
                    </div>

                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
                        <img src="images/children.JPG" class="img-responsive" alt="Overview">
                    </div>

                </div>
            </div>
        </section>

        <!-- =========================
            OVERVIEW SECTION 3  
        ============================== -->
        <section id="overview" class="parallax-section">
            <div class="container">
                <div class="row">
                    
                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
                        <img src="images/welcome.jpeg" class="img-responsive" alt="Overview">
                    </div>

                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
                        <h3>Welcome to the Family!</h3>
                        <p>So take a look around our website; meet the team, see what we do. We would love to get to know you more, learn about how you heard of our organization and also hear any thoughts or ideas that you might have. If you are interested in volunteering or donating, please click the appropriate buttons below. We cannot do this work alone so we’re glad you’re here. Welcome to the family!</p>
                    </div>

                </div>
            </div>
        </section>


        <!-- =========================
           REGISTERATION SECTION   
        ============================== -->
        <section id="register" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
                        <h1>Select your option</h1>
                        <h3>If you are admin then only you can register new Orphanage</h3>
                        How to fill form? <a href="#faq" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">SEE FAQ's</a>
                    </div>

                    <div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
                        <center>
                            <a href="adoption_form.php" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">ADOPTION FORM</a><br><br>
                            <a href="orphan_form.php" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NEW ORPHAN</a><br><br>
                            <a href="orphanage_form.php" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NEW ORPHANAGE</a>
                        </center>
                    </div>

                    <div class="col-md-1"></div>

                </div>
            </div>
        </section>
        
                
        <!-- =========================
            FAQ SECTION   
        ============================== -->
        <section id="faq" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
                    ================================================== -->
                    <div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
                        <div class="section-title">
                            <h2>Do you have Questions?</h2>
                        </div>
                    </div>

                    <div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                             How to register orphans?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>Open <a href="index.php">this link</a></p>
                                        <p>Click on registration menu</p>
                                        <p>Click on Orphan Registration tab</p>
                                        <p>Fill the form and submit.</p>
                                    </div>
                                 </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How to register my Orphanage?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Open <a href="index.php">this link</a></p>
                                        <p>Click on registration menu</p>
                                        <p>Click on Orphanage Registration tab</p>
                                        <p>Fill the form and submit.</p>
                                    </div>
                                 </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How to donate?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Open <a href="index.php">this link</a></p>
                                        <p>Click on "Donate" menu</p>
                                        <p>Fill the details and payment form</p>
                                        <p>Submit the form</p>
                                    </div>
                                 </div>
                             </div>

                         </div>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- =========================
            CONTACT SECTION   
        ============================== -->
        <section id="contact" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
                        <div class="contact_des">
                            <h3>Stay in touch with us</h3>
                            <p>We always need your help to give the childrens their best future.</p>
                            <a href="donations.php" class="btn btn-danger">DONATE FOR A CHILD</a>
                            <h3>VENUE</h3>
                            <h5>SHEPHARD ORGANIZATION<br>UPPER INDIRA NAGAR<br>BIBWEWADI<br>PUNE-411037</h5>
                        </div>
                    </div>

                    <div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
                        <div class="contact_detail">
                            <div class="section-title">
                                <h2>Keep in touch</h2>
                                <p><?php if(isset($_SESSION["status"])){
                                   echo $_SESSION["status"];
                                   unset( $_SESSION["status"]);
                                        }
                                    ?></p>
                            </div>
                            <form action="contact.php" method="post">
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                                <input type="tel" name="tele" class="form-control" id="tele" placeholder="Enter Your contact" pattern="[0-9]{10}" required>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Your Email ID" required>
                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="Your Message" required></textarea>
                                <div class="col-md-6 col-sm-10">
                                    <input type="submit" class="form-control" name="submit_contact" id="submit_contact" value="SEND">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- =========================
            FOOTER SECTION   
        ============================== -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2020 SHEPHARD ORGANIZATION

                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
                            <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
                            <li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
                            <li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
                            <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </footer>


        <!-- Back top -->
        <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


        <!-- =========================
             SCRIPTS   
        ============================== -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>