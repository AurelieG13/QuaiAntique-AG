jQuery(function($){

    $('#datepicker').datepicker({
        // dateFormat : 'dd/mm/yy'
        dateFormat : 'yy-mm-dd',
        minDate : 0 // date du jour comme 1ere date, bloque les dates avant
    });

    $('#timepicker').timepicker({
        timeFormat: 'HH:mm',
        interval: 15,
        minTime: '12',
        maxTime: '14:00',
        defaultTime: '12',
        startTime: '12',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });

});