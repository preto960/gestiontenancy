<template>
    <div class="layout-px-spacing dash_1">
        <!-- <teleport to="#breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Sales</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav flex-row ms-auto">
                <li class="nav-item more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a href="javascript:;" class="nav-link dropdown-toggle" id="ddlSettings" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Settings</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-down"
                            >
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ddlSettings">
                            <li><a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Settings</a></li>
                            <li><a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a></li>
                            <li><a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a></li>
                            <li><a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a></li>
                            <li><a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </teleport> -->

        <div class="row layout-top-spacing">
            <!-- <p>Bienvenido, {{ user.name }} ({{ user.email }})</p>
            <p>Rol: {{ user.roles[0].name }}</p>
            <p v-if="user.roles[0].permissions.length > 0">Permisos:</p>
            <ul v-if="user.roles[0].permissions.length > 0">
                <li v-for="permission in user.roles[0].permissions" :key="permission">{{ permission.name }}</li>
            </ul> -->

            <!-- <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-revenue">
                    <div class="widget-heading">
                        <h5>Revenue</h5>
                        <div class="dropdown btn-group">
                            <a href="javascript:;" id="ddlRevenue" class="btn dropdown-toggle btn-icon-only" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ddlRevenue">
                                <li><a href="javascript:;" class="dropdown-item">Weekly</a></li>
                                <li><a href="javascript:;" class="dropdown-item">Monthly</a></li>
                                <li><a href="javascript:;" class="dropdown-item">Yearly</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div class="chart-title">Total Profit <span class="text-primary ms-1">$10,840</span></div>
                        <apex-chart v-if="revenue_options" height="325" type="area" :options="revenue_options" :series="revenue_series"></apex-chart>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-sales-category">
                    <div class="widget-heading">
                        <h5>Sales by Category</h5>
                    </div>
                    <div class="widget-content">
                        <apex-chart v-if="sales_donut_options" height="460" type="donut" :options="sales_donut_options" :series="sales_donut_series"></apex-chart>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-dailysales">
                    <div class="widget-heading">
                        <div>
                            <h5>Daily sales</h5>
                            <span class="sub-title">Go to columns for details.</span>
                        </div>
                        <div class="w-icon text-warning">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-dollar-sign"
                            >
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="widget-content">
                        <apex-chart v-if="daily_sales_options" height="160" type="bar" :options="daily_sales_options" :series="daily_sales_series"></apex-chart>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-summary">
                    <div class="widget-heading">
                        <h5>Summary</h5>
                        <div class="dropdown btn-group">
                            <a href="javascript:;" id="ddlSummary" class="btn dropdown-toggle btn-icon-only" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ddlSummary">
                                <li><a href="javascript:;" class="dropdown-item">View Report</a></li>
                                <li><a href="javascript:;" class="dropdown-item">Edit Report</a></li>
                                <li><a href="javascript:;" class="dropdown-item">Mark as Done</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="summary-list">
                            <div class="w-icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-shopping-bag"
                                >
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div class="w-summary-details">
                                <div class="w-summary-info">
                                    <h6>Income</h6>
                                    <p class="summary-count">$92,600</p>
                                </div>
                                <div class="w-summary-stats">
                                    <div class="progress">
                                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90" class="progress-bar bg-gradient-secondary" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="summary-list">
                            <div class="w-icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-tag"
                                >
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                    <line x1="7" y1="7" x2="7" y2="7"></line>
                                </svg>
                            </div>
                            <div class="w-summary-details">
                                <div class="w-summary-info">
                                    <h6>Profit</h6>
                                    <p class="summary-count">$37,515</p>
                                </div>
                                <div class="w-summary-stats">
                                    <div class="progress">
                                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="65" class="progress-bar bg-gradient-success" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="summary-list">
                            <div class="w-icon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-credit-card"
                                >
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                            </div>
                            <div class="w-summary-details">
                                <div class="w-summary-info">
                                    <h6>Expenses</h6>
                                    <p class="summary-count">$55,085</p>
                                </div>
                                <div class="w-summary-stats">
                                    <div class="progress">
                                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80" class="progress-bar bg-gradient-warning" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-total-order">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-shopping-cart"
                            >
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="w-value">3,192</div>
                            <div class="w-numeric-title">Total Orders</div>
                        </div>
                    </div>
                    <div class="widget-content p-0">
                        <apex-chart v-if="total_orders_options" height="290" type="area" :options="total_orders_options" :series="total_orders_series"></apex-chart>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-recent-activity">
                    <div class="widget-heading">
                        <h5>Recent Activities</h5>
                    </div>
                    <div class="widget-content">
                        <perfect-scrollbar class="timeline-line">
                            <div class="item-timeline timeline-primary">
                                <div class="badge badge-primary"></div>
                                <div class="t-text">
                                    <p><span>Updated</span> Server Logs</p>
                                    <span class="badge badge-outline-primary outline-badge-primary icon-fill-primary">Pending</span>
                                    <p class="t-time">Just Now</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-success">
                                <div class="badge badge-success"></div>
                                <div class="t-text">
                                    <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                    <span class="badge badge-outline-success outline-badge-success icon-fill-success">Completed</span>
                                    <p class="t-time">2 min ago</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-danger">
                                <div class="badge badge-danger"></div>
                                <div class="t-text">
                                    <p>Backup <span>Files EOD</span></p>
                                    <span class="badge badge-outline-danger outline-badge-danger icon-fill-danger">Pending</span>
                                    <p class="t-time">14:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-dark">
                                <div class="badge badge-dark"></div>
                                <div class="t-text">
                                    <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                    <span class="badge badge-outline-dark outline-badge-dark icon-fill-dark">Completed</span>
                                    <p class="t-time">16:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                    <span class="badge badge-outline-warning outline-badge-warning icon-fill-warning">In progress</span>
                                    <p class="t-time">17:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-secondary">
                                <div class="badge badge-secondary"></div>
                                <div class="t-text">
                                    <p>Rebooted Server</p>
                                    <span class="badge badge-outline-secondary outline-badge-secondary icon-fill-secondary">Completed</span>
                                    <p class="t-time">17:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Send contract details to Freelancer</p>
                                    <span class="badge badge-outline-warning outline-badge-warning icon-fill-warning">Pending</span>
                                    <p class="t-time">18:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-dark">
                                <div class="badge badge-dark"></div>
                                <div class="t-text">
                                    <p>Kelly want to increase the time of the project.</p>
                                    <span class="badge badge-outline-dark outline-badge-dark icon-fill-dark">In Progress</span>
                                    <p class="t-time">19:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-success">
                                <div class="badge badge-success"></div>
                                <div class="t-text">
                                    <p>Server down for maintanence</p>
                                    <span class="badge badge-outline-success outline-badge-success icon-fill-success">Completed</span>
                                    <p class="t-time">19:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-secondary">
                                <div class="badge badge-secondary"></div>
                                <div class="t-text">
                                    <p>Malicious link detected</p>
                                    <span class="badge badge-outline-secondary outline-badge-secondary icon-fill-secondary">Block</span>
                                    <p class="t-time">20:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Rebooted Server</p>
                                    <span class="badge badge-outline-warning outline-badge-warning icon-fill-warning">Completed</span>
                                    <p class="t-time">23:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-primary">
                                <div class="badge badge-primary"></div>
                                <div class="t-text">
                                    <p><span>Updated</span> Server Logs</p>
                                    <span class="badge badge-outline-primary outline-badge-primary icon-fill-primary">Pending</span>
                                    <p class="t-time">Just Now</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-success">
                                <div class="badge badge-success"></div>
                                <div class="t-text">
                                    <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                    <span class="badge badge-outline-success outline-badge-success icon-fill-success">Completed</span>
                                    <p class="t-time">2 min ago</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-danger">
                                <div class="badge badge-danger"></div>
                                <div class="t-text">
                                    <p>Backup <span>Files EOD</span></p>
                                    <span class="badge badge-outline-danger outline-badge-danger icon-fill-danger">Pending</span>
                                    <p class="t-time">14:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-dark">
                                <div class="badge badge-dark"></div>
                                <div class="t-text">
                                    <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                    <span class="badge badge-outline-dark outline-badge-dark icon-fill-dark">Completed</span>
                                    <p class="t-time">16:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                    <span class="badge badge-outline-warning outline-badge-warning icon-fill-warning">In progress</span>
                                    <p class="t-time">17:00</p>
                                </div>
                            </div>
                        </perfect-scrollbar>

                        <div class="tm-action-btn">
                            <button type="button" class="btn btn-default">
                                <span>View All</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-arrow-right"
                                >
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-transaction">
                    <div class="widget-heading">
                        <h5>Transactions</h5>
                        <div class="task-action">
                            <div class="dropdown btn-group">
                                <a href="javascript:;" id="ddlTransactions" class="btn dropdown-toggle btn-icon-only" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal"
                                    >
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ddlTransactions">
                                    <li><a href="javascript:;" class="dropdown-item">View Report</a></li>
                                    <li><a href="javascript:;" class="dropdown-item">Edit Report</a></li>
                                    <li><a href="javascript:;" class="dropdown-item">Mark as Done</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div class="transactions-list">
                            <div>
                                <span class="b-avatar icon-fill-info me-2 badge-info rounded-circle">
                                    <span class="b-avatar-text"><span>SP</span></span>
                                </span>
                                <div class="t-name">
                                    <h4>Shaun Park</h4>
                                    <p>10 Jan 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-success">+$36.11</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <span class="b-avatar icon-fill-warning me-2 badge-warning rounded-circle">
                                    <span class="b-avatar-custom"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="19"
                                            height="19"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-home"
                                        >
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </span>
                                </span>
                                <div class="t-name">
                                    <h4>Electricity Bill</h4>
                                    <p>04 Jan 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-danger">-$16.44</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <span class="b-avatar icon-fill-danger me-2 badge-danger rounded-circle"
                                    ><span class="b-avatar-text"><span>AD</span></span></span
                                >
                                <div class="t-name">
                                    <h4>Amy Diaz</h4>
                                    <p>31 Jan 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-success">+$66.44</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <span class="b-avatar icon-fill-secondary me-2 badge-secondary rounded-circle"
                                    ><span class="b-avatar-custom"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="19"
                                            height="19"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-home"
                                        >
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span
                                ></span>
                                <div class="t-name">
                                    <h4>Netflix</h4>
                                    <p>02 Feb 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-danger">-$32.00</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <span class="b-avatar icon-fill-info me-2 badge-info rounded-circle"
                                    ><span class="b-avatar-text"><span>DA</span></span></span
                                >
                                <div class="t-name">
                                    <h4>Daisy Anderson</h4>
                                    <p>15 Feb 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-success">+$10.08</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <span class="b-avatar icon-fill-danger me-2 badge-danger rounded-circle"
                                    ><span class="b-avatar-text"><span>OG</span></span></span
                                >
                                <div class="t-name">
                                    <h4>Oscar Garner</h4>
                                    <p>20 Feb 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-danger">-$22.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-wallet-balance">
                    <div class="widget-heading d-block">
                        <div class="wallet-usr-info">
                            <div class="usr-name">
                                <span><img src="/assets/images/profile-32.jpeg" alt="admin-profile" class="img-fluid" /> Alan Green</span>
                            </div>
                            <div class="add">
                                <span
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-plus"
                                    >
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="wallet-balance">
                            <p>Wallet Balance</p>
                            <h5><span class="w-currency">$</span>2953</h5>
                        </div>
                    </div>

                    <div class="widget-amount">
                        <div class="w-a-info funds-received me-3">
                            <span
                                >Received
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-chevron-up text-success float-end"
                                >
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg>
                            </span>
                            <p>$97.99</p>
                        </div>
                        <div class="w-a-info funds-spent">
                            <span
                                >Spent
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-chevron-down text-danger float-end"
                                >
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                            <p>$53.00</p>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div class="bills-stats mb-4">
                            <span>Pending</span>
                        </div>
                        <div class="invoice-list">
                            <div class="inv-detail mb-4">
                                <div class="info-detail-1">
                                    <p>Netflix</p>
                                    <p><span class="w-currency">$</span> <span class="bill-amount">13.85</span></p>
                                </div>
                                <div class="info-detail-2">
                                    <p>BlueHost VPN</p>
                                    <p><span class="w-currency">$</span> <span class="bill-amount">15.66</span></p>
                                </div>
                            </div>
                            <div class="inv-action">
                                <a href="javascript:;" class="btn view-details btn-outline-secondary">View Details</a>
                                <a href="javascript:;" class="btn pay-now btn-outline-success">Pay Now $29.51</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-recent-orders">
                    <div class="widget-heading">
                        <h5>Recent Orders</h5>
                    </div>
                    <div class="widget-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><div class="th-content">Customer</div></th>
                                    <th><div class="th-content">Product</div></th>
                                    <th><div class="th-content">Invoice</div></th>
                                    <th><div class="th-content th-heading">Price</div></th>
                                    <th><div class="th-content">Status</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="td-content"><img src="/assets/images/profile-13.jpeg" alt="avatar" /><span>Luke Ivory</span></div>
                                    </td>
                                    <td><div class="td-content text-primary">Headphone</div></td>
                                    <td><div class="td-content">#46894</div></td>
                                    <td>
                                        <div class="td-content"><span>$56.07</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge badge-success">Paid</span></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="td-content"><img src="/assets/images/profile-7.jpeg" alt="avatar" /><span>Andy King</span></div>
                                    </td>
                                    <td><div class="td-content text-warning">Nike Sport</div></td>
                                    <td><div class="td-content">#76894</div></td>
                                    <td>
                                        <div class="td-content"><span>$88.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge badge-primary">Shipped</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content"><img src="/assets/images/profile-10.jpeg" alt="avatar" /><span>Laurie Fox</span></div>
                                    </td>
                                    <td><div class="td-content text-danger">Sunglasses</div></td>
                                    <td><div class="td-content">#66894</div></td>
                                    <td>
                                        <div class="td-content"><span>$126.04</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge badge-success">Paid</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content"><img src="/assets/images/profile-5.jpeg" alt="avatar" /><span>Ryan Collins</span></div>
                                    </td>
                                    <td><div class="td-content text-warning">Sport</div></td>
                                    <td><div class="td-content">#89891</div></td>
                                    <td>
                                        <div class="td-content"><span>$108.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge badge-primary">Shipped</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content"><img src="/assets/images/profile-4.jpeg" alt="avatar" /><span>Irene Collins</span></div>
                                    </td>
                                    <td><div class="td-content text-primary">Speakers</div></td>
                                    <td><div class="td-content">#75844</div></td>
                                    <td>
                                        <div class="td-content"><span>$84.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge badge-danger">Pending</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content"><img src="/assets/images/profile-11.jpeg" alt="avatar" /><span>Sonia Shaw</span></div>
                                    </td>
                                    <td><div class="td-content text-danger">Watch</div></td>
                                    <td><div class="td-content">#76844</div></td>
                                    <td>
                                        <div class="td-content"><span>$110.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="badge badge-success">Paid</span></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-top-selling-products">
                    <div class="widget-heading">
                        <h5>Top Selling Product</h5>
                    </div>

                    <div class="widget-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><div class="th-content">Product</div></th>
                                    <th><div class="th-content th-heading">Price</div></th>
                                    <th><div class="th-content th-heading">Discount</div></th>
                                    <th><div class="th-content">Sold</div></th>
                                    <th><div class="th-content">Source</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="td-content d-flex">
                                            <img src="/assets/images/product-headphones.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Headphone</p>
                                                <p class="prd-category text-primary">Digital</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$168.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                    </td>
                                    <td><div class="td-content">170</div></td>
                                    <td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-danger"
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-chevrons-right"
                                                >
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Direct</a
                                            >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content d-flex">
                                            <img src="/assets/images/product-shoes.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Shoes</p>
                                                <p class="prd-category text-warning">Faishon</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$108.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                    </td>
                                    <td><div class="td-content">130</div></td>
                                    <td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-primary"
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-chevrons-right"
                                                >
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Google</a
                                            >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content d-flex">
                                            <img src="/assets/images/product-watch.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Watch</p>
                                                <p class="prd-category text-danger">Accessories</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$88.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                    </td>
                                    <td><div class="td-content">66</div></td>
                                    <td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-warning"
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-chevrons-right"
                                                >
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Ads</a
                                            >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content d-flex">
                                            <img src="/assets/images/product-laptop.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Laptop</p>
                                                <p class="prd-category text-primary">Digital</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$110.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                    </td>
                                    <td><div class="td-content">35</div></td>
                                    <td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-info"
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-chevrons-right"
                                                >
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Email</a
                                            >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content d-flex">
                                            <img src="/assets/images/product-camera.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Camera</p>
                                                <p class="prd-category text-primary">Digital</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$126.04</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                    </td>
                                    <td><div class="td-content">30</div></td>
                                    <td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-secondary"
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-chevrons-right"
                                                >
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Referral</a
                                            >
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import "../../assets/sass/widgets/widgets.scss";
    import { computed, ref } from "vue";
    import { useStore } from "vuex";
    import ApexChart from "vue3-apexcharts";

    import { useMeta } from "../../composables/use-meta";
    useMeta({ title: "Sales Admin" });

    const store = useStore();

    
</script>
