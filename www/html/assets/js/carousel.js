function plusSlides() {
    var blockSlide = 0;
    var slides = document.getElementsByClassName("carousel-item");

    for(i=0; i < slides.length; i++)
    {
        if(slides[i].style.display == "block")
        {
            blockSlide = i;
        }
        slides[i].style.display = "none";
    }

    if(blockSlide == slides.length-1)
    {
        slides[0].style.display = "block";
    }
    else
    {
        slides[blockSlide+1].style.display = "block";
    }
}

function minusSlides() {
    var blockSlide = 0;
    var slides = document.getElementsByClassName("carousel-item");

    for(i=0; i < slides.length; i++)
    {
        if(slides[i].style.display == "block")
        {
            blockSlide = i;
        }
        slides[i].style.display = "none";
    }

    if(blockSlide == 0)
    {
        slides[slides.length-1].style.display = "block";
    }
    else
    {
        slides[blockSlide-1].style.display = "block";
    }
}