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
                                                <h6>Daily itinerary</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="nav-link" id="ThingsToCarryAndTC-wizard-tab" data-bs-toggle="pill"
                                        href="#ThingsToCarryAndTC" role="tab" aria-controls="ThingsToCarryAndTC"
                                        aria-selected="false">
                                        <div class="horizontal-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa-solid fa-clipboard-list"></i></div>
                                            <div class="horizontal-wizard-content">
                                                <h6>Things to Carry &amp; T&amp;C</h6>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>

                            <div class="col-12">
                                <form method="POST" action="{{ route('tour.store') }}" enctype="multipart/form-data"
                                    class="tab-content dark-field needs-validation" id="horizontal-wizard-tabContent"
                                    novalidate="">
                                    @csrf

                                    <!-- Step 1: Basic Info -->
                                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel">
                                        <div class="row g-3">
                                            {{-- tour type --}}
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Tour Type<span
                                                        class="font-danger">*</span></label>
                                                <select class="form-select" id="select" name="tour_type_id">
                                                    <option value="">-- Select Tour Type --</option>
                                                    @foreach ($tourType as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>

                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-tooltip">
                                                    Please select valid type.
                                                </div>
                                                @error('tour_type_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Tour Title<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="tour_title" class="form-control" required
                                                    placeholder="Enter Tour Title" value="{{ old('tour_title') }}">
                                                @error('tour_title')
                                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                                @enderror
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-tooltip">
                                                    Please enter a valid title.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Feature Image <span
                                                        class="font-danger">*</span></label>
                                                <input type="file" name="feature_image" class="form-control" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-tooltip">
                                                    Please select image.
                                                </div>
                                                @error('feature_image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>


                                            <div class="col-xl-4 col-sm-6">
                                                <label class="col-xxl-3 box-col-12 text-start">From - To<span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input class="form-control" name="fromTo" required type="text"
                                                        placeholder="Enter Date" value="{{ old('fromTo') }}">
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-tooltip">
                                                        Please enter a valid date.
                                                    </div>
                                                </div>
                                                <small class="text-danger" id="datetime-range-error"></small>
                                                @error('fromTo')
                                                    <small class="text-danger"
                                                        id="datetime-range-error">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-xl-4 col-sm-6">
                                                <label for="pickup_drop" class="form-label">Pickup and Drop Location <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="pickup_drop" id="pickup_drop"
                                                    class="form-control" placeholder="Enter pickup and drop location"
                                                    required value="{{ old('pickup_drop') }}">
                                                @error('pickup_drop')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <!-- other Section -->
                                            <div class="col-12 mt-4 mt-sm-5 mt-lg-6">
                                                <label class="form-label">Other</label>
                                                <textarea name="other" id="other" class="form-control ckeditor" rows="4"
                                                    placeholder="Add any additional other here..."></textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter something here.
                                                </div>
                                                @error('note')
                                                    <small class="text-danger d-block">{{ $message }}</small>
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
                                                    placeholder="Enter Tour Location" required
                                                    value="{{ old('location') }}">
                                                @error('location')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Activity<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="activity" class="form-control"
                                                    placeholder="Enter Tour activity" required
                                                    value="{{ old('activity') }}">
                                                @error('activity')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Days<span class="font-danger">*</span></label>
                                                <input type="text" name="days" class="form-control"
                                                    placeholder="Enter Tour Days" required value="{{ old('days') }}">
                                                @error('days')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Nights<span class="font-danger">*</span></label>
                                                <input type="text" name="nights" class="form-control"
                                                    placeholder="Enter Tour Nights" required value="{{ old('nights') }}">
                                                @error('nights')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Location Cover<span
                                                        class="font-danger">*</span></label>
                                                <input name="locationCover" id="locationCover" class="form-control"
                                                    placeholder="Enter trip locations" required
                                                    value="{{ is_array(old('locationCover')) ? implode(',', old('locationCover')) : old('locationCover') }}">
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">
                                                    Please enter Location Cover
                                                </div>
                                                @error('locationCover')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Trip Overview<span
                                                        class="font-danger">*</span></label>
                                                <textarea name="overview" class="form-control ckeditor" rows="4" placeholder="Enter trip overview" required>{{ old('overview') }}</textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">
                                                    Please enter Trip Overview
                                                </div>
                                                @error('overview')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Highlights <span
                                                        class="font-danger">*</span></label>
                                                <div id="highlight-wrapper">
                                                    <div class="d-flex mb-2">
                                                        @foreach (old('highlight_list', ['']) as $highlight)
                                                            <input type="text" name="highlight_list[]"
                                                                class="form-control me-2" placeholder="Enter highlight"
                                                                required>
                                                        @endforeach

                                                        <button type="button" class="btn btn-success btn-sm"
                                                            onclick="addHighlightField()">+</button>
                                                    </div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">
                                                        Please enter Highlights.
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
                                                    placeholder="Enter total tour rate" required
                                                    value="{{ old('tour_rate') }}">
                                                @error('tour_rate')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="row g-3 mt-1">
                                                <div class="col-xl-6 col-sm-6">
                                                    <label class="form-label">Included Amenities <span
                                                            class="font-danger">*</span></label>
                                                    <div id="included-wrapper">
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="included_amenities[]"
                                                                class="form-control me-2"
                                                                placeholder="Enter included amenity" required>
                                                            <button type="button" class="btn btn-success btn-sm"
                                                                onclick="addAmenityField('included')">+</button>
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter at least one amenity.
                                                        </div>

                                                        @error('included_amenities')
                                                            <small class="text-danger d-block">{{ $message }}</small>
                                                        @enderror

                                                        @foreach ($errors->get('included_amenities.*') as $messages)
                                                            @foreach ($messages as $msg)
                                                                <small
                                                                    class="text-danger d-block">{{ $msg }}</small>
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-1">
                                                <div class="col-xl-6 col-12">
                                                    <label class="form-label">Not Included Amenities <span
                                                            class="font-danger">*</span></label>
                                                    <div id="not-included-wrapper">
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="not_included_amenities[]"
                                                                class="form-control me-2"
                                                                placeholder="Enter not included amenity" required>
                                                            <button type="button" class="btn btn-success btn-sm"
                                                                onclick="addAmenityField('not-included')">+</button>
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter at least one Not
                                                            Included
                                                            Amenities.
                                                        </div>
                                                        @error('not_included_amenities')
                                                            <small class="text-danger d-block">{{ $message }}</small>
                                                        @enderror

                                                        @foreach ($errors->get('not_included_amenities.*') as $messages)
                                                            @foreach ($messages as $msg)
                                                                <small
                                                                    class="text-danger d-block">{{ $msg }}</small>
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-1">
                                                <div class="col-xl-6 col-12 mt-3">
                                                    <label class="form-label">Other Charges (if applicable) <span
                                                            class="font-danger">*</span></label>
                                                    <div id="other-charges-wrapper">
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="other_charges[]"
                                                                class="form-control me-2" placeholder="Enter other charge"
                                                                required>
                                                            <button type="button" class="btn btn-success btn-sm"
                                                                onclick="addOtherChargeField()">+</button>
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Other Charges.
                                                        </div>
                                                        @error('other_charges')
                                                            <small class="text-danger d-block">{{ $message }}</small>
                                                        @enderror

                                                        @foreach ($errors->get('other_charges.*') as $messages)
                                                            @foreach ($messages as $msg)
                                                                <small
                                                                    class="text-danger d-block">{{ $msg }}</small>
                                                            @endforeach
                                                        @endforeach
                                                    </div>
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
                                                <button type="button" class="btn btn-primary"
                                                    onclick="nextTab('ThingsToCarryAndTC-wizard-tab')">Continue</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Things to Carry & T&C Tab Pane -->
                                    <div class="tab-pane fade" id="ThingsToCarryAndTC" role="tabpanel">
                                        <div class="row g-3">
                                            <!-- Things to Carry Section -->
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Things to Carry <span
                                                        class="font-danger">*</span></label>
                                                <textarea name="things_to_carry" id="things_to_carry" class="form-control ckeditor" rows="6"
                                                    placeholder="List things users should carry..." required></textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">
                                                    Please enter Things to Carry.
                                                </div>
                                                @error('things_to_carry')
                                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <!-- T&C Section -->
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Terms & Conditions <span
                                                        class="font-danger">*</span></label>
                                                <textarea name="terms_conditions" id="terms_conditions" class="form-control ckeditor" rows="6" required
                                                    placeholder="Add your terms and conditions here..."></textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter Terms & Conditions.
                                                </div>
                                                @error('terms_conditions')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <!-- Note Section -->
                                            <div class="col-xl-6 col-sm-6 mt-3">
                                                <label class="form-label">Note <span class="font-danger">*</span></label>
                                                <textarea name="note" id="note" required class="form-control ckeditor" rows="4"
                                                    placeholder="Add any additional notes here..."></textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter Note.
                                                </div>
                                                @error('note')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-12 text-end mt-3">
                                                <button type="button" class="btn btn-secondary me-2"
                                                    onclick="prevTab('successful-wizard-tab')">Previous</button>
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

            div.innerHTML =
                `
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

            div.innerHTML =
                `
                <input type="text" name="${inputName}" class="form-control me-2" placeholder="Enter amenity">
                <button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">−</button>
                `;

            wrapper.appendChild(div);
        }

        function addOtherChargeField() {
            const wrapper = document.getElementById('other-charges-wrapper');

            const div = document.createElement('div');
            div.classList.add('d-flex', 'mb-2');

            div.innerHTML =
                `
                <input type="text" name="other_charges[]" class="form-control me-2" placeholder="Enter other charge">
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

            col.innerHTML =
                `
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


        // tagify
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.querySelector('#locationCover');
            new Tagify(input, {
                enforceWhitelist: false, // Allow any entry
                maxTags: 15,
                dropdown: {
                    enabled: 0 // Set to 1 or more if you want suggestions
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.needs-validation');

            form.addEventListener('submit', function(event) {
                // Update all CKEditor instances before validation
                for (let instanceName in CKEDITOR.instances) {
                    CKEDITOR.instances[instanceName].updateElement();
                }

                // Now run normal Bootstrap validation
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            });
        });
    </script>
@endsection
