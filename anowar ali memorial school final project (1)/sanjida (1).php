*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
body{
	font-family: sans-serif;
}
.menu-bar{
	background: #3377ff;
	text-align: center;
	padding:15px;
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
 display: flex;
}
.logo h1{
	font-size: 50px;
	padding:30px;
	color:#3377ff;
}
.header{
	width: 100%;
	background-color:#fff;
}





.mySlides {display: none;}
img {
	width:100%;
	height:500px;
	vertical-align: middle;
	}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
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
  border-radius: 50%;
  display:none;
  transition: background-color 0.6s ease;
}

.active {
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
	 width:350px;
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




