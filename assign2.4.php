<form action="#" method="POST">
    enter the string<input type="text" name="txt">
   <input type="submit" name="s">
</form>
<?php
if(isset($_POST["s"]))
{
  $s=$_POST["txt"];
  echo"the string in reverse order is".strrev(chunk_split($s,1));
}
?>