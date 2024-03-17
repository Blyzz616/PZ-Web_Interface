document.addEventListener("DOMContentLoaded", function() {
    // Fetch the data from the file
    fetch('/ini/data.txt')
        .then(response => response.text())
        .then(data => {
            // Extract ServerWelcomeMessage
            const serverWelcomeMessageRegex = /^ServerWelcomeMessage=(.*)$/m;
            const serverWelcomeMessageMatch = data.match(serverWelcomeMessageRegex);
            if (serverWelcomeMessageMatch) {
                const serverWelcomeMessage = serverWelcomeMessageMatch[1].trim();
                document.getElementById("serverWelcomeTextarea").value = serverWelcomeMessage;
            }

            // Extract WorkshopItems
            const workshopItemsRegex = /^WorkshopItems=([\d;]*)$/m;
            const workshopItemsMatch = data.match(workshopItemsRegex);
            if (workshopItemsMatch) {
                const workshopItems = workshopItemsMatch[1].trim();
                document.getElementById("workshopItemsInput").value = workshopItems;
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});
