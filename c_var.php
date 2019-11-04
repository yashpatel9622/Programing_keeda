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
#left-panel{width:22%;height:4020px;background-color:#eda150;float:left;padding:10px;}
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
		
#right-section{width:73%;height:4000px;background-color:#bcc92b;float:right;padding:20px;font-size:28px;}
.holder1{
padding:10px;
font-size:25px;
}
.holder2{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px solid green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
line-height:8px;
}
.holder3{
	padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px solid green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
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
line-height:20px;
}
.holder5{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px solid green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
line-height:12px;
}
.holder6{
padding:10px;
font-size:25px;

}
.holder7{
padding:10px;
font-size:25px;
}
.holder8{
padding:10px;
font-size:25px;

}
.holder9{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px solid green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
line-height:20px;
}
.holder10{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:1px dotted #333;
border-right:1px dotted #333;
font-size:18px;
background:#C0C0C0;
line-height:5px;}
.holder11{
padding:10px;
font-size:25px;
}
.holder12{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px solid green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
line-height:20px;
}
.holder13{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:1px dotted #333;
border-right:1px dotted #333;
font-size:18px;
background:#C0C0C0;
line-height:5px;}


.holder14{
padding:10px;
font-size:25px;
}
.holder15{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px solid green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
line-height:20px;
}
.holder16{
padding:10px;
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:1px dotted #333;
border-right:1px dotted #333;
font-size:18px;
background:#C0C0C0;
line-height:5px;}


.example
{
color:red;
text-decoration:underline;
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

.holder17{
	font-size:20px;
	color:white;
}
.holder17 a
{
	color:black;
	font-size:20px;
}
.holder18{
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
						<li><a href="learnc_intro.php">Introduction</a></li>
						<li><a href="c_history.php">History</a></li>
						<li><a href="c_struc.php">Structure of C Program</a></li>
						<li><a href="c_before.php">Berfore C</a></li>
						<li><a href="c_algo.php">Alogorithm</a></li>
						<li><a href="c_flow.php">Flowchart</a></li>
						<li><a href="c_io.php">C Input and Output(I/O)</a></li>
					</ul>		
			

					<h2>Declaration And Assignment</h2>
					<ul>	
			

								<li><a href="c_var.php">Variable</a></li>
								<li><a href="c_operator.php">Operator</a></li>
						
					
						<li><a href="c_head.php">Header File</a></li>
					</ul>
		


					<h2>Control Structure</h2>

					<ul>
						<li><a href="c_decision.php">Decision Making</a>
							<ul>
								<li><a href="c_if.php">if Statements</a></li>
								<li><a href="c_ifelse.php">if-else Statements</a></li>
								<li><a href="c_nested.php">Nested if-else Statements</a></li>
								<li><a href="c_elseif.php">else-if Statements</a></li>
								<li><a href="c_goto.php">goto Statement</a></li>
								<li><a href="c_switch.php">Switch Statement</a></li>
							</ul>
						</li>
						<li><a href="c_loop.php">Loops</a>
							<ul>
								<li><a href="c_while.php">while loops</a></li>
								<li><a href="c_do.php">do while loops</a></li>
								<li><a href="c_for.php">for loops</a></li>
							</ul>	
						</li>
					</ul>

		

					<h2>Function</h2>
					<ul>
						<li><a href="c_func.php">Function Basics</a></li>
						<li><a href="c_defdec.php">Defination and Declaration</a></li>
						<li><a href="c_lib.php">Library Function</a></li>
			
					</ul>

		

					<h2>Array & String & Pointer</h2>
	
					<ul>
						<li><a href="c_array.php">Array</a></li>
						<li><a href="c_string.php">String</a></li>
						<li><a href="c_pointer.php">Pointer</a></li>
					</ul>	

		
	
					<h2>Structure & Union</h2>
					<ul>
						<li><a href="c_structure.php">Structure</a></li>
						<li><a href="c_union.php">Union</a></li>
					</ul>	
					<h2>File IO</h2>
			
					<ul>
						<li><a href="c_file_handling.php">File Handling</a></li>
						<li><a href="c_write_to_file.php">Writing to a file</a></li>
						<li><a href="c_reading_from_file.php">Reading from a file</a></li>
					</ul>

	
	
				</div>
			</div>
			<div id="right-section">	
				<img src="clabel.png" alt="c programming label"> 
				<h1><center><i><b><p>Variable</p></b></i></center></h1>	
				
				<div class="holder1">
		
				<ul>
				<li>Variables are memory locations(storage area) in C programming language.</li>
				<br>
				<li>The main purpose of variables is to store data in memory for later use. Unlike constants which do not change during the program execution, variables value may change during execution. If you declare a variable in C, that means you are asking to the operating system for reserve a piece of memory with that variable name.</li>
				<br>
				</ul>
				</div>
				<h3><b>Variable Definition</b></h3>
				<div class="example"><h4>Syntax:</h4></div>
		<div class="holder2">
			<pre>
				<code>
	type variable_name;
				</code>
			</pre>
		</div>
		<p>or</p>
		<div class="holder3">
			<pre>
				<code>
	type variable_name, variable_name, variable_name;
				</code>
			</pre>
		</div>
		<h3><b>Variable Definition and Initialization</b></h3>
		<div class="example"><h4>Example:</h4></div>
		<div class="holder4">
			<pre>
				<code>
	int    width, height=5;
	char   letter='A';
	float  age, area;
	double d;

	/* actual initialization */width = 10;
	age = 26.5;
				</code>
			</pre>
		</div>
		<h3><b>Variable Assignment</b></h3>
		<p>Variable assignment is a process of assigning a value to a variable.</p>
		<div class="example"><h4>Example:</h4></div>
		<div class="holder5">
			<pre>
				<code>
	int width = 60;

	int age = 31;
				</code>
			</pre>
		</div>
		<h3><b>There are some rules on choosing variable names</b></h3>
		<div class="holder6">
		<ul>
			<li>A variable name can consist of Capital letters A-Z, lowercase letters a-z, digits 0-9, and the underscore character.</li>
			<li>The first character must be a letter or underscore.</li>
			<li>Blank spaces cannot be used in variable names.</li>
			<li>Special characters like #, $ are not allowed.</li>
			<li>C keywords cannot be used as variable names.</li>
			<li>Variable names are case sensitive.</li>
			<li>Values of the variables can be numeric or alphabetic.</li>
			<li>Variable type can be char, int, float, double or void.</li>
		</ul>
		</div>
		<h3><b>There are three types of variables in C program they are,</b></h3>
		<div class="holder7">
		<ol>
		<li>Local variable</li>
		<li>Global variable</li>
		<li>Environment variable</li>
		</ol>
		</div>
		<h4><b>1. EXAMPLE PROGRAM FOR LOCAL VARIABLE IN C:</b></h4>
		<div class="holder8">
		<ul>
			<li>The scope of local variables will be within the function only.</li>
			<li>These variables are declared within the function and can’t be accessed outside the function.</li>
			<li>In the below example, m and n variables are having scope within the main function only. These are not visible to test function.</li>
			<li>Like wise, a and b variables are having scope within the test function only. These are not visible to main function.</li>
		</ul>
		</div>
		<div class="holder9">
			<pre>
				<code>
	#include&lt;stdio.h&gt;
	void test();
 
	int main()
	{
		int m = 22, n = 44;
		// m, n are local variables of main function
		/*m and n variables are having scope
		within this main function only.
		These are not visible to test funtion.*/
		/* If you try to access a and b in this function,
		you will get 'a' undeclared and 'b' undeclared error */
		printf("\nvalues : m = %d and n = %d", m, n);
		test();
	}
 
	void test()
	{
		int a = 50, b = 80;
		// a, b are local variables of test function
		/*a and b variables are having scope
		within this test function only.
		These are not visible to main function.*/
		/* If you try to access m and n in this function,
		you will get 'm' undeclared and 'n' undeclared
		error */
		printf("\nvalues : a = %d and b = %d", a, b);
	}
				</code>
			</pre>
		</div>
		<div class="example"><h4>Output:</h4></div>
		<div class="holder10">
			<pre>
				<code>
	values : m = 22 and n = 44
	
	
	values : a = 50 and b = 80
				</code>
			</pre>
		</div>
		<h4><b>2. EXAMPLE PROGRAM FOR GLOBAL VARIABLE IN C:</b></h4>
		<div class="holder11">
		<ul>
			<li>The scope of global variables will be throughout the program. These variables can be accessed from anywhere in the program.</li>
			<li>This variable is defined outside the main function. So that, this variable is visible to main function and all other sub functions.</li>
			
		</ul>
		</div>
		<div class="holder12">
			<pre>
				<code>
		
	#include&lt;stdio.h&gt;
	void test();int m = 22, n = 44;
	int a = 50, b = 80;
 
	int main()
	{
		printf("All variables are accessed from main function");
		printf("\nvalues: m=%d:n=%d:a=%d:b=%d", m,n,a,b);
		test();
	}
 
	void test()
	{
		printf("\n\nAll variables are accessed from" \ " test function");
		printf("\nvalues: m=%d:n=%d:a=%d:b=%d", m,n,a,b);
	}
				</code>
			</pre>
		</div>
		<div class="example"><h4>Output:</h4></div>
		<div class="holder13">
			<pre>
				<code>
	All variables are accessed from main function
	
	
	values : m = 22 : n = 44 : a = 50 : b = 80
	
	
	All variables are accessed from test function
	
	
	values : m = 22 : n = 44 : a = 50 : b = 80
				</code>
			</pre>
		</div>
		
		<h4><b>3. ENVIRONMENT VARIABLES IN C:</b></h4>
		<div class="holder14">
		<ul>
			<li>Environment variable is a variable that will be available for all C  applications and C programs.</li>
			<li>We can access these variables from anywhere in a C program without declaring and initializing in an application or C program.</li>
			<li>The inbuilt functions which are used to access, modify and set these environment variables are called environment functions.</li>

		</ul>
		</div>
		<div class="holder15">
			<pre>
				<code>
		
	#include&lt;stdio.h&gt;
	#include&lt;stdlib.h&gt;
 
	int main()
	{
		printf("Directory = %s\n",getenv("DIR"));
		return 0;
	}
				</code>
			</pre>
		</div>
		<div class="example"><h4>Output:</h4></div>
		<div class="holder16">
			<pre>
				<code>
	/usr/bin/test/
				</code>
			</pre>
		</div>
				<div class="but">
				<a href="c_io.php" class="button prev">&laquo;prev</a>
				<a href="c_operator.php" class="button next">next &raquo;</a>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="holder17"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
		<br>
		<div class="holder7"><center>Copyright © 2019 programmingKeeda.com | All rights reserved.</center></div>
		</div>
	</div>
</div>
</body>
</html>