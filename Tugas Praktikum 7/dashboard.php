<?php 
 
session_start();
 
if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:wght@700&family=Poppins:wght@300&family=Sniglet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="container">
  <h3>Why you should choose Us?</h3>
  <div class="container-fluid">
      <div class="row text-center">
        <div class="col mb-3">
          <h2 class="caption">Our Product Advantages</h2>
        </div>
      </div>
      <div class="row justify-content-center">
      <img src="images/designer.png" alt="Ilustrasion" style="max-width="100px">
        <div class="col-5">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla perferendis esse eligendi fuga aliquam in hic architecto molestiae animi non? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolor natus officiis enim. Dolorem blanditiis, aut et labore nesciunt explicabo dicta quas atque. Natus voluptatum, fugit maiores. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni eos voluptate deleniti iste facilis aperiam.</p>
        </div>
        <div class="col-5">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur explicabo tempora dolor. Mollitia maxime harum totam unde repellendus error autem, molestias porro dignissimos adipisci culpa ipsa possimus voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sequi ab possimus aspernatur? Natus, officia reprehenderit ullam iste laboriosam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam explicabo hic, nostrum est accusamus reprehenderit et tenetur quibusdam earum minima!</p>
        </div>
      </div>
    </div>
            <div class="input-group" style="color: #e72734; font-size: 30px;">
            <a href="logout.php" class="btn">LOGOUT</a>
            </div>
</div>
    
</body>
</html>