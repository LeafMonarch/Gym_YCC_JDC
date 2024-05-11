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
            <img src="https://assets-global.website-files.com/61f6a1f670934ed39d548853/64b39fcf00c24aaa249a8e96_gym-ad.webp" style="width:100%; height:700px">
        </div>




        <div id = content>



            <div id = "left">
                <img id="yoga" src="https://themewagon.github.io/gymlife/img/classes/class-details/class-detailsl.jpg">


                <h1 id="h1_Left_White">BODY BUILDING</h1>

                <p id ="exercises">

                    Bodybuilding is a fitness discipline centered around resistance training, primarily weightlifting, aimed at enhancing muscle size, strength, and definition. It involves systematic and intense workouts targeting specific muscle groups to promote growth and development. Beyond just physical strength, bodybuilding also emphasizes sculpting the physique for aesthetic purposes, focusing on proportions and symmetry.

                </p>



                <h1 id="h1_Left_White">TRAINER</h1>

                <p id ="exercises">

                    Personal trainers are fitness professionals who work closely with individuals to help them achieve their health and fitness goals. They provide personalized exercise programs, nutritional guidance, and motivation to their clients, tailoring each session to meet the unique needs and abilities of the individual. Trainers often assess their clients' fitness levels, track progress, and make adjustments to the program as needed to ensure continued improvement. Beyond just physical training, they also offer support, encouragement, and accountability to help clients stay on track and maintain their commitment to a healthy lifestyle. 

                </p>


                <div id = trainer_article>




                    <div>
                        <img id="Trainer" src="https://themewagon.github.io/gymlife/img/classes/class-details/trainer-profile.jpg">

                    </div>  




                    <div id="Trainer_Info">

                        <h1 id="h1_Trainer_Info">Athart Rachel</h1>
                        <h5>Gym Trainer</h5>

                        <p id = "Coach_Info">Introducing Athart Rachel, a dynamic female fitness trainer who inspires clients to reach new heights through tailored workouts and uplifting encouragement. With her infectious energy and unwavering dedication, she fosters a supportive environment where individuals thrive and exceed their fitness aspirations.</p>



                        <div id='Trainer_Info'>

                            <li id='Trainer_Info'>Age <span id='Trainer_Info'>35</span></li>
                            <li id='Trainer_Info'>Weight <span id='Trainer_Info'>148lbs</span></li>
                            <li id='Trainer_Info'>Height <span id='Trainer_Info'>5'12</span></li>

                        </div>                 

                    </div>
                </div>


            </div>


            <div>


                <div id="right"> 

                    <h1 id="Middle_White">CATEGORIES</h1>
                    <br>

                    <div id = "courses">

                        <ul>
                            <li>Yoga <span>12</span></li>
                            <li>Runing <span>32</span></li>
                            <li>Weightloss <span>86</span></li>
                            <li>Cario <span>25</span></li>
                            <li>Body buiding <span>36</span></li>
                            <li>Nutrition <span>15</span></li>
                        </ul>

                    </div>

                    <div>

                        <h1 id="Middle_White">LATEST POSTS</h1>


                        <div>
                            <div id="news_images"><img src="https://themewagon.github.io/gymlife/img/classes/class-5.jpg" style="width:300px"></div>
                        </div>



                        <div>
                            <div id="news_images"><img src="https://themewagon.github.io/gymlife/img/letest-blog/latest-2.jpg" style="width:125px"><div id="title_date"><p id="news_P">Grilled Potato and Green Bean Salad</p> <p>Aug 15, 2019</p></div></div>
                        </div>


                        <div>
                            <div id="news_images"><img src="https://themewagon.github.io/gymlife/img/letest-blog/latest-3.jpg" style="width:125px"><div id="title_date"><p id="news_P">Yoga classes now available</p> <p>Aug 17, 2019</p></div></div>
                        </div>


                        <div>
                            <div id="news_images"><img src="https://themewagon.github.io/gymlife/img/letest-blog/latest-4.jpg" style="width:125px"><div id="title_date"><p id="news_P">Get the best training with professionals </p> <p>Aug 18, 2019</p></div></div>
                        </div>



                        <div>
                            <div id="news_images"><img src="https://themewagon.github.io/gymlife/img/letest-blog/latest-5.jpg" style="width:125px"><div id="title_date"><p id="news_P">New courses now available</p> <p>Aug 18, 2019</p></div></div>
                        </div>


                    </div>
                </div>
            </div>


        </div>


        
        <div id='Classes'>
            
            
<!--https://codepen.io/Stig-/pen/pomzbmY-->

<table cellpadding="5" cellspacing="0" border="5" width="100%">
<thead>
  <tr class="weekdays">
    <th width="5%">&nbsp;</th>
    
    <th width="10%">Monday</th>
    <th width="10%">Tuesday</th>
    <th width="10%">Wednesday</th>
    <th width="10%">Thursady</th>
    <th width="10%">Friday</th>
    <th width="10%">Saturady</th>
    <th width="10%">Sunday</th>
  </tr>
</thead>

<tbody>

  <tr>
    <td class="time">6:00am - 8:00am</td>
    <td>WEIGHT LOOSE</td>
    <td>CARDIO</td>
    <td>YOGA</td>
    <td>FITNESS</td>
    <td></td>
    <td>BOXING</td>
    <td>BODY BUILDING</td>
  </tr>
  <tr>
    <td class="time">10:00am-12:00am</td>
    <td></td>
    <td>FITNESS</td>
    <td>WEIGHT LOOSE</td>
    <td>CARDIO</td>
    <td>BODY BUILDING</td>
    <td>KARATE</td>
    <td></td>
  </tr>
  <tr>
    <td class="time">5:00pm-7:00pm</td>
    <td>BOXING</td>
    <td>KARATE</td>
    <td>BODY BUILDING</td>
    <td></td>
    <td>YOGA</td>
    <td>CARDIO</td>
    <td>FITNESS</td>
  </tr>
  <tr>
   <td class="time">7:00pm-9:00pm</td>
    <td>CARDIO</td>
    <td></td>
    <td>BOXING</td>
    <td>YOGA</td>
    <td>KARATE</td>
    <td>BOXING</td>
    <td>WEIGHT LOOSE</td>
    
  </tr>
  
  
</tbody>



</table>




            
            
            
            
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