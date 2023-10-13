*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
body{
	font-family: sans-serif;
}

#nav-bar{
	
	position: fixed;
	top: 0;
	Z-index:10;
	width:100%;
}
#section2{
	margin-top:170px;
}
.sear{
  margin:30px 30px;
}

.sear form input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

.sear form button{
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

.sear form button:hover {
  background: #0b7dda;
}

.menu-bar{
	background: #3377ff;
	text-align: center;
	padding:5px;
}
.menu-bar ul{
	display: inline-flex;
	list-style: none;
	color:#fff;
}
.menu-bar ul li{
	width: 140px;
	margin:10px;
	padding:10px;
}
.menu-bar ul li a{
	text-decoration: none;
	color:#fff;
}
.active, .menu-bar ul li:hover
{
	background: #6699ff;
	border-radius:3px;
}
.menu-bar  .fa{
	margin-right: 5px;
}
.sub-manu-1{
	display:none;
	
}
.menu-bar ul li:hover .sub-manu-1{
	display: block;
	position: absolute;
	background: #3377ff;
	margin-top: 10px;
	margin-left: -10px;
}
.menu-bar ul li:hover .sub-manu-1 ul{
	display: block;
	margin: 8px;
}
.menu-bar ul li:hover .sub-manu-1 ul li{
	width: 150px;	
	padding: 10px;
	background: transparent;
	border-radius:0px;
	text-align: left;
	border-bottom: 1px dotted #fff;

}
.menu-bar ul li:hover .sub-manu-1 ul li:last-child
{
	border-bottom:none;
}
.menu-bar ul li:hover .sub-manu-1 ul li a:hover
{
     color: #ff99cc;	
}

@media(max-width: 700px){

	nav ul {
		flex-direction:flex;
		font-size:10px;
		margin:0px;
		padding:0px;
	}
		.menu-bar 
	{
margin-left:0px;
padding:0px;
	}
	.menu-bar ul
	{
margin-left:0px;
padding:0px;
	}
.menu-bar ul li{
	margin-left:0px;
	width:45px;
	padding:0px;
}
.sear{
  margin:30px 30px;
  flex-direction:flex;
  
}

.sear form input[type=text] {
  padding:5px;
  font-size: 10px;
  border: 1px solid grey;
  float: left;
  width:100px;
  background: #f1f1f1;
}

.sear form button{
  float: left;
  width: 25px;
  padding:5px;
  background: #2196F3;
  color: white;
  font-size: 10px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

}

.fa-angle-right{
	float: right;
}
.sub-manu-2{
	display:none;
}
.hover-me:hover .sub-manu-2{
    display: block;
	position: absolute;
	background: #3377ff;
	margin-top: -40px;
	margin-left: 140px;
}

.logo{
	width:100%;
	background-color:#fff;
    display: flex;
}

.logo h1{
	margin:Auto;
	font-size:48px;
	padding:2px;
	color:#3377ff;
}
.header{
	width: 100%;
	background-color:#fff;
}




* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display:none;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}





.ticker{
	display:flex;
	flex-wrop: wrop;
	width:100%;
	height:60px;
	margin:0 auto;
}
.news{
	width:100%;
	background:#cc4444;
	padding:0 2%;
}
.title{
	width: 20%;
	text-align:center;
	background:#c81c1c;
	position: relative;
}
.title:after{
	position:absotute;
	content:"";
	right: -36%;	
}
.title h5{
	font-size:25px;
	margin: 8% 0;
	color:#fff;
}
.news marquee{
	font-size:18px;
	margin-top:10px;
}
.news p{
	color:#fff;
	font-size:20px;
	margin:auto;
}



.Services{
	margin-top:50px;
	width: 100%;
	text-align: center;

}
h1{
	font-size: 36px;
	font-weight: 600;
}
p{
	color: #555;
	font-size: 14px;
	font-weight: 300;
	font-height:22px;
	padding: 10px
}
.row{
	width: 100%;
	display: flex;
	justify-content: space-between;
}
.Services-col{
	background: #fff3f3;
	border-radius: 10px;
	margin: 5px;
	padding: 20px 12px;
	box-sizing: border-box;
	tradition: 0.5s;
}

h3{
	text-align: center;
	font-weight: 600;
	margin: 10px 0;
}
.Services-col:hover{
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}
@media(max-width: 700px){
	.row{
		flex-direction: column;
	}
}
.rob {
	width:150px;
	height: 200px;
	}

.notice-col{
	display:flex;
	margin: 15px;
	background:pink;
	padding-left:20px;
	width:500px;
} 
.notice-col h3{
	font-size:50px;
	color: blue;
	padding:20px;

} 
 .notice-col marquee{
	 width:300px;
 }
.icon .fa{
	font-size:180px;
	padding-right:10px;
	color:#ffff00;
}
 
 
 
 
 

.event{
	background:#cc00cc;
	margin-left:0px;
	margin-top:10px;
	margin-bottom:10px;
	width:400px;
	height:80px;
	text-align:center;
}
.event h1{
	color:#fff;
	margin:auto;
	padding:20px;
}
.event-col:hover{
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}
.event-col{
	
	flex-basis: 31%;
	background: lightblue;
	border-radius: 10px;
	margin: 20px;
	padding: 20px 12px;
	box-sizing: border-box;
	tradition: 0.5s;
	
}



.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8;
  cursor: pointer;
  width:300px;
  height:280px;
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container (positioning is needed to position the close button and the text) */


/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}



.link-col{
	display:flex;
	flex-basis: 31%;
	background: #fff3f3;
	border-radius: 10px;
	margin: 15px;
	padding: 20px 12px;
	box-sizing: border-box;
	tradition: 0.5s;
}
.link-col img{
	width:100px;
	height:100px;
}
.link-col:hover{
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}


.footer{
	height:450px;
	background: black;
	width: 100%;
	text-align:center;
	padding: 20px 0;
}
.footer h4{
	color:#fff;
	margin-bottom:25px;
	margin-top: 20px;
	font-weight:600;
}
.footer p{
	color:#fff;
	margin-bottom:25px;
	margin-top: 20px;
	font-weight:300;
	text-align:left;
}
.icons .fa{
	color: white;
	margin: 0 13px;
	cursor: pointer;
	padding: 18px 0;
}
.fa-heart-o{
	color:#f44336;
}


.loca iframe{
	
	width: 350px;
	height:250px;
}

.about_us{
	width:100%;
	height:500px;
	background:blue;
	
}
.teacherpage{
    text-align:center;
    width:100%;
	height:500px;
    padding:150px;
	background:#ccffff;
}
.teacherpage a{
	padding:20px;
	background-color:#ff00ff;
	border-radius:5px;
	font-size:50px;
	text-decoration: none;
	color:#fff;
}
.teacherpage a:hover
{
	background: #6699ff;
	border-radius:5px;
}




.teacherpage1{
    width:100%;
	height:500px;
    padding:10px;
	background:#ccffff;
}
.teacherpage1 img{
	height:100px;
	width:100px;
	border-radius:10px;
	border: 5px solid #3377ff;
}

.teacherpage1 table{
	width:100%;
	color:#3377ff;
	border: 1px solid deeppink;
	border-collapse: collapse;
}
.teacherpage1  tr{
	 	border: 1px solid deeppink;
	    border-collapse: collapse;
}
.teacherpage1  td{
		
	font-size:20px;
	color:#3377ff;
	border: 1px solid deeppink;
	border-collapse: collapse;
	text-align:center;
}
.teacherpage1  th{
	padding:5px;
	font-size:20px;
	color:#3377ff;
		border: 1px solid deeppink;
	border-collapse: collapse;
		text-align:center;
}


.location{

	width:80%;
	margin:auto;
	padding:80px 0;
}
.location iframe{
    width:100%;
	
}

.contact-us{
	width:80%;
	margin:auto;
}
.contact-col{
	flex-basis:48%;
	margin-bottom:30%;
}
.contact-col div{
	display:flex;
	align-items:center;
	margin-bottom:40px;
}
.contact-col div .fa{
	font-size: 28px;
	color:#f44336;
	margin:10px;
	margin-right: 30px;
}
.contact-col div p{
	padding:0;
}
.contact-col div h5{
	font-size: 20px;
	margin-bottom: 5px;
	color:#555;
	font-weight:400;
}
.contact-col input, .contact-col textarea{
	width: 100%;
	padding:15px;
	margin-bottom: 17px;
	outline: none;
	border: 1px solid #ccc;
	box-sizing:border-box;
}
.hero-btn{
	display: inline-block;
	text-decoration: none;
	color: #fff;
	border: 1px solid #fff;
	padding: 12px 34px;
	font-size: 13px;
	background: transparent;
	position: relative;
	cursor: pointer;
}
.hero-btn:hover{
	border: 1px solid #f44336;
	background: #f44336;
	transition: 1s;
}
.red-btn{
	border:1px solid #f44336;
	background: transparent;
	color:#f44336;
}
.red-btn:hover{
	color:#fff;
}





