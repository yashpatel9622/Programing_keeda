<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ProgramminkKeeda Home Learning School</title>
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
list-style: none;

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
#left-panel{width:23%;height:2020px;background-color:#eda150;float:left;padding:10px;}
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

		
#right-section{width:73%;height:2020px;background-color:#bcc92b;float:right;padding:10px;}
.holder1{
color:brown;
font-size:40px;
}
.holder2{
	font-size:24px;
	padding:10px;
}



#footer{height:100px;background-color:#79d17b;margin-top:10px;}
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
			<li><a href="learnc_intro.php">C Learn</a></li>
			<li><a href="">C Programs</a></li>
			<li><a href="">C Video's</a></li>
			<li><a href="">C Quiz</a></li>
		</ul>
	</div>
	<div id="topic_logo"> <img src="c++.png" alt="c++programming-Logo"> </div>		
	<h1>C++ Programming</h1>
	<div class="sidebar">
		<ul>
			<li><a href="">C++ Learn</a></li>
			<li><a href="">C++ Programs</a></li>
			<li><a href="">C++ Video's</a></li>
			<li><a href="">C++ Quiz</a></li>
		</ul>
	</div>
	<div id="topic_logo"> <img src="java.png" alt="java programming-Logo"> </div>
	<h1>Java Programming</h1>
	<div class="sidebar">	
		<ul>
			<li><a href="">Java Learn</a></li>
			<li><a href="">Java Programs</a></li>
			<li><a href="">Java Video's</a></li>
			<li><a href="">Java Quiz</a></li>
		</ul>
	</div>
</div>
<div id="right-section">
	<div class="holder1"><center>Privacy & Policy</center></div>
	<br>
	<br>
	<p style=font-size:24px>Keeping you informed of our information gathering practices and our policy for how we use that information is important to us at ProgrammingKeeda.com. Below, you can find the ways in which we gather data and the ways that we use that data.</p>
	<br>
	<p style=font-size:24px>Your privacy is very important to us. Accordingly, we have developed our Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>
<div class="holder2">
	<ul>
<li>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
<li>We will collect and use personal information solely with the objective of fulfilling those purposes specified by us.</li>
<li>We will only retain personal information as long as necessary for the fulfillment of those purposes.</li>
<li>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li>
<li>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li>
<li>We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
<li>We will make readily available to customers information about our policies and practices relating to the management of personal information.</li>
</ul>
</div>
		<h1 style=color:green>Third Party Disclosure</h1>
<br>
<p style=font-size:24px>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety. 
<br>
However, non-personally identifiable visitor information may be provided to other parties for marketing,advertising, or other uses.</p>
<br>
	<h1 style=color:green>Third party links</h1>
<br>
<p style=font-size:24px>We do not include or offer third party products or services on our website.</p>
	<br>
	<h1 style=color:green>COPPA (Children Online Privacy Protection Act)</h1>
<p style=font-size:24px><br>
When it comes to the collection of personal information from children under 13, the Children's Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, the nation's consumer protection agency,enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy and 
safety online.
<br>
We do not specifically market to children under 13.</p>
</div>
</div>
<div id="footer">
	<div class="holder4"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
	<br>
	<div class="holder5"><center>Copyright © 2019 ProgramminkKeeda.com | All rights reserved.</center></div>
</div>
</div>
</div>
</body>
</html>