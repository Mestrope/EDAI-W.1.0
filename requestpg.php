<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Donation Requests</title>
    <link rel="stylesheet" href="donation_style.css">
</head>
<body>
    <div class="container">
        <h1>NGO Donation Requests</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label>Request:</label>
                <input type="text" id="request" name="request" required>
            </div>

            <div class="form-group">
                <label>Quantity:</label>
                <input type="text" id="quantity" name="quantity" required>
            </div>

            <div class="form-group">
                <label>NGO Name:</label>
                <input type="text" id="ngoName" name="ngoName" required>
            </div>

            <div class="form-group">
                <label>NGO ID:</label>
                <input type="text" id="ngoID" name="ngoID" required>
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

        $QUERY = "INSERT INTO donation_request values('$request','$quantity','$ngoName','$ngoID')";
        $data = mysqli_query($connec,$QUERY);

        if($data)
        {
            //echo "data is inserted";
        }
        else {
            echo "failed to insert data to databse";
        }
    }
?>
