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
            query = "SELECT b.*, CEIL(AVG(t.rating)) AS rata_rata_rating FROM bookingdestinasi b JOIN testimoni t ON b.id_booking = t.id_booking GROUP BY b.id_booking ORDER BY rata_rata_rating DESC;";
            break;
        case 'discountBtn':
            query = "SELECT * FROM `bookingdestinasi` ORDER BY harga_promo ASC LIMIT 6;";
            break;
    }

    console.log(query);
    document.getElementById('query').value = query;

    console.log("jalan")

    $.ajax({
        type: "POST",
        url: "klasifikasi.php",
        data: { query: query },
        success: function(response) {
            // Handle response from the server
            console.log(response);
    
            // Update konten di dalam elemen dengan ID 'result-container'
            document.getElementById('result-container').innerHTML = response;
        },
        error: function(error) {
            console.error(error);
        }
    });
}