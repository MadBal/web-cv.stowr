<tr>
    <td><a href="page=edit_visimisi">Edit Visi Misi</a></td>
</tr>

<?php
require "koneksi.php";
    $visimisi = query("SELECT * FROM tbl_visimisi");
    $sql = mysqli_query($GLOBALS["___mysqli_ston"], $visimisi);

?>
    <table border="0">
        <tr bgcolor="#B0B0B0">
            <th><small>Visi</small></th>
            <th><small>Misi</small></th>
        </tr>
<?php
while ($data=mysqli_fetch_array($sql)){
?>
    <tr bgcolor="#E4E4E4">
    <td><small><?= $data['visi']; ?></small></td>
    <td><small><?= $data['misi']; ?></small></td>

    </tr>
<?php
}
?>
</table>