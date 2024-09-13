<?php
$db = new mysqli("localhost","root","","app");
if($db -> connect_error)
{
	echo "Database Not Connected";
}
else{
	$id = $_POST['id'];
	$show_data = "SELECT * FROM user WHERE id='$id'";
	$response = $db->query($show_data);
	if($response -> num_rows != 0)
	{
		while($data = $response -> fetch_assoc())
		{
			echo "<tr>
				<td>".$data['id']."</td>
				<td>".$data['full_name']."</td>
				<td>".$data['username']."</td>
				<td>".$data['password']."</td>
				<td>".$data['reg_date']."</td>
			</tr>";
		}
	}
	
	else{
		echo "No Data Found";
	}
} 
?>
