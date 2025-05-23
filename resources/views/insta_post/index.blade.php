@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Instagram Image</h3>
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
                        <li class="breadcrumb-item active">Instagram Image</li>
                        <li class="ms-2">
                            <a href="{{ route('insta-post.create') }}" class="btn btn-primary btn-sm">Add Image
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
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $image)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('storage/' . $image->image) }}" alt="Image"
                                                    data-bs-toggle="modal" data-bs-target="#imageModal" class="post_img"
                                                    data-bs-image="{{ asset('storage/' . $image->image) }}"></td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"><a
                                                            href="{{ route('insta-post.edit', $image->id) }}"><i
                                                                class="icon-pencil-alt"></i></a>
                                                    </li>
                                                    <li class="delete">
                                                        <form action="{{ route('insta-post.destroy', $image->id) }}"
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" alt="insta image" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
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

        // When any image with data-bs-toggle="modal" is clicked
        $('[data-bs-toggle="modal"]').click(function() {
            // Get the image source from the clicked image's data-bs-image attribute
            var imageSrc = $(this).data('bs-image');

            // Set the image source in the modal
            $('#modalImage').attr('src', imageSrc);
        });
    </script>
@endsection
