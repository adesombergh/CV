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
        tooltips: {
            enabled: false
        },
        animation: {
            easing: 'easeOutQuad'
        },
        hover: {
            mode: false
        }
    };

    var htmlpie = new Chart($("#htmlpie"),{
        "type":"pie",
        data: {
            labels: ['html'],
            datasets: [{
                data: [99, 1],
                backgroundColor: [
                    '#DBE2CF',
                    '#d1675a'
                ],
                borderWidth: 0
            }]
        },
        options: options
    });

    var csspie = new Chart($("#csspie"),{
        "type":"pie",
        data: {
            labels: ['css'],
            datasets: [{
                data: [90, 10],
                backgroundColor: [
                    '#9FA2B2',
                    '#d1675a'
                ],
                borderWidth: 0
            }]
        },
        options: options
    });

    var jspie = new Chart($("#jspie"),{
        "type":"pie",
        data: {
            labels: ['js'],
            datasets: [{
                data: [85, 15],
                backgroundColor: [
                    '#3C7A89',
                    '#d1675a'
                ],
                borderWidth: 0
            }]
        },
        options: options
    });   

    var phppie = new Chart($("#phppie"),{
        "type":"pie",
        data: {
            labels: ['php'],
            datasets: [{
                data: [90, 10],
                backgroundColor: [
                    '#2E4756',
                    '#d1675a'
                ],
                borderWidth: 0
            }]
        },
        options: options
    });   

    var gitpie = new Chart($("#gitpie"),{
        "type":"pie",
        data: {
            labels: ['git'],
            datasets: [{
                data: [75, 25],
                backgroundColor: [
                    '#16262E',
                    '#d1675a'
                ],
                borderWidth: 0
            }]
        },
        options: options
    });  
    var laravelpie = new Chart($("#laravelpie"),{
        "type":"pie",
        data: {
            labels: ['laravel'],
            datasets: [{
                data: [60, 40],
                backgroundColor: [
                    '#16262E',
                    '#d1675a'
                ],
                borderWidth: 0
            }]
        },
        options: options
    });
    var pies = [htmlpie,csspie,jspie,phppie,gitpie,laravelpie];
    return pies;
}