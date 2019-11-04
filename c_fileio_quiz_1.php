
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
#logo{width:150px;height:100px;background-image: url("dllogo2.jpg");}#navbar{height:50px;background-color:#758209;margin-top:10px;line-height:30px;
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
#left-panel{width:23%;height:3000px;background-color:#eda150;float:left;padding:10px;}
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
	height:3000px;
	background-color:#bcc92b;
	float:right;
	padding:10px;
	overflow:auto;
}
.questionForm ul
{
	list-style:none;
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

.but1{ padding: 15px 332px;}
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
@media only screen and (max-width:900px)
{
	.right-section
	{
		width:90%;
	}
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
				<div id="topic_logo"> <img src="c1.png" alt="cprogramming-Logo"> </div>
				<h1>C Introduction</h1>
				<div class="sidebar">
					<ul>
						<li><a href="c_intro_quiz_1.php">C Introduction 1</a></li>
						<li><a href="c_intro_quiz_2.php">C Introduction 2</a></li>
						<li><a href="c_intro_quiz_3.php">C Introduction 3</a></li>
						<li><a href="c_intro_quiz_4.php">C Introduction 4</a></li>
					</ul>
										
					<h1>C Control</h1>
					<ul>
						<li><a href="c_control_quiz_1.php">C Control 1</a></li>
						<li><a href="c_control_quiz_2.php">C Control 2</a></li>
					</ul>
					
					<h1>C Function</h1>
					<ul>
						<li><a href="c_function_quiz_1.php">C Function </a></li>
					</ul>	
					
					
					<h1>C Array,String and Pointers</h1>
					<ul>
						<li><a href="c_array_quiz_1.php">C Array</a></li>
						<li><a href="c_string_quiz_1.php">C String</a></li>
						<li><a href="c_pointer_quiz_1.php">C Pointers</a></li>
					</ul>
					
					<h1>C Structure and Union</h1>
					<ul>
						<li><a href="c_structure_quiz_1.php">C Structure</a></li>
						<li><a href="c_union_quiz_1.php">C Union</a></li>
					</ul>
					
					<h1>C File I\O</h1>
					<ul>
						<li><a href="c_fileio_quiz_1.php">C File I\O </a></li>
					</ul>	

					
				</div>
			</div>
			<div id="right-section">
			<br>
			<br>
			<br>
				<div id="javascript-quiz">
  <style>
    #javascript-quiz .answers { padding-left: 1em; margin-left: 0 }
    #javascript-quiz .answers li { list-style: none !important; margin-left: 0; }
    #javascript-quiz #quiz-result { background: #efe; padding: 1em; border: 1px solid #afa; font-size:30px; }
    #javascript-quiz .notes-about-code { margin-top: 1em; }
    #javascript-quiz .notes-about-code li { margin-bottom: 0.5em; }
    #javascript-quiz .quiz li { list-style-type: none; }
	    #javascript-quiz .q1 { padding:10px;border-top:3px solid black;border-bottom:3px solid #333;border-left:3px solid black;border-right:3px solid black;font-size:18px;background:#C7FE7C;line-height:20px;}

  </style>

 

  <h1 style=color:green;>Quiz : The File I\O of C</h1>
  <br>
  <br>
  <ol class="quiz">
 <div class="q1">
    <li>
  <b>Que 1:What object do you use to represent a file in C?
      <ul class="answers">
        <li><input type="radio" name="question-1" id="answer-1-1"><label for="answer-1-1">A. FILE*</label> </li>
        <li><input type="radio" name="question-1" id="answer-1-2"><label for="answer-1-2">B. fopen</label></li>
        <li><input type="radio" name="question-1" id="answer-1-3"><label for="answer-1-3">C. printf</label></li>
        <li><input type="radio" name="question-1" id="answer-1-4"><label for="answer-1-4">D. fprintf</label></li>
      </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
 <b>Que 2: Before you can read or write to a file in C, what do you need to do?</b>
      <ul class="answers">
        <li><input type="radio" name="question-2" id="answer-2-1"><label for="answer-2-1">A. Call fopen on the file</label></li>
        <li><input type="radio" name="question-2" id="answer-2-2"><label for="answer-2-2">B. Create the file</label></li>
		<li><input type="radio" name="question-2" id="answer-2-3"><label for="answer-2-3">C. Call fclose on the file</label></li>
        <li><input type="radio" name="question-2" id="answer-2-4"><label for="answer-2-4">D. Use fprintf</label></li>
      </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
<b>Que 3: How do you write a string of text into a file?</b>
      <ul class="answers">
        <li><input type="radio" name="question-3" id="answer-3-1"><label for="answer-3-1">A. Open file and use fprintf.</label></li>
        <li><input type="radio" name="question-3" id="answer-3-2"><label for="answer-3-2">B. Open a file and use printf, the output will go to the file instead of the screen.</label></li>
        <li><input type="radio" name="question-3" id="answer-3-3"><label for="answer-3-3">C. Open a file, and use fputc repeatedly.</label></li>
        <li><input type="radio" name="question-3" id="answer-3-4"><label for="answer-3-4">D. Use fread to read data into the file.</label></li>
      </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
<b> Que 4: What flag do you need to pass to fopen to append to an existing file instead of recreating the file?</b>
      <ul class="answers">
        <li><input type="radio" name="question-4" id="answer-4-1"><label for="answer-4-1">A. a</label></li>
        <li><input type="radio" name="question-4" id="answer-4-2"><label for="answer-4-2">B. r</label></li>
		 <li><input type="radio" name="question-4" id="answer-4-3"><label for="answer-4-3">C. w</label></li>
        <li><input type="radio" name="question-4" id="answer-4-4"><label for="answer-4-4">D. W+</label></li>
	  </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
 <b>Que 5:How do you open a file for binary IO?</b>
      <ul class="answers">
        <li><input type="radio" name="question-5" id="answer-5-1"><label for="answer-5-1">A. Use the “b” flag to fopen</label></li>
        <li><input type="radio" name="question-5" id="answer-5-2"><label for="answer-5-2">B. Files are opened for binary IO by default</label></li>
        <li><input type="radio" name="question-5" id="answer-5-3"><label for="answer-5-3">C. Use fread and fwrite</label></li>
        <li><input type="radio" name="question-5" id="answer-5-4"><label for="answer-5-4">D. You need to use a special file type, BINARYFILE*</label></li>
	   </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
 <b>Que 6:  FILE is of type ______.</b>
      <ul class="answers">
        <li><input type="radio" name="question-6" id="answer-6-1"><label for="answer-6-1">A. int type</label></li>
        <li><input type="radio" name="question-6" id="answer-6-2"><label for="answer-6-2">B. char * type</label></li>
        <li><input type="radio" name="question-6" id="answer-6-3"><label for="answer-6-3">C. struct type</label></li>
        <li><input type="radio" name="question-6" id="answer-6-4"><label for="answer-6-4">D. None of the mentioned</label></li>
      </ul>
    </li>
	</div>
	<br>
	<br>
 	 <div class="q1">
    <li>
<b>Que 7: While calling the fprintf() function in the format string conversion specifier %s can be used to write a character string in capital letters.</b>
      <ul class="answers">
        <li><input type="radio" name="question-7" id="answer-7-1"><label for="answer-7-1">A. True</label></li>
        <li><input type="radio" name="question-7" id="answer-7-2"><label for="answer-7-2">B. False</label></li>
      </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
 <b>Que 8: Offset used in fseek() function call can be a negative number.</b>
      <ul class="answers">
        <li><input type="radio" name="question-8" id="answer-8-1"><label for="answer-8-1">A. True</label></li>
        <li><input type="radio" name="question-8" id="answer-8-2"><label for="answer-8-2">B. False</label></li>
		
      </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
  <b>Que 9: What will be the output of the program?
  <pre><code>
  #include&gt;stdio.h&dt;
  int main()
  {
		FILE *fp1, *fp2;
		fp1=fopen("file.c", "w");
		fp2=fopen("file.c", "w");
		fputc('A', fp1);
		fputc('B', fp2);
		fclose(fp1);
		fclose(fp2);
		return 0;
  }
  </code></pre></b>
      <ul class="answers">
        <li><input type="radio" name="question-9" id="answer-9-1"><label for="answer-9-1">A. B</label></li>
        <li><input type="radio" name="question-9" id="answer-9-2"><label for="answer-9-2">B. A
																						 <br>B</label></li>
        <li><input type="radio" name="question-9" id="answer-9-3"><label for="answer-9-3">C. B
																						 <br>B</label></li>
        <li><input type="radio" name="question-9" id="answer-9-4"><label for="answer-9-4">D. Error in opening file 'file1.c'</label></li>
      </ul>
    </li>
	</div>
	<br>
	<br>
	 <div class="q1">
    <li>
   <b>Que 10:What will be the output of the program?
  <pre><code>
   #include&gt;stdio.h&dt;
   int main()
   {
		int k=1;
		printf("%d == 1 is" "%s\n", k, k==1?"TRUE":"FALSE");
		return 0;
   }
  </code></pre></b>
      <ul class="answers">
        <li><input type="radio" name="quiz-10" id="answer-10-1"><label for="answer-10-1">A. k == 1 is TRUE</label></li>
        <li><input type="radio" name="quiz-10" id="answer-10-2"><label for="answer-10-2">B. 1 == 1 is TRUE</label></li>
		<li><input type="radio" name="quiz-10" id="answer-10-3"><label for="answer-10-3">C. 1 == 1 is FALSE</label></li>
        <li><input type="radio" name="quiz-10" id="answer-10-4"><label for="answer-10-4">D. K == 1 is FALSE</label></li>
      </ul>
    </li>
	<div>
  </ol>
  <br>
  <br>

  <p id="quiz-result"></p>
  <br>
  <br>
  
  
  
				  
				<center><button type="button" id="submitter" style=background-color:#4CAF50 ><h1>Let's see the score!</h1></button></center>
				

  

  <script>
  (function(){
  function byId(id) {
    return document.getElementById(id);
  }
  byId('submitter').onclick = function() {

    var wrongAnswers = [ ];

    if (!byId('answer-1-1').checked) { wrongAnswers.push(1); }
    if (!byId('answer-2-1').checked) { wrongAnswers.push(2); }
    if (!byId('answer-3-1').checked) { wrongAnswers.push(3); }
    if (!byId('answer-4-1').checked) { wrongAnswers.push(4); }
    if (!byId('answer-5-1').checked) { wrongAnswers.push(5); }
    if (!byId('answer-6-3').checked) { wrongAnswers.push(6); }
    if (!byId('answer-7-2').checked) { wrongAnswers.push(7); }
    if (!byId('answer-8-1').checked) { wrongAnswers.push(8); }
	if (!byId('answer-9-1').checked) { wrongAnswers.push(9); }
    if (!byId('answer-10-2').checked) { wrongAnswers.push(10); }
    
    var message;

    if (wrongAnswers.length === 0) {
      message = 'Flawless victory.';
    }
    else if (wrongAnswers.length <= 5) {
      message = 'Very good, but not quite there yet.';
    }
    else if (wrongAnswers.length < 10) {
      message = 'That\'s more than a half :(';
    }
    else {
      message = 'Ouch.';
    }

    var prefix = (wrongAnswers.length === 10) ? 'all ' : '';

    document.getElementById('quiz-result').innerHTML = (
      'You\'ve got ' + prefix + '<strong>' + wrongAnswers.length +
      '</strong> answer'+ (wrongAnswers.length === 1 ? '' : 's') +
      ' wrong' + ((wrongAnswers.length > 0) ? (' (' + '#' + wrongAnswers.join(', #') + ')') : '')
      + '.<br>' + message);
  };
})();
</script>
</div>
	</div>
		</div>
		<div id="footer">
			<div class="holder4"><center><a href="aboutus.php"> About Us </a> | <a href="contactus.php">Contact Us </a> | <a href="pp.php">Privacy & Policy</a></center></div>
			<br>
			<div class="holder5"><center>Copyright © 2019 programmingKeeda.com | All rights reserved.</center></div>
		</div>	
	</div>
</body>
</html>