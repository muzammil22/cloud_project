
    <?php
	
     $dbopts = parse_url(getenv('DATABASE_URL'));
	 $app->register(new Herrera\Pdo\PdoServiceProvider(),
	                array(
	                    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
	                    'pdo.username' => $dbopts["user"],
	                    'pdo.password' => $dbopts["pass"]
	                )
	 );
	echo 'muzammil';

		$st = $app['pdo']->prepare('SELECT * FROM Users');
	  $st->execute();

	  $names = array();
	  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
	    $app['monolog']->addDebug('Row ' . $row['name']);
	    $names[] = $row;
	  }
	    echo 'muzammil2';

		
	?>
