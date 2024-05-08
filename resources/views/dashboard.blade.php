<!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow-->

<link href="newcss.css" rel="stylesheet" type="text/css"/>
<!DOCTYPE html>
<html> 



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
    color: #f36100;
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

.mySlides {
    display: none
}
img {
    vertical-align: middle;
}

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
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
    .prev, .next,.text {
        font-size: 11px
    }
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


h1#h1_Left_White
{

    font-family: Oswald;
    margin-left: 100px;
    display: flex;
    justify-content: flex-start;
    font-weight: bold;
    margin-top: 0px;
    color: white;
    margin: 0%;
    margin-top: 30px;
    margin-bottom: 30px;
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
    opacity: 1;
    border-radius: 30%;
    width: 40px;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active {
    opacity: 1;
}

/* Fading animation */
.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
    .text {
        font-size: 11px
    }
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




img#yoga
{
    margin-right: 120px;
}

div#courses
{
    margin-bottom: 75px;
}

div#content
{

    margin-top: 100px;
    margin-left: 100px;
    display: flex;
}


span {

    float: right;
    margin-left:20px;
    color: white;
    font-size: 20px;
    margin-bottom: 20px;
}


li
{

    font-family: Oswald;
    color: white;
    font-size: 20px;
    margin-bottom: 20px;
    width: 350px;

}


p#exercises
{
    font-family: Oswald;
    color: white;
    font-size: 15px;
    width:780px;
}

div#news_images
{
    display: flex;
    margin-bottom: 40px;
}


p#news_P
{
    color: white;
    margin-left: 6px;
    display: flex;
    flex-direction: column-reverse;
    width: 180px;
    font-weight: bold;
}

div#title_date
{
    display: flex;
    justify-content: space-evenly;
    flex-direction: column;
}


div#trainer_article
{
    margin-top: 50px;
    display: flex;
}

div#Trainer_Info
{
    margin-left: 30px;
}


h1#h1_Trainer_Info
{

    font-family: Oswald;
    margin-left: 100px;
    display: flex;
    justify-content: flex-start;
    font-weight: bold;
    margin-top: 0px;
    color: white;
    margin: 0%;
    margin-left: 10px;
}

h5
{
    font-family: Oswald;
    color: white;
    margin-left: 10px;
}

p#Coach_Info
{
    font-family: Oswald;
    width: 450px;
}

div#Trainer_Info
{
    margin-top: 30px
}


div#Classes
{
    margin-top: 100px;
    width: 70%;
    display: flex;
    margin-left: 250px;
}












/* Weekdays */
.weekdays th{
    text-align: center;
    color:white;
    font-size: 100%;
    font-family: Oswald;
    font-weight: bold;
    background-color: #f36100;
}

/* Time */
.time {
    text-align: center;
    color: #f36100;
    font-size: 100%;
    font-family: Oswald;
    font-weight: bold;
    background:  black;
}

/* Row Height */
tr{
    height: 4em;
}

/* Events */
td {
    color: #b2b2b2;
    text-align: center;
    font-weight: bold;
    font-size: 90%;
    font-family: Oswald;
    height: 115px;
}


td:hover {
    color: white;
    font-size: 100%;
}

/* Alternate rows */
tr:nth-child(odd) td:nth-child(even),
tr:nth-child(even) td:nth-child(odd) {
    background-color: #151515;
}

/* Resetting background for other cells */
tr:nth-child(odd) td:nth-child(odd),
tr:nth-child(even) td:nth-child(even) {
    background-color: transparent;
}



.workout {
    width: 20%;
    font-family: Oswald;
}



table {
    border: solid thick #656565;
}


.Services_grid-container {
    display: grid;
    grid-template-columns: auto auto auto auto; /* Changed to four columns */
    padding: 10px;
}

.Services_grid-item {


    font-size: 30px;
    text-align: center;
    background-color: #363636;
    height: 290px;
    width:290px;
}



h1#h1_Grid
{

    font-family: Oswald;
    display: flex;
    font-size: 26px;
    justify-content: flex-start;
    font-weight: bold;
    margin-top: 0px;
    color: #f36100;
    margin: 0%;
    margin-left: 30px;
    margin-top: 40px;
}



p#p_Grid
{

    font-family: Oswald;
    display: flex;
    font-size: 18px;
    justify-content: flex-start;
    font-weight: bold;
    margin-top: 0px;
    color: white;
    margin: 0%;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 20px;
}










li
{
    font-family: Oswald;
}



section.pricing-section {
    width: 100%;
    height: 600px;

    .pricing {
        width: 100%;
        height: 100%;
        position: relative;
        .pricing-header {
            position: absolute;
            top: 0;
            left: 50%;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            row-gap: 12px;
            padding: 20px 70px;
            border-radius: 0px 0px 8px 8px;
            p {
                font-weight: 300;
            }
            h3 {

                font-weight: 500;
                display: flex;
                align-items: center;
                column-gap: 5px;
            }
        }
        .pricing-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 25px;
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            .pricing-body-header {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                row-gap: 15px;
                h2 {
                    font-weight: 500;
                }
                .pricing-checkbox {
                    display: flex;
                    column-gap: 10px;
                    align-items: center;
                    span {
                        font-size: 14px;
                        color: #b5b6b8;
                    }
                    > div {
                        width: 45px;
                        background: #f36100;
                        height: 24px;
                        border-radius: 15px;
                        position: relative;
                        cursor: pointer;
                        div {
                            position: absolute;
                            width: 18px;
                            height: 18px;
                            background-color: #fff;
                            top: 50%;
                            left: 3px;
                            transform: translateY(-50%);
                            border-radius: 50%;
                        }
                        &.anually div {
                            left: unset;
                            right: 3px;
                        }
                    }
                }
            }
            .pricing-body-plans {
                > div {
                    display: none;
                    > div {
                        display: flex;
                        column-gap: 17px;

                        .card {
                            background-color: #22262c;
                            padding: 25px;
                            border-radius: 8px;
                            width: 270px;
                            position: relative;

                            .card-header {
                                display: flex;
                                flex-direction: column;
                                row-gap: 8px;
                                justify-content: center;
                                align-items: center;
                                .card-title {
                                    font-weight: 400;
                                    font-size: 14px;
                                }
                                .card-price {
                                    font-size: 26px;
                                }
                                .card-users {
                                    input {
                                        width: 100%;
                                        background: transparent;
                                        border: 1px solid #35393e;
                                        padding: 10px;
                                        color: #b5b6b8;
                                        text-align: center;
                                        outline: none;
                                    }
                                    span {
                                        font-size: 12px;
                                        color: #f36100;
                                    }
                                }
                            }
                            .card-body {
                                margin-top: 30px;
                                ul {
                                    list-style-type: none;
                                    margin-left: 20px;
                                    display: flex;
                                    flex-direction: column;
                                    row-gap: 8px;
                                    li {
                                        color: #b5b6b8;
                                        position: relative;
                                        font-size: 14px;

                                        &::before {
                                            content: "•";
                                            color: #f36100;
                                            font-weight: bold;
                                            width: 20px;
                                            margin-left: -18px;
                                            font-size: 25px;
                                            position: absolute;
                                            top: 50%;
                                            transform: translateY(-50%);
                                        }
                                    }
                                }
                            }
                            .card-footer {
                                margin-top: 35px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                button {
                                    border: 1px solid #f36100;
                                    background: transparent;
                                    padding: 10px 25px;
                                    color: #b5b6b8;
                                    cursor: pointer;
                                    &:hover {
                                        background: #f36100;
                                        color: #fff;
                                    }
                                }
                            }

                            &:nth-of-type(2) .card-footer button {
                                background: #f36100;
                                color: #fff;
                                &:hover {
                                    background: transparent;
                                    color: #b5b6b8;
                                }
                            }
                        }
                    }

                    &.active {
                        display: block;
                    }
                }
            }
        }
    }
}

button#Choose_Plan1
{
    margin-top: 60px;
}


button#Choose_Plan2
{
    margin-top: 0px;
}

button#Choose_Plan3
{
    margin-top: 10px;
}


</style>



    <head>
  
        <title>Course notes example code</title>
        <meta charset="UTF-8">
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <div class="header">
       <img src="https://themewagon.github.io/gymlife/img/logo.png" width="175px" height="50px" id="Logo" alt="Logo">
        
        
        
        
    <div id ="Ancher_div">
    <a href="index.html"><h2 id="Ancher"> HOME </h2></a>
    <a href="About_Us.html"><h2 id="Ancher"> ABOUT US </h2></a>
    <a href="Classes.html"><h2 class="Ancher"> CLASSES </h2></a>
    <a href="Services.html"><h2 id="Ancher"> SERVICES </h2></a>
    <h2 id="Ancher"> OUR TEAM </h2>
    </div>
        
  
    
      
    </div>



    
    <div id="intro">
<div class="homepage_slideshow-container">

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
        <div class="grid-item"> <img src="https://www.shareicon.net/data/2016/10/12/843267_weight_512x512.png" style="width:30%"><h4>Excellent equipment</h4></div>
 <div class="grid-item"> <img src="https://myplate-prod.azureedge.us/sites/default/files/styles/medium/public/2020-12/icon-circle-apple-broccoli--256.png?itok=usNhH0-9" style="width:45%"><h4>Dietary Advice</h4></div>
 <div class="grid-item"> <img src="https://static.vecteezy.com/system/resources/previews/009/267/736/original/heart-rate-icon-free-png.png" style="width:35%"><h4>Health Advice</h4></div> 
 <div class="grid-item"> <img src="https://cdn-icons-png.flaticon.com/512/7922/7922268.png" style="width:35%"><h4>Excellent Coaches</h4></div>
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



  <section class="pricing-section">
                    <div class="pricing">
                        <div class="pricing-header">

                        </div>
                        <div class="pricing-body">
                            <div class="pricing-body-header">

                                <div class="pricing-checkbox">

                                </div>
                            </div>
                            <div class="pricing-body-plans">

                                <div class="active" id="pricing__monthly__plan">
                                    <div>
                                        <div class="card">
                                            <div class="card-header">

                                                <h2 class="card-price">$30</h2>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>Free riding</li>
                                                    <li>Unlimited equipments</li>
                                                    <li>Personal trainer</li>
                                                    <li>Weight losing classes</li>
                                                    <li>Month to mouth</li>
                                                    <li>No time restriction</li>

                                                </ul>
                                            </div>
                                            <div class="card-footer">
                                                <button id="Choose_Plan1">Choose Plan</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">

                                                <h2 class="card-price">$50</h2>
                                                <div class="card-users">



                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>All starter features, plus:</li>
                                                    <li>Free riding</li>
                                                    <li>Unlimited equipments</li>
                                                    <li>Personal trainer</li>
                                                    <li>Weight losing classes</li>
                                                    <li>Month to mouth</li>
                                                    <li>No time restriction</li>
                                                </ul>
                                            </div>
                                            <div class="card-footer">
                                                <button id ="Choose_Plan2">Choose Plan</button>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">

                                                <h2 class="card-price">$100</h2>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>All Pro features</li>
                                                    <li>Free riding</li>
                                                    <li>Unlimited equipments</li>
                                                    <li>Personal trainer</li>
                                                    <li>Weight losing classes</li>
                                                    <li>Month to month</li>
                                                    <li>No time restriction</li>
                                                </ul>
                                            </div>
                                            <div class="card-footer">
                                                <button id="Choose_Plan3">Choose Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pricing__anually__plan">
                                    <div>
                                        <div class="card">
                                            <div class="card-header">
                                                <span class="card-title">Starter</span>
                                                <h2 class="card-price">$19</h2>
                                            </div>

                                            </section>  





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

