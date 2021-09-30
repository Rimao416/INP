var options1={
    series:[{data:[25,66,41,89,63,25,44,20,36,40,54]}],fill:{colors:["#5b73e8"]},
    chart:{type:"bar",width:70,height:40,sparkline:{enabled:!0}},
    plotOptions:{bar:{columnWidth:"50%"}},labels:[1,2,3,4,5,6,7,8,9,10,11],
    xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},
    x:{show:!1},
    y:{title:{formatter:function(e){return""}}},marker:{show:!1}}},
    chart1=new ApexCharts(document.querySelector("#total-revenue-chart"),options1);
    chart1.render();
    var options={fill:{colors:["#34c38f"]}
    ,series:[70],chart:{type:"radialBar",width:45,height:45,sparkline:{enabled:!0}},
    dataLabels:{enabled:!1},plotOptions:{radialBar:{hollow:{margin:0,size:"60%"},track:{margin:0},
    dataLabels:{show:!1}}}},
    chart=new ApexCharts(document.querySelector("#orders-chart"),options);
    chart.render();
    options={fill:{colors:["#5b73e8"]},series:[55],chart:{type:"radialBar",width:45,height:45,sparkline:{enabled:!0}}
    ,dataLabels:{enabled:!1},plotOptions:{radialBar:{hollow:{margin:0,size:"60%"},track:{margin:0},dataLabels:{show:!1}}}};
    (chart=new ApexCharts(document.querySelector("#customers-chart"),options)).render();
    var options2={series:[{data:[25,66,41,89,63,25,44,12,36,9,54]}],fill:{colors:["#f1b44c"]},
    chart:{type:"bar",width:70,height:40,sparkline:{enabled:!0}},plotOptions:{bar:{columnWidth:"50%"}
},labels:[1,2,3,4,5,6,7,8,9,10,11],xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},
x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}},
chart2=new ApexCharts(document.querySelector("#growth-chart"),options2);
chart2.render();
/*options={chart:{height:339,type:"line",stacked:!1,toolbar:{show:!1}},stroke:{width:[0,2,4],curve:"smooth"},plotOptions:{bar:{columnWidth:"30%"}},colors:["#5b73e8","#dfe2e6","#f1b44c"],
series:[{name:"Desktops",type:"column",data:[23,11,22,27,13,22,37,21,44,22,30]},{name:"Laptops",type:"area",data:[44,55,41,67,22,43,21,41,56,27,43]},{name:"Tablets",type:"line",data:[30,25,36,30,45,35,64,52,59,36,39]}],fill:{opacity:[.85,.25,1],gradient:{inverseColors:!1,shade:"light",type:"vertical",opacityFrom:.85,opacityTo:.55,stops:[0,100,100,100]}},labels:["01/01/2003","02/01/2003","03/01/2003","04/01/2003","05/01/2003","06/01/2003","07/01/2003","08/01/2003","09/01/2003","10/01/2003","11/01/2003"],markers:{size:0},xaxis:{type:"datetime"},yaxis:{title:{text:"Points"}},tooltip:{shared:!0,intersect:!1,y:{formatter:function(e){return void 0!==e?e.toFixed(0)+" points":e}}},grid:{borderColor:"#f1f1f1"}};(chart=new ApexCharts(document.querySelector("#sales-analytics-chart"),options)).render();
*/
//sales-analytics-chart
var ma_date=$('#date').attr('name');
var total_date=$('#total_date').attr('name');
let date_slice=ma_date.split(',')
let total_slice=total_date.split(',')
var options = {
  series: [ {
  name: 'Revenue',
  type: 'column',
  data: total_slice
}],
  chart: {
  height: 350,
  type: 'line',
  stacked: false
},
dataLabels: {
  enabled: false
},
stroke: {
  width: [2, 2, 4]
},
title: {
  text: 'REPRESENTATION JOURNALIERE DES UTILISATEURS',
  align: 'left',
  offsetX: 110
},
xaxis: {
  categories: date_slice,
},
yaxis: [
  {
    axisTicks: {
      show: true,
    },
    axisBorder: {
      show: true,
      color: '#008FFB'
    },
    labels: {
      style: {
        colors: '#008FFB',
      }
    },
  },
  {
    seriesName: 'Income',
    opposite: true,
    axisTicks: {
      show: true,
    },
    axisBorder: {
      show: true,
      color: '#00E396'
    },
    labels: {
      style: {
        colors: '#00E396',
      }
    },
  },
  {
    seriesName: 'Revenue',
    opposite: true,
    axisTicks: {
      show: true,
    },
    axisBorder: {
      show: true,
      color: '#FEB019'
    },
    labels: {
      style: {
        colors: '#FEB019',
      },
    },
  },
],
tooltip: {
  fixed: {
    enabled: true,
    position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
    offsetY: 30,
    offsetX: 60
  },
},
legend: {
  horizontalAlign: 'left',
  offsetX: 40
}
};

var chart = new ApexCharts(document.querySelector("#sales-analytics-chart"), options);
chart.render();

var element=$('#nationalité').attr('name');
var array = JSON.parse("[" + element + "]");
var element2=$('#pays').attr('name');
var total_pays=$('#total_pays').attr('name');

//var array2 = JSON.parse("[" + element2 + "]");
//console.log(element2)
element2_slice=element2.split(',')


var options = {
    series: array,
    chart: {
    height: 400,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '22px',
        },
        value: {
          fontSize: '16px',
        },
        total: {
          show: true,
          label: 'Total',
          formatter: function (w) {
            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
            return total_pays
          }
        }
      }
    }
  },
  labels:element2_slice,
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);
  chart.render();