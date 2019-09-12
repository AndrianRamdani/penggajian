<?php
echo "<fieldset>";
echo "<legend><h1>Form Penggajian</h1></legend>";
if (isset ($_POST['Input'])) {
    $nama =$_POST['nama'];
    $nip =$_POST['nip'];
    $almt =$_POST['alamat'];
    $jk =$_POST['jk'];
    $sts =$_POST['status'];
    $jbtn =$_POST['jabatan'];
    $gol =$_POST['gol'];
    echo "<h3 align = 'right'>".date("d/m/Y H:i:s")."</h3>";
    echo "<b>Nama : $nama</b><br>";
    echo "<b>NIS : $nip</b><br>";    
    echo "<b>Jenis Kelamin : $jk</b><br>";
    echo "<b>Alamat : $almt</b><br>";
    echo "<b>Status : $sts</b><br>";
    echo "<b>Jabatan : $jbtn</b><br>";
    
    if ($gol == 'A1') {
        $golo = 250000;
    }
    elseif ($gol == 'A2') {
        $golo = 200000;
    }
    elseif ($gol == 'A3') {
        $golo = 150000;
    }   
    
    if ($sts == 'Menikah') {
        $sts = 100000;
    }
    elseif ($sts == 'Belum Menikah') {
        $sts = 50000;
    }

    if ($jbtn == 'HRD') {
        $jbtn = 5000000;
    }
    elseif ($jbtn == 'Manager') {
        $jbtn = 4500000;
    }
    elseif ($jbtn == 'Staff') {
        $jbtn = 3000000;
    }
    elseif ($jbtn == 'Karyawan') {
        $jbtn = 2500000;
    }
    echo "<b></b>Potongan Gaji : </b><br>";
        if (isset($_POST['bpjs'])) {
        echo "+<b> " . $_POST['bpjs'] . "</b><br>";
        $potongan1 = 250000;
        }
        if (isset($_POST['koperasi'])) {
        echo "+<b> " . $_POST['koperasi'] . "</b><br>";
        $potongan2 = 150000;
        }
        if (isset($_POST['jamsostek'])) {
        echo "+<b> " . $_POST['jamsostek'] . "</b><br>";
        $potongan3 = 150000;
        $potongan = $potongan1 + $potongan2 + $potongan3;
        }
    echo "<b>Golongan : $gol</b><br>";
    $gakor = $golo + $sts + $jbtn - $potongan;
    echo "<hr>";
    echo "<legend><h3>Gaji</h3></legend>";
    echo "<b>Gaji Kotor : $gakor </b><br>"; 
    $pajak = $gakor * 2.5/100;
    $gaber = $gakor - $pajak;
    echo "<b>Gaji Bersih : $gaber</b>";   
}echo"</fieldset>";















?>