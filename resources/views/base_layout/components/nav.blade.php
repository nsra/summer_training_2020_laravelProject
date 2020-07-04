<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
        data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>

        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-newspaper-o"></i>
                <span class="title">@lang('article.titles.articles')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('articles.index')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('articles.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-thumbs-up"></i>
                    <span class="title">@lang('service_type.titles.service_types')</span>
                    <span class="arrow"></span>
            </a>
            <ul class="sub-menu" style="{{session()->get('nav') == 2 ? 'display:block' : ''}}">
                <li class="nav-item start ">
                    <a href="{{route('service_types.index')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('service_types.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-tasks"></i>
                <span class="title">@lang('project.titles.projects')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('projects.index')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('projects.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-star"></i>
                <span class="title">@lang('client_review.titles.client_reviews')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('client_reviews.index')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('client_reviews.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-user"></i>
                <span class="title">@lang('team.titles.teams')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('teams.index')}}" class="nav-link ">
                    <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('teams.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-archive"></i>
                <span class="title">@lang('company_feature.titles.company_features')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('company_features.index')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('company_features.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-users"></i>
                <span class="title">@lang('user.titles.users')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('users.index')}}" class="nav-link ">
                    <i class="fa fa-list"></i>
                    <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-wrench  "></i>
                <span class="title">@lang('admin.titles.admins')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('admins.index')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('admins.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('admin.view_permissions')}}" class="nav-link ">
                        <i class="fa fa-lock"></i>
                        <span class="title">@lang('lang.permissions')</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-lock  "></i>
                <span class="title">@lang('permission.titles.permissions')</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="{{route('permissions.index')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                        <span class="title">@lang('lang.show')</span>
                    </a>
                </li>
                <li class="nav-item start">
                    <a href="{{route('permissions.create')}}" class="nav-link ">
                        <i class="fa fa-plus"></i>
                        <span class="title">@lang('lang.add')</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
