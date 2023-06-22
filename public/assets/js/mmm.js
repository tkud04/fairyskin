$(document).ready(() => {
    $('#login-btn').click(e => {
        e.preventDefault()
        const email = $('#email').val(), pass = $('#pass').val()

        if(email === '' || pass === ''){
            displayError('All fields are required')
        }
        else{
            $('#login-form').submit()
        }
    })

    $('#register-btn').click(e => {
        e.preventDefault()
        const email = $('#email').val(), pass = $('#password').val(),
              fname = $('#fname').val(), lname = $('#lname').val(),
              pass2 = $('#password-2').val()

        const v = email === '' || pass === '' || fname === '' || lname === '' ||
                pass2 === '', v2 = pass !== pass2
        
        if(v || v2){
            let errorMessage = ''
            if(v) errorMessage = 'All fields are required'
            if(v2) errorMessage = 'Passwords must not match'
            displayError(errorMessage)
        }
        else{
            $('#login-form').submit()
        }
    })
})