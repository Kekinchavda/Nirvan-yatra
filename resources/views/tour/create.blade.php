@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Activity</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="#">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Home') }}">
                                    </use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">Trip Details</li>
                        <li class="ms-2">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm" title="Back to Activity">
                                <i class="fa fa-arrow-left me-1"></i> Back
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Tour Package</h4>
                        <p class="desc mb-0 mt-1">Complete all steps to add a new tour package</p>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-wizard-wrapper">
                            <div class="row g-3">
                                <div class="col-12 main-horizontal-header">
                                    <div class="nav nav-pills horizontal-options" id="tour-wizard-tab" role="tablist">
                                        <a class="nav-link active" id="basic-info-tab" data-bs-toggle="pill"
                                            href="#basic-info" role="tab" aria-controls="basic-info"
                                            aria-selected="true">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-info-circle"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Basic Info</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="nav-link" id="details-tab" data-bs-toggle="pill" href="#details"
                                            role="tab" aria-controls="details" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-file-text"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Tour Details</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="nav-link" id="pricing-tab" data-bs-toggle="pill" href="#pricing"
                                            role="tab" aria-controls="pricing" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-dollar-sign"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Pricing</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="nav-link" id="media-tab" data-bs-toggle="pill" href="#media"
                                            role="tab" aria-controls="media" aria-selected="false">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-images"></i></div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Media & Files</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="tab-content dark-field" id="tour-wizard-tabContent">
                                        <!-- Step 1: Basic Information -->
                                        <div class="tab-pane fade show active" id="basic-info" role="tabpanel"
                                            aria-labelledby="basic-info-tab">
                                            <form class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-12">
                                                    <label class="form-label" for="tour_title">Tour Title <span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="tour_title" type="text"
                                                        placeholder="Enter tour title" required name="tour_title"
                                                        value="{{ old('tour_title') }}">
                                                    <div class="invalid-feedback">Please provide a tour title.</div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label" for="location">Location <span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="location" type="text"
                                                        placeholder="Destination location" required name="location"
                                                        value="{{ old('location') }}">
                                                    <div class="invalid-feedback">Please enter a valid location.</div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="days">Days <span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="days" type="number"
                                                        min="1" placeholder="Total days" required name="days"
                                                        value="{{ old('days', 1) }}">
                                                    <div class="invalid-feedback">Please enter valid days.</div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="nights">Nights <span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="nights" type="number"
                                                        min="1" placeholder="Total nights" required name="nights"
                                                        value="{{ old('nights', 1) }}">
                                                    <div class="invalid-feedback">Please enter valid nights.</div>
                                                </div>

                                                <div class="col-12 text-end">
                                                    <button class="btn btn-primary" type="button"
                                                        onclick="nextTab('details-tab')">Next</button>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Step 2: Tour Details -->
                                        <div class="tab-pane fade" id="details" role="tabpanel"
                                            aria-labelledby="details-tab">
                                            <form class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-12">
                                                    <label class="form-label" for="overview">Trip Overview <span
                                                            class="font-danger">*</span></label>
                                                    <textarea class="form-control" id="overview" placeholder="Brief overview of the trip" rows="3" required
                                                        name="overview">{{ old('overview') }}</textarea>
                                                    <div class="invalid-feedback">Please provide trip overview.</div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="tour_detail">Tour Details <span
                                                            class="font-danger">*</span></label>
                                                    <textarea class="form-control" id="tour_detail" placeholder="Detailed description of the tour" rows="3"
                                                        required name="tour_detail">{{ old('tour_detail') }}</textarea>
                                                    <div class="invalid-feedback">Please provide tour details.</div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="highlight_list">Highlights</label>
                                                    <textarea class="form-control" id="highlight_list" placeholder="Enter highlights separated by commas" rows="2"
                                                        name="highlight_list">{{ old('highlight_list') }}</textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="tour_plan">Daily Itinerary <span
                                                            class="font-danger">*</span></label>
                                                    <textarea class="form-control" id="tour_plan" placeholder="Day-by-day plan details" rows="5" required
                                                        name="tour_plan">{{ old('tour_plan') }}</textarea>
                                                    <div class="invalid-feedback">Please provide tour itinerary.</div>
                                                </div>

                                                <div class="col-12 text-end">
                                                    <button class="btn btn-secondary me-2" type="button"
                                                        onclick="prevTab('basic-info-tab')">Previous</button>
                                                    <button class="btn btn-primary" type="button"
                                                        onclick="nextTab('pricing-tab')">Next</button>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Step 3: Pricing -->
                                        <div class="tab-pane fade" id="pricing" role="tabpanel"
                                            aria-labelledby="pricing-tab">
                                            <form class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="per_day_rate">Per Day Rate ($) <span
                                                            class="font-danger">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input class="form-control" id="per_day_rate" type="number"
                                                            min="0" step="0.01" placeholder="0.00" required
                                                            name="per_day_rate" value="{{ old('per_day_rate') }}">
                                                    </div>
                                                    <div class="invalid-feedback">Please enter valid per day rate.</div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label" for="tour_rate">Total Tour Rate ($) <span
                                                            class="font-danger">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">$</span>
                                                        <input class="form-control" id="tour_rate" type="number"
                                                            min="0" step="0.01" placeholder="0.00" required
                                                            name="tour_rate" value="{{ old('tour_rate') }}">
                                                    </div>
                                                    <div class="invalid-feedback">Please enter valid tour rate.</div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="tour_amenities">Included
                                                        Amenities</label>
                                                    <textarea class="form-control" id="tour_amenities" placeholder="What's included in the tour" rows="3"
                                                        name="tour_amenities">{{ old('tour_amenities') }}</textarea>
                                                </div>

                                                <div class="col-12 text-end">
                                                    <button class="btn btn-secondary me-2" type="button"
                                                        onclick="prevTab('details-tab')">Previous</button>
                                                    <button class="btn btn-primary" type="button"
                                                        onclick="nextTab('media-tab')">Next</button>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Step 4: Media & Files -->
                                        <div class="tab-pane fade" id="media" role="tabpanel"
                                            aria-labelledby="media-tab">
                                            <form class="row g-3 needs-validation" method="POST"
                                                action="{{ route('tour.store') }}" enctype="multipart/form-data"
                                                novalidate>
                                                @csrf

                                                <div class="col-md-6">
                                                    <label class="form-label">Feature Image <span
                                                            class="font-danger">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa fa-image"></i></span>
                                                        <input class="form-control" type="file" name="feature_image"
                                                            accept="image/*" required>
                                                    </div>
                                                    <small class="text-muted">Recommended size: 800x600px</small>
                                                    <div class="invalid-feedback">Please upload a feature image.</div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Tour PDF Brochure</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-file-pdf"></i></span>
                                                        <input class="form-control" type="file" name="pdf_file"
                                                            accept=".pdf">
                                                    </div>
                                                    <div class="invalid-feedback">Please upload a valid PDF file.</div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="reviews">Customer Reviews</label>
                                                    <textarea class="form-control" id="reviews" placeholder="Testimonials from customers" rows="3"
                                                        name="reviews">{{ old('reviews') }}</textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="related_tour_list">Related
                                                        Tours</label>
                                                    <input class="form-control" id="related_tour_list" type="text"
                                                        placeholder="Enter related tour IDs separated by commas"
                                                        name="related_tour_list" value="{{ old('related_tour_list') }}">
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="terms-check" type="checkbox"
                                                            required>
                                                        <label class="form-check-label" for="terms-check">I confirm all
                                                            information is correct</label>
                                                        <div class="invalid-feedback">You must confirm before submitting.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 text-end">
                                                    <button class="btn btn-secondary me-2" type="button"
                                                        onclick="prevTab('pricing-tab')">Previous</button>
                                                    <button class="btn btn-success" type="submit">Submit Tour
                                                        Package</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function nextTab(tabId) {
            const nextTab = document.getElementById(tabId);
            const tab = new bootstrap.Tab(nextTab);
            tab.show();
        }

        function prevTab(tabId) {
            const prevTab = document.getElementById(tabId);
            const tab = new bootstrap.Tab(prevTab);
            tab.show();
        }
    </script>
@endsection
