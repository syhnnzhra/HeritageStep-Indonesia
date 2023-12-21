@extends('user.layouts.layout')

@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="uk-container uk-mb">
        <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-hover uk-card-body">
                    <h3 class="uk-card-title text-center">My Shopping Cart</h3>
                    @php
                        $subtotal = 0; 
                        $ongkir = 0;
                    @endphp
                    @if(count($orderedItems) > 0)
                        @foreach ($orderedItems as $cart)
                        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-cover-container">
                                <img src="https://source.unsplash.com/400x400/?category-products" alt="Product Image" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">nama barang</h3>
                                    <div class="uk-flex uk-flex-middle">
                                        <button class="uk-icon-button uk-margin-small-right" uk-icon="icon: plus" onclick="tambahJumlah()"></button>
                                        <form>
                                            <input class="uk-input uk-form-blank uk-form-width-xsmall" type="text" id="jumlah-barang" value="1" readonly>
                                        </form>
                                        <button class="uk-icon-button" uk-icon="icon: minus" onclick="kurangJumlah()" disabled></button>
                                    </div>
                                    <p class="uk-margin-remove-top">Harga: </p>
                                    <p class="uk-margin-remove-top">Rp xxx.xxx</p>
                                </div>
                            </div>
                        </div>
                        @php
                            $subtotal += $cart->qty * $cart->item->harga;
                        @endphp
                        @endforeach
                        @else
                            <div class="uk-card uk-card-default uk-margin">
                                <div class="uk-card-body">
                                    <h3 class="uk-card-body">You haven't chosen a product yet</h3>
                                </div>
                            </div>
                        @endif
                        <div class="uk-flex uk-flex-between uk-margin-top">
                            <p>Sub Total</p>
                            <p>Rp {{ number_format($subtotal) }}</p>
                        </div>
                        <div class="uk-flex uk-flex-between uk-margin-top">
                            <p>Shipping Cost</p>
                            <!-- <p>Rp xxx.xxx</p> -->
                            <div class="" id="shipping-cost-result"></div>
                        </div>
                        <div class="uk-flex uk-flex-between uk-margin-top">
                            <p>Total</p>
                            <p id="total">Rp xxx.xxx</p>
                        </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body" style="background-color: rgb(199,255,201); ">
                    <div class="">
                        <h3 class="uk-card-title text-center">Checkout</h3>
                    </div>
                    <form method="post" action="{{route('checkout.update', Auth::user()->id)}}" id="rajaongkirForm">
                    @Method('PUT')
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="status" value="Sudah Dibayar">
                        <input type="hidden" id="inputan" name="subtotal" value="<?php echo $subtotal; ?>">
                        <input type="hidden" id="postalfee" name="postal_fee" value="">
                        <input type="hidden" value="9" name="province_from">
                        <input type="hidden" value="23" name="origin" id="origin">
                        <input type="hidden" value="250" name="weight" id="weight">

                        <label for="">First Name</label>
                        <input type="text" name="first_name" id="" placeholder="Masukkan Nama Anda" class="uk-input" required>

                        <label for="">Last Name</label>
                        <input type="text" name="last_name" id="" placeholder="Masukkan Nama Anda" class="uk-input" required>

                        <label for="">Phone Number</label>
                        <div class="" id="only-number">
                            <input type="text" name="telephone" id="number" placeholder="Masukkan No Telephone Anda" class="uk-input" required>
                        </div>

                        <label for="">Address</label>
                        <input type="text" name="alamat" id="" placeholder="Masukkan Alamat Anda" class="uk-input" required>
                        
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-2@s">
                                <label for="">Province</label>
                                <select class="uk-select" name="province" id="province" onchange="getCities(this.value)">
                                    <option value="" disabled selected>Pilih Provinsi</option>
                                    @foreach($provinces as $province)
                                        <option value="{{ $province['province_id'] }}">{{ $province['province'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="uk-width-1-4@s">
                                <label for="">City</label>
                                <select name="city_id" class="uk-select" id="city" onchange="updateCityId()">
                                    <option value="" disabled selected>Pilih Kota</option>
                                </select>
                            </div>
                            <div class="uk-width-1-4@s">
                                <label for="">Postal Code</label>
                                <input type="text" name="kode_pos" id="" placeholder="Masukkan Kode Pos Anda" class="uk-input" required>
                            </div>
                        </div>
                        
                        <label for="">Courier</label>
                        <select name="courier" class="uk-select" id="courier">
                            <option value="" disabled selected>Pilih Kurir</option>
                            <option value="jne">JNE</option>
                            <option value="pos">POS</option>
                            <option value="tiki">TIKI</option>
                        </select>

                        <!-- <label for="">Postal Fee</label>
                        <select class="uk-select" required name="" id="ongkir">
                            <option value="" name="ongkir" id="ongkir">-Postal Fee-</option>
                        </select> -->

                        <label for="">Note</label>
                        <input type="text" name="rincian_opsional" id="" placeholder="Masukkan Pesan Anda (Optional)" class="uk-input">
                        
                        <div class="uk-flex uk-flex-between uk-margin-top">
                            <h1></h1>
                            <button type="submit" class="uk-button custom-green-button">Proceed to Payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        function getCities(provinceId) {
            console.log('getCities function called');
            fetch(`/get-cities?province_id=${provinceId}`)
                .then(response => response.json())
                .then(data => {
                    const citySelect = document.getElementById('city');
                    citySelect.innerHTML = '<option value="" disabled selected>Pilih Kota</option>';

                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.city_id;
                        option.text = `${city.type} ${city.city_name}`;
                        citySelect.appendChild(option);
                    });
                    const selectedCityId = "{{ old('city_id') }}";
                    if (selectedCityId) {
                        document.getElementById('city_id').value = selectedCityId;
                    }
                });
            // getCost();
        }

        function getCost() {
            var form = document.getElementById('rajaongkirForm');
            var formData = new FormData(form);

            fetch('/rajaongkir/getCost', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            })
            .then(response => response.json())
            .then(data => {
                var resultDiv = document.getElementById('result');
                resultDiv.innerHTML = JSON.stringify(data, null, 2);
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
    
    <!-- <script>
        jQuery(document).ready(function () {
            $('#courier').on('change', function() {
                var courier = jQuery(this).val();
                var token = $("meta[name='csrf-token']").attr("content");
                var origin = $('#origin').val();
                var destination = $('#destination').val();
                var weight = $('#weight').val();

                if(courier) {
                    jQuery.ajax({
                        url: '/check-ongkir/',
                        type: "post",
                        dataType: "json",
                        data: {
                            _token: token,
                            origin: origin,
                            destination: destination,
                            courier: courier,
                            weight: weight,
                        },
                        success:function(response) {
                            jQuery('#ongkir').empty();
                            $.each(response[0]['costs'], function (key, value) {
                                $('#ongkir').append('<option value="'+ value.cost[0].value +'">'+ response[0].code.toUpperCase()+' : <strong>'+value.service+'</strong> - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</option>')
                            });
                        }
                    });
                } else {
                    $('#ongkir').empty();
                }
            });

            $('#ongkir').on('change', function() {
                var ongkir = parseInt($('#ongkir').val()) || 0;
                var subtotal = parseInt($('#subtotal').text().replace(/[^\d]/g, '')) || 0;
                
                var total = ongkir + subtotal;
                $("#total").text('Rp ' + total.toLocaleString());
                $("#inputan").val(total);
                $("#postalfee").val(ongkir);
            });
        });
    </script> -->

@endsection
