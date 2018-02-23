<?php
function sqry($z1, $z2)
{
	$math = $z1 * $z2;
	return $math;
}
?>
<form action="" name="sqry" method="post">
<table>
	<tbody>
		<tr>
			<td>Introdu numarul pentru calculare:</td>
			<td><input type="text" name="a" /></td>
		</tr>
		<tr>
			<td>Introdu puterea:</td>
			<td><input type="text" name="b" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Calculeaza" name="sqry" /></td>
			<td><input type="reset" value="Reseteaza" name="reset" /></td>
		</tr>
	</tbody>
</table>
</form>

<?php

if(isset($_POST['sqry']) == 'Calculeaza')
{
	echo sqry($_POST['a'], $_POST['b']);
}
else
{
	echo 'Apasa pe butonul "Calculeaza"!';
}
?>