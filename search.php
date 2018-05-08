<?php
mysql_connect("localhost", "", "") or die("Error connecting to database: ".mysql_error());

mysql_select_db("drug_lab") or die("Error finding database: ".mysql_error());

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/signin.css" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="images/logo.png"/>

  <title>Drug Lab</title>
</head>
<body>
<?php
  $input = $_GET['name'];
  $query = mysql_real_escape_string($input);
  $raw_results = mysql_query("SELECT * FROM WHERE (`drug_name` LIKE '$query')") or die(mysql_error());

  if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

                echo "<p><h3>".$results['**']."</h3>".$results['**']."</p>";
                // posts results gotten from database
            }

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

?>
</body>
</html>
