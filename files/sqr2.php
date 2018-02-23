<?php
function sqr2($z)
{
	$math = $z * $z;
	return $math;
}
?>
<form action="" name="sqr2" method="post">
<table>
	<tbody>
		<tr>
			<td>Introdu numarul pentru calculare:</td>
			<td><input type="text" name="a" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Calculeaza" name="sqr2" /></td>
			<td><input type="reset" value="Reseteaza" name="reset" /></td>
		</tr>
	</tbody>
</table>
</form>

<?php

if(isset($_POST['sqr2']) == 'Calculeaza')
{
	echo sqr2($_POST['a']);
}
else
{
	echo 'Apasa pe butonul "Calculeaza"!';
}
?>