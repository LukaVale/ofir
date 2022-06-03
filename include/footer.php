<p class="text-center">MOJA STRANICA. All Rights Reserved &copy; <span id="date"> </span> </p>

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
    });
</script>
<script>
        date = new Date();
        year = date.getFullYear();
        month = date.getMonth() + 1;
        day = date.getDate();
        document.getElementById("date").innerHTML = day+"." + month+"." + year+".";
</script>