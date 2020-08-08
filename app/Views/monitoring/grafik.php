<div class="container-fluid">
    <div class="row p-2">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <canvas id="chart" class="w-100"></canvas>

        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            Tools Going Here
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>


    window.onload = function(){
        getData(function(data){
            jams = Array();
            kwhs = Array();
            data.forEach(element => {
                date = Date.parse(element.waktu_rekord);
                date = new Date(date);
                element.waktu = {
                    hari: date.getDay(),
                    tanggal: date.getDate(),
                    bulan: date.getMonth(),
                    tahun: date.getFullYear(),
                    jam: date.getHours()+":"+date.getMinutes()
                }

                jams.push(element.waktu.jam);
                kwhs.push(element.kwh)
            });

            console.log(data);

            var ctx = document.getElementById('chart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: jams,
                    datasets: [{
                        label: 'KWh',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: kwhs
                    }]
                },

                // Configuration options go here
                options: {}
            });
        })
    }

    function getData(onSucces){
        $.ajax({
            type  : 'GET',
            url   : '<?php base_url()?>/datamonitoring',
            async : true,
            dataType : 'json',
            success : function(data){
                onSucces(data);
            }
        });
    }
</script>