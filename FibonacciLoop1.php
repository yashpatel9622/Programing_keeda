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

#container{margin-top:10px;}
#container::after{content:"";display:block;clear:both;}
#left-panel{width:23%;height:3500px;background-color:#eda150;float:left;padding:10px;}
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
	height:3500px;
	background-color:#bcc92b;
	float:right;
	padding:10px;
}

.FibonacciLoop
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

.but
{ 
	padding: 15px 332px;
}

.button 
{
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

.prev 
{
	font-size: 24px;
	background-color: #f44336;
	border-radius: 4px;
	border: 2px solid #555555;
}

.prev:hover 
{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.next 
{
	font-size: 24px;
	background-color: #f44336;
	border-radius: 4px;
	border: 2px solid #555555;
}

.next:hover 
{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
				<div id="topic_logo"> <img src="c1.png" alt="cprogramming-Logo"> </div>
				<h1>C Programming</h1>
				<div class="sidebar">
					<ul>
						<li><a href="ma1.php">Print Hello World</a></li>
						<li><a href="integer1.php">Print Integer</a></li>
						<li><a href="addition1.php">Addition of two no</a></li>
						<li><a href="areaTriangle1.php">Area of triangle</a></li>
						<li><a href="oddEven1.php">Odd or Even</a></li>
						<li><a href="asmd1.php">Add subtract multiply divide</a></li>
						<li><a href="Nadd1.php">Add n numbers</a></li>
						<li><a href="Dadd1.php">Add digits</a></li>
						<li><a href="GreaterNumber1.php">Greatest of 3 numbers</a></li>
						<li><a href="Swapping1.php">Swapping two numbers</a></li>
						<li><a href="NestedIfElse1.php">Nested If Else</a></li>
						<li><a href="Percentage1.php">Calculate Percentage</a></li>
						<li><a href="GrossSalary1.php">Calculate Gross salary</a></li>
						<li><a href="SimpleInterest1.php">Simple Interest</a></li>
						<li><a href="CircleArea1.php">Area of Circle</a></li>
						<li><a href="RectangleArea1.php">Area of Rectangle</a></li>
						<li><a href="SquareArea1.php">Area of Square</a></li>
						<li><a href="CubeVolume1.php">Volume of Cube</a></li>
						<li><a href="CylinderVolume1.php">Volume of Cylinder</a></li>
						<li><a href="SphereVolume1.php">Volume of Sphere</a></li>
						<li><a href="Vowel1.php">Check Vowel</a></li>
						<li><a href="LeapYear1.php">Leap Year</a></li>
						<li><a href="Reverse1.php">Reverse Number</a></li>
						<li><a href="ReverseArray1.php">Reverse number using array</a></li>
						<li><a href="Palindrome1.php">Palindrome number</a></li>
						<li><a href="prime1.php">Prime numbers</a></li>
						<li><a href="perfect1.php">Perfect number</a></li>
						<li><a href="Armstrong1.php">Find armstrong number</a></li>
						<li><a href="GenerateArmstrong1.php">Generate armstrong number</a></li>
						<li><a href="Temperature1.php">Temperature Conversion</a></li>
						<li><a href="FactFunction1.php">Factorial using function</a></li>
						<li><a href="FactRecursion1.php">Factorial using recursion</a></li>
						<li><a href="FibonacciLoop1.php">Fibonacci series using loop</a></li>
						<li><a href="FibonacciRecursion1.php">Fibonacci series using recursion</a></li>
						<li><a href="PrintPattern1.php">Print Pattern</a></li>
						<li><a href="DiamondPattern1.php">Diamond Pattern</a></li>
						<li><a href="FloydsTriangle1.php">Print Floyd's Triangle</a></li>
						<li><a href="PascalTriangle1.php">Print Pascal Triangle</a></li>
						<li><a href="DecimalToBinaryBit1.php">Decimal to Binary Bitwise</a></li>
						<li><a href="DecimalToBinary1.php">Decimal to Binary</a></li>
						<li><a href="DecimalToOctal1.php">Decimal to Octal</a></li>
						<li><a href="BinaryToDecimal1.php">Binary to Decimal</a></li>
						<li><a href="BinaryToOctal1.php">Binary to Octal</a></li>
						<li><a href="BinaryToHexa1.php">Binary to Hexadecimal</a></li>
						<li><a href="MaxArray1.php">Maximum element in array</a></li>
						<li><a href="MinArray1.php">Minimum element in array</a></li>
						<li><a href="Array1.php">Reverse Array</a></li>
						<li><a href="InsertArray1.php">Insert element in array</a></li>
						<li><a href="DeleteArray1.php">Delete element from array</a></li>
						<li><a href="LinearSearch1.php">Linear search</a></li>
						<li><a href="BinarySearch1.php">Binary search</a></li>
						<li><a href="BubbleSort1.php">Bubble sort</a></li>
						<li><a href="InsertionSort1.php">Insertion sort</a></li>
						<li><a href="SelectionSort1.php">Selection sort</a></li>
						<li><a href="PrintString1.php">Print string</a></li>
						<li><a href="StringLength1.php">String length</a></li>
						<li><a href="CompareString1.php">Compare Strings</a></li>
						<li><a href="CopyString1.php">Copy string</a></li>
						<li><a href="ConcatenateString1.php">Concatenate strings</a></li>
						<li><a href="RverseString1.php">Reverse string</a></li>
						<li><a href="DeleteVowels1.php">Delete vowels</a></li>
						<li><a href="SwapString1.php">Swap strings</a></li>
						<li><a href="PointerAddition1.php">Addition using pointer</a></li>
						<li><a href="PointerReverse1.php">Reverse array using pointer</a></li>
						<li><a href="PointerArraySum1.php">Sum of array using pointer</a></li>
						<li><a href="PointerLength1.php">Length of string using pointer</a></li>
						<li><a href="Structure1.php">Structure</a></li>
					</ul>
				</div>
			</div>
			<div id="right-section">
				<br>
				<br>
				<br>
				<br>
				<br>
				<h1>Fibonacci series using loop</h1>
				<div class="FibonacciLoop">
					<pre>
						<code class="ccode" >
	#include&ltstdio.h&gt;
				
	int main()
	{
		int n,first=0,second=1,next,c;
					
		printf("Enter the number of terms\n");
		scanf("%d",&n);
					
		printf("First %d terms of Fibonacci series
		are:-\n",n);
					
		for(c=0;c< n;c++)
		{
			if(c<=1)
				next=c;
			else
			{
				next=first+second;
				first=second;
				second=next;
			}
			printf("%d\n",next);
		}
		return 0;
	}
						</code>
					</pre>
				</div>
				<br>
				<br>
				<br>
				<div class="example"><h1>Program Output:</h1></div>
				<br>
				<br>
				<img src="FibonacciLoopOP.png" alt="c programming label"> 
				<div class="but">
					<a href="FactRecursion1.php" class="button prev">&laquo;prev</a>
					<a href="FibonacciRecursion1.php" class="button next">next &raquo;</a>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="holder4"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
			<br>
			<div class="holder5"><center>Copyright © 2018 DiplomaLang.com | All rights reserved.</center></div>
		</div>
	</div>
</body>
</html>

