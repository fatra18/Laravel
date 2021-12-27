// mengembalikan apapun inputan yang dikirim user
// prompt
// var name = prompt('masukan nama');
// alert(name);
// Mengembalikan nilai bolean true dan false
// true ketika menekan tombol ok dan 
// false ketika menekan tombol cancel
// confirm
// var tes = confirm('kamu yakin');
// // alert(tes);
// if( tes === true ){
//     alert('user menekan ok');
// }else{
//     alert('user menekan Cancel')
// }

alert('selamat datang..');
var lagi = true;

while( lagi ){
    var nama = prompt('masukan nama;');
    alert('hallo' + " " +  nama);

    lagi = confirm('coba lagi?');
}
alert('terima kasih')