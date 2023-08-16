let region = document.querySelector('#region');
let province = document.querySelector('#province');
let city = document.querySelector('#city');
let barangay = document.querySelector('#barangay');

async function getData(select, url) {
    let response = await fetch(url);
    let items = await response.json();

    select.innerHTML = `<option selected disabled value="">--SELECT ${select.name.toUpperCase()}--</option>`;
    for (const item of items) {
        select.innerHTML += `<option>${item}</option>`;
    }
}

getData(region, `http://localhost/crudapp/api/get-region.php`)