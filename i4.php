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
				

<center style=font-size:25px;><h1 style=color:green;> std::basic_ofstream</h1></center>
			<br>
			<hr>
			<br>

<h2 style=color:red;>type:</h2><center style=font-size:28px;><i> public member function</i></center>
						<br>


<br>
		<h2>Description</h2>
<br>

<p style=font-size:25px;>

File stream: ios basic basic ios basic ofstream- sic ofstream basic iostream basic fstream<br>
 Input / output stream class to operate on files. Objects of this class maintain<br>
 a basic filebuf object as their internal stream buffer, which performs input / output <br>
 operations on the file they are associated with). File streams are associated with files<br>
 either on construction, or bycalling member open. Apart from the internal file stream buffer,<br>
 objects of these classes keep a set of internal fields inherited from the base, basic ios<br>
 and basic istream: field member functions description Formatting flags flags setf unset<br>
 A set of internal flags that affect how certain input / output operations are interpreted<br>
 generated member fmtflags. field width Width of the next formatted element to insert. <br>
 display precision prenicion Danimal pranicion for the ref. Inp .. <fs basic fstr. imbue <br>
 The locale object used by the function for formatted input / output operations affected<br>
 by localization properties. fill character to pad a formatted field up to the field <br>
 width (width). State error state rdstate setstate clear The current error state of the<br>
 stream. Individual values ​​may be obtained by calling good, eof, fail and bad. See member <br>
 type iostate. exception mask exceptions The state flags for which a failure exception is <br>
 thrown. See member type iostate. Other callback stack register callback Stack of pointers<br>
 to functions that are called when certain events occur. extensible arrays iword pword xalloc<br>
 Internal arrays to store objects of type long and void *. tied stream tie Pointer to output<br>
 stream that is flushed before each operation on this stream. stream buffer rdbuf Pointer to<br>
 the associated basic streambut object, which is charge of all input / output operations. <br>
 character count gcount Count of characters read by last unformatted input operation <br>
 Prototype template class charT, class traits J


</p>
<br>
<h2>prototype</h2>
<br>
<b style=font-size:25px;> Prototype template class charT, class traits char traits <charT> class basic ofstream;       </b>
<br>
<h2>parameters</h2>
<br>
<p style=font-size:25px;>
Parameters Template parameters charT Character type. This shall be a non-array POD type.<br> Aliased as member type basic ofstream: char type. traits Character traits class that defines <br>essential properties of the characters used by stream object (see char traits). traits: c<br>har type shall be the same as char T. Aliased as member type basic ofstream: traits type

 </p>
 <br>
<center><table border="1" width="50%" height="300">
			
				<caption><h1>Members of this</h1></caption>
				<tr>
					<th>Option</th>
					</tr>
<tr> 
     <td> std::basic_ofstream::basic_fstream </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::~basic_fstream </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::basic_close </t>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::is open </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::operator= </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::swap </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::overflow </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::seekoff</td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::uflow </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::underflow</td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::bseekops </td>
	 </tr>
	 <tr>
	 <td> std::basic_ofstream::sync </td>
	 </tr>
	 </table></center>
	 
	
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