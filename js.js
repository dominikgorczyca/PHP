function getTodos(endPoint, callback = () => {}) {
    let request = new XMLHttpRequest();

    request.addEventListener('readystatechange', () => {
        // console.log(request);
        if(request.readyState === 4 && request.status === 200) {
            const data = JSON.parse(request.responseText);
            document.getElementById("title").innerHTML += `${data[0].one} `;
            document.getElementById("completed").innerHTML += `${data[1].two} `;
            callback();
        } else if (request.readyState === 4) {
            callback('could not fetch', undefined);
        }
    });
    
    request.open('GET', endPoint);
    request.send();
}


const something = function () {
    return new Promise((res, rej) => {
        // res("dataaa");
        rej("error");
    });
}

something().then(data => {
    console.log(data);
}).catch(err => {
    console.log(err);
});



