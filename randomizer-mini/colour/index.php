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
      <h2>Get Your Random Colour</h2>
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
          <div id="result" class="box-colour"></div>
        </div>
      </div>
      <div class="container">
        <form id="result-code">
          <div class="form-group row">
            <div class="col-6">
              <div class="input-group">
                <input type="text" class="form-control" id="result-cmyk" placeholder="CMYK" readonly>
                <div class="input-group-append">
                  <button type="button" class="btn btn-success" onclick="copyToClipboard('result-cmyk')">
                    <i class="far fa-copy"></i> Copy
                  </button>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="input-group">
                <input type="text" class="form-control" id="result-rgb" placeholder="RBG" readonly>
                <div class="input-group-append">
                  <button type="button" class="btn btn-success" onclick="copyToClipboard('result-rgb')">
                    <i class="far fa-copy"></i> Copy
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button type="button" class="btn btn-primary btn-block" onclick="generateRandomColor()"><li class="fas fa-random"></li> Generate</button>
        </div>
      </div>

      <?php include "../universal/footer.php" ?>

    </div>
  </div>
</div>
</body>

<?php include "../universal/script.php" ?>

<script>
  function generateRandomColor() {
    // Generate random values for RGB
    var red = Math.floor(Math.random() * 256);
    var green = Math.floor(Math.random() * 256);
    var blue = Math.floor(Math.random() * 256);

    // Convert RGB to CMYK
    var c = 1 - red / 255;
    var m = 1 - green / 255;
    var y = 1 - blue / 255;
    var k = Math.min(c, m, y);
    c = (c - k) / (1 - k);
    m = (m - k) / (1 - k);
    y = (y - k) / (1 - k);
    k = k.toFixed(2);

    // Update the color box
    var colorBox = document.getElementById('result');
    colorBox.style.backgroundColor = 'rgb(' + red + ',' + green + ',' + blue + ')';

    // Update CMYK and RGB inputs
    document.getElementById('result-cmyk').value = 'C: ' + c.toFixed(2) + ' M: ' + m.toFixed(2) + ' Y: ' + y.toFixed(2) + ' K: ' + k;
    document.getElementById('result-rgb').value = 'R: ' + red + ' G: ' + green + ' B: ' + blue;
  }

  function copyToClipboard(elementId) {
    var element = document.getElementById(elementId);
    element.select();
    document.execCommand('copy');
    alert('Text copied to clipboard: ' + element.value);
  }

    document.getElementById('result-code').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah perilaku bawaan formulir
    generateRandomColor();
  });
</script>

</html>