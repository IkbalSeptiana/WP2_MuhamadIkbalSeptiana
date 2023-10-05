###################
Latihan Pertemuan 3
###################

********************************************************
Penggunaan MVC, dan Parsing Data dari Controller ke View
********************************************************

Pada Pertemuan ke 3, kita melakukan penggunaan Model, View, dan Controller secara bersamaan setelah itu kita melakukan parsing data dari Controller ke View.

***************
Modified Files:
***************
- `application/config/autoload.php`
- `application/config/config.php`
- `application/config/routes.php`
- `readme.srt`
**********
New Files:
**********
- `.htaccess`
- `application/controllers/Latihan1.php`
- `application/controllers/Matakuliah.php`
- `application/models/Model_latihan1.php`
- `application/views/view-data-matakuliah.php`
- `application/views/view-form-matakuliah.php`
- `application/views/view-latihan1.php`

localhost/pustaka-booking/latihan1
localhost/pustaka-booking/matakuliah


###################
Latihan Pertemuan 2
###################

****************
membuat homepage
****************

Pada latihan pertemuan ke 2, kita membuat homepage dengan controller dan view, dan memasukkan gambar/assets lainnya

localhost/pustaka-booking/homepage

########
Tugas #1
########

**************************
Contoh Menampilkan Biodata
**************************

Pada tugas Pertemuan 1, kita diharuskan menginstall CodeIgniter 3. Saat penginstallan saya menemui kendala error, setelah saya baca-baca issue dari GitHub [CodeIgniter](https://github.com/bcit-ci/CodeIgniter), CodeIgniter 3 memang belum support untuk php versi 8.2 (saya menggunakan php versi 8.2) lalu saya ubah versi php ke versi 8.0 barulah CI 3 berjalan dengan lancar.

Tugas Biodata terdapat di `/application/controllers/Contoh1.php`
