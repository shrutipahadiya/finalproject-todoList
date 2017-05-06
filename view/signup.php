<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title>Sign-Up</title> 
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  div.s1 {
    position: absolute;
    top: 150px;
    left: 500px;
    width: 200px;
    height: 10px;
    border: none;
}
div.head1 {
    position: absolute;
    top: 0px;
    
    width: 100%;
    height: 13%;
    background-color:grey;
}
h1   {color: #2e6da4;
font-size:50px;

}
</style>
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</head> 

<body id="body-color">
<?php include 'header.php'; ?>
<!--<div class="head1">
<h1 align="center">Todo Application</h1>
</div>-->


<div style="width:30%" class="s1">
  <div class="panel panel-primary">
      <div class="panel-heading">Create a new account</div>
      <div class="panel-body"><form class="form-signin"  method ="post" action="../index.php">
   
	<div class="form-group">
   <label for="usr">Username:</label> 
  <input type="text" class="form-control" name="reg_uname" id="reg_uname" value="" required size="30" maxlength="30"/> 
  </div>

   <div class="form-group">
   <label for="password">Password: </label>
   <input type="password" class="form-control"  name="reg_password" id="reg_password" value="" required size="30" maxlength="30"/> 
   </div> 
   
   <div class="form-group">
  <label for="firstname">First Name:</label>
  <input type="text" class="form-control" name="reg_firstname" id="reg_firstname" value="" required size="30" maxlength="30"/> 
   </div>
   
      <div class="form-group">
  <label for="lastname">Last Name:</label> 
  <input type="text" class="form-control" name="reg_lastname" id="reg_lastname" value="" required size="30" maxlength="30"/> 
  </div>
   
   
   <div class="form-group">
   <label for="email">Email Address :</label> 
   <input type="email" class="form-control" name="reg_email" id="reg_email" value="" required size="30" maxlength="30"/> 
  </div>



   <div class="form-group">
   <label for="phone">Phone Number: </label> 
  <input type="text" name="reg_phonenumber" class="form-control"  id="reg_phonenumber" value="" required size="13" maxlength="30"/>
  </div>


 <div class="form-group">
  <label for="birthday">Birthday : </label> 
  <input type="date" name="reg_birthdate" class="form-control" id="reg_birthdate" value="" required/> 
 </div>
  
  
  <div class="form-group">
 <label for="gender">Gender : </label>
 <input type="radio" required name="reg_gender" id="reg_gender" value="Male">Male</input>
 <input type="radio" name="reg_gender" id="reg_gender" value="Female">Female</input> 
 </div>


  <input type="hidden" name="action" value="signup" />
  
    <input id="button" class="btn btn-sm btn-primary btn-block" type="submit" value="Sign up" data-toggle="tooltip" title="Signup"  />
 </form>


 <form action="login.php" method = "post">
  <input id="button" class="btn btn-sm btn-primary btn-block"  type='submit' value='Login' data-toggle="tooltip" title="Login"  />
 </form>

 </div>
    </div>
	</div> 
</body>
</html>





<!-- <select name = "reg_birthday">
	 <option value="Day">Day</option>
	 <option value="01">1</option>
	<option value="02">2</option>
	<option value="03">3</option>
	<option value="04">4</option>
	<option value="05">5</option>
	<option value="06">6</option>
	<option value="07">7</option>
	<option value="08">8</option>
	<option value="09">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
  </select>
  
  <select name = "reg_birthmonth">
  <option value="Month">Month</option>
   <option value="01">Jan</option>
   <option value="02">Feb</option>
   <option value="03">Mar</option>
   <option  value="04">Apr</option>
   <option value="05">May</option>
   <option value="06">Jun</option>
   <option value="07">Jul</option>
   <option value="08">Aug</option>
   <option value="09">Sept</option>
   <option value="10">Oct</option>
   <option value="11">Nov</option>
   <option value="12">Dec</option>
  </select>

  <select name = "reg_birthyear">
  <option value="Year">Year</option>

    <option value="2017">2017</option>
    <option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
  	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
  </select>-->
 