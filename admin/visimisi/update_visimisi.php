<?php
extract($_POST);
?>

<?php
       
    $q=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE tbl_visimisi SET 
                                   visi				= '$_POST[visi]',
                                   misi				= '$_POST[misi]',
                                   WHERE id	= '$_GET[id]'");

if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=pelayanan'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=pelayanan'; </script>\n";
}
?>

