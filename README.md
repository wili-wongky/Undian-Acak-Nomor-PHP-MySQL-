# Undian Acak Nomor Menggunakan PHP dan MySQL

Project iseng pas komunitas (RTAR) di FB bikin giveaway. web aplikasi ini akan mengacak nomor dari nomor peserta dengan fungsi mt_rand().
Data Peserta dan Hadiah disimpan dalam database MySQL.
Pertama-tama di halaman depan harus memilih hadiah dulu, lalu acak nomor.
Pemenang akan muncul di halaman hasil.php. tombol Back untuk kembali ke halaman depan dan mengacak nomor pemenang berikutnya;

CEK Validasi:
  1. Hadiah yang sudah dipilih dan sudah dimenangkan tidak bisa dipilih kembali (hilang dari pilihan combobox).
  2. Jika nomor peserta sudah keluar dan keluar lagi, akan muncul peringatan untuk mengulang acak nomor (Back ke page pertama, hadiah masih bisa dipilih lagi);

file reset.php untuk mereset database ke konndisi awal.
file pemenang.php untuk melihat daftar pemenang
