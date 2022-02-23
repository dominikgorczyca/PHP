function getTodos(callback) {
    let request = new XMLHttpRequest();

    request.addEventListener('readystatechange', () => {
        // console.log(request);
        if(request.readyState === 4 && request.status === 200) {
            const data = JSON.parse(request.responseText);
            callback(undefined, data);
        } else if (request.readyState === 4) {
            callback('could not fetch', undefined);
        }
    });
    
    request.open('GET', 'myjson.json');
    request.send();
}

console.log(1);

getTodos((err, data) => {
    console.log('callback fired');
    // console.log(err, err == undefined);
    
    if(err === undefined) {
        console.log(data[0]);


        if(data.one == data.two) {
            console.log("nice");
        }
        console.log(data);
        console.log(typeof(data.two));
        document.getElementById("title").innerText = data.one;
        document.getElementById("completed").innerText = data.two;
    } else {
        console.log(err)
    }
});

console.log(2);


