<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Portfolio</title>
    <style type="text/css">
    	{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
html{
	overflow-y: Scroll;
	scroll-behavior: smooth;
	scroll-snap-type: y mandatory;
}
body{
	font-family: 'PT Sans', sans-serif;
	height: 100vh;
}
header{
	position: fixed;
	top: 0;
	z-index: 1;
	display: flex;
	width: 100%;
	background: rgba(0,0,0,7);
	justify-content: flex-end;
	list-style: none;
}
header nav ul{
	display: flex;
}
header ul li{
	margin: 0 1rem;
	padding: 10px;
}
header ul li a, header h1{
	text-decoration: none;
	text-transform: uppercase;
	color: #f4f4f4;
}
header ul li a:hover{
	color: skyblue;
}

#home{
	background: url("Pictures/first.jpg") no-repeat center center/cover;
	height: 100vh;
}
#home{
	display: flex;
	flex-direction: column;
	width: 100%;
	height: 100vh;
}
#home h1{
	color: #fff;
	font-size: 3rem;
	cursor: context-menu;
	margin-top: 150px;
	margin-left: 100px;
}
span:hover{
	color: #48CFAD;
	transition: all .5s;
}
span.name{
	color: #ED5565;
}
span.m-left{
	margin-left: -10px;
}
#home .text p{
	letter-spacing: 3px;
	word-spacing: 10px;
	font-size: .8rem;
	color: gray;
	margin-left: 100px;
}
.text a{
	position: relative;
	text-decoration: none;
	font-size: .9rem;
	text-transform: uppercase;
	top: 10%;
	bottom: 50%;
	transform: translateY(-50%);
	padding: 10px 20px;
	background-color: none;
	border: 3px solid #ED5565;
	color: #ED5565;
	letter-spacing: 3px;
	overflow: hidden;
	transition: .5s;
	margin-left: 100px;
}
.text a:hover{
	color: #000;
}
.text a::before{
	content: '';
	background-color: #ED5565;
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 0%;
	z-index: -1;
	transition: .5s;
}
.text a:hover::before{
	height: 100%;
}
#home .profile-image{
	position: relative;
	width: 230px;
	height: 325px;
	top: -20%;
	left: 75%;
	border-radius: 30%;
	transform: translateX(-50%);
	background-color: rgba(0,0,0,0.6);
}
.profile-image img{
	width: 200px;
	height: 300px;
	padding: 15px;
	border-radius: 30%;
}

#about{
	background: url("Pictures/second.jpg") no-repeat center center/cover;
	height: 100vh;
}
#about .about-me-info{
	position: relative;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 55%;
	padding: 30px 30px;
	font-family: merienda;
	border-radius: 20%;
	background-color: rgba(0,0,0,0.4);
	color: #fff;
	border: 2px inset #fff;
}
#about .about-me-info h3{
	letter-spacing: 3px;
	font-size: 35px;
	margin-bottom: 10px;
	color: #000;
}
#about .about-me-info p{
	font-size: 1.1rem;
	color: #fff;
}

#contact{
	background: url("Pictures/third.jpg") no-repeat center center/cover;
	min-height: 100vh;
	width: 100%;
	font-family: "Poppins", sans-serif;
	background-size: cover;
	display: flex;
	justify-content: center;
	align-items: center;
}
.contact-info{
	color: #fff;
	max-width: 400px;
	line-height: 65px;
	padding-left: 50px;
	font-size: 18px;
}
.contact-info i{
	margin-right: 10px;
	font-size: 25px;
}
.contact-form{
	max-width: 500px;
	margin-right: 50px;
}
.contact-info, .contact-form{
	flex: 1;
}
.contact-form h2{
	color: #fff;
	text-align: center;
	font-size: 35px;
	text-transform: uppercase;
	margin-bottom: 30px;
}
.contact-form .text-box{
	background: #000;
	color: #fff;
	border: none;
	width: 90%;
	height: 30px;
	padding: 10px;
	font-size: 15px;
	border-radius: 5px;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
	margin-bottom: 20px;
	opacity: 0.9;
}
.contact-form .text-box:first-child{
	margin-right: 15px;
}
.contact-form textarea{
	background: #000;
	color: #fff;
	border: none;
	width: 90%;
	padding: 12px;
	font-size: 15px;
	min-height: 200px;
	max-height: 400px;
	resize: vertical;
	border-radius: 5px;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
	margin-bottom: 20px;
	opacity: 0.9;
}
.contact-form .send-btn{
	float: right;
	margin-right: 25px;
	background: #2E94E3;
	color: #fff;
	border: none;
	width: 120px;
	height: 40px;
	font-size: 15px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 2px;
	border-radius: 5px;
	cursor: pointer;
	transition: 0.3s;
	transition-property: background;
}
.contact-form .send-btn:hover{
	background: #0582E3;
}
footer{
	background-color: gray;
}
footer p{
	text-align: center;
}

    </style>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#home">Homepage</a></li>
				<li><a href="#about">About me Page</a></li>
				<li><a href="#contact">Contacts</a></li>
			</ul>
		</nav>
	</header>

	<div id="home">
		<div class="text">
			<h1>
				<span>H</span>
				<span class="m-left">i</span>
				<span class="m-left">,</span>
				<br>
				<span>I</span>
				<span class="m-left">'</span>
				<span class="m-left">m</span>
				<span class="name">E</span>
				<span class="m-left name">u</span>
				<span class="m-left name">n</span>
				<span class="m-left name">i</span>
				<span class="m-left name">c</span>
				<span class="m-left name">e</span>
				<span class="m-left">'</span>
			</h1>
			<p>CSS/Javascript/React</p>
			<a href="#contact">Contact Me</a>
		</div>
		<div class="profile-image">
			<img src="Pictures/profile.jpg">
		</div>
	</div>

	<div id="about">
		<div class="about-me-info">
			<h3>Hello Everyone,</h3>
			<p>My name is Eunice D. Aquino but you can call me 'Eunang'. My age is 21 and I was born on the 2nd of December, 1999 in Ilocos Sur.
			But I am currently living here in Nancamaliran West, Urdaneta City.</p>
			<p>I am a third year College student in Urdaneta City University, taking the Bachelor of Science in Information Technology.</p>
		</div>
	</div>

	<div id="contact">
		<div class="contact-info">
			<div><i class="fas fa-map-marker"></i>Urdaneta,Pangasinan</div>
			<div><i class="fas fa-envelope"></i>Eunice@gmail.com</div>
			<div><i class="fas fa-phone"></i>+63 9000 000 000</div>
			<div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
		</div>
		<div class="contact-form">
			<h2>Contact Us</h2>
			<form class="contact" method="post">
				<input type="text" name="name" class="text-box" placeholder="Name">
				<input type="email" name="email" class="text-box" placeholder="Email">
				<textarea name="message" rows="5" placeholder="Message"></textarea>
				<input type="submit" name="submit" class="send-btn" value="submit">
			</form>
		</div>
	</div>

	<footer>
		<hr>
		<p>2021 Copyright. All rights Reserved.</p>
	</footer>
</body>
</html>