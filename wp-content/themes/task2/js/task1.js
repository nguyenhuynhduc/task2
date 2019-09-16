$('.owl-carousel').owlCarousel({

    nav:true,
    responsive:{
        300:{
            items:1
        },
        600:{
            items:1
        },
        1024:{
            items:2
        },
        1200:{
            items:4
        }
    }
});


//read more
function btn_read_more() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btn_read_more");
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = ' <img src="images/cap.png">' +" READ MORE" ;
        document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = ' <img src="images/cap.png">' +" READ LESS" ;
        document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
        moreText.style.display = "inline";
    }
}

function btn_read_more1() {
    var dots1 = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
    var btnText = document.getElementById("btn_read_more1");
    if (dots1.style.display === "none") {
        dots1.style.display = "inline";
        btnText.innerHTML = ' <img src="images/cap.png">' +" READ MORE" ;
        document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
        moreText.style.display = "none";
    } else {
        dots1.style.display = "none";
        btnText.innerHTML = ' <img src="images/cap.png">' +" READ LESS" ;
        document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
        moreText.style.display = "inline";
    }
}


// Get the modal
var modal = document.getElementById("myModal");
for (var i=1;i<=24;i++)
{
    var img = document.getElementById("myImg"+i);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };
}
// Get the image and insert it inside the modal - use its "alt" text as a caption
//Get the button
var mybutton = document.getElementById("myBtn");
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Add active class to the current
var header = document.getElementById("home");
var btns = header.getElementsByClassName("menu-nav");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active_menu");
        current[0].className = current[0].className.replace(" active_menu", "");
        this.className += " active_menu";
    });
}

var header1 = document.getElementById("fiel");
var a = header.getElementsByClassName("a-black");
for (var i = 0; i < a.length; i++) {
    a[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active_filter");
        current[0].className = current[0].className.replace(" active_filter", "");
        this.className += " active_filter";
    });
}