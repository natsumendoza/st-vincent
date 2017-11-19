$(document).ready(function () {
    $('#birthday').datepicker();
    $('#birthdayFather').datepicker();
    $('#birthdayMother').datepicker();
    $('#birthdayGuardian').datepicker();

        // $('#example').DataTable( {
        //     initComplete: function () {
        //         this.api().columns().every( function () {
        //             alert('hello');
        //             var column = this;
        //             var select = $('<select><option value=""></option></select>')
        //                 .appendTo( $(column.footer()).empty() )
        //                 .on( 'change', function () {
        //                     var val = $.fn.dataTable.util.escapeRegex(
        //                         $(this).val()
        //                     );
        //
        //                     column
        //                         .search( val ? '^'+val+'$' : '', true, false )
        //                         .draw();
        //                 } );
        //
        //             column.data().unique().sort().each( function ( d, j ) {
        //                 select.append( '<option value="'+d+'">'+d+'</option>' )
        //             } );
        //         } );
        //     }
        // } );

    var table = $('#example').DataTable( {
        dom :  "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'<'#filterByGrade'>><'col-sm-12 col-md-4'f>>rtip"
    } );

    // dom :  "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'<"#add">><'col-sm-12 col-md-4'f>>rtip" 'l<div class="col-sm-12 col-md-4"><"#add">frtip'
    //
    $label = $('<label/>').text('Filter: ').appendTo('#filterByGrade');
    $select = $('<select/>').addClass('form-control form-control-sm grade-select');
    ($select.appendTo($label));
    $('<option/>').val('').text('Select Grade').appendTo($select);
    $('<option/>').val('Grade 1').text('Grade 1').appendTo($select);
    $('<option/>').val('Grade 2').text('Grade 2').appendTo($select);
    $('<option/>').val('Grade 3').text('Grade 3').appendTo($select);
    $('<option/>').val('Grade 4').text('Grade 4').appendTo($select);
    $('<option/>').val('Grade 5').text('Grade 5').appendTo($select);
    $('<option/>').val('Grade 6').text('Grade 6').appendTo($select);
    $('<option/>').val('Grade 7').text('Grade 7').appendTo($select);
    $('<option/>').val('Grade 8').text('Grade 8').appendTo($select);
    $('<option/>').val('Grade 9').text('Grade 9').appendTo($select);
    $('<option/>').val('Grade 10').text('Grade 10').appendTo($select);
    $('<option/>').val('Grade 11').text('Grade 11').appendTo($select);
    $('<option/>').val('Grade 12').text('Grade 12').appendTo($select);
    $('<option/>').val('Transferee').text('Transferee').appendTo($select);
    $('<option/>').val('Drop out').text('Drop Out').appendTo($select);
    $('<option/>').val('Graduate').text('Graduate').appendTo($select);


    $('.grade-select').change(function () {
        var val = $.fn.dataTable.util.escapeRegex($(this).val());
        table.column(1).search( val ? '^'+val+'$' : '', true, false ).draw();
    });
});