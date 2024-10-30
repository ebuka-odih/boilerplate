@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">
                        <div class="row g-3 mb-3">
                            <div class="col-lg-12">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div id="DataTables_Table_1_wrapper"
                                             class="dataTables_wrapper dt-bootstrap4 no-footer">

                                            <div class="datatable-wrap my-3">
                                                <table
                                                    class="datatable-init nowrap nk-tb-list nk-tb-ulist dataTable no-footer"
                                                    data-auto-responsive="false" id="DataTables_Table_1"
                                                    aria-describedby="DataTables_Table_1_info">
                                                    <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Phone: activate to sort column ascending"><span
                                                                class="sub-text">joined At</span></th>

                                                        <th class="nk-tb-col sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="User: activate to sort column ascending"><span
                                                                class="sub-text">User</span></th>
                                                        <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Balance: activate to sort column ascending">
                                                            <span class="sub-text">Balance</span></th>
                                                        <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Last Login: activate to sort column ascending">
                                                            <span class="sub-text">Last Login</span></th>
                                                        <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                            aria-label="Status: activate to sort column ascending"><span
                                                                class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-end sorting"
                                                            tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"
                                                            colspan="1" aria-label="
                                                            : activate to sort column ascending">
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($users as $item)
                                                            <tr class="nk-tb-item odd">
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ date('d M, Y', strtotime($item->created_at)) }}</span>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div
                                                                        @php
                                                                            $nameParts = explode(' ', $item->name);
                                                                            $initials = strtoupper(substr($nameParts[0], 0, 1) . (isset($nameParts[1]) ? substr($nameParts[1], 0, 1) : ''));
                                                                        @endphp

                                                                        class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                        <span class="text-capitalize">{{ $initials }}</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{ $item->name ?? ''}} <span
                                                                                class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>{{ $item->email ?? ''}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                <span class="tb-amount">{{ number_format($item->balance, 2) ?? '' }} <span
                                                                        class="currency">USD</span></span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <span>{{ $item->last_login ?? '' }}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-success">Active</span>
                                                            </td>
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">

                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#"
                                                                               class="dropdown-toggle btn btn-icon btn-trigger"
                                                                               data-bs-toggle="dropdown"
                                                                               aria-expanded="false"><em
                                                                                    class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                                 style="">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-focus"></em><span>Quick View</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-eye"></em><span>View Details</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-repeat"></em><span>Transaction</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-activity-round"></em><span>Activities</span></a>
                                                                                    </li>
                                                                                    <li class="divider"></li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-shield-star"></em><span>Reset Pass</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a>
                                                                                    </li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-na"></em><span>Suspend User</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

@endsection
