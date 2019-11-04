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

.cex
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
						<li><a href="JA2.php">Print Hello java</a></li>
						<li><a href="JA3.php">If example</a></li>
						<li><a href="JA4.php">For loop example</a></li>
						<li><a href="JA5.php">Switch example</a></li>
						<li><a href="A6.php">while example</a></li>
						<li><a href="A7.php">Do while example</a></li>
						<li><a href="A8.php">Break example</a></li>
						<li><a href="A9.php">continue example</a></li>
						<li><a href="A10.php">comment example</a></li>
						<li><a href="A11.php">fibonacci example</a></li>
						<li><a href="A12.php">prime example</a></li>
						<li><a href="A13.php">Palindrome example</a></li>
						<li><a href="A14.php">Factrial example</a></li>
						<li><a href="A15.php">Armstronf example</a></li>
						<li><a href="A16.php">Selection sort</a></li>
						<li><a href="A17.php">Bubble sort</a></li>
						<li><a href="A18.php">Insertion sort</a></li>
						<li><a href="A19.php">Linear search</a></li>
						<li><a href="Ab.php">Binary search</a></li>

						<li><a href="Ab.php">Binary search</a></li>
						<li><a href="A20.php">Odd Even in array example</a></li>
						<li><a href="A21.php">Largest num in arrayy example</a></li>
						<li><a href="A22.php">Smallest num in array example</a></li>
						<li><a href="A23.php">Remove duplicate num in array example</a></li>
						<li><a href="A24.php">Matrix Addition in example</a></li>
						<li><a href="A25.php">Single inheritance</a></li>
						<li><a href="A26.php">multilevel inheritance</a></li>
						<li><a href="A27.php">Heriachical inheritance</a></li>
						<li><a href="A28.php">Overloading example</a></li>
						<li><a href="A29.php">Overriding example</a></li>
						<li><a href="A30.php">Use if Super keyword</a></li>
						<li><a href="A31.php">Use of final keyword</a></li>
						<li><a href="A32.php">Polymorphism example</a></li>
						<li><a href="A33.php">Abstraction class example</a></li>
						<li><a href="A34.php">implementing interface</li>
						<li><a href="A35.php">Package</a></li>
						<li><a href="A36.php">String example</a></li>
						<li><a href="A37.php">use of try catch example</a></li>
						<li><a href="A38.php"> Final block in exception</a></li>
						<li><a href="A39.php">use of throw keyword</a></li>
						<li><a href="A40.php">Inner class</a></li>
						<li><a href="A41.php">Anonymous Inner class</a></li>
						<li><a href="A42.php">Extend Thread class example</a></li>
						<li><a href="A43.php">Implement runnable interface in thread class</a></li>
						<li><a href="A44.php">joining a Thread</a></li>
						<li><a href="A45.php">Garbage collaction in java</a></li>
						<li><a href="A46.php">Multiple thread </a></li>
						<li><a href="A47.php">Vector example</a></li>
						<li><a href="A48.php">Table example</a></li>
						
					</ul>
				</div>
			</div>
			<div id="right-section">
				<br>
				<br>
				<br>
				<br>
				<br>
				<h1>Hello World</h1>
				<div class="cex">
					<pre>
						<code class="ccode" >
v<!DOCTYPE html>
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
	height:2500px;
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
	height:2500px;
	background-color:#bcc92b;
	float:right;
	padding:10px;
}

.cex
{

font-size:18px;
background:#F4EFEE;
}

.example
{
	color:red;
	text-decoration:underline;
}

.next
{
	padding:0px 500px;
	width:150px;
	border-radius:3px;
	color:red;
	font-size:25px;
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
						<li><a href="A2.php">Print Hello java</a></li>
						<li><a href="A3.php">If example</a></li>
						<li><a href="A4.php">For loop example</a></li>
						<li><a href="A5.php">Switch example</a></li>
						<li><a href="A6.php">while example</a></li>
						<li><a href="A7.php">Do while example</a></li>
						<li><a href="A8.php">Break example</a></li>
						<li><a href="A9.php">continue example</a></li>
						<li><a href="A10.php">comment example</a></li>
						<li><a href="A11.php">fibonacci example</a></li>
						<li><a href="A12.php">prime example</a></li>
						<li><a href="A13.php">Palindrome example</a></li>
						<li><a href="A14.php">Factrial example</a></li>
						<li><a href="A15.php">Armstronf example</a></li>
						<li><a href="A16.php">Selection sort</a></li>
						<li><a href="A17.php">Bubble sort</a></li>
						<li><a href="A18.php">Insertion sort</a></li>
						<li><a href="A19.php">Linear search</a></li>
						<li><a href="Ab.php">Binary search</a></li>

						<li><a href="Ab.php">Binary search</a></li>
						<li><a href="A20.php">Odd Even in array example</a></li>
						<li><a href="A21.php">Largest num in arrayy example</a></li>
						<li><a href="A22.php">Smallest num in array example</a></li>
						<li><a href="A23.php">Remove duplicate num in array example</a></li>
						<li><a href="A24.php">Matrix Addition in example</a></li>
						<li><a href="A25.php">Single inheritance</a></li>
						<li><a href="A26.php">multilevel inheritance</a></li>
						<li><a href="A27.php">Heriachical inheritance</a></li>
						<li><a href="A28.php">Overloading example</a></li>
						<li><a href="A29.php">Overriding example</a></li>
						<li><a href="A30.php">Use if Super keyword</a></li>
						<li><a href="A31.php">Use of final keyword</a></li>
						<li><a href="A32.php">Polymorphism example</a></li>
						<li><a href="A33.php">Abstraction class example</a></li>
						<li><a href="A34.php">implementing interface</li>
						<li><a href="A35.php">Package</a></li>
						<li><a href="A36.php">String example</a></li>
						<li><a href="A37.php">use of try catch example</a></li>
						<li><a href="A38.php"> Final block in exception</a></li>
						<li><a href="A39.php">use of throw keyword</a></li>
						<li><a href="A40.php">Inner class</a></li>
						<li><a href="A41.php">Anonymous Inner class</a></li>
						<li><a href="A42.php">Extend Thread class example</a></li>
						<li><a href="A43.php">Implement runnable interface in thread class</a></li>
						<li><a href="A44.php">joining a Thread</a></li>
						<li><a href="A45.php">Garbage collaction in java</a></li>
						<li><a href="A46.php">Multiple thread </a></li>
						<li><a href="A47.php">Vector example</a></li>
						<li><a href="A48.php">Table example</a></li>
						<li><a href="A49.php">AWT Button example</a></li>
						<li><a href="A50.php">AWT Label example</a></li>
						<li><a href="A51.php">AWT TextField example</a></li>
						<li><a href="A52.php">AWT  TextArea example</a></li>
						<li><a href="A53.php">AWT Checkbox example</a></li>
						<li><a href="A54.php">AWT Checkboxgroup example</a></li>
						<li><a href="A55.php">AWT Choice example</a></li>
						<li><a href="A56.php">AWT Canvas example</a></li>
						<li><a href="A57.php">AWT  Scrollbar example</a></li>
						<li><a href="A58.php">AWT  Menu example</a></li>
						<li><a href="A59.php">AWT Panel example</a></li>
						<li><a href="A60.php">AWT Dialog example</a></li>
						<li><a href="A61.php">Action Listener example</a></li>
						<li><a href="A62.php">Mouse Listener example</a></li>
						<li><a href="A63.php">Mouse Motion  Listener example</a></li>
						<li><a href="A64.php">Item Listener example</a></li>
						<li><a href="A65.php">Key Listener example</a></li>
						<li><a href="A66.php">Window Listener example</a></li>
						<li><a href="A67.php"> Adapter class example</a></li>
						
						<li><a href="A68.php">Mouse  Adapter example</a></li>
						<li><a href="A69.php">Mouse Adapter example</a></li>
						<li><a href="A70.php">Key Adapter example</a></li>
						<li><a href="A71.php">Swing Button example </a></li>
						<li><a href="A72.php">Swing Button example for changing button Icon</a></li>
						<li><a href="A73.php">Swing Label example</a></li>
						<li><a href="A74.php">Swing TextField example</a></li>
						<li><a href="A75.php">Swing TextArea example</a></li>
						<li><a href="A76.php">Swing PassWordField example</a></li>
						<li><a href="A77.php">Swing checkBox example</a></li>
						<li><a href="A78.php">SWing RadioButton example</a></li>
						<li><a href="A79.php">Swing ComboBox example</a></li>
						<li><a href="A80.php">SWing Table example</a></li>
						<li><a href="A81.php">Swing List example</a></li>
						
						<li><a href="A82.php">Swing OptionPane example</a></li>
						<li><a href="A83.php">Swing Scrollbar example</a></li>
						<li><a href="A84.php">Swing Menu example</a></li>
						<li><a href="A85.php">Swing Popupmenu example</a></li>
						<li><a href="A86.php">Swing CheckBoxMenuuItem example </a></li>
						<li><a href="A87.php">Swing Jframe</a></li>
						<li><a href="A88.php">Swing Progress example</a></li>
						<li><a href="A89.php">Swing Tree example</a></li>
						<li><a href="A90.php">Swing TabbedPane example</a></li>
						<li><a href="A91.php">Swing Slider example</a></li>
						<li><a href="A92.php">Swing Spinner example</a></li>
						<li><a href="A93.php">SWing Dialog example</a></li>
						<li><a href="A94.php">Swing Panel example</a></li>
						<li><a href="A95.php">SWing JToggleButton example</a></li>
						<li><a href="A96.php">Swing JToolBar example</a></li>
						<li><a href="A97.php">SWing Jframe example</a></li>
						<li><a href="A98.php">Swing Scrolllpane example</a></li>
						
						<li><a href="A99.php">Border Layout example</a></li>
						<li><a href="A100.php">Grid Layout example</a></li>
						<li><a href="A101.php">Flow Layout example</a></li>
						<li><a href="A102.php">Card Layout example</a></li>
						<li><a href="A103.php">GridBag Layout example</a></li>
						<li><a href="A104.php">URL class example</a></li>
						
										</ul>
				</div>
			</div>
			<div id="right-section">
				<br>
				<br>
				<br>
				<br>
				<br>
				<h1>Bubble Sort example</h1>
				<div class="cex">
					<pre>
						<code class="ccode" >
public class BubbleSortExample {  
    static void bubbleSort(int[] arr) {  
        int n = arr.length;  
        int temp = 0;  
         for(int i=0; i < n; i++){  
                 for(int j=1; j < (n-i); j++){  
                          if(arr[j-1] > arr[j]){  
                                 //swap elements  
                                 temp = arr[j-1];  
                                 arr[j-1] = arr[j];  
                                 arr[j] = temp;  
                         }  
                          
                 }  
         }  
  
    }  
    public static void main(String[] args) {  
                int arr[] ={3,60,35,2,45,320,5};  
                 
                System.out.println("Array Before Bubble Sort");  
                for(int i=0; i < arr.length; i++){  
                        System.out.print(arr[i] + " ");  
                }  
                System.out.println();  
                  
                bubbleSort(arr);//sorting array elements using bubble sort  
                 
                System.out.println("Array After Bubble Sort");  
                for(int i=0; i < arr.length; i++){  
                        System.out.print(arr[i] + " ");  
                }  
   
        }  
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
				<img src="i17.png" alt="c programming label"> 
				<div class="next"><a href="A18.php"><button>next &rarr;</button></a>
				</div>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>

 

  						
						</code>
					</pre>
				</div>
				<br>
				<br>
				<br>
				<div class="example"><h1>Program Output:</h1></div>
				<br>
				<br>
				<img src="hello.png" alt="c programming label"> 
				<div class="but">
				<a href="A16.php" class="button prev">&laquo;prev</a>
				<a href="A18.php" class="button next">next &raquo;</a>
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

 

