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
            <div class="col-4">
              <label>Combination</label>
              <select class="form-control" id="name-combination" aria-label="Name Combination" required>
                <option value="" selected disabled>Select One</option>
                <option value="first+middle">First + Middle</option>
                <option value="first+last">First + Last</option>
                <option value="middle+last">Middle + Last</option>
                <option value="first+middle+last">First + Middle + Last</option>
              </select>
            </div>
            <div class="col-4 offset-1">
              <label>Languange</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="name" id="name-en" required>
                <label class="form-check-label" for="name-en">
                  English
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="name" id="name-id" required>
                <label class="form-check-label" for="name-id">
                  Indonesia
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button type="button" class="btn btn-primary btn-block" onclick="generateRandomName()">
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
  function generateRandomName() {
    // Dapatkan kombinasi yang dipilih
    var combination = document.getElementById("name-combination").value;

    // Dapatkan bahasa yang dipilih
    var language;
    if (document.getElementById("name-en").checked) {
      language = "en";
    } else if (document.getElementById("name-id").checked) {
      language = "id";
    } else {
      alert("Please select a language");
      return;
    }

    // Periksa apakah kombinasi sudah dipilih
    if (!combination) {
      alert("Please select a name combination");
      return;
    }

    // Panggil fungsi untuk menghasilkan dan menampilkan nama acak
    var randomName = generateName(combination, language);
    document.getElementById("result").innerText = randomName;
  }

  function generateName(combination, language) {
    // Logika untuk menghasilkan nama acak berdasarkan kombinasi dan bahasa
    // Anda dapat menyesuaikan logika ini berdasarkan kebutuhan Anda
    var firstNames, middleNames, lastNames;

    // Ganti dengan data nyata Anda atau logika untuk mengambil nama
    // Contoh data statis
    if (language === "en") {
      firstNames = ["John", "Alice", "David", "Emily", "Michael", "Sophia", "Matthew", "Olivia", "Ethan", "Emma", "Daniel", "Isabella", "Christopher", "Ava", "Mia", "William", "Abigail", "Alexander", "Emily", "James", "Grace", "Liam", "Charlotte", "Andrew", "Sophie", "Henry", "Avery", "Benjamin", "Ella", "Jackson"];
      middleNames = ["Doe", "Jane", "Robert", "Grace", "William", "Elizabeth", "James", "Mia", "Benjamin", "Ava", "Michael", "Sophia", "Matthew", "Olivia", "Ethan", "Emma", "Daniel", "Isabella", "Christopher", "Abigail", "David", "Lily", "Nathaniel", "Amelia", "Charles", "Madison", "Joseph", "Zoe", "Jacob", "Chloe", "Sophie"];
      lastNames = ["Smith", "Johnson", "Williams", "Jones", "Brown", "Davis", "Miller", "Garcia", "Rodriguez", "Martinez", "Hernandez", "Lopez", "Gonzalez", "Wilson", "Anderson", "Thomas", "Taylor", "Moore", "Jackson", "White", "Lee", "Walker", "Hall", "Young", "Allen", "Wright", "King", "Scott", "Evans", "Cooper"];
    } else if (language === "id") {
      firstNames = ["Budi", "Siti", "Adi", "Lina", "Hadi", "Dewi", "Rudi", "Yanti", "Hendra", "Sinta", "Ahmad", "Rina", "Agus", "Diana", "Hendra", "Sari", "Dedy", "Ratna", "Eko", "Dewi", "Ivan", "Nina", "Hadi", "Nia", "Arief", "Rini", "Robby", "Anita", "Eko", "Yuni"];
      middleNames = ["Santoso", "Rahayu", "Wijaya", "Lestari", "Prabowo", "Surya", "Hadi", "Wulandari", "Setiawan", "Nur", "Susanto", "Fitri", "Budiman", "Ayu", "Saputra", "Widodo", "Sulistyo", "Purwanto", "Dewanto", "Wahyuni", "Setyo", "Nurul", "Santoso", "Dewi", "Wibowo", "Putri", "Yanto", "Ratna", "Prabowo", "Hidayah"];
      lastNames = ["Wijaya", "Santoso", "Kusuma", "Hadi", "Surya", "Nugroho", "Saputra", "Widodo", "Sulistyo", "Purwanto", "Wahyudi", "Susanto", "Putra", "Wibowo", "Utomo", "Siregar", "Setiawan", "Hartanto", "Lestari", "Yulianto", "Kurniawan", "Yusuf", "Siregar", "Lubis", "Budi", "Suharto", "Hutomo", "Sari", "Pratiwi"];
    }

    // Pilih secara acak nama dari setiap kategori
    var randomFirstName = firstNames[Math.floor(Math.random() * firstNames.length)];
    var randomMiddleName = middleNames[Math.floor(Math.random() * middleNames.length)];
    var randomLastName = lastNames[Math.floor(Math.random() * lastNames.length)];

    var randomName = "";

    switch (combination) {
      case "first+middle":
        randomName = randomFirstName + " " + randomMiddleName;
        break;
      case "first+last":
        randomName = randomFirstName + " " + randomLastName;
        break;
      case "middle+last":
        randomName = randomMiddleName + " " + randomLastName;
        break;
      case "first+middle+last":
        randomName = randomFirstName + " " + randomMiddleName + " " + randomLastName;
        break;
      default:
        // Handle case default
        break;
    }

    return randomName;
  }

  document.getElementById('custom-setting').addEventListener('submit', function(event) {
  event.preventDefault(); // Mencegah perilaku bawaan formulir
  generateRandomName();
});

</script>

</html>