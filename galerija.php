<!DOCTYPE html>
<html lang="en">
<head>
  <title>Galerija</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('nav.php') ?>
  <section class="gallery min-vh-97">
     <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-4">
           <div class="col mx-auto">
              <img src="slika.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col mx-auto">
              <img src="slika2.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col mx-auto">
              <img src="slika3.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col mx-auto">
              <img src="slika4.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col mx-auto">
              <img src="slika5.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col mx-auto">
              <img src="slika6.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col mx-auto">
            <img src="slika7.jpg" class="gallery-item" alt="gallery">
         </div>
         <div class="col mx-auto">
            <img src="slika8.jpg" class="gallery-item" alt="gallery">
         </div>
         <div class="col mx-auto">
            <img src="slika9.jpg" class="gallery-item" alt="gallery">
         </div>
         <div class="col mx-auto">
            <img src="slika.jpg" class="gallery-item" alt="gallery">
         </div>
        </div>
     </div>
  </section>
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <img src="img/1.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>
<footer class="section sticky-bottom">
    <?php include('footer.php') ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>