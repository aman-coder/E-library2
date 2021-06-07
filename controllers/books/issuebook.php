<?php

if(isset($_POST['issue'])){
    if($_SESSION['uid']){
       $u_id=$_SESSION['uid'];
        $b_id=$_POST['bid'];
        $issue=$_POST['action'];
        if($_POST['action'] =='reading'){
            $data=App::get('Users')->Selectcondition($u_id,$issue);
            $data->execute();
            $has = $data->rowCount();
            if($has>0){
                echo 'You have to finish the book you are reading in order to issue book';
            }elseif($has==0){
                $con=App::get('Books')->SingleBook($b_id);
                $con->execute();
                $bb=$con->fetch(PDO::FETCH_OBJ);
                $cont=$bb->count;
                $up=$cont-1;
                $ct=App::get('Books')->CountUp($up,$b_id);
                $rr=$ct->execute([':count'=>$up]);
            App::get('Books')->IssueBook($u_id,$b_id,$issue);
        header("location:/booklist");
            }
        }
        if($_POST['action'] =='wishlisted'){
            App::get('Books')->IssueBook($u_id,$b_id,$issue);
        header("location:/booklist");
            
        }
        
    }
}
?>