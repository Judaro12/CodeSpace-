<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Emerald sign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
</head>
<style>
   
    h1{
        font-family: 'Allura';font-size: 120px;
        color: rgb(130, 128, 128); 
        
    }
    h2{
        
        color: rgb(70, 101, 77);
    }
    tr {text-align: center;
       
        
    }
    td {
            text-align: center;
            vertical-align: middle; /* For vertical centering */
        }
        /* Ensure buttons are displayed inline */
        a > button {
            margin: 0 auto; /* Centering buttons if needed */
            display: inline-block; /* Display buttons in-line */
        }
    
</style>
<body>

<?php
        // Include your database connection file
        include 'connect_dtb.php';

?>

    <div class="container my-5">
    <h1 style="text-align: center;">The Emerald Sign</h1>
    <h2 style="text-align: center;">ITEM'S LIST</h2>


        <a class="btn btn-outline-success mb-3 btn-lg" href="create_form.php" role="button" class="addMore" title="New">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                <path d="m.5 3 .04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98z"/>
                <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5"/>
            </svg>   
        New</a>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>

                </tr>
                
            </thead>
            <tbody>
            <?php 
                // Query to fetch records from the database
                $q = "SELECT * FROM products;";
                $r = mysqli_query($link, $q);

                // Check if there are any records returned
                if (mysqli_num_rows($r) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($r)) {
                        
                        $relative_path = "../uploads/" . $row["item_img"];
                        echo"
                        <tr id='displayItems'>
                            <td>" . htmlspecialchars($row["item_id"]) . "</td>
                            <td>" . htmlspecialchars($row["item_name"]) . "</td>
                            <td>" . htmlspecialchars($row["item_desc"]) . "</td>
                            <td><img src='" . htmlspecialchars($relative_path) . "' alt='Product Image' class='rounded mx-auto d-block' width='200' height='200 '></td>
                            <td>" . "£" . htmlspecialchars($row["item_price"]) . "</td>
                            <td id='bttn'>
                            <a type='button' href='update_form.php?item_id={$row['item_id']}' class='btn btn-outline-secondary btn-lg' 'addMore' title='Update'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='26' height='26' fill='currentColor' class='bi bi-arrow-up-circle' viewBox='0 0 16 16'>
                                <path fill-rule='evenodd' d='M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z'/>
                            </svg>
                            </a>
                            
                            <a href='delete.php?item_id={$row['item_id']}' class='btn btn-outline-danger btn-lg' 'addMore' title='Delete' onclick='return confirm(\"Are you sure you want to delete this item?\");'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='26' height='26' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                            </svg>                            
                            </a>
                            </td>
                        </tr>";
                        
                    }
                    
                } else {
                    echo "0 results";
                }
                
                // Close the connection
                mysqli_close($link);
                ?>
                


            </tbody>
                            
        </table>
        
            <div>
                <a href="read.php">
                <img src="..\Img\emeralFooter.png" class="float-start ms-0" width="1300"  id="footerImage">
                </a>       
            </div>
            
                
    </div>   





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
