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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Location</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row g-3 needs-validation custom-input" method="POST"
                            action="{{ route('location.store') }}" novalidate="">
                            @csrf
                            <div class="col-md-4 position-relative">
                                <label class="form-label" for="validationTooltip01">Title</label>
                                <input class="form-control" id="validationTooltip01" type="text" placeholder="Location"
                                    required="" name="name">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
