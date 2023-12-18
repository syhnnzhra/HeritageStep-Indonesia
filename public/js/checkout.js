function getProvinces() {
    fetch('/checkout/provinces')
        .then(response => response.json())
        .then(data => {
            const provinceSelect = document.getElementById('province');
            provinceSelect.innerHTML = '';

            data.provinces.forEach(province => {
                const option = document.createElement('option');
                option.value = province.id;
                option.text = province.title;
                provinceSelect.add(option);
            });
        })
        .catch(error => console.error('Error:', error));
}

function getCities() {
    const provinceId = document.getElementById('province').value;
    const citySelect = document.getElementById('city');
    citySelect.innerHTML = '';

    fetch(`/checkout/cities/${provinceId}`)
        .then(response => response.json())
        .then(data => {
            data.cities.forEach(city => {
                const option = document.createElement('option');
                option.value = city.id;
                option.text = city.title;
                citySelect.add(option);
            });
        })
        .catch(error => console.error('Error:', error));
}

document.addEventListener('DOMContentLoaded', getProvinces);
