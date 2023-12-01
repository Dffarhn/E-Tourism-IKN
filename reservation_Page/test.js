const minusButton = document.getElementById('minus');
const plusButton = document.getElementById('plus');
const inputField = document.getElementById('input');
const totalPembayaranElement = document.getElementById('hasil_pembayaran');

inputField.disabled=true;

minusButton.addEventListener('click', event => {
    event.preventDefault();
    const currentValue = Number(inputField.value) || 0;
    // Memastikan nilai tidak kurang dari 1
    if (currentValue > 1) {
      inputField.value = currentValue - 1;
      hitungTotal();
    }
  });

plusButton.addEventListener('click', event => {
  event.preventDefault();
  console.log('plusButton clicked')
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue + 1;
  hitungTotal();
});

function hitungTotal() {
    var jumlahInput = inputField.value;
    console.log(jumlahInput)
    var totalPembayaran = jumlahInput * hargaPromo;
    console.log(totalPembayaran)
    var totalPembayaranFormat = new Intl.NumberFormat('id-ID', {  style: 'currency',
    currency: 'IDR',
    minimumFractionDigits: 0,
    maximumFractionDigits: 2
    }).format(totalPembayaran);
    document.getElementById('hasil_pembayaran').innerText =totalPembayaranFormat;
    document.getElementById('harga').value =totalPembayaran.toString();
  }