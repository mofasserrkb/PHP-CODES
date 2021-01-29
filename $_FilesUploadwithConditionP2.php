<?php

if (isset($_POST['submit'])) {
	# code...
	echo "<pre>";

   print_r($_FILES);
	echo "</pre>";
	$fileName=$_FILES['image'] ['name'];
	$fileType=$_FILES['image'] ['type'];
	$fileTmpName=$_FILES['image'] ['tmp_name'];
	$fileError=$_FILES['image'] ['error'];
	$fileSize=$_FILES['image'] ['size'];
	$fileExt=explode(".",$fileName);//The explode() function breaks a string into an array.
	$fileActualExt=strtolower(end($fileExt));
	$allowed=['jpg','jpeg','doc','png','pdf'];
	
	if (in_array($fileActualExt,$allowed)) //The in_array() function searches an array for a specific value.
	{
	    if ($fileError===0)
	    {
	    	if($fileSize<500000)
	    	{ 
             
             if(file_exists('uploaded image/'.$fileName ))
           {
              echo "file cannot be uploaded";
           }
	
           else
           {
             $fileNameNew=uniqid("",true).".".$fileActualExt;
            $fileDestination='uploaded image/'.$fileName.$fileNameNew; 
            //here path+actual file name+uniq id .ext
       
              move_uploaded_file($fileTmpName,$fileDestination);

             // header("location:index.php?uploadsuccess");//redirect to the main page of the webpage
              echo "Uploaded successfully";
            }
	    	}
	    	else
	    	{
	    		echo "File is too large";
	    	}

	    }
	    else
	    {
	    	echo "There is an error uploading the file";
	    }

	}
	else
	{
		echo "You can not upload this type of file<br>";
	}

}

?>