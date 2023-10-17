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
var nim = document.getElementById("nim").value;

// validasi kolom nama (hanya huruf)
var nama = document.getElementById("nama").value;
if (!/^[A-Za-z\s]+$/.test(nama)) {
    alert('Kolom Nama hanya bisa menginput huruf.');
    return false;
}

var umur = document.getElementById("umur").value;
var tanggal = document.getElementById("tanggal").value;
var alamat = document.getElementById("alamat").value;

// validasi kolom no telepon (hanya angka)
var telepon = document.getElementById("telepon").value;
if (!/^\d+$/.test(telepon)) {
    alert('Kolom No Telepon hanya bisa menginput angka.');
    return false;
}

// Jika semua validasi sukses, form akan dikirim
return true; 
}
