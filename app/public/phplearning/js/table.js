/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

// check anything changed in input or HTML tag <input>
//  and call createTables function.
    $(":input").bind('keyup mouseup', function () {
        createTables();
    });
    $('.response').hide(); // hide response message div if it is not hidden
    $('.page-header').hide(); // hide title reponse div

});
/**
 *  Function to create Digit Tables and Display result using ajax call
 * @returns {undefined}
 */
function createTables() {
    var table = $('#table').val(); // getting value from input for table upper limit
    var range = $('#range').val(); // getting value form input for range upper limit
    if (table <= 1 || table === '') {               // check if table value less then or equal to zero
        $('.page-header').hide(); // hide response div
        $('.response').empty(); // empty response div
        return; // don't do any further action return back to view
    } else if (range <= 0 || range === '') {        // check if range value less then or equal to zero
        $('.response').empty(); // hide response div
        $('.page-header').hide(); // empty response div
        return; // don't do any further action return back to view 
    }

    // both table and range values are positive and greater then conditions then 
    // send ajax call or post ajax to get response
    $.ajax({
        method: "POST",
        url: "../functions/table.php",
        data: {table: table, range: range}
    })
            .done(function (msg) {                  // display response when ajax call complete
                $('.page-header').show(); // show page header
                $('.response').empty(); // empty response div
                $('.response').append(msg); // append response message to div
                $('.response').show('slow'); // hide response div

            });
}

