<?php

	$numf = count($_FILES['upload']['name']);
	echo $numf . '|';
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
                $filePath = "upload/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];


                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                
                    
                    echo $filePath . '|';


                }
              }
        }
    }

?>