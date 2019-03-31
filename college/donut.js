google.load("visualization", "1", {
    packages: ["corechart"]
});

google.setOnLoadCallback(drawChart);

function drawChart() {
var data = new google.visualization.DataTable();
    data.addColumn('string', 'Volume');
    data.addColumn('number', 'Mortgage Volume');
    data.addRows([
        ['A', 94],
        ['B', 6,]
        ]);
    var options = {
        title:'Mortgage Volume',
        width: 200,
        height:200,
        colors: ['#93d150','#ccc'],
       pieSliceText:'none',
       pieHole: 0.70,    
                 legend: 'none',
        //legend: { position: 'labeled' },
       slices: {  1: {offset: 0.05},
          },
                 tooltip : {trigger: 'none'},
        animation: {
                duration: 1500,
                startup: true
            }
    };
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);

// Chart 2
var data = new google.visualization.DataTable();
    data.addColumn('string', 'Volume');
    data.addColumn('number', 'Mortgage Volume');
    data.addRows([
        ['A',72],
        ['B', 28,]
        ]);
    var options = {
        title:'Mortgage Volume',
        width: 200,
        height:200,
        colors: ['#4472c5','#ccc'],
       pieSliceText:'none',
       pieHole: 0.70,    
                 legend: 'none',
        //legend: { position: 'labeled' },
       slices: {  1: {offset: 0.05},
          },
                 tooltip : {trigger: 'none'},
        animation: {
                duration: 1500,
                startup: true
            }
    };
    var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
    chart.draw(data, options);

// Chart 3
var data = new google.visualization.DataTable();
    data.addColumn('string', 'Volume');
    data.addColumn('number', 'Mortgage Volume');
    data.addRows([
        ['A',39],
        ['B', 61,]
        ]);
    var options = {
        title:'Mortgage Volume',
        width: 200,
        height:200,
        colors: ['red','#ccc'],
       pieSliceText:'none',
       pieHole: 0.70,    
                 legend: 'none',
        //legend: { position: 'labeled' },
       slices: {  1: {offset: 0.05},
          },
                 tooltip : {trigger: 'none'},
        animation: {
                duration: 1500,
                startup: true
            }
    };
    var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
    chart.draw(data, options);


// Chart 4
var data = new google.visualization.DataTable();
    data.addColumn('string', 'Volume');
    data.addColumn('number', 'Mortgage Volume');
    data.addRows([
        ['A',100],
        ['B', 0,]
        ]);
    var options = {
        title:'Mortgage Volume',
        width: 200,
        height:200,
        colors: ['orange','#ccc'],
       pieSliceText:'none',
       pieHole: 0.70,    
                 legend: 'none',
        //legend: { position: 'labeled' },
       slices: {  1: {offset: 0.05},
          },
                 tooltip : {trigger: 'none'},
        animation: {
                duration: 1500,
                startup: true
            }
    };
    var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
    chart.draw(data, options);

}

