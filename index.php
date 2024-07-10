<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SISMATIK 2023</title>
    <meta content="Seminar Nasional Sistem Informasi Dan Manajemen Informatika (SISMATIK)
    merupakan kegiatan dalam bentuk seminar nasional dengan merepresentasikan kajian dan hasil penelitian baru di bidang Manajemen dan Informatika. Program Studi Sistem Informasi menjadi penyelenggara seminar bertaraf nasional ini. SISMATIK merupakan seminar pertama yang kami selenggarakan dan diselenggarakan secara virtual karena pandemi COVID-19 belum menunjukkan keadaan yang lebih baik" name="description">
    <meta content="sismatik" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script>
    document.addEventListener("DOMContentLoaded", function() {
      const countdown = document.querySelector('.countdown');
      const output = countdown.innerHTML;

      const countDownDate = function() {
        const targetDate = new Date('Sept 07, 2024').getTime();
        const currentTime = new Date().getTime();
        const timeLeft = targetDate - currentTime;

        if (timeLeft < 0) {
          countdown.innerHTML = "Countdown has ended!";
        } else {
          const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
          const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
          const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

          countdown.innerHTML = output
            .replace('%d', days)
            .replace('%h', hours)
            .replace('%m', minutes)
            .replace('%s', seconds);
        }
      };

      countDownDate();
      setInterval(countDownDate, 1000);
    });
  </script>

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div class="container d-flex flex-column align-items-center">
                <img src="assets/img/hero-logo.png" alt="" class="img-fluid" width="250rem">
                <h3>SEMINAR NASIONAL</h3>
                <h3>SISTEM INFORMASI & MANAJEMEN INFORMATIKA (SISMATIK 2024)
                </h3>
                <br>
                <!-- <div class="countdown d-flex justify-content-center" data-count="2022/8/27"> -->
                <div class="countdown d-flex justify-content-center">
        <div>
          <!-- <h3>%d</h3> -->
          <h3>%d</h3>
          <h4>Days</h4>
        </div>
        <div>
          <!-- <h3>%h</h3> -->
          <h3>%h</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <!-- <h3>%m</h3> -->
          <h3>%m</h3>
          <h4>Minutes</h4>
        </div>
        <div>
            <!-- <h3>%s</h3> -->
          <h3>%s</h3>
          <h4>Seconds</h4>
        </div>
      </div>
            </div>
            <a href="#about" class="btn-get-started rounded-pill scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="index.html">SISMATIK</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Dates</a></li>
                    <li><a class="nav-link scrollto " href="#cta">Papper</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Registration</a></li>
                    <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="#team">Speakers</a></li>
                    <li><a class="nav-link scrollto" href="#panitia">Comitee</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="https://sismatik.nusaputra.ac.id/">Prosiding</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>TEMA</h2>
                    <p>"AI in information System Enhancing efficiency and innovation"</p>
                </div>

                <div class="section-title">
                    <h2>About</h2>
                    <h3><span>SISMATIK</span></h3>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        <p class="justify">Seminar Nasional Sistem Informasi Dan Manajemen Informatika (SISMATIK) merupakan kegiatan dalam bentuk seminar nasional dengan merepresentasikan kajian dan hasil penelitian baru dibidang Sistem Informasi dan Manajemen Informatika.
                            Program Studi Sistem Informasi Universitas Nusa Putra menjadi penyelenggara seminar bertaraf nasional ini.</p>
                        <p class="justify">SISMATIK 2024 merupakan seminar keempat setelah sebelumnya diselenggarakan pada tahun 2021,2022 dan 2023. Seminar diselenggarakan secara offline di Auditorium Universitas Nusa Putra.Seminar nasional ini diharapkan dapat mempertemukan peneliti, praktisi, mahasiswa, masyarakat, dan pelaku industri di bidang teknologi, manajemen, dan bisnis.</p>
                        <p class="justify">SISMATIK 2024 mengusung tema "AI in information System Enhancing efficiency and innovation". Kecerdasan Buatan (AI) dalam sistem informasi memainkan peran penting dalam meningkatkan efisiensi dan mendorong inovasi di berbagai sektor. Dalam era digital yang berkembang pesat, organisasi perlu mengadopsi solusi AI untuk mengoptimalkan proses bisnis dan meningkatkan daya saing. Topik ini dapat menarik minat dan perhatian akademisi, praktisi, pengembang, dan pengguna sistem informasi, memungkinkan seminar dapat dihadiri oleh berbagai peserta dengan latar belakang dan kepentingan berbeda-beda, sehingga dapat memberikan kontribusi berharga dalam pembahasan topik. Memilih tema ini juga dapat membuka peluang untuk menggali studi kasus atau praktik terbaik yang dapat memberikan ide, inspirasi, dan inovasi bagi peserta seminar dalam menerapkan AI dalam sistem informasi secara lebih efektif dan efisien pada organisasi masing-masing. Dengan demikian, tema tersebut sangat relevan dan menarik untuk dibahas dalam Seminar Nasional Sistem Informasi dan Manajemen Informatika (SISMATIK).</p>
                        <p class="justify">Seminar nasional ini akan menampilkan berbagai makalah teoritis dan empiris yang berfokus pada penerapan AI dalam sistem informasi untuk meningkatkan efisiensi dan mendorong inovasi di berbagai bidang.</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6 col-6">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a>E-Bussines</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a>Bussiness Intelligence</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a>Sistem Informasi Manajemen</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a>Enterprise Architecture</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a>Data & Text Mining</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a>Sistem Pendukung Keputusan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a>Data Science and IoT</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a>Data Forecasting</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Important Dates</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3 d-flex flex-column align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar"></i></div>
                            <h4 class="title"><a>15 July-19 Agustus 2024</a></h4>
                            <p class="description">Full Paper Submission</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex flex-column align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar"></i></div>
                            <h4 class="title"><a>20 Agustus 2024</a></h4>
                            <p class="description">Decision Notification</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex flex-column align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar"></i></div>
                            <h4 class="title"><a>21-28 Agustus 2024</a></h4>
                            <p class="description">Final Registration and Payment</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex flex-column align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar"></i></div>
                            <h4 class="title"><a>07 September 2024</a></h4>
                            <p class="description">Conference Day</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center">
			  <img src="assets/img/SISMATIK2024fix.png" class="img-fluid" alt="">
<br>
<br>
                    <h3>Submission</h3>

                    <div class="row content">
                        <div class="col-lg-12">
                            <p>1.	Peserta harus membuat akun dan login pada website SISMATIK di <a href="https://sismatik.nusaputra.ac.id/">www.sismatik.nusaputra.ac.id</a> menggunakan email institusi. Ikuti langkah-langkah pengisian data sampai naskah dapat terkirim.
                            2.	Naskah yang dikirim harus mengikuti template SISMATIK 2024 dan memiliki jumlah halaman minimal 6 lembar dan maksimal 8 lembar. Dokumen naskah dikirim dalam format .doc.
                            3.	Proses pembayaran naskah melalui Conference Management Systems (CMS-Nutral.id).
                            </p>
                        </div>
                    </div>

                    <a class="cta-btn" href="https://docs.google.com/document/d/1hs4S2LG5XQVddf4hnPEEbrFG_ld37r0Q/edit" target="_new">Papper Template</a>
                    <a class="cta-btn" href="https://sismatik.nusaputra.ac.id/index.php/sismatik/user/register" target="_new">Submit Papper</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Registration</h2>
                    <!-- <h3>Our Competing <span>Prices</span></h3>
                    <p></p> -->
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended">
                            <!-- <span class="recommended-badge">Recommended</span> -->
                            <h3>PEMAKALAH</h3>
                            <h4><sup>RP</sup>500k<span> / paper</span></h4>
                            <ul>
                                <!-- <li>Aida dere</li> -->
                                <!-- <li class="na">Massa ultricies mi</li> -->
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://bit.ly/PendaftaranPemakalahSISMATIK2024" target="_blank" class="btn-buy">DAFTAR</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended">
                            <!-- <span class="recommended-badge">Recommended</span> -->
                            <h3>PESERTA</h3>
                            <h4><sup>RP</sup>100k<span> / orang</span></h4>
                            <ul>
                                <!-- <li>Aida dere</li> -->
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://bit.ly/PendaftaranPesertaSISMATIK2024" target="_blank" class="btn-buy">DAFTAR</a>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <!--<div class="row justify-content-center">-->

                <!--    <div class="col-lg-8 col-md-10 mt-8 mt-md-0">-->
                <!--        <div class="box recommended">-->
                <!--            <h3>PEMBAYARAN</h3>-->
                <!--            <table class="table">-->
                <!--                <tr>-->
                <!--                    <td>Bank Name</td>-->
                <!--                    <td>:</td>-->
                <!--                    <td>Bank Mandiri</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Branche</td>-->
                <!--                    <td>:</td>-->
                <!--                    <td>Cabang KCP Sukabumi Ahmad Yani. West Java. Indonesia</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Swift code</td>-->
                <!--                    <td>:</td>-->
                <!--                    <td>BMRIIDJA</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Account Name</td>-->
                <!--                    <td>:</td>-->
                <!--                    <td>Conference Nusa Putra</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Account number</td>-->
                <!--                    <td>:</td>-->
                <!--                    <td>1820009000555</td>-->
                <!--                </tr>-->
                <!--            </table>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--</div>-->
                
                <br>
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended">
                            <!-- <span class="recommended-badge">Recommended</span> -->
                            <h3>SUDAH DAFTAR?</h3>
                            <!-- <h4>FREE</h4> -->
                            <ul>
                                <!-- <li>Aida dere</li> -->
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://chat.whatsapp.com/ILJ0Ya7HtLf4ZRMAjx6pDf" class="btn-buy">JOIN GROUP</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Form untuk pendaftaran Seminar bisa diperoleh dimana? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Form pendaftaran seminar dapat diakses melalui website SISMATIK
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Kapan dilakukan pembayaran?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Peserta dapat melakukan pembayaran ketika makalah dinyatakan diterima dan diberikan nomor rekening
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Penulis boleh lebih dari 1 orang?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Boleh, sesuai dengan jumlah tim peneliti
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq9" class="collapsed question">Apakah mahasiswa boleh mendaftar sebagai peserta seminar? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq9" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Mahasiswa Sistem Informasi disarankan menjadi pemakalah, untuk mahasiswa lain silahkan menjadi peserta
                            </p>
                        </div>
                    </li>


                </ul>

            </div>
        </section>

        <!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Key Note Speakers</h2>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/key_Speaker/Oskar_riandi.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-globe"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Oskar Riandi</h4>
                                <span>CEO PT.Bahasa Kita</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/key_Speaker/Prihandoko.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-globe"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Prihandoko, S.kom, M.I.T, Ph.D.</h4>
                                <span>Badan Riset dan Inovasi Nasional (BRIN)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/key_Speaker/falen(2).jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-globe"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Falentino Sembiring, M.Kom.</h4>
                                <span>Dosen Universitas Nusa Putra Sukabumi</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- Daftar Panitia -->
        <section id="panitia" class="contact">
            <div class="container mt-5">

                <div class="section-title">
                    <h2>COMITEE</h2>
                </div>

                <div class="row mt-5">
                    <div class="col">
                        <div align="center">
                            <p>
                            <h6><b>Dewan Penasehat:</b></h6>
                            Dr. H. Kurniawan, S.T., M.Si., MM (Rektor Universitas Nusa Putra)
                            <br>
                            <br>
                            <h6><b>Dewan Pengarah:</b></h6>
                            Anggy Pradiftha Junfithrana, MT. (Wakil Rektor I Universitas Nusa Putra)
                            <br>Muhammad Muslih, M.Kom (Wakil Rektor II Universitas Nusa Putra)
                            <br>Nunik Destria Arianti, S.Kom., M.Kom (Wakil Rektor III Universitas Nusa Putra)
                            <br>Adhitia Erfina, S.T., M. Kom (Ketua Prodi Sistem Informasi)
                            <br>Sudin Saepudin, S. Kom., M. Kom (Sekretaris Prodi Sistem Informasi)
                            <br>Falentino Sembiring, S. Kom., M. Kom (Kemahasiswaan Prodi Sistem Informasi)
                            <br>Habi Baturohmah, S.Kom., M.Kom (Penelitian dan Pengabdian Kepada Masyarakat Prodi Sistem Informasi)
                            <br>
                            <br>
                            <h6><b>Ketua Pelaksana</b></h6>
			                Arny Lattu, S.Pd.Kom., M.Kom (Kerjasama Nasional dan Internasional Prodi Sistem Informasi)
                            <br>
                            <br>
                            <h6><b>Koord. Program Acara</b></h6>
                            Prasetyo Hartanto, S.E., M.M (Conference Universitas Nusa Putra)
                            <br>
                            <br>
                            <h6><b>Koord. Peninjau Naskah dan Session Chair</b></h6>
                            Adhitia Erfina, S.T., M. Kom
                            <br>Sudin Saepudin, S. Kom., M. Kom
                            <br>Falentino Sembiring, S. Kom., M. Kom
                            <br>Arny Lattu, S.Pd.Kom., M.Kom
                            <br>
                            <br>
                            <h6><b>Tim Program Teknis</b></h6>
                            Dr. Giri Verianti, S.Pd., M.Pd
                            <br>Dr. Asep Zuhara Argawinata, S.I.Kom., M.I.Kom
                            <br>Dr. Sumarna, S.Pd., M.Pd
                            <br>Ir. Deni Hasman, M.P
                            <br>Dr. Gina Syabani Yuda, S.Pd., M.Pd
                            <br>Mupaat, S.Kom, M.Kom
                            <br>Dudih Gustian, A.Md., S.T., M.Kom
                            <br>Agung Jasa Muttaqien Usmadi, S.Sos., M.Kom
                            <br>Wisuda Jatmiko, S. Kom., M.I.Kom
                            <br>Sihabudin, S.T., M. Kom. 
                            <br>Nunik Destria Arianti, S.Kom., M.Kom
                            <br>Muhamad Muslih, M.Kom
                            <br>Sudin Saepudin, S.Kom., M.Kom
                            <br>Carti Irawan, S.Kom., M.Kom
                            <br>Falentino Sembiring, S.Kom., M.Kom
                            <br>Adhitia Erfina, S.T., M.Kom
                            <br>Arny Lattu, S.Pd.Kom., M.Kom
                            <br>Dede Sukmawan, S. Kom., M.Kom
                            <br>M. Anton Permana, S. Kom., M.Kom
                            <br>Rieska Rahayu Ayuningsih, S.T., M.Kom
                            <br>
                            <br><b>Komite Pelaksana Lapangan:</b>
                            <br><b><h6>Ketua Panitia/Divisi Sponsorship</b></h6>
                            Arya Rambu Rambani
                            <br>
                            <br>
                            <h6><b>Divisi Sekretaris</b></h6>
                            Aurelia Nareswari Fauziyah
                            <br>
                            <br>
                            <h6><b>Bendahara</b></h6>
                            Esa Putri Ibella
                            <br>
			                <br>
                            <h6><b>Divisi IT dan Operator</b></h6>
                            M.Lutfi
                            <br>
			                <br>
                            <h6><b>Divisi Humas dan Publikasi</b></h6>
                            Vika Nuralliya Ananda
                            <br>
			                <br>
                            <h6><b>Divisi Design</b></h6>
                            Hade Dwinamber
                            <br>
			                <br>
                            <b>Master of Ceremony</b>
                            <br>Azzahra
                            <br>
                            <br>
                            <b>Moderator</b>
                            <br>Moderator Pembicara 1 : Cecep Warman, M.Kom
                            <br>Moderator Pembicara 2 : Rieska Rahayu Ayuningsih, S.T., M.Kom
                            <br>Moderator Pembicara 3 : M. Anton Permana, S. Kom., M.Kom
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Daftar Panitia -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3>Contact <span>Us</span></h3>
                </div>

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.754525020029!2d106.87535044202625!3d-6.905277588803243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6836505836821d%3A0x619b6e8271f232cc!2sNusa%20Putra%20University!5e0!3m2!1sid!2sid!4v1619766529562!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            <br>
                            <br>
                            <a class="btn btn-outline-secondary rounded-pill" href="">VIEW 3D</a>
                            <br>
                            <br>
                            <table>
                                <tr>
                                    <td><b>Kontak Umum :</b></td>
                                </tr>
                                <tr>
                                    <td>sismatik@nusaputra.ac.id</td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Kontak Person Informasi Peserta Seminar :</b></td>
                                </tr>
                                <tr>
                                    <td>Aurelia Nareswari Fauziyah</td>
                                </tr>
                                <tr>
                                    <td>WA +62 896 5751 7347</td>
                                </tr>
                                <tr>
                                    <td>aurelia.nareswari_si23@nusaputra.ac.id</td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Kontak Person Makalah Seminar dan Informasi Material :</b></td>
                                </tr>
                                <tr>
                                    <td>Vika Nuralliya Ananda</td>
                                </tr>
                                <tr>
                                    <td>WA +62 857 9820 2551</td>
                                </tr>
                                <tr>
                                    <td>vika.nuralliya_si23@nusaputra.ac.id</td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Kontak Person Sponsorship :</b></td>
                                </tr>
                                <tr>
                                    <td>Arya Rambu Rambani</td>
                                </tr>
                                <tr>
                                    <td>WA +62 815 6317 1144</td>
                                </tr>
                                <tr>
                                    <td>arya.rambu_si20@nusaputra.ac.id</td>
                                </tr>
                            </table>


                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- Footer -->
    <div class="text-center m-3">
        <strong> &copy; <?php echo date('Y') ?> SISMATIK | Seminar Nasional Sistem Informasi & Manajemen Informatika</strong>
    </div>
    <!-- Akhir Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Disable Right -->
    <script>
        document.addEventListener("contextmenu", function(disableright) {
            disableright.preventDefault();
        })
    </script>

</body>

</html>