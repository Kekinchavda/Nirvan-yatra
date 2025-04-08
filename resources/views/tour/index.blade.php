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
                                        <th>Feature Image</th>
                                        <th>Location</th>
                                        <th>Days</th>
                                        <th>Night</th>
                                        <th>Tour Detail</th>
                                        {{-- <th>Per Day Rate</th> --}}
                                        <th>Tour Rate</th>
                                        <th>Overview of Trip</th>
                                        <th>Reviews</th>
                                        <th>Highlight List</th>
                                        <th>Tour Amenities</th>
                                        <th>Tour Plan</th>
                                        <th>Related Tour List</th>
                                        <!-- <th>Add a Review</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    @if (isset($activities))
                                        @foreach ($activities as $activity)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $activity->name }}</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a
                                                                href="{{ route('activity.edit', ['id' => $activity->id]) }}"><i
                                                                    class="icon-pencil-alt"></i></a>
                                                        </li>
                                                        <li class="delete">
                                                            <form action="{{ route('activity.delete', $activity->id) }}"
                                                                method="POST" class="delete-form d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn-delete"
                                                                    style="border: none; background: none; padding: 0; color: inherit; cursor: pointer;">
                                                                    <i class="icon-trash"></i>
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
    <!-- Container-fluid starts-->
@endsection

@section('script')
    <script>
        $('.btn-delete').on('click', function(e) {
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
@endsection
