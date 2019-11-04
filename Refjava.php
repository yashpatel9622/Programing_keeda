<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiplomaLang Home Learning School</title>
	<link rel="icon" href="/dl.ico" type="image/x-icon">
</head>

<style>

*
{
	padding:0;
	margin:0;
}

#wrapper
{
	padding:10px;
	border:solid;
}

#header{height:100px;background-image: url("dlnm.png"); background-repeat: no-repeat;padding:10px;}
#logo{width:150px;height:100px;background-image: url("dllogo.jpg");}

#navbar
{
	height:50px;
	background-color:#758209;
	margin-top:10px;
	line-height:30px;
	display:block;
	text-shadow:0.1em 0.1em #333;
	box-shadow: 0 0 15px 0 rgb(0,0,0,10)
	list-style:none;
	width:100%;
}
nav ul 
{
	margin:0;
	padding: 0;
	list-style: none;
	width:auto;

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
.menu-col-3
{
	float: left;
}
.menu-col-1
{
	width:23.33%;
}
.menu-col-2
{
	width:23.33%;
}
.menu-col-3
{
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

.Reference-sub a:hover
{
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

.Examples-sub a:hover
{
	text-decoration:underline;
}
nav li:hover .Examples-sub
{
	display:block;
}

.Examples-sub a
{
	padding:0px;
	border-top:5px solid #4B0082;
}

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

.Test-sub a:hover
{
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

#container
{	
	margin-top:10px;
}

#container::after
{
	content:"";
	display:block;
	clear:both;
}

#left-panel
{
	width:23%;
	height:2000px;
	background-color:#eda150;
	float:left;
	padding:10px;
}

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

#right-section
{
	width:73%;
	height:2000px;
	background-color:#bcc92b;
	float:right;
	padding:10px;
}

.cex
{
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px dotted green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
}

.example
{
	color:red;
	text-decoration:underline;
}

.next
{
	padding:0px 500px;
	width:150px;
	border-radius:3px;
	color:red;
	font-size:25px;
}


#footer
{
	height:100px;
	background-color:#79d17b;
	margin-top:10px;
}
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
					<li><a>Tutorial</a>
						<div class="tutorial-sub">
							<div class="menu-col-1">
								<h3 class="tutorial-category">C</h3>																	
								<ul>
									<li><a href="learnc_intro">CLearn</a></li>
									<li><a href="Ref.php">C Reference</a></li>
									<li><a href="ma1.php">C Examples</a></li>
								</ul>
							</div>
							<div class="menu-col-2">
								<h3 class="tutorial-category">C++</h3>
								<ul>
									<li><a href="learncpp_intro">C++ Learn</a></li>
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
				<div id="topic_logo"> <img src="java.png" alt="javaprogramming-Logo"> </div>
				<h1>Java Reference</h1>
				<div class="sidebar">
					<ul>
						<li><a href="R1.php"> Quick:Basic</a></li>
						<li><a href="R2.php"> Quick:Variables and Datatypes</a></li>
						<li><a href="R3.php"> Quick:Conditionals</a></li>
						
						<li><a href="R4.php"> basic syntax</a></li>
						
						<li><a href="R5.php"> comments</a></li>
						<li><a href="R6.php"> Identifiers</a></li>
						<li><a href="R7.php">Keywords </a></li>
						
						<li><a href="R8.php">Scope and lifetime of variables</a></li>
						<li><a href="R9.php"> return Keyword</a></li>
						<li><a href="R10.php">Array</a></li>
						<li><a href="R11.php"> Command line arguments</a></li>
						<li><a href="R12.php"> Object orianted programming</a></li>
						<li><a href="R13.php"> this keyword</a></li>
						<li><a href="R14.php"> static keyword</a></li>
						<li><a href="R15.php"> Final keyword</a></li>
						<li><a href="R16.php"> constructer</a></li>
						<li><a href="R17.php"> super ketword</a></li>
						<li><a href="R18.php"> Inner classes</a></li>
						<li><a href="R19.php"> abstract classes</a></li>
						<li><a href="R20.php"> packages</a></li>
						<li><a href="R21.php"> import keyword</a></li>
						<li><a href="R22.php"> Access modifier</a></li>
						<li><a href="R23.php"> Encapsulation</a></li>
						
						<li><a href="R24.php"> Interface</a></li>
						<li><a href="R25.php"> Exception</a></li>
						<li><a href="R26.php">Exception handling techniques</a></li>
						<li><a href="R27.php"> keywords of exception handling</a></li>
						<li><a href="R28.php"> Lifecycle of thread</a></li>
						<li><a href="R29.php"> methods of thread</a></li>
						<li><a href="R30.php"> Lifecycle of applet</a></li>
						<li><a href="R31.php"> Strucutre of an applet</a></li>
						<li><a href="R32.php"> Methods of applet</a></li>
						<li><a href="R33.php"> changing font of an applet</a></li>
						<li><a href="R34.php">  Window status</a></li>
						<li><a href="R35.php"> Passing parameter to an applet</a></li>
						<li><a href="R36.php"> Graphics class of an applet</a></li>
						<li><a href="R37.php"> Context of an applet</a></li>
						
						
						
						
						
						
						
						
					</ul>
				</div>
			</div>
			<div id="right-section">
				<br>
				<br>
				<br>
				<br>
				<br>
				


<center style=font-size:30px><h1 style=color:green;>Java Reference</h1></center>
<br.
<br>
<br>
<br>

<p style=font-size:30px>
In Java, a reference is a type category. Reference types include: classes, interfaces, arrays, enums, and annotations. Java is a pass-by-value language, but references are themselves a kind of value. 
<br>This means that when you pass a reference type to a method, that method has access to the data and can change it.
<br> But it does not have access to the original reference itself, and cannot change it to point elsewhere.
Reference in java means that you should only point any variable.
<br> memory is not allocated unless you define a object.
<br>It only means pointing to something.







</p>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				
			</div>
		
		<div id="footer">
			<div class="holder4"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
			<br>
			<div class="holder5"><center>Copyright © 2018 DiplomaLang.com | All rights reserved.</center></div>
		</div>
</div>		
	</div>
</body>
</html>

 
