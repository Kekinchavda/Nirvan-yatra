@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Location</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="#">
                                <svg class="svg-color">
                                    <use href="https://larathemes.pixelstrap.com/edmin/assets/svg/iconly-sprite.svg#Home">
                                    </use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">Location</li>
                        <li class="breadcrumb-item active"><a href="{{ route('location.create') }}"
                                class="btn btn-primary btn-sm">Add
                                Location</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            @if (session('success'))
                <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
                    <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
                    <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ session('error') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($locations as $location)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $location->name }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"><a
                                                            href="{{ route('location.edit', ['id' => $location->id]) }}"><i
                                                                class="icon-pencil-alt"></i></a>
                                                    </li>
                                                    <li class="delete">
                                                        {{-- <a href=""><i class="icon-trash"></i></a> --}}
                                                        <form action="{{ route('location.delete', $location->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
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
        <!-- Scroll - vertical dynamic Ends-->
    </div>
    <!-- Container-fluid starts-->
@endsection
