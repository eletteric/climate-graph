<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$year = $january = $february = $march = $april = $may = $june = $july = $august = $september = $october = $november = $december = "";
$year_err = $january_err = $february_err = $march_err = $april_err = $may_err = $june_err = $july_err = $august_err = $september_err = $october_err = $november_err = $december_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate year
    $input_year = trim($_POST["year"]);
    if(empty($input_year)){
        $year_err = "Please enter a year.";
    } elseif(filter_var($input_year, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1981, "max_range"=>2100))) === false){
        $year_err = "Please enter a valid year.";
    } else{
        $year = $input_year;
    }

    // Validate temperature january
    $input_january = trim($_POST["january"]);
    if(empty($input_january)){
        $january_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_january))){
        $january_err = "Please enter a valid temperature.";
    } else{
        $january = $input_january;
    }

    // Validate temperature february
    $input_february = trim($_POST["february"]);
    if(empty($input_february)){
        $february_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_february))){
        $february_err = "Please enter a valid temperature.";
    } else{
        $february = $input_february;
    }
    
    // Validate temperature march
    $input_march = trim($_POST["march"]);
    if(empty($input_march)){
        $march_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_march))){
        $march_err = "Please enter a valid temperature.";
    } else{
        $march = $input_march;
    }
    
    // Validate temperature april
    $input_april = trim($_POST["april"]);
    if(empty($input_april)){
        $april_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_april))){
        $april_err = "Please enter a valid temperature.";
    } else{
        $april = $input_april;
    }
    
    // Validate temperature may
    $input_may = trim($_POST["may"]);
    if(empty($input_may)){
        $may_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_may))){
        $may_err = "Please enter a valid temperature.";
    } else{
        $may = $input_may;
    }
    
    // Validate temperature june
    $input_june = trim($_POST["june"]);
    if(empty($input_june)){
        $june_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_june))){
        $june_err = "Please enter a valid temperature.";
    } else{
        $june = $input_june;
    }
    
    // Validate temperature july
    $input_july = trim($_POST["july"]);
    if(empty($input_july)){
        $july_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_july))){
        $july_err = "Please enter a valid temperature.";
    } else{
        $july = $input_july;
    }
    
    // Validate temperature august
    $input_august = trim($_POST["august"]);
    if(empty($input_august)){
        $august_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_august))){
        $august_err = "Please enter a valid temperature.";
    } else{
        $august = $input_august;
    }
    
    // Validate temperature september
    $input_september = trim($_POST["september"]);
    if(empty($input_september)){
        $september_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_september))){
        $september_err = "Please enter a valid temperature.";
    } else{
        $september = $input_september;
    }
    
    // Validate temperature october
    $input_october = trim($_POST["october"]);
    if(empty($input_october)){
        $october_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_october))){
        $october_err = "Please enter a valid temperature.";
    } else{
        $october = $input_october;
    }
    
    // Validate temperature november
    $input_november = trim($_POST["november"]);
    if(empty($input_november)){
        $november_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_november))){
        $november_err = "Please enter a valid temperature.";
    } else{
        $november = $input_november;
    }
    
    // Validate temperature december
    $input_december = trim($_POST["december"]);
    if(empty($input_december)){
        $december_err = "Please enter a temperature.";
    } elseif(var_dump(is_float($input_december))){
        $december_err = "Please enter a valid temperature.";
    } else{
        $december = $input_december;
    }

    // Check input errors before inserting in database
    if(empty($year_err) && empty($january_err) && empty($february_err) && empty($march_err) && empty($april_err) && empty($may_err) && empty($june_err) && empty($july_err) && empty($august_err) && empty($september_err) && empty($october_err) && empty($november_err) && empty($december_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO months (year, january, february, march, april, may, june, july, august, september, october, november, december, id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iiiiiiiiiiiiii", $param_year, $param_january, $param_february, $param_march, $param_april, $param_may, $param_june, $param_july, $param_august, $param_september, $param_october, $param_november, $param_december, $param_id);
            
            // Set parameters
            $param_year = $year;
            $param_january = $january;
            $param_february = $february;
            $param_march = $march;
            $param_april = $april;
            $param_may = $may;
            $param_june = $june;
            $param_july = $july;
            $param_august = $august;
            $param_september = $september;
            $param_october = $october;
            $param_november = $november;
            $param_december = $december;
            $param_id = $id;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add temperature record per month to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($year_err)) ? 'has-error' : ''; ?>">
                            <label>year</label>
                            <input type="text" name="year" class="form-control" value="<?php echo $year; ?>">
                            <span class="help-block"><?php echo $year_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($january_err)) ? 'has-error' : ''; ?>">
                            <label>january</label>
                            <input type="text" name="january" class="form-control" value="<?php echo $january; ?>">
                            <span class="help-block"><?php echo $january_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($february_err)) ? 'has-error' : ''; ?>">
                            <label>february</label>
                            <input type="text" name="february" class="form-control" value="<?php echo $february; ?>">
                            <span class="help-block"><?php echo $february_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($march_err)) ? 'has-error' : ''; ?>">
                            <label>march</label>
                            <input type="text" name="march" class="form-control" value="<?php echo $march; ?>">
                            <span class="help-block"><?php echo $march_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($april_err)) ? 'has-error' : ''; ?>">
                            <label>april</label>
                            <input type="text" name="april" class="form-control" value="<?php echo $april; ?>">
                            <span class="help-block"><?php echo $april_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($may_err)) ? 'has-error' : ''; ?>">
                            <label>may</label>
                            <input type="text" name="may" class="form-control" value="<?php echo $may; ?>">
                            <span class="help-block"><?php echo $may_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($june_err)) ? 'has-error' : ''; ?>">
                            <label>june</label>
                            <input type="text" name="june" class="form-control" value="<?php echo $june; ?>">
                            <span class="help-block"><?php echo $june_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($july_err)) ? 'has-error' : ''; ?>">
                            <label>july</label>
                            <input type="text" name="july" class="form-control" value="<?php echo $july; ?>">
                            <span class="help-block"><?php echo $july_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($august_err)) ? 'has-error' : ''; ?>">
                            <label>august</label>
                            <input type="text" name="august" class="form-control" value="<?php echo $august; ?>">
                            <span class="help-block"><?php echo $august_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($september_err)) ? 'has-error' : ''; ?>">
                            <label>september</label>
                            <input type="text" name="september" class="form-control" value="<?php echo $september; ?>">
                            <span class="help-block"><?php echo $september_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($october_err)) ? 'has-error' : ''; ?>">
                            <label>october</label>
                            <input type="text" name="october" class="form-control" value="<?php echo $october; ?>">
                            <span class="help-block"><?php echo $october_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($november_err)) ? 'has-error' : ''; ?>">
                            <label>november</label>
                            <input type="text" name="november" class="form-control" value="<?php echo $november; ?>">
                            <span class="help-block"><?php echo $november_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($december_err)) ? 'has-error' : ''; ?>">
                            <label>december</label>
                            <input type="text" name="december" class="form-control" value="<?php echo $december; ?>">
                            <span class="help-block"><?php echo $december_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>