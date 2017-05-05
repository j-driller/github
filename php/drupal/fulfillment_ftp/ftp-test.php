<?php
$local_file = 'somefile.txt';
$remote_file = 'readme.txt';
$ftp_server = "ftp.example.com";
$ftp_user = 'x';
$ftp_pass = 'y';

$conn_id = ftp_connect($ftp_server) 
or die("Couldn't connect to $ftp_server");

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);


if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {
    echo "Connected as $ftp_user@$ftp_server\n";
} else {
    echo "Couldn't connect as $ftp_user\n";
}

// print the current directory
watchdog("error", ftp_pwd($conn_id));

// upload a file
if (ftp_put($conn_id, $remote_file, $local_file, FTP_ASCII)) {
 echo "successfully uploaded $file\n";
} else {
 echo "There was a problem while uploading $file\n";
}

// close the connection
ftp_close($conn_id);
?>


<?php
// set up basic connection
$conn_id = ftp_connect($ftp_server); 

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// check connection
if ((!$conn_id) || (!$login_result)) { 
	watchdog -------
    echo "FTP connection has failed!";
    echo "Attempted to connect to $ftp_server for user $ftp_user_name"; 
    exit; 
} else {
    echo "Connected to $ftp_server, for user $ftp_user_name";
}

// upload the file
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_ASCII); 

// check upload status
if (!$upload) { 
    echo "FTP upload has failed!";
} else {
    echo "Uploaded $source_file to $ftp_server as $destination_file";
}

// close the FTP stream 
ftp_close($conn_id); 
?>

