const { post } = require('jquery');
require('./bootstrap');


$(document).ready(function() {
    const apiUrl = window.location.protocol + '//' +  window.location.host + '/api/students/genders'

    // init handeblar
    var source = $('#student-template').html()
    var template = Handlebars.compile(source)
    Handlebars.registerHelper('isMale', value => value == 'm')

    $('#filter').on('change', function() {
        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: $(this).val() 
            }
        }).done(function(res) {
            if (res.response.length) {
                $('.card-container').empty()
                $('.card-container').html(template({students: res.response}))
            } else {
                console.log(res.error)
            }
        }).fail(function(){
            console.log('Api error')
        })
    })
})