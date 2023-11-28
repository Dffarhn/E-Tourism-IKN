document.getElementById("uploadImage").addEventListener("change", function() {
    var fileName = this.value.split("\\").pop();

    // var fileName = this.files[0].name;
    document.getElementById("selected_image").value = fileName;
    // alert("Selected file: " + fileName);
    // You can perform additional actions here, such as uploading the file or displaying the selected file name.
});