// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example
// var ctx = document.getElementById("myAreaChart");
// var myLineChart = new Chart(ctx, {
//   type: 'line',
//   data: {
//     labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
//     datasets: [{
//       label: "Sessions",
//       lineTension: 0.3,
//       backgroundColor: "rgba(2,117,216,0.2)",
//       borderColor: "rgba(2,117,216,1)",
//       pointRadius: 5,
//       pointBackgroundColor: "rgba(2,117,216,1)",
//       pointBorderColor: "rgba(255,255,255,0.8)",
//       pointHoverRadius: 5,
//       pointHoverBackgroundColor: "rgba(2,117,216,1)",
//       pointHitRadius: 20,
//       pointBorderWidth: 2,
//       data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
//     }],
//   },
//   options: {
//     scales: {
//       xAxes: [{
//         time: {
//           unit: 'date'
//         },
//         gridLines: {
//           display: false
//         },
//         ticks: {
//           maxTicksLimit: 7
//         }
//       }],
//       yAxes: [{
//         ticks: {
//           min: 0,
//           max: 40000,
//           maxTicksLimit: 5
//         },
//         gridLines: {
//           color: "rgba(0, 0, 0, .125)",
//         }
//       }],
//     },
//     legend: {
//       display: false
//     }
//   }
// });
// -- Bar Chart Example
var E = $('#E').val();
var I = $('#I').val();
var S = $('#S').val();
var N = $('#N').val();
var T = $('#T').val();
var F = $('#F').val();
var J = $('#J').val();
var P = $('#P').val();
var ctxEnergy = document.getElementById("energyBarChart");
var ctxInformation = document.getElementById("informationBarChart");
var ctxDecisionMaking = document.getElementById("decisionMakingBarChart");
var ctxLearningStyle = document.getElementById("learningStyleBarChart");
// var myLineChart = new Chart(ctx, {
//               type: 'horizontalBar',
//               data: {
//                   labels: ["J", "P", "F", "T", "N", "S", "E", "I"],
//                   datasets: [{
//                       label: "Result",
//                       backgroundColor: ["rgb(117,177,199)", "rgb(255,0,0)", "rgb(255,165,0)", "rgb(255,255,0)", "rgb(101,178,52)", "rgb(0,168,207)", "rgb(85,112,85)", "rgb(0,0,255)"],
//                       borderColor: "rgba(2,117,216,1)",
//                       data: [J, P, F, T, N, S, E, I],
//                       //   data: [J, P, F, T, N, S, E, I],
//                   }],
//               },
//               options: {
//                   scales: {
//                       xAxes: [{
//                           time: {
//                               unit: 'month'
//                           },
//                           gridLines: {
//                               display: false
//                           },
//                           ticks: {
//                               maxTicksLimit: 6
//                           }
//                       }],
//                       yAxes: [{
//                           ticks: {
//                               min: 0,
//                               max: 100,
//                               maxTicksLimit: 5,
//                               stepSize: 20
//                           },
//                           gridLines: {
//                               display: true
//                           }
//       }],
//     },
//     legend: {
//       display: false
//     }
//   }
// });

var energyChart = new Chart(ctxEnergy, {
    type: 'horizontalBar',
    data: {
        labels: ["Extrovert", "Introvert"],
        datasets: [{
            label: "Result",
            backgroundColor: ["rgb(85,112,85)", "rgb(0,0,255)"],
            borderColor: "rgba(2,117,216,1)",
            data: [E, I],
            //   data: [J, P, F, T, N, S, E, I],
        }],
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'month'
                },
                gridLines: {
                    display: false
                },
                ticks: {
                    maxTicksLimit: 6,
                    callback: function (value) {
                        return value + "%";
                    }
                }
            }],
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 100,
                    maxTicksLimit: 5,
                    stepSize: 20
                },
                gridLines: {
                    display: true
                }
            }],
        },
        legend: {
            display: false
        }
    }
});

var informationChart = new Chart(ctxInformation, {
              type: 'horizontalBar',
              data: {
                  labels: ["SENSING", "INTUITIVE"],
                  datasets: [{
                      label: "Result",
                      backgroundColor: ["rgb(0,168,207)", "rgb(101,178,52)"],
                      borderColor: "rgba(2,117,216,1)",
                      data: [S, N],
                      //   data: [J, P, F, T, N, S, E, I],
                  }],
              },
              options: {
                  scales: {
                      xAxes: [{
                          time: {
                              unit: 'month'
                          },
                          gridLines: {
                              display: false
                          },
                          ticks: {
                              maxTicksLimit: 6,
                              callback: function (value) {
                                  return value + "%";
                              }
                          }
                      }],
                      yAxes: [{
                          ticks: {
                              min: 0,
                              max: 100,
                              maxTicksLimit: 5,
                              stepSize: 20
                          },
                          gridLines: {
                              display: true
                          }
      }],
    },
    legend: {
      display: false
    }
  }
});


var decisionMakingChart = new Chart(ctxDecisionMaking, {
              type: 'horizontalBar',
              data: {
                  labels: ["THINKER", "FEELER"],
                  datasets: [{
                      label: "Result",
                      backgroundColor: ["rgb(255,165,0)", "rgb(255,255,0)"],
                      borderColor: "rgba(2,117,216,1)",
                      data: [T, F],
                      //   data: [J, P, F, T, N, S, E, I],
                  }],
              },
              options: {
                  scales: {
                      xAxes: [{
                          time: {
                              unit: 'month'
                          },
                          gridLines: {
                              display: false
                          },
                          ticks: {
                              maxTicksLimit: 6,
                              callback: function (value) {
                                  return value + "%";
                              }
                          }
                      }],
                      yAxes: [{
                          ticks: {
                              min: 0,
                              max: 100,
                              maxTicksLimit: 5,
                              stepSize: 20
                          },
                          gridLines: {
                              display: true
                          }
      }],
    },
    legend: {
      display: false
    }
  }
});


var learningStyleChart = new Chart(ctxLearningStyle, {
              type: 'horizontalBar',
              data: {
                  labels: ["JUDGING", "PERCEIVING"],
                  datasets: [{
                      label: "Result",
                      backgroundColor: ["rgb(117,177,199)", "rgb(255,0,0)"],
                      borderColor: "rgba(2,117,216,1)",
                      data: [J, P],
                      //   data: [J, P, F, T, N, S, E, I],
                  }],
              },
              options: {
                  scales: {
                      xAxes: [{
                          time: {
                              unit: 'month'
                          },
                          gridLines: {
                              display: false
                          },
                          ticks: {
                              maxTicksLimit: 6,
                              callback: function (value) {
                                  return value + "%";
                              }
                          }
                      }],
                      yAxes: [{
                          ticks: {
                              min: 0,
                              max: 100,
                              maxTicksLimit: 5,
                              stepSize: 20
                          },
                          gridLines: {
                              display: true
                          }
      }],
    },
    legend: {
      display: false
    }
  }
});

// // -- Pie Chart Example
// var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, {
//   type: 'pie',
//   data: {
//     labels: ["Blue", "Red", "Yellow", "Green"],
//     datasets: [{
//       data: [12.21, 15.58, 11.25, 8.32],
//       backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
//     }],
//   },
// });
