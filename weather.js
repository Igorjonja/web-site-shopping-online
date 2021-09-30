const genCont=document.getElementById("currentForecast");
const currentWeather=document.createElement("div");
const weatherList=document.getElementById("weatherList");

const temperature=document.createElement("li");
weatherList.appendChild(temperature);

const wind=document.createElement("li");
weatherList.appendChild(wind);

const condition=document.createElement("li");
weatherList.appendChild(condition);

const lastUpdated=document.createElement("blockquote");
currentForecast.appendChild(lastUpdated);



const data = null;
const xhr = new XMLHttpRequest();


xhr.open("GET", "http://api.weatherapi.com/v1/forecast.json?key=629f701968b940209a273216213009&q=Latvia&days=1&aqi=no&alerts=no", true);


xhr.onload = function() {
        // console.log(xhr.status);
        // console.log(this.response);
        let data = JSON.parse(this.response);
        console.log(data);

        // let currentTemperature=data.current.temp_c;
        
        temperature.innerHTML="Temperature: "+data.current.temp_c +" C"+"<sup>o</sup>";
        wind.innerHTML="Wind: "+data.current.wind_kph +" km/h";
        condition.innerHTML=data.current.condition.text;
        lastUpdated.innerHTML="Last updated: "+data.current.last_updated;
    }
xhr.send(data);

