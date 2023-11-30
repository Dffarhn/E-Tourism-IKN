function changeTab(activeButton) {
    // Menghapus class 'active' dari semua tombol
    document.querySelectorAll('.choose_liburan_container button').forEach(function(button) {
        button.classList.remove('active');
    });

    // Menambah class 'active' pada tombol yang diklik
    document.getElementById(activeButton).classList.add('active');

    // Sesuaikan query berdasarkan tombol yang aktif
    var query = '';

    switch (activeButton) {
        case 'terbaruBtn':
            query = "SELECT * FROM `bookingdestinasi` ORDER BY id_booking DESC LIMIT 6";
            break;
        case 'terpopulerBtn':
            query = "SELECT * FROM `bookingdestinasi` ORDER BY RAND() LIMIT 6";
            break;
        case 'discountBtn':
            query = "SELECT * FROM `bookingdestinasi` ORDER BY id_booking ASC LIMIT 6";
            break;
    }

    console.log(query);
    document.getElementById('query').value = query;
}