/**
 * Charts Apex
 */

'use strict';

(function () {
  let cardColor, headingColor, axisColor, borderColor, radialTrackColor;

  if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    headingColor = config.colors_dark.headingColor;
    axisColor = config.colors_dark.axisColor;
    borderColor = config.colors_dark.borderColor;
    radialTrackColor = '#36435C';
  } else {
    cardColor = config.colors.white;
    headingColor = config.colors.headingColor;
    axisColor = config.colors.axisColor;
    borderColor = config.colors.borderColor;
    radialTrackColor = config.colors_label.secondary;
  }

  // Color constant
  const chartColors = {
    column: {
      series1: '#826af9',
      series2: '#d2b0ff',
      series3: '#0079FF',
      series4: '#00DFA2',
      series5: '#F6FA70',
      bg: '#f8d3ff'
    },
    donut: {
      series1: '#ffe800',
      series2: '#FDAC34',
      series3: '#28dac6',
      series4: '#2B9AFF'
    },
    area: {
      series1: '#29dac7',
      series2: '#60f2ca',
      series3: '#a5f8cd'
    }
  };

  // Heat chart data generator
  function generateDataHeat(count, yrange) {
    let i = 0;
    let series = [];
    while (i < count) {
      let x = 'w' + (i + 1).toString();
      let y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

      series.push({
        x: x,
        y: y
      });
      i++;
    }
    return series;
  }

  // Bar Chart
  // --------------------------------------------------------------------
  const barChartElKehadiran2 = document.querySelector('#barChartKehadiran2'),
    barChartConfigKehadiran2 = {
      chart: {
        height: 300,
        fontFamily: 'IBM Plex Sans',
        type: 'bar',
        stacked: true,
        parentHeightOffset: 0,
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          columnWidth: '15%',
          colors: {
            backgroundBarColors: [
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg
            ],
            backgroundBarRadius: 10
          }
        }
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        show: true,
        position: 'top',
        horizontalAlign: 'start',
        labels: {
          colors: axisColor,
          useSeriesColors: false
        }
      },
      colors: [chartColors.column.series1, chartColors.column.series2,chartColors.column.series3,chartColors.column.series4,chartColors.column.series5, chartColors.column.series],
      stroke: {
        show: true,
        colors: ['transparent']
      },
      grid: {
        borderColor: borderColor,
        xaxis: {
          lines: {
            show: true
          }
        }
      },
      series: [
        {
          name: 'Ontime',
          data: attendanceCheckIn
        },
        {
          name: 'Late In',
          data: attendanceLateIn
        },
        {
          name: 'Absent',
          data: attendanceAbsent
        },
        {
          name: 'Time Off',
          data: attendanceTimeOff
        },
        {
          name: 'No Check In',
          data: attendanceNocheckIn
        },
      ],
      xaxis: {
        categories: attendanceDate,
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor,
            fontSize: '13px'
          }
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: axisColor,
            fontSize: '13px'
          }
        }
      },
      fill: {
        opacity: 1
      }
    };
  if (typeof barChartElKehadiran2 !== undefined && barChartElKehadiran2 !== null) {
    const barChartKehadiran2 = new ApexCharts(barChartElKehadiran2, barChartConfigKehadiran2);
    barChartKehadiran2.render();
  }

 // Bar Chart
  // --------------------------------------------------------------------
  const barChartElKehadiran2A = document.querySelector('#barChartKehadiran2A'),
    barChartConfigKehadiran2A = {
      chart: {
        height: 300,
        fontFamily: 'IBM Plex Sans',
        type: 'bar',
        stacked: true,
        parentHeightOffset: 0,
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          columnWidth: '15%',
          colors: {
            backgroundBarColors: [
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg
            ],
            backgroundBarRadius: 10
          }
        }
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        show: true,
        position: 'top',
        horizontalAlign: 'start',
        labels: {
          colors: axisColor,
          useSeriesColors: false
        }
      },
      colors: [chartColors.column.series1, chartColors.column.series2, chartColors.column.series],
      stroke: {
        show: true,
        colors: ['transparent']
      },
      grid: {
        borderColor: borderColor,
        xaxis: {
          lines: {
            show: true
          }
        }
      },
      series: [
        {
          name: 'Departemen A',
          data: [90, 120, 55, 100, 80, 125, 175, 70, 88, 180]
        },
        {
          name: 'Departemen B',
          data: [85, 100, 30, 40, 95, 90, 30, 110, 62, 20]
        }
      ],
      xaxis: {
        categories: ['7/12', '8/12', '9/12', '10/12', '11/12', '12/12', '13/12', '14/12', '15/12', '16/12'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor,
            fontSize: '13px'
          }
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: axisColor,
            fontSize: '13px'
          }
        }
      },
      fill: {
        opacity: 1
      }
    };
  if (typeof barChartElKehadiran2A !== undefined && barChartElKehadiran2A !== null) {
    const barChartKehadiran2A = new ApexCharts(barChartElKehadiran2A, barChartConfigKehadiran2A);
    barChartKehadiran2A.render();
  }


// Bar Chart
  // --------------------------------------------------------------------
  const barChartElKehadiran2B= document.querySelector('#barChartKehadiran2B'),
    barChartConfigKehadiran2B = {
      chart: {
        height: 300,
        fontFamily: 'IBM Plex Sans',
        type: 'bar',
        stacked: true,
        parentHeightOffset: 0,
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          columnWidth: '15%',
          colors: {
            backgroundBarColors: [
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg,
              chartColors.column.bg
            ],
            backgroundBarRadius: 10
          }
        }
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        show: true,
        position: 'top',
        horizontalAlign: 'start',
        labels: {
          colors: axisColor,
          useSeriesColors: false
        }
      },
      colors: [chartColors.column.series1, chartColors.column.series2, chartColors.column.series],
      stroke: {
        show: true,
        colors: ['transparent']
      },
      grid: {
        borderColor: borderColor,
        xaxis: {
          lines: {
            show: true
          }
        }
      },
      series: [
        {
          name: 'Departemen A',
          data: [90, 120, 55, 100, 80, 125, 175, 70, 88, 180]
        },
        {
          name: 'Departemen B',
          data: [85, 100, 30, 40, 95, 90, 30, 110, 62, 20]
        }
      ],
      xaxis: {
        categories: ['7/12', '8/12', '9/12', '10/12', '11/12', '12/12', '13/12', '14/12', '15/12', '16/12'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor,
            fontSize: '13px'
          }
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: axisColor,
            fontSize: '13px'
          }
        }
      },
      fill: {
        opacity: 1
      }
    };
  if (typeof barChartElKehadiran2B!== undefined && barChartElKehadiran2B!== null) {
    const barChartKehadiran2B = new ApexCharts(barChartElKehadiran2B, barChartConfigKehadiran2B);
    barChartKehadiran2B.render();
  }

  const barChartElKetidakhadiran2B= document.querySelector('#barChartKetidakhadiran2B'),
  barChartConfigKetidakhadiran2B = {
    chart: {
      height: 300,
      fontFamily: 'IBM Plex Sans',
      type: 'bar',
      stacked: true,
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        columnWidth: '15%',
        colors: {
          backgroundBarColors: [
            chartColors.column.bg,
            chartColors.column.bg,
            chartColors.column.bg,
            chartColors.column.bg,
            chartColors.column.bg
          ],
          backgroundBarRadius: 10
        }
      }
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: true,
      position: 'top',
      horizontalAlign: 'start',
      labels: {
        colors: axisColor,
        useSeriesColors: false
      }
    },
    colors: [chartColors.column.series1, chartColors.column.series2],
    stroke: {
      show: true,
      colors: ['transparent']
    },
    grid: {
      borderColor: borderColor,
      xaxis: {
        lines: {
          show: true
        }
      }
    },
    series: [
      {
        name: 'Apple',
        data: [90, 120, 55, 100, 80, 125, 175, 70, 88, 180]
      },
      {
        name: 'Samsung',
        data: [85, 100, 30, 40, 95, 90, 30, 110, 62, 20]
      }
    ],
    xaxis: {
      categories: ['7/12', '8/12', '9/12', '10/12', '11/12', '12/12', '13/12', '14/12', '15/12', '16/12'],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      labels: {
        style: {
          colors: axisColor,
          fontSize: '13px'
        }
      }
    },
    yaxis: {
      labels: {
        style: {
          colors: axisColor,
          fontSize: '13px'
        }
      }
    },
    fill: {
      opacity: 1
    }
  };
  console.log(typeof barChartElKetidakhadiran2B)
if (typeof barChartElKetidakhadiran2B !== undefined && barChartElKetidakhadiran2B !== null) {
  const barChartKetidakhadiran2B= new ApexCharts(barChartElKetidakhadiran2B, barChartConfigKetidakhadiran2B);
  console.log(barChartKetidakhadiran2B)
  barChartKetidakhadiran2B.render();
}
  
  // Donut Chart
  // --------------------------------------------------------------------
  const donutChartElEducationCompany = document.querySelector('#donutChartEducationCompany'),
    donutChartConfigEducationCompany = {
      chart: {
        height: 350,
        fontFamily: 'IBM Plex Sans',
        type: 'donut'
      },
      labels: ['Diploma','S1','S2', 'S3'],
      series: [education_diploma, education_S1, education_S2, education_S3],
      colors: [
        chartColors.donut.series3,
        chartColors.donut.series1,
        chartColors.donut.series4,
        chartColors.donut.series2
      ],
      stroke: {
        show: false,
        curve: 'straight'
      },
      dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
          return parseInt(val) + '%';
        }
      },
      legend: {
        show: true,
        position: 'bottom',
        labels: {
          colors: axisColor,
          useSeriesColors: false
        }
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: false,
              name: {
                fontSize: '1 rem',
                color: axisColor
              },
              value: {
                fontSize: '1.2rem',
                color: axisColor,
                fontFamily: 'IBM Plex Sans',
                formatter: function (val) {
                  return parseInt(val) + '%';
                }
              },
              total: {
                show: false,
                fontSize: '1 rem',
                color: headingColor,
                label: 'Operational',
                formatter: function (w) {
                  return '31%';
                }
              }
            }
          }
        }
      },
      responsive: [
        {
          breakpoint: 992,
          options: {
            chart: {
              height: 380
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: axisColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            chart: {
              height: 320
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    name: {
                      fontSize: '1.5rem'
                    },
                    value: {
                      fontSize: '1rem'
                    },
                    total: {
                      fontSize: '1.5rem'
                    }
                  }
                }
              }
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: axisColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            chart: {
              height: 280
            },
            legend: {
              show: false
            }
          }
        },
        {
          breakpoint: 360,
          options: {
            chart: {
              height: 250
            },
            legend: {
              show: false
            }
          }
        }
      ]
    };
  if (typeof donutChartElEducationCompany !== undefined && donutChartElEducationCompany !== null) {
    const donutChart = new ApexCharts(donutChartElEducationCompany, donutChartConfigEducationCompany);
    donutChart.render();
  }

  // Donut Chart
  // --------------------------------------------------------------------
  const donutChartElGender = document.querySelector('#donutChartGender'),
    donutChartConfigGender = {
      chart: {
        height: 390,
        fontFamily: 'IBM Plex Sans',
        type: 'donut'
      },
      labels: ['Pria', 'Wanita'],
      series: [65, 35],
      colors: [
        chartColors.donut.series1,
        chartColors.donut.series4,
        chartColors.donut.series3,
        chartColors.donut.series2
      ],
      stroke: {
        show: false,
        curve: 'straight'
      },
      dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
          return parseInt(val) + '%';
        }
      },
      legend: {
        show: true,
        position: 'bottom',
        labels: {
          colors: axisColor,
          useSeriesColors: false
        }
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              name: {
                fontSize: '2rem',
                color: axisColor
              },
              value: {
                fontSize: '1.2rem',
                color: axisColor,
                fontFamily: 'IBM Plex Sans',
                formatter: function (val) {
                  return parseInt(val) + '%';
                }
              },
              total: {
                show: true,
                fontSize: '1.5rem',
                color: headingColor,
                label: 'Operational',
                formatter: function (w) {
                  return '31%';
                }
              }
            }
          }
        }
      },
      responsive: [
        {
          breakpoint: 992,
          options: {
            chart: {
              height: 380
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: axisColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            chart: {
              height: 320
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    name: {
                      fontSize: '1.5rem'
                    },
                    value: {
                      fontSize: '1rem'
                    },
                    total: {
                      fontSize: '1.5rem'
                    }
                  }
                }
              }
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: axisColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            chart: {
              height: 280
            },
            legend: {
              show: false
            }
          }
        },
        {
          breakpoint: 360,
          options: {
            chart: {
              height: 250
            },
            legend: {
              show: false
            }
          }
        }
      ]
    };
  if (typeof donutChartElGender !== undefined && donutChartElGender !== null) {
    const donutChartElGender = new ApexCharts(donutChartElGender, donutChartConfigGender);
    donutChart.render();
  }
})();