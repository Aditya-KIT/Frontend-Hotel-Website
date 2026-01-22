<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arise Hotel - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('include/links.php');?>
    <style>
      .box{
        border-top-color: #2ec1ac !important;
      }
    </style>
</head>
<body class="bg-light">
  <?php require('include/header.php');?>
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT ARISE HOTEL</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Our hotel is considered as one of the most luxurious & best hotels in Varanasi. Whether you seek a tranquil <br>retreat or a romantic getaway, the resort seamlessly caters to all your needs.    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>
          In the vibrant landscape of Varanasi, Uttar Pradesh, The Arise Hotel stands tall, a testament to opulence and refinement. Mr. Naman Dhir Ji, a visionary, founded this exquisite resort in 2022, presenting 32 meticulously designed rooms, each promising a unique and indulgent experience
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images/about.png" class="w-75">

      </div>     
    </div>
  </div>

  <div class="container mt-5 ">
    <div class="row justify-content-between">
      <div class="col-lg-3 col-md-6 mb-4 px-2">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/images.png" width="70px">
          <h4 class= "mt-3">
            100+ ROOMS
          </h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-2">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/images.jfif" width="70px">
          <h4 class="mt-3">
            200+ CUSTOMERS
          </h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-2">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/rating.jpg" width="70px">
          <h4 class= "mt-3">
            150+ RATING
          </h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-2">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/staff.jpeg" width="70px">
          <h4 class= "mt-3">
            100+ Rooms
          </h4>
        </div>

      </div>
    </div>

  </div>

  <h3 class="my-5 fw-bold h-font text-center"> MANAGEMENT TEAM</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/management1.png" width="275px">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/management2.png" width="275px">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/management3.png" width="275px">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/management1.png" width= "275px">
          <h5 class="mt-2">Random Name</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <?php require('include/footer.php');?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:3,
      spaceBetween:40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: "1",
        },
        640: {
          slidesPerView: "1",
        },
        768: {
          slidesPerView: "2",
        },
        1024: {
          slidesPerView: "3",
        },
      }
    });
  </script>
</body>

</html>