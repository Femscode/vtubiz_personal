@extends('business_backend.master')
@section('header')
<style>
    .dashboard-card {
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        border: none;
        transition: all 0.3s ease;
    }

    .dashboard-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .balance-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        overflow: hidden;
    }

    .stat-card {
        border-left: 4px solid #001f3f;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .quick-link-item {
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 8px;
        transition: all 0.3s ease;
        border: 1px solid #e2e8f0;
    }

    .quick-link-item:hover {
        background-color: #f8fafc;
        transform: translateX(5px);
        border-color: #001f3f;
    }

    .page-title {
        background: linear-gradient(135deg, #001f3f 0%, #2c5282 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
        font-size: 1.75rem;
    }

    .btn-modern {
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-primary-modern {
        background: linear-gradient(135deg, #fb9129 0%, #ff7b00 100%);
        color: white;
    }

    .btn-primary-modern:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(251, 145, 41, 0.4);
    }

    .table-modern {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .table-modern thead {
        background: linear-gradient(135deg, #001f3f 0%, #2c5282 100%);
        color: white;
    }

    .avatar-modern {
        border: 3px solid white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .input-group-modern .form-control {
        border-radius: 8px 0 0 8px;
        border: 2px solid #e2e8f0;
    }

    .input-group-modern .btn {
        border-radius: 0 8px 8px 0;
    }
</style>
@endsection
@section('content')

<div class="container-fluid px-4">

    <!-- Enhanced page title -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h2 class="page-title mb-1">Welcome back, {{ $user->brand_name }}</h2>
                    <p class="text-muted mb-0">Here's what's happening with your business today</p>
                </div>
                <div class="text-end">
                    <small class="text-muted">{{ date('l, F j, Y') }}</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Left Column - Profile & Quick Links -->
        <div class="col-xl-4">
            <!-- Enhanced Balance Card -->
            <div class="card dashboard-card balance-card mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="mb-3">
                                <h3 class="text-white mb-1"><b>₦{{ number_format($user->balance,2) }}</b></h3>
                                <p class="text-white-50 mb-0">Admin Balance</p>
                            </div>
                            <div class="d-flex gap-2 flex-wrap justify-content-start align-items-center">
                                <a href='/withdraw' class='btn btn-primary-modern btn-modern btn-sm flex-fill flex-sm-grow-0'>
                                    <i class="fas fa-wallet me-2"></i>Withdraw Funds
                                </a>
                                <a href='/product-prices' class='btn btn-light btn-modern btn-sm flex-fill flex-sm-grow-0'>
                                    <i class="fas fa-tags me-2"></i>Set Prices
                                </a>
                            </div>
                        </div>
                       
                    </div>

                     <div class="m-2">
                        <label class="form-label fw-semibold text-white">Your Website Link</label>
                        <div class="input-group input-group-modern">
                            <input id='link-to-copy' type="text" class="form-control" value="{{ strtolower($website_url ?? 'https://'.$user->brand_name.'.com') }}" readonly>
                            <button id='copy-link' class="btn btn-primary-modern" type="button">
                                <i class='fas fa-copy'></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-grid">
                        <a href="{{ $website_url ?? 'http://'.$user->brand_name.'.com'}}.com" class="btn btn-light btn-modern">
                            <i class="fas fa-external-link-alt me-2"></i>Preview Website
                        </a>
                    </div>
                </div>
            </div>

         
            <div class="card dashboard-card">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4 text-center">
                        <i class="fas fa-bolt text-primary me-2"></i>Quick Links
                    </h5>
                    <div class="quick-links">
                        <div class="quick-link-item">
                            <a href='/profile' class="text-decoration-none text-dark d-flex align-items-center">
                                <i class="fas fa-user-circle text-primary me-3"></i>
                                <span class="flex-grow-1">Profile</span>
                                <i class="fas fa-chevron-right text-muted"></i>
                            </a>
                        </div>
                        <div class="quick-link-item">
                            <a href='checkreviews' class="text-decoration-none text-dark d-flex align-items-center">
                                <i class="fas fa-palette text-primary me-3"></i>
                                <span class="flex-grow-1">Design & Theme</span>
                                <i class="fas fa-chevron-right text-muted"></i>
                            </a>
                        </div>
                        <div class="quick-link-item">
                            <a href='/records' class="text-decoration-none text-dark d-flex align-items-center">
                                <i class="fas fa-file-alt text-primary me-3"></i>
                                <span class="flex-grow-1">Records</span>
                                <i class="fas fa-chevron-right text-muted"></i>
                            </a>
                        </div>
                        <div class="quick-link-item">
                            <a href='/delivery_locations' class="text-decoration-none text-dark d-flex align-items-center">
                                <i class="fas fa-exchange-alt text-primary me-3"></i>
                                <span class="flex-grow-1">Customer Transactions</span>
                                <i class="fas fa-chevron-right text-muted"></i>
                            </a>
                        </div>
                        <div class="quick-link-item">
                            <a href='/delivery_tracking' class="text-decoration-none text-dark d-flex align-items-center">
                                <i class="fas fa-star text-primary me-3"></i>
                                <span class="flex-grow-1">Reviews & Complaints</span>
                                <span class="badge bg-danger rounded-pill me-2">New</span>
                                <i class="fas fa-chevron-right text-muted"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Statistics & Transactions -->
        <div class="col-xl-8">
            <!-- Enhanced Statistics Cards -->
            <div class="row g-3 mb-4">
                @if($user->weekly_payment == 1)
                @if($user->payment_status == 1)
                <div class="col-md-4">
                    <div class="card dashboard-card" style='background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%); border-left: 4px solid #28a745;'>
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="text-success fw-medium mb-1">Last Week Orders</p>
                                    <h4 class="mb-0 text-success">{{ count($last_week_orders) }}</h4>
                                </div>
                                <div class="avatar-sm bg-success rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                            </div>
                            <small class="text-success"><i class="fas fa-check-circle me-1"></i>Paid</small>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-4">
                    <div class="card dashboard-card" style='background: linear-gradient(135deg, #f8d7da 0%, #f1b0b7 100%); border-left: 4px solid #dc3545;'>
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <a href='https://wa.me/2349058744473?text=Hi,%20I%20will%20like%20to%20make%20my%20payment%20for%20last%20week%20({{ count($last_week_orders) }}%20Orders).' class="text-danger fw-medium text-decoration-none">
                                        <p class="mb-1">Last Week Orders</p>
                                        <h4 class="mb-0">{{ count($last_week_orders) }}</h4>
                                    </a>
                                </div>
                                <div class="avatar-sm bg-danger rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-exclamation text-white"></i>
                                </div>
                            </div>
                            <small class="text-danger"><i class="fas fa-times-circle me-1"></i>Not Paid</small>
                        </div>
                    </div>
                </div>
                @endif
                @elseif($user->monthly_payment == 1)
                @if($user->payment_status == 1)
                <div class="col-md-4">
                    <div class="card dashboard-card" style='background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%); border-left: 4px solid #28a745;'>
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="text-success fw-medium mb-1">Last Month Orders</p>
                                    <h4 class="mb-0 text-success">{{ count($last_month_orders) }}</h4>
                                </div>
                                <div class="avatar-sm bg-success rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                            </div>
                            <small class="text-success"><i class="fas fa-check-circle me-1"></i>Paid</small>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-4">
                    <div class="card dashboard-card" style='background: linear-gradient(135deg, #f8d7da 0%, #f1b0b7 100%); border-left: 4px solid #dc3545;'>
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <a href='https://wa.me/2349058744473?text=Hi,%20I%20will%20like%20to%20make%20my%20payment%20for%20last%20month%20({{ count($last_month_orders) }}%20Orders).' class="text-danger fw-medium text-decoration-none">
                                        <p class="mb-1">Last Month Orders</p>
                                        <h4 class="mb-0">{{ count($last_month_orders) }}</h4>
                                    </a>
                                </div>
                                <div class="avatar-sm bg-danger rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-exclamation text-white"></i>
                                </div>
                            </div>
                            <small class="text-danger"><i class="fas fa-times-circle me-1"></i>Not Paid</small>
                        </div>
                    </div>
                </div>
                @endif
                @endif

                <div class="col-md-4">
                    <div class="card dashboard-card stat-card">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <a href='/purchase_transactions' class="text-decoration-none">
                                        <p class="text-muted fw-medium mb-1">All Transactions</p>
                                        <h4 class="mb-0 text-dark">{{ count($transactions) }}</h4>
                                    </a>
                                </div>
                                <div class="avatar-sm rounded-circle d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #001f3f 0%, #2c5282 100%);">
                                    <i class="fas fa-file-invoice text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card dashboard-card stat-card">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <a href='/users' class="text-decoration-none">
                                        <p class="text-muted fw-medium mb-1">Total Customers</p>
                                        <h4 class="mb-0 text-dark">{{ count($users) - 1 }}</h4>
                                    </a>
                                </div>
                                <div class="avatar-sm rounded-circle d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #001f3f 0%, #2c5282 100%);">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card dashboard-card stat-card">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium mb-1">Customer's Balance</p>
                                    <h4 class="mb-0 text-dark">₦{{ number_format($total_user_balance - $user->balance,2) }}</h4>
                                </div>
                                <div class="avatar-sm rounded-circle d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #001f3f 0%, #2c5282 100%);">
                                    <i class="fas fa-wallet text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Transactions Table -->
            <div class="card dashboard-card">
                <div class="card-header bg-white border-0 pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title mb-1">
                                <i class="fas fa-chart-line text-primary me-2"></i>Today's Transactions
                            </h5>
                            <p class="text-muted mb-0">{{ count($today_transactions) }} transactions today</p>
                        </div>
                        <div class="badge bg-primary rounded-pill px-3 py-2">
                            {{ count($today_transactions) }}
                        </div>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <table id='datatable' class="table table-hover table-modern align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Amount</th>
                                    <th class="border-0">Type</th>
                                    <th class="border-0">Details</th>
                                    <th class="border-0">Date</th>
                                    <th class="border-0">Balance</th>
                                    <th class="border-0 text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($today_transactions as $transaction)
                                @if($transaction->status == 2)
                                <tr class="table-warning">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-warning rounded-circle me-2 d-flex align-items-center justify-content-center">
                                                <i class="fas fa-user text-white" style="font-size: 10px;"></i>
                                            </div>
                                            <span class="fw-medium">{{ $transaction->user->name }}</span>
                                        </div>
                                    </td>
                                    <td><span class="fw-bold text-warning">₦{{ number_format($transaction->amount) }}</span></td>
                                    <td><span class="badge bg-warning rounded-pill">{{ $transaction->type }}</span></td>
                                    <td class="text-muted">{{ $transaction->description }}</td>
                                    <td class="text-muted">{{ $transaction->created_at }}</td>
                                    <td><span class="badge bg-warning">Pending Schedule</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-success btn-modern">
                                            <i class="fas fa-check me-1"></i>Verify
                                        </button>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-success rounded-circle me-2 d-flex align-items-center justify-content-center">
                                                <i class="fas fa-user text-white" style="font-size: 10px;"></i>
                                            </div>
                                            <span class="fw-medium">{{ $transaction->user->name }}</span>
                                        </div>
                                    </td>
                                    <td><span class="fw-bold text-success">₦{{ number_format($transaction->amount) }}</span></td>
                                    <td><span class="badge bg-primary rounded-pill">{{ $transaction->type }}</span></td>
                                    <td class="text-muted">{{ $transaction->description }}</td>
                                    <td class="text-muted">{{ $transaction->created_at }}</td>
                                    <td>
                                        <small class="text-muted">
                                            ₦{{ number_format($transaction->admin_before) }} →
                                            <span class="text-success fw-bold">₦{{ number_format($transaction->admin_after) }}</span>
                                        </small>
                                    </td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-success btn-modern">
                                            <i class="fas fa-check me-1"></i>Verify
                                        </button>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var oTable = $('.table-modern').DataTable({
            ordering: false,
            searching: true,
            pageLength: 10,
            responsive: true,
            language: {
                search: "<i class='fas fa-search'></i>",
                searchPlaceholder: "Search transactions..."
            }
        });

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        $("#copy-link").click(function() {
            var link = $("#link-to-copy").val();
            navigator.clipboard.writeText(link).then(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Link Copied Successfully!'
                })
            });
        });

        @if(session('message'))
        Toast.fire({
            icon: 'success',
            title: '{{ session("message") }}'
        })
        @endif

        @if(session('error'))
        Toast.fire({
            icon: 'error',
            title: '{{ session("error") }}'
        })
        @endif
    });
</script>
@endsection
@endsection