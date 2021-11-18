<?php
require __DIR__.'/config/config.php';
$file = $_GET["link"];
$sql = "SELECT * FROM uploads WHERE file='$file'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  while($row = $result->fetch_assoc()) {



				$filename = __DIR__."/assets/downloaddata/".$row["uploadid"].".zip";
		    $filedata = @file_get_contents($filename);

		    if ($filedata)
		    {
		        $basename = basename($filename);
		        header("Content-Type: application-x/force-download");
		        header("Content-Disposition: attachment; filename=$basename");
		        header("Content-length: " . (string)(strlen($filedata)));
		        header("Expires: ".gmdate("D, d M Y H:i:s", mktime(date("H")+2, date("i"), date("s"), date("m"), date("d"), date("Y")))." GMT");
		        header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
		        if (FALSE === strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE '))
		        {
		            header("Cache-Control: no-cache, must-revalidate");
		        }
		        header("Pragma: no-cache");
		        flush();

		        ob_start();
		        echo $filedata;
						header("Location: index.php");
		    }

}

}










?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>



</body>
</html>
