
@extends('layouts.main', [
    'vendor' => ['datatables']
])

@section('title', 'Customer')

@section('content')
    <?php /*<x-alert message="Hoorrayyyy" type="danger" title="Error Cooy !!!" />*/ ?>
    @if ($message = Session::get('success'))
    <x-sweetalert title="Success" text="{{ $message }}" icon="success" />
    @endif
    <div class="card">
        <div class="card-header header-elements">
            <h2 class="mt-3 me-4 mb-3 text-muted fw-light">Customer</h2>
            <div class="card-title-elements">
                <a href="{{ route('customer.create') }}" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Add New</a>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table id="table" class="table border-top table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th style="width:15px">#</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="100" class="p-5 text-center">Loading...</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            table = $('#table').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'POST',
                'orderClasses': false,
                'deferRender': true,
                'ajax': {
                    'url':'{{ url('customer') }}',
                    'type': 'POST',
                    'data': {
                        '_token': '{{ csrf_token() }}',
                    },
                },
                'columns': [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'CustName' },
                    { data: 'CustContactName'},
                    { data: 'CustEmail'},
                    { data: 'CustMobile'},
                    { data: 'created_at' },
                ],
                'lengthMenu': [ 10, 20, 50, 100 ],
                'order': [[1, 'asc']],
                'columnDefs': [{
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, full, meta) {
                        return (
                        '<div class="d-inline-block">' +
                        '<a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>' +
                        '<ul class="dropdown-menu dropdown-menu-end m-0">' +
                        '<li><a href="javascript:;" class="dropdown-item">Show</a></li>' +
                        '<li><a href="javascript:;" class="dropdown-item">Update</a></li>' +
                        '<div class="dropdown-divider"></div>' +
                        '<li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>' +
                        '</ul>' +
                        '</div>' +
                        '<a href="{{ route("customer.edit") }}/'+full.CustID+'" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-edit"></i></a>'
                        );
                    }
                }],
            });

            $('.dataTables_filter input').unbind();
            $('.dataTables_filter input').keyup(function(e){
                if ( e.keyCode == 13 ){
                    table.search( this.value ).draw();
                }
            });
        });
    </script>
@endpush