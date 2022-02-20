fetch('https://jsonplaceholder.typicode.com/todos/10')
  .then(response => response.json())
  .then(json => {
        // console.log(json);
    });

// console.log(fetch('https://jsonplaceholder.typicode.com/todos/10'));

let request = new XMLHttpRequest();

request.addEventListener('readystatechange', () => {
   if(request.readyState === 4) {
       console.log(request.responseText);
        // document.getElementById("title").innerText = request.responseText;
        document.getElementById("completed").innerText = request.responseText;
   }
});

request.open('GET', 'https://jsonplaceholder.typicode.com/todos/');
request.send()



