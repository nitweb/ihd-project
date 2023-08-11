<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src">
            <img src="{{ asset('admin-backend/images/logo-inverse.png') }}" alt="Logo">
        </div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="mm-active">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="metismenu-icon pe-7s-home"></i>Dashboards
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.slide') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Slider Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.about') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        About Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.choose') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Choose Us Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.event') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Event Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.testimonial') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Testimonial Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.contact') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Contact Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.course') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Course Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.upcoming-course') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Upcoming Course Manage
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('event.register.student') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Event Registration
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.category') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Blog Category
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('all.blog') }}">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Blog Manage
                    </a>
                </li>
                <hr>
            </ul>
            {{-- <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="mm-active">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-home"></i>Dashboards
                    </a>
                </li>
                <hr>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plugin"></i>Applications
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="apps-mailbox.html">
                                <i class="metismenu-icon"></i>Mailbox
                            </a>
                        </li>
                        <li>
                            <a href="apps-chat.html">
                                <i class="metismenu-icon"></i>Chat
                            </a>
                        </li>
                        <li>
                            <a href="apps-faq-section.html">
                                <i class="metismenu-icon"></i>FAQ Section
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"></i>Forums
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-forum-list.html">
                                        <i class="metismenu-icon"></i>Forum Listing
                                    </a>
                                </li>
                                <li>
                                    <a href="apps-forum-threads.html">
                                        <i class="metismenu-icon"></i>Forum Threads
                                    </a>
                                </li>
                                <li>
                                    <a href="apps-forum-discussion.html">
                                        <i class="metismenu-icon"></i>Forum Discussion
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul> --}}
        </div>
    </div>
</div>
