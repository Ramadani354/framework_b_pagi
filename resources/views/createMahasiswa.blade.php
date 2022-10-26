<html>
<body>
<h1> Form Create Mahasiswa </h1>
<hr />
<form action=/mahasiswa/input method=post>
<pre>
NIM     : <input type=text name=nim>
Nama    : <input type=text name=nama>
Kelas   : <input type=text name=kelas>
<br />
@csrf
<input type=submit value=Kirim>
</pre>
</form>
<hr />
</body>
</html>
