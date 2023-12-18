<!DOCTYPE html>
<html>
<head>
    <title>RajaOngkir Demo</title>
</head>
<body>
    <h1>RajaOngkir Demo</h1>

    <form action="{{ route('calculateShippingCost') }}" method="POST">
        @csrf

        <label for="province">Pilih Provinsi:</label>
        <select name="province" id="province" onchange="getCities(this.value)">
            <option value="" disabled selected>Pilih Provinsi</option>
            @foreach($provinces as $province)
                <option value="{{ $province['province_id'] }}">{{ $province['province'] }}</option>
            @endforeach
        </select>

        <label for="city">Pilih Kota:</label>
        <select name="city" id="city">
            <option value="" disabled selected>Pilih Kota</option>
        </select>

        <button type="submit">Hitung Ongkir</button>
    </form>

    <script>
        function getCities(provinceId) {
            // Menggunakan AJAX untuk mendapatkan data kota berdasarkan provinsi
            fetch(`/get-cities?province_id=${provinceId}`)
                .then(response => response.json())
                .then(data => {
                    const citySelect = document.getElementById('city');
                    citySelect.innerHTML = '<option value="" disabled selected>Pilih Kota</option>';

                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.city_id;
                        option.text = city.city_name;
                        citySelect.appendChild(option);
                    });
                });
        }
    </script>
</body>
</html>
