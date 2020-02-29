if (isset($_POST['submit']))
{
    //check to see all fields have been completed
  $User = $_POST['User'];
  $Pass = Password_hash($_POST['Pass'],PassWORD_DEFAULT);
    // create sql query to add the comment
    $query = "INSERT INTO loginform (User, Pass) VALUES ('$User','$Pass')";
    $result = $db->query($query);

    if ($result){
        echo ' User inserted into database.<a href="index.php">Back to cart</a>';
	}
	else{
	echo "error";
}

    $db->close();
}