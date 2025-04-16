@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Edit {{ $tour->title }} Details</h3>
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
                                <form method="POST" action="{{ route('tour.update', ['id' => $tour->id]) }}"
                                    enctype="multipart/form-data" class="tab-content dark-field"
                                    id="horizontal-wizard-tabContent" novalidate="">
                                    @csrf
                                    @method('PUT')

                                    <!-- Step 1: Basic Info -->
                                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Tour Title<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="tour_title" class="form-control"
                                                    placeholder="Enter Tour Title" required
                                                    value="{{ old('tour_title', $tour->title) }}">
                                            </div>
                                            @error('tour_title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Feature Image</label>
                                                <input type="file" name="feature_image" class="form-control"
                                                    value="{{ old('feature_image', $tour->feature_image) }}">
                                                <a href="#" class="mt-5" data-bs-toggle="modal"
                                                    data-bs-target="#imageModal">show image</a>
                                            </div>
                                            @error('feature_image')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- daily itinerary --}}
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Tour Slug<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="slug" class="form-control"
                                                    placeholder="Enter slug" required
                                                    value="{{ old('slug', $tour->slug) }}">
                                            </div>
                                            @error('slug')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
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
                                                    value="{{ old('location', $tour->location) }}">
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Activity<span
                                                        class="font-danger">*</span></label>
                                                <input type="text" name="activity" class="form-control"
                                                    placeholder="Enter Tour activity" required
                                                    value="{{ old('activity_type', $tour->activity_type) }}">
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <label class="form-label">Days<span class="font-danger">*</span></label>
                                                <input type="text" name="days" class="form-control"
                                                    placeholder="Enter Tour Days" required
                                                    value="{{ old('days', $tour->days) }}">
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Nights<span class="font-danger">*</span></label>
                                                <input type="text" name="nights" class="form-control"
                                                    placeholder="Enter Tour Nights" required
                                                    value="{{ old('nights', $tour->nights) }}">
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Trip Overview<span
                                                        class="font-danger">*</span></label>
                                                <textarea name="overview" class="form-control" rows="1" placeholder="Enter trip overview">{{ old('overview', $tour->overview ?? '') }}</textarea>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Highlights</label>
                                                <div id="highlight-wrapper">
                                                    @forelse ($overview->highlights as $index => $highlight)
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="highlight_list[]"
                                                                class="form-control me-2" value="{{ $highlight }}"
                                                                placeholder="Enter highlight">
                                                            @if ($index === 0)
                                                                <button type="button" class="btn btn-success btn-sm"
                                                                    onclick="addHighlightField()">
                                                                    +
                                                                </button>
                                                            @else
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                    onclick="removeHighlightField(this)">
                                                                    −
                                                                </button>
                                                            @endif
                                                        </div>
                                                    @empty
                                                        {{-- Default field if no highlights exist --}}
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="highlight_list[]"
                                                                class="form-control me-2" placeholder="Enter highlight">
                                                            <button type="button" class="btn btn-success btn-sm"
                                                                onclick="addHighlightField()">
                                                                +
                                                            </button>
                                                        </div>
                                                    @endforelse
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
                                                    value="{{ old('rate', $tour->rate) }}">
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Included Amenities</label>
                                                <div id="included-wrapper">
                                                    @if (!empty($amenity->included_amenities))
                                                        @foreach ($amenity->included_amenities as $index => $included)
                                                            <div class="d-flex mb-2">
                                                                <input type="text" name="included_amenities[]"
                                                                    class="form-control me-2" value="{{ $included }}"
                                                                    placeholder="Enter amenity">
                                                                @if ($index === 0)
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        onclick="addAmenityField('included')">+</button>
                                                                @else
                                                                    <button type="button" class="btn btn-danger btn-sm"
                                                                        onclick="this.parentElement.remove()">−</button>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="included_amenities[]"
                                                                class="form-control me-2" placeholder="Enter amenity">
                                                            <button type="button" class="btn btn-success btn-sm"
                                                                onclick="addAmenityField('included')">+</button>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-sm-6">
                                                <label class="form-label">Not Included Amenities</label>
                                                <div id="not-included-wrapper">
                                                    @if (!empty($amenity->not_included_amenities))
                                                        @foreach ($amenity->not_included_amenities as $index => $notIncluded)
                                                            <div class="d-flex mb-2">
                                                                <input type="text" name="not_included_amenities[]"
                                                                    class="form-control me-2" value="{{ $notIncluded }}"
                                                                    placeholder="Enter amenity">
                                                                @if ($index === 0)
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        onclick="addAmenityField('not-included')">+</button>
                                                                @else
                                                                    <button type="button" class="btn btn-danger btn-sm"
                                                                        onclick="this.parentElement.remove()">−</button>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="not_included_amenities[]"
                                                                class="form-control me-2" placeholder="Enter amenity">
                                                            <button type="button" class="btn btn-success btn-sm"
                                                                onclick="addAmenityField('not-included')">+</button>
                                                        </div>
                                                    @endif
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
                                            {{-- Daily Itinerary --}}
                                            <div class="row mt-3" id="itinerary-wrapper">
                                                @if (!empty($plan->itinerary))
                                                    @foreach ($plan->itinerary as $index => $day)
                                                        <div class="col-xl-4 day-itinerary"
                                                            data-index="{{ $index }}">
                                                            <div class="card p-2 mb-3 shadow-sm position-relative">
                                                                @if ($index !== 0)
                                                                    <button type="button"
                                                                        class="btn-close position-absolute top-0 end-0 m-2"
                                                                        aria-label="Close"
                                                                        onclick="removeDayItinerary({{ $index }})"></button>
                                                                @endif

                                                                <label class="form-label">Day {{ $index + 1 }}
                                                                    Title</label>
                                                                <input type="text"
                                                                    name="itinerary[{{ $index }}][title]"
                                                                    class="form-control mb-2 day-title"
                                                                    value="{{ $day['title'] }}"
                                                                    placeholder="Enter title for Day {{ $index + 1 }}">

                                                                <label class="form-label">Details</label>
                                                                <textarea id="editor-{{ $index }}" name="itinerary[{{ $index }}][details]"
                                                                    class="form-control itinerary-editor day-details" rows="4"
                                                                    placeholder="Enter details for Day {{ $index + 1 }}">{{ $day['details'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    {{-- fallback Day 1 --}}
                                                    <div class="col-xl-4 day-itinerary" data-index="0">
                                                        <div class="card p-2 mb-3 shadow-sm position-relative">
                                                            <label class="form-label">Day 1 Title</label>
                                                            <input type="text" name="itinerary[0][title]"
                                                                class="form-control mb-2 day-title"
                                                                placeholder="Enter title for Day 1">

                                                            <label class="form-label">Details</label>
                                                            <textarea id="editor-0" name="itinerary[0][details]" class="form-control itinerary-editor day-details"
                                                                rows="4" placeholder="Enter details for Day 1"></textarea>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <button type="button" class="col-xl-4 btn btn-primary mt-3"
                                                onclick="addDayItinerary()">+ Add Day</button>

                                            {{-- daily itinerary --}}


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
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="{{ asset('storage/' . $tour->feature_image) }}" alt="{{ $tour->title }}"
                        class="img-fluid rounded" />
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
        <button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">−</button>`;

            wrapper.appendChild(div);
        }
    </script>
    <script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>

    <script>
        let dayCount = document.querySelectorAll('.day-itinerary').length || 1;

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
                        class="form-control mb-2 day-title" placeholder="Enter title for Day ${dayCount + 1}">
    
                    <label class="form-label">Details</label>
                    <textarea id="${editorId}" name="itinerary[${dayCount}][details]"
                        class="form-control itinerary-editor day-details" rows="4"
                        placeholder="Enter details for Day ${dayCount + 1}"></textarea>
                </div>`;

            wrapper.appendChild(col);

            // Wait for DOM update, then apply CKEditor
            setTimeout(() => {
                CKEDITOR.replace(editorId);
            }, 100);

            dayCount++;
        }

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

                const input = item.querySelector('input.day-title');
                const textarea = item.querySelector('textarea.day-details');
                const labels = item.querySelectorAll('label');

                if (labels.length > 0) labels[0].innerText = `Day ${i + 1} Title`;
                if (labels.length > 1) labels[1].innerText = `Details`;

                if (input) {
                    input.name = `itinerary[${i}][title]`;
                    input.placeholder = `Enter title for Day ${i + 1}`;
                }

                if (textarea) {
                    const oldId = textarea.id;
                    const newId = `editor-${i}`;

                    if (CKEDITOR.instances[oldId]) {
                        CKEDITOR.instances[oldId].destroy(true);
                    }

                    textarea.id = newId;
                    textarea.name = `itinerary[${i}][details]`;
                    textarea.placeholder = `Enter details for Day ${i + 1}`;

                    setTimeout(() => {
                        CKEDITOR.replace(newId);
                    }, 100);
                }

                const closeBtn = item.querySelector('button.btn-close');
                if (closeBtn) {
                    closeBtn.setAttribute("onclick", `removeDayItinerary(${i})`);
                }
            });

            dayCount = items.length;
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".itinerary-editor").forEach(el => {
                CKEDITOR.replace(el.id);
            });

            dayCount = document.querySelectorAll('.day-itinerary').length;
        });
    </script>
@endsection
