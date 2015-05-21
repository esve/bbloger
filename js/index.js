$(document).ready(function()
{
    $('#signInForm').bootstrapValidator({
        live:'enabled',
        submitButtons: 'button[id="signInSubmit"]',
        message: 'This value is not valid',
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    regexp: {
                        regexp: /^\S{6,20}$/,
                        message: 'Min 6 letters, max 20, no whitespaces'
                    }
                }
            }
        }
    });

    $('#signUpForm').bootstrapValidator({
        live:'enabled',
        submitButtons: 'button[id="signUpSubmit"]',
        message: 'This value is not valid',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required.'
                    },
                    stringLength: {
                        min: 2,
                        max: 30,
                        message: 'The name must be more than 2 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[ a-zA-Z]+$/,
                        message: 'Only alphabets ofcourse'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            pwd: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^\S{6,20}$/,
                        message: 'Min 6 letters, max 20, no whitespaces'
                    }
                }
            },
            cpwd: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'pwd',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
});