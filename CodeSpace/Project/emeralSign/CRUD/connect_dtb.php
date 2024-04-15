
<?php 

# Connect  on 'localhost' for my SQL codeSpace data

$link = mysqli_connect('localhost','root','','codespace'); 

if (!$link) { 

# Otherwise fail and explain the error. 

die('Could not connect to MySQL: ' . mysqli_error()); 

} 

echo 'Connected to the database successfully!';  

?> 
