<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>quze</title>
</head>
<body>

    <div class="container">
        <div class="box">
            <div>
            <?php
                if (isset($_POST['number'])) {
                    if ($_POST['number'] < 0) {
                        echo "
                        <div class='error'>
                        <h1>please enter a positive number</h1>
                        <br>
                        <a class='btn' href='index.php'>Back</a>
                        </div>
                        ";

                        exit;
                    }
                    $number = $_POST['number'];
                    $year =$number / 365;
                    $month = ($number % 365) / 30;
                    $day = ($number % 365) % 30;

                    echo "<h2>year : " . (int) $year  ."</h2>
                        <h2>month : "  .(int) $month ."</h2>
                        <h2>day : " .(int) $day ."</h2> <br> ";
                }
                ?>
            </div>
            <!-- فورم تحويل الارقام الى نسين وشهور وايام -->
            <form class="form" action="" method="post">              
                <input class="input" type="number" name="number" placeholder="Enter number to convert">
                <input class="submit" type="submit" value="أحسب">
            </form>
        </div>

    </div>

</body>
</html>