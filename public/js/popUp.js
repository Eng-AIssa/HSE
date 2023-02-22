/*handle checkbox lists style and dynamic adding and removing*/


$('.checkbox').on('change', function () {
    let checkboxes_result_container = $(this).parents('.checkboxes-container').find('.result-container');

    // if checkbox is checked
    if ($(this).prop('checked') === true) {

        // create span to hold the value of the checked checkbox
        let span_element = $("<span id='" + $(this).attr('id') + "2' class=' bg-light rounded' style='display: inline-block; margin:5px 5px 0 5px; padding: 5px 10px; font-size: 0.74rem;'></span>");

        // create small exit icon with 'x' sign to remove span manually if desired
        let small_quite = $("<small class='clicky ml-2 ' onclick='smallQuite(this)'>x</small>")

        // add checked checkbox value to the created span and attach the created close icon
        span_element.text($(this).val()).append(small_quite);

        // show the results container to hold the created span
        checkboxes_result_container.fadeIn(1000);

        // add the created spans to results container
        checkboxes_result_container.append(span_element);

        // else if the checkbox was unchecked
    } else {

        // remove span which is related to unchecked checkbox
        $('#' + $(this).attr('id') + '2').remove();

        // hide the results container if no spans left to show
        if (!checkboxes_result_container.find('span').html())
            checkboxes_result_container.fadeOut(1000);
    }
});


// function to handle the click event on span's close icon
function smallQuite(me) {
    let checkbox = $(me).parent('span').attr('id');
    let result_container = $(me).parents('.result-container');

    Livewire.emit('unsetCheckboxValue', checkbox.slice(-2, -1));

    // uncheck the checkbox related to removed span
    $('#' + checkbox.slice(0, -1)).prop("checked", false);

    // hide the result container if there is no spans left to show( -1 in the if statement represent the span which will be removed after the if)
    if (!(result_container.find('span').length - 1 > 0)) {
        result_container.fadeOut(1000);
    }

    // remove the span
    $('#' + checkbox).remove();
}


$('.dropdown-menu').on('click', function (e) {
    e.stopPropagation();
});
