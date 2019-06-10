let Routing = require('../../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router');
let Routes = require('../js_routes');

Routing.setRoutingData(Routes);


let url = Routing.generate('cv_new');

$(document).ready(function () {
    $('#cv').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: Routing.generate('cv'),
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
