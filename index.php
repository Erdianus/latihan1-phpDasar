<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Latihan1 Dasar PHP</title>
</head>

<body>
  <div class="container">
    <!-- Section Form input -->
    <div class="title">
      <h1>Latihan1 Dasar PHP</h1>
    </div>
    <div class="form">
      <form action="index.php" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama anda</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="perulangan" class="form-label">Masukkan Jumlah Perulangan</label>
          <input type="number" class="form-control" id="perulangan" name="perulangan">
        </div>
        <div class="submit d-flex justify-content-center">
          <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </div>
      </form>
    </div>
    <!-- Section OUTPUT -->
    <div class="output">
      <div class="title">
        <h1>Output</h1>
      </div>
      <table class="table table-hover">
        <?php
        if (isset($_POST["submit"])) {
          if (!empty($_POST["nama"]) && !empty($_POST["perulangan"])) {
            if ($_POST['perulangan'] >= 1) {
              $input = [
                'nama' => $_POST["nama"],
                'perulangan' => $_POST["perulangan"]
              ];
              for ($i = 1; $i <= $input['perulangan']; $i++) {
                echo "<tr><td>Haloo " . $input["nama"] . ", anda melakukan perulangan ke-" . $i . "</td></tr>";
              }
              $output = $input['perulangan'] % 2 == 0 ? "Genap" : "Ganjil";
              echo "<tr><td>" . $input['perulangan'] . " adalah bilangan <strong>" . $output . "<strong></td></tr>";
            } else {
              echo "<h3>Perulangan anda minimal 1</h3>";
            }
          } else {
            echo "<h3>Form anda belum terisi semua</h3>";
          }
        }
        ?>
      </table>
    </div>

  </div>
</body>

</html> 