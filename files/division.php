<?php

function division($z1, $z2)
{
	$math = $z1 / $z2;
	return $math;
}

?>

<form action="" name="division" method="post">
<table>
	<tbody>
		<tr>
			<td>Introdu primul numar:</td>
			<td><input type="text" name="a" /></td>
		</tr>
		<tr>
			<td>Introdu al doilea numar:</td>
			<td><input type="text" name="b" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Calculeaza" name="division" /></td>
			<td><input type="reset" value="Reseteaza" name="reset" /></td>
		</tr>
	</tbody>
</table>
</form>

<?php

if(isset($_POST['division']) == 'Calculeaza')
{
	echo division($_POST['a'], $_POST['b']);
}
else
{
	echo 'Apasa pe butonul "Calculeaza"!';
}
?>