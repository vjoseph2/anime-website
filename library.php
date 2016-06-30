<head>
   <title> Testing Excel</title> 
   <script src="bower_components/jquery-2.2.0.min/index.js"></script>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="css/text" href="styles.css">
       <script>
        $(document).ready(function(){
            var toggle=true;
            console.log(toggle);
            $(".viewAvailability").click(function(){
               $(".currentAvailability").toggle("fast"); 
            });
            
            $(".slideeIcon").click(function () {
                
                toggle=!toggle;
                console.log(toggle);
                
                if(toggle== false){
                        $(this).animate({
                        width: "100px",
                        height: "100px"
                        }, 500, function() {
                        // Animation complete.
                        });
                }else{
                     $(this).animate({
                        width: "40px",
                        height: "40px"
                        }, 500, function() {
                        // Animation complete.
                        });
                }
    
            });
          });
    </script>
</head>
<html>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.html">Home</a></li>
        <li class="active"><a href="library.php">Library</a></li>
        <li><a href="schedule.html">Schedule</a></li> 
        <li><a href="#">About</a></li> 
      </ul>
     
    </div>
  </div>
</nav>
<div class="container">
  <div class="jumbotron">
    <h1>Test Page</h1> 
</div>
    
<div class = "row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
        
    </div>
    <div class="col-sm-4">
        
    </div>
</div>
    
<div class="row">
    <div class="col-sm-12">
        <center>
        <div class="titleHolder">
            <img class="previewImage" src="http://img1.ak.crunchyroll.com/i/spire4/49060cb7e02dd3d338273d2530e4888f1404663731_full.jpg">
            <section class="description">
                High school student Chiyo Sakura has a crush on schoolmate Umetarou Nozaki, but when she confesses
                her love to him, he mistakes her for a fan and gives her an autograph. When she says that she
                always wants to be with him, he invites her to his house and has her help on some drawings. Chiyo
                discovers that Nozaki is actually a renowned shoujo manga artist named Sakiko Yumeno. She then
                agrees to be his assistant in order to get closer to him. As they work on his manga, they encounter
                other schoolmates who assist them or serve as inspirations for characters in the stories.
               
            </section>
             
            <figure class="miniSlides">
                <ul id="slidee">
                    <li><img src="http://365psd.com/images/previews/0f5/checklist-icon-psd-56637.jpg" class="slideeIcon" alt="First Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Second Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Third Image"></li>
                </ul>
            </figure>
        <button type="button" class="btn btn-warning ratingButton">Rating <span class="badge">2</span></button> 
        </div>
        
         <div class="titleHolder">
            <img class="previewImage" src="http://cdn.myanimelist.net/images/anime/8/21197.jpg">
            <section class="description">
                The world has become a slaughtering ground for the Crimson Denizens, mysterious beings from a 
                parallel universe who thrive on the life energy of humans. These merciless murderers only leave 
                behind scant remainders of souls called "Torches," which are mere residues that will eventually 
                be destroyed, along with the very fact of the victims' existence from the minds of the living. 
                In an ambitious endeavor to put an end to this invisible, hungry massacre, warriors called
                Flame Hazes relentlessly fight these monsters.

                One fateful day, Yuuji Sakai ceases to be a regular high schooler—he becomes trapped in a crevice
                of time and is suddenly attacked by a Denizen. Coming to his rescue just in the nick of time is a 
                nameless hunter who seems no different from an ordinary young girl except for her blazing eyes and 
                burning crimson hair. However, before Yuuji can learn anything more about his situation, he discovers 
                that he has already been reduced to a Torch—merely a scrap of memory waiting to be extinguished.
               
            </section>
             
            <figure class="miniSlides">
                <ul id="slidee">
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="First Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Second Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Third Image"></li>
                </ul>
            </figure>
        <button type="button" class="btn btn-warning ratingButton">Rating <span class="badge">2</span></button> 
        </div>
         <div class="titleHolder">
            <img class="previewImage" src="http://img1.ak.crunchyroll.com/i/spire1/38bb57dd62113be9d617e3444caa27d51388427345_full.jpg">
            <section class="description">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."
               
            </section>
             
            <figure class="miniSlides">
                <ul id="slidee">
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="First Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Second Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Third Image"></li>
                </ul>
            </figure>
        <button type="button" class="btn btn-warning ratingButton">Rating <span class="badge">2</span></button> 
        </div>
        
         <div class="titleHolder">
            <img class="previewImage" src="https://0.s3.envato.com/files/8153156/img/placeholder-150-300.jpg">
            <section class="description">
                The original manga revolves around a girl named Yokoi who sits next to a boy only known as Seki-kun.
                During class, Seki-kun continues to not pay attention and instead creates amazing little distractions, 
                such as a detailed golf course with the course's hole being a dent in his desk, or an entire dramatic
                war being played out by paper shogi pieces. Yokoi often finds herself getting reluctantly interested in
                his games, even though they always seem to end up getting HER in trouble with the teacher!
               
            </section>
             
            <figure class="miniSlides">
                <ul id="slidee">
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="First Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Second Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Third Image"></li>
                </ul>
            </figure>
        <button type="button" class="btn btn-warning ratingButton">Rating <span class="badge">2</span></button> 
        </div>
        <div class="titleHolder">
            <img class="previewImage" src="http://static.comicvine.com/uploads/scale_large/6/67663/4922595-01.jpg">
            <section class="description">
                Yuki Takeya loves her school so much that she does not want to ever leave! Megurigaoka Private High School 
                is a unique and lively place where Yuki enjoys her carefree life as a third-year high school student and member
                of the School Living Club. The club, consisting of the president Yuuri Wakasa, the athletic Kurumi Ebisuzawa, the mature junior Miki Naoki,
                the supervising teacher Megumi Sakura, and the club dog Taroumaru, prides itself on making the most of life at school. However,
                this illusion of endless bliss is just a bubble waiting to be burst because Yuki is unable to perceive what is truly happening around her. 
                In reality, all is not as it seems—the real purpose of the School Living Club is to escape from the shocking and disturbing truth: 
                the girls are in the middle of a zombie apocalypse and have barricaded themselves inside the school as the sole survivors.
               
            </section>
             
            <figure class="miniSlides">
                <ul id="slidee">
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="First Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Second Image"></li>
                    <li><img src="http://www.hebburnandmidtyne.co.uk/widget/image/placeholder.png" class="slideeIcon" alt="Third Image"></li>
                </ul>
            </figure>
        <button type="button" class="btn btn-warning ratingButton">Rating <span class="badge">2</span></button> 
        </div>
        
    </div>
</div>









    <div class="row">   
        <div class="col-sm-6">
         <button type="button" class="viewAvailability btn btn-primary">View Availability</button>
    <!--<iframe width="auto" height="auto" src="https://docs.google.com/spreadsheets/d/1o9ooRZgVDZKqcmLk92o9nnlZpJ28-8m3CS9UCpWE6Q8/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>-->
        </div>
    </div>
    
    

</html>

<?php
$content = file_get_contents('https://docs.google.com/spreadsheets/d/1o9ooRZgVDZKqcmLk92o9nnlZpJ28-8m3CS9UCpWE6Q8/pubhtml');
echo "<div id= 'currentAvailability' class='currentAvailability well'>".$content."</div>";


// $str = "Hello World!";
// echo $str . "<br>";
// echo chop($str,"World!");

?>