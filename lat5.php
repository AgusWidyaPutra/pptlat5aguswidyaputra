<HTML>
<HEAD>
<TITLE> Contoh Skirp PHP </TITLE>
<BODY>

Tanggal Lahir:
<select name = tanggal>
    <option value = 0 selected>Tanggal
<? 
    for($i = 1; $i < 32; $i++)
        echo "<option value = $i>$i";
?>
</option></select>
</BODY>
</HTML>