@extends('layouts.portfolio')

  @section('details')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/SMKN-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/SMKN-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/SMKN-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Pendidikan di SMKN 1 Lumajang</h3>
              <ul>
                <li><strong>Tugas</strong>: Pendidikan Pancasila dan Kewarganegaraan</li>
                <li><strong>Tempat</strong>: SMKN 1 Lumajang, Lumajang, JawaTimur</li>
                <li><strong>Tanggal Tugas</strong>: 02 September, 2023</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Gotong royong</h2>
              <p>
                Gotong royong adalah sebuah budaya asli Indonesia yang tidak dimiliki oleh negara lain. Budaya ini telah diwariskan secara turun-temurun dari generasi ke generasi. Gotong royong merupakan sebuah konsep yang berarti bekerja bersama-sama untuk mencapai tujuan yang sama. Tujuan dari gotong royong adalah pekerjaan menjadi lebih ringan, cepat selesai, dan mempersingkat waktu.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  @endsection