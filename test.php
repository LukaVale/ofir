<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <title>FancyBox 1.3.4 | Demonstration</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script>
        !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("a[rel=example_group]").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titlePosition': 'over',
            });
        });
    </script>
</head>

<body>
    <section class="gallery">
        <div class="container-lg ">
            <div class="row gy-4 row-cols-sm-2 row-cols-md-4 row-cols-1 justify-content-center ">
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
                <div class="d-flex justify-content-center">
                    <a rel="example_group" href="slike/slika.jpg"><img class="gallery-item" alt="" src="slike/slika.jpg" /></a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>