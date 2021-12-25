@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    {{-- Revenue Chart current year--}}
    <h5 class="mt-4 textColor">
        Revenue Chart For Current Year: {{ '$currentYear' }}
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="100%" height="20">
                </div>
            </div>
        </div>
        {{-- Revenue Chart current year--}}
        <h5 class="mt-4 textColor">
            Revenue Chart For Current Year: {{ '$currentYearALL' }}
        </h5>
        <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
        <div class="col-xl-12">
            <div class="card mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart
                </div>
                <div class="card-body">
                    <canvas id="myChart2" width="100%" height="20"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    //chart 1
    const ctx = document.getElementById('myChart').getContext('2d');
const myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'March', 'June', 'July', 'Aug'],
        datasets: [{
            label: 'Revenue:',
            data: [70000, 50000, 8000, 70000, 90000, 30000],
            backgroundColor: [
                '#ff6384',
                '#36a2eb',
                '#ffce56',
                '#4bc0c0',
                '#4bc0c0',
                '#ff9f40'
            ],
            borderColor: [
                '#ff6384',
                '#36a2eb',
                '#ffce56',
                '#4bc0c0',
                '#9966ff',
                '#ff9f40'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
var xValues = ["2018", "2019", "2020", "2021", "2022"];
var yValues = [70000, 50000, 8000, 70000];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart2", {
type: "bar",
data: {
labels: xValues,
datasets: [{
backgroundColor: barColors,
data: yValues
}]
},
options: {
legend: {display: false},
title: {
display: true,
text: "Revenue:"
}
}
});
</script>
@endsection