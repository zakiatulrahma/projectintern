/**
 * Charts ChartsJS
 */

(function () {
  // Color Variables
  const purpleColor = '#836AF9',
    yellowColor = '#ffe800',
    cyanColor = '#28dac6',
    orangeColor = '#FF8132',
    orangeLightColor = '#FDAC34',
    oceanBlueColor = '#299AFF',
    greyColor = '#4F5D70',
    greyLightColor = '#EDF1F4',
    blueColor = '#2B9AFF',
    blueLightColor = '#84D0FF';

  let borderColor, axisColor;

  if (isDarkStyle) {
    borderColor = config.colors_dark.borderColor;
    axisColor = config.colors_dark.axisColor; // x & y axis tick color
  } else {
    borderColor = config.colors.borderColor; // same as template border color
    axisColor = config.colors.axisColor; // x & y axis tick color\
  }

  // Set height according to their data-height
  // --------------------------------------------------------------------
  const chartList = document.querySelectorAll('.chartjs');
  chartList.forEach(function (chartListItem) {
    chartListItem.height = chartListItem.dataset.height;
  });

  // Bar Chart
  // --------------------------------------------------------------------
  const barChart = document.getElementById('barChart');
  if (barChart) {
    const barChartVar = new Chart(barChart, {
      type: 'bar',
      data: {
        labels: [
          '7/12',
          '8/12',
          '9/12',
          '10/12',
          '11/12',
          '12/12',
          '13/12',
          '14/12',
          '15/12',
          '16/12',
          '17/12',
          '18/12',
          '19/12'
        ],
        datasets: [
          {
            data: [275, 90, 190, 205, 125, 85, 55, 87, 127, 150, 230, 280, 190],
            backgroundColor: cyanColor,
            borderColor: 'transparent',
            maxBarThickness: 15,
            borderRadius: {
              topRight: 15,
              topLeft: 15
            }
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        animation: {
          duration: 500
        },
        plugins: {
          tooltip: {
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          },
          legend: {
            display: false
          }
        },
        scales: {
          x: {
            grid: {
              color: borderColor,
              borderColor: borderColor
            },
            ticks: {
              color: axisColor
            }
          },
          y: {
            min: 0,
            max: 400,
            grid: {
              color: borderColor,
              borderColor: borderColor
            },
            ticks: {
              stepSize: 100,
              tickColor: borderColor,
              color: axisColor
            }
          }
        }
      }
    });
  }


  // Bar Chart
  // --------------------------------------------------------------------
  const barChartCatatanKehadiran = document.getElementById('barChartCatatanKehadiran');
  if (barChartCatatanKehadiran) {
    const barChartVarCatatanKehadiran = new Chart(barChartCatatanKehadiran, {
      type: 'bar',
      data: {
        labels: [
          '7/12',
          '8/12',
          '9/12',
          '10/12',
          '11/12',
          '12/12',
          '13/12',
          '14/12',
          '15/12',
          '16/12',
          '17/12',
          '18/12',
          '19/12'
        ],
        datasets: [
          {
            data: [275, 90, 190, 205, 125, 85, 55, 87, 127, 150, 230, 280, 190],
            backgroundColor: cyanColor,
            borderColor: 'transparent',
            maxBarThickness: 15,
            borderRadius: {
              topRight: 15,
              topLeft: 15
            }
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        animation: {
          duration: 500
        },
        plugins: {
          tooltip: {
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          },
          legend: {
            display: false
          }
        },
        scales: {
          x: {
            grid: {
              color: borderColor,
              borderColor: borderColor
            },
            ticks: {
              color: axisColor
            }
          },
          y: {
            min: 0,
            max: 400,
            grid: {
              color: borderColor,
              borderColor: borderColor
            },
            ticks: {
              stepSize: 100,
              tickColor: borderColor,
              color: axisColor
            }
          }
        }
      }
    });
  }


  // Doughnut Chart
  // --------------------------------------------------------------------

  const doughnutChartKehadiran2 = document.getElementById('doughnutChartKehadiran2');
  if (doughnutChartKehadiran2) {
    const doughnutChartVar = new Chart(doughnutChartKehadiran2, {
      type: 'doughnut',
      data: {
        labels: ['Pria','Wanita'],
        datasets: [
          {
            data: [attendance_pria, attendance_wanita],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 1.2,
        animation: {
          duration: 500
        },
        cutout: '68%',
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                const label = context.labels || '',
                  value = context.parsed;
                const output = ' ' + label + ' : ' + value + '';
                return output;
              }
            },
            // Updated default tooltip UI
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          }
        }
      }
    });
  }

  // Doughnut Chart
  // --------------------------------------------------------------------

  // Doughnut Chart
  // --------------------------------------------------------------------

  const doughnutChartAttendanceGender = document.getElementById('doughnutChartAttendanceGender');
  if (doughnutChartAttendanceGender) {
    const doughnutChartVar = new Chart(doughnutChartAttendanceGender, {
      type: 'doughnut',
      data: {
        labels: ['Pria','Wanita'],
        datasets: [
          {
            data: [absence_pria,absence_wanita],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 1.2,
        animation: {
          duration: 500
        },
        cutout: '68%',
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                const label = context.labels || '',
                  value = context.parsed;
                const output = ' ' + label + ' : ' + value + ' ';
                return output;
              }
            },
            // Updated default tooltip UI
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          }
        }
      }
    });
  }

// Doughnut Chart
  // --------------------------------------------------------------------


  // Doughnut Chart
  // --------------------------------------------------------------------

  const doughnutChartLeaveCompany = document.getElementById('doughnutChartLeaveCompany');
  if (doughnutChartLeaveCompany) {
    const doughnutChartVar = new Chart(doughnutChartLeaveCompany, {
      type: 'doughnut',
      data: {
        labels: ['Cuti', 'Izin', 'Dan lainnya'],
        datasets: [
          {
            data: [timeoff_cuti, timeoff_izin, timeoff_lainnya],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 2,
        animation: {
          duration: 500
        },
        cutout: '68%',
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                const label = context.labels || '',
                  value = context.parsed;
                const output = ' ' + label + ' : ' + value + ' ';
                return output;
              }
            },
            // Updated default tooltip UI
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          }
        }
      }
    });
  }

// Doughnut Chart
  // --------------------------------------------------------------------

  const doughnutChartGenderCompany = document.getElementById('doughnutChartGenderCompany');
  if (doughnutChartGenderCompany) {
    const doughnutChartVar = new Chart(doughnutChartGenderCompany, {
      type: 'doughnut',
      data: {
        labels: ['Pria', 'Wanita'],
        datasets: [
          {
            data: [employee_pria, employee_wanita],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 2,
        animation: {
          duration: 500
        },
        cutout: '0%',
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                const label = context.labels || '',
                  value = context.parsed;
                const output = ' ' + label + ' : ' + value + ' ';
                return output;
              }
            },
            // Updated default tooltip UI
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          }
        }
      }
    });
  }

  // Doughnut Chart
  // --------------------------------------------------------------------

  const doughnutChartContractCompany = document.getElementById('doughnutChartContractCompany');
  if (doughnutChartContractCompany) {
    const doughnutChartVar = new Chart(doughnutChartContractCompany, {
      type: 'doughnut',
      data: {
        labels: ['Tetap','PKWT'],
        datasets: [
          {
            data: [jobstatus_tetap, jobstatus_pkwt],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 2,
        animation: {
          duration: 500
        },
        cutout: '68%',
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                const label = context.labels || '',
                  value = context.parsed;
                const output = ' ' + label + ' : ' + value + ' %';
                return output;
              }
            },
            // Updated default tooltip UI
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          }
        }
      }
    });
  }

  // Doughnut Chart
  // --------------------------------------------------------------------

  const doughnutChartLocationCompany = document.getElementById('doughnutChartLocationCompany');
  if (doughnutChartLocationCompany) {
    const doughnutChartVar = new Chart(doughnutChartLocationCompany, {
      type: 'doughnut',
      data: {
        labels: ['Jakarta','Bandung','Padang','Lainnya'],
        datasets: [
          {
            data: [placeofbirth_jakarta, placeofbirth_bandung, placeofbirth_padang, placeofbirth_lainnya],
            backgroundColor: [cyanColor, orangeLightColor, config.colors.primary],
            borderWidth: 0,
            pointStyle: 'rectRounded'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio : true,
        aspectRatio : 2,
        animation: {
          duration: 500
        },
        cutout: '0%',
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                const label = context.labels || '',
                  value = context.parsed;
                const output = ' ' + label + ' : ' + value + ' ';
                return output;
              }
            },
            // Updated default tooltip UI
            rtl: isRtl,
            backgroundColor: config.colors.white,
            titleColor: config.colors.black,
            bodyColor: config.colors.black,
            borderWidth: 1,
            borderColor: borderColor
          }
        }
      }
    });
  }


})();
