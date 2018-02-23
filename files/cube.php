<?php

function cube($z)
{
	$math = $z * $z * $z;
	return $math;
}

?>

<form action="" name="cube" method="post">
<table>
	<tbody>
		<tr>
			<td>Introdu numarul pentru calculare:</td>
			<td><input type="text" name="a" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Calculeaza" name="cube" /></td>
			<td><input type="reset" value="Reseteaza" name="reset" /></td>
		</tr>
	</tbody>
</table>
</form>

<?php

if(isset($_POST['cube']) == 'Calculeaza')
{
	echo cube($_POST['a']);
}
else
{
	echo 'Apasa pe butonul "Calculeaza"!';
}
?>