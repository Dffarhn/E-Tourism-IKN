const minusButtons = document.querySelectorAll('.minus');
const plusButtons = document.querySelectorAll('.plus');
const inputFields = document.querySelectorAll('.input');
const jumlahperbarang = [];

// Pastikan elemen inputField ada sebelum mengatur properti disabled
if (inputFields.length > 0) {
    inputFields[0].disabled = true;
}

// Tambah event listener ke setiap tombol minus
minusButtons.forEach((button, i) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        updateQuantity(i, -1);
    });
});

// Inisialisasi jumlahperbarang dengan nilai awal 1 untuk setiap elemen input
inputFields.forEach((input, i) => {
    jumlahperbarang[i] = 1;
});

// Tambah event listener ke setiap tombol plus
plusButtons.forEach((button, i) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        updateQuantity(i, 1); // Mengganti parameter change menjadi 1
    });
});

// Tambah event listener ke setiap input field
inputFields.forEach((input, i) => {
    input.addEventListener('input', (event) => {
        event.preventDefault();
        updateQuantity(i, 0);
    });
});

// Fungsi untuk memperbarui jumlahperbarang
function updateQuantity(index, change) {
    const quantityInput = document.getElementById('quantity' + index);
    let currentValue = parseInt(quantityInput.value) || 0;

    // Pastikan nilai tidak kurang dari 1
    if (currentValue + change > 0) {
        currentValue += change;
        quantityInput.value = currentValue;
        updateJumlahPerBarang(index, currentValue);
    }
}

// Fungsi untuk memperbarui jumlahperbarang dalam array
function updateJumlahPerBarang(index, value) {
    jumlahperbarang[index] = value;
    console.log("Jumlah Perbarang:", jumlahperbarang);
    kirimDataKeServer();
}

function kirimDataKeServer() {
    const endpointURL = "querypesann.php";

    $.ajax({
        type: "POST",
        url: endpointURL,
        data: { query: jumlahperbarang },
        success: function(response) {
            // Reload halaman
            console.log("reloadjalan");
            

            reloadSpecificFile();
        },
        error: function(error) {
            console.error(error);
        }
    });
}


function reloadSpecificFile() {
    const endpointURL = "querypesann.php";  // Ganti dengan URL file yang ingin dimuat ulang

    $.ajax({
        type: "GET",
        url: endpointURL,
        success: function(response) {
             // Membuat elemen div sementara untuk menampung respons dan mengakses elemennya
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = response;

    // Mengakses elemen dengan ID "result-harga" dari elemen sementara
    const resultHargaElement = tempDiv.querySelector('#result-harga');

    if (resultHargaElement) {
        // Memuat hasil manipulasi ke dalam elemen HTML
        $("#result-harga").html(resultHargaElement.innerHTML);
    } else {
        console.error("Elemen dengan ID 'result-harga' tidak ditemukan dalam respons.");
    }
        },
        error: function(error) {
            console.error(error);
        }
    });
}

console.log(jumlahperbarang)
