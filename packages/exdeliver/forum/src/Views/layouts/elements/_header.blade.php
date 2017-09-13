<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">

                </div>
                <div class="float-right">
                    <ul class="account nav">
                        @if(\Auth::check())
                            <li class="nav-item">
                                <div class="btn-group">
                                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"
                                       aria-haspopup="true"
                                       aria-expanded="false"><i
                                                class="fa fa-envelope-square"></i> {!! trans('forum::messages.messages') !!}
                                    </a>
                                    <div class="dropdown-menu">
                                        @include('forum::partials.user.messages')
                                    </div>
                                </div>
                            </li>
                        @endif
                        <li class="nav-item">
                            <div class="btn-group">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"><i class="fa fa-user"></i>
                                    @if(!\Auth::check())
                                        {!! trans('forum::user.account') !!}
                                    @else
                                        {!! \Auth::user()->name !!}
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    @if(!\Auth::check())
                                        @include('forum::partials.user.login_block')
                                    @else
                                        @include('forum::partials.user.profile_block')
                                    @endif
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="top-header">
                    <a href="/"><h1>
                            {!! \ForumService::settings()->title !!}
                        </h1>
                    </a>
                    <h3>
                        {!! \ForumService::settings()->subtitle !!}
                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="float-right">
                    @include('forum::partials.search.search_block')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr/>
                @include('forum::layouts.elements._breadcrumbs')
            </div>
        </div>
    </div>
</header>