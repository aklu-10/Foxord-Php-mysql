<?php
    include_once('Components/Header.php');
    include_once('Components/Navbar.php');
?>


<section class="hero ">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
    
        <section class="mainBanner">

            <h2>We Are</h2>
            <h1>WORLD'S BIGGEST <br> <span>UNIVERSITY</span></h1>
            <p>Lorem ipsum dolor sit amet consecteto facere quibusdam cum quam nisi similique soluta error totam officia, suscipit eveniet ducimus corrupti pariatur tempore consectetur.</p>

        </section>

        <section class="academics">

            <div class="box1">
            </div>
            <div class="box2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sunt atque odio aliquam temporibus dolorem aliquid rerum nobis! Quos eaque dolores nihil sunt qui officia nesciunt, quam ut vero fugiat?psum sunt atque odio aliquam temporibus dolorem aliquid rerum nobis! Quos eaque dolores nihil sunt qui officia nesciunt, quam ut vero fugiat?spsum sunt atque odio aliquam temporibus dolorem aliquid rerum nobis! Quos eaque dolores nihil sunt qui officia nesciunt, quam ut vero fugiat?</p>

                <button>Explore</button>
            </div>

        </section>

        <section class="courses">

                <h2 class="title">COURSES WE OFFER</h2>

                <div class="courses_item">

                    <div class="item">
                        <h2>MCA</h2>
                        <h5>2 years</h5>
                    </div>
                    <div class="item">
                        <h2>BCA</h2>
                        <h5>3 years</h5>
                    </div>
                    <div class="item">
                        <h2>BTECH</h2>
                        <h5>4 years</h5>
                    </div>
                    <div class="item">
                        <h2>POLYTECHNIC</h2>
                        <h5>2 years</h5>
                    </div>
                    <div class="item">
                        <h2>BFA</h2>
                        <h5>4 years</h5>
                    </div>
                    <div class="item">
                        <h2>MCA</h2>
                        <h5>4 years</h5>
                    </div>

                </div>

        </section>

        
        <section class="courses campus">

            <h2 class="title">OUR GLOBAL CAMPUS</h2>

            <div class="courses_item">

                <div class="item">
                    <img src="img/slide1.jpg" alt="">
                    <h2>LONDON</h2>
                </div>
                <div class="item">
                    <img src="img/slide1.jpg" alt="">
                    <h2>USA</h2>
                </div>
                <div class="item">
                    <img src="img/slide1.jpg" alt="">
                    <h2>PARIS</h2>
                </div>

            </div>

    </section>



    <section class="contact">

        <img src="img/slide1.jpg" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus in cum placeat cumque magnam rerum facere, voluptatem aspernatur voluptas molestiae debitis et libero animi eum, labore quo autem, deserunt doloribus?</p>
        <a href="http://localhost/university/Pages/Enquiry.php"><h2 class="btn btn-danger">CONTACT US</h2></a>

    </section>






<?php
    include_once('Components/Footer.php');
?>