var topChart = document.getElementById("top5").getContext('2d');
var topwin = new Chart(topChart, {
    type: 'bar',
    data: {
        labels: [],
        datasets: [{
            label: 'Top 5',
            data: [],
            backgroundColor: [],
            borderColor: [],
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
    }
});

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Gamers',
            data: [],
            backgroundColor: [
            'rgba(255, 0, 0, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)'
            ],
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
    }
});

$.getJSON("/studijos/MVC-Games/Dice/getTopPlayers", 

    function(result){
        $.each(result, function(i, field){
            
            myChart.data.labels.push(field.nickname);
            myChart.data.datasets[0].data.push(field.games);

        });
        myChart.update();
    });

console.log('JavaScript');
 $.getJSON("/studijos/MVC-Games/Dice/getTopWinners", 
   
    function(result){
        console.log(result);
        $.each(result, function(i, field){
            topwin.data.labels.push(field.nickname);
            topwin.data.datasets[0].data.push(field.win);
            topwin.data.datasets[0].backgroundColor.push("rgba("+Math.ceil(Math.random() * 255)+", "+Math.ceil(Math.random() * 255)+", "+Math.ceil(Math.random() * 255)+", 0.6)");
        });
        topwin.update();
    });