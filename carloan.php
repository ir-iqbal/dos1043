<?php

if (isset($_POST['cars'])) @$cars = $_POST['cars'];
if (isset($_POST['carmodel'])) @$carmodel = $_POST['carmodel'];

if (isset($_POST['amount1'])) @$amount1 = $_POST['amount1'];
if (isset($_POST['amount2'])) @$amount2 = $_POST['amount2'];
if (isset($_POST['amount3'])) @$amount3 = $_POST['amount3'];
if (isset($_POST['amount4'])) @$amount4 = $_POST['amount4'];

if (isset($_POST['Perodua'])) @$Perodua = $_POST['Perodua'];
if (isset($_POST['Proton'])) @$Proton = $_POST['Proton'];
if (isset($_POST['Acura'])) @$Acura = $_POST['Acura'];
if (isset($_POST['AlfaRomeo'])) @$AlfaRomeo = $_POST['Alfa Romeo'];
if (isset($_POST['AstonMartin'])) @$AstonMartin = $_POST['Aston Martin'];
if (isset($_POST['Audi'])) @$Audi = $_POST['Audi'];
if (isset($_POST['Bentley'])) @$Bentley = $_POST['Bentley'];
if (isset($_POST['BMW'])) @$BMW = $_POST['BMW'];
if (isset($_POST['Cadillac'])) @$Cadillac = $_POST['Cadillac'];
if (isset($_POST['Chevrolet'])) @$Chevrolet = $_POST['Chevrolet'];
if (isset($_POST['Citroen'])) @$Citroen = $_POST['Citroen'];
if (isset($_POST['Dodge'])) @$Dodge = $_POST['Dodge'];
if (isset($_POST['Ferrari'])) @$Ferrari = $_POST['Ferrari'];
if (isset($_POST['Fiat'])) @$Fiat = $_POST['Fiat'];
if (isset($_POST['Ford'])) @$Ford = $_POST['Ford'];
if (isset($_POST['Honda'])) @$Honda = $_POST['Honda'];
if (isset($_POST['Hyundai'])) @$Hyundai = $_POST['Hyundai'];
if (isset($_POST['Infiniti'])) @$Infiniti = $_POST['Infiniti'];
if (isset($_POST['Jaguar'])) @$Jaguar = $_POST['Jaguar'];
if (isset($_POST['Jeep'])) @$Jeep = $_POST['Jeep'];
if (isset($_POST['KIA'])) @$KIA = $_POST['KIA'];
if (isset($_POST['Koenigsegg'])) @$Koenigsegg = $_POST['Koenigsegg'];
if (isset($_POST['Lamborghini'])) @$Lamborghini = $_POST['Lamborghini'];
if (isset($_POST['LandRover'])) @$LandRover = $_POST['Land Rover'];
if (isset($_POST['Lexus'])) @$Lexus = $_POST['Lexus'];
if (isset($_POST['Maserati'])) @$Maserati = $_POST['Maserati'];
if (isset($_POST['Mazda'])) @$Mazda = $_POST['Mazda'];
if (isset($_POST['McLaren'])) @$McLaren = $_POST['McLaren'];
if (isset($_POST['MercedesBenz'])) @$MercedesBenz = $_POST['Mercedes-Benz'];
if (isset($_POST['Mini'])) @$Mini = $_POST['Mini'];
if (isset($_POST['Mitsubishi'])) @$Mitsubishi = $_POST['Mitsubishi'];
if (isset($_POST['Nissan'])) @$Nissan = $_POST['Nissan'];
if (isset($_POST['Pagani'])) @$Pagani = $_POST['Pagani'];
if (isset($_POST['Peugeot'])) @$Peugeot = $_POST['Peugeot'];
if (isset($_POST['Porshe'])) @$Porshe = $_POST['Porshe'];
if (isset($_POST['Renault'])) @$Renault = $_POST['Renault'];
if (isset($_POST['RollsRoyce'])) @$RollsRoyce = $_POST['Rolls Royce'];
if (isset($_POST['Saab'])) @$Saab = $_POST['Saab'];
if (isset($_POST['Subaru'])) @$Subaru = $_POST['Subaru'];
if (isset($_POST['Suzuki'])) @$Suzuki = $_POST['Suzuki'];
if (isset($_POST['TATA'])) @$TATA = $_POST['TATA'];
if (isset($_POST['Tesla'])) @$Tesla = $_POST['Tesla'];
if (isset($_POST['Toyota'])) @$Toyota = $_POST['Toyota'];
if (isset($_POST['Volkswagen'])) @$Volkswagen = $_POST['Volkswagen'];
if (isset($_POST['Volvo'])) @$Volvo = $_POST['Volvo'];

@$Perodua = "Perodua";
@$Proton = "Proton";
@$Acura = "Acura";
@$AlfaRomeo = "Alfa Romeo";
@$AstonMartin = "Aston Martin";
@$Audi = "Audi";
@$Bentley = "Bentley";
@$BMW = "BMW";
@$Cadillac = "Cadillac";
@$Chevrolet = "Chevrolet";
@$Citroen = "Citroen";
@$Dodge = "Dodge";
@$Ferrari = "Ferrari";
@$Fiat = "Fiat";
@$Ford = "Ford";
@$Honda = "Honda";
@$Hyundai = "Hyundai";
@$Infiniti = "Infiniti";
@$Jaguar = "Jaguar";
@$Jeep = "Jeep";
@$KIA = "KIA";
@$Koenigsegg = "Koenigsegg";
@$Lamborghini = "Lamborghini";
@$LandRover = "Land Rover";
@$Lexus = "Lexus";
@$Maserati = "Maserati";
@$Mazda = "Mazda";
@$McLaren = "McLaren";
@$MercedesBenz = "Mercedes-Benz";
@$Mini = "Mini";
@$Mitsubishi = "Mitsubishi";
@$Nissan = "Nissan";
@$Pagani = "Pagani";
@$Peugeot = "Peugeot";
@$Porshe = "Porshe";
@$Renault = "Renault";
@$RollsRoyce = "Rolls Royce";
@$Saab = "Saab";
@$Subaru = "Subaru";
@$Suzuki = "Suzuki";
@$TATA = "TATA";
@$Tesla = "Tesla";
@$Toyota = "Toyota";
@$Volkswagen = "Volkswagen";
@$Volvo = "Volvo";

@$answer1 = ( @$amount1 - @$amount2 );
@$answer2 = ( ( @$answer1 * ( @$amount3 / 100 ) ) * @$amount4 );
@$answer3 = ( @$answer1 + @$answer2 );
@$answer4 = ( @$amount4 * 12 );
@$answer5 = ( @$answer3 / @$answer4 );


?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car Loan Calculator</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
body {
	background-image: url(Untitled-1%20copy.jpg);
}
</style>

<style type="text/css">
textarea
{
	border-color:transparent
}
</style>

</head>

<body>
<br /><br />
<div align="center"><b><font face="Segoe UI">CAR LOAN CALCULATOR</font></b> <a href="https://officialhakimm.blogspot.com/p/projects.html" target="_blank"><img src="Untitled-1.png" width="18" height="18" longdesc="https://officialhakimm.blogspot.com/p/projects.html" /></a><br /><br />
</div>
<div align="center">
<form method='post' action=''>
  <table width="80%" border="0">
    <tr>
      <td><div align="center"><strong><font face="Segoe UI">YOUR CAR'S DETAILS</font></strong></div></td>
    </tr>
    <tr>
      <td>
      <table width="100%" border="0">
        <tr>
          <td width="41%"><table width="100%" border="0">
            <tr>
              <td width="90%"><font face="Segoe UI">Car Model</font></td>
              <td width="10%"><font face="Segoe UI"><div align="center">:</div></font></td>
            </tr>
          </table></td>
          
          <td width="59%"><font face="Segoe UI"><strong>
          	<select name="cars" id="cars">
            <option><?php echo @$cars; ?></option>
            <option value="divider"></option>
            <option value="divider">--- Malaysia ---</option>
          	<option value="<?php echo @$Perodua; ?>">Perodua</option>
         	<option value="<?php echo @$Proton; ?>">Proton</option>
            <option value="divider"></option>
            <option value="divider">--- International ---</option>
             <option value="<?php echo @$Acura; ?>">Acura</option>
			<option value="<?php echo @$AlfaRomeo; ?>">Alfa Romeo</option>
			<option value="<?php echo @$AstonMartin; ?>">Aston Martin</option>
			<option value="<?php echo @$Audi; ?>">Audi</option>
            <option value="<?php echo @$Bentley; ?>">Bentley</option>
            <option value="<?php echo @$BMW; ?>">BMW</option>
            <option value="<?php echo @$Cadillac; ?>">Cadillac</option>
            <option value="<?php echo @$Chevrolet; ?>">Chevrolet</option>
            <option value="<?php echo @$Citroen; ?>">Citroen</option>
            <option value="<?php echo @$Dodge; ?>">Dodge</option>
            <option value="<?php echo @$Ferrari; ?>">Ferrari</option>
            <option value="<?php echo @$Fiat; ?>">Fiat</option>
            <option value="<?php echo @$Ford; ?>">Ford</option>
            <option value="<?php echo @$Honda; ?>">Honda</option>
            <option value="<?php echo @$Hyundai; ?>">Hyundai</option>
            <option value="<?php echo @$Infiniti; ?>">Infiniti</option>
            <option value="<?php echo @$Jaguar; ?>">Jaguar</option>
            <option value="<?php echo @$Jeep; ?>">Jeep</option>
            <option value="<?php echo @$KIA; ?>">KIA</option>
            <option value="<?php echo @$Koenigsegg; ?>">Koenigsegg</option>
            <option value="<?php echo @$Lamborghini; ?>">Lamborghini</option>
            <option value="<?php echo @$LandRover; ?>">Land Rover</option>
            <option value="<?php echo @$Lexus; ?>">Lexus</option>
            <option value="<?php echo @$Maserati; ?>">Maserati</option>
            <option value="<?php echo @$Mazda; ?>">Mazda</option>
            <option value="<?php echo @$McLaren; ?>">McLaren</option>
            <option value="<?php echo @$MercedesBenz; ?>">Mercedes-Benz</option>
            <option value="<?php echo @$Mini; ?>">Mini</option>
            <option value="<?php echo @$Mitsubishi; ?>">Mitsubishi</option>
            <option value="<?php echo @$Nissan; ?>">Nissan</option>
            <option value="<?php echo @$Pagani; ?>">Pagani</option>
            <option value="<?php echo @$Peugeot; ?>">Puegeot</option>
            <option value="<?php echo @$Porshe; ?>">Porshe</option>
            <option value="<?php echo @$Renault; ?>">Rolls Royce</option>
            <option value="<?php echo @$Saab; ?>">Saab</option>
            <option value="<?php echo @$Subaru; ?>">Subaru</option>
            <option value="<?php echo @$Suzuki; ?>">Suzuki</option>
            <option value="<?php echo @$TATA; ?>">TATA</option>
            <option value="<?php echo @$Tesla; ?>">Tesla</option>
            <option value="<?php echo @$Toyota; ?>">Toyota</option>
            <option value="<?php echo @$Volkswagen; ?>">Volkswagen</option>
            <option value="<?php echo @$Volvo; ?>">Volvo</option>
            </select>          
            <input type="text" name="carmodel" value="<?php echo @$carmodel; ?>" />
          </strong></font></td>
        </tr>
        <tr>
          <td><table width="100%" border="0">
            <tr>
              <td width="90%"><font face="Segoe UI">Retail Price</font></td>
              <td width="10%"><font face="Segoe UI"><div align="center">:</div></font></td>
            </tr>
          </table></td>
          <td><table width="100%" border="0">
            <tr>
              <td width="25%"><div align="right"><font face="Segoe UI">RM</font></div></td>
              <td width="75%"><font face="Segoe UI">
                <input type="text" name="amount1" value="<?php echo(@$amount1);?>" />
              </font></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="100%" border="0">
            <tr>
              <td width="90%"><font face="Segoe UI">Down Payment</font></td>
              <td width="10%"><font face="Segoe UI"><div align="center">:</div></font></td>
            </tr>
          </table></td>
          <td><table width="100%" border="0">
            <tr>
              <td width="25%"><div align="right"><font face="Segoe UI">RM</font></div></td>
              <td width="75%"><font face="Segoe UI"><input type="text" name="amount2" value="<?php echo(@$amount2); ?>" /></font></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="100%" border="0">
            <tr>
              <td width="90%"><font face="Segoe UI">Total Loan Period</font></td>
              <td width="10%"><font face="Segoe UI"><div align="center">:</div></font></td>
            </tr>
          </table></td>
          <td><table width="100%" border="0">
            <tr>
              <td width="25%"><div align="center"><font face="Segoe UI">
                <input type="text" name="amount4" value="<?php echo (@$amount4); ?>" />
              </font></div></td>
              <td width="75%"><font face="Segoe UI">years</font></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="100%" border="0">
            <tr>
              <td width="90%"><font face="Segoe UI">Interest Rates</font></td>
              <td width="10%"><font face="Segoe UI"><div align="center">:</div></font></td>
            </tr>
          </table></td>
          <td><table width="100%" border="0">
            <tr>
              <td width="25%"><div align="center"><font face="Segoe UI">
                <input type="text" name="amount3" value="<?php echo (@$amount3); ?>" />
              </font></div></td>
              <td width="75%"><font face="Segoe UI">%</font></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <br />
    <div align="center"> 
    <button type="submit" value="Calculate">Calculate</button>
    </div>
</form>               
</div>

<div align="center">
  <br />
   <table width="80%" border="0">
    <tr>
      <td><div align="center"><font face="Segoe UI"><strong>RESULT</strong></font></div></td>
    </tr>
    <tr>
      <td><table width="100%" border="0">
        <tr>
          <td width="41%">
          <table width="100%" border="0">
            <tr>
              <td width="90%"><font face="Segoe UI">Monthly Installment</font></td>
              <td width="10%"><font face="Segoe UI"><div align="center">:</div></font></td>
            </tr>
          </table></td>
          <td width="59%">
          <table width="100%" border="0">
            <tr>
              <td width="25%"><div align="right"><font face="Segoe UI">RM</font></div></td>
              <td width="75%"><font face="Segoe UI"><input type="text" value="<?php echo number_format((float)@$answer5, 2, '.', ''); ?>"></td></font></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <br />
    <div align="center"> 
   <input type='button' onclick="window.print() " value='Print' / border="1">
   </div>
</div>

<br /><br /><br />

<font face="Segoe UI"><center>This loan calculator was developed by <a href="https://www.twitter.com/#!/officialhakimm" target="_blank">Ir. Iqbal</a>, <a href="https://www.twitter.com/#!/ira_mir_" target="_blank">Amira Husna</a>, <a href="https://www.instagram.com/saya_achikk" target="_blank">Shahrul</a>, <a href="https://www.twitter.com/#!/kekanda_amyrul" target="_blank">Amirul</a>.
<br />
Copyright Reserved &#169 2016. Made in Malaysia.</center></font>

</body>
</html>