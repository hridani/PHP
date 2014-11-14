<!DOCTYPE html>
<html>
<head>
 <title>03CalculateInterest</title>
</head>
<body>
<form action="03CalculateInterest.php" method="get">
<fieldset>
     <label for="amount">Enter amount</label>
<input type='text' name="amount" /><br/>
<input type="radio" name="currency" value="usd"> <label for="usd">USD</label>
<input type="radio" name="currency" value="eur"><label for="eur">EUR</label>
<input type="radio" name="currency" value="bgn"><label for="bgn">BGN</label><br/>
<label for="divident">Compound Interest Amount </label>
<input type='divident' name="divident" /></br>
<select name="period">
    <option value="0.5">6 Mounths</option>
    <option value="1">1 Year</option>
    <option value="2">2 Years</option>
    <option value="5">5 Years</option>
</select>
<input type="submit" value="Calculate" />

</fieldset>
</form>
</body>
</html>
<?php
if(isset($_GET['amount']) && isset($_GET['currency']) && isset($_GET['divident']) && isset($_GET['period'])){
            
     $amount = $_GET['amount'];
     $currency = $_GET['currency'];
     $divident = $_GET['divident']/100;
     $period=$_GET['period'];
     if (is_numeric($amount) && is_numeric($divident) && is_numeric($period)) {
        if ($divident > 0 && $divident <= 1) {
            
                $value= round(($amount * pow(1 + $divident/ 12, 12 * $period)) ,2);
                switch ($currency) {
                    case "usd":
                    echo "$" . $value;
                        break;
                    case "eur":
                    echo "€" . $value;
                    break;
                    case "bgn":
                    echo $value . " лв.";
                        break;
                    default:
                    echo $value;
                    }
           
        } else {
            echo "Invalid interest rate. It should be a number between 0 and 100.";
        }
        }  else {
        echo "The data you entered is invalid.";
        }
    } 

    
 
?>