<?php

function minus($z1, $z2)
{
	$math = $z1 - $z2;
	return $math;
}

?>

<form action="" name="rem" method="post">
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
			<td><input type="submit" value="Calculeaza" name="rem" /></td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>
</form>

<?php

if(isset($_POST['rem']) == 'Calculeaza')
{
	echo minus($_POST['a'], $_POST['b']);
}
else
{
	echo 'Apasa pe butonul "Calculeaza"!';
}

?>