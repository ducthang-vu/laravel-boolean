const { post } = require('jquery');
require('./bootstrap');


$(document).ready(function() {
    const apiUrl = window.location.protocol + '//' +  window.location.host + '/api/students/genders'

    // init handeblar
    var source = $('#student-template').html()
    try {
        var template = Handlebars.compile(source)
    } catch {} //do nothing

    Handlebars.registerHelper('isMale', value => value == 'm')

    $('#filter').on('change', function() {
        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: $(this).val()
            }
        }).done(res => {
            res.response.length ?
                $('.card-container').html(template({students: res.response})) :
                console.log(res.error)
        }).fail(() => console.log('Api error'))
    })


    /* FAQ */
    $('.faq-template__question').click(function() {
        console.log('clicked')
        $('.faq-template__answer').slideUp()
        $(this).next().slideDown();
    })

    $('.faq-template__answer').click(function() {$(this).slideUp()})
})
