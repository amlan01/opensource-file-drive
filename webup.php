<?php 
$ds = DIRECTORY_SEPARATOR;

$storefolder = 'web';

/*runtime commands manipulating php.ini file upload restrictions*/

//ini_set('upload_max_filesize', '20M');
//ini_set('post_max_size', '20M');

if (!empty($_FILES)) {

	$tempFile = $_FILES['file']['tmp_name'];

	$targetPath = dirname(_FILE_).$ds.$storefolder.$ds;

	$targetFile = $targetPath.$_FILES['file']['name'];

	move_uploaded_file($tempFile, $targetFile);
}
?>