// var angka = parseInt(prompt('masukan angka :'));
// // prompt nilai yang dikirim user menjadi string
// // parseInt merubah nilai string menjadi integer
// if ( angka === 1){
//     alert('anda masukan angka 1');
// }else if( angka === 2){
//     alert('anda masukan angka 2');
// }else if( angka === 3){
//     alert('anda masukan angka 3');
// }else {
//     alert('angka yang anda masukan salah!')
// }

// switch
// var angka = prompt('masukan angka :');

// switch(angka){ // disini adalah ekspresi
//     case '1' : //disini harus nilai
//     alert('anda mamesukkan angka 1');
//     break;
//     case '2' : //disini harus nilai
//     alert('anda mamesukkan angka 2');
//     break;
//     case '3s' : //disini harus nilai
//     alert('anda mamesukkan angka 3s');
//     break;
//     default :
//     alert('angka yang anda masukan salah');
//     break;
// }   
var lagi = true
var item = prompt('masukan nama makanan /minuman : \n (cth: nasi, daging, susu, hamburger, softdrink)');

switch(item){
    case 'nasi' :
    case 'daging' :
    case 'susu' :
        alert('makanan / minumana Sehat!');
        break;
    case 'hamburger' :
    case 'softdrink' :
        alert('makanan / minuman Tidak Sehat');
    default :
        alert('yang anda masukan bukan angka')
        break;
    }      
    item = confirm('masukan angka lagi');
    var item = true
