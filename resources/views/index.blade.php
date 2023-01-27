@include('header')
<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/tour.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Justine Odongo</a></h1>
        <div class="social-links mt-3 text-center">     
          <a href="tel:+256784460162" class="phone"><i class="bi bi-telephone-outbound-fill"></i></a>
          <a href="{{('mailto:justincampdiop@gmail.com')}}" class="e-mail"><i class="bi bi-envelope"></i></a>
          <a href="https://twitter.com/justinecampdiop" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://wa.me/256784460162" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://www.linkedin.com/in/justine-odongo-56163625b" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{('#hero')}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{('#about')}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{('#resume')}}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="{{('#portfolio')}}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="{{('#contact')}}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>JUSTIN CAMPDIOP</h1>
      <p>I'm <span class="typed" data-typed-items="a Developer, an Analyst, a Writer, Also a Student"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/function.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Analyst, Web Developer.</h3>
            <p class="fst-italic">
            
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>24 Oct 2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                    <span>
                        <a href="tel:+256784460162" class="phone"><i class="bi bi-telephone-outbound-fill"></i> +256 784 460 162</a>
                    </span>
                </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong><span>Lira, Uganda</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Justine Odongo</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
                  <li><i class="bi bi-chevron-right"></i> 
                  <strong>e-mail:
                  </strong>
                  <span>
                    <a href="{{('mailto:justincampdiop@gmail.com')}}" class="e-mail"><i class="bi bi-envelope">
                    </i>Send an e-mail</a></span>
                </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available on Appointment</span></li>
                </ul>
              </div>
            </div>
            <h2>Hi,I Am Justine, An Analyst And a web Developer </h2>
           <P>
            As a teenager I fell in love with the art of writing
            obsessing over the way professional analysts in sofware and media houses perform their daily duties.
           I was pretty thrilled when I
             discovered that writing articles was an actual job one could get paid to do, so 
             I immediately dropped my dream of becoming an Electrical Engineer (yes, really) and set my sights on being a political analyst.
          </P> 

                <p>
                  Years later, I’m still obessed about the way my pieces of writings get the public view across the globe.
                  Interestingly, I had my Literature class way back in 2017 and in 2018 denied an offer for a Literature class for High 
                  school in one of the top schools in the capital city,Kampala-Uganda.
                </P>
                  <hr>
                <p>
                  OOOPs, the dream for the UCE chemistry exam could not and will never go off the memory of the classmates at Tororo College.
                  It was so Sad but that Destiny changed the story and now I sit as both a media analyst and prospecful Software Engineer.
                  
                I’ve been working in-house at tech companies for a few years now designing marketing sites, landing pages, campaigns and helping those 
                in need secure scholarships abroad. I love this career, and it’s my personal mission to help anyone else who falls in love with Anything related 
                to Analysis and critical thinking.
              </p>
                 <hr>
                <p>
                  These days I am getting the grip on running a news website and a Programming Learning Website applying what I have learnt so far in the Industry.
                  I work remotely from Uganda as I take my classes
                </p> 

                <p>
                  On the side, I prefer to live a quiet and humble life. I only allow what I do to speak for themselves  and I would have loved to see 
                  when I was learning how to level up in my career, in the hope that it can help others.
                  grow and excel.            
                </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
          <div>
            <img src="assets/img/portfolio/html.jpeg" class="img-fluid" alt="">
            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <hr>
          </div>
          
          <div>
            <img src="assets/img/portfolio/css.jpeg" class="img-fluid" alt="">
            <div class="progress">
              <span class="skill">CSS <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <hr>
          </div>  

          <div>
            <img src="assets/img/portfolio/js.jpeg" class="img-fluid" alt="">
            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <hr>  
          </div>    
          </div>


          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div>
              <img src="assets/img/portfolio/php.png" class="img-fluid" alt="">
              <div class="progress">
                <span class="skill">PHP <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <hr>
          </div>

            <div>
              <img src="assets/img/portfolio/photoshop.jpeg" class="img-fluid" alt="">
              <div class="progress">
                <span class="skill">Photoshop <i class="val">40%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <hr>
            </div>

           <div>
              <img src="assets/img/portfolio/articles.jpeg" class="img-fluid" alt="">
              <div class="progress">
                <span class="skill">Article  Writing <i class="val">95%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
              <hr>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->
<!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Current Facts Check</h2>
          <p></p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects </strong>Set for Completion</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>International invitations</strong>for Summer Break</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support </strong>on Academia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="40000" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Followers </strong>On Postnow</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>With Great Work Comes Great Responsibilities. I am Always There When You Need Me</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Justine Odongo</h4>
              <p>
                <em>
                  A very Passionate and down to earth Software Engineering Student at Makerere University with 4+ years
                   of experience in Political and criminal Analysis with over 40,000 followers across the globe.
              </em>
              </p>
              <ul>
                <li>Makerere University, Kampala Uganda</li>
                <li><a href="tel:+256784460162" class="phone"><i class="bi bi-telephone-outbound-fill"></i> +256 784 460 162</a></li>
                <li><a href="mailto:justincampdiop@gmail.com">justincampdiop@gmail.com </a></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelors in Software Engineering</h4>
              <h5>2020 - Date</h5>
              <p><em>Makerere University,Uganda</em></p>
              <p></p>
            </div>
            <div class="resume-item">
              <h4>Uganda Advanced Certificate of Education(UACE)</h4>
              <h5>2017 - 2019</h5>
              <p><em>Naalya S.S, Bweyogerere, Kampala, Uganda</em></p>
              <P>something</P>
            </div>
            <div class="resume-item">
              <h4>Uganda Certificate of Education(UCE)</h4>
              <h5>2017 - 2019</h5>
              <p><em>St.Peter's College Tororo, Uganda</em></p>
              <p></p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior Political and Criminal Analyst with Postnow Uganda</h4>
              <h5>2019 - Present</h5>
              <p><em>Kampala, Uganda, East Africa </em></p>
              <ul>
                <li>Write Professional Articles, guide other Writers, and implement company rules and strive for production of communication materials</li>
                <li>Complete assigned tasks by Editors especially Articles with much critical and provide needed quality. </li>
                <li>Introduce New Writers where and when Necessary</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Web Developer</h4>
              <h5>2020 - Date</h5>
              <p><em>Self Employed</em></p>
              <ul>
                <li>Developed numerous websites and platforms, presentations, and advertisements</li>
                <li>Managed up to 3 projects at a given time while under pressure</li>
                <li>Recommended and consulted with clients and take on their plights</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Security Analyst</h4>
              <h5>2020-2021</h5>
              <p><em>Uganda Police Force</em></p>
              <ul>
                <li>Give Commanders a complete view of the Criminal records within a specified time</li>
                <li>Write reports to senior commanders when and where required</li>
                <li>Take or give instructions when required</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <section id="portfolio" class="portfolio section">
       <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Expectations</li>
              <li data-filter=".filter-card">Live Server</li>
              <li data-filter=".filter-web">Challenges</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/presentation.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('Sassets/img/portfolio/presentation.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/cocis.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/cocis.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="{{('portfolio-details.html')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/cocis2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/.cocis2jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <diSv class="portfolio-wrap">
              <img src="assets/img/portfolio/work.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/work.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="{{('portfolio-details.html ')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </diSv>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="{{('portfolio-details.html')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="{{('portfolio-details.html')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{('assets/img/portfolio/.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="{{('portfolio-details.html')}}"  title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Immediate Contacts Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Immediate Contacts</h2>
          <p>The Following Can Easily Help you Locate Justin Where Necessary</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Partly a Zambian National.
                    Manager Freesouls' Group;
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/wash.jpg" class="testimonial-img" alt="">
                <h3>M Wash</h3>
                <h4>Ceo & Founder of Wash Tech</h4>
                <a href="https://wa.me/256786921709" class="whatsapp"><i class="bx bxl-whatsapp"></i>+256786921709</a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Currently does most of his tasks from China handling over 5 countries in Africa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/young.jpg" class="testimonial-img" alt="">
                <h3>Mr. Young</h3>
                <h4>General Manager PostNow</h4>
                <a href="https://wa.me/8618121217485" class="whatsapp"><i class="bx bxl-whatsapp"></i>+8618121217485</a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    A Ugandan and a long term Friend.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/george.jpg" class="testimonial-img" alt="">
                <h3>George Bakudala</h3>
                <h4>Electrical Engineer</h4>
                <a href="https://wa.me/256705164268" class="whatsapp"><i class="bx bxl-whatsapp"></i>+256705164268</a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Fine Ugandan Lady who sits at the epitome when I am off the Necessity. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/suzan.jpg" class="testimonial-img" alt="">
                <h3>Suzan Nowmagyezi</h3>
                <h4>Student at Makerere University</h4>
                <a href="https://wa.me/256774337634" class="whatsapp"><i class="bx bxl-whatsapp"></i>+256774337634</a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Journalist and Article Editor at Postnow Uganda.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/ronald.jpg" class="testimonial-img" alt="">
                <h3>Ronald PostNow</h3>
                <h4>Editor at PostNow Uganda</h4>
                <a href="https://wa.me/256709901150" class="whatsapp"><i class="bx bxl-whatsapp"></i>+256709901150</a>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Reach Me on Any of the Following Platforms</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info mt-1">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Makerere University, Kampala, Uganda</p>
              </div>

              <a href="mailto:justincampdiop@gmail.com" >
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                justincampdiop@gmail.com
              </div>
            </a>

              <a href="tel:+256784460162" >
              <div class="phone">
                <i class="bi bi-telephone-outbound-fill"></i>
                <h4>Call</h4>
                    <p>
                    +256 784 460 162
                  </p>
              </div>
              </a>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>

    <div class="col-lg-7 mt-2 mt-lg-0 d-flex align-items-stretch">
     <div class="container">
        <div class="row mt-1 mb-2">
            <div class="col-11 offset-1 mt-2 mb-2">
                <!-- <div class="card pb-2 bs-card-spacer-x: 4rem">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Fill the Form Below to Send a Message</h3>
                    </div>
                    <div class="card-body">
  
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                     
                        <form method="POST" action="{{ route('index.store') }}" id="index">
                            {{ csrf_field() }}
                              
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Subject:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                     
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit mt-2">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    </div>
    </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
