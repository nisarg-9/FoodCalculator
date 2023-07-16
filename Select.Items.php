<?php

$uniqueId = $_GET['id'];
$NoOfPeople = $_GET['NoOfPeople'];
$ItemsCount = $_GET['ItemsCount'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodCalculator | Select Items</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="CSS/style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="Container BG-2">
        <div class="card border-0 MyCard">
            <div class="card-body">
                <div class="d-flex align-item-center justify-content-center mt-3">
                    <img height="50" src="Img/FoodCalculator.svg" alt="FoodCalculator" />
                    <h2 class="m-2 FW-700-Poppins text-success">FoodCalculator</h2>
                </div>

                <form action="PHP/result.php?id=<?php echo $uniqueId . "& NoOfPeople=" . $NoOfPeople . "& ItemsCount=" . $ItemsCount ?>" method="POST">
                    <div class="Choice">
                        <div class="checkbox">
                            <input name="items" value="1" type="radio" id="Tandoori" />
                            <label for="Tandoori">
                                <img src="https://www.cookwithmanali.com/wp-content/uploads/2021/07/Tandoori-Roti-768x1164.jpg" alt="Checkbox Image" />
                            </label>
                        </div>

                        <div class="checkbox">
                            <input name="items" value="2" type="radio" id="Manchurian" />
                            <label for="Manchurian">
                                <img src="https://www.nehascookbook.com/wp-content/uploads/2021/01/Gravy-manchurian-WS-768x432.jpg" alt="Checkbox Image" />
                            </label>
                        </div>

                        <div class="checkbox">
                            <input name="items" value="3" type="radio" id="Naan" />
                            <label for="Naan">
                                <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2022/12/garlic-naan-1.jpg" alt="Checkbox Image" />
                            </label>
                        </div>
                    </div>

                    <div class="Choice">
                        <div class="checkbox">
                            <input name="items" value="4" type="radio" id="Sandwich" />
                            <label for="Sandwich">
                                <img src="https://insanelygoodrecipes.com/wp-content/uploads/2021/03/Grilled-Cheese-and-Tomato-Sandwich-768x1152.webp" alt="Checkbox Image" />
                            </label>
                        </div>

                        <div class="checkbox">
                            <input name="items" value="5" type="radio" id="Pavbhaji" />
                            <label for="Pavbhaji">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj8fiUZaNsvq8RujdC8xGHOpdXrD8k649auk0FrAhVxgA15VjMq2RHjERODh8z17FC_kU&usqp=CAU" alt="Checkbox Image" />
                            </label>
                        </div>

                        <div class="checkbox">
                            <input name="items" value="6" type="radio" id="Nuudles" />
                            <label for="Nuudles">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkT9AlzPcHCsg6E0Gbk1J7yfCW-PwPndm4a3tosqX80cIs4kQN4IKU1CI-kM2GSBvA5Fs&usqp=CAU" alt="Checkbox Image" />
                            </label>
                        </div>
                    </div>

                    <div class="Choice">
                        <div class="checkbox">
                            <input name="items" value="7" type="radio" id="Dabeli" />
                            <label for="Dabeli">
                                <img src="https://assets.cntraveller.in/photos/60ba26c0bfe773a828a47146/4:3/w_1440,h_1080,c_limit/Burgers-Mumbai-Delivery.jpg" alt="Checkbox Image" />
                            </label>
                        </div>

                        <div class="checkbox">
                            <input name="items" value="8" type="radio" id="Sabji" />
                            <label for="Sabji">
                                <img src="https://cdn1.foodviva.com/static-content/food-images/curry-recipes/paneer-butter-masala-recipe/paneer-butter-masala-recipe.jpg" alt="Checkbox Image" />
                            </label>
                        </div>

                        <div class="checkbox">
                            <input name="items" value="9" type="radio" id="Vadapav" />
                            <label for="Vadapav">
                                <img src="https://www.cookwithmanali.com/wp-content/uploads/2018/04/Vada-Pav-500x500.jpg" alt="Checkbox Image" />
                            </label>
                        </div>
                    </div>


                    <div class="text-center mt-4">
                        <a href="No.Of.Person.php?id=<?php echo $uniqueId; ?>" class="btn btn-secondary px-4 py-2 rounded-5 mt-5 me-2" role="button">Back</a>
                        <input class="btn btn-success px-5 py-2 rounded-5 mt-5" type="submit" value="Continue" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>