<!DOCTYPE html>
<html>
    <head>
        <meta charset= "utf-8">
		<meta name="description" content="Calculator with PHP">
        <link rel="stylesheet" type="text/css" href="MijnStyle.css">
        <title> Calculator++</title>
    </head>
    <body>
       <div class="container">
		<div class="top-part">
		<?php

    $num1 = 0;
    $num2 = 0;
    $totaal = 0;
    $keuze = "";
    $error = "";
    $error2 = "";
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $keuze = $_POST['operation'];
        //Check number value
        if ( is_numeric($num2))
        {
            //Calculate total
            if($keuze == "macht")   
            {
                $totaal = (pow($num1,$num2));
            }
            

            if($keuze == "wortel")
            {
                $totaal = sqrt($num2);
            }
           

            if($keuze == "plus")
            {
            $totaal = $num1 + $num2;
            }
            

            if($keuze == "min")
            {
            $totaal = $num1 - $num2;
            }
            

            if($keuze == "keer")
            {
                $totaal = $num1 * $num2;
            }
            

            if($keuze == "delen")
            {
            $totaal = $num1 / $num2;
            }
            
            //print total to the browser
            echo $totaal;
        }
        else
            {
                $error = "Alleen getallen";
                echo $error;
            }
         
    }    
    ?>
		
		<div class="bottom-part">
			<form method= "POST" action="">
				<ul>
					<li>
						<label>Number 1<label>
						<input name="num1" class="input members" type="number" value="" placeholder="your first number">
					</li>
					<li>
						<label>Operator<label>
						<select name="operation">
							<option value="plus">+</option>
							<option value="min">-</option>
							<option value="keer">*</option>
							<option value="delen">/</option>
							<option value="macht">^</option>
							<option value="wortel">√</option>
						</select>
					</li>
					<li>
						<label>Number 2<label>
						<input name="num2" class="input members" type="number" value="" placeholder="your second number">
					</li>
					<li>
						<input class="btn-calculate" name="submit" type="submit" value="Calculate">
						<input class="btn-reset" name="submit" type="reset" value="Reset">
					</li>
				</ul>
			</form>
		</div>
		</div>
        


    </body>
</html>