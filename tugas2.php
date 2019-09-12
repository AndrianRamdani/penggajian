<html>
<head><title>TugasFORM</title></head>
<body>
<FORM ACTION="tugas2proses.php" METHOD="POST" NAME="Input">
<fieldset>
<legend><h1>Form Penggaji</h1></legend>
<tr>
<td>Nama</td>     <td><input type="text" name="nama"><br></td>
</tr>
<tr><td>NIP </td> <td><input type="number" name="nip"></tr></td><br>
<tr><td>Jenis Kelamin </td>  <td> <input type ="radio" name="jk" value="laki-laki" checked>Laki-Laki
<input type ="radio" name="jk" value"perempuan">Perempuan<br></td></tr>
<tr><td>Alamat </td> <td>  <textarea name ="alamat" cols="40" rows="5" checked></textarea></tr></td><br>
<tr><td>Status </td>
<td><select name="status">
<option value="Menikah">Menikah</option>
<option value="Belum Menikah">Belum Menikah</option>
</select><br></tr></td>
<br>
<tr><td>Jabatan </td>
<td><select name="jabatan">
<option value="HRD">HRD</option>
<option value="Manager">Manager</option>
<option value="Staff">Staff</option>
<option value="Karyawan">Karyawan</option>
</select><br></tr></td>
<br>
<tr><td>Potongan Gaji</td>
<td><input type="checkbox" name="bpjs" value="BPJS"
checked> BPJS
<input type="checkbox" name="koperasi" value="Koperasi"> Koperasi
<input type="checkbox" name="jamsostek" value="Jamsostek"> Jamsostek<br>
<tr><td>Golongan </td>
<td><select name="gol">
<option value="A1">A1</option>
<option value="A2">A2</option>
<option value="A3">A3</option>
</select><br></tr></td>
<tr><td> <input type="submit" name="Input" value="DONE">
<td> <input type="reset" value="reset"></td></tr></td>
</fieldset>
</FORM>
</body>
</html>


