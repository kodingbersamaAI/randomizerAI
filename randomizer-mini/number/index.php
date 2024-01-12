<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Randomizer.AI</title>

  <?php include "../universal/head.php" ?>

</head>
<body hold-transition>
<div class="wrapper">
  <br>
  <div class="row">
    <div class="col-md-8 offset-md-2 col-10 offset-1">
      <h2>Get Your Random Number</h2>
      <hr>
      <div class="row">
        <div class="col-4 col-md-2">
          <a href="../home" class="btn btn-primary btn-block"><li class="fas fa-home"></li> Menu</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-12 text-center">
          Your Result:<br><br>
          <h1 id="result">-</h1>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-12 text-center">
          <form id="setting-number">
            <div class="form-group row">
              <div class="col-4">
                <input type="number" class="form-control" id="number-start" placeholder="Start" required>
              </div>
              <div class="col-4">
                <input type="number" class="form-control" id="number-end" placeholder="End" required>
              </div>
              <div class="col-4">
                <button type="button" class="btn btn-primary btn-block" onclick="generateRandomNumber()"><li class="fas fa-random"></li> Generate</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <?php include "../universal/footer.php" ?>

    </div>
  </div>
</div>
</body>

<?php include "../universal/script.php" ?>

<script>
  function generateRandomNumber() {
    var start = parseInt(document.getElementById('number-start').value);
    var end = parseInt(document.getElementById('number-end').value);

    if (isNaN(start) || isNaN(end)) {
      alert('Please enter valid numbers for both start and end.');
      return;
    }

    var randomNumber = Math.floor(Math.random() * (end - start + 1)) + start;
    document.getElementById('result').innerText = + randomNumber;
  }

  document.getElementById('setting-number').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah perilaku bawaan formulir
    generateRandomNumber();
  });
</script>

</html>