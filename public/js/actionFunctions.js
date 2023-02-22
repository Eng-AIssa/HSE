/*###################### Action Component ######################*/
// if removed from here, action modal will face problem on the create when trying to close modal and submit

function closeActionModal() {
    $('.action-modal').modal('hide')
}


function hideActionModalAndClearFields(me) {
    //hide action modal
    $(me).closest('.modal').modal('hide');
    //show Action notification
    $('.action-alert').css('display', 'flex').css('align-items', 'center')
    //clear select2 inputs
    $(function () {
        setTimeout(function () {
            $(".action-alert").hide()
            Livewire.emit('refreshComponent')
        }, 5000);
    });
}
/*###################### End Action Component ######################*/
