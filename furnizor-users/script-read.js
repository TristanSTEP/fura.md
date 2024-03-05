// update in read.html start

let form = document.getElementById("form-read");
let cancelBtn = document.getElementById("cancel");
let openBtn = document.getElementById("edit-btn");

openBtn.addEventListener("click", function() {
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
})

cancelBtn.addEventListener("click", function() {
    if (form.style.display === "block") {
        form.style.display = "none";
    }
})

// update in read.html end