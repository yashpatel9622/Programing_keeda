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
#left-panel{width:23%;height:3120px;background-color:#eda150;float:left;padding:10px;}
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

		
#right-section{width:73%;height:3120px;background-color:#bcc92b;float:right;padding:10px;}
#right-section p
{
font-size:20px;
border-top:1px solid #333;
border-bottom:1px solid #333;
border-left:7px solid #333;
border-right:1px solid #333;
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
.explainhello
{
font-size:16px;
border-bottom:1px solid #333;

}

.cex1
{
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px dotted green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
}
.example1
{
color:red;
text-decoration:underline;
}
.explaincplus
{
font-size:16px;
border-bottom:1px solid #333;

}

.javaex
{
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:7px dotted green;
border-right:1px dotted #333;
font-size:18px;
background:#F4EFEE;
}

.example2
{
color:red;
text-decoration:underline;
}

.javaout
{
border-top:1px dotted #333;
border-bottom:1px dotted #333;
border-left:1px dotted #333;
border-right:1px dotted #333;
font-size:18px;
height:30px;
background:#F4EFEE;
}
.explainjava{

font-size:16px;
border-bottom:1px solid #333;
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
					<li><a href="ma1.php">C Programs</a></li>
					<li><a href="c_videos.php">C Video's</a></li>
					<li><a href="ctest.php">C Quiz</a></li>
				</ul>
			</div>
			<div id="topic_logo"> <img src="c++.png" alt="c++programming-Logo"> </div>		
			<h1>C++ Programming</h1>
			<div class="sidebar">
				<ul>
					<li><a href="learncpp_intro">C++ Learn</a></li>
					<li><a href="hello world.php">C++ Programs</a></li>
					<li><a href="cpp_videos.php">C++ Video's</a></li>
					<li><a href="cpptest.php">C++ Quiz</a></li>
				</ul>
			</div>
			<div id="topic_logo"> <img src="java.png" alt="java programming-Logo"> </div>
			<h1>Java Programming</h1>
			<div class="sidebar">	
				<ul>
					<li><a href="learnjava.php">Java Learn</a></li>
					<li><a href="javaex.php">Java Programs</a></li>
					<li><a href="java_videos.php">Java Video's</a></li>
					<li><a href="javatest.php">Java Quiz</a></li>
				</ul>
			</div>
		</div>
		<div id="right-section">
			<img src="clabel.png" alt="c programming label"> 
			<p>C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.
				<br>
				<br>
				If you are new to programming, C is a good choice to start your programming journey.
				<br>
				<br>
				This is a comprehensive guide on how to get started in C programming language, why you should learn it and how you can learn it.
				Before getting started with C programming, lets get familiarized with the language first.
				<br>
				<br>
				C is a general-purpose programming language used for wide range of applications from Operating systems like Windows and iOS to software that is 			used for creating 3D movies.
				<br>
				<br>
				C programming is highly efficient. That is the main reason why it is very popular despite being more than 40 years old.
				<br>
				<br>
				Standard C programs are portable. The source code written in one system works in another operating system without any change.
				<br>
				<br>
				As mentioned, it is a good language to start learning programming. If you know C programming, you will not just understand how your program 				works, but will also be able to create a mental picture on how a computer works.
			</p>			
			<h2>C Example</h2>
			<div class="cex">
				<pre>
					<code class="ccode" >
     /* Writes the words "Hello World" on the screen */
  
     #include&lt;stdio.h&gt;

     int main()
     {
         /* first C program */
         printf("Hello, World!\n");
         getch(); //Use to get one character input from user, and it will 
		    not be printed on screen.
         return 0;
     }
					</code>
				</pre>
			</div>
			<div class="example"><h2>Program Output:</h2></div>
			<br>
			<br>
			<img src="hello.png" alt="c programming label"> 
			<div class="explainhello">
				<br>
				The above example has been used to print <em>Hello, World!</em> text on the screen. 
			</div>
			<br>
			<br>
			<img src="c++label.png" alt="c++ programming label"> 
			<p>
				C++ is a middle-level programming language developed by Bjarne Stroustrup starting in 1979 at Bell Labs. C++ runs on a 							variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This tutorial adopts a simpleand practical 						approach to describe the concepts of C++.
				<br>
				<br>
				This tutorial has been prepared for the beginners to help them understand the basic to advanced concepts related to C++.
				<br>
				<br>
				Before you start practicing with various types of examples given in this tutorial,we are making an assumption that you are 						already aware of the basics of computer program and computer programming language.
				<br>
				<br>
				For most of the examples given in this tutorial you will find Try it option, so just make use of this option to execute 						your C++ programs at the spot and enjoy your learning.
			</p>
			<h2>C++ Example</h2>
			<div class="cex1">
				<pre>
					<code class="c++code" >
     /* Writes the text on the screen */
  
     #include &lt;iostream&gt; 

     int main()
     {
      std::cout&lt;&lt;"This is my first C++ Program.";
      std::cout&lt;&lt;std::endl&lt;&lt;"and its very easy to learn";
     }				
					</code>
				</pre>
			</div>
			<div class="example1"><h2>Program Output:</h2></div>
			<img src="c++home.jpg" alt="c++ programming label"> 
			<div class="explaincplus">
				<br>
				The above example has been used to print text on the screen. 
			</div>
			<br>
			<br>
			<img src="javlabel.png" alt="java programming label"> 
			<p>
				Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as 		Windows, Mac OS, and the various versions of UNIX. This tutorial gives a complete understanding of Java. This reference will take you 					through simple and practical approaches while learning Java Programming language.
				<br>
				<br>
				This tutorial has been prepared for the beginners to help them understand the basic to advanced concepts related to Java Programming language.
				<br>
				<br>
				Before you start practicing various types of examples given in this reference, we assume that you are already aware about computer programs and 			computer programming languages.
			</p>
			<h2>Java Example</h2>
			<div class="javaex">
				<pre>
					<code class="javacode" >
     /* Writes the words "Hello Java" on the screen */

     public class Hello
     {   
    	public static void main(String[] args)
        {
        	System.out.println("Hello Java");  
        }
     }
					</code>
				</pre>
			</div>
			<div class="example2"><h2>Program Output:</h2></div>
			<pre class="javaout">Hello Java</pre>
			<div class="explainjava">
				<br>
				The above example has been used to print <em>Hello Java</em> text on the screen. 
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