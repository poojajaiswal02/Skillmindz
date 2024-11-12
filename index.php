<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpg" href="image/fav-icon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Style.css -->
  <link rel="stylesheet" href="style.css" type="text/css">
  <!-- Fontawesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Ajax -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <title>skillmindz</title>

</head>

<body>

  <header>
    <nav class="navbar">
      <div class="container">
        <a href="index.php"><img src="image/Skillmindz-Academy-logo.jpg" alt=""></a>
      </div>
    </nav>
  </header>

  <!-- Start Home Section -->
  <section class="homeSection allTitle" id="home">
    <div class="home-banner">
      <div id="carouselExampleAutoplaying" class="carousel slide"
        data-bs-ride="carousel">
        <div class="carousel-inner bannerSlider ">
          <div class="carousel-item active  ">
            <img src="image/banner3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/banner2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/banner1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="inquiryForm" id="block">

        <h4>Enquire Now</h1>
          <form action="send.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="number" placeholder="Contact No" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="city" placeholder="City" required>

            <select name="course" id="course" onchange="updateCourses()" required >
              <option value disabled selected> Select Courses</option>
              <option value="mba">Master of Business Administration (MBA )</option>
              <option value="mca">Master of Computer Application (MCA) Programme</option>
              <option value="datascience">Master of Science in Data Science programme</option>
              <option value="bba"> Bachelors of Business Administration(BBA)</option>
              <option value="digitalmarketing">Certificate Programme in Digital Marketing</option>
              <option value="hospital">Certificate Programme in Hospital And Healthcare Management</option>
              <option value="bca">Bachelor of Computer Applications (BCA)</option>
              <option value="bcom">Bachelor of Commerce(B.Com)</option>
              <option value="ma">Master of Commerce (MA)</option>
              <option value="ba">Bachelor of Arts (BA)</option>
              <option value="mcom">Master of Commerce (M.Com)</option>
            </select>
            <select name="college" id="college" required>
              <option value disabled selected>Select University</option>
            </select>

            <div class="inquiryForm-btn">
              <button type="submit" name="send" value="send" class="p-2">Submit</button>
            </div>
          </form>
      </div>
    </div>
  </section>
  <!-- End Home Section -->

  <!-- Start University Section -->
  <section class="top-college allTitle ">
    <div class="container">
      <h1>Top Ranking Universities</h1>
      <div class="scroll-university-container">
        <div class="uni-scroll">
          <div class="uni-name">
            <img src="image/university-logo/Jain Online University_Logo.png" alt>
          </div>
          <div class="uni-name">
            <img src="image/university-logo/D.Y.Patil.png" alt>
          </div>
          <div class="uni-name">
            <img src="image/university-logo/sharda-logo.png" alt>
          </div>
          <div class="uni-name">
            <img src="image/university-logo/vit-logo2.png" alt>
          </div>
          <!-- <div class="uni-name">
              <img src="image/university-logo/kazian.png" alt>
            </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- End University Section -->

  <!-- Start Exploare our Courses -->
  <section class="our-courses allTitle">
    <div class="container">
      <h1>Select Your Programs</h1>
      <div class="row">
        <h2>Bachelor Programs</h2>
        <div class=" degree-courses-slider">
          <button class="prev" type="button" onclick="scrollingLeft()">&#10094;</button>
          <div class=" slider">
            <div class="slides-track">
              <!-- Original cards -->
              <div class="card courseSlide">
                <img src="image/courses/BBA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelors of Business
                    Administration(BBA)</h5>
                  <p class="card-text">BBA: Learn business management, finance, marketing, and leadership skills for careers in business administration and entrepreneurship.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/BCA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelor of Computer Applications
                    (BCA)</h5>
                  <p class="card-text">BCA: Learn programming, software development, and IT skills for careers in technology and computer applications.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/BA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelor of Arts (BA)</h5>
                  <p class="card-text">BA: Explore humanities, social sciences, and communication to develop a broad understanding of various cultural and social issues.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/Digital Marketing.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Certificate Programme in Digital
                    Marketing</h5>
                  <p class="card-text">Digital Marketing Certificate: Gain skills in SEO, SEM, social media, and analytics to drive successful online marketing campaigns.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/Hosptal And Healthcare Management.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Certificate Programme in Hospital And
                    Healthcare Management</h5>
                  <p class="card-text">Healthcare Management Certificate: Study hospital administration, patient care, and healthcare systems for effective management in healthcare settings.
                  </p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/Bachelor of Commerce(B.Com).jpg"
                  class="card-img-top" alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelor of Commerce(B.Com)</h5>
                  <p class="card-text">B.Com: Focus on accounting, finance, economics, and taxation to prepare for careers in commerce and finance.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>

              <!-- Duplicate of first card for seamless loop -->
              <div class="card courseSlide">
                <img src="image/courses/BBA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelors of Business
                    Administration(BBA)</h5>
                  <p class="card-text">BBA: Learn business management, finance, marketing, and leadership skills for careers in business administration and entrepreneurship.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/BCA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelor of Computer Applications
                    (BCA)</h5>
                  <p class="card-text">BCA: Learn programming, software development, and IT skills for careers in technology and computer applications.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/BA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelor of Arts (BA)</h5>
                  <p class="card-text">BA: Explore humanities, social sciences, and communication to develop a broad understanding of various cultural and social issues.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/Digital Marketing.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Certificate Programme in Digital
                    Marketing</h5>
                  <p class="card-text">Digital Marketing Certificate: Gain skills in SEO, SEM, social media, and analytics to drive successful online marketing campaigns.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/Hosptal And Healthcare Management.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Certificate Programme in Hospital And
                    Healthcare Management</h5>
                  <p class="card-text">Healthcare Management Certificate: Study hospital administration, patient care, and healthcare systems for effective management in healthcare settings.
                  </p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card courseSlide">
                <img src="image/courses/Bachelor of Commerce(B.Com).jpg"
                  class="card-img-top" alt="...">
                <div class="card-body courseDetails">
                  <h5 class="card-title">Bachelor of Commerce(B.Com)</h5>
                  <p class="card-text">B.Com: Focus on accounting, finance, economics, and taxation to prepare for careers in commerce and finance.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
            </div>
          </div>
          <button class="next" onclick="scrollRight()">&#10095;</button>
        </div>
      </div>

      <!--Start For Masters -->
      <div class="row pt-5">
        <h2>Masters Programs</h2>
        <div class="master-courses-slider">
          <button class="prev2" onclick="clickingLeft()">&#10094;</button>
          <div class="masterCourse">
            <div class="masters-content">
              <div class="card master-slide">
                <img src="image/courses/MBA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Business
                    Administration(MBA)</h5>
                  <p class="card-text">
                    The MBA (Master of Business Administration) is a postgraduate course focusing on management, leadership, strategic thinking, and business skills.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card master-slide">
                <img src="image/courses/MCA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Computer Application
                    Programme(MCA)</h5>
                  <p class="card-text">The MCA (Master of Computer Applications) is a postgraduate program focusing on advanced software development, programming, and computer science applications.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card master-slide">
                <img src="image/courses/Master Data Science programme.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Science in Data Science
                    programme</h5>
                  <p class="card-text">The Master of Science in Data Science is a postgraduate program emphasizing data analysis, machine learning, statistics, and big data technologies.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card master-slide">
                <img src="image/courses/M.Com" class="card-img-top" alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Commerce (M.Com)</h5>
                  <p class="card-text">
                    The Master of Commerce (M.Com) is a postgraduate program focusing on advanced studies in accounting, finance, economics, and business management.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <!-- Duplicate images for looping effect -->
              <div class="card master-slide">
                <img src="image/courses/MBA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Business
                    Administration(MBA)</h5>
                  <p class="card-text">
                    The MBA (Master of Business Administration) is a postgraduate course focusing on management, leadership, strategic thinking, and business skills.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card master-slide">
                <img src="image/courses/MCA.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Computer Application
                    Programme(MCA)</h5>
                  <p class="card-text">The MCA (Master of Computer Applications) is a postgraduate program focusing on advanced software development, programming, and computer science applications.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card master-slide">
                <img src="image/courses/Master Data Science programme.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Science in Data Science
                    programme</h5>
                  <p class="card-text">The Master of Science in Data Science is a postgraduate program emphasizing data analysis, machine learning, statistics, and big data technologies.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
              <div class="card master-slide">
                <img src="image/courses/M.Com" class="card-img-top" alt="...">
                <div class="card-body master-course-details">
                  <h5 class="card-title">Master of Commerce (M.Com)</h5>
                  <p class="card-text">
                    The Master of Commerce (M.Com) is a postgraduate program focusing on advanced studies in accounting, finance, economics, and business management.</p>
                  <a href="#home" class="btn">Enquire Now</a>
                </div>
              </div>
            </div>
          </div>
          <button class="next2" onclick="clickRight()">&#10095;</button>
        </div>
      </div>
      <!--End For Masters -->
    </div>
  </section>
  <!-- End Exploare our Courses -->


  <!-- Start About us -->
  <section class="aboutUs allTitle">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="about-content">
            <h1>About Us</h1>
            <p>
              SkillMindz is your trusted partner in advancing your education and career, connecting you with top online degree programs from some of the most esteemed universities. Whether you're considering Amity University, Sharda University, Jain University, VIT Vellore Institute of Technology, or DPU Dr. D. Y. Patil Vidyapeeth Pune, we provide access to a wide array of programs that cater to your specific needs and aspirations. Our expert team is dedicated to offering personalized guidance, helping you navigate through the options to find the course that best aligns with your career goals. With SkillMindz, you can confidently take the next step in your professional journey, equipped with the education and skills necessary to succeed in today’s competitive world.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="about-image">
            <img src="image/about-us.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Top Hiring Companies -->
  <section class="hiring-companies allTitle">
    <div class="container">
      <h1>Top Hiring Companies</h1>
      <div class="companies-slider">
        <div class="slides-com">
          <div class="slide">
            <img src="image//companies-logo/logo10.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-9.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-8.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-7.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-6.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo5.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-4.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo3.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-2.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo1.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo10.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-9.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-8.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-7.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-6.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo5.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-4.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo3.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo-2.png" alt />
          </div>
          <div class="slide">
            <img src="image//companies-logo/logo1.png" alt />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Hiring Companies -->

  <!-- Start Student Feedback -->
  <section class="students-feedback allTitle ">
    <div class="container">
      <h1>Student Feedback</h1>
      <div class=" testimonial-slider">
        <div class="testimonial-card">
          <h6 class="student-name">Sitara Prajapati</h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"SkillMindz helped me find the perfect online degree from top universities like Amity and Sharda. Their team’s guidance was invaluable. Highly recommend for anyone looking to advance their education!"</p>
        </div>
        <div class="testimonial-card">
          <h6 class="student-name">Roshni Singh</h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"Great service! SkillMindz provided detailed options for online degrees from Jain and Sharda. Responsive and helpful team, though their website could be more user-friendly. Overall, a very positive experience."</p>
        </div>
        <div class="testimonial-card">
          <h6 class="student-name">Barkhu Yadav</h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"SkillMindz made finding an online degree easy. They offered excellent support and a variety of programs from Amity and Sharda. I’m thrilled with the outcome and highly recommend their services."</p>
        </div>
        <div class="testimonial-card">
          <h6 class="student-name">Priti Bathe</h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"SkillMindz guided me through various online degree programs. The team was attentive and knowledgeable. A slight delay in communication, but overall, I’m very satisfied with their assistance in finding the right course."</p>
        </div>
        <div class="testimonial-card">
          <h6 class="student-name">Manish Gupta</h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"SkillMindz connected me with the best online degree programs from Amity and Jain. Their team’s support and expertise were outstanding. I’m now enrolled in a program that suits my career goals."</p>
        </div>
        <div class="testimonial-card">
          <h6 class="student-name">Virendra Chaudhary </h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"SkillMindz offered valuable guidance on online degree programs. They helped me explore options from Sharda and Jain universities. Great service, though there were minor delays in communication. Would definitely recommend them."</p>
        </div>
        <div class="testimonial-card">
          <h6 class="student-name">Manali Kadam</h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"SkillMindz made my search for an online degree hassle-free. Their team was extremely knowledgeable about programs from Amity and Sharda. I’m very happy with the service and my chosen course."</p>
        </div>
        <div class="testimonial-card">
          <h6 class="student-name">Akash Shinde</h6>
          <span class="student">Student</span>
          <div class="student-rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p>"SkillMindz was a big help in finding the right online degree. They provided excellent options from Jain and Sharda. Slight communication delays, but overall, a good experience and very supportive team."</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Student Feedback -->

  <!-- Start Footer  -->
  <footer>
    <div class="container">
      <div class="footer-section">
        <div class="row">
          <div class="col-lg-4 col-12 col-md-6 courses-list">
            <h3>Courses</h3>
            <ul>
              <li><a href="#home"><i class="fa-solid fa-link"></i>Master of Business
                  Administration</a></li>
              <li><a href="#home"><i class="fa-solid fa-link"></i>Bachelors of Business
                  Administration</a></li>
              <li><a href="#home"><i class="fa-solid fa-link"></i>Certificate Programme
                  in Digital Marketing</a></li>
              <li><a href="#home"><i class="fa-solid fa-link"></i>Bachelor of Computer
                  Applications</a></li>
              <li><a href="#home"><i class="fa-solid fa-link"></i>Master of Computer
                  Applications</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-12 col-md-6">
            <h3>Andheri</h3>
            <div class="address1">
              <i class="fa-solid fa-location-dot"></i>
              <p>702, Vivina Bldg 3A, NADCO Shopping Centre, Opp. Andheri
                Railway Station, Andheri West, Mumbai-40005</p>
            </div>
            <div class="contact-us">
              <i class="fa-solid fa-phone"></i>
              <p> 8828991111</p>
            </div>
          </div>
          <div class=" col-lg-4 col-12 col-md-6">
            <h3>Thane</h3>
            <div class="address1">
              <i class="fa-solid fa-location-dot"></i>
              <p>Office No. 603, Paradise Tower, Next to McDonaldʼs, Gokhale
                Road, Thane (W) 400602</p>
            </div>
            <div class="contact-us">
              <i class="fa-solid fa-phone"></i>
              <p> 8828991111</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="privacy">
            <p>The skillmindz we collect your contact information only for course counseling. For details on how we use and protect your data, please check our <a href="privacy.php">Privacy Policy</a>. For questions, call us at 8828991111</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer  -->

  <!-- WhatsApp icon -->
  <a target="_blank" href="https://wa.me/8828991111" class="whatsapp-chat">
    <img src="image/WhatsApp_icon.png" alt="" />
  </a>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="script.js"></script>

</body>

</html>