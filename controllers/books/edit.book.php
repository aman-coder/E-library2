<?php
if (!isset($_SESSION['email'])) {
	?>
	<script type="text/javascript">
		alert("Please login first to access booklist!");
		 window.location.href="/";
		</script>
		<?php
	exit;
}
if(isset($_GET['b_id'])){
    $b_id=$_GET['b_id'];
    $edit = App::get('Books')->SingleBook($b_id);
    $edit->execute();
    $bookedit=$edit->fetch(PDO::FETCH_OBJ);

    if(isset($_POST['Update'])){
        $b_id=$_GET['b_id'];
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $b_name = trim($_POST['b_name']);
        $auth_name = trim($_POST['auth_name']);
        $description = trim($_POST['description']);
        $count = trim($_POST['count']);
        $booknameError = "";
        $authnameError = "";
      
        $descriptionError = "";
        $countError = "";
        $nameValidation = "/^[a-zA-Z ]*$/";

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
            $authnameError = "Please enter auth name";
            $_SESSION['auth'] = $authnameError;
        }elseif(!preg_match($nameValidation, $auth_name)){
            $authnameError = "Name only contain letters";
            $_SESSION['auth'] = $authnameError;
        }
       //for image
       if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                  $path = "Resourses\images/";
                $fileDestination = $path.$fileNameNew;
            }else{
                echo "File to big";
            }
        }else{
            echo "File doesn't uploaded";
        }
    }else{
        echo "This file can't be uploaded";
    }
       //ending for image
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
            // if(empty($booknameError) && empty($authnameError) && empty($descriptionError) && empty($countError)){
    
                $rr = App::get('Books')->UpdateBook($b_name,$auth_name,$fileNameNew,$description,$count,$b_id);
                $rr->execute([':b_name'=>$b_name,':auth_name'=>$auth_name,'b_img'=>$fileNameNew,':description'=>$description,':count'=>$count]);
                move_uploaded_file($fileTmpName,$fileDestination);
                header("location:/booklist");
                // }
            
        }
require './views/books/book.edit.view.php';
}