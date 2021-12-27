// this
console.log(this );

// membuat object

// cara 1 = function decalaration
// function halo(){
//     console.log(this);      
//     console.log('halo');
// }
// this.halo();
// this adalah mengembalikan object Global

// cara 2 = object literal
// var obj = {a : 10, nama : 'Fatra Dinata'};
// obj.halo = function(){
//     console.log(this);
//     console.log('halo');
// }
// obj.halo();
//  this mengembalikan object yang bersangkutan



// cara 3 = constructor
function Halo(){
    console.log('this');
    console.log('halo');
}
new Halo();
// this mengembalikan object yang baru dibuat