@extends('layout.app')

@section('title', 'Usuarios')


@push('endbody')
 <script src="{{asset('js/table/user.js')}}"></script>
@endpush

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">DataTables /</span> Basic
    </h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-start">
                        <h5 class="card-title mb-0">DataTable with Buttons</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons"> <button
                                class="dt-button buttons-collection btn btn-label-primary dropdown-toggle me-2" tabindex="0"
                                aria-controls="DataTables_Table_0" type="button" aria-haspopup="true"
                                aria-expanded="false"><span><i class="bx bx-export me-sm-2"></i> <span
                                        class="d-none d-sm-inline-block">Export</span></span></button> <button
                                class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                                type="button"><span><i class="bx bx-plus me-sm-2"></i> <span
                                        class="d-none d-sm-inline-block">Add New Record</span></span></button> </div>
                    </div>
                </div>
                <div class="body">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="datatables-basic table border-top" id="table-user">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
