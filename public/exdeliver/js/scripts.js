var login = new Vue({
    el: '#login-form',
    data: {
        loginDetails: {
            username: '',
            password: ''
        },
        formErrors: {},
        errors: {}
    }
    ,
    methods: {
        loginPost: function (event) {

            let vm = this;

            event.preventDefault();

            // perform ajax
            axios.post('/login', vm.loginDetails)
                .then(function (response) {
                    var result = response.data;
                    console.log(result);
                    if (result.status === true) {
                        location.reload();
                    }
                })
                .catch(function (error) {
                    var errors = error.response.data;
                    vm.formErrors = errors;
                });
        }

    }
});

var register = new Vue({
    el: '#register-form',
    data: {
        registerForm: {},
        formErrors: {},
        errors: {}
    },

    methods: {
        submitForm: function (event) {

            event.preventDefault();

            let vm = this;

            axios.post('/register', vm.registerForm)
                .then(function (response) {
                    var result = response.data;
                    if (result.status == false) {
                        vm.formErrors = result.message;
                    } else if (result.status == true) {
                        window.location.href = '/profile';
                    }
                })
                .catch(function (error) {
                    var errors = error.response.data;
                    vm.formErrors = errors;
                });
        }
    },

    ready: function () {
        alert('nais');
    }
});

var request_password = new Vue({
    el: '#request-password-form',
    data: {
        loginDetails: {
            username: ''
        },
        formErrors: {},
        success: {},
        errors: {}
    }
    ,
    methods: {
        submitForm: function (event) {

            let vm = this;

            event.preventDefault();

            // perform ajax
            axios.post('/request-password', vm.loginDetails)
                .then(function (response) {
                    var result = response.data;
                    console.log(result);
                    if (result.status === true) {
                        vm.success = result;
                    }else if(result.status === false)
                    {
                        vm.errors = result;
                    }
                })
                .catch(function (error) {
                    var errors = error.response.data;
                    vm.formErrors = errors;
                });
        }

    }
});