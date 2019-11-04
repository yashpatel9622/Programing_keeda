<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello World</title>
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

#container
{
	margin-top:10px;
}
#container::after{content:"";display:block;clear:both;}
#left-panel{width:23%;height:4000px;background-color:#eda150;float:left;padding:10px;}
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
	height:4000px;
	background-color:#bcc92b;
	float:right;
	padding:10px;
}

#footer
{
	height:100px;
	background-color:#79d17b;
	margin-top:10px;
	align:center;
}

table
{
	border-collapse:collapse;
	background-color:floralwhite;
}

td
{
	text-align:center;
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
				<h1>BY HEADER</h1>
				<div class="sidebar">
					<ul>
						<li><a href="Ref.php">ctype.h</a></li>
						<li><a href="errno.php">errno.h</a></li>
						<li><a href="float.php">float.h</a></li>
						<li><a href="limits.php">limits.h</a></li>
						<li><a href="locale.php">locale.h</a></li>
						<li><a href="math.php">math.h</a></li>
						<li><a href="setjmp.php">setjmp.h</a></li>
						<li><a href="signal.php">signal.h</a></li>
						<li><a href="stdarg.php">stdarg.h</a></li>
						<li><a href="stddef.php">stddef.h</a></li>
						<li><a href="stdio.php">stdio.h</a></li>
						<li><a href="stdlib.php">stdlib.h</a></li>
						<li><a href="string.php">string.h</a></li>
						<li><a href="time.php">time.h</a></li>
					</ul>
				</div>
				<br>
				<br>
				<h1>BY FUNCTIONALITY</h1>
				<div class="sidebar">
					<ul>
						<li><a href="io.php">I/O</a></li>
						<li><a href="strnchar.php">String and character</a></li>
						<li><a href="mat.php">Math</a></li>
						<li><a href="dnt.php">Date and time</a></li>
						<li><a href="mm.php">Memory management</a></li>
						<li><a href="system.php">System</a></li>
						<li><a href="other.php">Other</a></li>
					</ul>
				</div>
			</div>
			<center>
			<div id="right-section">
			<br>
			<br>
			<br>
			<table border="1" width="70%" height="900">
				<caption><h1>float</h1></caption>
				<tr>
					<th>Option</th>
					<th>Description</th>
				</tr>
				<tr>
					<td><a href="DBL_DIG.php">DBL_DIG</a></td>
					<td>maximum number of decimal digits</td>
				</tr>
				<tr>
					<td><a href="DBL_EPSILON.php">DBL_EPSILON</a></td>
					<td>least significant representable digit</td>
				</tr>
				<tr>
					<td><a href="DBL_MANT_DIG.php">DBL_MANT_DIG</a></td>
					<td>number of digits in mantissa</td>
				</tr>
				<tr>
					<td><a href="DBL_MAX.php">DBL_MAX</a></td>
					<td>maximum representable number</td>
				</tr>
				<tr>
					<td><a href="DBL_MAX_10_EXP.php">DBL_MAX_10_EXP</a></td>
					<td>maximum value for exponent in base FLT_RADIX</td>
				</tr>
				<tr>
					<td><a href="DBL_MAX_EXP.php">DBL_MAX_EXP</a></td>
					<td>maximum value for exponent in base-10</td>
				</tr>
				<tr>
					<td><a href="DBL_MIN.php">DBL_MIN</a></td>
					<td>minimum representable number</td>
				</tr>
				<tr>
					<td><a href="DBL_MIN_10_EXP.php">DBL_MIN_10_EXP</a></td>
					<td>minimum value for exponent in base-10</td>
				</tr>
				<tr>
					<td><a href="DBL_MIN_EXP.php">DBL_MIN_EXP</a></td>
					<td>minimum value for exponent in base FLT_RADIX</td>
				</tr>
				<tr>
					<td><a href="FLT_DIG.php">FLT_DIG</a></td>
					<td>maximum number of decimal digits</td>
				</tr>
				<tr>
					<td><a href="FLT_EPSILON.php">FLT_EPSILON</a></td>
					<td>least significant representable digit</td>
				</tr>
				<tr>
					<td><a href="FLT_MANT_DIG.php">FLT_MANT_DIG</a></td>
					<td>number of digit in mantissa</td>
				</tr>
				<tr>
					<td><a href="FLT_MAX.php">FLT_MAX</a></td>
					<td>maximum representable number</td>
				</tr>
				<tr>
					<td><a href="FLT_MAX_10_EXP.php">FLT_MAX_10_EXP</a></td>
					<td>maximum value for exponent in base FLT_RADIX</td>
				</tr>
				<tr>
					<td><a href="FLT_MAX_EXP.php">FLT_MAX_EXP</a></td>
					<td>maximum value for exponent in base-10</td>
				</tr>
				<tr>
					<td><a href="FLT_MIN.php">FLT_MIN</a></td>
					<td>minimum representable number</td>
				</tr>
				<tr>
					<td><a href="FLT_MIN_10_EXP.php">FLT_MIN_10_EXP</a></td>
					<td>minimum value for exponent in base-10</td>
				</tr>
				<tr>
					<td><a href="FLT_MIN_EXP.php">FLT_MIN_EXP</a></td>
					<td>minimum value for exponent in base FLT_RADIX</td>
				</tr>
				<tr>
					<td><a href="FLT_RADIX.php">FLT_RADIX</a></td>
					<td>the base radix</td>
				</tr>
				<tr>
					<td><a href="LDBL_DIG.php">LDBL_DIG</a></td>
					<td>maximum number of decimal digits</td>
				</tr>
				<tr>
					<td><a href="LDBL_EPSILON.php">LDBL_EPSILON</a></td>
					<td>least significant representable digit</td>
				</tr>
				<tr>
					<td><a href="LDBL_MANT_DIG.php">LDBL_MANT_DIG</a></td>
					<td>number of digit in mantissa</td>
				</tr>
				<tr>
					<td><a href="LDBL_MAX.php">LDBL_MAX</a></td>
					<td>maximum representable number</td>
				</tr>
				<tr>
					<td><a href="LDBL_MAX_10_EXP.php">LDBL_MAX_10_EXP</a></td>
					<td>maximum value for exponent in base FLT_RADIX</td>
				</tr>
				<tr>
					<td><a href="LDBL_MAX_EXP.php">LDBL_MAX_EXP</a></td>
					<td>maximum value for exponent in base-10</td>
				</tr>
				<tr>
					<td><a href="LDBL_MIN.php">LDBL_MIN</a></td>
					<td>minimum representable number</td>
				</tr>
				<tr>
					<td><a href="LDBL_MIN_10_EXP.php">LDBL_MIN_10_EXP</a></td>
					<td>minimum value for exponent in base-10</td>
				</tr>
				<tr>
					<td><a href="LDBL_MIN_EXP.php">LDBL_MIN_EXP</a></td>
					<td>minimum value for exponent in base FLT_RADIX</td>
				</tr>
			</table>
				
				
				
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>

