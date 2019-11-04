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

header
{
	height:100px;
	background-image: url("dl1..png"); 
	background-repeat: no-repeat;
	padding:10px;
}

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
	height:4000px;
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
	height:4000px;
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




</style>
<body>
	<div id="wrapper">
		<div id="header"></div>
		<div id="logo"></div>
		<nav>
			<div id="navbar">
				<ul class="menu-main">
					<li><a>Tutorial</a>
						<div class="tutorial-sub">
							<div class="menu-col-1">
								<h3 class="tutorial-category">C</h3>																	
								<ul>
									<li><a href="">CLearn</a></li>
									<li><a href="">C Reference</a></li>
									<li><a href="">C Examples</a></li>
								</ul>
							</div>
							<div class="menu-col-2">
								<h3 class="tutorial-category">C++</h3>
								<ul>
									<li><a href="">C++ Learn</a></li>
									<li><a href="">C++ Reference</a></li>
									<li><a href="">C++ Examples</a></li>
								</ul>
							</div>
							<div class="menu-col-3">
								<h3 class="tutorial-category">Java</h3>
								<ul>
									<li><a href="">Java Learn</a></li>
									<li><a href="">Java Reference</a></li>
									<li><a href="">Java Examples</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="">References</a>
						<div class="Reference-sub">
							<ul>
								<li><a href="">C Reference </a></li>
								<li><a href="">C++ Reference </a></li>
								<li><a href="">Java Reference </a></li>
							</ul>
						</div>
					</li>
					<li><a href="">Examples</a>
						<div class="Examples-sub">
							<ul>
								<li><a href="">C Examples </a></li>
								<li><a href="">C++ Examples </a></li>
								<li><a href="">Java Examples </a></li>
							</ul>
						</div>
					</li>
					<li><a href="">Test</a>
						<div class="Test-sub">
							<ul>
								<li><a href="">C Test </a></li>
								<li><a href="">C++ Test </a></li>
								<li><a href="">Java Test </a></li>
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
					<li><a href="description.php">C library</a></li>
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
				<div class="Structure">
					<pre>
						<code class="ccode">
						<h1>csingal(singal.h)</h1>
				<h4>type</h4>
				<i>Header</i>
				<h4>Description</h4>
				<p>
				 C library to handle signals: Some running environments use signals </br>to inform running processes of certain events. </br>These events may be related to errors made by the program code, </br>like a wrong arithmetical operation or to exceptional situations, such as a request to interrupt </br>the program. Signals generally represented situations where the program has been requested</br> to terminate or an unrecoverable error has happened,</br> therefore handling to signal allows for either perform pre-termination </br>cleanup operations or try to recover from the error in some way.</br> Not all running environments are required to generate automatic signals in the cases for which </br>they are designed in the standard C library, and some other environments not only generate</br> these but also many more specific signals. </br>But in any way, all of it is generated explicitly with a call to
				 </br>function raise are deliverd to its corresponding signal handler.
				 
				  <h2>This include following function</h2>
				  
				 
				  
				
				<table border="1" width="50%" height="300">
			
				<caption><h1>ctype</h1></caption>
				<tr>
					<th>Option</th>
					</tr>
				
				<tr>
				<td><a href="raise.php"> raise</a></td>
				</tr>
				<tr>
				<td><a href="signal.php"> signal</a></td>
				</tr>
				<tr>
				<td><a href="sig.php"> sig</a></td>
				</tr>
				
				</table>


						

						
				



























	 
					</code>
					</pre>
				</div>
			</div>
		</div>
		<div id="footer"></div>
	</div>
	 
	 
	 
</body>
</html>