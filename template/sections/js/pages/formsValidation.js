    /*
 *  Document   : formsValidation.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Validation page
 */

var FormsValidation = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            $('#form-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    val_username: {
                        required: true,
                        minlength: 3
                    },
                    val_email: {
                        required: true,
                        email: true
                    },
                    val_password: {
                        required: true,
                        minlength: 5
                    },
                    val_confirm_password: {
                        required: true,
                        equalTo: '#val_password'
                    },
                    val_bio: {
                        required: true,
                        minlength: 5
                    },
                    val_skill: {
                        required: true
                    },
                    val_website: {
                        required: true,
                        url: true
                    },
                    val_digits: {
                        required: true,
                        digits: true
                    },
                    smart_card: {
                        required: true,
                        digits: true
                    },
                    val_number: {
                        required: true,
                        number: true
                    },
                    val_range: {
                        required: true,
                        range: [1, 1000]
                    },
                    mob_no: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    amount: {
                        required: true,
                        digits: true,
                        minlength: 2,
                        maxlength: 3
                    },
                    amount_elec: {
                        required: true,
                         number: true,
                        minlength: 2,
                        maxlength: 8
                    },
                    val_terms: {
                        required: true
                    },
                    
                    customer_number:
                    {
                         required: true,
                         number: true,
                    },
                    
                    val_date:
                    {
                      required: true  
                    },
                    val_date2:
                    {
                      required: true  
                    },
                    val_select:
                    {
                      required: true  
                    },
                    val_city:
                    {
                      required: true  
                    },
                    val_city1:
                    {
                      required: true  
                    },
                    val_class:
                    {
                      required: true  
                    },
                     val_city2:
                    {
                      required: true  
                    },
                    state:
                    {
                       required: true   
                    },
                    operator: {
                        required: true
                    },
                    city:
                    {
                      required: true  
                    },
                    policy_no:
                    {
                      required: true  
                    },
                    ele_board:
                    {
                        required: true 
                    },
                    account_no:
                    {
                        required:true,
                        digits: true
                    },
                    amount1: {
                        required: true,
                        digits: true,
                        minlength: 2
                        
                    },
                    num_std: {
                        required: true,
                        digits: true,
                        minlength: 2,
                        maxlength: 3
                    },
                },
                messages: {
                    policy_no:'Please Enter a Policy Number',
                    
                    val_city:'Please Select a City',
                    
                    val_city1:'Please Select a  City',
                    
                    val_city2:'Please Select   City,Hotel or Area',
                    
                    val_date:'Please select a Date',
                    
                     val_date2:'Please select a Date',
                     
                     val_class:'Please select a Class',
                     
                     val_select:'Please select Any One',
                    
                    ele_board:'Please select Electricity Board',
                    
                    required: 'Please select City',
                    
                    customer_number:
                    {
                       required:'Please enter customer number',
                       digits: 'Please enter only digits!'
                    },
                    
                    val_username: {
                        required: 'Please enter a username',
                        minlength: 'Your username must consist of at least 3 characters'
                    },
                    val_email: 'Please enter a valid email address',
                    val_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long'
                    },
                    val_confirm_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long',
                        equalTo: 'Please enter the same password as above'
                    },
                    val_bio: 'Don\'t be shy, share something with us :-)',
                    val_skill: 'Please select a skill!',
                    val_website: 'Please enter your website!',
                    val_digits: 'Please enter only digits!',
                    smart_card: {
                        required: 'Please enter smart card number!',
                        digits: 'Please enter only digits!'
                    },
                    val_number: 'Please enter a number!',
                     state: 'Please select a state!',
                    val_range: 'Please enter a number between 1 and 1000!',
                    mob_no: {
                        required: 'Please enter a mobile number ',
                        digits: 'Please enter a number in digits only',
                        minlength: 'Please enter a number of 10 digits only',
                        maxlength: 'Please enter a number of 10 digits only'
                    },
                    amount: {
                        required: 'Please enter an amount',
                        digits: 'Please enter an amount in digits only',
                        minlength: 'Please enter an amount greater than 10',
                        maxlength: 'Please enter a number less than 999'
                    },
                    amount_elec: {
                        required: 'Please enter an amount',
                        number: 'Please enter an amount in digits only',
                        minlength: 'Please enter an amount greater than 10',
                        maxlength: 'Please enter a number less than 250000'
                    },
                    amount1: {
                        required: 'Please enter an amount',
                        digits: 'Please enter an amount in digits only',
                        minlength: 'Please enter an amount greater than 10'
                        
                    },
                    num_std: {
                        required: 'Please enter a Number',
                        digits: 'Please enter an amount in digits only',
                        minlength: 'Please enter an amount greater than 10',
                        maxlength: 'Please enter a number less than 11'
                    },
                    account_no:
                    {
                       required: 'Please enter an Account Number',
                        digits: 'Please enter an Account Number in digits only' 
                    },
                    val_terms: 'You must agree to the service terms!',
                    operator: 'Please Select Recharge Operator'
                }
            });

            // Initialize Masked Inputs
            // a - Represents an alpha character (A-Z,a-z)
            // 9 - Represents a numeric character (0-9)
            // * - Represents an alphanumeric character (A-Z,a-z,0-9)
            $('#masked_date').mask('99/99/9999');
            $('#masked_date2').mask('99-99-9999');
            $('#masked_phone').mask('(999) 999-9999');
            $('#masked_phone_ext').mask('(999) 999-9999? x99999');
            $('#masked_taxid').mask('99-9999999');
            $('#masked_ssn').mask('999-99-9999');
            $('#masked_pkey').mask('a*-999-a999');
        }
    };
}();











var FormsValidation2 = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            $('#form-validation2').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    val_username: {
                        required: true,
                        minlength: 3
                    },
                    val_email: {
                        required: true,
                        email: true
                    },
                    val_password: {
                        required: true,
                        minlength: 5
                    },
                    val_confirm_password: {
                        required: true,
                        equalTo: '#val_password'
                    },
                    val_bio: {
                        required: true,
                        minlength: 5
                    },
                    val_skill: {
                        required: true
                    },
                    val_website: {
                        required: true,
                        url: true
                    },
                    val_digits: {
                        required: true,
                        digits: true
                    },
                    smart_card: {
                        required: true,
                        digits: true
                    },
                    val_number: {
                        required: true,
                        number: true
                    },
                    val_range: {
                        required: true,
                        range: [1, 1000]
                    },
                    mob_no: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    amount: {
                        required: true,
                        digits: true,
                        minlength: 2,
                        maxlength: 3
                    },
                    val_terms: {
                        required: true
                    },
                    operator: {
                        required: true
                    }
                },
                messages: {
                    val_username: {
                        required: 'Please enter a username',
                        minlength: 'Your username must consist of at least 3 characters'
                    },
                    val_email: 'Please enter a valid email address',
                    val_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long'
                    },
                    val_confirm_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long',
                        equalTo: 'Please enter the same password as above'
                    },
                    val_bio: 'Don\'t be shy, share something with us :-)',
                    val_skill: 'Please select a skill!',
                    val_website: 'Please enter your website!',
                    val_digits: 'Please enter only digits!',
                    smart_card: {
                        required: 'Please enter smart card number!',
                        digits: 'Please enter only digits!'
                    },
                    val_number: 'Please enter a number!',
                    val_range: 'Please enter a number between 1 and 1000!',
                    mob_no: {
                        required: 'Please enter a mobile number ',
                        digits: 'Please enter a number in digits only',
                        minlength: 'Please enter a number of 10 digits only',
                        maxlength: 'Please enter a number of 10 digits only'
                    },
                    amount: {
                        required: 'Please enter a amount',
                        digits: 'Please enter a amount in digits only',
                        minlength: 'Please enter a amount greater than 10',
                        maxlength: 'Please enter a number less than 999'
                    },
                    val_terms: 'You must agree to the service terms!',
                    operator: 'Please Select Recharge Operator'
                }
            });

            // Initialize Masked Inputs
            // a - Represents an alpha character (A-Z,a-z)
            // 9 - Represents a numeric character (0-9)
            // * - Represents an alphanumeric character (A-Z,a-z,0-9)
            $('#masked_date').mask('99/99/9999');
            $('#masked_date2').mask('99-99-9999');
            $('#masked_phone').mask('(999) 999-9999');
            $('#masked_phone_ext').mask('(999) 999-9999? x99999');
            $('#masked_taxid').mask('99-9999999');
            $('#masked_ssn').mask('999-99-9999');
            $('#masked_pkey').mask('a*-999-a999');
        }
    };
}();


//*******************************************Add Money Request*****************************************/

var FormsValidation3 = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            $('#form-validation3').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    date: {
                        required: true,
                       },
                    bank_ref: {
                        required: true,
                        minlength: 3
                    },
                    transfer_type: {
                        required: true,
                        
                    },
                    bank: {
                        required: true,
                        
                    },
                    amount: {
                        required: true,
                        digits: true,
                        minlength: 2,
                    
                    },
                    
                },
                messages: {
                    date: {
                        required: 'Please enter a date',
                        minlength: 'Your username must consist of at least 3 characters'
                    },
                      bank_ref: {
                        required: 'Please provide a Bank Reference Number',
                        
                    },
                    transfer_type: 'Please enter a Type of Transfer',
                    bank: 'Please enter a Bank Name',
                  
                    amount: {
                        required: 'Please enter a amount',
                        digits: 'Please enter a amount in digits only',
                        minlength: 'Please enter a amount greater than 10',
                        maxlength: 'Please enter a number less than 999'
                    },
                    
                }
            });

            // Initialize Masked Inputs
            // a - Represents an alpha character (A-Z,a-z)
            // 9 - Represents a numeric character (0-9)
            // * - Represents an alphanumeric character (A-Z,a-z,0-9)
            $('#masked_date').mask('99/99/9999');
            $('#masked_date2').mask('99-99-9999');
            $('#masked_phone').mask('(999) 999-9999');
            $('#masked_phone_ext').mask('(999) 999-9999? x99999');
            $('#masked_taxid').mask('99-9999999');
            $('#masked_ssn').mask('999-99-9999');
            $('#masked_pkey').mask('a*-999-a999');
        }
    };
}();