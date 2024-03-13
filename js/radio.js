// Wait for the DOM content to be fully loaded before executing the script
document.addEventListener("DOMContentLoaded", function() {
    // Get the "All" checkbox and other checkboxes
    const allCheckbox = document.getElementById("disableRadio");
    const otherCheckboxes = document.querySelectorAll('[id^="disableRadio"]:not(#disableRadio)');

    // Add event listener to the "All" checkbox
    allCheckbox.addEventListener("change", function() {
        // If "All" checkbox is checked
        if (allCheckbox.checked) {
            // Disable and uncheck all other checkboxes
            otherCheckboxes.forEach(function(checkbox) {
                checkbox.checked = false;
                checkbox.disabled = true;
            });
        } else {
            // Enable all other checkboxes
            otherCheckboxes.forEach(function(checkbox) {
                checkbox.disabled = false;
            });
        }
    });
    allCheckbox.disabled = false;
});
