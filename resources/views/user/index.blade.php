
@extends('layouts.main', [
    'vendor' => ['datatables']
])

@section('title', 'User')

@section('content')
    @if ($message = Session::get('success'))
    <x-sweetalert title="Wow, Great Job !!!" text="{{ $message }}" icon="success" />
    @endif
    <div class="card">
        <div class="card-header pb-0 d-flex align-items-center justify-content-between">
            <h2 class="mt-0 mb-0 me-4 text-muted fw-light">User</h2>
            <div class="card-title-elements">
                <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Add New</a>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table id="table" class="table border-top table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th style="width:15px">#</th>
                    <th>Name</th>
                    <th>Email</th>
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
                    'url':'{{ route('user.json') }}',
                    'type': 'POST',
                    'data': {
                        '_token': '{{ csrf_token() }}',
                    },
                },
                'columns': [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'name' },
                    { data: 'email'},
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
                        '<a href="'+full.edit_url+'" class="btn btn-sm btn-icon item-edit"><i class="fa-solid fa-pen-to-square"></i></a>' +
                        '<div class="d-inline-block">' +
                        '<a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>' +
                        '<ul class="dropdown-menu dropdown-menu-end m-0">' +
                        '<li><a href="'+full.show_url+'" class="dropdown-item">Show</a></li>' +
                        '<div class="dropdown-divider"></div>' +
                        '<form action="'+full.destroy_url+'" method="POST">' +
                        '<li><button type="submit" class="dropdown-item text-danger" onclick="this.form.submit()">Delete</button></li>' +
                        '@csrf @method("DELETE")' +
                        '</form>' +
                        '</ul>' +
                        '</div>'
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