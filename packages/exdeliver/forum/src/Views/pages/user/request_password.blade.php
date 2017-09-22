@extends('forum::layouts.master')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">{!! trans('forum::user.user') !!}</a></li>
    <li class="breadcrumb-item active">{!! trans('forum::user.forgot_password') !!}</li>
@stop

@section('content')
    <div class='container'>

        <div class='hero-unit'>

            <h2>{!! trans('forum::user.request_password') !!}</h2>

            <p>{!! trans('forum::auth.please_submit_your_username') !!}</p>

            <div id="login-box" class="control-group">
                @include('forum::partials.user.request_password_block')
            </div>
        </div>
    </div>
@stop