var chart = JSC.chart('chartDiv', {
    debug: true,
    title: {
        position: 'center',
        label_text: 'Top Populations vs. Life Expectancy'
    },
    defaultSeries: {
        type: 'pie',
        angle_orientation: 220,
        shape_padding: 0.2
    },
    defaultPoint: {
        //label_text:'<b>%name</b>', 
        label_text: '<span style="width:90px">%name</span><span style="width:60px">{%yValue/1000000:n1}M</span><span style="width:50px">%zValue yrs.</span>',
        tooltip: '<b>%name<b/><br/>Population: <b>{%yValue/1000000:n1}M</b> {%percentOfTotal:n1}% <br/>Life Expectancy:<b>%zValue</b> Years<hr>Fertility Rate: <b>%fertility</b>/Woman'
    },
    legend: {
        visible: false,
        header: 'Population,Life Exp.,,',
        template: '%value {%zValue:n0}yrs %icon %name',
        defaultEntry_value: '{%yValue/1000000:n1}M'
    },

    zAxis_formatString: 'n1',

    series: [{
        name: 'Top Population Countries',
        points: [{
                name: 'China',
                y: 1349585838,
                z: 74.99,
                attributes: { fertility: 1.55 }
            },
            {
                name: 'India',
                y: 1220800359,
                z: 67.48,
                attributes: { fertility: 2.55 }
            },
            {
                name: 'European Union',
                y: 509365627,
                z: 79.86,
                attributes: { fertility: 1.6 }
            },
            {
                name: 'United States',
                y: 316438601,
                z: 78.62,
                attributes: { fertility: 2.06 }
            },
            {
                name: 'Indonesia',
                y: 251160124,
                z: 71.9,
                attributes: { fertility: 2.2 }
            },
            {
                name: 'Brazil',
                y: 201009622,
                z: 73.02,
                attributes: { fertility: 1.81 }
            },
            {
                name: 'Pakistan',
                y: 193238868,
                z: 66.71,
                attributes: { fertility: 2.96 }
            },
            {
                name: 'Nigeria',
                y: 174507539,
                z: 52.46,
                attributes: { fertility: 5.31 }
            },
            {
                name: 'Bangladesh',
                y: 163654860,
                z: 70.36,
                attributes: { fertility: 2.5 }
            },
            {
                name: 'Russia',
                y: 142500482,
                z: 69.85,
                attributes: { fertility: 1.61 }
            }
        ]
    }]
});