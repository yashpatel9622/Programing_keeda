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
#left-panel{width:22%;height:5070px;background-color:#eda150;float:left;padding:10px;}
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
		
#right-section{width:73%;height:5050px;background-color:#bcc92b;float:right;padding:20px;font-size:28px;}
.holder1
{
	font-size:20px;
}
.holder2
{
	font-size:22px;
}
.holder3
{
	font-size:25px;
}
.holder4
{
	font-size:25px;
}
.holder5
{
	font-size:22px;
}

table, th, td
{
	border:1px solid black;
	background:white;
}
td
{
	text-align:center;
}

.holder6
{
	font-size:22px;
}

.holder7
{
	font-size:25px;
}

.holder8
{
	font-size:22px;
}

.holder9
{
	font-size:22px;
}

.holder10
{
	font-size:25px;
}
.holder11
{
	font-size:22px;
}
.holder12
{
	font-size:22px;
}
.holder13{

font-size:25px;
}
.holder14{

font-size:22px;
}

.holder15
{
	font-size:25px;
}

.holder16
{
	font-size:22px;
}
.holder17
{
	font-size:25px;
}
.holder18
{
	font-size:22px;
}

.holder19
{
	font-size:25px;
}
.holder20
{
	font-size:22px;
}

.holder21
{
	font-size:25px;
}
.holder22
{
	font-size:22px;
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
.holder23{
	font-size:20px;
	color:white;
}
.holder23 a
{
	color:black;
	font-size:20px;
}
.holder24{
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
				<div class="holder1"><h1><center><i><b><p>Operators</p></b></i></center></h1></div>	
				<div class="holder2">
					<br>
					Operators are special type of functions,that takes one or more arguments and produces a new value.For example:addition(+),Substraction(-),multiplication(*),,etc,are all operators.Operators are used to perform various operations on variables and costants.
				</div>	
				<br>
				<div class="holder3">
					<h3>Types of operators</h3>
					<pre>
	-Assignment Operator
	-Arithmetic Operator
	-Relational Operator
	-Logical Operator
	-Bitwise Operator
	-Shift Operator
	-Unary Operator
	-Ternary Operator
	-Comma Operator
					</pre>
				</div>
				<br>
				<div class="holder4"><h3><b>Assignment Operator(=)</b></h3></div>
				<br>
				<div class="holder5">
					Operates '=' is used for assignment, it takes the right hand side (calles rvalue) and copy it into the left-hand side (called lvalue).Assignment operator is the only operator which can be overloaded but cannot be inherited.
				</div>
				<br>
				<table style="width:100%">
					<tr>
						<th>Operator</th>
						<th>Description</th>
					</tr>
					<tr>
						<td>=</td>
						<td>assign</td>
					</tr>
					<tr>
						<td>+=</td>
						<td>assign with add</td>
					</tr>
					<tr>
						<td>-=</td>
						<td>assign with subtract</td>
					</tr>
					<tr>
						<td>*=</td>
						<td>assign with multiply</td>
					</tr>
					<tr>
						<td>/=</td>
						<td>assign with divide</td>
					</tr>
					<tr>
						<td>%=</td>
						<td>assign with remainder</td>
					</tr>
					<tr>
						<td>>>=</td>
						<td>assign with right shift</td>
					</tr>
					<tr>
						<td><<=</td>
						<td>assign with left shift</td>
					</tr>
					<tr>
						<td>&=</td>
						<td>assign with bitwise AND</td>
					</tr>
					<tr>
						<td>^=</td>
						<td>assign with bitwise XOR</td>
					</tr>
					<tr>
						<td>|=</td>
						<td>assign with bitwise OR</td>
					</tr>
				</table>
				<br>
				<div class="holder6"><h3><b>Example:</b></h3>
					<br>
					<pre>
	a=a+63;is same as
	a+=64;
					</pre>
				</div>
				<br>
				<div class="holder7"><h3><b>Arithmetic Operator</b></h3></div>
				<br>
				<div class="holder8">
					These are operators used to perform basic mathematical operations.Different arithmatic operators are:
				</div>
				<br>
				<table style="width:100%">
					<tr>
						<th>Operator</th>
						<th>Description</th>
					</tr>
					<tr>
						<td>*</td>
						<td>multiplication</td>
					</tr>
					<tr>
						<td>/</td>
						<td>division</td>
					</tr>
					<tr>
						<td>+</td>
						<td>addition</td>
					</tr>
					<tr>
						<td>-</td>
						<td>subtraction and unary minus</td>
					</tr>
					<tr>
						<td>%</td>
						<td>remainder after division</td>
					</tr>
				</table>
				<br>
				<div class="holder9"><h3><b>Example:</b></h3>
					<br>
					<pre>
	int x=10;
	x+=4 /*will add 4 to 10,and hence assign 14 to x. */
	
	x-=5 /*will subtract 5 from 10 and assign 5 to x. */
					</pre>
				</div>
				<br>
				<div class="holder10"><h3><b>Relational Operator</b></h3></div>
				<br>
				<div class="holder11">
					These operators establish a relationship between operands.
					<br>
					You must notice that assignment operator is (=) and there is a relational operator,for equivalent (==).
					These two are different from each other,the assignment operator assigns the value to any variable,whereas equivalent operator is used to compare values,like in if-else ci=onditions.
				</div>
				<br>
				<table style="width:100%">
					<tr>
						<th>Operator</th>
						<th>Description</th>
					</tr>
					<tr>
						<td>==</td>
						<td>equal</td>
					</tr>
					<tr>
						<td>!=</td>
						<td>not equal</td>
					</tr>
					<tr>
						<td>><</td>
						<td>Greater than/less than</td>
					</tr>
					<tr>
						<td>>=</td>
						<td>greater than or equal to</td>
					</tr>
					<tr>
						<td><=</td>
						<td>less than or equal to</td>
					</tr>
				</table>
				<br>
				<div class="holder12"><h3><b>Example:</b></h3>
					<br>
					<pre>
   //assignment operator
   int x=10;
   //again assignment operator
   x=5;
   /*here we have used equivalent relational operator for comparison*/
   if(x==5)
   {
		cout<< "Successfully compared";
   }
					</pre>
				</div>
				<br>
				<div class="holder13"><h3><b>Logical Operator</b></h3></div>
				<br>
				<div class="holder14">
					The logical operators are AND (&&) and OR (||).They are used to combine two different expressions together.If two statement are connected using AND operator,the validity of both statements will be considered,but if they are connected using OR operator,then either one of them must be valid.These operators are mostly used in loops (especially while loop) and in decision making.
				</div>
				<br>
				<table style="width:100%">
					<tr>
						<th>Operator</th>
						<th>Description</th>
					</tr>
					<tr>
						<td>&&</td>
						<td>Logical AND.True if both operands are non-zero.</td>
					</tr>
					<tr>
						<td>||</td>
						<td>Logical OR.True if any of the operand is non-zero.</td>
					</tr>
					<tr>
						<td>!</td>
						<td>Logical NOT.Used to reverses the logical state of its operand.</td>
					</tr>
				</table>
				<br>
				<div class="holder15"><h3><b>Bitwise Operator</b></h3></div>
				<br>
				<div class="holder16">
					Bitwise operator performs operation on actual bits present in each byte of a variable.Each byte contain 8 bits,each bit can store the value 0 or 1.
				</div>
				<br>
				<table style="width:100%">
					<tr>
						<th>Operator</th>
						<th>Description</th>
					</tr>
					<tr>
						<td>~</td>
						<td>one's complement</td>
					</tr>
					<tr>
						<td>&</td>
						<td>bitwise AND</td>
					</tr>
					<tr>
						<td>^</td>
						<td>bitwise XOR</td>
					</tr>
					<tr>
						<td>|</td>
						<td>bitwise OR</td>
					</tr>
					<tr>
						<td><<</td>
						<td>left shift(binary multiply by 2)</td>
					</tr>
					<tr>
						<td>>></td>
						<td>right shift(binary divide by 2)</td>
				</table>
				<br>
				<div class="holder17"><h3><b>Shift Operator</b></h3></div>
				<br>
				<div class="holder18">
					Shift operators are used to shift bits of any variable.It is of three types,
				</div>
				<br>
				<table style="width:100%">
					<tr>
						<th>Operator</th>
						<th>Description</th>
					</tr>
					<tr>
						<td><<</td>
						<td>Left Shift Operator</td>
					</tr>
					<tr>
						<td>>></td>
						<td>Right Shift Operator</td>
					</tr>
					<tr>
						<td>>>></td>
						<td>Unsigned Right Shift Operator</td>
					</tr>
				</table>
				<br>
				<div class="holder19"><h3><b>Unary Operator</b></h3></div>
				<br>
				<div class="holder20">
					These are the operators which work on only one operand.There are many unary operators,but increment ++ and dacrement -- operators are most used.
					<br>
					<br>
					<b>Other Unary Operators:</b>
					<br>
					<pre>
	-address of &
	-dereference *
	-new and delete
	-bitwise not ~
	-logical not !
	-unary minus -
	-unary plus +
					<pre>
				</div>
				<br>
				<div class="holder21"><h3><b>Ternary Operator</b></h3></div>
				<br>
				<div class="holder22">
					The ternary if-else ?: is an operator which has three operands.
					<br>
					int a=10;a>5?cout<< "true":cout<< "false"
				</div>
				<br>
				<div class="but">
				<a href="cpp_var.php" class="button prev">&laquo;prev</a>
				<a href="cpp_head.php" class="button next">next &raquo;</a>
				</div> 
				
			</div>
		</div>
		<div id="footer">
			<div class="holder23"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
			<br>
			<div class="holder7"><center>Copyright © 2019 programmingKeeda.com | All rights reserved.</center></div>
		</div>
	</div>
</div>
</body>
</html>