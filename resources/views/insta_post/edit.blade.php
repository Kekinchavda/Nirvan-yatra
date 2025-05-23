@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Edit image</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="#">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Home') }}">
                                    </use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">Edit Image</li>
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
                    <div class="card-header pb-0">
                        <h4>Image</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row g-3 needs-validation custom-input" method="POST"
                            action="{{ route('insta-post.update', $image) }}" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" multiple required>
                                <div class="invalid-tooltip">
                                    Please select a valid image.
                                </div>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="#" class="view-logo" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('storage/' . $image->image) }}">
                                Show Logo
                            </a>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
