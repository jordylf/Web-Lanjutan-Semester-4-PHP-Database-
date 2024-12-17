<!-- <?php
// Menghapus cookie 'nama' dengan mengatur waktu kedaluwarsa ke masa lalu 
setcookie("nama", "", time() - 3600);
// Menghapus cookie 'alamat' dengan mengatur waktu kedaluwarsa ke masa lalu 
setcookie("alamat", "", time() - 3600);
// Menampilkan pesan bahwa cookie telah dihapus
echo "Cookie telah dihapus";
?> -->

<?php
// logic cookies, 
setcookie("nama_cookie","data_cookie","expire Cookie");
setcookie("nama", "yuda", time() + (86400 * 30));
setcookie("alamat", "test", time() + (86400 * 30));
echo "cookie telah dibuat";
// 86400 (jumlah detik) = 1 hari // expire time 30 hari
// dalam set cookies ada expire
// kalau mau menghapus cookis caranya sama ,.,
?>

<?php
// mengecek vaiabel cookies, ada tanda seru, kalau tidak ada 
if(!isset($_COOKIE ["nama"])){
echo "Data Cookie tidak ada!";
}
else {
echo "Nama anda adalah adalah: " . $_COOKIE ["nama"]."br";
echo "Alamat anda adalah adalah: " . $_COOKIE ["alamat"]; 
} 
?>