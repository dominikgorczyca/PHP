function getTodos(callback) {
    let request = new XMLHttpRequest();

    request.addEventListener('readystatechange', () => {
        // console.log(request);
        if(request.readyState === 4 && request.status === 200) {
            callback(undefined, request.responseText);
        } else if (request.readyState === 4) {
            callback('could not fetch', undefined);
        }
    });
    
    request.open('GET', 'https://jsonplaceholder.typicode.com/todos/');
    request.send();
}

console.log(1);

getTodos((err, data) => {
    console.log('callback fired');
    // console.log(err, err == undefined);
    
    if(err === undefined) {
        document.getElementById("completed").innerText = data;
    } else {
        console.log(err)
    }
});

console.log(2);


