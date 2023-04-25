
async function addToFavorites(id, endpoint) {

    const url = `/${endpoint}`;
    const data = {id: id}; 
    const response = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "mode": "cors",
            "Access-Control-Allow-Origin": "*",
        },
        body: JSON.stringify(data),
    });

    if (!response.ok) {
        const message = `An error has occured: ${response.status}`;
        throw new Error(message);
    }

    location.reload();

    return response.ok;
}

async function removeFromFavorites(id, endpoint) {
    const url = `/${endpoint}/${id}`;
    const response = await fetch(url, {
        method: "DELETE",
    });

    if (!response.ok) {
        const message = `An error has occured: ${response.status}`;
        console.log(response);
        throw new Error(message);
    }

    location.reload();
    
    return response.ok;
}

function toggleVisibility(id) {
    if (id === 'characters') {
        document.getElementById('character-container').classList.remove('hide-content');
        document.getElementById('comic-container').classList.add('hide-content');
    }
    if (id === 'comics') {
        document.getElementById('comic-container').classList.remove('hide-content');
        document.getElementById('character-container').classList.add('hide-content');
    }
}