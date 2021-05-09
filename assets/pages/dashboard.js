'use strict';
$(document).ready(function () {
	dashboard();

	/*Counter Js Starts*/
	$('.counter').counterUp({
		delay: 10,
		time: 400
	});
	/*Counter Js Ends*/

	//  Resource bar
	$(".resource-barchart").sparkline([5, 6, 2, 4, 9, 1, 2, 8, 3, 6, 4, 2, 1, 5], {
		type: 'bar',
		barWidth: '15px',
		height: '80px',
		barColor: '#fff',
		tooltipClassname: 'abc'
	});

	function setHeight() {
		var $window = $(window);
		var windowHeight = $(window).height();
		if ($window.width() >= 320) {
			$('.user-list').parent().parent().css('min-height', windowHeight);
			$('.chat-window-inner-content').css('max-height', windowHeight);
			$('.user-list').parent().parent().css('right', -300);
		}
	};
	setHeight();

	$(window).on('load', function () {
		setHeight();
	});
});

$(window).resize(function () {
	dashboard();
	//  Resource bar
	$(".resource-barchart").sparkline([5, 6, 2, 4, 9, 1, 2, 8, 3, 6, 4, 2, 1, 5], {
		type: 'bar',
		barWidth: '15px',
		height: '80px',
		barColor: '#fff',
		tooltipClassname: 'abc'
	});
});

function dashboard() {

};

Highcharts.chart('barchart', {
	title: {
		text: 'Faturação Semanal'
	},
	xAxis: {
		categories: ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo']
	},
	labels: {
		items: [{
			html: 'Total faturação feita',
			style: {
				left: '130px',
				top: '18px',
				color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
			}
		}]
	},
	series: [
		{
			type: 'column',
			name: 'Entrada',
			data: [3, 2, 1, 3, 4, 3, 1],
			color: '#f57c00'
		},
		{
			type: 'column',
			name: 'Faturação',
			data: [4, 3, 5, 7, 6, 3, 1],
			color: '#2BBBAD'
		},
		{
			type: 'column',
			name: 'Despesas',
			data: [3, 4, 2, 9, 5, 3, 1],
			color: '#39444e'
		},
		{
			type: 'spline',
			name: 'Faturação',
			data: [3.5, 2.67, 3, 6.33, 3.33, 1.33, 1],
			marker: {
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[3],
				fillColor: 'white'
			}
		},
		{
			type: 'pie',
			name: 'Total',
			data: [{
				name: 'Entradas',
				y: 13,
				color: '#f57c00'
			}, {
				name: 'Faturação',
				y: 23,
				color: '#2BBBAD'
			}, {
				name: 'Despesas',
				y: 19,
				color: '#39444e'
			}],
			center: [40, 20],
			size: 100,
			showInLegend: false,
			dataLabels: {
				enabled: false
			}
		}]
});

Highcharts.chart('container', {
	chart: {
		type: 'line'
	},
	title: {
		text: 'Faturação Anual'
	},
	xAxis: {
		categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dez']
	},
	yAxis: {
		title: {
			text: 'Valores (AKZ)'
		}
	},
	plotOptions: {
		line: {
			dataLabels: {
				enabled: true
			},
			enableMouseTracking: false
		}
	},
	series: [
		{
			name: 'Entradas',
			data: [127.0, 126.9, 129.5, 214.5, 218.4, 221.5, 225.2, 226.5, 223.3, 218.3, 213.9, 129.6]
		},
		{
			name: 'Faturação',
			data: [113.9, 114.2, 115.7, 118.5, 111.9, 115.2, 117.0, 116.6, 114.2, 110.3, 116.6, 114.8]
		},
		{
			name: 'Despesas',
			data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
		}
	]
});


Highcharts.chart('piechart', {
	chart: {
		type: 'pie',
		options3d: {
			enabled: true,
			alpha: 45,
			beta: 0
		}
		//  backgroundColor:'#fff'
	},
	title: {
		text: 'Browser market shares at a specific website, 2014'
	},
	tooltip: {
		pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
		pie: {
			allowPointSelect: true,
			cursor: 'pointer',
			depth: 35,
			dataLabels: {
				enabled: true,
				format: '{point.name}'
			}
		}
	},
	series: [{
		type: 'pie',
		name: 'Browser share',
		data: [
			{
				name: 'Firefox',
				y: 40.0,
				sliced: true,
				selected: true,
				color: '#2BBBAD'
			},
			{
				name: 'IE',
				y: 26.8,
				color: '#39444e'
			},
			{
				name: 'Chrome',
				y: 12.8,
				color: '#2196F3'
			},
			{
				name: 'Safari',
				y: 8.5,
				color: '#3F729B'
			},
			{
				name: 'Opera',
				y: 6.2,
				color: '#f57c00'
			},
			{
				name: 'Others',
				y: 5.7,
				color: '#aa66cc'
			}
		]
	}]
});
