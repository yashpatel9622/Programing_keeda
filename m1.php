<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiplomaLang Home Learning School</title>
	<link rel="icon" href="/dl.ico" type="image/x-icon">
</head>

<style>

*
{
	padding:0;
	margin:0;
}

#wrapper
{
	padding:10px;
	border:solid;
}

#header{height:100px;background-image: url("dlnm.png"); background-repeat: no-repeat;padding:10px;}

#logo
{
	width:150px;
	height:100px;
	background-image: url("dllogo.jpg");
}

#navbar
{
	height:50px;
	background-color:#758209;
	margin-top:10px;
	line-height:30px;
	display:block;
	text-shadow:0.1em 0.1em #333;
	box-shadow: 0 0 15px 0 rgb(0,0,0,10)
	list-style:none;
	width:100%;
}
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
.menu-col-3
{
	float: left;
}
.menu-col-1
{
	width:23.33%;
}
.menu-col-2
{
	width:23.33%;
}
.menu-col-3
{
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

.Reference-sub a:hover
{
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

.Examples-sub a:hover
{
	text-decoration:underline;
}
nav li:hover .Examples-sub
{
	display:block;
}

.Examples-sub a
{
	padding:0px;
	border-top:5px solid #4B0082;
}

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

.Test-sub a:hover
{
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

#container::after
{
	content:"";
	display:block;
	clear:both;
}

#left-panel
{
	width:23%;
	height:2000px;
	background-color:#eda150;
	float:left;
	padding:10px;
}

.sidebar ul
{
	list-style:none;
}
.sidebar ul li
{
	padding:10px;
	background-color:eda150;
	border-top:1px solid #FFF;

}

.sidebar ul li:hover > ul
{
	opacity:1;
	visibility:visible;
}

.sidebar ul li a
{
	color:black;
	font-size:20px;
	text-decoration:underline;
}
.sidebar li:hover
{
	background:#8A2BE2;
}

#right-section
{
	width:73%;
	height:2000px;
	background-color:#bcc92b;
	float:right;
	padding:10px;
}

.Structure
{
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px dotted green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
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
				<div id="topic_logo"> <img src="c++.png" alt="cppprogramming-Logo"> </div>
				<h1>C++ Programming</h1>
				<div class="sidebar">
					<ul>
					<li><a href="Refcpp.php">C++ library</a></li>
									<li><a href="description_1.php">Containers</a></li>
									<li><a href="description_2.php">Input/Output</a></li>
									<li><a href="description_3.php">multithreading</a></li>
									<li><a href="description_4.php">others</a></li>
	
						
					</ul>
				</div>
			</div>
			<div id="right-section">
				<br>
				<br>
				<br>
				<br>
				<br>
				

						
				






<center style=font-size:25px;><h1 style=color:green;><assert>(assert.h)</h1></center>
						<br>
						<hr>
						<br>
<h2 style=color:red;>type:</h2><center style=font-size:28px;><i> header</i></center>
				<br>
				<h2>Description</h2>
<br>				
<p style=font-size:25px>Get monetary value: 
<br>Extracts characters from the input stream it is applied to, and interprets them as a monetary <br>
expression, which is stored as the value of mon. Internally, the function accesses the input seque<br>
nce by first constructing an object of type basic istream: sentry (with noskipws set to false).<br> 
 Then (if evaluating the sentry object is true), it calls money get: get (using the streams sel)<br>
 ected locale to perform both the extraction and the parsing operations, and adjusts the streams <br>
 internal state flags accordingly. Finally, it destroys the sentry object before returning. This<br>
 manipulator is declared in header iomanip Return value Unspecified. This function should only be<br>
 used as a stream manipulator (see example). Errors are signaled by modifying the streams internal<br>
 state flags: flag error The input sequencehas not more characters available (end-of-file) failbit<br>
 Either no characters were extracted, or the characters could not be interpreted as a valid monetary<br>
 value. badbit Error on strea such as when this function catches an exception thrown by an internal<br>
 operation). When set, the integrity of the stream may have been affected. Multipleflags may be set<br>
 bya single operation. operation internal state the stream that was registered using its member  <br>
 exceptions, the function throws an exception of type ios base: failure.<br>


</p>
<br>
<h2>prototype</h2>
<br>
<b style=font-size:25px>    Prototype template <class moneyT> / * unspecified * / get money (money T & mon, bool intl false);   </b>
<br>
<h2>parameters</h2>
<br>
<p style=font-size:25px>
Parameters mon Object where the monetary value is stored. moneyT shall be either long double or a basic<br>
 string instantiation. intl true for international representations, false otherwise. This is used intern<br>
 ally to instantiate the proper moneypunct class. 
 </p>
 <br>
 <h2> return value</h2>
 <br>
 <p style=font-size:25px>
 <br>
 Return value Unspecified. This function should only be used as a stream manipulator (see<br>
 example). Errors are signaled by modifying the streams internal state flags: flag error <br>
 The input sequence has not more characters available (end-of-file) failbit Either no char<br>
 acters were extracted, or the characters could not be interpreted as a valid monetary value<br>
 . badbit Error on stream such as when this function catches an exception thrown by an inter<br>
 nal operation). When set, the integrity of the stre am may have been affected. Multiple flag<br>
 s may be set by a single operation. operation internal state the stream that was registered <br>
 using its member exceptions, the function throws an exception of type<br>
 ios base: failure.

 
 
 
 </P>

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