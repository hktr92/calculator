<?php

$header = include('header.php');

if(isset($_GET['page']) && !empty($_GET['page']))
{
	switch($_GET['page'])
	{
		default:
			include('files/home.php');
			break;
		case 'add':
			include('files/add.php');
			break;
		case 'rem':
			include('files/rem.php');
			break;
		case 'multiply':
			include('files/multiply.php');
			break;
		case 'division':
			include('files/division.php');
			break;
		case 'power':
			include('files/power.php');
			break;
		case 'sqr2':
			include('files/sqr2.php');
			break;
		case 'sqry':
			include('files/sqry.php');
			break;
		case 'cube':
			include('files/cube.php');
			break;
		case 'sqrt':
			include('files/sqrt.php');
			break;
	}
}

$footer = include('footer.php');
?>

