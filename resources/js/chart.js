import Chart from 'chart.js/auto';

const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'My First dataset', //label üstteki labels dediği yer sütunlar
        backgroundColor: 'rgb(2, 99, 132)',
        borderColor: 'rgb(2, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45], /*bu kısım verilerin geleceği yer*/
    }]
};

const config = {type: 'line',data: data,options: {}};

new Chart(document.getElementById('myChart'),config);
