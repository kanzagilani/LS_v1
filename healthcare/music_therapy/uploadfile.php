<?php //if they DID upload a file...
if($_FILES['music']['name'])
{

$valid_file = true;
$message = "";
	
	//if no errors...
	if(!$_FILES['music']['error']) // ! ye negate kar raha there is no error so cum to this file
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['music']['name']); //rename file to lower case ok
		if($_FILES['music']['size'] > (10240000)) //can't be larger than 10 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is too large.';
		}
		
		//if the file has passed the test
		if($valid_file)
		{
		
			echo "New File Name: ". $new_file_name."<br />";
			//move it to where we want it to be
			//..............the major portion.......................................
			move_uploaded_file($_FILES['music']['tmp_name'], 'songs/'.$new_file_name); // ye us uploaded file ko server k temprary folder sa utha k ap k desired server folder ma new name k sath rakh raha ha
			$message = 'Congratulations!  Your file was accepted.';
		}
	}
	//if there is an error...
	else
	{echo "WE ARE HAVING AN ERROR";
		//set that to be the returned message
        switch ($_FILES['music']['error']) { 
            case UPLOAD_ERR_INI_SIZE: // apki php ini file ma max size ki limit kam ha
                $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini"; 
                break; 
            case UPLOAD_ERR_FORM_SIZE: 
                $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form"; 
                break; 
            case UPLOAD_ERR_PARTIAL:
                $message = "The uploaded file was only partially uploaded"; 
                break; 
            case UPLOAD_ERR_NO_FILE: 
                $message = "No file was uploaded"; 
                break; 
            case UPLOAD_ERR_NO_TMP_DIR: 
                $message = "Missing a temporary folder"; 
                break; 
            case UPLOAD_ERR_CANT_WRITE: 
                $message = "Failed to write file to disk"; 
                break; 
            case UPLOAD_ERR_EXTENSION: 
                $message = "File upload stopped by extension"; 
                break; 

            default: 
                $message = "Unknown upload error"; 
                break; 
        } 
    }
		$C_message = 'The File ended with the following message: '.$message;
		
}
echo $C_message;
//you get the following information for each file:
echo $_FILES['music']['name']."<br />";
echo $_FILES['music']['size']."<br />";
echo $_FILES['music']['type']."<br />";
echo $_FILES['music']['tmp_name']."<br />";

header("Location: music_index.php");
?>