<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ProgrammingKeeda Home Learning School</title>
	<link rel="icon" href="/dl.ico" type="image/x-icon">
</head>
<style>
*{padding:0;margin:0;}
#wrapper{border:solid;padding:10px;}
#header{height:100px;background-image: url("dlnm1.png"); background-repeat: no-repeat;padding:10px;}
#logo{width:150px;height:100px;background-image: url("dllogo2.jpg");}
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

#container{margin-top:10px;}
#container::after{content:"";display:block;clear:both;}
#left-panel{width:22%;height:5720px;background-color:#eda150;float:left;padding:10px;}
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
		.sidebar ul li ul
		{padding:10px;
			list-style-image:url(bullet.png);
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
		
#right-section{width:73%;height:5700px;background-color:#bcc92b;float:right;padding:20px;font-size:28px;}
.holder1{
padding:10px;
font-size:20px;
}
.holder2{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:1px dotted #333;
border-right:1px dotted #333;
font-size:18px;
background:#C0C0C0;
line-height:8px;
}

.holder4{
	padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px solid green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
line-height:30px;
}
table, th, td
{border:1px solid black;
background:white;
}


.but{ padding: 15px 332px;}
.button {
    background-color: lightgrey; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.prev {font-size: 24px;background-color: #f44336;border-radius: 4px;border: 2px solid #555555;}
.prev:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.next {font-size: 24px;background-color: #f44336;border-radius: 4px;border: 2px solid #555555;}
.next:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#footer{height:100px;background-color:#79d17b;margin-top:10px;}

.holder6{
	font-size:20px;
	color:white;
}
.holder6 a
{
	color:black;
	font-size:20px;
}
.holder7{
	font-size:20px;
	color:black;
}

</style>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>



<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</script>
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
				<div id="topic_logo"> <img src="c++.png" alt="c++programming-Logo"> </div>
				<h1>C++ Programming</h1>
				<div class="sidebar">
					<ul>
						<li><a href="learncpp_intro.php">Introduction</a></li>
						<li><a href="cpp_struc.php">Structure of C Program</a></li>
					</ul>	
		

					<h2>Declaration And Assignment</h2>
					<ul>	
						<li><a href="cpp_var.php">Variable</a></li>
						<li><a href="cpp_operator.php">Operator</a></li>
						<li><a href="cpp_head.php">Header File</a></li>
					</ul>
	


					<h2>Control Structure</h2>
					<ul>
						<li>
							<a href="cpp_decision.php">Decision Making</a>
							<ul>
								<li><a href="cpp_if.php">if Statements</a></li>
								<li><a href="cpp_ifelse.php">if-else Statements</a></li>
								<li><a href="cpp_nested.php">Nested if-else Statements</a></li>
								<li><a href="cpp_elseif.php">else-if Statements</a></li>
								<li><a href="cpp_switch.php">Switch Statement</a></li>
							</ul>
						</li>
						<li>
							<a href="cpp_loop.php">Loops</a>
							<ul>
								<li><a href="cpp_while.php">while loops</a></li>
								<li><a href="cpp_do.php">do while loops</a></li>
								<li><a href="cpp_for.php">for loops</a></li>
							</ul>
						</li>
					</ul>

	

					<h2>Function</h2>
					<ul>
						<li><a href="cpp_func.php">Function Basics</a></li>
						<li><a href="cpp_defdec.php">Defination and Declaration</a></li>
						<li><a href="cpp_in.php">Inline and Friend Function</a></li>
					</ul>

	

					<h2>Array & String & Pointer</h2>
					<ul>
						<li><a href="cpp_array.php">Array</a></li>
						<li><a href="cpp_string.php">String</a></li>
						<li><a href="cpp_pointer.php">Pointer</a></li>
					</ul>

	
	
					<h2>Structure</h2>
					<ul>
						<li><a href="cpp_structure.php">Structure</a></li>
					</ul>
					<h2>Advanced C++</h2>
					<ul>
						<li><a href="cpp_constructor.php">Constructor & Destructor</a></li>
						<li><a href="cpp_inheritance.php">Inheritance</a></li>
						<li><a href="cpp_polymorphism.php">Polymorphism</a></li>
					</ul>


	
	
				</div>
			</div>
			<div id="right-section">	
				<img src="c++label.png" alt="c++ programming label">  
				<div class="holder1"><h1><center><i><b><p>Inheritance</p></b></i></center></h1></div>
				<br>
				<p>Inheritance is the next important property offered by the object oriented programming language.When one class needs to adopt or "inherit" the data or propertoes of other class, inheritance of classes can be used.When one class derives properties from another class,the inheritance is present between the two classes.</p>
				<br>
				<div class="holder3">
				<h3 style=color:green>Base class:</h3>
				<br>
				<p>An existing which is parent of another class is called as base class of the inheritance.The properties of base class are inherited in the new class.Base class is also referred as parent class.</p>
				<br>
				<h3 style=color:green>Derived class:</h3>
				<br>
				<p>The newly created class which is child of base class or which derives, inherits properties of base class is called as the derived or child class.</p>
				<br>
				<h3 style=color:red>Access specifiers</h3>
				<br>
				<p>Access specifiers are used to show which type of data, the derived class can use or inherit.There are three access specifiersas:</p>
				<br>
				<pre>
	1.private
	2.protected
	3.public
				</pre>
				<br>
				<h3 style=color:green>Private Inheritance:</h3>
				<br>
				<p>When deriving from a private base class, public and protected members of the class become private members of the derived class.</p>
				<br>
				<h3 style=color:green>Protected Inheritance:</h3>
				<br>
				<p>When deriving from a protected base class, public and protected members of the base class become protected members of the derived class.</p>
				<br>
				<h3 style=color:green>Public Inheritance:</h3>
				<br>
				<p>When deriving a class from a public base class, public members of the base class become public members of the derived class and protected members of the base class become protected members of the derived class.</p>
				<br>
				<p>The private members of a base class are never directly accessible for the derived class.For understanding of accessibility, observe the following chart:</p>
				<br>
				<center><img src="Screenshot_20180326_202939.png" alt="members"></center>
				<br>
				<h3 style=color:red>Types of Inheritance</h3>
				<br>
				<p>C++ offers total 5 types of inheritance based on extension of base classes.</p>
				<br>
				<pre>
	1.Single Inheritance
	2.Multiple Inheritance
	3.Multilevel Inheritance
	4.Hierarchical Inheritance
	5.Hybrid Inheritance
				</pre>
				<br>
				<h3 style=color:red>Single Inheritance:</h3>
				<br>
				<p>It is the simplest type of inheritance in C++.In this type of inheritance, the derived class has only one base class.</p>
				<br>
				<center><img src="single.png" alt="single"></center>
				<br>
				<h3 style=color:black>Syntax:</h3>
				<pre>
	class derived_class_name:access specifier 
	base_class_name
	{
		\\Class statements
	};
				</pre>
				<br>
				<h3 style=color:red>Multiple Inheritance:</h3>
				<br>
				<p>Multiple Inheritance is a feature of C++ where a class can inherit from more than one classes.Constructors of inherited classes sre called in the same order in which they are inherited.</p>
				<br>
				<center><img src="multiple.png" alt="multiple"></center>
				<br>
				<h3 style=color:black>Syntax:</h3>
				<pre>
	class derived_class_name:access specifier 
	base_class1_name,base_class2_name
	{
		\\Class statements
	};
				</pre>
				<br>
				<h3 style=color:red>Multilevel Inheritance:</h3>
				<br>
				<p>In C++ programming, not only you can derive a class from the base class but you can also derive a class from the derived class.This form of inheritance is known as multilevel inheritance.</p>
				<br>
				<center><img src="multilevel.png" alt="multilevel"></center>
				<br>
				<h3 style=color:black>Syntax:</h3>
				<pre>
	class derived_class1_name:access specifier 
	base_class_name
	{
		\\Class statements
	};
	class derived_class2_name:access specifier 
	derived_class1_name
	{
		\\class statements
	};
				</pre>
				<br>
				<h3 style=color:red>Hierarchical Inheritance:</h3>
				<br>
				<p>The class which inherits the properties of another class is called Derived or Child or Sub class and the class whose properties are inherited is called Base or Parent or Super class.When more than one classes are derived from a single base class, such inheritance is known as Hierarchical Inheritance, where features that are common in lower level are included in parent class.</p>
				<br>
				<center><img src="hierarchical.png" alt="hierarchical"></center>
				<br>
				<h3 style=color:red>Hybrid Inheritance:</h3>
				<br>
				<p>"Hybrid Inheritance" is a method where one or more types of inheritance are combined together and used.</p>
				<br>
				<center><img src="hybrid.png" alt="hybrid"></center>
				<br>
				</div>
				<div class="but">
				<a href="cpp_constructor.php" class="button prev">&laquo;prev</a>
				<a href="cpp_polymorphism.php" class="button next">next &raquo;</a>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="holder6"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
		<br>
		<div class="holder7"><center>Copyright © 2019 programmingKeeda.com | All rights reserved.</center></div>
			
		
		</div>
	</div>
</div>
</body>
</html>