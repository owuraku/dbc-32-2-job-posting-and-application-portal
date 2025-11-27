@extends('admin.layout.master')

@section('title', 'Company Profile: ' . $company->name)

@section('content')
    <div class="row">
        <!-- Column 1: General Information & Metrics -->
        <div class="col-lg-5">
            <!-- Company General Information Card -->
            <div class="card shadow mb-4 h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 fw-bold text-primary"><i class="bi bi-info-circle me-2"></i>General Information</h6>
                </div>
                <div class="card-body">
                    <p class="fw-bold mb-1">Name:</p>
                    <p class="mb-3">{{ $company->name }}</p>

                    <p class="fw-bold mb-1">Address:</p>
                    <p class="mb-3">{{ $company->address }}</p>

                    {{-- <p class="fw-bold mb-1">Contact Email:</p>
                    <p class="mb-3">contact@techsolutions.com</p> --}}

                    <p class="fw-bold mb-1">Phone:</p>
                    <p class="mb-3">{{ $company->contact }}</p>
                </div>
            </div>
        </div>

        <!-- Column 2: Job Metrics Table -->
        <div class="col-lg-7">
            <div class="card shadow mb-4 h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 fw-bold text-primary"><i class="bi bi-bar-chart-line me-2"></i>Job Metrics Overview
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>Metric</th>
                                    <th>Total Count</th>
                                    <th>Last 30 Days</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Number of Job Postings</td>
                                    <td class="fw-bold">45</td>
                                    <td>5 New Postings</td>
                                </tr>
                                <tr>
                                    <td>Total Applications Received</td>
                                    <td class="fw-bold">2,150</td>
                                    <td>288 Applications</td>
                                </tr>
                                <tr>
                                    <td>Hires Made (YTD)</td>
                                    <td class="fw-bold text-success">18</td>
                                    <td>3 Hires</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Staff Directory Table -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 fw-bold text-primary"><i class="bi bi-people me-2"></i>Staff Directory (Key Contacts)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th>Name</th>
                            <th>Role / Title</th>
                            <th>Department</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jane Doe</td>
                            <td>Recruitment Manager</td>
                            <td>Human Resources</td>
                            <td>jane.doe@techsolutions.com</td>
                        </tr>
                        <tr>
                            <td>Alex Chen</td>
                            <td>CTO / Head of Engineering</td>
                            <td>Technology</td>
                            <td>alex.chen@techsolutions.com</td>
                        </tr>
                        <tr>
                            <td>Sarah Lee</td>
                            <td>Executive Assistant</td>
                            <td>Administration</td>
                            <td>sarah.lee@techsolutions.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-muted small mt-3">Total Staff Count: 155 (Full list redacted for brevity)</p>
        </div>
        <!-- End Page Content -->
    @endsection
