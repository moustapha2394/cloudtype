<?php 
if (!isset($_GET['error'])) {
    $_GET['error']="";
}

?>
<div>
<?php
echo '<h1 style="text-align:center">OOPPSSSS ERROR'.$_GET['error'].'...</h1>';
?>
</div>