var app = {

    init: function() {
        app.$signupForm = $('#signup');
        app.$errorTarget = $('.error-target');
        console.log(app.$signupForm);
        app.$signupForm.on('submit', app.checkSignupForm);
    },

    checkSignupForm: function(evt) {
        evt.preventDefault();
        app.$errorTarget.empty();
        app.form = evt.currentTarget;
        var email = $('#email', app.form).val();
        var firstname = $('#firstname', app.form).val();
        var lastname = $('#lastname', app.form).val();
        var password =$('#password', app.form).val();
        var confirmpassword = $('#confirmpassword', app.form).val();
        
        app.checkEmail(email);
        app.checkFirstname(firstname);
        app.checkLastname(lastname);
        app.checkPassword(password, confirmpassword);

    },

    checkEmail: function(email) {
        if (email.length > 0) {
            return true;
        } else {
            
            app.$errorTarget.append('<p class="error">Ajouter un email</p>');
        }
    },

    checkFirstname: function(firstname) {
        if (firstname.length > 0) {
            return true;
        } else {
            
            app.$errorTarget.append('<p class="error">Ajouter un prénom</p>');
        }
    },

    checkLastname: function(lastname) {
        if (lastname.length > 0) {
            return true;
        } else {
            
            app.$errorTarget.append('<p class="error">Ajouter un nom</p>');
        }
    },

    checkPassword: function(password, confirmpassword) {
        if (password.length > 0 && password === confirmpassword) {
            return true;
        } else {
            app.$errorTarget.append('<p class="error">Ajouter un mot de passe identique</p>');
 
        }
    }

} 

app.init();