<?php

?>

<html>
<head>
<meta charset="UTF-8">
<style>

/* navigation bar */
/* alternate nav bar color
 background-color: #7B877D; */


.topnav {
  width: auto;
  height: 70px;
  background-color: #bec4a8;
  opacity: 0.8;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  overflow: hidden;
  font-family: Arial, Helvetica, sans-serif;
}


.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
  border-radius: 12px;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #8b917e;
  color: white;
  border-radius: 12px;
}

.topnav img {
  width: 55px;
  height: auto;
  padding: 5px;
}
.topnav #button {
  	border-radius: 12px;
	border-style: none;
	border: none;
	background-color: #8b917e;
	opacity: 0.7em;
  	color: #E0E0E0;
	text-transform: uppercase;
        margin: 5px;
}
.topnav #button:hover {
  background-color: #ddd;
  color: #BD5C5E;
}

/* END NAVIGATION BAR */

/* BEGIN DASH BOARD KINE THINGS */


#progress-bar {
    opacity: 0.8;
}
#progress-bar:hover {
    opacity: 1;
}

#progress-bar ol {
  background: #fff;
  padding: 20px 6px !important;
  margin-top: 30px !important;
  border-radius: 6px;
  opacity: 0.8 !important;
}

.track-progress {
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.track-progress[data-steps="4"] li {
  width: 25%;
}

.track-progress li {
  margin: 0;
  padding: 0;
  list-style-type: none;
  display: inline-block;
  position: relative;
  text-align: center;
  font: 10px/30px sans-serif;
  background: #eee;
}

.track-progress li > span {
  display: block;
  color: #555;
  font-weight: bold;
  text-transform: uppercase;
}

.track-progress li.done > span {
  background: #8b917E;
  color: #eee;
}

.track-progress li.last > span {
  background: #738c6d;
}

.track-progress li > span:after,
.track-progress li > span:before {
  content: "";
  display: block;
  width: 0px;
  height: 0px;
  position: absolute;
  top: 0;
  left: 0;
  border: solid transparent;
  border-left-color: #f0f0f0;
  border-width: 15px;
}

.track-progress li > span:after {
  top: -5px;
  z-index: 1;
  border-left-color: white;
  border-width: 20px;
}

.track-progress li > span:before {
  z-index: 2;
}

.track-progress li.done + li > span:before {
  border-left-color: #8b917E;
}

.track-progress li.last + li > span:before {
  border-left-color: #738c6d;
}

.track-progress li:first-child > span:after,
.track-progress li:first-child >
span:before {
  display: none;
}

.track-progress li:first-child i,
.track-progress li:last-child i {
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  top: 0;
  left: 0;
  border: solid transparent;
  border-left-color: white;
  border-width: 15px;
}

.track-progress li:last-child i {
  left: auto;
  right: -15px;
  border-left-color: transparent;
  border-top-color: white;
  border-bottom-color: white;
}

/* Words and Stuff */
p {
  margin: 0 auto;
  width: 500px;
  margin-top: 25px;
  font: 18px/28px 'Open Sans',sans-serif;
  color: #555;
}
p em {
  display: block;
  font-size: 23px;
  font-weight: 700;
  font-style: normal;
}



/* END DASH BOARD KINE THINGS */


body {
	background: url(images/BananaLeaf_01.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	width: auto;
	Height: 100%;
	z-index: 9;

}




/* Button used to open the contact form - fixed positioning */


    

#form-buttons {
    width: 35%;
    border: none;
    font-family: arial;
    float: left;
    margin: 5px;
}
    

.open-button {
  background-color: #bec4a8;
  color: white;
  padding: 22px 30px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: static;
  width: 260px;
  font-size: 18px;
}

.open-button:hover {
    opacity: 1;
}

.open-button2 {
  background-color: #bec4a8;
  color: white;
  padding: 22px 30px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: static;
  width: 260px;
  font-size: 18px;
}

.open-button2:hover {
    opacity: 1;
}

/* Check on Application status */


.open-button4 {
  background-color: #bec4a8;
  color: white;
  padding: 22px 30px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: static;
  width: 260px;
  font-size: 18px;
  
}

.open-button4:hover {
    opacity: 1;
}

.form-popup4 {
  display: none;
  position: relative;
  margin-top: 5px;
  border: none;
  z-index: 9;
  background-color:#fff;
  opacity:0.8;
}

.form-popup4:hover{
    opacity:1;
}

.form-container4 {
  width: 300px;
  padding: 10px;
  background-color: white;
}

.closebtn {
  background-color: #935556;
}




</style>



<title>Home</title>
<link rel="icon" href="images/Kulu_Logo_white-01.png.png" type="image" sizes="15x15">
</head>

<body>

<div class="topnav">
    <img src="images/Kulu_Logo_white-01.png" alt="logo">

  <a class="active" href="#home">Home</a>
  <a href="/KULU/K_resources.php">Resources</a>

  
<a id="button" href="includes/logout.inc.php">Logout</a>

</div>

<!--DASHBOARD KINE TINGS-->   
<br>
<div id="progress-bar">

<ol class="track-progress" data-steps="4">
  <li class="done last">
      <span><a href="/KULU/K_resources.php">Check Your Eligibility</a></span>
    <i></i><!-- arrow start -->
  </li><!--
--><li class="done">
    <span>Gather Required Information</span>
  </li><!-- 
--><li>
    <span>Apply for Green Loan</span>
  </li><!--
--><li>
    <span>Application Status</span>
    <i></i><!-- arrow end -->
  </li>
</ol>

<p> <em>Welcome to the GEMS loan application portal</em> 
</p>

</div>


<!-- Application buttons & POP UP script -->

<br />
<div id="form-buttons">

<input class="open-button" type="button" value="Homeowner Application" 
       onclick="window.open('https://rhemakishida.typeform.com/to/s8vIMR','popUpWindow','height=650,width=500,left=300,top=175,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">    

<br>
    
<input class="open-button2" type="button" value="Contractor Information" 
       onclick="window.open('https://rhemakishida.typeform.com/to/s8vIMR','popUpWindow','height=650,width=500,left=500,top=175,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">    

<br>

<!-- Application Status -->

<button class="open-button4" onclick="openForm4()">Application Status</button>
<br>
<div class="form-popup4" id="myForm4">

    <table cellpadding="10px">
        <tr>
            <td>Application</td>
            <td>Date submitted</td>
            <td>Status</td>    
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>    
        </tr>
        
    </table>
    
    <button type="button" class="closebtn" onclick="closeForm4()">Close</button>


    
</div>    
<script>
 function openForm4() {
  document.getElementById("myForm4").style.display = "block";
}

function closeForm4() {
  document.getElementById("myForm4").style.display = "none";
}   
     
</script>

</div>
</body>
</html>


