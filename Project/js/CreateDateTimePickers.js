/**
 * Created by Pascal on 22.01.2017.
 */
$(function () {
    $('#startDateTimePicker').datetimepicker({
        locale: 'en',
        useCurrent: true,
        sideBySide: true
    });
    $('#endDateTimePicker').datetimepicker({
        locale: 'en',
        useCurrent: false,
        sideBySide: true
    });

    $("#startDateTimePicker").on("dp.change", function (e) {
        $('#endDateTimePicker').data("DateTimePicker").minDate(e.date);
    });
    $("#endDateTimePicker").on("dp.change", function (e) {
        $('#startDateTimePicker').data("DateTimePicker").maxDate(e.date);
    });
});