let Routing = require('../../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router');
let Routes = require('../js_routes');

Routing.setRoutingData(Routes);


let url = Routing.generate('conge_demande');

$(document).ready(function () {
    $('#conge').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: Routing.generate('conge'),
            data: $(this).serialize(),
            success: function () {
                location.reload();
                console.log('success');

            },
            error: function () {
                console.log('failure');
            }
        })
    })
});
