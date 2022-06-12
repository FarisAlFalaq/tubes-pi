Documentation

<strong>Overview</strong>

API ini merupakan Tugas Besar mata kuliah Pemrograman Integrative yang dimana berisi data rekam medis pasien yang dibangun untuk dapat mengintegrasikan data dengan aplikasi pengguna lainnya dan diharapkan API ini dapat menjadi jembatan antara satu software dengan software yang lain sehingga aplikasi lain tidak perlu lagi membuat data rekam medis di aplikasi mereka dan tentunya memudahkan developer apabila membutuhkan data yang dapat diakses hanya dengan menggunakan URL yang ada .API ini berfungsi untuk menampilkan seluruh data rekam medis atau data rekam medis tertentu sesuai pencarian yang dilakukan pengguna.Selain itu,fitur API yang lainnya juga dapat berfungsi untuk menambah,menghapus,serta memperbaharui data yang ada dan terhubung ke dalam database.

<strong>Import database dengan nama rekam_medis</strong>

<strong>Method</strong>

<strong>GET</strong>

Menampilkan data rekam medis

http://localhost/tubes-pi/api/pasien?api-key=api123

Method berikut berguna untuk menampilkan seluruh data rekam medis

Authorization (Basic Auth) 
<br>
Username:	faris, admin
<br>
Password:	1234

Query Params
<br>
Key:			api-key
<br>
Value:		api123

<strong>GET</strong>

Menampilkan data rekam medis{id}

http://localhost/tubes-pi/api/pasien?api-key=api123&id=12712101

Method berikut ini juga berfungsi menampilkan data rekam medis yang dapat diakses menggunakan ID yang ada pada setiap data

Authorization (Basic Auth) 
<br>
Username:	faris, admin
<br>
Password:	1234

Query Params
<br>
Key:			api-key
<br>
Value:		api123

Contoh
	<br>
id:			12712101

<strong>POST</strong>

Menambah data rekam medis

http://localhost/tubes-pi/api/pasien

Method ini berguna untuk menambahkan data rekam medis pasien dengan menginput value pada beberapa key berikut ini seperti:

id
<br>
nama
<br>
alamat
<br>
tanggal_lahir
<br>
jenis_kelamin
<br>
riwayat_penyakit
<br>
gol_darah

Authorization (Basic Auth) 
<br>
Username:	faris, admin
<br>
Password:	1234


Contoh
<br>
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	<tr>
	<th>id</th>
	<th>12712105</th>
	</tr>
	<tr>
		<th>nama</th>							
		<th>Irsyad Fauzi</th>
	</tr>
	<tr>
		<th>alamat</th>
		<th>JL.Ayahanda</th>
	</tr>
	<tr>
		<th>tanggal_lahir</th>		
		<th>20 Maret 2000 </th>
	</tr>
	<tr>
		<th>jenis_kelamin</th>			
		<th>L</th>
	</tr>
	<tr>
		<th>riwayat_penyakit</th>
		<th>Diabetes</th>
	</tr>
	<tr>	
		<th>gol_darah</th>	
		<th>B</th>
	</tr>
	<tr>
		<th>api-key</th>				
		<th>api123</th>
	</tr>
	</table>
	
<strong>PUT</strong>

Mengubah data rekam medis
	
http://localhost/tubes-pi/api/pasien

Method ini berfungsi untuk mengubah ataupun memperbaharui data rekam medis yang sudah tersedia

Authorization (Basic Auth) 
<br>
Username:	faris, admin
<br>
Password:	1234
	
Contoh
<br>	
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	<tr>
	<th>id</th>
	<th>12712101</th>
	</tr>
	<tr>
		<th>nama</th>							
		<th>Denaya Pramudya</th>
	</tr>
	<tr>
		<th>alamat</th>
		<th>JL.Kapten Muslim</th>
	</tr>
	<tr>
		<th>tanggal_lahir</th>		
		<th>02 Januari 2001 </th>
	</tr>
	<tr>
		<th>jenis_kelamin</th>			
		<th>L</th>
	</tr>
	<tr>
		<th>riwayat_penyakit</th>
		<th>Diabetes, gagal ginjal</th>
	</tr>
	<tr>	
		<th>gol_darah</th>	
		<th>B</th>
	</tr>
	<tr>
		<th>api-key</th>				
		<th>api123</th>
	</tr>
	</table>
<strong>DEL</strong>
<br>
Menghapus data rekam medis{id}
	
http://localhost/tubes-pi/api/pasien

Method yang terakhir yaitu delete tentunya berfungsi untuk menghapus data rekam medis dengan menggunakan ID

Authorization (Basic Auth) 
<br>
Username:	faris, admin
<br>
Password:	1234

Contoh
<br>
api-key: 	api123
<br>
id: 12712104
