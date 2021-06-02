    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['add'])){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $b_name = trim($_POST['b_name']);
        $auth_name = trim($_POST['auth_name']);
        // $b_img = trim($_POST['b_img']);
        $description = trim($_POST['description']);
        $count = trim($_POST['count']);
        $booknameError = "";
        $authnameError = "";
        $imgError = "";
        $descriptionError = "";
        $counterror = "";
        // to declare the things into here and later on we us these
       $file = $_FILES['b_img'];

       $fileName = $_FILES['b_img']['name'];
       $fileTmpName = $_FILES['b_img']['tmp_name'];
       $fileSize = $_FILES['b_img']['size'];
       $fileError = $_FILES['b_img']['error'];
       $fileType = $_FILES['b_img']['type'];

       $fileExt = explode('.',$fileName);
       $fileActualExt = strtolower(end($fileExt));

       $allowed = array('jpg', 'jpeg', 'png');
        //ending of th decalration
        $check = App::get('Books')->SelectBook($b_name,$auth_name);
        $check->execute();
        $has = $check->rowCount();

    $nameValidation = "/^[a-zA-Z ]*$/";
    if(empty($b_name))
    {
        $booknameError = "Please enter book name";
        $_SESSION['name'] = $booknameError;
    }elseif(!preg_match($nameValidation, $b_name)){
        $booknameError = "Name only contain letters";
        $_SESSION['name'] = $booknameError;
    }
    if(empty($auth_name))
    {
        $auhtnameError = "Please enter auth name";
        $_SESSION['auth'] = $auhtnameError;
    }elseif(!preg_match($nameValidation, $auth_name)){
        $authnameError = "Name only contain letters";
        $_SESSION['auth'] = $authnameError;
    }elseif($has > 0){
        $presentbname = "book name is already being registered";
        $_SERVER['presentn'] = $presentbname;
        $presentauthname = "Author name is already being registered";
        $_SERVER['presentn'] = $presentbname;
    
    }
   if(in_array($fileActualExt, $allowed)){
       if($fileError === 0){
           if($fileSize < 10000000){
               $fileNameNew = uniqid('', true).".".$fileActualExt;
                 $path = "Resourses\images/";
               $fileDestination = $path.$fileNameNew;
               move_uploaded_file($fileTmpName,$fileDestination);
           }else{
               echo "File to big";
           }
       }else{
           echo "File doesn't uploaded";
       }
   }else{
       echo "This file can't be uploaded";
   }
    if(empty($description))
    {
        $descriptionError = "Please enter description";
        $_SESSION['des'] = $descriptionError;
    }
    
    if(empty($count))
    {
        $countError = "Please enter number of copies you want to publish";
        $_SESSION['count'] = $countError;
    }
    
    
        //check if the name is there or not
        // if(empty($booknameError) && empty($authnameError) && empty($descriptionError) && empty($counterror) && empty($presentbname) && empty($presentauthname)){
            App::get('Books')->InsertBook($b_name,$auth_name,$fileNameNew,$description,$count);
            header("location:/booklist");
            // }
        }
    }