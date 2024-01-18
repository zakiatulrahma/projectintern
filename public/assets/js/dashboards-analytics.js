/**
 * Analytics Dashboard
 */

'use strict';
(function () {
  let cardColor, headingColor, axisColor, borderColor, shadeColor;

  if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    headingColor = config.colors_dark.headingColor;
    axisColor = config.colors_dark.axisColor;
    borderColor = config.colors_dark.borderColor;
    shadeColor = 'dark';
  } else {
    cardColor = config.colors.white;
    headingColor = config.colors.headingColor;
    axisColor = config.colors.axisColor;
    borderColor = config.colors.borderColor;
    shadeColor = 'light';
  }

  // Report Chart
  // --------------------------------------------------------------------

  // Radial bar chart functions
  function radialBarChart(color, value) {
    const radialBarChartOpt = {
      chart: {
        height: 50,
        width: 50,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          hollow: {
            size: '25%'
          },
          dataLabels: {
            show: false
          },
          track: {
            background: borderColor
          }
        }
      },
      stroke: {
        lineCap: 'round'
      },
      colors: [color],
      grid: {
        padding: {
          top: -8,
          bottom: -10,
          left: -5,
          right: 0
        }
      },
      series: [value],
      labels: ['Progress']
    };
    return radialBarChartOpt;
  }

  const ReportchartList = document.querySelectorAll('.chart-report');
  if (ReportchartList) {
    ReportchartList.forEach(function (ReportchartEl) {
      const color = config.colors[ReportchartEl.dataset.color],
        series = ReportchartEl.dataset.series;
      const optionsBundle = radialBarChart(color, series);
      const reportChart = new ApexCharts(ReportchartEl, optionsBundle);
      reportChart.render();
    });
  }


  // Analytics - Bar Chart
  // --------------------------------------------------------------------
  const analyticsBarChartElDirectoratCompany = document.querySelector('#analyticsBarChartDirectoratCompany'),
    analyticsBarChartConfigDirectoratCompany = {
      chart: {
        height: 250,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 3,
          startingShape: 'rounded'
        }
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.primary, config.colors_label.primary],
      series: [
        {
          name: 'Total Karyawan',
          data: [directorat_it_comp, directorat_finance_comp, directorat_marketing_comp]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['Directorat IT', 'Directorat Finance', 'Directorat Marketing'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      yaxis: {
        min: 0,
        max: 10,
        tickAmount: 3,
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      legend: {
        show: false
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return ' ' + val + ' ';
          }
        }
      }
    };
  if (typeof analyticsBarChartElDirectoratCompany !== undefined && analyticsBarChartElDirectoratCompany !== null) {
    const analyticsBarChartDirectoratCompany = new ApexCharts(analyticsBarChartElDirectoratCompany, analyticsBarChartConfigDirectoratCompany);
    analyticsBarChartDirectoratCompany.render();
  }

  // Analytics - Bar Chart
  // --------------------------------------------------------------------
  const analyticsBarChartElDivisionCompany = document.querySelector('#analyticsBarChartDivisionCompany'),
    analyticsBarChartConfigDivisionCompany = {
      chart: {
        height: 250,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 3,
          startingShape: 'rounded'
        }
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.primary, config.colors_label.primary],
      series: [
        {
          name: 'Total Karyawan',
          data: [division_dpi_comp, division_sa_comp, division_operation_comp]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['Divisi DPI', 'Divisi SA', 'Divisi Operation'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      yaxis: {
        min: 0,
        max: 10,
        tickAmount: 3,
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      legend: {
        show: false
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return ' ' + val + ' ';
          }
        }
      }
    };
  if (typeof analyticsBarChartElDivisionCompany !== undefined && analyticsBarChartElDivisionCompany !== null) {
    const analyticsBarChartDivisionCompany = new ApexCharts(analyticsBarChartElDivisionCompany, analyticsBarChartConfigDivisionCompany);
    analyticsBarChartDivisionCompany.render();
  }


  // Analytics - Bar Chart
  // --------------------------------------------------------------------
  const analyticsBarChartElAgeRangeCompany = document.querySelector('#analyticsBarChartAgeRangeCompany'),
    analyticsBarChartConfigAgeRangeCompany = {
      chart: {
        height: 303,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 3,
          startingShape: 'rounded'
        }
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.primary, config.colors_label.primary],
      series: [
        {
          name: '',
          data: [kurang20, dari21_25, dari26_30, dari31_35, dari36_40, dari41_45, dari46_50, lebih50]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['<20', '21-25', '25-30', '30-35', '35-40', '41-45', '45-50', '>50'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      yaxis: {
        min: 0,
        max: 10,
        tickAmount: 3,
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      legend: {
        show: false
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return '' + val + ' ';
          }
        }
      }
    };
  if (typeof analyticsBarChartElAgeRangeCompany!== undefined && analyticsBarChartElAgeRangeCompany !== null) {
    const analyticsBarChartAgeRangeCompany= new ApexCharts(analyticsBarChartElAgeRangeCompany, analyticsBarChartConfigAgeRangeCompany);
    analyticsBarChartAgeRangeCompany.render();
  }


  // Analytics - Bar Chart
  // --------------------------------------------------------------------
  const analyticsBarChartElUsia1B = document.querySelector('#analyticsBarChartUsia1B'),
    analyticsBarChartConfigUsia1B = {
      chart: {
        height: 282,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 3,
          startingShape: 'rounded'
        }
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.primary, config.colors_label.primary],
      series: [
        {
          name: '2020',
          data: [8, 9, 15, 20, 14, 22, 29, 27]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['18-20', '21-25', '25-30', '30-35', '35-40', '41-45', '45-50', '50'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      yaxis: {
        min: 0,
        max: 30,
        tickAmount: 3,
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      legend: {
        show: false
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return '$ ' + val + ' thousands';
          }
        }
      }
    };
  if (typeof analyticsBarChartElUsia1B !== undefined && analyticsBarChartElUsia1B !== null) {
    const analyticsBarChartUsia1B = new ApexCharts(analyticsBarChartElUsia1B, analyticsBarChartConfigUsia1B);
    analyticsBarChartUsia1B.render();
  }

   // Analytics - Bar Chart
  // --------------------------------------------------------------------
  const analyticsBarChartElUsia1C = document.querySelector('#analyticsBarChartUsia1C'),
    analyticsBarChartConfigUsia1C = {
      chart: {
        height: 300,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 3,
          startingShape: 'rounded'
        }
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.primary, config.colors_label.primary],
      series: [
        {
          name: '2020',
          data: [8, 9, 15, 20, 14, 22, 29, 27]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['Divisi A', 'Divisi B', 'Divisi C', 'Divisi D', 'Divisi E', 'Divisi F', 'Divisi G', 'Divisi H'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      yaxis: {
        min: 0,
        max: 30,
        tickAmount: 3,
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      legend: {
        show: false
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return '$ ' + val + ' thousands';
          }
        }
      }
    };
  if (typeof analyticsBarChartElUsia1C !== undefined && analyticsBarChartElUsia1C !== null) {
    const analyticsBarChartUsia1C = new ApexCharts(analyticsBarChartElUsia1C, analyticsBarChartConfigUsia1C);
    analyticsBarChartUsia1C.render();
  }
  
  // Analytics - Bar Chart
  // --------------------------------------------------------------------
  const analyticsBarChartElDirectorat= document.querySelector('#analyticsBarChartDirectorat'),
    analyticsBarChartConfigDirectorat = {
      chart: {
        height: 310,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 3,
          startingShape: 'rounded'
        }
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.primary, config.colors_label.primary],
      series: [
        {
          name: 'Employee',
          data: [directorat_it_attend, directorat_finance_attend, directorat_marketing_attend]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['Directorat IT', 'Directorat Finance', 'Directorat Marketing'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      yaxis: {
        min: 0,
        max: 10,
        tickAmount: 3,
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      legend: {
        show: false
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return '' + val + ' ';
          }
        }
      }
    };
  if (typeof analyticsBarChartElDirectorat !== undefined && analyticsBarChartElDirectorat !== null) {
    const analyticsBarChartDirectorat= new ApexCharts(analyticsBarChartElDirectorat, analyticsBarChartConfigDirectorat);
    analyticsBarChartDirectorat.render();
  }

  // Analytics - Bar Chart
  // --------------------------------------------------------------------
  const analyticsBarChartElDivision= document.querySelector('#analyticsBarChartDivision'),
    analyticsBarChartConfigDivision= {
      chart: {
        height: 310,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          borderRadius: 3,
          startingShape: 'rounded'
        }
      },
      dataLabels: {
        enabled: false
      },
      colors: [config.colors.primary, config.colors_label.primary],
      series: [
        {
          name: 'Employee',
          data: [division_sa_attend, division_dpi_attend, division_operation_attend]
        }
      ],
      grid: {
        borderColor: borderColor,
        padding: {
          bottom: -8
        }
      },
      xaxis: {
        categories: ['Division SA', 'Division DPI', 'Division Operation'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      yaxis: {
        min: 0,
        max: 10,
        tickAmount: 3,
        labels: {
          style: {
            colors: axisColor
          }
        }
      },
      legend: {
        show: false
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return val ;
          }
        }
      }
    };
  if (typeof analyticsBarChartElDivision !== undefined && analyticsBarChartElDivision !== null) {
    const analyticsBarChartDivision= new ApexCharts(analyticsBarChartElDivision, analyticsBarChartConfigDivision);
    analyticsBarChartDivision.render();
  }

})();
