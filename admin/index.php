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
                                <a class="nav-link" href="#"><i class="fas fa-user fa-2x"></i></a>
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
    <div class="active" id="overlay">
        <div class="card" id="nw">
            <div class="container" style="padding-top:80px;" id="nw">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Id</th>
                            <th scope="col">Number Plate</th>
                            <th scope="col">Car Make</th>
                            <th scope="col">Car Model</th>
                            <th scope="col">Year of Manufacture</th>
                            <th scope="col">Milage</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                include ("../configure/connect.php");
                    $sql = "SELECT * FROM carDetails";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<tr class="table-danger">
                        <td>' . $row["carId"]. ' </td>
                        <td>' . $row["carNumberPlate"]. ' </td>
                        <td>' . $row["carMake"]. ' </td>
                        <td>' . $row["carModel"]. ' </td>
                        <td>' . $row["carYearManfucture"]. ' </td>
                        <td>' . $row["carMilage"]. ' </td>
                        <td><a href="viewVals.php?numberPlate=' . $row["carNumberPlate"]. '" class="btn btn-success" onclick="myFunction()">View</a></td>
                    </tr>';
                    $numberPlate = $row["carNumberPlate"];
                    }
                    
                    } else {
                    echo "0 results";
                    }

                
?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script>
    // Get the modal
    let modal = document.getElementById("myModal");
    let overlay = document.getElementById("overlay");
    let nw = document.getElementById("nw");

    // Get the button that opens the modal

    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("btn-close")[0];

    // When the user clicks the button, open the modal 
    function myFunction() {
        modal.style.display = "block";
        nw.style.backgroundColor = "gray";



    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        nw.style.backgroundColor = "white";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</body>

</html>