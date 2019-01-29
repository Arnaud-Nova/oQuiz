var app = {

    init: function() {
        app.$signupForm = $('#signup');
        app.$errorTarget = $('.error-target');
        console.log(app.$signupForm);
        app.$signupForm.on('submit', app.checkSignupForm);
    },

    checkSignupForm: function(evt) {
        // evt.preventDefault();
        app.$errorTarget.empty();
        app.form = evt.currentTarget;
        var email = $('#email', app.form).val();
        var firstname = $('#firstname', app.form).val();
        var lastname = $('#lastname', app.form).val();
        var password =$('#password', app.form).val();
        var confirmpassword = $('#confirmpassword', app.form).val();
        
        if (!app.checkEmail(email)) {
            evt.preventDefault();
        }
        if (!app.checkFirstname(firstname)) {
            evt.preventDefault();
        }
        if (!app.checkLastname(lastname)) {
            evt.preventDefault();
        }if (!app.checkPassword(password, confirmpassword)) {
            evt.preventDefault();
        }

    },

    checkEmail: function(email) {
        if (email.length > 0) {
            return true;
        } else {
            
            app.$errorTarget.append('<p class="error">Ajouter un email</p>');
            return false;
        }
    },

    checkFirstname: function(firstname) {
        if (firstname.length > 0) {
            return true;
        } else {
            
            app.$errorTarget.append('<p class="error">Ajouter un prénom</p>');
            return false;
        }
    },

    checkLastname: function(lastname) {
        if (lastname.length > 0) {
            return true;
        } else {
            
            app.$errorTarget.append('<p class="error">Ajouter un nom</p>');
            return false;
        }
    },

    checkPassword: function(password, confirmpassword) {
        if (password.length > 0 && password === confirmpassword) {
            return true;
        } else {
            app.$errorTarget.append('<p class="error">Ajouter un mot de passe identique</p>');
            return false;
 
        }
    }

} 

app.init();