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
#left-panel{width:22%;height:2120px;background-color:#eda150;float:left;padding:10px;}
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
		
#right-section{width:73%;height:2100px;background-color:#bcc92b;float:right;padding:20px;font-size:28px;}
.holder1{

font-size:28px;
}
.holder2{

font-size:25px;

border-bottom:2px dotted white;
}
.holder3{
font-size:28px;
}
.holder4{

font-size:25px;
padding:10px 30px;
list-style-image:url(star.png);
border-bottom:2px dotted white;
}
.holder5{

font-size:28px;
}
.holder6{

font-size:25px;

border-bottom:2px dotted white;
}
.holder7{
font-size:28px;
}
.holder8{
font-size:25px;
padding:10px 30px;
border-bottom:2px dotted white;
list-style-image:url(tick1.png);
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

.next {font-size: 24px;background-color: #f44336;border-radius: 4px;border: 2px solid #555555;}
.next:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#footer{height:100px;background-color:#79d17b;margin-top:10px;}
.holder10{
	font-size:20px;
	color:white;
}
.holder10 a
{
	color:black;
	font-size:20px;
}
.holder11
{
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
			<div id="topic_logo"> <img src="java.png" alt="javaprogramming-Logo"> </div>
			<h1>java Programming</h1>
			<div class="sidebar">
				<ul>
<li><a href="learnjava.php">Introduction</a></li>
					<li><a href="java_firstp.php">First java Program</a></li>
				</ul>	
		

				<h2>Declaration And Assignment</h2>
				<ul>	
					

							<li><a href="java_var.php">Variable</a></li>
						    
							<li><a href="java_operator.php">Operator</a></li>
							<li><a href="java_datat.php">Data Types</a></li>
						
					
				</ul>
	


				<h2>Control Structure</h2>

				<ul>
					<li><a >Decision Making</a>
						<ul>
							<li><a href="java_if.php">if Statements</a></li>
							<li><a href="java_ifelse.php">if-else Statements</a></li>
							<li><a href="java_nested.php">Nested if-else Statements</a></li>
							
							
							<li><a href="java_switch.php">Switch Statement</a></li>
						</ul>
					</li>
					<h2>Loops</h2>
						<ul>
							<li><a href="java_while.php">while loops</a></li>
							<li><a href="java_do.php">do while loops</a></li>
							<li><a href="java_for.php">for loops</a></li>
						</ul>
					</li>
				</ul>

	

				<h2>Contructor & Keywords</h2>
				<ul>
					<li><a href="java_con.php">constructor</a></li>
					<li><a href="java_key.php">Keywords</a></li>
					
				
				</ul>


	

				<h2>Array & String & Vector</h2>
	
				<ul>
					<li><a href="java_array.php">Array</a></li>
					<li><a href="java_string.php">String</a></li>
					<li><a href="java_vector.php">Vector</a></li>
				</ul>

	
	
				<h2>Inheritance</h2>
				<ul>
					<li><a href="java_inherit.php">Inheritance</a></li>
					<li><a href="java_single.php">Single inheritance</a></li>
				    <li><a href="java_multiple.php">Multiple inheritance</a></li>
					<li><a href="java_multil.php">multilevel inheritance</a></li>
					<li><a href="java_hybrid.php">Hybrid inheritance</a></li>
                    

					</ul>
					<h2>Thread and Method Overloading</h2>
				<ul>
					<li><a href="java_thread.php">Thread</a></li>
					<li><a href="java_MethodO.php">Method Overloading</a></li>
				    
                    

					</ul>



	
			</div>
	</div>
<div id="right-section">
				<img src="javlabel.png" alt="c++ programming label"> 
				<div class="holder1"><h1><center><i><b><p>Do-While Loop</p></b></i></center></h1></div>	
				<div class="holder2">
				
					<ul>
					<b>For loop: </b>this is also loop	statement that provides a compact way to iterate over a ranges of values from a user point of view.
					<br>
					Syntax: for<initialization;condition;oncrement or decrement)
					<br>
					        {
								<br>
								<statement>;
								<br>
								...;
								<br>
								...;<br>
							}
					<br>
					</ul>
				</div>
				
			<div class="but">
		
				<a href="java_do.php" class="button next">prev &raquo;</a>
				<a href="java_con.php" class="button next">next &raquo;</a>
				</div>
</div>
	</div>

<div id="footer">
			<div class="holder10"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
			<br>
			<div class="holder11"><center>Copyright © 2019 programmingKeeda.com | All rights reserved.</center></div>
		</div>
</div>
</body>
</html>