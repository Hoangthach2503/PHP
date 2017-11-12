<html>

<head>

	<title>Testing page</title> </head>

	<body><?php 
		$i=1;
		$gt=1;
		while(true)
		{
			$i++;
			if($i%2==1)
			continue;
			if($i>10)
			break;
			$gt*=$i;
		}
       
		echo "10!=".$gt;
		?> </body>

		</html>
