
var AddUser = function() {
 
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
                    user_type: {
                        required: true,

                    },
                    firstname: {
                        required: true,
                        lettersonly: true
                    },
                    lastname: {
                        required: true,
                        lettersonly: true
                    },
                    username: {
                        required: true,
                        minlength: 5
                    },
                    cmpy_name: {
                       required: true,
                        minlength: 5
                    },
                    api_holder: {
                        required: true,
                    },
                    mob_no: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    phone_no: {
                         required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                       },
                    website: {
                        required: true,
                        url: true
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    mob_cons_num: {
                        required: true,
                        digits
                    },

                },
                messages: {
                    user_type:'User Type Required',
                    firstname: {
                        required: 'Please enter a username',
                        lettersonly: 'Firstname in alphabets only'
                    },
                    lastname: {
                        required: 'Please enter a username',
                        lettersonly: 'Firstname in alphabets only'
                    },
                    username: {
                        required: 'Username required',
                        minlength: 'Username must be above 5 characters'
                    },
                    cmpy_name: {
                        required: 'Company Name Required',
                        minlength: 'Company Name must be above 5 characters'
                    },
                    api_holder: {
                        required: 'Company Name Required',
                        
                    },
                    mob_no: {
                        required: 'Mobile Number Required',
                        minlength: 'Mobile number must be 10 numbers',
                        maxlength: 'Mobile number must be 10 numbers'
                    },
                    phone_no: {
                         required: 'Phone Number required',
                        minlength: 'Phone number must be 10 numbers',
                        maxlength: 'Phone number must be 10 numbers'
                    },
                    email: {
                        required: 'Email Address is required',
                    },
                    password: {
                        required: 'Password is required',
                       },
                    website: {
                        required: 'Website is required',
                        url: 'Website name should be URL'
                    },
                    url: {
                        required: 'URL is required',
                        url: 'API URL name should be HTTP/HTTPS URL'
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





var Report1 = function() {
 
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
                     type: {
                        required: true,
                        
                    },
                    from: {
                        required: true,
                    },
                    to: {
                        required: true,
                        
                    },
                    
                   
                },
                messages: {
                    type:'Type of API Required',
                    from:'From Date Required',
                    to:'To Date Required',
                    
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
