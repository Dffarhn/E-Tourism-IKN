// let x = 1
// let y = 2

// console.log(x+y)


// console.log(x ==y)
// let lebihbesar = x>y
// let lebihkecil = x<y
// console.log(lebihbesar)
// console.log(lebihkecil)
// console.log("tes")
// let banding = (x >=9) ? "benyul" : "salah"
// console.log(banding)

// let nama = "dddaaaappp"

// let kapital = nama.toUpperCase()

// console.log(kapital)
function scrollToSection(sectionId) {
    var element = document.getElementById(sectionId);

    if (element) {
        element.scrollIntoView({ behavior: 'smooth'});
    }
}