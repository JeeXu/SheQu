/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace()

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
}());

// nav页面切换
$(".nav-item").click(function () {
  id = $(this).prop("id");
  $("." + id).show();
  $("." + id).siblings().hide();
  $("a.nav-link").removeClass("active");
  $("#" + id + " " + "a").addClass("active");
});

// 编辑发表信息
$("#publish").click(function (e) {

  var r = confirm("确认提交?");
  if (r != true) {
    return false;
  }
});

$("#reset").click(function () {
  $("#searchName").val("");
});