import $ from 'jquery'
window.jQuery = window.$ = $

import DataTable from 'datatables.net';
window.DataTable = DataTable;

$(function() {
    new DataTable('#data', {
        ajax: {
                "url": '/api/users',
                "type": "GET",
                "dataSrc": '',
        },
        columns: [
            { data: 'email' },
            { data: 'random_code' },
        ]
    });

    $('#add').on('click', function() {
        window.location = 'add-user'
    })

    $('#storeUser').on('click', function() {
        $.post('api/users', 
        {
            name: $('#name').val(),
            email: $('#email').val(),
            password: $('#password').val()   
        },
        function() {
            window.location = 'user'
        })
    })
})
