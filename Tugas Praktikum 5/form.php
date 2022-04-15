<?php 
         $asal = [
         'Bandara Internasional Soekarno Hatta (CGK) ' => 150000,
         'Bandara Husein Sastranegara (BDO)' => 100000,
         'Bandara Abdul Rahman Saleh (MLG)' => 90000,
         'Bandara Ngurai Rai (DPS)' => 120000,
         'Bandara Sultan Iskandar Muda (BTJ)' => 80000
        ];
        $tujuan = [
         'Bandara Internasional Soekarno Hatta (CGK) ' => 150000,
         'Bandara Husein Sastranegara (BDO)' => 100000,
         'Bandara Abdul Rahman Saleh (MLG)' => 90000,
         'Bandara Ngurai Rai (DPS)' => 120000,
         'Bandara Sultan Iskandar Muda (BTJ)' => 80000
        ];

        function ambilPajakAsal($asal, $tujuan){
            $pajak = $asal[$tujuan];
            return $pajak;
        }

        function ambilPajakTujuan($tujuan, $asal){
            $pajak = $tujuan[$asal];
            return $pajak;
        }
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- My CSS -->
 <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700&family=Fredoka:wght@300;400;500&family=Lobster&family=Pacifico&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Poppins:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap"
      rel="stylesheet"
    />
    <title>Penerbangan</title>
  </head>
  <body>
  <div class="navbar navbar-expand-lg" style="background-color: #9bbde4">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>Fly With Us</strong></a>
        <ul class="nav nav-pills ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="form.php" style="color: white">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html" style="color: white">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- form penerbangan -->
    <section>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mt-3 text-center">Form Pendaftaran Maskapai</h2>
                <form method="post">
                    <div class="form-group mb-3">
                        <label for="nama">Nama Maskapai</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tujuan">Asal</label>
                        <select class="form-select" id="asal" name="asal">
                            <?php foreach ($asal as $as => $pajak) : ?>
                            <option value="<?= $as ?>"><?= $as; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tujuan">Tujuan</label>
                         <select class="form-select" id="tujuan" name="tujuan">
                             <?php foreach($tujuan as $tj => $pajak) :?>
                            <option value="<?= $tj; ?>"><?= $tj; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga">Harga Tiket</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga Tiket">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </section>

    <?php 
    $all_data = [];

    if(isset($_POST['submit'])){
        $pajak = ambilPajakAsal($asal, $_POST['asal']) + ambilPajakTujuan($asal, $_POST['tujuan']);
        $total = $pajak + $_POST['harga'];

         $data_input = [
                "nama" => $_POST['nama'],
                "asal" => $_POST['asal'],
                "tujuan" => $_POST['tujuan'],
                "harga" => $_POST['harga'],
                "pajak" => $pajak,
                "total" => $total
      ];

      array_push($all_data, $data_input);
      $json = json_encode($all_data, true);
    }
    
    ?>


     <!-- tabel penerbangan -->
    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                 
                <div class="col-md-8">
                    <h2 class="text-center mb-3">Jadwal Penerbangan</h2>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nama Maskapai</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Pajak</th>
                        <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_data as $data => $value): ?>
                        <tr>
                            <td><?= $all_data[$data]['nama']  ?></td>
                            <td><?= $all_data[$data]['asal']  ?></td>
                            <td><?= $all_data[$data]['tujuan']  ?></td>
                            <td><?= $all_data[$data]['harga']  ?></td>
                            <td><?= $all_data[$data]['pajak']  ?></td>
                            <td><?= $all_data[$data]['total']  ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center p-2" style="background-color: #9bbde4">
      <p class="text-white">2022 All Rights Created by <a href="https://www.instagram.com/hann.thuu/" target="_blank" class="text-white fw-bold">Hanna Athaya</a></p>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>