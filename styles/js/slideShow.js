window.addEventListener("load", function() {
    var slides = document.getElementsByClassName("slide");
    var currentSlide = 0;

    // Show the first slide and start the slideshow
    slides[currentSlide].style.display = "block";
    setInterval(nextSlide, 3000); // Change slide every 3 seconds

    function nextSlide() {
        // Hide the current slide
        slides[currentSlide].style.display = "none";

        // Move to the next slide
        currentSlide = (currentSlide + 1) % slides.length;

        // Show the next slide
        slides[currentSlide].style.display = "block";
    }
});