@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Edit Destination</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="#">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Home') }}">
                                    </use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">Edit Destination</li>
                        <li class="ms-2">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm" title="Back to location">
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
                    <div class="card-header pb-0">
                        <h4>Destination</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row g-3 needs-validation custom-input" method="POST"
                            action="{{ route('destination.update', ['id' => $destination->id]) }}"
                            enctype="multipart/form-data" novalidate>

                            @csrf
                            @method('PUT')

                            {{-- Feature Image Upload --}}
                            <div class="col-md-6">
                                <label class="form-label">Feature Image</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-image"></i></span>
                                    <input class="form-control" type="file" name="image" accept="image/*">
                                </div>
                                <small class="text-muted">Recommended size: 800x600px</small>

                                {{-- Current Image Preview --}}
                                @if ($destination->feature_image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $destination->feature_image) }}" alt="Current Image"
                                            style="max-width: 150px; height: auto;">
                                    </div>
                                @endif
                            </div>

                            {{-- Submit --}}
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
