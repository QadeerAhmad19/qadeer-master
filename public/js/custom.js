$(function () {
    // $('.datepicker').datepicker({
    //     format: 'mm/dd/yyyy',
    //     startDate: '-3d'
    // });

    $('.role-class').on('change',function () {
        if(this.value==3){
            $('.hide-this').hide();
        }
        else if(this.value==2){
            $('.hide-this').show();
        }
    });
});