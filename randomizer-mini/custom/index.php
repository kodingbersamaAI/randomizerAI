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
      <h2>Get Your Random Custom Data</h2>
      <hr>
      <div class="row">
        <div class="col-4 col-md-2">
          <a href="../home" class="btn btn-primary btn-block"><li class="fas fa-home"></li> Menu</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-12 text-center">
          Your Result:<br>
          <h1 id="result">-</h1><br>
        </div>
      </div>
      <div class="container">
        <form id="custom-setting">
          <div class="form-group row">
            <div class="col-12">
              <div class="input-group">
                <textarea class="form-control" id="custom-data" placeholder="Separate each with Enter" rows="5" oninput="numberLines()" required></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-6 text-center">
          <button type="button" class="btn btn-danger btn-block" onclick="resetRandomCustom()">
            <i class="fas fa-trash"></i> Reset
          </button>
        </div>
        <div class="col-6 text-center">
          <button type="button" class="btn btn-primary btn-block" onclick="generateRandomCustom()">
            <i class="fas fa-random"></i> Generate
          </button>
        </div>
      </div>

      <?php include "../universal/footer.php" ?>

    </div>
  </div>
</div>
</body>

<?php include "../universal/script.php" ?>

<script>
  function resetRandomCustom() {
    document.getElementById('custom-data').value = '';
    document.getElementById('result').innerText = '-';
  }

  function numberLines() {
    var textarea = document.getElementById('custom-data');
    var lines = textarea.value.split('\n');

    for (var i = 0; i < lines.length; i++) {
      // Check if the line already has a number, if not, add one
      if (!/^\d+\./.test(lines[i])) {
        lines[i] = (i + 1) + '. ' + lines[i];
      }
    }

    textarea.value = lines.join('\n');
  }

  function generateRandomCustom() {
    var customData = document.getElementById('custom-data').value;

    // Split the input data by newline character
    var dataArray = customData.split(/\n/);

    // Remove empty strings from the array
    dataArray = dataArray.filter(function(item) {
      return item.trim() !== '';
    });

    if (dataArray.length === 0) {
      alert('Please enter at least one data item.');
      return;
    }

    // Filter out lines with numbers added by numberLines function
    dataArray = dataArray.map(function(item) {
      return item.replace(/^\d+\.\s*/, ''); // Remove the number and any leading spaces
    });

    if (dataArray.length === 0) {
      alert('No valid data items to choose from.');
      return;
    }

    // Generate a random index and display the result
    var randomIndex = Math.floor(Math.random() * dataArray.length);
    var randomValue = dataArray[randomIndex].trim();

    // Display the result in the "result" element
    document.getElementById('result').innerText = randomValue;
  }

    document.getElementById('custom-setting').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah perilaku bawaan formulir
    generateRandomColor();
  });
</script>

</html>