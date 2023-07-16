<?php

$uniqueId = $_GET['id'];
$NoOfPeople = $_GET['NoOfPeople'];
$NoOfPeople *= 2;
$Item = $_GET['Item'];
$Quantity = $_GET['Quantity'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodCalculator | Result</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="CSS/style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="Container BG-3">
        <div class="card border-0 MyCard">
            <div class="card-body">
                <div class="d-flex align-item-center justify-content-center mt-3">
                    <img height="50" src="Img/FoodCalculator.svg" alt="FoodCalculator" />
                    <h2 class="m-2 FW-700-Poppins text-success">FoodCalculator</h2>
                </div>

                <div class="MyResult card my-5">
                    <div class="card-header">
                        <b>Result</b>
                    </div>
                    <div class="card-body">
                        <?php
                            echo $Quantity;
                            echo " ";
                            echo $Item;
                            echo " you need for ";
                            echo $NoOfPeople;
                            echo " people.";
                            echo "<br>"
                        ?>
                    </div>
                </div>

                <div class="text-center">
                    <a href="index.php" class="btn btn-success px-4 py-2 rounded-5 me-2" role="button">Back to Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>