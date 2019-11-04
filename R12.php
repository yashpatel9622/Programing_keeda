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

#container
{
	margin-top:10px;
}
#container::after{content:"";display:block;clear:both;}
#left-panel{width:23%;height:2500px;background-color:#eda150;float:left;padding:10px;}
		.sidebar ul
		{
			list-style:none;
			margin:0;
			padding:0;
			
		}
		.sidebar ul li
		{
			padding:10px;
			width:220px;
			background-color:#eda150;
			border-top:1px dotted #FFF;
		}


		.sidebar ul li:hover > ul
		{
			opacity:1;
			visibility:visible;
		}

		.sidebar ul li a
		{
			color:white;
			font-size:20px;
			text-decoration:underline;
		}
		.sidebar li:hover
		{
			background:#717c7f;
		}
		

#right-section
{
	width:73%;
	height:2500px;
	background-color:#bcc92b;
	float:right;
	padding:10px;
}

.li
{
	list-style:none;
}

.header
{
	color:green;
}

.header1
{
	font-size:20px;
}

.header2
{
	font-size:20px;
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
				<h1><center><i><b><p> Object Orianted programing</p></b></i></center></h1>
				<hr>
				<br>
				<br>
				<div class="header"><h2>Object Orianted programing</h2></div>
				<div class="header1">
					<br>
					<br>
				

					<p>Java is an object orianted programing language . Java Supports the following Fundaental Concepts.
					*Polymorphism
					*Encapsulation
					*classes
					*objects 
					*methods
					*instance
					*message passing

					few concepts of object orianted concepts </p>
					<br>
					<h3>classes</h3>
					<p>Classes and Objects in Java. Classes and Objects are basic concepts of Object Oriented Programming which <br>revolve around the real life entities. A class is a user defined blueprint or prototype from<br> which objects are created. It represents the set of properties or methods that are common to all objects of one type.</p>
					<br>
					<br>
					<h3> Data members</h3>
					<p>
						A class of java contains instance data members, static data members and instance methods static methods. <br>Instance data members and instance methods will be access with respective to &lt;object name&gt;. ... <br>member in another pre-defined class called System.
					</p>
					<br>
					<br>
					<h3> Methods</h3>
					<P>	
						A method is a set of code which is referred to by name and can be called (invoked) at any point in <br>a program simply by utilizing the method's name. Think of a method as a subprogram that acts on<br> data and often returns a value. Each method has its own name.

					</P>
					<br>
					<br>
					<h3>Inheritance</h3>
					<p>
						To inherit in Java means allowing all methods and variables from one class to be accessible by another class. ...<br> The subclass gets all the goodies from the parent class, but it can also create its own variables<br> and methods. Inheritance is a key part of object-oriented programming.
					</p>
				</div>

			</div>
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
