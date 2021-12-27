// var penumpang = [];
// var tambahPenumpang = function(namaPenumpang, penumpang){
//     // Jika angkot Kosong
//     if( penumpang.lenght == 0){
//         // Tambah Penumpang Di awal Array
//         penumpang.push(namaPenumpang);
//         // Kembalikan isi array & keluar dari function
//         return penumpang;
//     } else{
//         // telusuri seluruh kursi dari awal
//         for (var i = 0; i < penumpang.lenght; i++){
//             // Jika ada kursi kosong
//             if( penumpang[i] == undefined){
//                 // Tambah penumpang di kursi tersebut
//                 penumpang[i] = namaPenumpang;
//                 // Kembalikan isi array & keluar dari function
//                 return penumpang
//             }
//             // jika sudah ada nama yang sama
//             // else if(penumpang[i] == namaPenumpang){
//             //     // tampilkan kesalahannya
//             //     console.log(namaPenumpang + 'sudah ada di dalam angkot.');
//             //     // kembalikan isi array & keluar dari function
//             //     return penumpang;

//             // }
//             // Jika seluruh kursi terisi
//             // else if( i == penumpang.lenght - 1){
//             //     // Tambah penumpang di akhir array
//             //     penumpang.push(namaPenumpang);
//             //     // Kembalikan isi array & keluar dari function
//             //     return penumpang;
//             // }
//         }
//     }
// }



var penumpang = ['fatra',undefined,'fliza',];
var tambahPenumpang = function(namaPenumpang, penumpang){
    // Jika Ankot kosong
    if( penumpang.length == 0){
        // Tambah Penumpang di awal array
        penumpang.push(namaPenumpang);
        // Kembalikan isi array & keluar dari function
        return penumpang;
    } else{
        // Telusuri seluruh kursi dari awal
        for(var i = 0; i < penumpang.length; i++){
            // jika ada kursi kosong
            if(penumpang[i] == undefined){
                // tambah penumpang di kursi tersebut
                penumpang[i] = namaPenumpang;
                // kembalikan isi array & keluar dari function
                return penumpang;
            }else if( penumpang[i] == namaPenumpang){
                console.log(namaPenumpang = 'sudah ada di dalam angkot.');
                return penumpang;
            }

            else if( i == penumpang.length - 1){
                // tambah penumpang di akhir array
                penumpang.push(namaPenumpang); 
                // kembalikan isi array & keluar dari function
                return penumpang;
            }
        }
    }
}
var hapusPenumpang = function(namaPenumpang, penumpang){
    if(penumpang.length == 0){
        console.log('Angkot masih kosong.');
    }else{
        for( var i = 0; i < penumpang.length; i++){
            if( penumpang[i] == namaPenumpang){
                penumpang[i] = undefined;
            } else if ( i == penumpang.length - 1){
                console.log(namaPenumpang + 'tidak ada di dalam angkot');
            }
        }
    }
    return penumpang;
}

// var hapusPenumpang = function(namaPenumpang, penumpang){
//     if(penumpang.lenght == 0){
//         console.log('Angkot masih kosong');
//     }else{
//         for(var i = 0; i < penumpang.lenght; i++){
//             if(penumpang[i] == namaPenumpang){
//                 penumpang[i] == undefined;
//                 return penumpang;
//             }else if(i == penumpang.lenght - 1){
//                 console.log(namaPenumpang + 'tidak ada di dalam angkot');
//                 return penumpang;
//             }
//         }
//     }
// }