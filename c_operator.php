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
.holder1{
padding:10px;
font-size:25px;
}
.holder2{
padding:10px;
font-size:25px;
}

table, th, td
{border:1px solid black;
background:white;
}
p.round{
	border:2px solid black;
	border-radius:8px;
	background:#C0C0C0;
	line-height:40px;
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

.holder3{
	font-size:20px;
	color:white;
}
.holder3 a
{
	color:black;
	font-size:20px;
}
.holder4{
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
				<h1><center><i><b><p>Operator</p></b></i></center></h1>	
				
				<div class="holder1">
		
					<ul>
						<li>An operatopr is a symbol that tells the compiler to perform specific mathematical or logical functions .C language is rich in built in operators and provides the following types of operator
							<ol>
								<li>Arithmetic Operator</li>
								<li>Relational Operator</li>
								<li>Logical Operator</li>
								<li>Assignment Operator</li>
								<li>Increment and Decrement Operator</li>
								<li>Conditional Operator</li>
								<li>Bitwise Operator</li>
								<li>Special Operator</li>
							</ol>
						</li>
					</ul>
				</div>
				<br>
				<table style="width:100%">
					<tr>
						<th></th>
						<th>Description</th>
						<th>Represented By</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Parenthesis</td>
						<td>() []</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Structure Access</td>
						<td>. -></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Unary</td>
						<td>! ++ -- - * & </td>
					</tr><tr>
						<td>4</td>
						<td>Multiple,Divide,Modulus</td>
						<td>* / %</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Add,Subtract</td>
						<td>+ -</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Shift Right,Left</td>
						<td>>> <<</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Greater,Less Than, etc</td>
						<td>> < -</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Equal,Not Equal</td>
						<td>-- !-</td>
					</tr>
					<tr>
						<td>9</td>
						<td>Bitwise AND</td>
						<td>& </td>
					</tr>
					<tr>
						<td>10</td>
						<td>Bitwise Exclusive OR</td>
						<td>^</td>
					</tr>
					<tr>
						<td>11</td>
						<td>Bitwise OR</td>
						<td>|</td>
					</tr>
					<tr>
						<td>12</td>
						<td>Logical AND</td>
						<td>&&</td>
					</tr>
					<tr>
						<td>13</td>
						<td>Logical OR</td>
						<td>||</td>
					</tr>
					<tr>
						<td>14</td>
						<td>Conditional Expression</td>
						<td>?:</td>
					</tr>
					<tr>
						<td>15</td>
						<td>Assignment</td>
						<td>- +- -- etc</td>
					</tr>
					<tr>
						<td>16</td>
						<td>Comma</td>
						<td>,</td>
					</tr>
				</table>
				<br>
				<h3><b>Arithmetic Operators</b></h3>			
				<br>
				<p>An arithmetic operator performs mathematical operations such as addition, subtraction and multiplication on numerical values (constants and variables).</p>
				<br>
				<table style="width:100%">
					<tr>
						<th></th>
						<th>Operator</th>
						<th>Meaning of Operator</th>
					</tr>
					<tr>
						<td>1</td>
						<td>+</td>
						<td>addition or unary plus</td>
					</tr>
					<tr>
						<td>2</td>
						<td>-</td>
						<td>subtraction or unary minus</td>
					</tr>
					<tr>
						<td>3</td>
						<td>*</td>
						<td>multiplication </td>
					</tr>
					<tr>
						<td>4</td>
						<td>/</td>
						<td>division</td>
					</tr>
					<tr>
						<td>5</td>
						<td>%</td>
						<td>remainder after division( modulo division)</td>
					</tr>
					
				</table>
				<br>
				<h3><b>Relational Operators</b></h3>				
				<br>
				<p>A relational operator checks the relationship between two operands. If the relation is true, it returns 1; if the relation is false, it returns value 0.</p>
				<p>Relational operators are used in decision making and loops.</p>
				<br>
				<table style="width:100%">
					<tr>
						<th></th>
						<th>Operator</th>
						<th>Meaning of Operator</th>
						<th>Example</th>
					</tr>
					<tr>
						<td>1</td>
						<td>==</td>
						<td>Equal to</td>
						<td>5 == 3 returns 0</td>
					</tr>
					<tr>
						<td>2</td>
						<td>></td>
						<td>Greater than</td>
						<td>5 > 3 returns 1</td>
					</tr>
					<tr>
						<td>3</td>
						<td><</td>
						<td>Less than</td>
						<td>5 < 3 returns 0</td>
					</tr><tr>
						<td>4</td>
						<td>!=</td>
						<td>Not equal to</td>
						<td>5 != 3 returns 1</td>
					</tr>
					<tr>
						<td>5</td>
						<td>>=</td>
						<td>Greater than or equal to</td>
						<td>5 >= 3 returns 1</td>
					</tr>
					<tr>
						<td>6</td>
						<td><=</td>
						<td>Less than or equal to</td>
						<td>5 <= 3 return 0</td>
					</tr>
					
				</table>
				<br>
				<h3><b>Logical Operators</b></h3>
				<br>
				<p>An expression containing logical operator returns either 0 or 1 depending upon whether expression results true or false. Logical operators are commonly used in decision making in C programming.</p>
				<br>
				<table style="width:100%">
					<tr>
						<th></th>
						<th>Operator</th>
						<th>Meaning of Operator</th>
					</tr>
					<tr>
						<td>1</td>
						<td>&&</td>
						<td>Logial AND. True only if all operands are true </td>
					</tr>
					<tr>
						<td>2</td>
						<td>||</td>
						<td>Logical OR. True only if either one operand is true</td>
					</tr>
					<tr>
						<td>3</td>
						<td>!</td>
						<td>Logical NOT. True only if the operand is 0</td>
					</tr>
					
				</table>
				<br>
				<h3><b>Assignment Operators</b></h3>	
				<br>
				<p>An assignment operator is used for assigning a value to a variable. The most common assignment operator is =</p>
				<br>
				<table style="width:100%">
					<tr>
						<th></th>
						<th>Operator</th>
						<th>Example</th>
						<th>Same as</th>
					</tr>
					<tr>
						<td>1</td>
						<td>=</td>
						<td>a=b</td>
						<th>a=b</th>
					</tr>
					<tr>
						<td>2</td>
						<td>+=</td>
						<td>a+=b</td>
						<th>a=a+b</th>
					</tr>
					<tr>
						<td>3</td>
						<td>-=</td>
						<td>a-=b </td>
						<th>a=a-b</th>
					</tr><tr>
						<td>4</td>
						<td>*=</td>
						<td>a*=b</td>
						<th>a=a*b</th>
					</tr>
					<tr>
						<td>5</td>
						<td>/=</td>
						<td>a/=b</td>
						<th>a=a/b</th>
					</tr>
					<tr>
						<td>6</td>
						<td>%=</td>
						<td>a%=b</td>
						<th>a=a%b</th>
					</tr>
					
				</table>
				<br>
				<h3><b>Increment and Decrement  Operators</b></h3>				
				<br>
				<p>C programming has two operators increment ++ and decrement -- to change the value of an operand (constant or variable) by 1.</p>
				<p>Increment ++ increases the value by 1 whereas decrement -- decreases the value by 1. These two operators are unary operators, meaning they only operate on a single operand.</p>
				<br>
				<h3><b>Conditional Operators</b></h3>	
				<br>
				<p class ="round">conditional Expression ? expression1 : expression2</p> 
				<br>
				<div class="holder2">
					<p>The conditional operator works as follows:</p>
					<ul>
						<li>The first expression <em> conditionalExpression</em> is evaluated at first. This expression evaluates to 1 if it's and evaluates to 0 if it's false.</li>
						<li>If <em>conditionalExpression</em> is true, expression1 is evaluated.</li>
						<li>If <em>conditionalExpression</em> is false, expression2 is evaluated.</li>
					</ul>
				</div>
				<br>
				<h3><b>Bitwise Operators</b></h3>				
				<br>
				<p>In processor, mathematical operations like: addition, subtraction, addition and division are done in bit-level which makes processing faster and saves power.</p>
				<p>Bitwise operators are used in C programming to perform bit-level operations.</p>
				<br>
				<table style="width:100%">
					<tr>
						<th></th>
						<th>Operator</th>
						<th>Meaning of Operator</th>
	
					</tr>
					<tr>
						<td>1</td>
						<td>& </td>
						<td>Bitwise AND</td>
						
					</tr>
					<tr>
						<td>2</td>
						<td>|</td>
						<td>Bitwise OR</td>
						
					</tr>
					<tr>
						<td>3</td>
						<td>^</td>
						<td>Bitwise exclusive OR</td>

					</tr><tr>
						<td>4</td>
						<td>~</td>
						<td>Bitwise complement</td>
					</tr>
					<tr>
						<td>5</td>
						<td><<</td>
						<td>Shift left</td>
						
					</tr>
					<tr>
						<td>6</td>
						<td>>></td>
						<td>Shift right</td>
						
					</tr>
					
				</table>
				<br>
				<h3><b>Special Operator</b></h3>
				<br>
				<h4><b>Comma Operator</b></h4>
				<br>
				<p>Comma operators are used to link related expressions together.</p>
				<br>
				<h4><b>sizeof operator</b></h4>
				<br>
				<p>The sizeof is an unary operator which returns the size of data (constant, variables, array, structure etc).</p>
				<br>
				<h4><b>Other Operator</b></h4>
				<br>
				<p>Other operators such as & (reference operator), * (dereference operator) and -> (member selection) operator will be discussed in C pointers.</p>
				<br>
				<table style="width:100%">
					<tr>
						<th></th>
						<th>Operator</th>
						<th>Description</th>
						<th>Example</th>
					</tr>
					<tr>
						<td>1</td>
						<td>sizeof</td>
						<td>Returns the size of an variable</td>
						<td>sizeof(x) return size of the variable x</td>
					</tr>
					<tr>
						<td>2</td>
						<td>&</td>
						<td>Returns the address of an variable</td>
						<td>	&x ; return address of the variable x</td>
					</tr>
					<tr>
						<td>3</td>
						<td>*</td>
						<td>Pointer to a variable</td>
						<td>*x ; will be pointer to a variable x</td>
					</tr>
				</table>
				
				<div class="but">
				<a href="c_var.php" class="button prev">&laquo;prev</a>
				<a href="c_head.php" class="button next">next &raquo;</a>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="holder3"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
		<br>
		<div class="holder7"><center>Copyright © 2019 programmingKeeda.com | All rights reserved.</center></div>
		</div>
	</div>
</body>
</html>