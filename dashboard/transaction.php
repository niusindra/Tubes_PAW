<?php include '../layout/dashboarduser.php';
$id=$_GET['id']; ?>
    <div>
    <table class="userListTable">
        <tr>
            <th>No.</th>
            <th>Style</th>
            <th>Layanan</th>
            <th>Layanan tambahan</th>
            <th>Tanggal</th>
        </tr>

        <?php
        $query = mysqli_query($con, "SELECT style,layanan,layanan_tambah,tanggal FROM transaction where id_user=$id") or die(mysqli_error($con));

        if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="7"> Tidak ada data ! </td></tr>';
        } else {
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
                echo '<tr>                         
                <td>' . $no . '</td>                         
                <td>' . $data['style'] . '</td>                         
                <td>' . $data['layanan'] . '</td>                         
                <td>' . $data['layanan_tambah'] . '</td>                         
                <td>' . $data['tanggal'] . '</td>                         
                                       
                <td>
                    <a href="../dashboard/formedit.php?id=' . $data['id'] . '">Edit </a>/                             
                    <a href="../proses/deletePeserta.php?id=' . $data['id'] . '" onclick="return confirm(\'Yakin?\')">Hapus </a>
                </td>                       
                
                </tr>                 
                ';
                $no++;
            }
        }
        ?>
    </table></div>

    </body>
    </html>
    <style lang="css">

.homeStyle{
position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
display: flex;
align-items: center;
font-size: 50px;
font-weight: bold;
color: white;
}

.homeStyle h1{
 margin: 0px auto;
 padding: 10px;
 border-radius: 20px;
 background-color: #6bd6a6;
}
</style>
