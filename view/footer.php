<div class="row mb footer">
           <p style =" display: flex; justify-content: center; align-items: center; font-size: 14px;"> 3120221072 - TRƯƠNG CÔNG NON </p>
        </div>
    </div>
<!-- js cho slideshow -->
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); //2 seconds
    }
</script>

</body>

</html>