<?php
require '../../database/database.php';
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    require '../../models/post.model.php';
    deletePost($id);
    header('Location: /post');
    // I create branch name delete-category //
    // I create branch name delete-category //
}