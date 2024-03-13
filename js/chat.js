// Wait for the DOM content to be fully loaded before executing the script
document.addEventListener("DOMContentLoaded", function() {
    // Get the checkbox and text input
    const globalChatCheckbox = document.getElementById("globalChatCheckbox");
    const chatStreamsInput = document.getElementById("chatStreamsInput");

    // Add event listener to the checkbox
    globalChatCheckbox.addEventListener("change", function() {
        // If checkbox is checked
        if (globalChatCheckbox.checked) {
            // Disable the text input
            chatStreamsInput.disabled = true;
        } else {
            // Enable the text input
            chatStreamsInput.disabled = false;
        }
    });
});
