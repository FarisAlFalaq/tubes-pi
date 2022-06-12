Documentation

Overview

API ini merupakan Tugas Besar mata kuliah Pemrograman Integrative yang dimana berisi data rekam medis pasien yang dibangun untuk dapat mengintegrasikan data dengan aplikasi pengguna lainnya dan diharapkan API ini dapat menjadi jembatan antara satu software dengan software yang lain sehingga aplikasi lain tidak perlu lagi membuat data rekam medis di aplikasi mereka dan tentunya memudahkan developer apabila membutuhkan data yang dapat diakses hanya dengan menggunakan URL yang ada .API ini berfungsi untuk menampilkan seluruh data rekam medis atau data rekam medis tertentu sesuai pencarian yang dilakukan pengguna.Selain itu,fitur API yang lainnya juga dapat berfungsi untuk menambah,menghapus,serta memperbaharui data yang ada dan terhubung ke dalam database.

Method

GET

Menampilkan data rekam medis

http://localhost/tubes-pi/api/pasien?api-key=api123

Method berikut berguna untuk menampilkan seluruh data rekam medis

Authorization (Basic Auth)
Username	<faris> <admin>
Password	<1234>

Query Params	
Key			<api-key>
Value		<api123>

GET

Menampilkan data rekam medis{id}

http://localhost/tubes-pi/api/pasien?api-key=api123&id=12712101

Method berikut ini juga berfungsi menampilkan data rekam medis yang dapat diakses menggunakan ID yang ada pada setiap data

Authorization (Basic Auth)
Username	<faris> <admin>
Password	<1234>

Query Params
Key			<api-key> 
Value		<api123>


Contoh
id			12712101

POST

Menambah data rekam medis

http://localhost/tubes-pi/api/pasien

Method ini berguna untuk menambahkan data rekam medis pasien dengan menginput value pada beberapa key berikut ini seperti:

id

nama

alamat

tanggal_lahir

jenis_kelamin

riwayat_penyakit

gol_darah

Authorization (Basic Auth)
Username	<faris> <admin>
Password	<1234>

Contoh
id 								12712105
nama							Irsyad Fauzi
alamat						JL.Ayahanda
tanggal_lahir			20 Maret 2000
jenis_kelamin			L
riwayat_penyakit	Diabetes
gol_darah					B

Key			<api-key>
Value		<api123>

PUT

Mengubah data rekam medis
http://localhost/tubes-pi/api/pasien
Method ini berfungsi untuk mengubah ataupun memperbaharui data rekam medis yang sudah tersedia

Authorization
Basic Auth
Username
<username>
Password
<password>
Bodyurlencoded
id
12712101
nama
Denaya Pramudya
alamat
Jl.Kapten Muslim
tanggal_lahir
02 Januari 2001
jenis_kelamin
L
riwayat_penyakit
gagal ginjal,diabetes
gol_darah
B
api-key
api123
DEL
menghapus data rekam medis{id}
http://localhost/tubes-pi/api/pasien
Method yang terakhir yaitu delete tentunya berfungsi untuk menghapus data rekam medis dengan menggunakan ID

Authorization
Basic Auth
Username
<username>
Password
<password>
Bodyurlencoded
api-key
api123
id
12712104
