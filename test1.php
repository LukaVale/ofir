<!DOCTYPE html>
<html lang="en">
<head>
<title>Galerija</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script>
        !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    
    
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
<?php include('include/nav.php') ?>
    <section class="gallery">
        <div class="container-lg ">
            <div class="row gy-4 row-cols-sm-2 row-cols-md-4 row-cols-1 justify-content-center ">
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika1.jpg"><img class="gallery-item" alt="" src="slike/slika1.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika2.jpg"><img class="gallery-item" alt="" src="slike/slika2.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika3.jpg"><img class="gallery-item" alt="" src="slike/slika3.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika4.jpg"><img class="gallery-item" alt="" src="slike/slika4.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika5.jpg"><img class="gallery-item" alt="" src="slike/slika5.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika6.jpg"><img class="gallery-item" alt="" src="slike/slika6.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika7.jpg"><img class="gallery-item" alt="" src="slike/slika7.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika8.jpg"><img class="gallery-item" alt="" src="slike/slika8.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika9.jpg"><img class="gallery-item" alt="" src="slike/slika9.jpg" /></a>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {
            $("a[rel=example_group]").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titlePosition': 'over',
            });
        });
    </script>

<footer class="section ">
    <?php include('include/footer.php') ?>
    </footer>


<script src="js/main.js"></script>
</body>

</html>