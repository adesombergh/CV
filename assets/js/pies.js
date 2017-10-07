function destroyCharts(pies) {
    for (var i = 0; i < pies.length; i++) {
        pies[i].reset();
        pies[i].render();;
    }
}

function charts(){
    var options = {
        legend: {
            display: false
        },

        animation: {
            easing: 'easeOutQuad'
        },
    };

    var htmlpie = new Chart($("#htmlpie"),{
        "type":"pie",
        data: {
            labels: ['know','learning'],
            datasets: [{
                data: [90, 10],
                backgroundColor: [
                    '#263B47',
                    '#d1675a'
                ],
                borderWidth: 0,
                hoverBackgroundColor: [
                    "#233641",
                    "#d1675a"
                ],

            }]
        },
        options: options
    });

    var jspie = new Chart($("#jspie"),{
        "type":"pie",
        data: {
            labels: ['know','learning'],
            datasets: [{
                data: [85, 15],
                backgroundColor: [
                    '#2E4756',
                    '#d1675a'
                ],
                borderWidth: 0,
                hoverBackgroundColor: [
                    "#2A414F",
                    "#d1675a"
                ],

            }]
        },
        options: options
    });   

    var phppie = new Chart($("#phppie"),{
        "type":"pie",
        data: {
            labels: ['know','learning'],
            datasets: [{
                data: [90, 10],
                backgroundColor: [
                    '#2A414F',
                    '#d1675a'
                ],
                borderWidth: 0,
                hoverBackgroundColor: [
                    "#263B47",
                    "#d1675a"
                ],

            }]
        },
        options: options
    });   

    var gitpie = new Chart($("#gitpie"),{
        "type":"pie",
        data: {
            labels: ['know','learning'],
            datasets: [{
                data: [75, 25],
                backgroundColor: [
                    '#2E4756',
                    '#d1675a'
                ],
                borderWidth: 0,
                hoverBackgroundColor: [
                    "#2A414F",
                    "#d1675a"
                ],

            }]
        },
        options: options
    });  
    var laravelpie = new Chart($("#laravelpie"),{
        "type":"pie",
        data: {
            labels: ['know','learning'],
            datasets: [{
                data: [50, 50],
                backgroundColor: [
                    '#415765',
                    '#d1675a'
                ],
                borderWidth: 0,
                hoverBackgroundColor: [
                    "#2E4756",
                    "#d1675a"
                ],
            }]
        },
        options: options
    });

    var nodepie = new Chart($("#nodepie"),{
        "type":"pie",
        data: {
            labels: ['know','learning'],
            datasets: [{
                data: [25, 75],
                backgroundColor: [
                    '#415765',
                    '#d1675a'
                ],
                borderWidth: 0,
                hoverBackgroundColor: [
                    "#2E4756",
                    "#d1675a"
                ],
            }]
        },
        options: options
    });

    var pies = [htmlpie,jspie,phppie,gitpie,laravelpie,nodepie];
    return pies;
}