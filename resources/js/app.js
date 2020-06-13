const { post } = require('jquery');
require('./bootstrap');


$(document).ready(function() {
    /* STUDENTS page */
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


    /* FAQ page*/
    function resetButtonIcon(...$buttons) {
        $buttons.forEach($item => $item.find('i').removeClass('fa-minus').addClass('fa-plus'))
    }

    $('.faq-template__question').click(function() {
        $(this).find('i').toggleClass('fa-plus fa-minus')
        resetButtonIcon($(this).parent().siblings(),
                        $(this).parents('.column').siblings())
        let target = $(this).next()
        target.slideToggle(400, 'linear')
        $('.faq-template__answer').not(target).slideUp(400, 'linear')
    })

    $('.faq-template__answer').click(function() {
        resetButtonIcon($(this).prev())
        $(this).slideUp(400, 'linear')
    })
})
