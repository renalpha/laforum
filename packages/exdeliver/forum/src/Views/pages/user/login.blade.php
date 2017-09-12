@extends('forum::layouts.master')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">{!! trans('forum::user.user') !!}</a></li>
    <li class="breadcrumb-item active">{!! trans('forum::user.login') !!}</li>
@stop

@section('content')
    <div class='container'>

        <div class='hero-unit'>

            <h2>{!! trans('forum::elements.welcome') !!}</h2>

            <p>{!! trans('forum::auth.please_login') !!}</p>

            <div id="login-box" class="control-group">
                @include('forum::partials.user.login_block')
            </div>
        </div>
    </div>
@stop