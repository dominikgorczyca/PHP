function getTodos(endPoint) {

    return new Promise((resolve, reject) => {
        let request = new XMLHttpRequest();

        request.addEventListener('readystatechange', () => {
            // console.log(request);
            if(request.readyState === 4 && request.status === 200) {
                const data = JSON.parse(request.responseText);
                resolve(data);
            } else if (request.readyState === 4) {
                reject("Can't get resource");
            }
        });
        
        request.open('GET', endPoint);
        request.send();
    });


}

getTodos("jsons/myjson.json").then(data => {
    document.getElementById("title").innerHTML += `${data[0].one} `;
    document.getElementById("completed").innerHTML += `${data[1].two} `;
    return getTodos("jsons/one.json");
}).then(data => {
    document.getElementById("title").innerHTML += `${data[0].one} `;
    document.getElementById("completed").innerHTML += `${data[1].two} `;
    return getTodos("jsons/two.json");
}).then((data) => {
    document.getElementById("title").innerHTML += `${daasdfta[0].one} `;
    document.getElementById("completed").innerHTML += `${data[1].two} `;
}).catch(error => {
    console.log(`${error} NICE`);
});



