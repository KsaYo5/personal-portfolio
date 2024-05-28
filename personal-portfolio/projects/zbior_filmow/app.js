document.addEventListener("DOMContentLoaded", function() {
    var images = document.querySelectorAll(".movie-image");
    images.forEach(function(image) {
        image.addEventListener("click", function() {
            var description = this.dataset.description;
            var modal = document.querySelector(".modal");
            var modalContent = document.querySelector(".modal-content");
            modalContent.innerHTML = description;
            modal.style.display = "block";
        });
    });


    window.onclick = function(event) {
        var modal = document.querySelector(".modal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
