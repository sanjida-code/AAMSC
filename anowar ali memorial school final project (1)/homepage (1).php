<html>
<head> 
<meta name ="viewport" content =" with=device-width, initial-scale=1.0">
<title> Anowar Ali Memorial School & Collage</title>
<link rel="stylesheet" href="style.php">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<section id ="nav-bar">

<div Class="logo">
<a href ="homepage.php"><img src="logo.jpg" style="height:100px; width:100px;"></a>
<h1>Anowar Ali Memorial School & College</h1>
  <div class = "sear">
<form action = "searchtest.php" method="post">

    <input type="text" placeholder="Enter Name" name="search">	
    <button class="search" type="submit"  name ="submit">GO</button>

</form>
</div>
</div>
<nav>
<div class ="menu-bar" >
<ul>
<li class="active"><a href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>

<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>About Us</a>
    <div class= "sub-manu-1">
        <ul>
             <li><a href="message_principal.php">Messege From Principal</a></li>
             <li><a href="our_teacher.php">Our Teachers</a></li>
             <li><a href="history.php">History</a></li>
        </ul>
    </div>
</li>

<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Academic</a>
     <div class= "sub-manu-1">
         <ul>
             <li><a href="ac_calender.php">Academic Calender</a></li>
             <li><a href="syllabus.php">Syllabus</a></li>
             <li><a href="class_routine.php">Class Routine</a></li>
             <li><a href="exam_routine.php">Exam Routine</a></li>
             <li><a href="dress_code.php">Dress Code</a></li>
			 <li class="hover-me"><a href="#">Result</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                 <div class= "sub-manu-2">
                     <ul>
                         <li><a href="result_jsc.php">JSC</a></li>
                         <li><a href="result_ssc.php">SSC</a></li>
                     </ul>
                 </div>
            </li>
			<li class="hover-me"><a href="#">Library</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                 <div class= "sub-manu-2">
                     <ul>
                         <li><a href="online_book.php">Online Library</a></li>
                         <li><a href="video_tutorial.php">Video tutorial</a></li>
                     </ul>
                 </div>
             </li>
         </ul>
     </div>
</li>
<li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Admission</a>
      <div class= "sub-manu-1">
        <ul>
        <li><a href="admission_circular.php">Admission Circuler</a></li>
        <li><a href="admission_apply.php">Apply Now</a></li>
        <li><a href="admission_result.php">Admission Result</a></li>
        </ul>
      </div>
</li>

<li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</a>
<div class= "sub-manu-1">
<ul>
<li><a href="photo.php">Photo</a></li>
<li><a href="video.php">video</a></li>
</ul>
</div>
</li>
<li><a href="fee.php"><i class="fa fa-money" aria-hidden="true"></i>Fee/Payment</a></li>
<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>
<li><a href="#"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Portals</a>
<div class= "sub-manu-1">
<ul>
<li><a href="teacherpage.php">Teacher</a></li>
<li><a href="studentpage.php">Student</a></li>
<li><a href="staffpage.php">Staff</a></li>
<li><a href="adminpage.php">Admin</a></li>
</ul>
</div>
</li>

</ul>
</div>
</nav>
</section>


<section id = "section2">	
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="school25.jpg" style="width:100%; height:400px;">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="school22.jpg" style="width:100%; height:400px;">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="school20.jpg" style="width:100%; height:400px;">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</section>
<section>
   <div class ="container">
       <div class ="ticker" >
	         <div class ="title"><h5>News:</h5></div>
                 <div class ="news" >
                     <marquee >
					     <p> "আনোয়ার আলী মেমোরিয়াল স্কুল এন্ড কলেজে 
এস এস সি ২০২১ সালের শিক্ষার্থীদের সাথে মতবিনিময় কালে" | ২০ অক্টোবর ২০১৮ খ্রীস্টাব্দ
আনোয়ার আলী মেমোরিয়াল স্কুল এন্ড কলেজের ২০১৮ সালের জে. এস.সি পরীক্ষাথীদের  মিলাদ ও দোয়া|</p>
					 </marquee>
                 </div>
	   </div>
   </div>
</section>   
 



<section class="Services">
<div class="row">
  <div class="col-sm-6">
     <div class="Services-col">
	 <h1>Chairman</h1>
	  <img class="rob" src="school26.jpg">
	     <h3>বীর মুক্তিযোদ্ধা আবদুর রব মিয়া( খোকন বিএসসি)</h3>
		 <p> আমি স্কুলটি প্রতিষ্ঠা করেছি এলাকাকে আরো আলোকিত করতে। এই প্রতিষ্ঠানে পড়ালেখা করে এলাকার ছেলে মেয়েরা দেশের উন্নয়নে কাজ করবে সেইটা আমার প্রত্যাশা। পাঠ দানের অনুমতিসহ বিদ্যালয়টি এমপিওভুক্ত হলে আমরা আরো মনের সাহস নিয়ে কাজ করতে পারবো। সরকারের প্রতি আকুল আবেদন সরকার যেন আমাদের এই বিদ্যালয়টিকে পাঠ দানের অনুমতিসহ এমপিও করার ব্যবস্থা করে দেয়। </p> 
		 </div>
	</div>
	<div class="col-sm-6">
	<div class="notice-col">
	<div  class="icon">
	<h3>Notice</h3>
       <i class="fa fa-volume-up"></i>
	</div>
	<div class="marquee">
	 <marquee bgcolor="lightpink" behavior="scroll" direction="up">
	 <p>Notice 1</p><br>
	 <p>Notice 2</p><br>
	 <p>Notice 3</p><br>
	 <p>Notice 4</p><br>
	 <p>Notice 5</p><br>
	 <p>Notice 6</p><br>
	 </marquee>
	 </div>
	 </div>
   </div>
</div>

</section>

<section>
<div class="event">
<h1>Events</h1>
</div>
<div class="row">
     
	 <div class="event-col">
	     <h3>Language Martyrs'Day</h3>
	 </div>
	 <div class="event-col">
	     <h3>Independence Day</h3>
	 </div>
	 <div class="event-col">
	     <h3>Bangali New Year</h3>
	 </div>
</div>
<div class="row">
	 <div class="event-col">
	     <h3>Mathers'Day</h3>
	 </div>
	 <div class="event-col">
	     <h3>National Mourning Day</h3>
	 </div>
	<div class="event-col">
	     <h3>Victory Day</h3>
	 </div>
</div>
</section>

<section>
<div class="event">
<h1>Gallery</h1>
</div>
<!-- The grid: four columns -->
<div class="row">
  <div class="column">
    <img src="school1.jpg" alt="Nature" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="school2.jpg" alt="Snow" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="school9.jpg" alt="Mountains" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="school4.jpg" alt="Lights" onclick="myFunction(this);">
  </div>
</div>
<div class="row">
  <div class="column">
    <img src="school5.jpg" alt="Nature" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="school6.jpg" alt="Snow" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="school11.jpg" alt="Mountains" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="school9.jpg" alt="Lights" onclick="myFunction(this);">
  </div>
</div>
</section>


<section>
<div class="event">
<h1>Useful Links</h1>
</div>
<div class="row">
	 <div class="link-col">
	 <img src="logo2.png" alt="Lights" >
	     <a href="http://dhakaeducationboard.portal.gov.bd/"><h3>মাধ্যমিক ও উচ্চমাধ্যমিক শিক্ষা বোর্ড, ঢাকা</h3></a>
	 </div>
	 <div class="link-col">
	 <img src="logo2.png" alt="Lights" >
	     <a href="http://www.moedu.gov.bd/"><h3> শিক্ষা মন্ত্রণালয়, ঢাকা</h3></a>
	 </div>
	<div class="link-col">
	<img src="logo2.png" alt="Lights" >
	     <a href="http://www.dshe.gov.bd/"><h3>মাধ্যমিক ও উচ্চমাধ্যমিক শিক্ষা অধিদপ্তর, ঢাকা</h3></a>
	 </div>
</div>
<div class="row">
	 <div class="link-col">
	 <img src="logo2.png" alt="Lights" >
	     <a href="https://www.teachers.gov.bd/"><h3>শিক্ষক বাতায়ন, ঢাকা</h3></a>
	 </div>
	 <div class="link-col">
	 <img src="logo2.png" alt="Lights" >
	     <a href="http://www.nctb.gov.bd/"><h3>জাতীয় শিক্ষাক্রম ও পাঠ্যপুস্তক বোর্ড (এনসিটিবি), ঢাকা</h3></a>
	 </div>
	<div class="link-col">
	<img src="logo2.png" alt="Lights" >
	     <a href="http://www.dpe.gov.bd/"><h3>প্রাথমিক শিক্ষা অধিদপ্তর, ঢাকা</h3></a>
	 </div>
</div>

</section>


<section class="footer">
<div class="row">
     
	  <div class= "loca">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11457.870187761751!2d90.7803960683194!3d23.28753039792624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754f7aaf9ee00c1%3A0xb475d7a00d1d5a5!2sSharif%20store!5e0!3m2!1sbn!2sbd!4v1617942137757!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div>
	 <div>
	 <h4>Anowar Ali Memorial School & Collage</h4>
      <p>Teker Bazar,<br> Hajigoang<br>Chandpur</p>
	  	 </div>
	 <div>
      <h4>SERVICES</h4>
		 <p>Admission<br>
            Result<br>
            Fee/Payment<br>
            Academic</p>
		 </div>
	 <div>
	     <h4>CONTACT US</h4>
		 <p> Email: shakhawathossain73@gmail.com<br>
		  Phone: +8801864172286, +8801690204886<br>
		  Address: 3610,Teker Bazar,<br>Hajigoang,Chandpur</p>
	 </div>
</div>
<div class="icons">
<a href="https://www.facebook.com/groups/1183644894988976"><i class="fa fa-facebook" ></i></a>
<i class="fa fa-twitter" ></i>
<i class="fa fa-instagram" ></i>
<i class="fa fa-linkedin" ></i>
</div>
<p style="text-align:center;">Made with <i class="fa fa-heart-o"></i> by Sanjida Akter</p>
</section>

</body>
</html>









