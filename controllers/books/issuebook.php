<?php

if(isset($_POST['issue'])){
    if($_SESSION['uid']){
       $u_id=$_SESSION['uid'];
        $b_id=$_POST['bid'];
        $issue=$_POST['action'];
        App::get('Books')->IssueBook($u_id,$b_id,$issue);
        header("location:/booklist");
    }
}
?>