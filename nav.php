<link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<nav class="navbar navbar-expand-lg navbar-light justify-content-center mt-2">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center align-content-center" id="navbarNav" >
          
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link " href="index.php" target="_blank" onclick=func()>NASLOVNA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="mojgrad.php" target="_blank">MOJ GRAD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="omeni.php" target="_blank">O MENI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="galerija.php" target="_blank">GALERIJA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="kontakt.php" target="_blank">KONTAKT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('linija'); $(this).parents('li').addClass('linija');
            }
        });
    });

</script>