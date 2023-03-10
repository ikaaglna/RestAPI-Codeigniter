//objek jadi json

/*
let mahasiswa = {
    nama : "Siska Angelina",
    NIM : 672020123,
    email : "siska.nama@gmail.com"
}

//console.log(mahasiswa); //objek
console.log(JSON.stringify(mahasiswa)); //json
*/

//ajax sederhana
/*
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        //let mahasiswa = this.responseText; //objek
        let mahasiswa = JSON.parse(this.responseText); //json
        //console.log(xhr.responseText);
        console.log(mahasiswa);
    }
}

xhr.open('GET', 'coba.json', true);
xhr.send();
*/

//jquery
//object
$.getJSON('coba.json', function(data) {
    console.log(data);
});