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
#left-panel{width:22%;height:3020px;background-color:#eda150;float:left;padding:10px;}
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
		
#right-section{width:73%;height:3000px;background-color:#bcc92b;float:right;padding:20px;font-size:28px;}
.holder1{
padding:10px;
font-size:20px;
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
				<div class="holder1"><h1><center><i><b><p>String</p></b></i></center></h1></div>	
				
				<div class="holder3">
		
				<ul>
				<li>A string is simply an array of characters which is terminated by a null character '\0' which shows the end of the string.Strings are always enclosed by double quotes.Whereas, character is enclosed by single quotes in C++.</li>
				<br>
				<li>This declaration and initialization create a string with the word "STUDENT"</li>
				<br>
				<li>To hold the \0 (null character) at the end of the array, the size of the array is one more than number of characters in the word "STUDENT".</li>
				<br>
				<li>char my_name[8]={'S','T','U','D','E','N','T''\0'};
				<br>
				<li>We can also write the above statement as follows:
				<br>
				<p>char my_name[]="STUDENT";
				<br>
				</div>
				<br>
				<h4 style=color:red>Example for C String:</h4>
				<br>
<div class="holder3">
		
				<ul>
				<li>char my_name[20] = {‘d’, ’i’, ‘p’, ‘l’, ‘o’, ‘m’, ‘a’, ‘l’, ‘a’, ’n’, ‘g’, ‘\0’}; </li>
				<br>
				<li>char my_name[20] = “diplomalang”;</li>
				<br>
				<li>char my_name[]    = “diplomalang”;</li>
				<br>
				<li>Difference between above declarations are, when we declare char as “string[20]”, 20 bytes of memory space is allocated for holding the string value.</li>
				<br>
				<li>When we declare char as “string[]”, memory space will be allocated as per the requirement during execution of the program.</li>

				</div>
				<br>
<h4 style=color:red>Example program for C String:</h4>
<br>
		<div class="holder4">
			<pre>
				<code>
    #include &lt;iostream.h&gt;
 
	void main ()
	{
		char string[20] = "DiplomaLang.com";
 
		cout<< "The string is : %s \n", string;
		return 0;
	}
				
				</code>
			</pre>
		</div>
		<br>
<h4 style=color:green>String Function</h4>
<br>
<div class="holder3">
		
				<ul>
				<li>String.h header file supports all the string functions in C++ language. All the string functions are given below. </li>
				<br>
				<li>Click on each string function name below for detail description and example programs.</li>
				

				</div>
				<br>
<table style="width:100%">
					<tr>
						<th>Sr.No.</th>
						<th>String functions</th>
						<th>Description</th>
					</tr>
					<tr>
						<td>1</td>
						<td>strcat ( )</td>
						<td>Concatenates str2 at the end of str1</td>
					</tr>
					<tr>
						<td>2</td>
						<td>strncat ( )</td>
						<td>Appends a portion of string to another</td>
					</tr>
					<tr>
						<td>3</td>
						<td>strcpy ( )</td>
						<td>Copies str2 into str1</td>
					</tr>
					<tr>
						<td>4</td>
						<td>strncpy ( )</td>
						<td>Copies given number of characters of one string to another</td>
					</tr>
					<tr>
						<td>5</td>
						<td>strlen ( )</td>
						<td>Gives the length of str1</td>
					</tr>
					<tr>
						<td>6</td>
						<td>strcmp ( )</td>
						<td>Returns 0 if str1 is same as str2. Returns <0 if strl < str2. Returns >0 if str1 > str2</td>
					</tr>
					<tr>
						<td>7</td>
						<td>strcmpi ( )</td>
						<td>Same as strcmp() function. But, this function negotiates case.  “A” and “a” are treated as same.</td>
					</tr>
					<tr>
						<td>8</td>
						<td>strchr ( )</td>
						<td>Returns pointer to first occurrence of char in str1</td>
					</tr>
					<tr>
						<td>9</td>
						<td>strrchr ( )</td>
						<td>last occurrence of given character in a string is found</td>
					</tr>
					<tr>
						<td>10</td>
						<td>strstr ( )</td>
						<td>This file contains all jump functions</td>
					</tr>
					<tr>
						<td>11</td>
						<td>strrstr ( )</td>
						<td>Returns pointer to last occurrence of str2 in str1</td>
					</tr>
					<tr>
						<td>12</td>
						<td>strdup ( )</td>
						<td>Duplicates the string</td>
					</tr>
					<tr>
						<td>13</td>
						<td>strlwr ( )</td>
						<td>Converts string to lowercase</td>
					</tr>
					<tr>
						<td>14</td>
						<td>strupr()</td>
						<td>Converts string to uppercase</td>
					</tr>
					<tr>
						<td>15</td>
						<td>strrev()</td>
						<td>reverse the given string</td>
					</tr>
					<tr>
						<td>16</td>
						<td>strset</td>
						<td>sets all character in a string to given character</td>
					</tr>
					<tr>
						<td>17</td>
						<td>strnset</td>
						<td>It sets the portion of characters in a string to given character</td>
					</tr>
					<tr>
						<td>18</td>
						<td>strtok</td>
						<td>tokenizing given string using delimiter</td>
					</tr>
					
				</table>
				<div class="but">
				<a href="cpp_array.php" class="button prev">&laquo;prev</a>
				<a href="cpp_pointer.php" class="button next">next &raquo;</a>
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