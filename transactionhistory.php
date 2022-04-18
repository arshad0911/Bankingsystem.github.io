<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body style="background-color :white;">
<?php
  include 'navbar.php';
?>
<h2 class="text-center pt-4" style="color:#007bff; height: 85px; background-color:pink;margin-top:-16px;">TRANSACTION HISTORY</h2>
<br>
<div class="container">
    <div class="table-responsive-sm">
       <table class="table table-hover table-striped table-condensed table-dark table-bordered">
            <thead style="color : white;">
                <tr>
                  <th class="text-center">S.No.</th>
                  <th class="text-center">Sender</th>
                  <th class="text-center">Receiver</th>
                  <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
               </tr>
            </thead>
        <tbody>
        <?php
            include 'config.php';
            $sql ="SELECT * FROM transaction";
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
        <tr style="color : white;">
            <td class="py-2"><?php echo $rows['s_no']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2">Rs. <?php echo $rows['balance']; ?> /-</td>
            <td class="py-2"><?php echo $rows['date_time']; ?> </td>        
        <?php
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
<footer class="text-center mt-5 py-2" style="background-color : grey; height:70px; border:1px solid black;">
            <p style="color:white;margin-top:10px;">&copy; 2022 Made by <b>ARSHAD ANSARI</b></p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>