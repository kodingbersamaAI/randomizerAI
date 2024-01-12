<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Randomizer.AI</title>

  <?php include "../universal/head.php" ?>

</head>
<body>
<div class="wrapper">
  <br>
  <div class="row">
    <div class="col-md-8 offset-md-2 col-10 offset-1">
      <h2>Get Your Random Data</h2>
      <hr>
      <div class="row">
        <div class="col-4 col-md-2">
          <a href="../number" class="btn btn-primary btn-block"><li class="fas fa-dice"></li> Number</a>
        </div>
        <div class="col-4 col-md-2">
          <a href="../colour" class="btn btn-primary btn-block"><li class="fas fa-palette"></li> Colour</a>
        </div>
        <div class="col-4 col-md-2">
          <a href="../custom" class="btn btn-primary btn-block"><li class="fas fa-font"></li> Custom Text</a>
        </div>
        <div class="col-4 col-md-2">
          <a href="../name" class="btn btn-primary btn-block"><li class="fas fa-id-card"></li> Name</a>
        </div>
      </div>

      <?php include "../universal/footer.php" ?>

    </div>
  </div>
</div>
</body>

<?php include "../universal/script.php" ?>

</html>