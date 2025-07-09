@extends('business_backend.master')

@section('header')
<style>
    .price-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
    }
    
    .price-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    .price-card .card-body {
        padding: 2rem;
        text-align: center;
    }
    
    .price-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .price-card.data .price-icon {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .price-card.airtime .price-icon {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    }
    
    .price-card.electricity .price-icon {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    }
    
    .price-card.cable .price-icon {
        background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
    }
    
    .price-card.examination .price-icon {
        background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
    }
    
    .price-card.bulksms .price-icon {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .price-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 25px;
        padding: 12px 30px;
        color: white;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .price-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        color: white;
        text-decoration: none;
    }
    
    .page-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 3rem 0;
        margin-bottom: 3rem;
        border-radius: 0 0 50px 50px;
    }
    
    .stats-card {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-bottom: 2rem;
    }
</style>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="mb-3"><i class="bx bx-cog me-3"></i>Product Price Management</h1>
                        <p class="mb-0 fs-5">Manage and update prices for all your products and services</p>
                    </div>
                    <div class="col-lg-4 text-end">
                        <div class="stats-card">
                            <h3 class="text-primary mb-1">6</h3>
                            <p class="text-muted mb-0">Product Categories</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <!-- Product Categories -->
        <div class="row g-4">
            <!-- Data Prices -->
            <div class="col-lg-4 col-md-6">
                <div class="card price-card data h-100">
                    <div class="card-body">
                        <div class="price-icon">
                            <i class="bx bx-wifi"></i>
                        </div>
                        <h4 class="card-title mb-3">Data Prices</h4>
                        <p class="text-muted mb-4">Manage pricing for internet data packages across all network providers</p>
                        <div class="mb-3">
                            <small class="text-muted">Includes: MTN, Airtel, Glo, 9Mobile</small>
                        </div>
                        <a href="/data_prices" class="price-btn">
                            <i class="bx bx-edit me-2"></i>Set Data Prices
                        </a>
                    </div>
                </div>
            </div>

            <!-- Airtime Prices -->
            <div class="col-lg-4 col-md-6">
                <div class="card price-card airtime h-100">
                    <div class="card-body">
                        <div class="price-icon">
                            <i class="bx bx-phone"></i>
                        </div>
                        <h4 class="card-title mb-3">Airtime Prices</h4>
                        <p class="text-muted mb-4">Configure airtime recharge rates and commission structures</p>
                        <div class="mb-3">
                            <small class="text-muted">All Networks Supported</small>
                        </div>
                        <a href="/airtime_prices" class="price-btn">
                            <i class="bx bx-edit me-2"></i>Set Airtime Prices
                        </a>
                    </div>
                </div>
            </div>

            <!-- Electricity Prices -->
            <div class="col-lg-4 col-md-6">
                <div class="card price-card electricity h-100">
                    <div class="card-body">
                        <div class="price-icon">
                            <i class="bx bx-bulb"></i>
                        </div>
                        <h4 class="card-title mb-3">Electricity Prices</h4>
                        <p class="text-muted mb-4">Set pricing for electricity bill payments and meter recharge</p>
                        <div class="mb-3">
                            <small class="text-muted">PHCN, EKEDC, IKEDC & More</small>
                        </div>
                        <a href="/electricity_prices" class="price-btn">
                            <i class="bx bx-edit me-2"></i>Set Electricity Prices
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cable TV Prices -->
            <div class="col-lg-4 col-md-6">
                <div class="card price-card cable h-100">
                    <div class="card-body">
                        <div class="price-icon">
                            <i class="bx bx-tv"></i>
                        </div>
                        <h4 class="card-title mb-3">Cable TV Prices</h4>
                        <p class="text-muted mb-4">Manage subscription prices for cable and satellite TV services</p>
                        <div class="mb-3">
                            <small class="text-muted">DSTV, GOTV, Startimes</small>
                        </div>
                        <a href="/cable_prices" class="price-btn">
                            <i class="bx bx-edit me-2"></i>Set Cable Prices
                        </a>
                    </div>
                </div>
            </div>

            <!-- Examination Prices -->
            <div class="col-lg-4 col-md-6">
                <div class="card price-card examination h-100">
                    <div class="card-body">
                        <div class="price-icon">
                            <i class="bx bx-book"></i>
                        </div>
                        <h4 class="card-title mb-3">Examination Prices</h4>
                        <p class="text-muted mb-4">Configure pricing for examination pin purchases and registrations</p>
                        <div class="mb-3">
                            <small class="text-muted">WAEC, NECO, JAMB & More</small>
                        </div>
                        <a href="/examination_prices" class="price-btn">
                            <i class="bx bx-edit me-2"></i>Set Exam Prices
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bulk SMS Prices -->
            <div class="col-lg-4 col-md-6">
                <div class="card price-card bulksms h-100">
                    <div class="card-body">
                        <div class="price-icon">
                            <i class="bx bx-message"></i>
                        </div>
                        <h4 class="card-title mb-3">Bulk SMS Prices</h4>
                        <p class="text-muted mb-4">Set rates for bulk SMS services and messaging campaigns</p>
                        <div class="mb-3">
                            <small class="text-muted">Volume-based Pricing</small>
                        </div>
                        <a href="/bulksms_prices" class="price-btn">
                            <i class="bx bx-edit me-2"></i>Set SMS Prices
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h5 class="mb-2"><i class="bx bx-info-circle text-info me-2"></i>Price Management Tips</h5>
                                <p class="text-muted mb-0">Regularly review and update your prices to stay competitive. Consider market rates and your profit margins when setting prices.</p>
                            </div>
                            <div class="col-lg-4 text-end">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#priceGuideModal">
                                    <i class="bx bx-help-circle me-2"></i>Pricing Guide
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Pricing Guide Modal -->
<div class="modal fade" id="priceGuideModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bx bx-help-circle me-2"></i>Pricing Guide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-primary">Best Practices</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bx bx-check text-success me-2"></i>Research competitor prices</li>
                            <li class="mb-2"><i class="bx bx-check text-success me-2"></i>Consider your costs and margins</li>
                            <li class="mb-2"><i class="bx bx-check text-success me-2"></i>Update prices regularly</li>
                            <li class="mb-2"><i class="bx bx-check text-success me-2"></i>Test different price points</li>
                        </ul>
                    </div>
                  
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Add any JavaScript functionality here
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips if needed
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
@endsection