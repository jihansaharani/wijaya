@extends('Layout.admin')
@section('content')


<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Calon Karyawan</h4>

                </div>
                <div class="card-header">
                    <a href="{{ route('downloaddata') }}" class="btn btn-warning">Download Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAll"> </th> <!-- Select All Checkbox -->
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Asal Sekolah</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apply as $data)
                                <tr>
                                    <td><input type="checkbox" class="rowCheckbox"></td> <!-- Row Checkbox -->
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->name_sekolah }}</td>
                                    <td>
                                        INterview (menambah button kemudian muncul modal dan berisi
                                        keterangan kehadiran,(masih dipikir lag))
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('admin/admin/assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('admin/admin/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/admin/assets/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('admin/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('admin/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Kaiadmin JS -->
<script src="{{ asset('admin/admin/assets/js/kaiadmin.min.js') }}"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{ asset('admin/admin/assets/js/setting-demo2.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
            pageLength: 5,
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-select"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on("change", function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column
                                    .search(val ? "^" + val + "$" : "", true, false)
                                    .draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append(
                                    '<option value="' + d + '">' + d + "</option>"
                                );
                            });
                    });
            },
        });

        // Add Row
        $("#add-row").DataTable({
            pageLength: 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function() {
            $("#add-row")
                .dataTable()
                .fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action,
                ]);
            $("#addRowModal").modal("hide");
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   document.querySelectorAll('.rowCheckbox').forEach(function(checkbox) {
checkbox.addEventListener('change', function() {
    var allCheckboxes = document.querySelectorAll('.rowCheckbox');
    var allChecked = true;

    // Check if all row checkboxes are checked
    allCheckboxes.forEach(function(cb) {
        if (!cb.checked) {
            allChecked = false;
        }
    });

    // Set the "Select All" checkbox state
    document.getElementById('selectAll').checked = allChecked;
});
});
</script>

<script>
   document.getElementById('selectAll').addEventListener('change', function() {
var checkboxes = document.querySelectorAll('.rowCheckbox');
checkboxes.forEach(function(checkbox) {
    checkbox.checked = document.getElementById('selectAll').checked;
});
});

</script>
@endsection
