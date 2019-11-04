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
						<li><a href="math.php">math.h</a></li>
						<li><a href="setjmp.php">setjmp.h</a></li>
						<li><a href="stdarg.php">stdarg.h</a></li>
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
			<table border="1" width="70%" height="50">
				<caption><h1>I/O Functions</h1></caption>
				<tr>
					<th>Option</th>
					<th>Description</th>
				</tr>
				<tr>
					<td><a href="fclose.php">fclose</a></td>
					<td>close a file</td>
				</tr>
				<tr>
					<td><a href="feof.php">feof</a></td>
					<td>tests the end-of-file indicator for the given file</td>
				</tr>
				<tr>
					<td><a href="ferror.php">ferror</a></td>
					<td>checks for a file error</td>
				</tr>
				<tr>
					<td><a href="fflush.php">fflush</a></td>
					<td>flushes the contents of the output buffer</td>
				</tr>
				<tr>
					<td><a href="fgetc.php">fgetc</a></td>
					<td>gets the next character from a stream</td>
				</tr>
				<tr>
					<td><a href="fgetpos.php">fgetpos</a></td>
					<td>get the file position indicator</td>
				</tr>
				<tr>
					<td><a href="fgets.php">fgets</a></td>
					<td>get a line from a stream</td>
				</tr>
				<tr>
					<td><a href="fopen.php">fopen</a></td>
					<td>opem a file</td>
				</tr>
				<tr>
					<td><a href="fprintf.php">fprintf</a></td>
					<td>print formatted output to a file</td>
				</tr>
				<tr>
					<td><a href="fputc.php">fputc</a></td>
					<td>write a character to a file</td>
				</tr>
				<tr>
					<td><a href="fputs.php">fputs</a></td>
					<td>write a string to a file</td>
				</tr>
				<tr>
					<td><a href="fread.php">fread</a></td>
					<td>reads data from a file</td>
				</tr>
				<tr>
					<td><a href="freopen.php">freopen</a></td>
					<td>associates a new file with the given stream</td>
				</tr>
				<tr>
					<td><a href="fscanf.php">fscanf</a></td>
					<td>read formatted input from a file</td>
				</tr>
				<tr>
					<td><a href="fseek.php">fseek</a></td>
					<td>move to a specific location in a file</td>
				</tr>
				<tr>
					<td><a href="fsetpos.php">fsetpos</a></td>
					<td>move to a specific location in a file</td>
				</tr>
				<tr>
					<td><a href="ftell.php">ftell</a></td>
					<td>returns the current file position indicator</td>
				</tr>
				<tr>
					<td><a href="fwrite.php">fwrite</a></td>
					<td>write data to a file</td>
				</tr>
				<tr>
					<td><a href="getc.php">getc</a></td>
					<td>read a character from a file</td>
				</tr>
				<tr>
					<td><a href="getchar.php">getchar</a></td>
					<td>read a character</td>
				</tr>
			</table>
				
				
				
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>

