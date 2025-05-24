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
                        <li class="breadcrumb-item active"><a href="{{ route('tour-type.create') }}"
                                class="btn btn-primary btn-sm">Add
                                Tour Type</a>
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
                                        <th>Name</th>
                                        <th>Order Number</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tourTypes as $tourType)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tourType->name }}</td>
                                            <td>
                                                <input type="number" class="order-input" data-id="{{ $tourType->id }}"
                                                    value="{{ $tourType->order_number }}">
                                            </td>
                                            <td>
                                                <div class="flex-grow-1 icon-state switch-outline">
                                                    <label class="switch">
                                                        <input type="checkbox" class="status-toggle"
                                                            data-id="{{ $tourType->id }}"
                                                            {{ $tourType->status === 'active' ? 'checked' : '' }}><span
                                                            class="switch-state bg-primary"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"><a
                                                            href="{{ route('tour-type.edit', $tourType->id) }}"><i
                                                                class="icon-pencil-alt"></i></a>
                                                    </li>
                                                    <li class="delete">
                                                        <form action="{{ route('tour-type.destroy', $tourType->id) }}"
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

        // for status active or inactive
        $(document).ready(function() {
            $('.status-toggle').on('change', function() {
                var isChecked = $(this).is(':checked');
                var id = $(this).data('id');

                $.ajax({
                    url: '/tour-type/toggle-status/' + id,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: isChecked ? 'active' : 'inactive'
                    },
                    success: function(response) {
                        toastr.success(response.message);
                    },
                    error: function() {
                        toastr.error('Something went wrong');
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.order-input').forEach(function(input) {
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();

                        const id = this.dataset.id;
                        const newValue = this.value;

                        fetch(`/update-order-number/${id}`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').content
                                },
                                body: JSON.stringify({
                                    order_number: newValue
                                })
                            })
                            .then(res => res.json())
                            .then(data => {
                                if (data.success) {
                                    toastr.success('Updated successfully');
                                } else {
                                    toastr.error('Update failed');
                                }
                            })
                            .catch(err => {
                                console.error(err);
                                toastr.error('Error updating value');
                            });
                    }
                });
            });
        });
    </script>
@endsection
