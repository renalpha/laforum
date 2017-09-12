{!! Form::open(['url' => '/login', 'method' => 'post', 'id' => 'login-form']) !!}
<div class="form-group">
    <label for="username">{!! trans('forum::user.username') !!}</label>
    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'true', 'v-model' => 'loginDetails.username']) !!}
</div>
<div class="form-group">
    <label for="password">{!! trans('forum::user.password') !!}</label>
    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required', 'v-model' => 'loginDetails.password']) !!}
</div>
{!! Form::submit(trans('forum::user.login'), ['class' => 'btn btn-primary', 'v-on:click' => 'loginPost']) !!}
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
                    }
                }
            },
            methods: {
                loginPost: function (event) {

                    let vm = this;
                    console.log(vm);
                    event.preventDefault();

                    // perform ajax
                    axios.post('/login', vm.loginDetails)
                            .then(function (response) {
                                console.log(response);
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                }

            }
        });
    </script>
@stop