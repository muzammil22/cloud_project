<?php 
<!DOCTYPE html>
<html >
  <head>

  </head>

  <body>

    <h1>Hello world</h1>   
    
 //    $dbopts = parse_url(getenv('DATABASE_URL'));
	// $app->register(new Herrera\Pdo\PdoServiceProvider(),
	//                array(
	//                    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
	//                    'pdo.username' => $dbopts["user"],
	//                    'pdo.password' => $dbopts["pass"]
	//                )
	// );


    $myPDO = pg_connect('host=ec2-54-235-90-107.compute-1.amazonaws.com dbname=dkf3l4nu5m7vj user=qbxcasondnmcds password=0b12931d71c65eee9a2fa303bcd8c1b460ff1878e7d0cc9f0c10a0ad563a85bc');
    $result = $myPDO->pg_query("SELECT * FROM Users");


	if(mysqli_num_rows($result) > 0 )
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row[0];
		}
	}



    
  </body>
</html>

?>