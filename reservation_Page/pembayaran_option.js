
function updatePaymentOptions() {
    var selectedJenisPembayaran = document.getElementById("Jenis_Pembayaran").value;
    var pembayaranMelaluiDropdown = document.getElementById("Pembayaran_melalui");
  
    // Menghapus semua opsi Pembayaran Melalui sebelum menambahkan yang baru
    pembayaranMelaluiDropdown.innerHTML = '<option value="" disabled selected>Pembayaran Melalui</option>';
  
    if (selectedJenisPembayaran === "Transfer_Bank") {
      addOption(pembayaranMelaluiDropdown, "BCA", "BCA");
      addOption(pembayaranMelaluiDropdown, "BSI", "BSI");
      addOption(pembayaranMelaluiDropdown, "MANDIRI", "MANDIRI");
      addOption(pembayaranMelaluiDropdown, "BRI", "BRI");
    } else if (selectedJenisPembayaran === "E-Wallet") {
      addOption(pembayaranMelaluiDropdown, "Gopay", "Gopay");
      addOption(pembayaranMelaluiDropdown, "Dana", "Dana");
      addOption(pembayaranMelaluiDropdown, "OVO", "OVO");
      addOption(pembayaranMelaluiDropdown, "SHOPEEPAY", "SHOPEEPAY");
    }
    // Tambahkan kasus lain jika diperlukan
  }
  
  function addOption(selectElement, value, text) {
    var option = document.createElement("option");
    option.value = value;
    option.text = text;
    selectElement.add(option);
  }