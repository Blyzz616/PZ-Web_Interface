document.addEventListener("DOMContentLoaded", function() {
    // Fetch the data from the file
    fetch('/ini/data.txt')
        .then(response => response.text())
        .then(data => {
            // Extract WorkshopItems
            const workshopItemsRegex = /^WorkshopItems=([\d;]*)$/m;
            const workshopItemsMatch = data.match(workshopItemsRegex);
            if (workshopItemsMatch) {
                const workshopItemsString = workshopItemsMatch[1].trim();
                const workshopItemsArray = workshopItemsString.split(';').map(item => parseInt(item.trim(), 10));
                console.log(workshopItemsArray); // Display the array in the console
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});
