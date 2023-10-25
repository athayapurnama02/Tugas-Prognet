function validateForm() {
    var nim = document.getElementById("nim").value;
    var nama = document.getElementById("nama").value;
    var umur = document.getElementById("umur").value;
    var tanggal = document.getElementById("tanggal").value;
    var alamat = document.getElementById("alamat").value;
    var telepon = document.getElementById("telepon").value;
  
    if (nim.length !== 10 || isNaN(nim)) {
      alert("NIM harus terdiri dari 10 digit angka.");
      return false;
    }
  
    var namaRegex = /^[a-zA-Z\s]+$/;
    if (!nama.match(namaRegex)) {
      alert("Nama hanya boleh berisi huruf dan spasi.");
      return false;
    }
  
    if (isNaN(umur)) {
      alert("Umur hanya angka");
      return false;
    }
  
    if (tanggal.trim() === "") {
      alert("Tanggal harus diisi.");
      return false;
    }
  
    if (alamat.trim() === "") {
      alert("Alamat harus diisi.");
      return false;
    }
  
    if (isNaN(telepon)) {
      alert("Nomor telepon hanya angka");
      return false;
    }
  
    return true;
  }
  
  $(document).ready(function () {
    // Function to handle the "Details" button
    $(".btn-primary").on("click", function () {
      // Retrieve the corresponding modal's ID
      var modalId = $(this).data("bs-target");
      // Show the modal
      $(modalId).modal("show");
    });
  
    // Function to handle the "Edit" button
    $(".btn-warning").on("click", function () {
      // Retrieve the corresponding modal's ID
      var modalId = $(this).data("bs-target");
      // Show the modal
      $(modalId).modal("show");
    });
  
    // Function to handle the "Delete" button
    $(".btn-danger").on("click", function () {
      // Retrieve the corresponding modal's ID
      var modalId = $(this).data("bs-target");
      // Show the modal
      $(modalId).modal("show");
    });
  });
  