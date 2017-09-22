{!! Form::open(['url' => '/request-password', 'method' => 'post', 'id' => 'request-password-form', '@submit.prevent' => 'submitForm']) !!}
<p v-if="success['message']" class="alert alert-success">@{{ success['message'] }}</p>

<p v-if="errors['message']" class="alert alert-danger">@{{ errors['message'] }}</p>

<div class="form-group">
    <label for="username">{!! trans('forum::user.username') !!}</label>
    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'true', 'v-model' => 'loginDetails.username']) !!}
    <span v-if="formErrors['username']" class="error">@{{ formErrors['username'][0] }}</span>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Form::submit(trans('forum::user.request_password'), ['class' => 'btn btn-primary float-left']) !!}
        <a href="/register" class="btn btn-link float-right">{!! trans('forum::user.create_account') !!}</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <hr />
        <p>
        <a href="/login">{!! trans('forum::user.login') !!}?</a>
        </p>
    </div>
</div>
{!! Form::close() !!}
