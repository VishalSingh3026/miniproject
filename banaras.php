<?php
$conn = mysqli_connect("localhost","root", "", "travelhowl");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM crowd_rating';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600, 700,900|Oswald:400,700" rel="stylesheet">


  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/fancybox.min.css">

  <link rel="stylesheet" href="css/style.css">


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="header-bar d-flex d-lg-block align-items-center site-navbar-target" data-aos="fade-right">
      <div class="site-logo">
        <a href="index.html">BANARAS-KASHI</a>
      </div>

      <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle "><span class="icon-menu h3"></span></a></div>

      <div class="main-menu">
        <ul class="js-clone-nav">
          <li><a href="./index.html" class="nav-link">Home</a></li>
          <li><a href="#section-photos" class="nav-link">Photos</a></li>
          <li><a href="#section-about" class="nav-link"> Trip Plan</a></li>
          <li><a href="#section-about" class="nav-link"> Food</a></li>
          <li><a href="#section-testimonial" class="nav-link">Testimonial</a></li>
          <li><a href="#section-blog" class="nav-link">Blog</a></li>
         
        </ul>
        <ul class="social js-clone-nav">
          <li><a href="#"><span class="icon-instagram"></span></a></li>
          <li><a href="#"><span class="icon-facebook"></span></a></li>
          <li><a href="#"><span class="icon-twitter"></span></a></li>
          <li><a href="#"><span class="icon-linkedin"></span></a></li>
        </ul>
      </div>
    </header> 
    <main class="main-content">

      <section class="site-section-hero bg-image mb-5" style="background-image: url('images/pexels-chandi-saha-18728098.jpg');"  data-stellar-background-ratio="0.5" id="section-home">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-7 text-center">
            <h1 class=" heading text-uppercase text-white" data-aos="fade-up">BANARAS-KASHI</h1>
            <p data-aos="fade-up" data-aos-delay="100"><a href="review.html" class="btn btn-primary btn-md smoothscroll">Give Review</a></p>
          </div>
        </div>
      </section>

      <div class="container-fluid site-section">


        <div class="row mb-3">
          <div class="col-12 text-center">
            <h2 class="heading">Photos</h2>
          </div>
        </div>

        <section class="row align-items-stretch photos" id="section-photos">
          <div class="col-12">
            <div class="row align-items-stretch">

              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="images/pexels-chandi-saha-18728098.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="images/pexels-chandi-saha-18728098.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="images/pexels-stijn-dijkstra-16745037.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="images/pexels-stijn-dijkstra-16745037.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
              <a href="images/pexels-chandi-saha-18728098.jpg" class="d-block photo-item" data-fancybox="gallery">
                <img src="images/desktop-wallpaper-ghat-of-ganges-night-ganga-varanasi-thumbnail.jpg" alt="Image" class="img-fluid mb-0">
                <div class="photo-text-more">
                  <span class="icon icon-eye"></span>
                </div>
              </a>
            </div>


          </div>
        </section> <!-- #section-photos -->

        <section class="site-section" id="section-about">
          <div class="container">
            <div class="row justify-content-center">

              <div class="col-md-8">

                <!-- <h2 class="heading">About</h2> -->

                <?php
                     echo "<h2>Crowd Alert: " .$row['banaras']. "</h2>";
                ?>

                <div class="crd1"><img src="./crowd-removebg-preview.png" alt="" srcset=""></div>

                <br>
                <br>
                <div data-aos="fade-up"  data-aos-delay="100">
                  <h2 class="">Best Trip Plan</h2>
                  <p> Banaras, also known as Varanasi, is a city located on the banks of the Ganges River in the northern Indian state of Uttar Pradesh. It is one of the oldest continually inhabited cities in the world and is considered a holy city in Hinduism, Jainism, and Buddhism. Banaras is known for its numerous temples, ghats (steps leading down to the river), and vibrant cultural and religious traditions.
                  <p>It has been a center of learning and culture for centuries, with many famous scholars and philosophers, including Adi Shankara and Kabir, calling it home.</p>
                  <h3 class=" mt-5">MUST VISIT </h3>
                  
                  <div class="d-block d-md-flex mt-5">
                    <div class="mr-md-auto mr-2">
                      <ul class="ul-check list-unstyled primary">
                        <li>KASHI VISHWANATH TEMPLE</li>
                        <li>MAA ANNAPURNA TEMPLE</li>
                        <li>DURGA KUND</li>
                      
                      </ul>
                    </div>
                    <div class="mr-md-auto">
                      <ul class="ul-check list-unstyled primary">
                        <li>KAAL BHAIRAV MANDIR</li>
                        <li>PRACHIN HANUMAN MANDIR</li>
                        <li>BHU BANARAS HINDU UNIVERSITY</li>
                      </ul>
                    </div>

                    <div class="mr-md-auto">
                      <ul class="ul-check list-unstyled primary">
                        <li>KAAL BHAIRAV MANDIR</li>
                        <li>PRACHIN HANUMAN MANDIR</li>
                        <li>BHU BANARAS HINDU UNIVERSITY</li>
                      </ul>
                    </div>

                  </div>

        <section class="plans" style="display:flexbox">
        <h2 class="sub-title" style="display: flex;">Tour Plans</h2>
        <div class="trending" style="display: flex; gap:30px">
            <div>
                <a href="./daywise.html" target=""> <img style="height: 250px; width:250px"  src="./images/pexels-a-p-14676832.jpg" alt="banaras"></a>
                <h5>2Day/1Night<br/>Plan</h5>
                    
            </div>
            <div>
              <a href="./varanasi1day.html" target=""> <img style="height: 250px; width:250px"  src="./images/pexels-chandi-saha-18728098.jpg" alt="banaras"></a>
              <h5>1Day/1Night<br/>Plan</h5>
                  
          </div>
          <div>
            <a href="./varanasi3d.HTML" target=""> <img style="height: 250px; width:250px"  src="./images/varanasi-pilgrimage-tour.jpg" alt="banaras"></a>
            <h5>3Day/2Night<br/>Plan</h5>
                
        </div>
        </div>
      </section>


                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="site-section" id="section-explore">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="row">
                  <h2 class="heading"  data-aos="fade-up">EXPLORE</h2>
                  <div class="col-md-12 mb-4" data-aos="fade-up">
                    <div class="d-md-flex d-block blog-entry align-items-start">
                      <div class="mr-0 mr-md-5 mb-3 img-wrap"><a href="#"><img src="images/pexels-a-p-14676831.jpg" alt="Image" class="img-fluid mb-0"></a></div>
                      <div>
                        <h2 class="mt-0 mb-2"><a href="#">Ratneshwar Mahadev temple</a></h2>
                        <div class="meta mb-3">Posted by Keshav <a href="#">Jan 18, 2024</a></div>
                        <p>The temple in Manikarnika Ghat is located in front to the Tarkeshwar Mahadev Mandir[11] built in 1795 by Ahilyabai Holkar,[12] where Lord Shiva is said to recite the Taraka Mantra (salvation mantra). </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 mb-4" data-aos="fade-up">
                    <div class="d-md-flex d-block blog-entry align-items-start">
                      <div class="mr-0 mr-md-5 mb-3 img-wrap"><a href="#"><img src="images/pexels-chandi-saha-18728098.jpg" alt="Image" class="img-fluid mb-0"></a></div>
                      <div>
                        <h2 class="mt-0 mb-2"><a href="#">Manikarnika Ghat </a></h2>
                        <div class="meta mb-3">Posted by Dhey <a href="#">Jan 19, 2024</a></div>
                        <p>Manikarnika Ghat is one of the oldest ghats in Varanasi and has been accorded the highest position among other ghats by the holy scriptures in Hinduism. It is believed that if a person is cremated here, he immediately attains moksha (salvation). It is bound on both sides by the Scindia Ghat and Dashashwamedh Ghat.  Like all the other ghats in Varanasi, the Manikarnika Ghat is surrounded by a fascinating mythological story which also tells us how it acquired its name. It is believed that when Goddess Adi Shakti, or Goddess Sati, jumped into the fire and immolated herself, Lord Shiva carried her burning body to the Himalayas.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      <!-- Recent traveller feedback  -->
      <section class="site-section" id="section-testimonial">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="heading">Testimonial</h2>

              <div class="row justify-content-center">
                <div class="col-md-12">

                  <div class="owl-carousel slide-one-item home-slider">

                    <div class="testimony text-center px-md-4">
                      <figure class="mx-auto d-inline-block">
                        <img src="images/person_2.jpg" alt="Free Template by Untree.co" class="mx-auto img-fluid w-25 rounded-circle">
                      </figure>
                      <p class="text-black"><strong>Jorge Smith</strong></p>
                      <blockquote>
                        <p>&ldquo;"Our guided tour with Krishna Jhunjunwala was the highlight of our trip to Varanasi. His deep knowledge of the city history and culture, coupled with his friendly demeanor, made for an unforgettable experience."&rdquo;</p>
                      </blockquote>
                    </div>

                    <div class="testimony text-center px-md-4">
                      <figure class="mx-auto d-inline-block">
                        <img src="images/person_3.jpg" alt="Free Template by Untree.co" class="mx-auto img-fluid w-25 rounded-circle">
                      </figure>
                      <p class="text-black"><strong>Ben Crawford</strong></p>
                      <blockquote>
                        <p>&ldquo;"I highly recommend Harshit Srivastav to anyone visiting Varanasi. His passion for the city is infectious, and he went above and beyond to ensure we had a memorable and enriching experience."&rdquo;</p>
                      </blockquote>
                    </div>

                    <div class="testimony text-center px-md-4">
                      <figure class="mx-auto d-inline-block">
                        <img src="images/person_2.jpg" alt="Free Template by Untree.co" class="mx-auto img-fluid w-25 rounded-circle">
                      </figure>
                      <p class="text-black"><strong>Jorge Smith</strong></p>
                      <blockquote>
                        <p>&ldquo;"Our guided tour with Krishna Jhunjunwala was the highlight of our trip to Varanasi. His deep knowledge of the city history and culture, coupled with his friendly demeanor, made for an unforgettable experience."&rdquo;</p>
                      </blockquote>
                    </div>

                    <div class="testimony text-center px-md-4">
                      <figure class="mx-auto d-inline-block">
                        <img src="images/person_3.jpg" alt="Free Template by Untree.co" class="mx-auto img-fluid w-25 rounded-circle">
                      </figure>
                      <p class="text-black"><strong>Ben Crawford</strong></p>
                      <blockquote>
                        <p>&ldquo;"I highly recommend Harshit Srivastav to anyone visiting Varanasi. His passion for the city is infectious, and he went above and beyond to ensure we had a memorable and enriching experience."&rdquo;</p>
                      </blockquote>
                    </div>

                    <div class="testimony text-center px-md-4">
                      <figure class="mx-auto d-inline-block">
                        <img src="images/person_2.jpg" alt="Free Template by Untree.co" class="mx-auto img-fluid w-25 rounded-circle">
                      </figure>
                      <p class="text-black"><strong>Jorge Smith</strong></p>
                      <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde tenetur quis facilis quam optio voluptate totam placeat, doloremque. Sit repellat ipsum dolor fugit similique itaque maxime saepe ipsam. Velit, harum!&rdquo;</p>
                      </blockquote>
                    </div>

                    <div class="testimony text-center px-md-4">
                      <figure class="mx-auto d-inline-block">
                        <img src="images/person_3.jpg" alt="Free Template by Untree.co" class="mx-auto img-fluid w-25 rounded-circle">
                      </figure>
                      <p class="text-black"><strong>Ben Crawford</strong></p>
                      <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde tenetur quis facilis quam optio voluptate totam placeat, doloremque. Sit repellat ipsum dolor fugit similique itaque maxime saepe ipsam. Velit, harum!&rdquo;</p>
                      </blockquote>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
       <!-- travelling Blogs  -->
       <section class="site-section" id="section-blog">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="row">
                <h2 class="heading"  data-aos="fade-up">Local Guides</h2>
                <div class="col-md-12 mb-4" data-aos="fade-up">
                  <div class="d-md-flex d-block blog-entry align-items-start">
                    <div class="mr-0 mr-md-5 mb-3 img-wrap"><a href="#"><img src="images/WhatsApp Image 2024-02-08 at 12.33.54 AM (1).jpeg" alt="Image" class="img-fluid mb-0"></a></div>
                    <div>
                      <h2 class="mt-0 mb-2"><a href="#">Krishna Jhunjunwala</a></h2>
                      <div class="meta mb-3">Posted by travelhowl on <a href="#">Jan 10, 2024</a></div>
                      <p>I am a passionate and knowledgeable tour guide based in the spiritual city of Varanasi, where every corner tells a story of ancient traditions, spirituality, and cultural richness. With years of experience in guiding visitors through the maze-like lanes and along the sacred ghats of Varanasi, I am dedicated to providing an immersive and insightful experience that captures the essence of this timeless city.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-4" data-aos="fade-up">
                  <div class="d-md-flex d-block blog-entry align-items-start">
                    <div class="mr-0 mr-md-5 mb-3 img-wrap"><a href="#"><img src="images/WhatsApp Image 2024-02-08 at 12.35.10 AM.jpeg" alt="Image" class="img-fluid mb-0"></a></div>
                    <div>
                      <h2 class="mt-0 mb-2"><a href="#">Harshit Srivastav</a></h2>
                      <div class="meta mb-3">Posted by travelhowl on <a href="#">Jan 12, 2024</a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-4" data-aos="fade-up">
                  <div class="d-md-flex d-block blog-entry align-items-start">
                    <div class="mr-0 mr-md-5 mb-3 img-wrap"><a href="#"><img src="images/WhatsApp Image 2024-02-08 at 12.29.05 AM.jpeg" alt="Image" class="img-fluid mb-0"></a></div>
                    <div>
                      <h2 class="mt-0 mb-2"><a href="#">Vedang Tiwari</a></h2>
                      <div class="meta mb-3">Posted by travelhowl on <a href="#">Jan 18, 2024</a></div>
                      <p>the guide expertise, services offered, languages spoken, certifications, and contact information, providing potential clients with a comprehensive overview of what they can expect from their tour experience in Varanasi.</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 text-center">
                  <div class="custom-pagination">
                    <span>1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <span>...</span>
                    <a href="#">7</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <marquee behavior="" direction="">
        <div id="reviewsList" style="display:flex;flex-direction:row;gap:30px">
          <h2>Recent Reviews</h2>
          <ul id="reviewsList"></ul>
        </div>
      </marquee>
     
      

        <div class="row justify-content-center">
          <div class="col-md-12 text-center py-5">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by Travelhowl
            </p>
          </div>
        </div>
      </div>
    </main>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/lozad.min.js"></script>
  

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script>
    loadReviews();
    function loadReviews(){
      fetch("get_reviews.php")
      .then(response => response.text())
      .then(data => {
          document.getElementById("reviewsList").innerHTML = data;
      })
      .catch(error => console.error(error));
  }
  </script>
  </body>
</html>
