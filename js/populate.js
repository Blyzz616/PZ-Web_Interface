document.addEventListener('DOMContentLoaded', function () {
    let page = 1; // Initial page number
    const container = document.getElementById('container');

    function fetchData() {
        fetch(`tmp/${String(page).padStart(4, '0')}.json`)
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    const div = createItemDiv(item);
                    container.appendChild(div);
                });
                page++;
            })
            .catch(error => console.error('Error fetching JSON:', error));
    }

    fetchData();


    // Function to handle adding an item
    function handleAddItem(itemId) {
        const addButton = document.querySelector(`.add-button[data-id="${itemId}"]`);
        const removeButton = document.querySelector(`.remove-button[data-id="${itemId}"]`);

        addButton.style.visibility = 'hidden';
        removeButton.style.visibility = 'visible';

        // Modify ini/data.txt
        modifyDataFile(itemId, addButton.dataset.modid, true);
    }

    // Function to handle removing an item
    function handleRemoveItem(itemId) {
        const addButton = document.querySelector(`.add-button[data-id="${itemId}"]`);
        const removeButton = document.querySelector(`.remove-button[data-id="${itemId}"]`);

        addButton.style.visibility = 'visible';
        removeButton.style.visibility = 'hidden';

        // Modify ini/data.txt
        modifyDataFile(itemId, removeButton.dataset.modid, false);
    }

    function createItemDiv(item) {
        const div = document.createElement('div');
        div.classList.add('item');

        const tabDiv = document.createElement('div');
        tabDiv.classList.add('tab');
        tabDiv.textContent = `${item.name}`;

        const jsonDataDiv = document.createElement('div');
        jsonDataDiv.classList.add('json-data');

        const previewImageDiv = document.createElement('div');
        previewImageDiv.classList.add('preview-image');
        previewImageDiv.innerHTML = `<img src="${item.preview}" alt="Preview Image">`;

        const wsidDiv = document.createElement('div');
        wsidDiv.classList.add('wsid');
        wsidDiv.textContent = `Workshop ID: ${item.id}`;

        const modDiv = document.createElement('div');
        modDiv.classList.add('mod');
        modDiv.textContent = `Mod ID: ${item.modid}`;

        const fileSizeDiv = document.createElement('div');
        fileSizeDiv.classList.add('file-size');
        fileSizeDiv.textContent = `File Size: ${item.file_size}`;

        const postedDiv = document.createElement('div');
        postedDiv.classList.add('posted');
        postedDiv.textContent = `Posted: ${item.posted}`;

        const starsDiv = document.createElement('div');
        starsDiv.classList.add('stars');
        starsDiv.innerHTML = `<img src="${item.stars}" alt="Stars">`;

        const creatorDiv = document.createElement('div');
        creatorDiv.classList.add('creator');
        creatorDiv.innerHTML = `
            <div class="creator-header">
                <center>Created by:</center>
            </div>
            <div class="creator-image">
                <center><img src="${item.creator.image}" alt="Creator Image"></center>
            </div>
            <div class="creator-name">
                <center>${item.creator.name}</center>
            </div>
        `;

        const subscribersDiv = document.createElement('div');
        subscribersDiv.classList.add('subscribers');
        subscribersDiv.textContent = `Subs: ${item.subscribers}`;


        const addButton = document.createElement('button');
        addButton.textContent = '+ Add';
        addButton.classList.add('button', 'add-button');
        addButton.dataset.id = item.id; // Store item.id as a data attribute
        addButton.dataset.modid = item.modid; // Store item.modid as a data attribute
        addButton.addEventListener('click', function() {
            handleAddItem(item.id);
        });

        const removeButton = document.createElement('button');
        removeButton.textContent = '- Remove';
        removeButton.classList.add('button', 'remove-button');
        removeButton.dataset.id = item.id; // Store item.id as a data attribute
        removeButton.dataset.modid = item.modid; // Store item.modid as a data attribute
        removeButton.addEventListener('click', function() {
            handleRemoveItem(item.id);
        });

        jsonDataDiv.appendChild(starsDiv);
        jsonDataDiv.appendChild(subscribersDiv);
        jsonDataDiv.appendChild(previewImageDiv);
        jsonDataDiv.appendChild(creatorDiv);
        jsonDataDiv.appendChild(fileSizeDiv);
        jsonDataDiv.appendChild(postedDiv);
        jsonDataDiv.appendChild(wsidDiv);
        jsonDataDiv.appendChild(modDiv);
        jsonDataDiv.appendChild(addButton);
        jsonDataDiv.appendChild(removeButton);

        div.appendChild(tabDiv);
        div.appendChild(jsonDataDiv);

        return div;
    }


});
