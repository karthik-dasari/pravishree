<?php
    include("connect.php");
    $posted=false;
    if(isset($_POST['reg'])){
        $posted=true;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $sql = "INSERT INTO data (name,email,subject,message) VALUES ('$name','$email', '$subject','$message')";
        mysqli_query($db,$sql);
        $done=true;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pravishree Design Co</title>

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php
    if( $posted ) 
    if($done)
        echo "<script type='text/javascript'>alert('Send successfully')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Pravishree</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Modern solutions for growing your business</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of young professionals working hard to bring all Graphics works into a single platform</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <!-- <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="1">
          <!-- <img src="assets/img/hero-img.png" class="img-fluid" alt=""> -->
          <video autoplay loop>
            <source src="assets/img/pravishree-hero.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>We offer a wide range of services in designing, animation, marketing and consultations for a variety of events and requirements from business to personal for our varied clients from different parts of the world.</h2>
              <p>
                We are based at Vishakapatnam with pioneers in digital media exberance. We thrive to deliver creative and innovative solutions. 

                We support in all niche requirements across Graphics, multimedia, 2D & 3D Animations, Advertisement, Web designing, applications, E- learning, digital marketing and several other domains.
              </p>
              <!-- <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Effectiveness without values is a tool without a purpose</p>
        </header>

        <div class="row">

          <div class="col-lg-3">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/Agile-speed.jpg" class="img-fluid valueimg" alt="">
              <h3>Agile speed</h3>
              <p>We tune to the requirement with utmost attention and commitment in no time to deliver.</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/Synergy.png" class="img-fluid valueimg" alt="">
              <h3>Synergy</h3>
              <p>We get on to the  same page with client to pump the accurate results.</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/owner.png" class="img-fluid valueimg" alt="">
              <h3>Ownership</h3>
              <p>When Pavishree is in, every resource of us is with you.</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/winning.png" class="img-fluid valueimg" alt="">
              <h3>Winner's mindset</h3>
              <p>We stand out in the market with our services in every delivery.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>We deliver speed, quality and creativity in everything we do</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-edit-box-line icon"></i>
              <h3>Graphic Design</h3>
              <p>We look into the designing of Posters, Logos, Websites, Application, Banners, Business Cards, Letterheads & Envelops, Invitations, etc. customized uniquely as per the requirements of our clients for their business as well as personal works.</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-video-add-line icon"></i>
              <h3>Animation & Videography</h3>
              <p>We offer services for 2D & 3D animations, photo, video & audio editing and enhancing in various sectors like company advertisements, launch videos and posters, personal and intimate functions like marriages and personalised gifts.</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-broadcast-line icon"></i>
              <h3>Social Media Marketing & Management</h3>
              <p>We take up branding and marketing for companies and brands to enhance their clientele by suggesting and implementing strategies for strengthening their presence on the social platforms (online and offline).</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-book-open-line icon"></i>
              <h3>Online Classes & Consultancy</h3>
              <p>We offer online classes for different design and Technical softwares like AutoCAD, Photoshop, Revit, Microsoft Office as well as Graphic Design workshops.</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-window-line icon"></i>
              <h3>Web & Android development</h3>
              <p>Our team develop personalized, unique websites that convene your business goals while enhancing your brand.</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div> -->

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portfolio</h2>
          <p>Check our latest work</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-logo">Logo</li>
              <li data-filter=".filter-poster">Poster</li>
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-other">Others</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Any_Time_Cakes_poster.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Any Time Cakes</h4>
                <p>Poster</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Any_Time_Cakes_poster.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Any Time Cakes Poster"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Frostrate_poster.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Frostrate</h4>
                <p>Poster</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Frostrate_poster.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Frostrate Poster"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rabbit_reviews_poster_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rabbit reviews</h4>
                <p>Poster</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/rabbit_reviews_poster_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Rabbit reviews Poster"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/HAckersdady_poster_2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hackersdady</h4>
                <p>Poster</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/HAckersdady_poster_2.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Hackersdady Poster"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/HAckersdady_poster_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hackersdady</h4>
                <p>Poster</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/HAckersdady_poster_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Hackersdady Poster"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Hackersdady_logo_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hackersdady</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Hackersdady_logo_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Hackersdady Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Maruthi_builders_logo_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Maruthi builders</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Maruthi_builders_logo_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Maruthi builders Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/PK_Kurmannapalem_fans_logo_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PK Kurmannapalem fans</h4>
                <p>Poster</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/PK_Kurmannapalem_fans_logo_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="PK Kurmannapalem fans Poster"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rabbit_reviews_logo.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rabbit reviews</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/rabbit_reviews_logo.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Rabbit reviews Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/The_social_matters_logo.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>The social matters</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/The_social_matters_logo.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="The social matters Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Lead_skanda_logo_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lead skanda</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Lead_skanda_logo_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lead skanda Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-other">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Frostrate_brochure_design.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Frostrate</h4>
                <p>Brochure design</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Frostrate_brochure_design.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Frostrate Brochure design"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/integrity_ship_chandlers_logo.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Integrity ship chandlers</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/integrity_ship_chandlers_logo.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Integrity ship chandlers Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/vignan_poster_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vignan</h4>
                <p>Poster</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/vignan_poster_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Vignan Poster"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/aadivas_foods_pvt_Ltd_logo.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Aadivas foods pvt Ltd</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/aadivas_foods_pvt_Ltd_logo.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Aadivas foods pvt Ltd Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/warey_Music_logo.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>warey Music</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/warey_Music_logo.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="warey Music Logo"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-poster">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/co_gottam_matrimony_movie_poster_1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>C/O gottam matrimony</h4>
                <p>Movie posters</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/co_gottam_matrimony_movie_poster_1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="c/o gottam matrimony Movie posters"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-logo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/aasya_foundation_logo.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Aasya foundation </h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/aasya_foundation_logo.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Aasya foundation Logo remake"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Aadivas_Foods_pvt_ltd_website.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Aadivas Foods pvt ltd</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Aadivas_Foods_pvt_ltd_website.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Aadivas Foods pvt ltd Website"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Testimonials</h2>
              <p>What they are saying about us</p>
            </header>
    
            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
              <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      We have done our logo design here. The dedication and the work is really good. I recommend anyone who are planning to do logo design do contact them. 
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/male.png" class="testimonial-img" alt="">
                      <h3>SaiGagan Bhonagiri </h3>
                      <h4>THE SOCIAL MATTERS</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Great team of people who deliver what they promise. 
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/female.png" class="testimonial-img" alt="">
                      <h3>Mallika Sehgal</h3>
                      <h4>Architect</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Excellent work and always creative. Enthusiastic people in their team.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/male.png" class="testimonial-img" alt="">
                      <h3>Sai Swaroop Mysore</h3>
                      <h4>Mysore Creative Writings</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      A slight hiccup with the downloaded files, however, I emailed the support team and the problem was rectified within 24 hours. Great customer service and a great program! I would definitely use it again, and recommend to others.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/male.png" class="testimonial-img" alt="">
                      <h3>RSS PRABHAKAR</h3>
                      <h4>Studio One Earth </h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      I have been so pleased with Pravishree Design co. ! Creating a logo with Pravishree Design Co. was by far the best decision I could have ever made!
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/male.png" class="testimonial-img" alt="">
                      <h3>Nagendra Sai Nadh Mamidi</h3>
                      <h4>Research Associate</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      An innovative approach which is very useful for everyone to fulfill their requirements or needs.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/male.png" class="testimonial-img" alt="">
                      <h3>T V V S KIRAN BABU</h3>
                      <h4>Architect</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Fantastic quality, excellent price and easy to create the perfect logo! Our new logo is receiving rave reviews. I'm a true fan of your service.
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/male.png" class="testimonial-img" alt="">
                      <h3>Abhinav Teja </h3>
                      <h4>Marina cafe n restaurant</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      Extremely happy about their work. Delivered quality results in the proposed time. 
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets/img/testimonials/female.png" class="testimonial-img" alt="">
                      <h3>Ramya</h3>
                      <h4>Snapminds</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
    
        </section><!-- End Testimonials Section -->
        
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Our Team</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/rat.jpeg" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4>Ch.Ratnakar</h4>
                <span>Founder & CEO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/praveen.jpeg" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4>Praveen</h4>
                <span>Chief Designer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/indu.png" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4>Indu</h4>
                <span>Graphic Designer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/karthik.jpg" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4>Karthik Dasari</h4>
                <span>Web & Android Developer</span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Clients</h2>
          <p>Our Happy Clients</p>
        </header>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/logo-1.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-2.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-3.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-4.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-5.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-6.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-7.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-8.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-9.jpeg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Kurmannapalem, Visakhapatnam 530049</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 8331962896</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>pravishreedesignco@gmail.com<br>pravishreedesigns@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Saturday<br>24 hours</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="post" class="form1">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">

                  <button type="submit" name="reg">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>Pravishree Design</span>
            </a>
            <p>We are team of young professionals working hard to bring all Graphics works into a single platform.</p>
            <div class="social-links mt-3">
              <a href="https://instagram.com/pravishree_design.co?igshid=11h98y9y1kafr" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/pravishree-design-co-651353211" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Animation & Videography</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Social Media Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Kurmannapalem, Visakhapatnam 530049<br>
              India <br><br>
              <strong>Phone:</strong> +91 8331962896<br>
              <strong>Email:</strong> pravishreedesignco@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Pravishree Designs</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Pravishree team
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>