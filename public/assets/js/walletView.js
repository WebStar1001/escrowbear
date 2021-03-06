"use strict";

!function (NioApp, $) {
    function MarketCapChart() {
        console.log(coin_symbol + "USD");
        var buf = {};
        buf['marketCapChart'] = [[], []];
        var ws = new WebSocket('wss://api.bitfinex.com/ws/');
        ws.onopen = function () {
            ws.send(JSON.stringify({      // send subscribe request
                "event": "subscribe",
                "channel": "trades",
                "pair": coin_symbol + "USD"
            }));
        };
        ws.onmessage = function (msg) {     // callback on message receipt
            var response = JSON.parse(msg.data);
            if (response[1] === 'te') {    // Only 'te' message type is needed
                console.log(response);
                buf['marketCapChart'][response[5] > 0 ? 0 : 1].push({
                    x: response[3] * 1000, // timestamp in milliseconds
                    y: response[4]         // price in US dollar
                });
            }
        }
        var id = 'marketCapChart';
        var ctx = document.getElementById(id).getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                datasets: [{
                    data: [],
                    label: 'Buy',                     // 'buy' price data
                    borderColor: 'rgb(255, 99, 132)', // line color
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // fill color
                    fill: false,                      // no fill
                    lineTension: 0                    // straight line
                }, {
                    data: [],
                    label: 'Sell',                    // 'sell' price data
                    borderColor: 'rgb(54, 162, 235)', // line color
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // fill color
                    fill: false,                      // no fill
                    lineTension: 0                    // straight line
                }]
            },
            options: {
                responsive: true,
                title: {
                    text: coin_symbol + '/USD (' + id + ')', // chart title
                    display: true
                },
                scales: {
                    xAxes: [{
                        type: 'realtime' // auto-scroll on X axis
                    }]
                },
                maintainAspectRatio: false,
                plugins: {
                    streaming: {
                        duration: 300000, // display data for the latest 300000ms (5 mins)
                        onRefresh: function (chart) { // callback on chart update interval
                            Array.prototype.push.apply(
                                chart.data.datasets[0].data, buf[id][0]
                            );            // add 'buy' price data to chart
                            Array.prototype.push.apply(
                                chart.data.datasets[1].data, buf[id][1]
                            );            // add 'sell' price data to chart
                            buf[id] = [[], []]; // clear buffer
                        }
                    }
                }
            }
        });

    } // init accountSummary
    NioApp.coms.docReady.push(function () {
        MarketCapChart();
    });
}
(NioApp, jQuery);
