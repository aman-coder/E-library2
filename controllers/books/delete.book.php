<?php
if(isset($_GET['b_id'])){
    $bid = $_GET['b_id'];
    App::get('Books')->Deletebook($bid);
}
header("location: /booklist");
?>