<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'databaseitf.mysql.database.azure.com', 'superoof@databaseitf', 'Pin187932', 'itflab', 3306);
$res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID='$id'");
$row = mysqli_fetch_array($res)
?>
<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 120px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 120px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<div>
<form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm">
    Name:<br>
    <input type="text" name = "Name" id="idName" value="<?php echo "$row[Name]"; ?>" <br>
    Comment:<br>
    <input type="text" name = "Comment" id="idComment" value="<?php echo "$row[Comment]"; ?>" <br>
    Link:<br>
    <input type="text" name = "Link" id="idLink" value="<?php echo "$row[Link]"; ?>"> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
</div>
  </form>
