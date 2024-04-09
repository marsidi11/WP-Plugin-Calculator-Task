var clickCount = 1;

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('calculate').addEventListener('click', function() {
        var x = document.getElementById('x').value;
        var y = document.getElementById('y').value;
        var z = document.getElementById('z').value;

        if (!x || !y || !z) {
            alert('Ploteso Fushat');
        } else if (x <= 0 || y <= 0 || z <= 0) {
            alert('Vlerat duhet te jene pozitive');
        } else {
            var result = x * y - z;
            document.getElementById('output').value = result;

            var data = {
                'action': 'update_click_count',
                'click_count': clickCount,
            };

            jQuery.post(my_script_vars.ajaxurl, data, function (response) {
                console.log('Response from server: ' + response.data);
            }).fail(function (xhr, status, error) {
                console.log('Error: ' + error + ' with status: ' + status + ' with xhr: ' + xhr.responseText);
            });

        }

    });
});