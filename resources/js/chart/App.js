/* App.js */
import React, { Component } from "react";
import CanvasJSReact from "./canvasjs.stock.react";
import Loader from "react-js-loader";
var CanvasJS = CanvasJSReact.CanvasJS;
var CanvasJSStockChart = CanvasJSReact.CanvasJSStockChart;

class App extends Component {
    constructor(props) {
        super(props);
        this.state = { dataPoints: [], isLoaded: false };
    }

    componentDidMount() {
        //Reference: https://reactjs.org/docs/faq-ajax.html#example-using-ajax-results-to-set-local-state
        fetch("/data")
            .then((res) => res.json())
            .then((data) => {
                var dps = [];
                for (var i = 0; i < data.length; i++) {
                    dps.push({
                        x: new Date(data[i].time),
                        y: Number(data[i].value_change),
                    });
                }
                this.setState({
                    isLoaded: true,
                    dataPoints: dps,
                });
            });
    }

    render() {
        const options = {
            title: {
                text: "",
            },
            theme: "dark1",
            subtitles: [
                {
                    text: "",
                },
            ],
            charts: [
                {
                    axisX: {
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true,
                            valueFormatString: "MMM DD YYYY",
                        },
                    },
                    axisY: {
                        title: "",
                        prefix: "CZK",
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true,
                            valueFormatString: "#,###.##",
                        },
                    },
                    toolTip: {
                        shared: true,
                    },
                    data: [
                        {
                            name: "Amount (in CZK)",
                            type: "splineArea",
                            color: "#00a7e1",
                            yValueFormatString: "#,###.##",
                            xValueFormatString: "MMM DD YYYY",
                            dataPoints: this.state.dataPoints,
                        },
                    ],
                },
            ],
            navigator: {
                slider: {
                    minimum: new Date("2020-01-01"),
                    maximum: new Date("2021-12-30"),
                },
            },
        };
        const containerProps = {
            width: "100%",
            height: "400px",
            margin: "auto",
        };
        return (
            <div>
                <div>
                    {
                        // Reference: https://reactjs.org/docs/conditional-rendering.html#inline-if-with-logical--operator
                        this.state.isLoaded ? (
                            <CanvasJSStockChart
                                containerProps={containerProps}
                                options={options}
                                /* onRef = {ref => this.chart = ref} */
                            />
                        ) : (
                            <div className={"parent-loader"}>
                                <Loader
                                    type="bubble-top"
                                    bgColor={"#FFFFFF"}
                                    title={"Loading..."}
                                    color={"#FFFFFF"}
                                    size={100}
                                />
                            </div>
                        )
                    }
                </div>
            </div>
        );
    }
}

export default App;
