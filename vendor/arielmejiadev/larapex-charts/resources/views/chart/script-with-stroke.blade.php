<script>
    var options =
    {
        chart: {
            type: '{!! $chart->type() !!}',
            height: {!! $chart->height() !!}
        },
        plotOptions: {
            bar: {!! $chart->horizontal() !!}
        },
        colors: {!! $chart->colors() !!},
        series: {!! $chart->dataset() !!},
        dataLabels: {
            enabled: true
        },
        labels: [{!! $chart->labels() !!}],
        title: {
            text: "{!! $chart->title() !!}"
        },
        subtitle: {
            text: '{!! $chart->subtitle() !!}',
            align: '{!! $chart->subtitlePosition() !!}'
        },
        xaxis: {
            categories: {!! $chart->xAxis() !!}
        },
        grid: {!! $chart->grid() !!},
        stroke: {!! $chart->stroke() !!},
       /* yaxis: {
          labels: {
            formatter: function (value) {
              return '$' + parseFloat(value).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
          }
      },
  }
  */
}

var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);
chart.render();

</script>
