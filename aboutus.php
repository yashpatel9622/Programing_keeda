<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiplomaLang Home Learning School</title>
	<link rel="icon" href="/dl.ico" type="image/x-icon">
</head>
<style>
*{padding:0;margin:0;}
#wrapper{border:solid;padding:10px;}
#header{height:100px;background-image: url("dlnm.png"); background-repeat: no-repeat;padding:10px;}
#logo{width:150px;height:100px;background-image: url("dllogo.jpg");}
#navbar{height:50px;background-color:#758209;margin-top:10px;line-height:30px;
display:block;text-shadow:0.1em 0.1em #333;box-shadow: 0 0 15px 0 rgb(0,0,0,10)
list-style:none;
width:100%;}
nav ul
{
list-style: none;

}
nav li
{
display: inline-block;
font-size:24px;
float:left;

width:200px;
height:50px;
}
nav a
{
color: #fff;
text-decoration:none;
display:block;
padding: .75em 1.75em;
}
nav li:hover
{
background:#003300;
}
nav li:hover a
{
color:pink;

}
.tutorial-sub
{
position:absolute;
background:#003300;
width:60%;
display:none;
color:#fff;
padding:2em;
border:3px solid #4B0082;
}
nav li:hover .tutorial-sub
{
display:block;
}
.tutorial-sub li
{
display:block;
}
.tutorial-sub a
{
padding:0;
}
.tutorial-sub a:hover
{
text-decoration: underline;
}
.tutorial-category
{
margin:2.5em 0 .5em;
}
.tutorial-category:first-of-type
{
margin-top: 0;
}

.menu-col-1,
.menu-col-2,
.menu-col-3{
float: left;
}
.menu-col-1{
width:23.33%;
}
.menu-col-2{
width:23.33%;
}
.menu-col-3{
width:25.33%;
}

.Reference-sub
{
background:#003300;
width:200px;
display:none;
color:#fff;
padding:0;
height:150px;
border:3px solid #4B0082;
position:absolute;
}

.Reference-sub a:hover{
text-decoration:underline;
}
nav li:hover .Reference-sub
{
display:block;
}

.Reference-sub a
{
padding:0px;
border-top:5px solid #4B0082;
}
.Examples-sub
{
background:#003300;
width:200px;
display:none;
color:#fff;
padding:0;
height:150px;
border:3px solid #4B0082;
position:absolute;
}

.Examples-sub a:hover{
text-decoration:underline;
}
nav li:hover .Examples-sub
{
display:block;
}

.Examples-sub a
{
padding:0px;
border-top:5px solid #4B0082;}

.Test-sub
{
background:#003300;
width:200px;
display:none;
color:#fff;
padding:0;
height:150px;
border:3px solid #4B0082;
position:absolute;
}

.Test-sub a:hover{
text-decoration:underline;
}
nav li:hover .Test-sub
{
opacity:10;
display:block;
}

.Test-sub a
{
padding:0px;
border-top:5px solid #4B0082;
}

#container{margin-top:10px;}
#container::after{content:"";display:block;clear:both;}
#left-panel{width:23%;height:1520px;background-color:#eda150;float:left;padding:10px;}
.sidebar ul
{
list-style:none;
}
.sidebar ul li
{
padding:10px;
background-color:eda150;
border-top:1px solid #FFF;

}

.sidebar ul li:hover > ul
{
opacity:1;
visibility:visible;
}

.sidebar ul li a
{
	color:black;
font-size:20px;
text-decoration:underline;
}
.sidebar li:hover
{
background:#8A2BE2;
}

		
#right-section{width:73%;height:1520px;background-color:#bcc92b;float:right;padding:10px;}
.holder1{
color:brown;
font-size:40px;
}
.holder2{
	font-size:24px;
	padding:10px;
}



#footer{height:100px;background-color:#79d17b;margin-top:10px;}
.holder4{
	font-size:20px;
	color:white;
}
.holder4 a
{
	color:black;
	font-size:20px;
}
.holder5{
	font-size:20px;
	color:black;
}
</style>
<body>
<div id="wrapper">
<div id="header">
<div id="logo"></div>
</div>
<nav>
			<div id="navbar">
				<ul class="menu-main">
					<li><a href="temp1.php">Home</a>
					<li><a>Tutorial</a>
						<div class="tutorial-sub">
							<div class="menu-col-1">
								<h3 class="tutorial-category">C</h3>																	
								<ul>
									<li><a href="learnc_intro.php">CLearn</a></li>
									<li><a href="Ref.php">C Reference</a></li>
									<li><a href="ma1.php">C Examples</a></li>
								</ul>
							</div>
							<div class="menu-col-2">
								<h3 class="tutorial-category">C++</h3>
								<ul>
									<li><a href="learncpp_intro.php">C++ Learn</a></li>
									<li><a href="Refcpp.php">C++ Reference</a></li>
									<li><a href="hello world.php">C++ Examples</a></li>
								</ul>
							</div>
							<div class="menu-col-3">
								<h3 class="tutorial-category">Java</h3>
								<ul>
									<li><a href="learnjava.php">Java Learn</a></li>
									<li><a href="Refjava.php">Java Reference</a></li>
									<li><a href="javaex.php">Java Examples</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li><a>References</a>
						<div class="Reference-sub">
							<ul>
								<li><a href="Ref.php">C Reference </a></li>
								<li><a href="Refcpp.php">C++ Reference </a></li>
								<li><a href="Refjava.php">Java Reference </a></li>
							</ul>
						</div>
					</li>
					<li><a>Examples</a>
						<div class="Examples-sub">
							<ul>
								<li><a href="ma1.php">C Examples </a></li>
								<li><a href="hello world.php">C++ Examples </a></li>
								<li><a href="javaex.php">Java Examples </a></li>

								</ul>
						</div>
					</li>
					<li><a>Test</a>
						<div class="Test-sub">
							<ul>
								<li><a href="ctest.php">C Test </a></li>
								<li><a href="cpptest.php">C++ Test </a></li>
								<li><a href="javatest.php">Java Test </a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
<div id="container">
<div id="left-panel">
	<div id="topic_logo"> <img src="c1.png" alt="cprogramming-Logo"> </div>
	<h1>C Programming</h1>
	<div class="sidebar">
		<ul>
			<li><a href="learnc_intro.php">C Learn</a></li>
			<li><a href="ma1.php">C Programs</a></li>
			<li><a href="video_structure.php">C Video's</a></li>
			<li><a href="ctest.php">C Quiz</a></li>
		</ul>
	</div>
	<div id="topic_logo"> <img src="c++.png" alt="c++programming-Logo"> </div>		
	<h1>C++ Programming</h1>
	<div class="sidebar">
		<ul>
			<li><a href="earncpp_intro.php">C++ Learn</a></li>
			<li><a href="hello world.php">C++ Programs</a></li>
			<li><a href="video_c++_introduction.php">C++ Video's</a></li>
			<li><a href="cpptest.php">C++ Quiz</a></li>
		</ul>
	</div>
	<div id="topic_logo"> <img src="java.png" alt="java programming-Logo"> </div>
	<h1>Java Programming</h1>
	<div class="sidebar">	
		<ul>
			<li><a href="learnjava.php">Java Learn</a></li>
			<li><a href="javaex.php">Java Programs</a></li>
			<li><a href="video_java_introduction.php">Java Video's</a></li>
			<li><a href="javatest.php">Java Quiz</a></li>
		</ul>
	</div>
</div>
<div id="right-section">
	<div class="holder1"><center>About Us</center></div>
	<br>
	<br>

		
<br>
<p style=font-size:24px>ProgramminkKeeda.com is an online platform that offers below services.</p>
<br>
<h2 style=color:blue>FREE ONLINE TUTORIAL</h2>
<br>
<div class="holder2" style="padding30px">C Programming Tutorial
<br>C Programming Examples
<br>C Programming References
<br>C programming Quiz
<br>C Programming Videos
<br>
<hr>
<br>
C++ Programming Tutorial
<br>C++ Programming Examples
<br>C++ Programming References
<br>C++ programming Quiz
<br>C++ Programming Videos
<br>
<hr>
<br>
Java Programming Tutorial
<br>Java Programming Examples
<br>Java Programming References
<br>Java programming Quiz
<br>Java Programming Videos
</div>
<br>
<h1 style=color:green>The Problem</h1>
<br>
<p style=font-size:24px>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety. 
<br>
However, non-personally identifiable visitor information may be provided to other parties for marketing,advertising, or other uses.</p>
<br>
	<h1 style=color:green>What we offer</h1>
<br>
<p style=font-size:24px>Our goal at ProgramminkKeeda is to create tutorials that are simple to read, understand and emulate. We make sure every concept is explained with easy to understand examples. 
<br>               
We are a small team of passionate developers working to make DiplomaLang a reliable source of programming knowledge, focussing on battle-tested programming languages like C, C++ and Java. </p>
	<br>
	
</div>
</div>
<div id="footer">
	<div class="holder4"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
	<br>
	<div class="holder5"><center>Copyright © 2019 ProgramminkKeeda.com | All rights reserved.</center></div>
</div>
</div>
</div>
</body>
</html>