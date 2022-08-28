<?php

include '../Models/Model_pegawai.php';
//Membuat objek dari class pegawai
$pegawai = new Model_pegawai();
$GetPegawai = $pegawai->GetData_All();
?>



        <h1>OOP-Class, Object, </h1>
        <h2>Kelompok 9</h2>
        <h3>Tabel Pegawai</h3>
    <p>Soal 1<br>Menampilkan semua data pegawai</p>

        <table border="1">

            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Mulai Kerja</th>
            </tr>

            <?php
            //Validasi input data
            if(isset($GetPegawai))
                {
                        $no = 1;
                        foreach($GetPegawai as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nip']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td>
                                <?php
                                 if($Get['jns_kel']=="P")
                                    {
                                        echo "Perempuan";
                                    }
                                    else{
                                        echo "Laki-Laki";
                                    }
                                ?>
                            </td>
                            <td><?php echo $Get['tgl_lahir']; ?></td>
                            <td>
                                <?php
                                 if($Get['status']=="M")
                                    {
                                        echo "Menikah";
                                    }
                                    else{
                                        echo "Belum Menikah";
                                    }
                                ?>
    
                            <td><?php echo $Get['mulai_kerja']; ?></td> 
                        </tr>
                        <?php 
                        }
                }
            ?>            

        </table>
<footer>
    <p>By Kelompok 9<br>Wildan M.H, Helena Septiana, Ghina Satiroh, M.Fachreza</p>
    <a href='../View/View_pegawai_Soal1.php'>Soal 1</a>
    <a href='../View/View_pegawai_Soal2.php'>Soal 2</a> 
    <a href='../View/View_pegawai_Soal3.php'>Soal 3</a> 
    <a href='../View/View_pegawai_Soal4.php'>Soal 4</a> 
    <a href='../View/View_pegawai_Soal5.php'>Soal 5</a> 
    <a href='../View/View_pegawai_Soal6.php'>Soal 6</a> 
    <a href='../View/View_pegawai_Soal7.php'>Soal 7</a> 
    <a href='../View/View_pegawai_Soal8.php'>Soal 8</a> 
    <a href='../View/View_pegawai_Soal9.php'>Soal 9</a> 
</footer>