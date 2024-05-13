<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course notes example code</title>
    <link href="newcss.css" rel="stylesheet" type="text/css">
</head>



<style>


@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');


body
{
    margin: 0;
    background-color: black;
}

h1
{
    font-family: Oswald;
    color: #f36100;
    display: flex;
    justify-content: center;
    align-items: center;
}

h2
{
    font-family: Oswald;
    font-size: 18.5px;
    margin-right: 50px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
}

h2#h2_Nohover
{
     font-family: Oswald;
    margin-top: 30px;
    font-family: Oswald;
    font-size: 30px;
    margin-right: 50px;
    color: orange;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
}

h2:hover
{
     font-family: Oswald;
    font-size: 18.5px;
    margin-right: 50px;
    color: #f36100;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
}

div.header {
/*    position: fixed;*/
 font-family: Oswald;
    opacity: 1;
    padding: 5px;
    display: flex;
    justify-content: center;
    margin-left: 20px;
    margin-right: 20px;
    min-width: 1454px;
    z-index: 1;
    align-content: center;
    align-items: center;
    padding-top: 30px;
}

h4
{
    font-family: Oswald;
    color: white;
    font-size: 25px;
    padding: 15px;
}

div#Ancher
{
     font-family: Oswald;
    color: #f36100;
    display: flex;
    margin-right: 20px;
}

div#Ancher_div
{
    display: flex;
     font-family: Oswald;
}

img#Logo
{
    display: flex;
    margin-right: 275px;
    margin-bottom: 30px;
}

h3
{

     font-family: Oswald;
    color: white;
    font-size: 25px;
    margin-right: 200px;
    border: #f36100 thick solid;
    padding: 15px;
  
}

div.homepage_slideshow-container
{
    margin-left: 10px;
}

#add_gallery{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 85px;
  margin: 12px 60px;

}


#each_add
{
    height: 390px;
    
}


div#adds
{
    display: flex;
    margin-left: 50PX;
}

.column {
  float: left;
  
 padding: 20px;
 margin-left: 20px;
}


div.footer_column
{
 float: left;
 display: flex;
 padding: 20px;
 margin-left: 20px;
 width: 250px;
 height: 150px;
 flex-direction: column;
 color: white;
 font-family: Oswald;
 align-items: flex-start;

}





/* Clearfix (clear floats) */
.row::after {
  clear: both;
  display: table;
}
div.row
{
    display: flex;
    margin-left: 125px;
}


div.row_icons
{
    display: flex;
    margin-left: 125px;
    margin-top: 150px;
    justify-content: center;
    align-items: center;
}

 p
 {
     margin: 0px;
 }
 
 
 div#map
 {
     display: flex;
     margin-left: 165px;
 }


 footer
 {
     background-color: #0a0a0a;
 }
 
div.footer_row
{
    display: flex;
    margin-left: 305px;
    padding-bottom: 50px;
}


.footer_column {
  float: left;
  width: 33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.footer_row:after {
  display: table;
  clear: both;
}



/*slide show*/

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
 max-width: 1500px;
    position: relative;
    margin: auto;
    margin-top: 10px;
}


/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.About-Us-container
{
     max-width: 1500px;
    position: relative;
    margin: auto;
    margin-top: 10px;
}


/*grid*/

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
 align-items: center;
    justify-content: center;
  padding: 10px;
}
.grid-item {
  text-align: center;
}





.About-Us-container
{
    
    margin-left: 30px;
    max-width: 1500px;
    position: relative;
    margin: auto;
    
}


div#About-Us-WhatWeDo
{
    margin-left: 10px;
    display: flex;
    margin-bottom: 70px;


}


div.stats
{
        background-color: gray;
        border-radius: 20px;

}

div#About-Us-Stats
{
 width: 800px;
 height: 20px;
margin-top: 120px;
margin-left: 30px;
 
}



a#percentage
{
   
    font-size: 20px;
    margin-left: 700px;
    color: white;
}


div#Border
{
    border: 3px solid #f36100;
    border-radius: 20px;
}


h2#h2_left
{
    margin-top: 20px;
    font-family: Oswald;
    font-size: 18.5px;
    margin-left: 100px;
    color: white;
    display: flex;
    justify-content: flex-start;
    font-weight: bold;   
    margin-bottom: 0px;
}

h1#h1_Left
{
    
    font-family: Oswald;
    margin-left: 100px;
    color: #f36100;
    display: flex;
    justify-content: flex-start;
    font-weight: bold;   
    margin-top: 0px;
}



div#Our_Team
{
    background-color: #151515;
}


p
{
    color: white;
    margin-left: 6px;
}


div#booking_headers
{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 120px;
    width: 100%;
}


img#slide_images
{
    margin-top: 50px;
    width: 1000px;
    height: 650px;
}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {

  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 30%;
  width: 40px;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #ec5905;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.container {
  position: relative;
  text-align: center;
  color: white;
  margin-top: 150px;
  margin-bottom: 100px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Oswald;
  font-size: 50px;
  font-weight: bold
   
}

img#register
{
    height: 600px;
}

h1#Middle_White
{
    color: white;
    font-size: 40px;
}




.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}



.reviews {
  position: relative;
  max-width: 600px;
  margin: auto;
}

.slide {
  display: none;
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  padding: 16px;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  z-index: 100;
}

.prev {
  left: 0;
}

.next {
  right: 0;
}




</style>



<body>
    <div class="header">
        <img src="https://themewagon.github.io/gymlife/img/logo.png" width="175px" height="50px" id="Logo" alt="Logo">
        <div id="Ancher_div">
            <a href="dashboard"><h2 class="Ancher"> HOME </h2></a>
            <a href="About_Us"><h2 class="Ancher"> ABOUT US </h2></a>
            <a href="Classes"><h2 class="Ancher"> CLASSES </h2></a>
            <a href="Services"><h2 class="Ancher"> SERVICES </h2></a>
            <a href="OurTeam"><h2 class="Ancher"> OUR TEAM </h2></a>
        </div>
    </div>
    <div id="intro">
        <div class="About-Us-container">  
            <div>
                <img src="https://i.ytimg.com/vi/2N8yxqkkx6g/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBrRT0GTZnHi9GPIjAAYLvhY1BC6A" style="width:100%; height:auto">
            </div>
        </div>
        <br>
        <div id="About-Us-WhatWeDo">
            <div id="About-Us-Video">
                <iframe width="630" height="830" src="https://www.youtube.com/embed/wkTFd3QZSP0?si=lYRDYhZbRXgWLzbR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
            </div>
            <div id="About-Us-Stats">
                 <h1>What we do</h1>
               
                <div class="Statistics-border">
                    <p>Body building</p>
                    
                    <div id="Border">
                         <div class="stats" style="height:20px;width:80%"><a id="percentage">80%</a></div>
                    </div>
                    
                    <p>Training</p>
                    <div id="Border">
                    <div class="stats" style="height:20px;width:85%"><a id="percentage">85%</a></div>
                    </div>
                    
                    
                    <p>Fitness</p>
                    <div id="Border">
                    <div class="stats" style="height:20px;width:75%"><a id="percentage">75%</a></div>
                    </div>
                </div>
            </div>
        </div> 
        <div id="Our_Team">
            <div id="booking_headers">
                <div>
                    <h2 id="h2_left">OUR TEAM</h2>
                    <h1 id="h1_Left">TRAIN WITH EXPERTS</h1>
                </div>
                <div>
                  <a href="appointment"><h3 class="Ancher"> APPOINTMENT </h2></a>
                </div>  
            </div>
        </div>
      
        
    
        
        
        

</head>
<body>


    
    

<div class="slideshow-container">

<div class="mySlides fade">
  <img id="slide_images" src="https://getagefit.com/cdn/shop/articles/is-personal-trainer-worth-it.jpg?v=1700581813" style="width: 100%">

</div>

<div class="mySlides fade">
  <img id="slide_images" src="https://origympersonaltrainercourses.co.uk/images/get_image/963/1600" style="width:100%">

</div>

<div class="mySlides fade">
  <img id="slide_images" src="https://www.libm.co.uk/wp-content/uploads/2017/09/35-Personal-Trainer-Fitness-Instructor-Course.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

        
        
        
<div class="container">
  <img src="https://prod-ne-cdn-media.puregym.com/media/792480/deadlift-feature.jpg?quality=80&width=992" alt="register" id="register" style="width:100%;">
  <div class="centered">REGISTRATION NOW TO GET MORE DEALS</div>
</div>
        
        
<h1 id="Middle_White">OUR CILENT SAY</h1>









<div id="Reviews">
    <div class="reviews">
        <div class="slideshow-container">
            <div class="review-slide">
                <img src="https://theabsgym.com/wp-content/uploads/2023/11/Carl-Rourke.jpg" alt="Carl Rourke">
            </div>
            <div class="review-slide">
                <img src="https://theabsgym.com/wp-content/uploads/2023/11/Claire-Pugh.jpg" alt="Claire Pugh">
            </div>
            <div class="review-slide">
                <img src="https://theabsgym.com/wp-content/uploads/2023/11/Laura-Turco.jpg" alt="Claire Pugh">
            </div>
        </div>
        <a class="prev" onclick="changeReviewSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeReviewSlide(1)">&#10095;</a>
    </div>
</div>

<script>
    let reviewSlideIndex = 0;
    let slides = document.getElementsByClassName("review-slide");
    showReviewSlides();

    function showReviewSlides() {
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[reviewSlideIndex].style.display = "block";
    }

    function changeReviewSlide(n) {
        reviewSlideIndex += n;
        if (reviewSlideIndex < 0) {
            reviewSlideIndex = slides.length - 1;
        }
        if (reviewSlideIndex >= slides.length) {
            reviewSlideIndex = 0;
        }
        showReviewSlides();
    }
</script>




        
        
        
    </div>
    <footer>
        <div class="row_icons">
            <div class="footer_column">
                <img src="https://png.pngtree.com/png-clipart/20230805/original/pngtree-icon-of-an-orange-colored-flat-and-rounded-map-marker-in-vector-format-vector-picture-image_9721238.png" width="30%" height="40%">
                <h2 class="h2_Nohover"></h2>
            </div>
            <div class="footer_column">
                <img src="https://cdn-icons-png.freepik.com/512/8568/8568051.png" width="30%" height="40%">
                <h2 class="h2_Nohover"></h2>
            </div>
            <div class="footer_column">
                <img src="https://www.freepnglogos.com/uploads/email-png/email-icon-philippe-the-original-31.png" width="30%" height="40%">
                <h2 class="h2_Nohover"></h2>
            </div>
        </div>
        <section></section>
        <div class="footer_row">
            <div class="footer_column">
                <img src="https://themewagon.github.io/gymlife/img/logo.png" width="175px" height="50px" id="Logo" alt="Logo">
                <p>Contact us on 067-4566-6663 or Email us at ExampleEmail@gmail.com</p>
            </div>
            <div class="footer_column">
                <h2>USEFUL LINKS</h2>
                <p>About</p>
                <p>Blog</p>
                <p>Classes</p>
                <p>Contact</p>
            </div>
            <div class="footer_column">
                <h2>Tips & Guides</h2>
                <p>Physical fitness may help prevent depression, anxiety 3 min read 20 Comment</p>
                <p>Fitness: The best exercise to lose belly fat and tone up... 3 min read 20 Comment</p>
            </div>
        </div>
    </footer>
    
    
    
    
</body>
</html>