<?php

$uniqueId = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodCalculator | No. of Persons</title>

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

                <form method="POST" action="PHP/Add.People.Count.php?id=<?php echo $uniqueId; ?>">
                    <div class="NoOf">
                        <div class="d-block w-50 m-auto">
                            <div class="form-floating w-100">
                                <input type="text" name="NoOfPeople" class="form-control" id="floatingInput" placeholder="Number of Persons">
                                <label for="floatingInput">Number of Persons</label>
                            </div>
                            <div class="form-floating w-100 mt-3">
                                <input type="text" name="ItemsCount" class="form-control" id="floatingInput" placeholder="Number of Item">
                                <label for="floatingInput">Number of Item</label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="index.php" class="btn btn-secondary px-4 py-2 rounded-5 mt-5 me-2" role="button">Back</a>
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-5 mt-5 me-2">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>