<form action="" name="sqrt" method="post">
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
	$math = sqrt($_POST['a']);
	echo $math;
}
else
{
	echo 'Apasa pe butonul "Calculeaza"!';
}
?>