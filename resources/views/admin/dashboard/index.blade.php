@extends('admin.layout.master')

@section('title', 'Dashboard Overview')

@section('content')
    <!-- Metrics Section -->
    <div class="row">
        <!-- Metric Card 1: Total Companies -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start border-primary border-5 h-100 shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col me-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">Total Companies
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">{{ $companies_count }}</div>
                        </div>
                        <div class="col-auto"><i class="bi bi-building text-primary fs-2 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metric Card 2: Job Applications -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start border-success border-5 h-100 shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col me-2">
                            <div class="text-xs fw-bold text-success text-uppercase mb-1">Job Applications
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">5,432</div>
                        </div>
                        <div class="col-auto"><i class="bi bi-file-earmark-check text-success fs-2 opacity-50"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metric Card 3: Job Postings -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start border-warning border-5 h-100 shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col me-2">
                            <div class="text-xs fw-bold text-warning text-uppercase mb-1">Job Postings</div>
                            <div class="h5 mb-0 fw-bold text-gray-800">450</div>
                        </div>
                        <div class="col-auto"><i class="bi bi-briefcase text-warning fs-2 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metric Card 4: New Users This Month -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start border-info border-5 h-100 shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col me-2">
                            <div class="text-xs fw-bold text-info text-uppercase mb-1">New Users (Month)
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">785</div>
                        </div>
                        <div class="col-auto"><i class="bi bi-people text-info fs-2 opacity-50"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End of Metrics Row -->

    <!-- Application Trends Chart -->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 fw-bold text-primary">Application Trends (Last 6 Months)</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="applicationTrendChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End of Chart Row -->
@endsection
