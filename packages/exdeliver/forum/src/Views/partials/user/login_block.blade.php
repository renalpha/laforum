{!! Form::open(['url' => '/login', 'method' => 'post', 'id' => 'login-form']) !!}
<div class="row">
    <div class="col-md-12 text-center">
        <strong>{!! trans('forum::user.login') !!}</strong>
        <hr />
    </div>
</div>
<div class="form-group">
    <label for="username">{!! trans('forum::user.username') !!}</label>
    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'true', 'v-model' => 'loginDetails.username']) !!}
    <span v-if="formErrors['username']" class="error">@{{ formErrors['username'][0] }}</span>
</div>
<div class="form-group">
    <label for="password">{!! trans('forum::user.password') !!}</label>
    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required', 'v-model' => 'loginDetails.password']) !!}
    <span v-if="formErrors['password']" class="error">@{{ formErrors['password'][0] }}</span>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Form::submit(trans('forum::user.login'), ['class' => 'btn btn-primary float-left', 'v-on:click' => 'loginPost']) !!}
        <a href="/register" class="btn btn-link float-right">{!! trans('forum::user.create_account') !!}</a>
    </div>
</div>
{!! Form::close() !!}

@section('js')
    <script>
        var login = new Vue({
            el: '#login-form',
            data(){
                return {
                    loginDetails: {
                        username: '',
                        password: ''
                    },
                    formErrors: {},
                    errors: {}
                }
            },
            methods: {
                loginPost: function (event) {

                    let vm = this;

                    event.preventDefault();

                    // perform ajax
                    axios.post('/login', vm.loginDetails)
                            .then(function (response) {
                                console.log(response);
                            })
                            .catch(function (error) {
                                var errors = error.response.data;
                                vm.formErrors = errors;
                            });
                }

            }
        });
    </script>
@stop