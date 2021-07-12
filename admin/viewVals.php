<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <title>Document</title>
    <style>
    .modal {
        display: fixed;
        margin: auto;
        width: 80%;
        padding-top: 100px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 8px;

    }

    #overlay {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Create Valuators</a>
                        </li>
                        <div style="margin-right:0; position:relative; left:980px">
                            <li class="nav-item">
                                <button class="btn btn-success" onclick="window.print()" href="#"><i
                                        class="fas fa-print fa-2x"></i></button>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <!-- Background image -->
    </header>
    <?php
    $numberPlate = $_GET['numberPlate'];

include ("../configure/connect.php");
$sql = "SELECT * FROM valuation_score where numberPlate = 	
'$numberPlate'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $dataPoints = array(
     array("y" => $row["body"], "label" => "Body" ),
     array("y" => $row["suspension"], "label" => "Suspension" ),
     array("y" => $row["brake"], "label" => "Brakes" ),
     array("y" => $row["engine"], "label" => "Engine" ),
     
     
 );
$value = (($row['totalScore'] / 20) * $row['priceNewCar']);
echo '<div class= "container" style="padding-top:60px;">
<div class="card text-center">
 <div class="card-header">Valuation for '.$numberPlate.'</div>
 <div class="card-body">
     <h5 class="card-title">Ksh. '.$value.'</h5>
     <p class="card-text">
         This cars value should not exceed this price.
     </p>
     <a href="index.php" class="btn btn-primary">Back</a>
 </div>
 <div class="card-footer text-muted">2 days ago</div>
</div>
<div class="card text-white bg-primary mb-3" style="max-width: 60 rem;">
  <div class="card-header">Engine</div>
  <div class="card-body">
    <h5 class="card-title">The Valuator entered the following details</h5>
    <p class="card-text">
    '.$row["engineDetails"].'.
    </p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 60 rem;">
  <div class="card-header">Suspension</div>
  <div class="card-body">
  <h5 class="card-title">The Valuator entered the following details</h5>    <p class="card-text">
  '.$row["suspensionDetails"].'.
    </p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 60 rem;">
  <div class="card-header">Brake</div>
  <div class="card-body">
  <h5 class="card-title">The Valuator entered the following details</h5>    <p class="card-text">
  '.$row["brakeDetails"].'.
    </p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 60 rem;">
  <div class="card-header">Body</div>
  <div class="card-body">
  <h5 class="card-title">The Valuator entered the following details</h5>    <p class="card-text">
  '.$row["bodyDetails"].'.
    </p>
  </div>
</div>
</div>
</div>';
    }

}else {
    echo "Wrong";
}
  
 ?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Car Performance"
                },
                axisY: {
                    title: "Car Parts"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.## score",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
        </script>
    </head>

    <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    </body>

    </html>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>


</body>

</html>