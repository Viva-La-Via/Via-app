(function(){




	var ctx = document.getElementById("myChart");

	var myChart = new Chart(ctx, {
		type: 'bar',
	    data: {
	        labels: vehicleAvgRoute,
	        datasets: [{
	            label: '# of Votes',
	            data: avgRoute,
	            backgroundColor: colorBackground,
	            borderColor: color,
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
    	},
    	responsive: true
    })

})();