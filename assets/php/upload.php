<?php
require '../../config/config.php';
$isPost = strtolower($_SERVER['REQUEST_METHOD']) === 'post';
$hasFiles = isset($_FILES['datei']['tmp_name'][0]) && (bool)$_FILES['datei']['tmp_name'][0];
$time = time();

if (!$isPost || !$hasFiles) {
    header('Location: ../../upload.php?error=true');
}

$data = $_FILES['datei']['tmp_name'][0];

$fileSize = filesize($data);

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$type = finfo_file($finfo, $data);

if ($fileSize === 0) {
    echo "Datei ist leer";
    die();
}
$allowed = [
    'image/png' => 'png',
    'video/mp4' => 'mp4',
    'audio/mp3' => 'mp3',
    'application/pdf' => 'pdf',
    'image/jpeg' => 'jpg'
];
if (!in_array($type, array_keys($allowed))) {
    echo "Ungültiger Dateityp";
    die();
}
$extension = $allowed[$type];

$target = __DIR__ . '../../uploads/' . $time . '.' . $extension;
if (!copy($data, $target)) {
    die();
}
    $file = $time.'.'.$extension;

    $link = $serverip.'/takedown.php?link='.$file;
    $sql = "INSERT INTO uploads (uploadid, file, type) VALUES ('$time', '$file', '$allowed[$type]')";
    if ($conn->query($sql) === TRUE) {
      $zip_file = "../downloaddata/".$time.".zip";
      touch($zip_file);
      $zip = new ZipArchive;
      $this_zip = $zip->open($zip_file);

      if($this_zip){
        $folder = opendir('../uploads/');

        if($folder){
          $image = $file;
              $file_with_path = "../uploads/".$image;

              $zip->addFile($file_with_path,$image);
          closedir($folder);
        }
        header("Location: ../../success.php?link=".$link);
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
