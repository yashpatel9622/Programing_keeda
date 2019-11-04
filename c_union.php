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
#left-panel{width:22%;height:3320px;background-color:#eda150;float:left;padding:10px;}
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
		
#right-section{width:73%;height:3300px;background-color:#bcc92b;float:right;padding:20px;font-size:28px;}
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
						<li><a href="c_var_scope.php">Variable Scope</a></li>
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
				<div class="holder1"><h1><center><i><b><p>Union</p></b></i></center></h1></div>	
				<p>C Union is also like structure, i.e. collection of different data types which are grouped together. Each element in a union is called member.</p>
				<div class="holder3">
		
				<ul>
				<li>Union and structure in C  are same in concepts, except allocating memory for their members.</li>
				<br>
				<li>Structure allocates storage space for all its members separately.</li>
				<br>
				<li>Whereas, Union allocates one common storage space for all its members</li>
				<br>
				<li>We can access only one member of union at a time. We can’t access all member values at the same time in union. But, structure can access all member values at the same time. This is because, Union allocates one common storage space for all its members. Where as Structure allocates storage space for all its members separately.</li>
				<br>
				<li>Many union variables can be created in a program and memory will be allocated for each union variable separately.</li>
				<br>
				<li>Below table will help you how to form a C union, declare a union, initializing and accessing the members of the union.</li>
				</div>
				
<h4 style=color:red>Syntax:</h4>
		<div class="holder2">
			<pre>
				<code>
	union tag_name

	{

		data type var_name1;

		data type var_name2;
		
		data type var_name3;

	};
				
				</code>
			</pre>
		</div>

<h4 style=color:red>Example:</h4>
		<div class="holder4">
			<pre>
				<code>
	union student
	{
		int  mark;
		char name[10];
		float average;
	};
				
				</code>
			</pre>
		</div>
<h4 style=color:red>Declaring union using normal variable:</h4>
		<div class="holder2">
			<pre>
				<code>
	union student report;
				
				</code>
			</pre>
		</div>
<h4 style=color:red>Initializing union using normal variable:</h4>
		<div class="holder2">
			<pre>
				<code>
	union student report = {100, “Mani”, 99.5};
				
				</code>
			</pre>
		</div>

<h4 style=color:red>Accessing union members using normal variable:</h4>
		<div class="holder2">
			<pre>
				<code>
	report.mark;

	report.name;

	report.average;
	
				
				</code>
			</pre>
		</div>
<h4 style=color:red>Example:</h4>
		<div class="holder4">
			<pre>
				<code>
	#include &lt;stdio.h&gt;
	#include &lt;string.h&gt;
 
	union student 
	{
		char name[20];
		char subject[20];
		loat percentage;
	};
 
	int main() 
	{
		union student record1;
		union student record2;
 
    // assigning values to record1 union variable
       strcpy(record1.name, "Raju");
       strcpy(record1.subject, "Maths");
       record1.percentage = 86.50;
 
       printf("Union record1 values example\n");
       printf(" Name       : %s \n", record1.name);
       printf(" Subject    : %s \n", record1.subject);
       printf(" Percentage : %f \n\n", record1.percentage);
 
    // assigning values to record2 union variable
       printf("Union record2 values example\n");
       strcpy(record2.name, "Mani");
       printf(" Name       : %s \n", record2.name);
 
       strcpy(record2.subject, "Physics");
       printf(" Subject    : %s \n", record2.subject);
 
       record2.percentage = 99.50;
       printf(" Percentage : %f \n", record2.percentage);
       return 0;
	}		
				</code>
			</pre>
		</div>
				<div class="but">
				<a href="c_structure.php" class="button prev">&laquo;prev</a>
				<a href="c_file_handling.php" class="button next">next &raquo;</a>
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