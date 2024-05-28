
var map = L.map('map', {
    center: [52.13, 19.29],
    zoom: 7,
    zoomControl: false,
    scrollWheelZoom: false,
    dragging: false,
});

var selectedVoivodeship = "";

async function getData() {
    const response = await fetch("https://raw.githubusercontent.com/ppatrzyk/polska-geojson/master/wojewodztwa/wojewodztwa-min.geojson");
    const data = await response.json();

    L.geoJSON(data, {
        style: {
            weight: 2,
            fillOpacity: 1,
            color: 'black',
            fillColor: 'white',
        },
        onEachFeature: function (feature, layer) {
            layer.on({
                click: highlightFeature,
            });
        },
    }).addTo(map);

    const list = document.querySelector("#list");

    for (let i in data.features) {
        const woj = document.createElement("li");
        woj.innerHTML = data.features[i].properties.nazwa;
        list.appendChild(woj);
    }

    selectedVoivodeship = random();
}

getData();

const rwoj = [
    "śląskie", 
    "opolskie", 
    "wielkopolskie", 
    "zachodniopomorskie", 
    "świętokrzyskie",
    "kujawsko-pomorskie", 
    "podlaskie", 
    "dolnośląskie", 
    "podkarpackie", 
    "małopolskie",
    "pomorskie", 
    "warmińsko-mazurskie", 
    "łódzkie", "mazowieckie", 
    "lubelskie", "lubuskie"
];

function random() {
    if (rwoj.length === 0) {
        rwoj.push(
            "śląskie", 
            "opolskie", 
            "wielkopolskie", 
            "zachodniopomorskie", 
            "świętokrzyskie",
            "kujawsko-pomorskie", 
            "podlaskie", 
            "dolnośląskie", 
            "podkarpackie", 
            "małopolskie",
            "pomorskie", 
            "warmińsko-mazurskie", 
            "łódzkie", "mazowieckie", 
            "lubelskie", "lubuskie"
        );
    }

    const randomIndex = Math.floor(Math.random() * rwoj.length);
    const selectedValue = rwoj[randomIndex];

    console.log(randomIndex, selectedValue);

    rwoj.splice(randomIndex, 1);
    const listw = document.querySelector("#listw");

    listw.innerHTML = '';
    const wpis = document.createElement("li");
    wpis.innerHTML = selectedValue;
    listw.appendChild(wpis);

    return selectedValue;
}

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

function highlightFeature(e) {
    resetMap();
    var layer = e.target;
    var clickedVoivodeship = layer.feature.properties.nazwa;

    if (clickedVoivodeship.toLowerCase() === selectedVoivodeship.toLowerCase()) {
        layer.setStyle({
            fillColor: 'green',
        });

        selectedVoivodeship = random();
    } else {
        layer.setStyle({
            fillColor: 'red',
        });
    }
}

function resetMap() {
    map.eachLayer(function (layer) {
        if (layer.feature) {
            layer.setStyle({});
        }
    });
}

function reset() {
    location.reload(true);
}

let start = document.querySelector('#start');
let stop  = document.querySelector('#stop');



start.addEventListener('click', function() {
	let timerId = setInterval(function() {
		console.log('!')
	}, 1000);
});

start.addEventListener('click', function() {
	let timerId = setInterval(function() {
		console.log('!')
	}, 1000);
});


stop.addEventListener('click', function() {
	clearInterval(timerId);
});