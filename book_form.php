<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $card_number = $_POST['card_number'];
    $card_holder = $_POST['card_holder'];
    $expiration_mm = $_POST['expiration_mm'];
    $expiration_yy = $_POST['expiration_yy'];
    $cvv = $_POST['cvv'];
    $movie_name = $_POST['movie_name'];
    $food = $_POST['food'];
   
    $stmt = $conn->prepare("INSERT INTO booking_form(CARD_NUMBER , CARD_HOLDER , EXPIRATION_MM, EXPIRATION_YY, CVV, SELECT_YOUR_SNACKS, movie_name)
                VALUES(?, ?, ?, ?, ? ,? , ? );");

    $stmt->bind_param("isssiss", $card_number,$card_holder, $expiration_mm, $expiration_yy, $cvv, $food,$movie_name);
    $stmt->execute();
}
$conn->close();
//مجديdd
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="image/chip.png" alt="">
                <img src="image/visa.png" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="image/visa.png" alt="">
            </div>
        </div>

    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="inputBox">
            <span>card number</span>
            <input type="text" maxlength="16" class="card-number-input" name="card_number" required>
        </div>
        <div class="inputBox">
            <span>card holder</span>
            <input type="text" maxlength="25" class="card-holder-input" name="card_holder" required>
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration mm</span>
                <select name="expiration_mm" id="" class="month-input" required>
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>expiration yy</span>
                <select name="expiration_yy" id="" class="year-input" required>
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" class="cvv-input" name ="cvv" required>
            </div>
        </div>
        <div class="inputBox">
            <span>MOVIE NAME</span>
            <select name="movie_name" id="" class="year-input" required>
                <option value="Movie Name" selected disabled>Movie Name</option>
                <option value="Black Panther: Wakanda Forever">Black Panther: Wakanda Forever</option>
                <option value="Avatar: The Way Of Water">Avatar: The Way Of Water</option>
                <option value="The Menu">The Menu</option>
                <option value="Elvis">Elvis</option>
                <option value="Everything Everywhere All At Once">Everything Everywhere All At Once</option>
                <option value="Black Adam">Black Adam</option>
            </select>
        </div>
        <div class="inputBox">
            <span>Select your snacks</span>
            <select name="food" id="" class="year-input" required> 
                <option value="food" selected disabled>FOOD & DRINKS </option>
                <option value="Popcorn Large">Popcorn Large 7.5$</option>
                <option value="Popcorn Medium">Popcorn Medium 5$</option>
                <option value="Popcorn Small">Popcorn Small 2.5$</option>
                <option value="Spiro Spathis"> Spiro Spathis 20$</option>
            </select>
        </div>

        <input type="submit" value="submit" class="submit-btn" name="insert">
    </form>

</div>    
    





<script>

document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}

document.querySelector('.cvv-input').onmouseenter = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}



</script>







</body>
</html>