@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Create New Tour Package</h3>
            </div>
            <div class="col-sm-6 text-end">
                <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm" title="Back to Activity">
                    <i class="fa fa-arrow-left me-1"></i> Back
                </a>
            </div>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="horizontal-wizard-wrapper">
                        <div class="row g-3">
                            <div class="col-12 main-horizontal-header">
                                <div class="nav nav-pills horizontal-options" id="horizontal-wizard-tab" role="tablist">
                                    <a class="nav-link active" id="wizard-info-tab" data-bs-toggle="pill"
                                        href="#wizard-info" role="tab" aria-controls="wizard-info" aria-selected="true">
                                        <div class="horizontal-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                            <div class="horizontal-wizard-content">
                                                <h6>Basic Info</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="nav-link" id="TourDetails-wizard-tab" data-bs-toggle="pill"
                                        href="#tour-details" role="tab" aria-controls="tour-details"
                                        aria-selected="false">
                                        <div class="horizontal-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa fa-chain-broken"></i></div>
                                            <div class="horizontal-wizard-content">
                                                <h6>Tour Details</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="nav-link" id="Pricing-wizard-tab" data-bs-toggle="pill" href="#Pricing"
                                        role="tab" aria-controls="Pricing" aria-selected="false">
                                        <div class="horizontal-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa-solid fa-people-group"></i></div>
                                            <div class="horizontal-wizard-content">
                                                <h6>₹ Pricing</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="nav-link" id="successful-wizard-tab" data-bs-toggle="pill"
                                        href="#successful-wizard" role="tab" aria-controls="successful-wizard"
                                        aria-selected="false">
                                        <div class="horizontal-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa-solid fa-image"></i></div>
                                            <div class="horizontal-wizard-content">
                                                <h6>daily itinerary</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12">
                                <form method="POST" action="{{ route('tour.store') }}" enctype="multipart/form-data"
                                    class="tab-content dark-field" id="horizontal-wizard-tabContent" novalidate>
                                    @csrf

                                    <!-- Step 1: Basic Info -->
                                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Tour Title<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="tour_title" class="form-control"
                                                    placeholder="Enter Tour Title" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-tooltip">
                                                    Please enter a valid title.
                                                </div>
                                                @error('tour_title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Feature Image</label>
                                                <input type="file" name="feature_image" class="form-control">
                                                @error('feature_image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            {{-- daily itinerary --}}
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Tour Slug<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="slug" class="form-control"
                                                    placeholder="Enter slug" required>
                                                @error('slug')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12 text-end">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="nextTab('TourDetails-wizard-tab')">Continue</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 2: Tour Details -->
                                    <div class="tab-pane fade" id="tour-details" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Location<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="location" class="form-control"
                                                    placeholder="Enter Tour Location" required>
                                                @error('location')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Activity<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="activity" class="form-control"
                                                    placeholder="Enter Tour activity" required>
                                                @error('activity')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Days<span class="font-danger">*</span></label>
                                                <input type="text" name="days" class="form-control"
                                                    placeholder="Enter Tour Days" required>
                                                @error('days')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Nights<span class="font-danger">*</span></label>
                                                <input type="text" name="nights" class="form-control"
                                                    placeholder="Enter Tour Nights" required>
                                                @error('nights')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Trip Overview<span
                                                        class="font-danger">*</span></label>
                                                <textarea name="overview" class="form-control" rows="1" placeholder="Enter trip overview"></textarea>
                                                @error('overview')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Highlights</label>
                                                <div id="highlight-wrapper">
                                                    <div class="d-flex mb-2">
                                                        <input type="text" name="highlight_list[]"
                                                            class="form-control me-2" placeholder="Enter highlight">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            onclick="addHighlightField()">+</button>
                                                    </div>
                                                    @error('highlight_list')
                                                        <small class="text-danger d-block">{{ $message }}</small>
                                                    @enderror

                                                    @foreach ($errors->get('highlight_list.*') as $messages)
                                                        @foreach ($messages as $msg)
                                                            <small class="text-danger d-block">{{ $msg }}</small>
                                                        @endforeach
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="col-12 text-end">
                                                <button type="button" class="btn btn-secondary me-2"
                                                    onclick="prevTab('wizard-info-tab')">Previous</button>
                                                <button type="button" class="btn btn-primary"
                                                    onclick="nextTab('Pricing-wizard-tab')">Continue</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 3: Pricing -->
                                    <div class="tab-pane fade" id="Pricing" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Tour Rate (₹)<span
                                                        class="font-danger">*</span></label>
                                                <input type="number" name="tour_rate" class="form-control"
                                                    placeholder="Enter total tour rate" required>
                                                @error('tour_rate')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Included Amenities</label>
                                                <div id="included-wrapper">
                                                    <div class="d-flex mb-2">
                                                        <input type="text" name="included_amenities[]"
                                                            class="form-control me-2"
                                                            placeholder="Enter included amenity">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            onclick="addAmenityField('included')">+</button>
                                                    </div>
                                                    @error('included_amenities')
                                                        <small class="text-danger d-block">{{ $message }}</small>
                                                    @enderror

                                                    @foreach ($errors->get('included_amenities.*') as $messages)
                                                        @foreach ($messages as $msg)
                                                            <small class="text-danger d-block">{{ $msg }}</small>
                                                        @endforeach
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Not Included Amenities</label>
                                                <div id="not-included-wrapper">
                                                    <div class="d-flex mb-2">
                                                        <input type="text" name="not_included_amenities[]"
                                                            class="form-control me-2"
                                                            placeholder="Enter not included amenity">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            onclick="addAmenityField('not-included')">+</button>
                                                    </div>
                                                    @error('not_included_amenities')
                                                        <small class="text-danger d-block">{{ $message }}</small>
                                                    @enderror

                                                    @foreach ($errors->get('not_included_amenities.*') as $messages)
                                                        @foreach ($messages as $msg)
                                                            <small class="text-danger d-block">{{ $msg }}</small>
                                                        @endforeach
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-12 text-end mt-3">
                                                <button type="button" class="btn btn-secondary me-2"
                                                    onclick="prevTab('TourDetails-wizard-tab')">Previous</button>
                                                <button type="button" class="btn btn-primary"
                                                    onclick="nextTab('successful-wizard-tab')">Continue</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 4: Media & Files -->
                                    <div class="tab-pane fade" id="successful-wizard" role="tabpanel">
                                        <div class="row g-3">

                                            {{-- daily itinerary --}}
                                            <div class="row mt-3" id="itinerary-wrapper">
                                                <div class="col-xl-4 day-itinerary" data-index="0">
                                                    <div class="card p-2 mb-3 shadow-sm position-relative">
                                                        <label class="form-label">Day 1 Title</label>
                                                        <input type="text" name="itinerary[0][title]"
                                                            class="form-control mb-2" placeholder="Enter title for Day 1">
                                                        <label class="form-label">Details</label>
                                                        <textarea id="editor-0" name="itinerary[0][details]" class="form-control itinerary-editor" rows="4"
                                                            placeholder="Enter details for Day 1"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="col-xl-4 btn btn-primary mt-3"
                                                onclick="addDayItinerary()">+ Add Day</button>
                                            {{-- daily itinerary --}}
                                            @foreach ($errors->get('itinerary.*.title') as $index => $messages)
                                                @foreach ($messages as $message)
                                                    <div class="text-danger d-block">
                                                        <ul>
                                                            <li>{{ $message }}</li>
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            @endforeach


                                            @foreach ($errors->get('itinerary.*.details') as $index => $messages)
                                                @foreach ($messages as $message)
                                                    @if ($loop->parent->index == $index)
                                                        <div class="text-danger d-block">
                                                            <ul>
                                                                <li>{{ $message }}</li>
                                                            </ul>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach



                                            <div class="col-12 text-end mt-3">
                                                <button type="button" class="btn btn-secondary me-2"
                                                    onclick="prevTab('Pricing-wizard-tab')">Previous</button>
                                                <button type="submit" class="btn btn-success">Submit Tour
                                                    Package</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
            const tabTrigger = document.querySelector(`#${tabId}`);
            const tab = new bootstrap.Tab(tabTrigger);
            tab.show();
        }

        function prevTab(tabId) {
            const tabTrigger = document.querySelector(`#${tabId}`);
            const tab = new bootstrap.Tab(tabTrigger);
            tab.show();
        }

        function addHighlightField() {
            const wrapper = document.getElementById('highlight-wrapper');

            const div = document.createElement('div');
            div.classList.add('d-flex', 'mb-2');

            div.innerHTML = `
            <input type="text" name="highlight_list[]" class="form-control me-2" placeholder="Enter highlight">
            <button type="button" class="btn btn-danger btn-sm" onclick="removeHighlightField(this)">−</button>`;

            wrapper.appendChild(div);
        }

        function removeHighlightField(button) {
            button.parentElement.remove();
        }

        function addAmenityField(type) {
            const wrapperId = type === 'included' ? 'included-wrapper' : 'not-included-wrapper';

            const wrapper = document.getElementById(wrapperId);
            const inputName = type === 'included' ? 'included_amenities[]' : 'not_included_amenities[]';

            const div = document.createElement('div');
            div.classList.add('d-flex', 'mb-2');

            div.innerHTML = `
            <input type="text" name="${inputName}" class="form-control me-2" placeholder="Enter amenity">
            <button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">−</button>
        `;

            wrapper.appendChild(div);
        }
    </script>
    <script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>

    <script>
        let dayCount = 1; // Day 0 is already initialized on load

        // Add new day
        function addDayItinerary() {
            const wrapper = document.getElementById('itinerary-wrapper');

            const col = document.createElement('div');
            col.classList.add('col-xl-4', 'day-itinerary');
            col.dataset.index = dayCount;

            const editorId = `editor-${dayCount}`;

            col.innerHTML = `
                <div class="card p-2 mb-3 shadow-sm position-relative">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
            aria-label="Close" onclick="removeDayItinerary(${dayCount})"></button>

        <label class="form-label">Day ${dayCount + 1} Title</label>
        <input type="text" name="itinerary[${dayCount}][title]"
            class="form-control mb-2" placeholder="Enter title for Day ${dayCount + 1}">

        <label class="form-label">Details</label>
        <textarea id="${editorId}" name="itinerary[${dayCount}][details]" class="form-control itinerary-editor"
            rows="4" placeholder="Enter details for Day ${dayCount + 1}"></textarea>
        </div>`;

            wrapper.appendChild(col);

            setTimeout(() => {
                CKEDITOR.replace(editorId);
            }, 100);

            dayCount++;
        }

        // Remove day
        function removeDayItinerary(index) {
            if (index === 0) {
                alert("Day 1 cannot be removed.");
                return;
            }

            const wrapper = document.getElementById('itinerary-wrapper');
            const item = wrapper.querySelector(`.day-itinerary[data-index='${index}']`);
            if (item) {
                const textarea = item.querySelector('textarea');
                if (textarea && CKEDITOR.instances[textarea.id]) {
                    CKEDITOR.instances[textarea.id].destroy(true);
                }
                item.remove();
            }

            reindexItineraries();
        }

        function reindexItineraries() {
            const items = document.querySelectorAll('.day-itinerary');

            items.forEach((item, i) => {
                item.dataset.index = i;

                const titleInput = item.querySelector("input.day-title");
                const detailTextarea = item.querySelector("textarea.day-details");
                const labels = item.querySelectorAll('label');

                // Update label text
                if (labels.length > 0) labels[0].innerText = `Day ${i + 1} Title`;
                if (labels.length > 1) labels[1].innerText = `Details`;

                // Update name and placeholder
                if (titleInput) {
                    titleInput.name = `itinerary[${i}][title]`;
                    titleInput.placeholder = `Enter title for Day ${i + 1}`;
                }

                if (detailTextarea) {
                    const newId = `editor-${i}`;

                    // Destroy old instance if it exists
                    if (detailTextarea.id && CKEDITOR.instances[detailTextarea.id]) {
                        CKEDITOR.instances[detailTextarea.id].destroy(true);
                    }

                    // Update ID and name
                    detailTextarea.id = newId;
                    detailTextarea.name = `itinerary[${i}][details]`;
                    detailTextarea.placeholder = `Enter details for Day ${i + 1}`;

                    // Wait for DOM update, then safely create new CKEditor
                    requestAnimationFrame(() => {
                        if (document.getElementById(newId)) {
                            CKEDITOR.replace(newId);
                        }
                    });
                }

                // Update remove button
                const closeBtn = item.querySelector('button.btn-close');
                if (closeBtn) {
                    closeBtn.setAttribute("onclick", `removeDayItinerary(${i})`);
                }
            });

            // Update global day count
            dayCount = items.length;
        }

        // Initialize Day 1 on load
        document.addEventListener("DOMContentLoaded", function() {
            CKEDITOR.replace('editor-0');
        });
    </script>
@endsection
