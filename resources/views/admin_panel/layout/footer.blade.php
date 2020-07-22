{{--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>  --}}

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/chart-data.js')}}"></script>
<script src="{{asset('js/easypiechart.js')}}"></script>
<script src="{{asset('js/easypiechart-data.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script>
	window.onload = function () {
var chart1 = document.getElementById("line-chart").getContext("2d");
window.myLine = new Chart(chart1).Line(lineChartData, {
responsive: true,
scaleLineColor: "rgba(0,0,0,.2)",
scaleGridLineColor: "rgba(0,0,0,.05)",
scaleFontColor: "#c5c7cc"
});
};

$(document).ready(function(){
    $( document ).on( 'focus', ':input', function(){
        $( this ).attr( 'autocomplete', 'off' );
    });
});
function expend_n_collapse(id){
  var tt = $("#button_"+id).html();
  var rr = $("#button_"+id).attr("class");
  if(tt == '<i class="fa fa-plus"></i>' && rr == 'btn btn-success btn-sm'){
      $("#button_"+id).html('<i class="fa fa-minus"></i>');
      $("#button_"+id).attr("class", "btn btn-danger btn-sm");
  }else if(tt == '<i class="fa fa-minus"></i>' && rr == 'btn btn-danger btn-sm'){
    $("#button_"+id).html('<i class="fa fa-plus"></i>');
    $("#button_"+id).attr("class", "btn btn-success btn-sm");
  }
}
</script>
@section('extra_js')
        
@show
</body>
</html>