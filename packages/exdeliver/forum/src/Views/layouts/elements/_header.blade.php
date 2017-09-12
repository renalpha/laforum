<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">

                </div>
                <div class="float-right">
                    <ul class="account">
                        <li>
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><i class="fa fa-envelope-square"></i> {!! trans('forum::messages.messages') !!}
                                </a>
                                <div class="dropdown-menu">
                                    @include('forum::partials.user.messages')
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><i class="fa fa-user"></i> {!! trans('forum::user.account') !!}
                                </a>
                                <div class="dropdown-menu">
                                    @include('forum::partials.user.login_block')
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
                    <h1>
                        {!! \ForumService::settings()->title !!}
                    </h1>
                    <h3>
                        {!! \ForumService::settings()->subtitle !!}
                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                @include('forum::partials.search.search_block')
            </div>
        </div>
    </div>
</header>