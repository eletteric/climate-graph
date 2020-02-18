<!DOCTYPE html>

<?php
include "includes/database.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>SVG Graph</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</head>

<body id="body">
<div class="col-md-6">
    <svg version="1.1" width="100%" height="100%" viewBox="-10 -50 130 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <!-- horizontal lines-->

        <line x1="0" y1="50" x2="120" y2="50" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="40" x2="120" y2="40" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="30" x2="120" y2="30" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="20" x2="120" y2="20" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="10" x2="120" y2="10" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="0" x2="120" y2="0" stroke="grey" stroke-width="0.5" />
        <line x1="0" y1="-10" x2="120" y2="-10" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="-20" x2="120" y2="-20" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="-30" x2="120" y2="-30" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="-40" x2="120" y2="-40" stroke="grey" stroke-width="0.2" />
        <line x1="0" y1="-50" x2="120" y2="-50" stroke="grey" stroke-width="0.2" />

        <!-- vertical lines-->
        <line x1="0" y1="50" x2="0" y2="-50" stroke="grey" stroke-width="0.5" />
        <line x1="10" y1="50" x2="10" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="20" y1="50" x2="20" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="30" y1="50" x2="30" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="40" y1="50" x2="40" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="50" y1="50" x2="50" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="60" y1="50" x2="60" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="70" y1="50" x2="70" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="80" y1="50" x2="80" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="90" y1="50" x2="90" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="100" y1="50" x2="100" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="110" y1="50" x2="110" y2="-50" stroke="grey" stroke-width="0.2" />
        <line x1="120" y1="50" x2="120" y2="-50" stroke="grey" stroke-width="0.2" />

        <text x="-55" y="0" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">january</text>
        <text x="-55" y="10" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">february</text>
        <text x="-55" y="20" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">march</text>
        <text x="-55" y="30" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">april</text>
        <text x="-55" y="40" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">may</text>
        <text x="-55" y="50" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">june</text>
        <text x="-55" y="60" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">july</text>
        <text x="-55" y="70" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">august</text>
        <text x="-55" y="80" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">september</text>
        <text x="-55" y="90" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">october</text>
        <text x="-55" y="100" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">november</text>
        <text x="-55" y="110" font-size="3" fill="grey" text-align="right" text-anchor="end" transform="rotate(-90)"
            text-anchor="start">december</text>

        <text x="-8" y="50" font-size="3" writing-mode="lr" text-anchor="start" fill="grey">-50</text>
        <text x="-8" y="40" font-size="3" writing-mode="lr" text-anchor="start" fill="grey">-40</text>
        <text x="-8" y="30" font-size="3" writing-mode="lr" text-anchor="start" fill="grey">-30</text>
        <text x="-8" y="20" font-size="3" writing-mode="lr" text-anchor="start" fill="grey">-20</text>
        <text x="-8" y="10" font-size="3" writing-mode="lr" text-anchor="start" fill="grey">-10</text>
        <text x="-8" y="0" font-size="3" writing-mode="lr" text-anchor="start" fill=" grey">0</text>
        <text x="-8" y="-10" font-size="3" writing-mode="lr" text-anchor="start" fill=" grey">10</text>
        <text x="-8" y="-20" font-size="3" writing-mode="lr" text-anchor="start" fill=" grey">20</text>
        <text x="-8" y="-30" font-size="3" writing-mode="lr" text-anchor="start" fill=" grey">30</text>
        <text x="-8" y="-40" font-size="3" writing-mode="lr" text-anchor="start" fill=" grey">40</text>
        <text x="-8" y="-50" font-size="3" writing-mode="lr" text-anchor="start" fill=" grey">50</text>


        <polyline points="0,-3 10,-6 20,-8 30,-11 40,-12 50,-18 60,-18 70,-19 80,-18 90,-16 100,-14 110,-12 120,-10"
            stroke="red" fill="transparent">
            <animate id="maxTemp" begin="indefinite" dur="2s" repeatCount="1" attributeName="points"
                restart="whenNotActive" fill="freeze"
                to="0,-10 10,-50 20,-30 30,20 40,-15 50,-18 60,-18 70,-19 80,-18 90,-16 100,-14 110,-12 120,-10" />
        </polyline>


    </svg>
    </div>
    <button type="submit" onclick="executeFunction()">next year</button>

    <div class="fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Temperature Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New record</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM months";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped' id='tempTable'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>id</th>";
                                        echo "<th>Year</th>";
                                        echo "<th>january</th>";
                                        echo "<th>february</th>";
                                        echo "<th>march</th>";
                                        echo "<th>april</th>";
                                        echo "<th>may</th>";
                                        echo "<th>june</th>";
                                        echo "<th>july</th>";
                                        echo "<th>august</th>";
                                        echo "<th>september</th>";
                                        echo "<th>october</th>";
                                        echo "<th>november</th>";
                                        echo "<th>december</th>";
                                        echo "<th>edit</th>";

                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td class='id'>" . $row['id'] . "</td>";
                                        echo "<td class='year'>" . $row['year'] . "</td>";
                                        echo "<td class='january'>" . $row['january'] . "</td>";
                                        echo "<td class='february'>" . $row['february'] . "</td>";
                                        echo "<td class='march'>" . $row['march'] . "</td>";
                                        echo "<td class='april'>" . $row['april'] . "</td>";
                                        echo "<td class='may'>" . $row['may'] . "</td>";
                                        echo "<td class='june'>" . $row['june'] . "</td>";
                                        echo "<td class='july'>" . $row['july'] . "</td>";
                                        echo "<td class='august'>" . $row['august'] . "</td>";
                                        echo "<td class='september'>" . $row['september'] . "</td>";
                                        echo "<td class='october'>" . $row['october'] . "</td>";
                                        echo "<td class='november'>" . $row['november'] . "</td>";
                                        echo "<td class='december'>" . $row['december'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";

                            
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <button onclick="getTheValues()">get the values</button>
    <script src="main.js"></script>
</body>

</html>