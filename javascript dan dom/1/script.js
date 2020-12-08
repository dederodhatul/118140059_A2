var dataBarang = [
    "Buku Tulis",
    "Pensil",
    "Spidol"
];


function TampilkanBarang(){
    var listBarang = document.getElementById("list-barang");
    // clear list barang
    listBarang.innerHTML = "";

    // cetak semua barang
    for(let i = 0; i < dataBarang.length; i++){
        var btnEdit = "<a href='#' onclick='Edit("+i+")'>Edit</a>";
        var btnHapus = "<a href='#' onclick='Delete("+i+")'>Hapus</a>";

        listBarang.innerHTML += "<li>" + dataBarang[i] + " ["+btnEdit + " | "+ btnHapus +"]</li>";        
    }
}

function Tambah(){
    var input = document.querySelector("input[name=barang]");
    dataBarang.push(input.value);
    TampilkanBarang();
}

function Edit(id){
    var newBarang = prompt("Nama baru", dataBarang[id]);
    dataBarang[id] = newBarang;
    TampilkanBarang();
}

function Delete(id){
    dataBarang.splice(id, 1);
    showBarang();
}

TampilkanBarang();