// Manipulasi Array

// 1. Menambah Isi Array
// var arr = ["a", 1, false];
// var arr = [];
// arr[0] = "Fatra";
// arr[1] = "Dinata";
// arr[2] = "Devina";
// arr[3] = "Nafliza";
// console.log(arr);

// 2. Menghapus isi array
// var arr = ["Fatra","Dinata",'Nafliza'];
// arr[1] = undefined;
// console.log(arr)

// // 3.Menampilkan isi array
// var arr = ["Fatra","Dinata",'Nafliza'];
// for(var i = 0; i < arr.length; i++){
//     console.log('Mahasiswa ke-' + (i+1) + ':' + arr[i]);
// }

// 3. Method pada array
// 1. join
var arr = ["Fatra","Dinata",'Nafliza'];
// console.log(arr.join(' - '))

// 2. push & pop
arr.push('Devina','Fliza');
arr.pop();
// console.log(arr.join(' - '))

// Unshift & Shift
// arr.unshift('Fate');
// arr.shift();
// console.log(arr.join(' - '))

// var arr = ["Fatra","Dinata",'Nafliza'];
// 4.splice
// splice(IndexAwal, mauDihapusBerapa,elemenBaru1,elementBaru2...)
// arr.splice(1,1, 'Liza' , 'Fliza');
// console.log(arr.join('-'));

// 5.slice
// slice(awal,akhir)
// var arr = ["Fatra","Dinata","Fliza","Devina",'Nafliza'];
// var arr2 = arr.slice(1,4);
// console.log(arr2.join('-'));

// 6.ForEach
var angka = [1,2,3,4,5,6,7,8];
var nama = ['Fatra' , 'Dinata' , 'Nofa'];
// for (var i = 0; i < angka.lenght; i++){console.log(angka[i]);}

// var cetak = function(e){
//     console.log(e);
// }
// angka.forEach(cetak);
// nama.forEach(function(e,i){
//     console.log('Mahasiswa ke-' + (i+1) + 'adalah :' + e);
// })

// 7.forEach
var angka = [1,2,3,4,5,6,7,8];
var angka2 = angka.map(function(e){
    return e * 2;
});
console.log(angka2.join(' - '))

// 8.Map
var angka = [1,2,10,3,20,4,5,6,7,8];
angka.sort(function(a,b){
    return a-b;
});
console.log(angka.join(' - '));

// 9. Filter & find
var angka = [1,2,10,5,20,3,6,8,4];
var angka2 = angka.find(function(x){
    return x > 5;
})
console.log(angka2);
