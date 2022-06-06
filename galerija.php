<!DOCTYPE html>
<html lang="en">
<head>
  <title>Galerija</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include('include/nav.php') ?>
  <section class="gallery ">
     <div class="container-lg ">
        <div class="row gy-4 row-cols-sm-2 row-cols-md-4 row-cols-1 justify-content-center ">
           <div class="col d-flex justify-content-center ">
              <img src="slike/slika.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col d-flex justify-content-center ">
              <img src="slike/slika2.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col d-flex justify-content-center ">
              <img src="slike/slika3.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col d-flex justify-content-center ">
              <img src="slike/slika4.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col d-flex justify-content-center ">
              <img src="slike/slika5.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col d-flex justify-content-center ">
              <img src="slike/slika6.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col d-flex justify-content-center ">
            <img src="slike/slika7.jpg" class="gallery-item" alt="gallery">
         </div>
         <div class="col d-flex justify-content-center ">
            <img src="slike/slika8.jpg" class="gallery-item" alt="gallery">
         </div>
         <div class="col d-flex justify-content-center ">
            <img src="slike/slika9.jpg" class="gallery-item" alt="gallery">
         </div>
         <div class="col d-flex justify-content-center ">
            <img src="slike/slika.jpg" class="gallery-item" alt="gallery">
         </div>
        </div>
     </div>
  </section>
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         <img src="slika.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>
<footer class="section ">
    <?php include('include/footer.php') ?>
    </footer>


<script src="js/main.js"></script>

</body>
</html>