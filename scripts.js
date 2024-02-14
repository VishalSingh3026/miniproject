document.addEventListener("DOMContentLoaded", function () {
    // Load reviews when the page is loaded
    loadReviews();
});

function submitReview() {
    var name = document.getElementById("name").value;
    var rating = document.getElementById("rating").value;
    var comment = document.getElementById("comment").value;
    var photoInput = document.getElementById("photo");
    var photo = photoInput.files[0];

    // Validate inputs
    if (!name || !rating || !comment || !photo) {
        alert("All fields are required!");
        return;
    }

    // Create a new FormData object to handle the file upload
    var formData = new FormData();
    formData.append("name", name);
    formData.append("rating", rating);
    formData.append("comment", comment);
    formData.append("photo", photo);

    // Use fetch to submit data to the server
    fetch("submit.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        // Load reviews again after submitting the form
        loadReviews();
    })
    .catch(error => console.error(error));
}

function loadReviews(){
    // Fetch reviews from the server
    fetch("get_reviews.php")
    .then(response => response.text())
    .then(data => {
        // Display reviews on the page
        document.getElementById("reviewsList").innerHTML = data;
    })
    .catch(error => console.error(error));
}
