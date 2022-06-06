document.addEventListener("click", function(e) {
    if (e.target.classList.contains("gallery-item")) {
        const src = e.target.getAttribute("src");
        document.querySelector(".modal-img").src = src;
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
        myModal.show();
    }
});

$(window).resize(function() {
    if (window.innerWidth < 1340) {
        $('h1').addClass('display-6').removeClass('display-3');
    } else {
        $('h1').addClass('display-3').removeClass('display-6');
    }
});

$(function() {
    if (window.location.pathname == "/ofir/ofir/index.php") {
        $
    }
});