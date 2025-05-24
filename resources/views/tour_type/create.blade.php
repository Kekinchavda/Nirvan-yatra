@extends('admin_pannel.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Tour Type</h3>
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
                        <li class="breadcrumb-item active">Tour Type</li>
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
                        <h4>Tour Type</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form row g-3 needs-validation custom-input" method="POST"
                            action="{{ route('tour-type.store') }}" novalidate="">
                            @csrf
                            <div class="col-md-4 position-relative">
                                <label class="form-label" for="validationTooltip01">name</label>
                                <input class="form-control" id="validationTooltip01" type="text" placeholder="Tour Type"
                                    required="" name="name" value="{{ old('name') }}">
                                <div class="invalid-tooltip">
                                    Please enter a valid name.
                                </div>
                                @error('name')
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
@endsection
