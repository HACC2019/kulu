<?php

?>

<html>
<head>
<meta charset="UTF-8">
<style>

/* navigation bar */
/* alternate nav bar color = 
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

/* Begin eligibility */

.open-button3 {
  background-color: #bec4a8;
  color: white;
  padding: 22px 30px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: static;
  width: 260px;
  font-size: 18px;
  margin-left: 15px;
}

#eligibility {
    width: 32%;
    border: none;
    font-family: arial;
    float: left;
    margin: 5px;
}

.form-popup3 {
  display: none;
  position: relative;
  margin-left: 15px;
  border: none;
  z-index: 9;
}


.form-container3 {
  width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container3 input[type=text], .form-container input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container3 input[type=text]:focus, .form-container input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container3 .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #935556;
}

.form-container2 .cancel {
  background-color: #935556;
}

.form-container3 .cancel {
  background-color: #935556;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.form-container2 .btn2:hover, .open-button2:hover {
  opacity: 1;
}

.form-container3 .btn3:hover, .open-button3:hover {
  opacity: 1;
}


/* END eligibility */
/* Begin Ammortization */

#amortization {
    width: 32%;
    background-color: #BEC4A8;
    opacity: 0.8;
    border: none;
    font-family: arial;
    float: left;
    margin: 5px;
}

#amortization:hover {
    opacity: 1;
}

#amortization h2 {
    text-align: center;
    
}

#amortization form {
    padding: 5px;
}

#amortization input {
    float: right;
    clear: both;
}

#amortization:hover {
    opacity: 0.9em;
}




/* END amortization */




#Resource-links {
    float:left;
    width: 32%;
    text-align: left;
    margin: 5px;
    font-family: arial;
}

#Resource-links a {
    color: #fff;
}

#Resource-links:hover {
    background-color: #8b917E;
    opacity: 0.9;
   
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




</style>



<title>GEM$ Resources</title>
<link rel="icon" href="images/Kulu_Logo_white-01.png.png" type="image" sizes="15x15">
</head>

<body>

<div class="topnav">
    <img src="images/Kulu_Logo_white-01.png" alt="logo">
 
  <a href="/KULU/K_home.php">Home</a>
  <a class="active" href="#resources">Resources</a>
 

  
<a id="button" href="includes/logout.inc.php">Logout</a>

</div>

    
    <br />    
    
<!--DASHBOARD KINE TINGS-->   
<div style="width: 99%;">

    
<!-- Eligibility -->    
 <div id="eligibility">  
     
<button class="open-button3" onclick="openForm3()">Eligibility</button>


	<div class="form-popup3" id="myForm3">
 	 <form action="includes/eligibility.php" class="form-container3" method="POST" >
		<h1>Eligibility Form</h1>
                <p>Fill out the fields to see if you are eligible to apply</p>

                <h5>Have you met with a GEMS approved contractor? </h5>
<input type="checkbox" name="contractor" value="Yes">YES</input>
<input type="checkbox" name="contractor" value="No">NO</input>
<br>


<h5>Are you a Hawaiian Electric, Maui Electric or Hawaiian Electric Light Company customer on Rate Schedule R?</h5>
<input type="checkbox" name="customer" value="Yes">YES</input>
<input type="checkbox" name="customer" value="No">NO</input>
<br>

<h5>Do you have at least 6 months of history with the Utility?<h5>
<input type="checkbox" name="history" value="Yes">YES</input>
<input type="checkbox" name="history" value="No">NO</input>
<br>

<h5>What is your household (HH) income?<h5>
<input type="text" name="HHincome" placeholder="Enter income"><br>

    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
  
       
         
         </form>
            

            
</div>
     
<script>
 function openForm3() {
  document.getElementById("myForm3").style.display = "block";
}

function closeForm3() {
  document.getElementById("myForm3").style.display = "none";
}   
     
</script>
 </div>
<!-- END Eligibility -->
<!-- Amortization Calculator -->

<div id="amortization">
<script language="JavaScript" type="text/javascript" src="includes/amort.js"></script>
                        
<h2>Loan Amortization Table</h2>
		
		<hr>		
		<form>
			<fieldset>
				<legend>Inputs</legend>
				<label for="principal"><b>Principal:</b></label>
				<input type="text" id="principal" />
				<br />
				<label for="interest"><b>Interest:</b></label>
				<input type="text" id="interest" />
				<br />
				<label for="terms"><b>Terms:</b></label>
				<select id="terms" style="margin: 5px; float: right; clear: both;">
					<option value="12">12 Months</option>
					<option value="24">24 Months</option>
					<option value="36">36 Months</option>
					<option value="48">48 Months</option>
					<option value="60">60 Months</option>
                                        <option value="60">72 Months</option>
				</select>
				<br />
				<input style="padding: 16px 20px; background-color:#8B917E; color: white; border: none; cursor: pointer; margin-bottom: 10px; margin-top: 10px; opacity: 0.8;" " type="button" value="Calculate" onclick="getValues()" />								
			</fieldset>
		</form>
		<form>
			<fieldset>
			<legend>Outputs</legend>
				<div id="Result"></div>
			</fieldset>						
		</form>               

</div>
<!-- END Amortization Calculator -->
<!-- begin Links -->

<div id="Resource-links">

    <ul> 
        <li>
    <h3>
<a href="https://www.hawaiianelectric.com/billing-and-payment/rates-and-regulations/effective-rate-summary" target="_blank">
    Effective Rates - HECO</a></h3>
            <br></li>
        <li>
        <h3>
        
<a href="https://www.mauielectric.com/billing-and-payment/rates-and-regulations/effective-rate-summary" target="_blank">
    Effective Rates - MECO</a>
     </h3><br></li>
        <li>
    <h3>
<a href="https://www.hawaiielectriclight.com/billing-and-payment/rates-and-regulations/hawaii-electric-light-rates" target="_blank">
    Effective Rates - HELCO</a>
    </h3><br></li>
        <li>
    <h3>
<a href="https://dbedt.hawaii.gov/hhfdc/files/2019/07/2019-Income-Sales-and-Rent-Guidelines.pdf" target="_blank">
    Area Median Income - DBEBT</a></h3><br></li>
        <li>
    <h3>
<a href="http://cca.hawaii.gov/resources/" target="_blank">
    Lookup contractor information - DCCA </a></h3><br></li>
    </ul>
</div>
<!-- ENDlinks -->
<br style="clear: left;" />
</div>
</body>
</html>


