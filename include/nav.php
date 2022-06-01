<link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<nav class="navbar navbar-expand-lg navbar-light justify-content-center mt-4">
      <div class="container ">
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
            <li class="nav-item" id="index">
              <a class="nav-link " style="color: #e1e2df; " href="index.php"  >NASLOVNA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: #e1e2df;" href="mojgrad.php">MOJ GRAD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: #e1e2df;" href="omeni.php"><span>O MENI</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: #e1e2df;" href="galerija.php"> <span> GALERIJA </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: #e1e2df;" href="kontakt.php">KONTAKT</a>
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
              $(this).addClass('active-nav');
                
            }
        });
        if(window.location.pathname == "/ofir/ofir/index.php"){
          const element = document.getElementById("index");
          element.remove(); 
        }
//         var c=document.getElementById('myCanvas');
//         var ctx=c.getContext('2d');
//       ctx.font='30px Arial';
//     var m=ctx.measureText('It is a great day!');
// ctx.fillText(m.width,10,30);
    });

</script>