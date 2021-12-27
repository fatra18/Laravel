// Membuat Object
// Object Literal
// var mhs = {
//     nama : 'Fatra Dinata',
//     nrp : '087723451865',
//     email : 'fatra88876@gmail.com',
//     jurusan : 'Teknik Informasi',
// }
// var mhs2 = {
//     nama : 'Davina Nafliza',
//     nrp : '08998736251',
//     email : 'fliza@gmail.com',
//     jurusan : 'Teknik Elekto',
// }

// Function Decalaration
// function buatObjectMahasiswa(nama,nrp,email,jurusan){
//     var mhs = {};
//     mhs.nama = nama;
//     mhs.nrp = nrp;
//     mhs.email = email;
//     mhs.jurusan = jurusan;
//     return mhs;
// }
// var mhs2 = buatObjectMahasiswa('Fatra Dinata','08876566','fatra88876@gmail.com','Hukum');

function Mahasiswa(nama,nrp,email,jurusan){
    this.nama = nama;
    this.nrp = nrp;
    this.email = email;
    this.jurusan = jurusan;
}

var mhs4 = new Mahasiswa('Dinata','873617716','dinata@gmail.com','Teknik Elektrok');