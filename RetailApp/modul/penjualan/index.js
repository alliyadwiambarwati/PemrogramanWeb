$(document).ready(function() {
    $('#tabelDataPenjualan').DataTable();
    updateTabelPenjualan();
})

function pilihBarang() {
    // Ambil elemen select dengan id "barang"
    var barang = document.getElementById("barang");
    // Ambil opsi yang dipilih
    var selectedOption = barang.options[barang.selectedIndex];
    // Ambil nilai-nilai dari opsi yang dipilih (id barang, stok, harga)
    var namaBarang = selectedOption.getAttribute('nama_barang');
    var stok = selectedOption.getAttribute('data-stok');
    var harga = selectedOption.getAttribute('data-harga');
    // Set nilai pada elemen input dengan id "stok" dan "harga"
    document.getElementById('stok').value = stok;
    document.getElementById('harga').value = harga;
}

function hitungtotalharga() {
    // Ambil nilai jumlah dan harga dari elemen input
    var jumlah = document.getElementById('jumlah').value;
    var harga = document.getElementById('harga').value;
    // Hitung total harga
    var totalHarga = jumlah * harga;
    // Set nilai pada elemen input dengan id "totalHarga"
    document.getElementById('totalharga').value = totalHarga;
}

function tambahItem() {
    // Ambil nilai-nilai dari elemen input
    var barang = document.getElementById('barang');
    var idBarang = barang.value;
    var namaBarang = barang.options[barang.selectedIndex].getAttribute("nama_barang");
    var jumlah = document.getElementById('jumlah').value;
    var harga = document.getElementById('harga').value;
    var totalHarga = document.getElementById('totalharga').value;
    // Simpan data penjualan ke local storage
    var penjualan = JSON.parse(localStorage.getItem("penjualan")) || [];
    penjualan.push({
        idBarang: idbarang,
        nama_barang: nama_barang,
        jumlah: jumlah,
        harga: harga,
        totalHarga: totalHarga
    });
    localStorage.setItem("penjualan", JSON>stringify(penjualan));

    // Update tampilan tabel penjualan (asumsikan ada fungsi updateTabelPenjualan())
    updateTabelPenjualan();

    // Kosongkan formu
    kosongkanForm();
}
// Fungsi untuk mengosongkan formu
function kosongkanForm() {
    document.getElementById("barang").value = "";
    document.getElementById("jumlah").value = "";
    document.getElementById("harga").value = "";
    document.getElementById("totalharga").value = "";
}

// Fungsi untuk menghapus semua data penjualan dari local storage dan reload halaman
function resetPenjualan() {
    localStorage.removeItem("penjualan");
    localStorage.removeItem("totalbayar");
    //reload halaman
    location.reload();
}

// Fungsi untuk menghitung total bayar (asumsikan logika perhitungannya sudah ada)
function hitungTotalBayar() {
   var penjualan = JSON.parse(localStorage.getItem("penjualan")) || [];
    var totalbayar = 0;
    for (var i = 0; i < penjualan.length; i++) {
        totalbayar += parseFloat(penjualan[i].totalHarga); 
    }
    localStorage.setItem("totalbayar", totalbayar);
    //konversi ke format rupiah dengan tidak ada digit dibelakang koma
    totalBayarIDR = totalBayar.toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits:0 });
    document.getElementById("totalbayar").textContent = totalBayarIDR;
    document.getElementById("modalTotalBayar").textContent = totalBayarIDR;
}
function updateTabelPenjualan(){
    var penjualan = JSON.parse(localStorage.getItem("penjualan")) || [];
    var tabelpenjualan = $('#tabelPenjualan').DataTable();
    tabelpenjualan.clear();
    for (var i = 0; i < penjualan.length; i++){
        tabelpenjualan.row.add([
            i + 1,
            penjualan[i].idBarang,
            penjualan[i].nama_barang,
            penjualan[i].jumlah,
            penjualan[i].harga,
            penjualan[i].totalharga,
        ]).draw(false);
    }
    hitungTotalBayar();
}
function simpanPenjualan(){
    //simpan ke database
    var penjualan = JSON.parse(localStorage.getItem("penjualan")) || [];
    var totalbayar = localStorage.getItem("totalbayar");
    var bayar = localStorage.getItem("bayar");
    var kembalian = localStorage.getItem("kembalian");
    $.ajax({
        URL : "modul/penjualan/proses.php",
        method : "POST",
        data: {
            penjualan : JSON.stringify(penjualan),
            totalbayar : totalbayar,
            bayar : bayar,
            kembalian : kembalian 
        },
        success : function(response){
            resetPenjualan();
            location.reload();
        }
    });
}
function hitungKembalian(){
    var bayar = document.getElementById("bayar").value;
    var totalbayar = localStorage.getItem("totalbayar");
    var kembalian = bayar - totalbayar;
    //simpan ke localstorage
    localStorage.setItem("bayar", bayar);
    localStorage.setItem("kembalian", kembalian);
    document.getElementById("kembalian").value = kembalian;
}
