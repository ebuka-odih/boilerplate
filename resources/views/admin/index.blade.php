@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Dashboard Overview</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome to {{ env('APP_NAME') }} Admin Dashboard.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-2">
                                            <div class="card-title">
                                                <h6 class="title">Total Users</h6>
                                            </div>
                                            <div class="card-tools">
                                            </div>
                                        </div>
                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                            <div class="nk-sale-data">
                                                <span class="amount">9.69K</span>
                                            </div>

                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-2">
                                                            <div class="card-title">
                                                                <h6 class="title">Active Subscriptions</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total active subscription" data-bs-original-title="Total active subscription"></em>
                                                            </div>
                                                        </div>
                                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                            <div class="nk-sale-data">
                                                                <span class="amount">9.69K</span>
                                                                <span class="sub-title"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>since last month</span>
                                                            </div>
                                                            <div class="nk-sales-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                <canvas class="sales-bar-chart chartjs-render-monitor" id="activeSubscription" width="374" height="100" style="display: block; height: 56px; width: 208px;"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                </div><!-- .card -->
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total Deposit</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total Deposited" data-bs-original-title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                            </span>
                                            <span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>1.93%</span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">This Month</div>
                                                    <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                <canvas class="iv-data-chart chartjs-render-monitor" id="totalDeposit" width="300" height="96" style="display: block; height: 48px; width: 150px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div>
                        </div>
                        <div class="row g-gs">

                            <div class="col-lg-12">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title"><span class="me-2">Transaction</span> <a href="#"
                                                                                                           class="link d-none d-sm-inline">See
                                                        History</a></h6>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">
                                                    <li><a href="#"><span>Paid</span></a></li>
                                                    <li><a href="#"><span>Pending</span></a></li>
                                                    <li class="active"><a href="#"><span>All</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner p-0 border-top">
                                        <div class="nk-tb-list nk-tb-orders">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col"><span>Order No.</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                                <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span>Ref</span></div>
                                                <div class="nk-tb-col"><span>Amount</span></div>
                                                <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span>
                                                </div>
                                                <div class="nk-tb-col"><span>&nbsp;</span></div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">#95954</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-avatar user-avatar-sm bg-purple">
                                                            <span>AB</span>
                                                        </div>
                                                        <div class="user-name">
                                                            <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">02/11/2020</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-sub text-primary">SUB-2309232</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="#">View</a></li>
                                                                <li><a href="#">Invoice</a></li>
                                                                <li><a href="#">Print</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">#95850</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-avatar user-avatar-sm bg-azure">
                                                            <span>DE</span>
                                                        </div>
                                                        <div class="user-name">
                                                            <span class="tb-lead">Desiree Edwards</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">02/02/2020</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-sub text-primary">SUB-2309154</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-danger">Canceled</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="#">View</a></li>
                                                                <li><a href="#">Remove</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">#95812</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-avatar user-avatar-sm bg-warning">
                                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                                        </div>
                                                        <div class="user-name">
                                                            <span class="tb-lead">Blanca Schultz</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">02/01/2020</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-sub text-primary">SUB-2309143</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="#">View</a></li>
                                                                <li><a href="#">Invoice</a></li>
                                                                <li><a href="#">Print</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">#95256</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-avatar user-avatar-sm bg-purple">
                                                            <span>NL</span>
                                                        </div>
                                                        <div class="user-name">
                                                            <span class="tb-lead">Naomi Lawrence</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">01/29/2020</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-sub text-primary">SUB-2305684</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="#">View</a></li>
                                                                <li><a href="#">Invoice</a></li>
                                                                <li><a href="#">Print</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <span class="tb-lead"><a href="#">#95135</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-avatar user-avatar-sm bg-success">
                                                            <span>CH</span>
                                                        </div>
                                                        <div class="user-name">
                                                            <span class="tb-lead">Cassandra Hogan</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">01/29/2020</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-sub text-primary">SUB-2305564</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-warning">Due</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                           data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="#">View</a></li>
                                                                <li><a href="#">Invoice</a></li>
                                                                <li><a href="#">Notify</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner-sm border-top text-center d-sm-none">
                                        <a href="#" class="btn btn-link btn-block">See History</a>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->


                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

@endsection
