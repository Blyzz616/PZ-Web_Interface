// Function to make AJAX request
function scrapeData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this.responseText); // Output response from scrape.php
            } else {
                console.error("Error: " + this.status + " - " + this.statusText); // Log error status
            }
        }
    };
    xhttp.onerror = function() {
        console.error("Network error occurred"); // Log network errors
    };
    xhttp.open("GET", "scrape.php", true);
    xhttp.send();
}

// Call scrapeData function after the main content is loaded
window.onload = function() {
    scrapeData();
};
