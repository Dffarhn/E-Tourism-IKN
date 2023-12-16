    $(document).ready(function () {
        // Function to check if an element is in the viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to handle the scroll event
        function handleScroll() {
            var grettingWord = $(".gretting_word");
            var destinasiAnimasi = $(".destinasi_animasi");

            if (isElementInViewport(grettingWord[0])) {
                grettingWord.addClass("fadeInFromTop");
            }

            if (isElementInViewport(destinasiAnimasi[0])) {
                destinasiAnimasi.addClass("fadeInFromTop");
            }
        }

        // Attach the scroll event handler
        $(window).on("scroll", handleScroll);

        // Trigger the initial check when the page loads
        handleScroll();
    });
