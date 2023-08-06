<!DOCTYPE html>
<html>
<body>

    <?php

        //Open a file for read only. File pointer starts at the beginning of the file
        //$myfile = fopen("php.txt", "r") or die("Unable to open file!");

        //Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
        // $myfile = fopen("php.txt", "w") or die("Unable to open file!");
        // $txt = "get ready!";
        // echo fwrite($myfile, $txt);

        //Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
        // $myfile = fopen("php.txt", "a") or die("Unable to open file!");
        // $txt = "r u paying attention?";
        // echo fwrite($myfile, $txt);

        //Creates a new file for write only. Returns FALSE and an error if file already exists
        //$myfile = fopen("php.txt", "x") or die("File already exist!");
        // $myfile = fopen("html.txt", "x") or die("File already exist!");
        // echo fgetc($myfile);

        //Open a file for read/write. File pointer starts at the beginning of the file
        // $myfile = fopen("php.txt", "r+") or die("Unable to open file!");
        // $txt = "hey there";
        //echo fwrite($myfile, $txt);

        //Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
        // $myfile = fopen("php.txt", "w+") or die("Unable to open file!");
        // $txt = "whats up";
        // echo fwrite($myfile, $txt);
        // echo fgetc($myfile);

        //Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
        // $myfile = fopen("php.txt", "a+") or die("Unable to open file!");
        // $txt = "r u having fun?";
        // echo fwrite($myfile, $txt);
        // echo fgetc($myfile);

        //Creates a new file for read/write. Returns FALSE and an error if file already exists
        //$myfile = fopen("php.txt", "x+") or die("Unable to open file!");
        // $myfile = fopen("html.txt", "x") or die("File already exist!");
        // $txt = "it's almost the lunch break!";
        // echo fwrite($myfile, $txt);

        // while(!feof($myfile)) {
        //   echo fgetc($myfile);
        // }
        // fclose($myfile);

    ?>

</body>
</html>