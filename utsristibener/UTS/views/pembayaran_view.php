<?php

include '../controllers/controller_pembayaran.php';
$pembayaran = new controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

?>

<h1>DATA KPEMBAYARAN SISWA</h1>
<h3><a href="pembayaran_insert.php">Tambahkan Pembayaran</a></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID Pembayaran</th>
        <th>ID Petugas</th>
        <th>NISN</th>
        <th>Tanggal Bayar</th>
        <th>Bulan Bayar</th>
        <th>Tahun Bayar</th>
        <th>ID SPP</th>
        <th>Jumlah Bayar</th>
        <th>Tools</th>
    </tr>
    <?php
                // Decision validation variabel
                if(isset($GetPembayaran))
                {
                        $no = 1;
                        foreach($GetPembayaran as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_pembayaran']; ?></td>
                            <td><?php echo $Get['id_petugas']; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_bayar']; ?></td>
                            <td><?php echo $Get['tahun_bayar']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            <td>
                            <a href="../views/pembayaran_update.php?id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">Update</a>
                            <a href="../config/routes.php?function=delete_pembayaran&id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">Delete</a>
                            </td>
                            
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
</table>