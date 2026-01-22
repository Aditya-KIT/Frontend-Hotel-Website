<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('include/links.php');?>
</head>
<body>
<?php require('include/header.php');?>

<div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
  <nav class="navbar navbar-expand-lg bg-white rounded shadow">
    <div class="container-fluid flex-column align-items-stretch">
      <h4 class="mt-2">FILTERS</h4>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
        <!-- Add content here -->
        <p>Sample filter option</p>
      </div>
    </div>
  </nav>
</div>


<?php require('include/footer.php');?>
</body>
</html>