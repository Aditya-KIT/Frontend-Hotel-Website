<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arise Hotel - Rooms</title>
    <?php require('include/links.php');?>
</head>
<body class="bg-light">
  <?php require('include/header.php');?>
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        <nav class="navbar navbar-expand-lg custom-bg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="mt-2 text-white">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 " id="filterDropdown">
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3"style="font-size:18px">Check Availability </h5>
              <label class="form-label" style="font-weight:500;">Check-in</label>
               <input type="date" class="form-control shadow-none mb-3">
              <label class="form-label" style="font-weight:500;">Check-out</label>
               <input type="date" class="form-control shadow-none">
            </div>
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3"style="font-size:18px">Facilities</h5>
              <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f1">Facility One</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f2">Facility Two</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f3">Facility Three</label>
              </div>
            </div>
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3"style="font-size:18px">Guests</h5>
              <div class="d-flex">
                <div class="me-3">
                  <label class="form-label">Adults</label>
                  <input type="number"class="form-control shadow-none">
                </div>
                <div class="me-3">
                  <label class="form-label">Children</label>
                  <input type="number"class="form-control shadow-none">
                </div>
              </div>
            </div>

            </div>
          </div>
          </nav>
      </div>
    
      <div class="col-lg-9 col-md-12 mb-lg-0 px-2 ">
        <div class="card mb-3 border:2 rounded">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="rooms/room.png" class="img-fluid rounded">
            </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-2">Simple Room</h5>
              <div class="features mb-3"> <!-- PHP queries use in future-->
                <h6 class="mb-1"> Features</h6>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  1 Rooms
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  1 Sofa
                </span>
              </div>
              <div class="facilities">
                <h6 class="mb-1"> Facilities</h6>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Wifi
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Television
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    AC
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Room Heater
                </span>
              </div>
              <div class="guests">
                <h6 class="mb-1"> Guests</h6>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                  2 Adult
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                  2 Childrens
                </span>
              </div>
        </div>
          <div class="col-md-2 mt-lg-2 mt-md-2 mt-4 text-center">
            <h6 class="mb-4">₹1000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
        </div>

        <div class="card mb-3 border:2 rounded">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="rooms/room.png" class="img-fluid rounded">
            </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-2">Deluxe Room</h5>
              <div class="features mb-3"> <!-- PHP queries use in future-->
                <h6 class="mb-1"> Features</h6>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  1 Sofa
                </span>
              </div>
              <div class="facilities">
                <h6 class="mb-1"> Facilities</h6>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Wifi
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Television
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    AC
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Room Heater
                </span>
              </div>
              <div class="guests">
                <h6 class="mb-1"> Guests</h6>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                  4 Adult
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                  6 Childrens
                </span>
              </div>
        </div>
          <div class="col-md-2 mt-lg-2 mt-md-2 mt-4 text-center">
            <h6 class="mb-4">₹4000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
        </div>

        <div class="card mb-3 border:2 rounded">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="rooms/room.png" class="img-fluid rounded">
            </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-2">Super Deluxe Room</h5>
              <div class="features mb-3"> <!-- PHP queries use in future-->
                <h6 class="mb-1"> Features</h6>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  2 Bathroom
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  2 Balcony
                </span>
                <span class="badge rounded-pil bg-light text-dark text-wrap">
                  3 Sofa
                </span>
              </div>
              <div class="facilities">
                <h6 class="mb-1"> Facilities</h6>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Wifi
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Television
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    AC
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                    Room Heater
                </span>
              </div>
              <div class="guests">
                <h6 class="mb-1"> Guests</h6>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                  6 Adult
                </span>
                <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap">
                  6 Childrens
                </span>
              </div>
        </div>
          <div class="col-md-2 mt-lg-2 mt-md-2 mt-4 text-center">
            <h6 class="mb-4">₹6000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
        </div>
      </div>
    
              
    </div>
  </div>

  <?php require('include/footer.php');?>
</body>

</html>