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
                <label for="adr">Address:</label>
                <input type="text" id="adr" name="adr" required>
            </div>

            <div class="input_field">
                <input type="submit" value="Send Request" class="button" name="send_btn">
            </div>
        </form>
    </div>
</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connection.php");

if(isset($_POST['send_btn']))
{
    $request    = $_POST['request'];
    $quantity   = $_POST['quantity'];
    $ngoName    = $_POST['ngoName'];
    $ngoID      = $_POST['ngoID'];
    $adr        = $_POST['adr'];

    $QUERY = "INSERT INTO donation_request (request, quantity, ngoName, ngoID, adr) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connec->prepare($QUERY);
    $stmt->bind_param("sssss", $request, $quantity, $ngoName, $ngoID, $adr);
    $stmt->execute();

    if($stmt->affected_rows > 0)
    {
        //echo "Data is inserted";
    }
    else {
        echo "Failed to insert data into the database";
    }
}
?>