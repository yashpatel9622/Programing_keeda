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
#left-panel{width:22%;height:5020px;background-color:#eda150;float:left;padding:10px;}
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
		
#right-section{width:73%;height:5000px;background-color:#bcc92b;float:right;padding:20px;font-size:28px;}
.holder1
{
	padding:10px;
	font-size:25px;
}

.holder2
{
	padding:10px;
	border-top:1px dotted #333;
	border-bottom:1px dotted #333;
	border-left:7px solid green;
	border-right:1px dotted #333;
	font-size:18px;
	background:#F4EFEE;
	line-height:20px;
}

.holder3
{
	padding:10px;
	font-size:25px;
}

.holder4
{
	padding:10px;
	font-size:25px;
}

.holder5
{
	padding:10px;
	border-top:1px dotted #333;
	border-bottom:1px dotted #333;
	border-left:7px solid green;
	border-right:1px dotted #333;
	font-size:18px;
	background:#F4EFEE;
	line-height:12px;
}

.holder6
{
	padding:10px;
	font-size:25px;
}

.holder7{
padding:10px;
font-size:25px;
}

.holder8
{
	padding:10px;
	border-top:1px dotted #333;
	border-bottom:1px dotted #333;
	border-left:7px solid green;
	border-right:1px dotted #333;
	font-size:18px;
	background:#F4EFEE;
	line-height:20px;
}

.holder9
{
	padding:10px;
	font-size:25px;
}

.holder10
{
	padding:10px;
	border-top:1px dotted #333;
	border-bottom:1px dotted #333;
	border-left:7px solid green;
	border-right:1px dotted #333;
	font-size:18px;
	background:#F4EFEE;
	line-height:20px;
}


.holder11
{
	padding:10px;
	font-size:25px;
}

.holder12
{
	padding:10px;
	border-top:1px dotted #333;
	border-bottom:1px dotted #333;
	border-left:7px solid green;
	border-right:1px dotted #333;
	font-size:18px;
	background:#F4EFEE;
	line-height:20px;
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
.holder13{
	font-size:20px;
	color:white;
}
.holder13 a
{
	color:black;
	font-size:20px;
}
.holder14{
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
				<h1><center><i><b><p>Variables</p></b></i></center></h1>	
				
				<div class="holder1">
					<ul>
						<li>Variable are used in C++,where we need storage for any value, which will change in program.</li>
						<br>
						<li>Variable can be declared in multiple ways each with different memory requirements and functioning.</li>
						<br>
						<li>Variable is the name of memory location allocated by the compiler depending upon the datatype of the variable.</li>
						<br>
					</ul>
				</div>
				<div class="example"><h4>Example:</h4></div>
				<br>
				<div class="holder2">
					<pre>
						<code>
	//declared and initialised
	int i=10;
						</code>
					</pre>
				</div>
				<br>
				<h3><b>Basic types of Variables</b></h3>
				<br>
				<div class="holder3">
					<p>	
						Each variable while declaration must be given a datatype, on which the memory assigned to the variable depends.
						<br>
						Following are the basic types of variables,
					</p>
					<br>
					<b>bool</b>
					<br>
					For variable to store boolean values (True or False)
					<br>
					<br>
					<b>char</b>
					<br>
					For variables to store character types.
					<br>
					<br>
					<b>int</b>
					<br>
					For variable with integral values.
					<br>
					<br>
					float and double are also types for variables with large and floating point values.
				</div>
				<br>
				<hr>
				<br>
				<h3><b>Declaration and Initialization</b></h3>
				<br>
				<div class="holder4">
					<p>
						Variable must be declared before they are used.Usually it is preferred to declare them at the starting of the program,but in C++ they can be declared in the middle of program too,but must be done before using them.
					</p>
				</div>
				<br>
				<div class="example"><h4>Example:</h4></div>
				<br>
				<div class="holder5">
					<pre>
						<code>
	//declared but not initialised
	<br>
		int i;
	<br>
	//Multiple declaration
	<br>
		char c;
	<br>
		int i,j,k;
	<br>
	Initialization means assigning value to an already declared variable,
	<br>
		int i;//declaration
	<br>
		i=10;//initialization
	<br>
	Initialization and declaration can be done in one single step also,
	<br>
	//Initialization and declaration in some step
	<br>
		int i=10;
	<br>
		int i=10;j=11;
	<br>
	If a variable is declared and not initialised by default it will hold a
	<br>
	garbage value.Also, if a variable is once declared anf if try to declare 
	<br>
	it again,we will get a compile time error.
		<br>
	inti,j;
		<br>
	i=10;
		<br>
	j=20;
		<br>
	int j=i+j;/*compile time error,cannot redeclare a variable in same scope*/
							</code>
						</pre>
					</div>
					<br>
					<h3><b>Scope of Variables</b></h3>
					<br>
					<div class="holder6">
						<p>
							All the variables have their area of functioning,and out of that boundary they dont hold their value,this boundary is called scope of the variable.
							For most of the cases its between the curly braces,in which variable is declared that a variable exists,not outside it.
							We will study the storage classes later,but as of now,we can broadly divide variables into two main types,
						<br>
							<br>
							-Global Variables
							<br>
							-Local Variables
						</p>
					</div>
					<br>
					<h3><b>Global Variables</b></h3>
					<div class="holder7">
						<br>
						Global variables are those,which are once declared and can be used throughout the lifetime of the program by any class or any function.They must be declared ouside the main() function.If only declared,they can be assigned different values at different time in program lifetime.But even if they are declared and initialised at the same time outside the main()function,then also they can be assigned any value at any point in the program.
					</div>
					<br>
					<div class="holder8">
						<pre>
							<code>
	Only declared,not initialised
	
	include&lt;iostream&gt;
	using namespace std;
	//Global variable declared
	int x;
	int main()
	{
		//Initialized once
		x=10;
		cout<<"firs value of x="<< x;
		//initialized again
		x=20;
		cout<<"Initialized again with value="<< x;
	}
							</code>
						</pre>
					</div>
					<br>
					<h4><b>Local Variables</b></h4>
					<div class="holder9">
						Local variables are the variables which exist only between the curly braces,in which its declared.Outside that they are unavailable and leads to compile time error.
					</div>
					<br>
					<div class="holder10">
						<pre>
							<code>
		
	#include&lt;iostream&gt;
	using namespace std;
	int main()
	{
		int i=10;
		//if condition scope starts
		if(i< 20)
		{
			//Local variable declared and initialized
			int n=100;
		}
		//if condition scope ends
		//Compile time error,n not available here
		cout<< n;
	}
							</code>
						</pre>
					</div>
					<br>
					<h4><b>Some special types of variable</b></h4>
					<div class="holder11">
						<p>
							There are also some special keywords,to impart unique characteristics to the variables in the program.Following two are mostly used,we will discuss them in details later.
						</p>
						<br>
						<b>Final</b>
						<br>
						Once initialized,its value cant be changed.
						<br>
						<br>
						<b>Static</b>
						<br>
						These variables holds their value between function calls.
					</div>
					<br>
					<div class="holder12">
						<pre>
							<code>
		
	#include&lt;stdio.h&gt;
	using namespace std;
	int main()
	{
		final int i=10;
		static int y=20;
	}
							</code>
						</pre>
					</div>
					<br>
					<br>
				
				
				
					<div class="but">
						<a href="cpp_struc.php" class="button prev">&laquo;prev</a>
						<a href="cpp_operator.php" class="button next">next &raquo;</a>
					</div>	
				</div>
			</div>
	
			<div id="footer">
				<div class="holder13"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
				<br>
				<div class="holder7"><center>Copyright © 2019 programmingKeeda.com | All rights reserved.</center></div>
		
			</div>
		</div>
	</div>
</body>
</html>