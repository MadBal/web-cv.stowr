 
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">EDIT PELAYANAN
        </div>
        <table width="755" border="0">
          <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><p align="left">        
                <form enctype="multipart/form-data" method="post" action="?page=update_visimisi&id=<?= $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php
$id = $_GET['id'];
$edit		= "SELECT * from tbl_visimisi where id=$id";
  $hasil	= mysqli_query($GLOBALS["___mysqli_ston"], $edit);
  $c		= mysqli_fetch_array($hasil);

?>

<tr>
    <td><small><strong>Username</strong></small></td>
    <td>:</td>
    <td><input type="text" name="username" value="<?php echo $c['username']; ?>"></td>
</tr>
<tr>
    <td><small><strong>Judul</strong></small></td>
    <td>:</td>
    <td><input type="text" name="judul" value="<?php echo $c['judul']; ?>"></td>
</tr>
			
<tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>