@extends('forum::layouts.master')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">{!! trans('forum::user.user') !!}</a></li>
    <li class="breadcrumb-item active">{!! trans('forum::user.register') !!}</li>
@stop

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                {!! Form::open(['url' => '/register', 'role' => 'form', 'method' => 'post', 'id' => 'register-form', '@submit.prevent' => 'submitForm']) !!}
                <ul v-if="errors && errors.length">
                    <li v-for="error of errors">
                        @{{error.message}}
                    </li>
                </ul>
                <h3>{!! trans('forum::user.create_account') !!}</h3>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {!! Form::text('first_name', null, ['class' => 'form-control input-lg', 'id' => 'first_name', 'placeholder' => trans('forum::user.first_name'), 'tabindex' => 1, 'v-model' => 'registerForm.first_name']) !!}
                            <span v-if="formErrors['first_name']" class="error">@{{ formErrors['first_name'][0] }}</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {!! Form::text('last_name', null, ['class' => 'form-control input-lg', 'id' => 'last_name', 'placeholder' => trans('forum::user.last_name'), 'tabindex' => 2, 'v-model' => 'registerForm.last_name']) !!}
                            <span v-if="formErrors['last_name']" class="error">@{{ formErrors['last_name'][0] }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::text('username', null, ['class' => 'form-control input-lg', 'id' => 'username', 'placeholder' => trans('forum::user.username'), 'tabindex' => 3, 'v-model' => 'registerForm.username']) !!}
                    <span v-if="formErrors['username']" class="error">@{{ formErrors['username'][0] }}</span>

                </div>
                <div class="form-group">
                    {!! Form::text('email', null, ['class' => 'form-control input-lg', 'id' => 'email', 'placeholder' => trans('forum::user.email'), 'tabindex' => 4, 'v-model' => 'registerForm.email']) !!}
                    <span v-if="formErrors['email']" class="error">@{{ formErrors['email'][0] }}</span>

                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {!! Form::password('password', ['class' => 'form-control input-lg', 'id' => 'password', 'placeholder' => trans('forum::user.password')]) !!}
                            <span v-if="formErrors['password']" class="error">@{{ formErrors['password'][0] }}</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            {!! Form::password('password_confirmation', ['class' => 'form-control input-lg', 'id' => 'password_confirmation', 'placeholder' => trans('forum::user.password_confirmation')]) !!}
                            <span v-if="formErrors['password_confirmation']" class="error">@{{ formErrors['password_confirmation'][0] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<label for="terms"><strong>{!! trans('forum::user.i_agree') !!}</strong></label>
                        {!! Form::checkbox('terms', 1, null,['id' => 'terms'])  !!}
					</span>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                        {!! trans('forum::user.terms_description') !!}
                    </div>
                </div>

                <span v-if="formErrors['terms']" class="error">@{{ formErrors['terms'][0] }}</span>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        {!! Form::submit(trans('forum::user.register'), ['class' => 'btn btn-primary btn-block btn-lg', 'tabindex' => 7]) !!}
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a href="/login" class="btn btn-success btn-block btn-lg">{!! trans('forum::user.login') !!}</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
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
                                alert('success');
                                //form.submit();
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
    </script>
@stop