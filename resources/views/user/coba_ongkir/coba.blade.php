<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>coba test ongkir</h1>
        <form method="post" action="/cekongkir">
            @Method('PUT')
            @csrf
                <div class="col-sm-6 mt-3">
                    <select class="form-control" required name="province" id="province">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinces as $p)
                            <option value="{{$p->province_id}}">{{$p->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6 mt-3">
                    <select class="form-control" required name="destination" id="destination">
                        <option value="">Pilih Kota</option>
                        <!-- @foreach ($city as $p)
                            <option value="{{$p->city_id}}">{{$p->type}} {{$p->title}}</option>
                        @endforeach -->
                    <select>
                </div>
                <div class="col-md-3 mt-3">
                    <input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos" value="" required>
                </div>                
                <div class="col-sm-12">
                    <select class="form-control mt-3" required name="courier" id="courier">
                        <option value="">Pilih Kurir</option>
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                    </select>
                </div> 
                <div class="col-12 text-right mt-3">
                    <button type="submit" class="brand-button"> Continue To Payment</button>
                </div>
        </form>

        <script>
        jQuery(document).ready(function ()
        {
            jQuery('#province').on('change',function(){
                var provinceID = jQuery(this).val();
                if(provinceID)
                {
                    jQuery.ajax({
                        url : '/getCity/' +provinceID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            jQuery('select[name="destination"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="destination"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="destination"]').empty();
                }
            });
            $('#courier').on('change', function() {
                var courier = jQuery(this).val();
                let token            = $("meta[name='csrf-token']").attr("content");
                var origin           = $('#origin').val();
                var destination      = $('#destination').val();
                var courier          = $('#courier').val();
                var weight           = $('#weight').val();
                if(courier)
                {
                    jQuery.ajax({
                        url : '/cekongkir/',
                        type : "post",
                        dataType : "json",
                        data:{
                            _token:              token,
                            origin:              origin,
                            destination:         destination,
                            courier:             courier,
                            weight:              weight,
                        },
                        success:function(response)
                        {
                            jQuery('select[name="ongkir"]').empty();
                            $.each(response[0]['costs'], function (key, value) {
                                $('#ongkir').append('<option value="'+ value.cost[0].value +'">'+ response[0].code.toUpperCase()+' : <strong>'+value.service+'</strong> - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</option>')
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="ongkir"]').empty();
                }
            })
        });
            $('#ongkir').on('change', function() {
                var ongkir           = $('#ongkir').val();
                var subtotal           = $('#total').val();
                
                var total = parseInt(ongkir) + parseInt(subtotal);
                $("#barang").text(total);
                $("#inputan").val(total);
                $("#postalfee").val(ongkir);
            })
    </script>
</body>
</html>