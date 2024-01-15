<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Donation Requests</title>
    <link rel="stylesheet" href="/StylesForAll/donation_style.css">
</head>
<body>
    <div class="container">
        <h1>NGO Donation Requests</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="request">Request:</label>
                <input type="text" id="request" name="request" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity" required>
            </div>

            <div class="form-group">
                <label for="ngoName">NGO Name:</label>
                <input type="text" id="ngoName" name="ngoName" required>
            </div>

            <div class="form-group">
                <label for="ngoID">NGO ID:</label>
                <input type="text" id="ngoID" name="ngoID" required>
            </div>

            <div class="form-group">
                <label for="message">Enter Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>

            <div class="input_field">
                <input type="submit" value="Send Request" class="button" name="send_btn">
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if($_POST['send_btn'])
    {
        $request    = $_POST['request'];
        $quantity   = $_POST['quantity'];
        $ngoName    = $_POST['ngoName'];
        $ngoID      = $_POST['ngoID'];
        $message    = $_POST['message'];

        $QUERY = "INSERT INTO donation_request values('$request','$quantity','$ngoName','$ngoID','$message')";
        $data = mysqli_query($connec,$QUERY);

        if($data)
        {
            //echo "data is inserted";
        }
        else {
            echo "failed to insert data to database";
        }
    }
?>
