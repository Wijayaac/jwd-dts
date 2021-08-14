<?php
require_once('../templates/navbar.php')
?>
<div class="container d-flex d-flex-column justify-content-center card p-3 m-auto my-5" style="max-width: 540px;">
    <h3 class="text-center my-5">Price List</h3>
    <div class="mb-1">
        <input type="checkbox" class="btn-check" id="btn-moca" autocomplete="off">
        <label class="btn btn-outline-success d-flex justify-content-between" for="btn-moca">
            <p class="fw-bold">Mocachino</p>
            <p id='mocaPrice' class="fw-bold">50000</p>
        </label><br>
    </div>
    <div class="mb-1">
        <input type="checkbox" class="btn-check" id="btn-capu" autocomplete="off">
        <label class="btn btn-outline-success d-flex justify-content-between" for="btn-capu">
            <p class="fw-bold">Capuchino</p>
            <p id="capuPrice" class="fw-bold">20000</p>
        </label><br>
    </div>
    <div class="mb-1">
        <input type="checkbox" class="btn-check" id="btn-latte" autocomplete="off">
        <label class="btn btn-outline-success d-flex justify-content-between" for="btn-latte">
            <p class="fw-bold">Latte</p>
            <p id="lattePrice" class="fw-bold">30000</p>
        </label><br>
    </div>
    <div class="mb-1">
        <input type="checkbox" class="btn-check" id="btn-tea" autocomplete="off">
        <label class="btn btn-outline-success d-flex justify-content-between" for="btn-tea">
            <p class="fw-bold">Tea</p>
            <p id="teaPrice" class="fw-bold">25000</p>
        </label><br>
    </div>
    <div class="d-flex d-flex-column justify-content-between">

        <h5 class="text-center my-5">Total</h5>
        <h3 id="priceTag" class="text-center my-5"></h3>
    </div>
    <button onclick="getTotal()">Hitung</button>

</div>
<script type="text/javascript">

function getTotal() {
        var moca = document.getElementById('btn-moca').checked ? parseInt(document.getElementById('mocaPrice').innerHTML) : 0;
        
        var latte = document.getElementById('btn-latte').checked ? parseInt(document.getElementById('lattePrice').innerHTML) : 0;
        
        var capu = document.getElementById('btn-capu').checked ? parseInt(document.getElementById('capuPrice').innerHTML) : 0;
        
        var tea = document.getElementById('btn-tea').checked ? parseInt(document.getElementById('teaPrice').innerHTML) : 0;
        
        document.getElementById('priceTag').innerHTML ="RP. " +(moca+ latte+ capu+ tea);

    }
    // let total = mocaPrice + capuPrice + lattePrice + teaPrice;
</script>
<?php
require_once('../templates/bottom.php')
?>