<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Emeral Sign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
</head>
<style>
    body{
        background-color: rgb(218, 216, 214);
        
    }
    h1{
        font-family: 'Allura';font-size: 120px;
        color: rgb(130, 128, 128); 
    }
    h2{
        
        color: rgb(70, 101, 77);
    }
</style>
  <body>
    

 <!--  using my h1 and h2 to create a header of my form page -->

        <div class="container my-5">
        <h1 style="text-align: center;">The Emerald Sign</h1>
        <h2 style="text-align: center;">CREATE NEW FORM</h2>


            <a class="btn btn-outline-success mb-3 btn-lg" href="read.php" role="button" class="addMore" title="New">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                </svg>   
            HOME</a>
        <!-- creating a form to be able to enter information,
        -----Form Attributes----
        !!!! action="#" is where the data needs to be submitted 
        !!!! method="#" can be Post or GET, short words POST data doesnt show in the URL, GET does
        !!!! enctype="#" how to data should be encoded- using multipart/form-data as im including type=files -->
        <form action="create.php" method="post" enctype="multipart/form-data">

        
        <div class="mb-3">
        
                <label for="item_name" class="form-label">Name </label>
                <div class="input-group">

                    <!--using input type=text and assigning the name="" with the variable i will send, in this case item_name (same name given in SQL) 
                    !!! required= attribute is to indicate the the input field must be filled out before the form can be submitted
                    the PHP code is to post the data and preserve the value that has been entered, just in case there is a error, the data doesnt have to be re entered.   -->
                    <input type="text" placeholder="Enter item's name" class="form-control" id="item_name" name="item_name"
                    required value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?>">
                    <!-- if isset"the value has is filled "($_POST array variable using post method (item_name)) -->
                </div>   
            </div>
            
            <div class="mb-3">
                <label for="item_desc" class="form-label">Description </label>
                <div class="input-group">   
                    <textarea type="text" class="form-control" placeholder="Enter a description of the item" id="item_desc" name="item_desc"
                    required value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>"></textarea>
                
                </div>   
            </div>

            <div class="mb-3">
                <label for="item_img" class="form-label">Image </label>
                <div class="input-group">
                        <!-- for image i keep everything almost the same only updating the names 
                        only chaging the TYPE= to FILE as its a image -->
                    <input type="file" class="form-control" placeholder="Enter file's name" id="item_img" name="item_img"
                    required value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>">

                </div>   
            </div>

            <div class="mb-3">
                <label for="item_price">Price </label>
                <div class="input-group">
                    <input type="number" placeholder="Enter price" class="form-control" id="item_price" name="item_price" min="0" step="0.01" 
                    required value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>">

                </div>   
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
                <a href="read.php">
                    <img src="../Img/emeralFooter.png" class="float-start ms-0" width="1300"  id="footerImage">
                </a>
            
            
                
            
        </form>
            
        </div>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>