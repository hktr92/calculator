<?php

function powten($z)
{
	$math = 10 * $z;
	return $math;
}

?>

<form action="" name="power" method="post">
<table>
	<tbody>
		<tr>
			<td>Introdu numarul pentru calculare:</td>
			<td><input type="text" name="a" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Calculeaza" name="power" /></td>
			<td><input type="reset" value="Reseteaza" name="reset" /></td>
		</tr>
	</tbody>
</table>
</form>

<?php

if(isset($_POST['power']) == 'Calculeaza')
{
	echo powten($_POST['a']);
}
else
{
	echo 'Apasa pe butonul "Calculeaza"!';
}
?>