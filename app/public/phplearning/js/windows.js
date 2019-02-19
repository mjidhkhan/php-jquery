/* 
 * Copyright (C) 2016 majidhameedkhan
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

var dataOne;
var dataTwo;
var calculateAction;
var prefixSing;
var actionOperand;
var lastKeyInput;
$(document).ready(function () {


});

/*
 * Calculator main function 
 * @param {String} num
 * @returns {undefined}
 */

function w(num) {
    var input;
    var firstNumber;
    var operand = '';
    input = $('#ans1').val();
    //alert(input);
    /* Function signature check call */
    operationSignatureCheck(num, input);
    
    
    
    if (lastKeyInput === '=') {
        console.log('KEY:' + lastKeyInput);
        $('#ans1').val(num);
        lastKeyInput = '';
        return;
    }

    if (input === '0') {
        checkKeyInputforOperand(num);
        
        //firstNumber = $('#ans1').val(num);
    } else if (input === '.') {
        $('#ans1').val('0' + input + '' + num);
    } else if (num === '|') {
        prefixedOperandInput(input);
    } else {
        console.log('OPERATOR TYPE  :' + num);
        switch (num) {
            case '/':
                operandDisplay(num);
                break;
            case 'x':
                operandDisplay(num);
                break;
            case '+':
                operandDisplay(num);
                break;
            case '-':
                prefixedOperandRemoval(input, num);
                operandDisplay(num);
                break;
            case '%':
                operandDisplay(num);
                break;
            default:
                var operand;
                if (actionOperand === '/') {
                    operand = input.indexOf("/") > -1;
                } else if (actionOperand === '+') {
                    operand = input.indexOf("+") > -1;
                } else if (actionOperand === '-') {
                    operand = input.indexOf("-") > -1;
                } else if (actionOperand === 'x') {
                    operand = input.indexOf("x") > -1;
                } else if (actionOperand === '%') {
                    operand = input.indexOf("%") > -1;
                }
                removeOperand(num, operand, input);
        }
    }
}


function checkKeyInputforOperand(num){
    if(num === '|' || num ==='%'|| num ==='/' || num ==='+' || num ==='-' || num ==='x'){
            $('#ans1').val(0);
        }else{
            $('#ans1').val(num);
        }
}

/**
 * 
 * @param {String} num
 * @param {String} input
 * @returns {undefined}
 */
function operationSignatureCheck(num, input){
     $('#ans1').css({'color':'inherit'});
    if ((num === '|') || (num === '/') || (num === '+') || (num === '%') || (num === '-') || (num === 'x')) {
        actionOperand = num;
        console.log('ACTION SIGN :' + actionOperand);
        dataOne = input;
        $('#ans1').val('');
        $('#ans1').val(num);
        if (actionOperand !== '' && input !== '0') {
            console.log('OPERATION: ' + actionOperand + 'FIRST VALUE LINE 100: ' + dataOne);
        }
    }
}

/**
 * 
 * @param {String} input
 * @returns {undefined}
 */
function prefixedOperandInput(input) {
    var result = input.indexOf("-") > -1;
    if (result) {
        var res = input.replace("-", "");
        $('#ans1').val(res);
        firstNumber = $('#ans1').val(res);
    } else {
        $('#ans1').val('-' + input + '');
        firstNumber = $('#ans1').val();
    }
}

/**
 * 
 * @param {String} input
 * @param {String} num
 * @returns {undefined}
 */
function prefixedOperandRemoval(input, num) {
    var firstString = input.indexOf("-") > -1;
    if (firstString) {
         console.log('lastStringcheck line 178');
        var lastStringcheck = input.indexOf("-") > +1;
        if (lastStringcheck) {
            console.log('lastStringcheck line 180');
            var result = input.replace(input.substring(input.length - 1), "");
            // $('#ans1').val(result);
        } else {
             console.log('lastStringcheck line 185');
            $('#ans1').val(input + num);
        }
    }
}

/**
 * 
 * @param {String} num
 * @returns {undefined}
 */
function operandDisplay(num) {
    
    $('#ans1').css({'text-align':'left'});
    $('#ans1').val(num);

}

/**
 * 
 * @param {String} num
 * @param {String} operand
 * @param {String} input
 * @returns {undefined}
 */
function removeOperand(num, operand, input) {
    $('#ans1').css({'text-align':'right'});
    // console.log('OPERATOR RECEIVED  {removeOperand}: ' + operand);
    if (operand) {
        // console.log('INDEX CHECK /' + operand);
        $('#ans1').css({'text-align':'right'});
        $('#ans1').val(num);


    } else {
        // console.log('INDEX CHECK /' + operand);
        $('#ans1').css({'text-align':'right'});
        $('#ans1').val(input + '' + num);
        dataTwo = $('#ans1').val(input + '' + num);
        console.log('OPERATOR CHECK FALSE {removeOperand}:' + dataTwo.val());
    }

}



$('#wClear').click(function () {
    $('#ans1').val("0");
});


$('#wEqual').click(function () {
    dataTwo = $('#ans1').val();
    // ajax post to php file to perform calculation
    $.ajax({
        method: "POST",
        url: "../functions/calculator.php",
        data: {dataOne: dataOne, dataTwo: dataTwo, actionOperand: actionOperand}
    })
            .done(function (msg) {  
                
                if(msg ==='Error'){
                     $('#ans1').css({'color':'#EA0C0C'});    
                }else{
                    $('#ans1').css({'color':'inherit'});
                }
                console.log('DATA-ONE :'+dataOne+ '\nDATA TWO : '+ dataTwo);
                $('#ans1').val(msg);
                lastKeyInput = '=';
            });
});
