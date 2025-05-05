@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Trip Details</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Home') }}">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Trip Details</li>
                        <li class="ms-2">
                            <a href="{{ route('tour.create') }}" class="btn btn-primary btn-sm">Add Details
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
            @if (session('message'))
                <div class="toastr-message d-none" data-type="{{ session('type') }}">
                    {{ session('message') }}
                </div>
            @endif
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Feature Image</th>
                                        <th>Location</th>
                                        <th>Days</th>
                                        <th>Nights</th>
                                        <th>Rate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tours as $index => $tour)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td
                                                style="width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                {{ $tour->title }}
                                            </td>
                                            <td
                                                style="width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                {{ $tour->slug }}
                                            </td>
                                            <td>
                                                @if ($tour->feature_image)
                                                    <img src="{{ asset('storage/' . $tour->feature_image) }}" width="150"
                                                        alt="Image" data-bs-toggle="modal" data-bs-target="#imageModal"
                                                        data-bs-image="{{ asset('storage/' . $tour->feature_image) }}">
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $tour->location }}</td>
                                            <td>{{ $tour->days }}</td>
                                            <td>{{ $tour->nights }}</td>
                                            <td>₹{{ $tour->rate }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit" style="margin-right: 10px;">
                                                        <a href="{{ route('tour.edit', ['id' => $tour->id]) }}">
                                                            <i class="icon-pencil-alt"></i>
                                                        </a>
                                                    </li>
                                                    <li class="delete" style="margin-right: 10px;">
                                                        <form action="{{ route('tour.delete', $tour->id) }}" method="POST"
                                                            class="delete-form d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn-delete"
                                                                style="border: none; background: none; padding: 0; color: inherit; cursor: pointer;">
                                                                <i class="icon-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li class="view show-tour-view">
                                                        <a data-bs-toggle="modal" class="cursor-pointer"
                                                            data-bs-target=".show-data-of-tour-modal-xl"
                                                            data-id="{{ $tour->id }}">
                                                            <i class="icon-eye"></i>
                                                        </a>
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
            <!-- Zero Configuration  Ends-->
        </div>
        <!-- Scroll - vertical dynamic Ends-->
    </div>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="{{ isset($tour->title) }}" class="img-fluid rounded" />
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    {{-- modal for show data of tour --}}
    <div class="modal fade show-data-of-tour-modal-xl" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">@if(isset($tour)){{ $tour->title }}@endif</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->

                <div class="modal-body dark-modal">
                    <table class="table table-bordered">
                        <tbody>
                            <!-- Title -->
                            <tr>
                                <th width="30%">Title</th>
                                <td id="tourTitle"></td>
                            </tr>

                            {{-- from to --}}
                            <tr>
                                <th width="30%">from to</th>
                                <td id="tourFromTo"></td>
                            </tr>

                            <!-- pickup and drop location -->
                            <tr>
                                <th>pickup and drop location</th>
                                <td id="tourPickupDrop"></td>
                            </tr>

                            <!-- Slug -->
                            <tr>
                                <th>Slug</th>
                                <td id="tourSlug"></td>
                            </tr>

                            <!-- Location -->
                            <tr>
                                <th>Location</th>
                                <td id="tourLocation"></td>
                            </tr>

                            <!-- Activity -->
                            <tr>
                                <th>Activity</th>
                                <td id="tourActivity"></td>
                            </tr>

                            <!-- Duration -->
                            <tr>
                                <th>Duration</th>
                                <td id="tourDuration"></td>
                            </tr>

                            <!-- location coverd -->
                            <tr>
                                <th>Location Cover</th>
                                <td id="tourLocationCover"></td>
                            </tr>

                            <!-- Overview -->
                            <tr>
                                <th>Overview</th>
                                <td id="tourOverview">
                                </td>
                            </tr>

                            <!-- Highlights -->
                            <tr>
                                <th>Highlights</th>
                                <td id="tourHighlights"></td>
                            </tr>

                            <!-- Tour Rate -->
                            <tr>
                                <th>Tour Rate</th>
                                <td id="tourRate"></td>
                            </tr>

                            <!-- Itinerary -->
                            <tr>
                                <th>Itinerary</th>
                                <td>
                                    <div class="accordion" id="itineraryAccordion">
                                        @if(isset($tour))
                                            @if (!empty($tour->plan->itinerary))
                                                @foreach ($tour->plan->itinerary as $index => $itinerary)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                                                aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                                Day {{ $index + 1 }}: {{ $itinerary['title'] }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                                            aria-labelledby="heading{{ $index }}" data-bs-parent="#itineraryAccordion">
                                                            <div class="accordion-body">
                                                                {!! $itinerary['details'] !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>No itinerary available</p>
                                            @endif
                                        @endif
                                    </div>
                                </td>
                            </tr>

                            <!-- Included Amenities -->
                            <tr>
                                <th>Included Amenities</th>
                                <td id="includedAmenities">
                                </td>
                            </tr>

                            <!-- Not Included Amenities -->
                            <tr>
                                <th>Not Included Amenities</th>
                                <td id="notIncludedAmenities">
                                </td>
                            </tr>

                            <!-- Other charge -->
                            <tr>
                                <th>other charge</th>
                                <td id="tourOtherCharges">
                                </td>
                            </tr>

                            <!-- Feature Image -->
                            <tr>
                                <th>Feature Image</th>
                                <td id="tourImage">
                                </td>
                            </tr>

                            <!-- Things to carry -->
                            <tr>
                                <th>Things to carry</th>
                                <td id="tourThingsToCarry">
                                </td>
                            </tr>

                            <!-- terms and condition -->
                            <tr>
                                <th>Terms & Conditions</th>
                                <td id="tourTerms">
                                </td>
                            </tr>

                            <!-- note -->
                            <tr>
                                <th>note</th>
                                <td id="tourNote">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- Modal Body -->
            </div>
        </div>
    </div>
    {{-- modal for show data of tour --}}
@endsection

@section('script')

    <script>
        $('.btn-delete').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');
            Swal.fire({
                title: 'Wait! Are you sure?',
                text: "Deleting this can't be undone. Please confirm your action.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
    <script>
        // When any image with data-bs-toggle="modal" is clicked
        $('[data-bs-toggle="modal"]').click(function () {
            // Get the image source from the clicked image's data-bs-image attribute
            var imageSrc = $(this).data('bs-image');

            // Set the image source in the modal
            $('#modalImage').attr('src', imageSrc);
        });
    </script>

    <script>
        $(document).ready(function () {
            // When the view button is clicked
            $('a[data-bs-toggle="modal"]').click(function () {
                var tourId = $(this).data('id');  // Get the tour ID
                // Make an AJAX request to fetch the tour details
                $.ajax({
                    url: '/tour/' + tourId, // Your route to get tour details
                    method: 'GET',
                    success: function (data) {
                        // Basic fields
                        $('#tourTitle').text(data.title);
                        $('#tourSlug').text(data.slug);
                        $('#tourLocation').text(data.location);
                        $('#tourActivity').text(data.activity_type);
                        $('#tourDuration').text(data.days + ' days / ' + data.nights + ' nights');
                        $('#tourOverview').text(data.overview);
                        $('#tourRate').text(data.rate);
                        $('#tourPickupDrop').text(data.pickup_drop_location || 'N/A');
                        $('#tourFromTo').text(data.from_to || 'N/A');

                        // Highlights
                        if (Array.isArray(data.highlights) && data.highlights.length > 0) {
                            let highlightList = data.highlights.map(h => `<li>${h}</li>`).join('');
                            $('#tourHighlights').html(`<ol>${highlightList}</ol>`);
                        } else {
                            $('#tourHighlights').html('<p>No highlights available</p>');
                        }

                        // Feature image
                        if (data.feature_image) {
                            $('#tourImage').html('<img src="' + data.feature_image + '" class="img-fluid" style="max-width: 200px;">');
                        } else {
                            $('#tourImage').html('<p>No feature image available</p>');
                        }
                        if (Array.isArray(data.locationCover)) {
                            const locationList = data.locationCover.join(', ');
                            $('#tourLocationCover').text(locationList);
                        } else {
                            $('#tourLocationCover').text('No locations available');
                        }
                        // Itinerary
                        var itineraryHtml = '';
                        if (data.itinerary && data.itinerary.length > 0) {
                            data.itinerary.forEach(function (item, index) {
                                itineraryHtml += `
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading${index}">
                                                                    <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#collapse${index}"
                                                                        aria-expanded="false" aria-controls="collapse${index}">
                                                                        Day ${index + 1}: ${item.title}
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse${index}" class="accordion-collapse collapse"
                                                                    aria-labelledby="heading${index}" data-bs-parent="#itineraryAccordion">
                                                                    <div class="accordion-body">
                                                                        ${item.details}
                                                                    </div>
                                                                </div>
                                                            </div>`;
                            });
                            $('#itineraryAccordion').html(itineraryHtml);
                        } else {
                            $('#itineraryAccordion').html('<p>No itinerary available</p>');
                        }

                        // Included amenities
                        if (data.included_amenities && data.included_amenities.length > 0) {
                            var includedHtml = '';
                            data.included_amenities.forEach(function (item) {
                                includedHtml += '<li>' + item + '</li>';
                            });
                            $('#includedAmenities').html('<ol>' + includedHtml + '</ol>');
                        } else {
                            $('#includedAmenities').html('<p>No amenities available</p>');
                        }

                        // Not included amenities
                        if (data.not_included_amenities && data.not_included_amenities.length > 0) {
                            var notIncludedHtml = '';
                            data.not_included_amenities.forEach(function (item) {
                                notIncludedHtml += '<li>' + item + '</li>';
                            });
                            $('#notIncludedAmenities').html('<ol>' + notIncludedHtml + '</ol>');
                        } else {
                            $('#notIncludedAmenities').html('<p>No amenities available</p>');
                        }
                        // Optional fields
                        if (Array.isArray(data.other_charges) && data.other_charges.length > 0) {
                            let chargesHtml = data.other_charges.map(item => `<li>${item}</li>`).join('');
                            $('#tourOtherCharges').html(`<ol>${chargesHtml}</ol>`);
                        } else {
                            $('#tourOtherCharges').html('<p>No other charges available</p>');
                        }

                        $('#tourThingsToCarry').html(data.things_to_carry || '<p>N/A</p>');
                        $('#tourTerms').html(data.terms_conditions || '<p>N/A</p>');
                        $('#tourNote').html(data.note || '<p>N/A</p>');

                    }
                });
            });
        });

    </script>
@endsection