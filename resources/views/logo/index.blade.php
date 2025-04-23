@extends('admin_pannel.layout.app')
@section('content')
    {{-- <div class="container-fluid"> --}}
    <div class="container-fluid">
        @if (session('message'))
            <div class="toastr-message d-none" data-type="{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Logo</h3>
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
                        <li class="breadcrumb-item active">Logo</li>
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
                    {{-- <div class="card-header pb-0">
                            <h4>Logo</h4>
                        </div> --}}
                    <div class="card-body">
                        <label class="form-label">Logo <small class="text-muted">(Size: 632 x 260px)</small></label>

                        <form class="theme-form row g-3 needs-validation custom-input" enctype="multipart/form-data"
                            method="POST" action="{{ route('logo.storeOrUpdate') }}" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label">Header Logo</label>
                                <input type="file" name="header_logo" class="form-control">
                                <a href="#" class="mt-5 view-logo" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/' . $logos->header_logo) }}">
                                    Show Logo
                                </a>
                                <div class="invalid-tooltip">
                                    Please enter a valid logo.
                                </div>
                                @error('header_logo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Footer Logo</label>
                                <input type="file" name="footer_logo" class="form-control">
                                <a href="#" class="mt-5 view-logo" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/' . $logos->footer_logo) }}">
                                    Show Logo
                                </a>
                                <div class="invalid-tooltip">
                                    Please enter a valid logo.
                                </div>
                                @error('footer_logo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll - vertical dynamic Ends-->
    {{-- </div> --}}
    <!-- Container-fluid starts-->
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Logo Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="previewImage" src="" alt="Logo Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const previewImage = document.getElementById('previewImage');
            const logoLinks = document.querySelectorAll('.view-logo');

            logoLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const imageUrl = this.getAttribute('data-image');
                    previewImage.setAttribute('src', imageUrl);
                });
            });
        });
    </script>
@endsection
