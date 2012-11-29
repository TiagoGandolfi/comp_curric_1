<?php

	mysql_connect("localhost","root","") or
	die (msql_error());

	mysql_select_db("teste_php") or die (msql_error());

	$sql = "INSERT INTO contacts (id, name, email, message, created) VALUES ('Tiago',
	'tiago@badotti.com.br','tudo muito rapido', NOW())";

	mysql_query($sql) or die (mysql_error());

	echo "funcionou?";

	mysql_close();


?>