<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


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
    justify-content: flex-start;
    margin-left: 20px;
    margin-right: 20px;
    min-width: 1454px;
    z-index: 1;
    align-content: center;
    align-items: center;
    padding-top: 30px;
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



   
   
   
   
</style>





<!DOCTYPE html>
<html> 
    <head>

    <div class="header">
       <img src="https://themewagon.github.io/gymlife/img/logo.png" width="175px" height="50px" id="Logo" alt="Logo">
        
        
        
        
    <div id ="Ancher_div">
    <a href="index.html"><h2 id="Ancher"> HOME </h2></a>
     <a href="About_Us.html"><h2 id="Ancher"> ABOUT US </h2></a>
    <h2 id="Ancher"> CLASSES </h2>
    <h2 id="Ancher"> SERVICES </h2>
    <h2 id="Ancher"> OUR TEAM </h2>
    </div>
        
  
    
      
    </div>



    
    <div id="intro">
<div class="slideshow-container">

<div class="mySlides fade">
 <img src="https://marketplace.canva.com/EAE0qsxUnb0/1/0/1600w/canva-yellow-and-black-gym-fitness-facebook-post-modern-style-9fU0wmvI9Bo.jpg" style="width:1500px;  height:750px">
</div>

<div class="mySlides fade">
  <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fitness-trainer-ad-template-design-dc12bef6f4b6b1aa29fa8f160cb6e656_screen.jpg?ts=1687116096" style="width:1500px;  height:750px">
</div>

<!--<div class="mySlides fade">
  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d7978484526511.5d5f66c475a9e.png" style="width:15 00px;  height:750px">
</div>-->

</div>
<br>



<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
    
// for the slide show :     https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto    
    
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


<div>
    
    <h2 id="h2_Nohover">Why choose us?</h2>
    
    <div class="grid-container">
        <div class="grid-item"> <img src="https://www.shareicon.net/data/2016/10/12/843267_weight_512x512.png" style="width:35%"><h3>Excellent equipment</h3></div>
 <div class="grid-item"> <img src="https://myplate-prod.azureedge.us/sites/default/files/styles/medium/public/2020-12/icon-circle-apple-broccoli--256.png?itok=usNhH0-9" style="width:45%"><h3>Dietary Advice</h3></div>
 <div class="grid-item"> <img src="https://static.vecteezy.com/system/resources/previews/009/267/736/original/heart-rate-icon-free-png.png" style="width:35%"><h3>Health Advice</h3></div> 
 <div class="grid-item"> <img src="https://cdn-icons-png.flaticon.com/512/7922/7922268.png" style="width:35%"><h3>Excellent Coaches</h3></div>
    </div>
    
    
    <h2 id="h2_Nohover">what we can offer</h2>
    
  <div id="adds">

  <section id="add_gallery">
    <div id="each_add"><img src="https://themewagon.github.io/gymlife/img/classes/class-1.jpg" style="width:100%"><h2 id="h2_Nohover">Weigh Advice</h2></div>
    <div id="each_add"><img src="https://themewagon.github.io/gymlife/img/classes/class-2.jpg" style="width:100%"><h2 id="h2_Nohover">Cardio</h2></div>
    <div id="each_add"><img src="https://themewagon.github.io/gymlife/img/classes/class-3.jpg" style="width:100%"><h2 id="h2_Nohover">Strength</h2></div>
  </section>
        
    </div>
    
    
   
    
    <div class="row">
        
  <div class="column">
      <div id="each_add"><img src="https://themewagon.github.io/gymlife/img/classes/class-4.jpg" style="width:100%"><h2 id="h2_Nohover">Improvement</h2></div>
  </div>
  <div class="column">
      <div id="each_add"><img src="https://themewagon.github.io/gymlife/img/classes/class-5.jpg" style="width:100%"><h2 id="h2_Nohover">Training</h2></div>
  </div>
 
</div>
</div>

<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2345.8477083462853!2d-6.377816123324277!3d53.98772737248233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860cdba2664d741%3A0xde824009b1997b4!2sDKIT%20Sport!5e0!3m2!1sen!2sie!4v1714572737013!5m2!1sen!2sie" width="1200" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<footer>
    
 
<div class="row_icons">
    
      <div class="footer_column">
      <img src="https://png.pngtree.com/png-clipart/20230805/original/pngtree-icon-of-an-orange-colored-flat-and-rounded-map-marker-in-vector-format-vector-picture-image_9721238.png" width=30% height=40%  ><h2 id="h2_Nohover"></h2>
      </div>
      <div class="footer_column">
      <img src="https://cdn-icons-png.freepik.com/512/8568/8568051.png" width=30% height=40% ><h2 id="h2_Nohover"></h2>
      </div>
      <div class="footer_column">
      <img src="https://www.freepnglogos.com/uploads/email-png/email-icon-philippe-the-original-31.png" width=30%  height="40%"><h2 id="h2_Nohover"></h2>
      </div>
  
  </div>
  
    
    <section></section>
    
    <div class="footer_row">
  <div class="footer_column" >
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
    <p>Physical fitness may help prevent depression, anxiety
3 min read 20 Comment</p>
     <p>Fitness: The best exercise to lose belly fat and tone up...
3 min read 20 Comment</p>
     
 
</div>
    
</footer>

