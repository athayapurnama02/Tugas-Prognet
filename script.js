document.getElementById("biodataForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Validasi form sebelum mengirim
    if (validateForm()) {
        this.submit();
    } else {
        alert("Mohon isi semua field yang diperlukan dengan benar.");
    }
});

function validateForm(){
// Mengambil nilai dari setiap elemen form dengan validasi
// validasi kolom nama (hanya huruf)
var nama = document.getElementById("nama").value;
if (!/^[A-Za-z\s]+$/.test(nama)) {
    alert('Kolom Nama hanya bisa menginput huruf.');
    return false;
}

var umur = document.getElementById("umur").value;
var jk = document.querySelector('input[name="jk"]:checked').value;
var tanggal = document.getElementById("tanggal").value;
var alamat = document.getElementById("alamat").value;
var pendidikan = document.getElementById("pendidikan").value;
var hobi = [];
var hobiCheckboxes = document.querySelectorAll('input[name="hobi[]"]:checked');
hobiCheckboxes.forEach(function(checkbox) {
    hobi.push(checkbox.value);
});

// validasi kolom email (harus mengandung @)
var email = document.getElementById("email").value;
if (!email.includes('@')) {
    alert('Kolom Email harus mengandung simbol "@".');
    return false;
}

var password = document.getElementById("password").value;

// validasi kolom no telepon (hanya angka)
var telepon = document.getElementById("telepon").value;
if (!/^\d+$/.test(telepon)) {
    alert('Kolom No Telepon hanya bisa menginput angka.');
    return false;
}

var waktu = document.getElementById("waktu").value;
var warna = document.getElementById("warna").value;
var nilai = document.getElementById("nilai").value;

// Jika semua validasi sukses, form akan dikirim
return true;
}
