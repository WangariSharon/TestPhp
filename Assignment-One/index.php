<?php require 'array_list.php';
	  
/*echo "<pre>";
var_dump($My_Array);*/

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="var/www/Assignment-One/main.css">
 <head>Friends</head>
<body>
	<section>
	<table>
		<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Phone Number</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($My_Array as $MyArray): ?>
		<tr>
			<td> <?=$MyArray['name'] ?></td>
			<td> <?=$MyArray['age'] ?> </td>
			<td> <?=$MyArray['phone_number'] ?></td>

		</tr>
	<?php endforeach ?>
	</tbody>
	</table>
</section>

</body>
</html>