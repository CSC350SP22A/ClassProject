<?php

$conn=mysqli_connect("localhost","root","root","groupa");

if(!$conn) die("not connnected");

    if($_POST['Habitat']=='L'):
		$sql = "INSERT INTO animal (AnimalType, habitat) VALUES ('".$_POST['AnimalType']."','land')";
    elseif ($_POST['Habitat']=='S'):
        $sql = "INSERT INTO animal (AnimalType, habitat) VALUES ('".$_POST['AnimalType']."','sea')";
	elseif ($_POST['Habitat']=='A'):
		$sql = "INSERT INTO animal (AnimalType, habitat) VALUES ('".$_POST['AnimalType']."','air')";
	endif;          
$result = mysqli_query($conn, $sql);

if($result){
    echo "inserted";
}else{
echo "not inserted";}
?>
