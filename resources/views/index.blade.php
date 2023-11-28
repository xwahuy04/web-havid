<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=.0" name="viewport">

  <title>Havid Baihaqi -  {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/{{ $icon }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  {{-- vanilla css --}}
  <link href="assets/css/vanilla.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  
  @include('partials.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-right align-items-center ">
    <div class="hero-container" data-aos="fade-in">
      <h1>Havid Baihaqi</h1>
      <p>I'm <span class="typed" data-typed-items="Student, Developer Beginner"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>
            Saya adalah individu yang selalu siap menjelajahi kehidupan dengan penuh semangat dan rasa ingin tahu. Dengan pengalaman di sekolah saya, saya telah memperkaya diri dengan keterampilan kolaborasi yang kuat dan ketangguhan dalam menghadapi tantangan.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/foto.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Student &amp; Web Developer.</h3>
            <br>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>4 Sep 2007</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a href="https://xwahuy04.github.io/" target="_blank">www.Wahyu.github.oi</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>WhatsApp:</strong> <span>+628525967297</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong> <span>Lumajang, Jawa Timur</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>17</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Pendidikan:</strong> <span>Sekolah Menengah Kejuruan</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>wahyuhavidbaihaqi@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Sekolah:</strong> <span>SMKN  Lumajang</span></li>
                </ul>
              </div>
            </div>
            <p class=" mt-2">
              Dalam perjalanan hidup yang saya jalani, saya merangkai setiap bab sebagai pengarang kisah pribadi. Dengan setiap langkah yang saya ambil, saya menulis dengan keberanian yang mendorong saya melampaui batasan dan menghadapi tantangan dengan tekad yang kuat. Kebijaksanaan datang sebagai panduan, membantu saya mengerti arti di balik setiap halangan dan menemukan pelajaran berharga dalam setiap kegagalan. Saya percaya bahwa sebagai pengarang hidup sendiri, setiap kata, setiap tindakan, dan setiap emosi adalah bagian integral dari cerita yang terus saya tulis, menciptakan narasi yang unik dan berharga.
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
          <p>Saat ini, saya masih dalam fase eksplorasi dan belajar dalam dunia pemrograman. Meskipun saya belum menguasai satu pun bahasa pemrograman, saya sangat antusias dan tekun dalam mengeksplorasi aspek-aspek baru dalam dunia teknologi. </p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="00"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="00"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="00"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="00">

            <div class="progress">
              <span class="skill">PHP <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="00"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">5%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="00"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="00"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Rangkuman</h2>
          <p> Setiap posisi dan proyek yang saya ambil merupakan bab-bab penting dalam buku pengalaman saya. Dengan fokus pada pencapaian yang terukur dan keterampilan yang telah saya kembangkan, saya berusaha untuk menyampaikan kontribusi saya secara jelas dan komprehensif.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Ringkasan</h3>
            <div class="resume-item pb-0">
              <h4>Havid Baihaqi</h4>
              <p><em>Bagi saya, belajar bahasa pemrograman bukan hanya kebutuhan praktis, tetapi juga merupakan investasi dalam kemampuan kreatif dan potensi untuk membentuk masa depan.Dengan memahami bahasa pemrograman, saya merasa memiliki kontrol lebih besar terhadap perangkat lunak dan sistem yang digunakan sehari-hari. Untuk saat ini bahasa pemograman yang saya pelajari yaitu </em></p>
              <ul>
                <li>HyperText Markup Language</li>
                <li>Cascading Style Sheet</li>
                <li>Java Script</li>
              </ul>
            </div>

            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4>Kehidupan TK</h4>
              <h5>2011 - 2014</h5>
              <p><em>Di masa TK, setiap hari saya dijejali tawa dan keceriaan. Teman-teman sebaya menjadi sahabat dalam setiap petualangan kecil. Guru-guru yang penuh kasih dan sabar membimbing langkah-langkah kecil kami menuju pengetahuan. </em></p>
            </div>
            <div class="resume-item">
              <h4>Kehidupan SD</h4>
              <h5>2014 - 2020</h5>
              <p><em>Teman sekelas jadi keluarga, guru membimbing langkah awal, dan kenangan manis di taman sekolah selalu hadir.</em></p>
              <p>Setiap pelajaran menjadi petualangan baru. Guru-guru dengan penuh dedikasi membimbing langkah-langkah pertama kami dalam dunia pengetahuan</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="00">
            <h3 class="resume-title">Pendidikan Lanjut</h3>
            <div class="resume-item">
              <h4>Menjalani kehidupan SMK</h4>
              <h5>2023 - Present</h5>
              <p><em>SMKN  Lumajang, Lumajang, JawaTimur</em></p>
              <ul>
                <li>
                  Di SMK, kehidupan saya semakin terfokus pada pengembangan keterampilan di dunia software. 
                 </li>
                <li>Saya memasuki dunia yang lebih mendalam, belajar tentang pemrograman tingkat lanjut, dan      manajemen proyek perangkat lunak.  </li>
                <li> Dalam suasana yang penuh tantangan, tekad saya untuk terus berkembang di bidang software semakin kuat</li>
            </div>
            <div class="resume-item">
              <h4>SMP yang penuh tantangan</h4>
              <h5>2020 - 2023</h5>
              <p><em>SMPN  Ranuyoso, Lumajang, JawaTimur</em></p>
              <ul>
                <li>
                  Waktu SMP menjadi babak baru di mana saya mulai meresapi keajaiban dunia software. 
                 </li>
                <li> Di masa SMP, kehidupan saya semakin berwarna dengan kedatangan dunia software. Mulai mengenalinya membawa petualangan baru dalam dunia teknologi. </li>
                <li> Inilah awal dari perjalanan yang memikat dalam dunia teknologi, di mana setiap kode dan program menjadi bagian dari pengalaman belajar yang tak terlupakan.</li>
                <li>Saya bertekad untuk melanjutkan eksplorasi dan pembelajaran dalam dunia software.</li>
              </ul>
        
    
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>
            Saya seorang pemula dalam dunia desain, tetapi penuh semangat untuk belajar dan tumbuh.       Meskipun masih banyak yang harus dipelajari, saya siap untuk menghadapi tantangan dan terus berkembang. Mari jelajahi perkembangan saya melalui portofolio ini bersama!</p>
        </div>

          <section id="my-">
          
              <div class="row">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="keyboard-box">
                    <h4 class="keyboard-name">Pendidikan</h4>
                    <img src="assets/img/portfolio/4.jpg" alt="Keyboard" class="keyboard-img" />
                    <a href="portfolio/portfolio-details" class="btn btn-light keyboard-detail-button">Show Details</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="keyboard-box">
                    <h4 class="keyboard-name">Memory Bromo</h4>
                    <img src="assets/img/portfolio/bromo.jpg" alt="Keyboard-2" class="keyboard-img" />
                    <a href="portfolio/bromo-details" class="btn btn-light keyboard-detail-button">Show Details</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="keyboard-box">
                    <h4 class="keyboard-name">Memory Selecta</h4>
                    <img src="assets/img/portfolio/selecta.jpg" alt="Keyboard-3" class="keyboard-img" />
                    <a href="portfolio/selecta-details" class="btn btn-light keyboard-detail-button">Show Details</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="keyboard-box">
                    <h4 class="keyboard-name">Persami Raya III</h4>
                    <img src="assets/img/portfolio/Persami-details.jpg" alt="Keyboard-3" class="keyboard-img" />
                    <a href="portfolio/persami-details" class="btn btn-light keyboard-detail-button">Show Details</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="keyboard-box">
                    <h4 class="keyboard-name">Penghijauan</h4>
                    <img src="assets/img/portfolio/jausan.jpg" alt="Keyboard-3" class="keyboard-img" />
                    <a href="portfolio/penghijauan-details" class="btn btn-light keyboard-detail-button">Show Details</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="keyboard-box">
                    <h4 class="keyboard-name">Coffe Boy</h4>
                    <img src="assets/img/portfolio/Havid-Baihaqi.jpg " alt="Keyboard-3" class="keyboard-img" />
                    <a href="portfolio/coffee-details" class="btn btn-light keyboard-detail-button">Show Details</a>
                  </div>
                </div>
                
            </div>
          </section>
       
    </section><!-- End Portfolio Section -->

   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Motivasi</h2>
          <p>Motivasi adalah kunci keberhasilan dan pertumbuhan pribadi. Tanpanya, potensi kita terabaikan. Oleh karena itu, menjaga motivasi adalah langkah penting untuk meraih tujuan dan menghadapi tantangan dengan semangat yang tak tergoyahkan.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="00">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jika Anda akan melakukan sesuatu yang baru atau inovatif, Anda harus bersedia menerima kesalahpahaman.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/jeff-bezos.jpg"  class="testimonial-img" alt="">
                <h3>Jeff Bezos</h3>
                <h4> Pendiri dan &amp; CEO dari platform e-commerce Amazon </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="00">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Programmer yang kompeten menyadari sepenuhnya kapasitas otaknya yang terbatas. Karena itu, dia menyelesaikan tugasnya dengan pendekatan yang penuh kerendahan hati, dan menghindari trik cerdik yang seperti penyakit.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/edsger-w-dijkstra.jpg" class="testimonial-img" alt="">
                <h3>Edsger W. Dijkstra</h3>
                <h4>Ilmuwan Komputer &amp; Pengembang Software</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kita harus berhenti mengoptimalkan software untuk programmer, dan mulai mengoptimalkannya untuk pengguna.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/jeff-atwood.jpg" class="testimonial-img" alt="">
                <h3>Jeff Atwood</h3>
                <h4>Software Developer; Pengusaha ; Bloger</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jangan menyerah saat kamu merasa lelah, jangan menyerah saat kamu merasa putus asa, jangan menyerah saat kamu merasa gagal, karena kesuksesan datang dari ketekunan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/anoymous.jpg" class="testimonial-img" alt="">
                <h3>Anonymous</h3>
                <h4> Hacktivis Internasional</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kebanyakan programmer hebat melakukan pemrograman bukan karena mereka mengharapkan bayaran atau pujian dari publik, tetapi karena melakukan pemrograman itu menyenangkan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/linus-torvalds.jpg" class="testimonial-img" alt="">
                <h3>Linus Torvalds</h3>
                <h4>Software Engineer &amp; Pengembang utama dari kernel Linux.</h4>
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
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div> --}}

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Probolinggo - Wonorejo No.514, Kebonan Selatan, Ranuyoso, Kec. Ranuyoso, Kabupaten Lumajang, Jawa Timur 67357</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>wahyuhavidbaihaqi@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 859-672-917</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.419380832228!2d113.25575281047591!3d-7.955539092035889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd650975810581f%3A0x1a71d6e1823b2d1b!2sJl.%20Probolinggo%20-%20Wonorejo%20No.514%2C%20Kebonan%20Selatan%2C%20Ranuyoso%2C%20Kec.%20Ranuyoso%2C%20Kabupaten%20Lumajang%2C%20Jawa%20Timur%2067357!5e0!3m2!1sid!2sid!4v1700233285375!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form " name="portofolio-contact-form">
              <div class="row">
                <div class="alert alert-warning alert-dismissible fade show d-none my-alert" role="alert">
                  <strong>Terimakasih!</strong> Pesan anda sudah saya terima.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"> Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading btn-loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center btn-kirim"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/vanilla.tilt.min.js"></script>
  

</body>

</html>