@extends('admin.master')

@section('title', 'Accueil')

@section('header', 'Dashboard')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->

    <div class="content-body " style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row separate-row">
                                        <div class="col-sm-6">
                                            <div class="job-icon pb-4 d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">{{ $listDepartment->count() }}</h2>
                                                    </div>
                                                    <span class="d-block mb-2">Département</span>
                                                </div>
                                                <div id="NewCustomers"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="job-icon pb-4 pt-4 pt-sm-0 d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">{{ $listeDomaine->count() }}</h2>
                                                    </div>
                                                    <span class="d-block mb-2">Domaines</span>
                                                </div>
                                                <div id="NewCustomers1"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="job-icon pt-4 pb-sm-0 pb-4 d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">{{ $listeEntreprise->count() }}</h2>
                                                    </div>
                                                    <span class="d-block mb-2">Entreprises</span>
                                                </div>
                                                <div id="NewCustomers2"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="job-icon pt-4  d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">{{ $listeOffre->count() }}</h2>
                                                    </div>
                                                    <span class="d-block mb-2">Offres</span>
                                                </div>
                                                <div id="NewCustomers3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row separate-row">
                                        <div class="col-sm-6">
                                            <div class="job-icon pb-4 d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">342</h2>
                                                        <span class="ms-3 badge badge-success light">+0.5%</span>
                                                    </div>
                                                    <span class="d-block mb-2">Etudiants</span>
                                                </div>
                                                <div id="NewCustomers"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="job-icon pb-4 pt-4 pt-sm-0 d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">984</h2>
                                                    </div>
                                                    <span class="d-block mb-2">Candidatures</span>
                                                </div>
                                                <div id="NewCustomers1"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="job-icon pt-4 pb-sm-0 pb-4 d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">1,567k</h2>
                                                        <span class="ms-3 badge badge-danger light">-2.0%</span>
                                                    </div>
                                                    <span class="d-block mb-2">Profile Viewed</span>
                                                </div>
                                                <div id="NewCustomers2"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="job-icon pt-4  d-flex justify-content-between">
                                                <div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h2 class="mb-0 lh-1">437</h2>
                                                    </div>
                                                    <span class="d-block mb-2">Unread Messages</span>
                                                </div>
                                                <div id="NewCustomers3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-2">
                                    <h4 class="card-title mb-0">Recent Activity</h4>
                                    <div>
                                        <select class="default-select dashboard-select">
                                            <option data-display="Newest">Newest</option>
                                            <option value="1">latest</option>

                                            <option value="2">oldest</option>
                                        </select>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                        stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                        stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                        stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body loadmore-content pb-0 pt-3 list-grid-area dlab-scroll height370 recent-activity-wrapper"
                                    id="RecentActivityContent">
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#f93a0b" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center list-item-bx">
                                            <div class="icon-img-bx">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71"
                                                    viewBox="0 0 71 71">
                                                    <g transform="translate(-457 -443)">
                                                        <rect width="71" height="71" rx="12"
                                                            transform="translate(457 443)" fill="#c5c5c5" />
                                                        <g transform="translate(457 443)">
                                                            <rect data-name="placeholder" width="71" height="71"
                                                                rx="12" fill="#2769ee" />
                                                            <circle data-name="Ellipse 12" cx="18" cy="18"
                                                                r="18" transform="translate(15 20)" fill="#fff" />
                                                            <circle data-name="Ellipse 11" cx="11" cy="11"
                                                                r="11" transform="translate(36 15)" fill="#ffe70c"
                                                                style="mix-blend-mode: multiply;isolation: isolate" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-1">Bubles Studios have 5 available positions for you</h6>
                                                <p class="mb-0">8min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center list-item-bx">
                                            <div class="icon-img-bx">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71"
                                                    viewBox="0 0 71 71">
                                                    <g transform="translate(-457 -443)">
                                                        <rect width="71" height="71" rx="12"
                                                            transform="translate(457 443)" fill="#c5c5c5" />
                                                        <g transform="translate(457 443)">
                                                            <rect data-name="placeholder" width="71" height="71"
                                                                rx="12" fill="#eeac27" />
                                                            <circle data-name="Ellipse 12" cx="18" cy="18"
                                                                r="18" transform="translate(15 20)" fill="#fff" />
                                                            <circle data-name="Ellipse 11" cx="11" cy="11"
                                                                r="11" transform="translate(36 15)" fill="#ffe70c"
                                                                style="mix-blend-mode: multiply;isolation: isolate" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-1">Elextra Studios has invited you to interview meeting
                                                    tomorrow</h6>
                                                <p class="mb-0">8min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center list-item-bx">
                                            <div class="icon-img-bx">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71"
                                                    viewBox="0 0 71 71">
                                                    <g transform="translate(-457 -443)">
                                                        <rect width="71" height="71" rx="12"
                                                            transform="translate(457 443)" fill="#c5c5c5" />
                                                        <g transform="translate(457 443)">
                                                            <rect data-name="placeholder" width="71" height="71"
                                                                rx="12" fill="#22bc32" />
                                                            <circle data-name="Ellipse 12" cx="18" cy="18"
                                                                r="18" transform="translate(15 20)" fill="#fff" />
                                                            <circle data-name="Ellipse 11" cx="11" cy="11"
                                                                r="11" transform="translate(36 15)" fill="#ffe70c"
                                                                style="mix-blend-mode: multiply;isolation: isolate" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-1">Highspeed Design Team have 2 available positions for you
                                                </h6>
                                                <p class="mb-0">8min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center list-item-bx">
                                            <div class="icon-img-bx">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71"
                                                    viewBox="0 0 71 71">
                                                    <g transform="translate(-457 -443)">
                                                        <rect width="71" height="71" rx="12"
                                                            transform="translate(457 443)" fill="#c5c5c5" />
                                                        <g transform="translate(457 443)">
                                                            <rect data-name="placeholder" width="71" height="71"
                                                                rx="12" fill="#9933cb" />
                                                            <circle data-name="Ellipse 12" cx="18" cy="18"
                                                                r="18" transform="translate(15 20)" fill="#fff" />
                                                            <circle data-name="Ellipse 11" cx="11" cy="11"
                                                                r="11" transform="translate(36 15)" fill="#ffe70c"
                                                                style="mix-blend-mode: multiply;isolation: isolate" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-1">Kleon Studios have 5 available positions for you</h6>
                                                <p class="mb-0">8min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center list-item-bx">
                                            <div class="icon-img-bx">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71"
                                                    viewBox="0 0 71 71">
                                                    <g transform="translate(-457 -443)">
                                                        <rect width="71" height="71" rx="12"
                                                            transform="translate(457 443)" fill="#c5c5c5" />
                                                        <g transform="translate(457 443)">
                                                            <rect data-name="placeholder" width="71" height="71"
                                                                rx="12" fill="#eeac27" />
                                                            <circle data-name="Ellipse 12" cx="18" cy="18"
                                                                r="18" transform="translate(15 20)" fill="#fff" />
                                                            <circle data-name="Ellipse 11" cx="11" cy="11"
                                                                r="11" transform="translate(36 15)" fill="#ffe70c"
                                                                style="mix-blend-mode: multiply;isolation: isolate" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-1">Elextra Studios has invited you to interview meeting
                                                    tomorrow</h6>
                                                <p class="mb-0">8min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 text-center">
                                    <a href="javascript:void(0);" class="btn btn-outline-primary m-auto dlab-load-more"
                                        id="RecentActivity" rel="/cakephp/demo/jobick-admin/ajax-recentactivity">View
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0 border-0 flex-wrap">
                                    <h4 class="card-title mb-sm-0 mb-2">Available Jobs For You</h4>
                                    <div>
                                        <select class="default-select dashboard-select">
                                            <option data-display="Newest">Newest</option>

                                            <option value="2">oldest</option>
                                        </select>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                        stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                        stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                        stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="owl-carousel owl-carousel owl-loaded front-view-slider ">
                                        <div class="items">
                                            <div class="jobs">
                                                <div class="text-center">
                                                    <div class="icon-img-bx">
                                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg"
                                                            width="71" height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#2769ee" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18" transform="translate(15 20)"
                                                                        fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11" transform="translate(36 15)"
                                                                        fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5 class="mb-1">UI Designer</h5>
                                                    <p class="text-primary mb-2 fs-13">Bubbles Studios</p>
                                                </div>
                                                <div class="bottom-info pt-1">
                                                    <p class="mb-0"><i
                                                            class="fas fa-map-marker-alt me-2"></i>Manchester, England</p>
                                                    <p class="mb-0"><i class="fas fa-comments-dollar me-2"></i>$ 2,000 -
                                                        $ 2,500</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="jobs">
                                                <div class="text-center">
                                                    <div class="icon-img-bx">
                                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg"
                                                            width="71" height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#ee27c0" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18" transform="translate(15 20)"
                                                                        fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11" transform="translate(36 15)"
                                                                        fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5 class="mb-1">Researcher</h5>
                                                    <p class="text-primary mb-2 fs-13">Kleon Studios</p>
                                                </div>
                                                <div class="bottom-info pt-1">
                                                    <p class="mb-0"><i
                                                            class="fas fa-map-marker-alt me-2"></i>Manchester, England</p>
                                                    <p class="mb-0"><i class="fas fa-comments-dollar me-2"></i>$ 2,000 -
                                                        $ 2,500</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="jobs">
                                                <div class="text-center">
                                                    <div class="icon-img-bx">
                                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg"
                                                            width="71" height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#2db532" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18" transform="translate(15 20)"
                                                                        fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11" transform="translate(36 15)"
                                                                        fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5 class="mb-1">Frontend</h5>
                                                    <p class="text-primary mb-2 fs-13">Green Comp.</p>
                                                </div>
                                                <div class="bottom-info pt-1">
                                                    <p class="mb-0"><i
                                                            class="fas fa-map-marker-alt me-2"></i>Manchester, England</p>
                                                    <p class="mb-0"><i class="fas fa-comments-dollar me-2"></i>$ 2,000 -
                                                        $ 2,500</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="jobs">
                                                <div class="text-center">
                                                    <div class="icon-img-bx">
                                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg"
                                                            width="71" height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#2769ee" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18" transform="translate(15 20)"
                                                                        fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11" transform="translate(36 15)"
                                                                        fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5 class="mb-1">UI Designer</h5>
                                                    <p class="text-primary mb-2 fs-13">Bubbles Studios</p>
                                                </div>
                                                <div class="bottom-info pt-1">
                                                    <p class="mb-0"><i
                                                            class="fas fa-map-marker-alt me-2"></i>Manchester, England</p>
                                                    <p class="mb-0"><i class="fas fa-comments-dollar me-2"></i>$ 2,000 -
                                                        $ 2,500</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="jobs">
                                                <div class="text-center">
                                                    <div class="icon-img-bx">
                                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg"
                                                            width="71" height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#ee27c0" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18" transform="translate(15 20)"
                                                                        fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11" transform="translate(36 15)"
                                                                        fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5 class="mb-1">Researcher</h5>
                                                    <p class="text-primary mb-2 fs-13">Kleon Studios</p>
                                                </div>
                                                <div class="bottom-info pt-1">
                                                    <p class="mb-0"><i
                                                            class="fas fa-map-marker-alt me-2"></i>Manchester, England</p>
                                                    <p class="mb-0"><i class="fas fa-comments-dollar me-2"></i>$ 2,000 -
                                                        $ 2,500</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="jobs">
                                                <div class="text-center">
                                                    <div class="icon-img-bx">
                                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg"
                                                            width="71" height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#2db532" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18" transform="translate(15 20)"
                                                                        fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11" transform="translate(36 15)"
                                                                        fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5 class="mb-1">Frontend</h5>
                                                    <p class="text-primary mb-2 fs-13">Green Comp.</p>
                                                </div>
                                                <div class="bottom-info pt-1">
                                                    <p class="mb-0"><i
                                                            class="fas fa-map-marker-alt me-2"></i>Manchester, England</p>
                                                    <p class="mb-0"><i class="fas fa-comments-dollar me-2"></i>$ 2,000
                                                        - $ 2,500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="card-title">Network</h4>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                    stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                    stroke="var(--text)" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-2">
                                    <div class="row sp10">
                                        <div class="col-xl-3 col-md-3 col-6 mb-4 text-center">
                                            <div
                                                class="d-inline-block ms-auto me-auto mb-md-3 mb-2 db-donut-chart-sale me-4">
                                                <span class="donut"
                                                    data-peity='{ "fill": ["var(--primary)", "var(--light)"],   "innerRadius": 38, "radius": 10}'>6/9</span>
                                                <h4 class="mb-0 pie-label">66%</h4>
                                            </div>
                                            <h5 class="mb-1">Engineer</h5>
                                            <p class="mb-0">5,050 Vacancy</p>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-6 mb-4 text-center">
                                            <div
                                                class="d-inline-block ms-auto me-auto mb-md-3 mb-2 db-donut-chart-sale me-4">
                                                <span class="donut"
                                                    data-peity='{ "fill": ["var(--primary)", "var(--light)"],   "innerRadius": 38, "radius": 10}'>3/9</span>
                                                <h4 class="mb-0 pie-label">31%</h4>
                                            </div>
                                            <h5 class="mb-1">Designer</h5>
                                            <p class="mb-0">10,524 Vacany</p>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-6 mb-4 text-center">
                                            <div
                                                class="d-inline-block ms-auto me-auto mb-md-3 mb-2 db-donut-chart-sale me-4">
                                                <span class="donut"
                                                    data-peity='{ "fill": ["var(--primary)", "var(--light)"],   "innerRadius": 38, "radius": 10}'>6/8</span>
                                                <h4 class="mb-0 pie-label">75%</h4>
                                            </div>
                                            <h5 class="mb-1">Manager</h5>
                                            <p class="mb-0">621 Vacancy</p>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-6 mb-4 text-center">
                                            <div
                                                class="d-inline-block ms-auto me-auto mb-md-3 mb-2 db-donut-chart-sale me-4">
                                                <span class="donut"
                                                    data-peity='{ "fill": ["var(--primary)", "var(--light)"],   "innerRadius": 38, "radius": 10}'>7/10</span>
                                                <h4 class="mb-0 pie-label">62%</h4>
                                            </div>
                                            <h5 class="mb-1">Programmer</h5>
                                            <p class="mb-0">9,662 Vacancy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
    </div>
    <!--**********************************
                Content body end
            ***********************************-->
@endsection
