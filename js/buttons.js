function handleAddItem(itemId, modId) {
    const addButton = document.getElementById(`add_${itemId}`);
    const removeButton = document.getElementById(`remove_${itemId}`);

    addButton.style.visibility = 'hidden';
    removeButton.style.visibility = 'visible';

    // Modify ini/data.txt
    modifyDataFile(itemId, modId, true);
}

function handleRemoveItem(itemId, modId) {
    const addButton = document.getElementById(`add_${itemId}`);
    const removeButton = document.getElementById(`remove_${itemId}`);

    addButton.style.visibility = 'visible';
    removeButton.style.visibility = 'hidden';

    // Modify ini/data.txt
    modifyDataFile(itemId, modId, false);
}

function modifyDataFile(itemId, modId, isAdding) {
    const dataLine = `WorkshopItems=;${itemId};`;
    const modLine = `Mods=;${modId};`;

    // Fetch and modify the ini/data.txt file
    fetch('ini/data.txt')
        .then(response => response.text())
        .then(data => {
            let newData = data;

            // Update WorkshopItems line
            if (isAdding) {
                newData += dataLine;
            } else {
                newData = newData.replace(dataLine, '');
            }

            // Update Mods line
            if (isAdding) {
                newData += modLine;
            } else {
                newData = newData.replace(modLine, '');
            }

            // Send updated data back to server
            return fetch('update.php', {
                method: 'POST',
                body: newData
            });
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to update data file');
            }
        })
        .catch(error => console.error('Error updating data file:', error));
}
