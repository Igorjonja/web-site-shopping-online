const app = document.getElementById("koren");

const container = document.createElement("div");
container.setAttribute("class", "container");

const catimg = document.createElement("img");
catimg.setAttribute("class", "catimg");
catimg.setAttribute("alt", "Some random cat")

app.appendChild(container);
app.appendChild(catimg);

let request = new XMLHttpRequest();

request.open('GET', 'https://api.thecatapi.com/v1/images/search', true)
request.onload = function() {

    let data = JSON.parse(this.response);
    // document.write(app) = data;
    if (request.status >= 200 && request.status < 400) {
        console.log(data);

        data.forEach((cat) => {
            catimg.src = cat["url"];




        });


    } else {
        const errorMessage = document.createElement("mark");
        errorMessage.textContent = "Some thing wrong";
    }


}

request.send();