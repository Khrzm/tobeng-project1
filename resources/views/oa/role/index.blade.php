@extends('layouts.layout1')

@section('css_section')

@endsection

@section('page_title')
    Role Manager
@endsection

@section('sidebar-size', 'collapsed')
@section('url_back', url('pmo/master/tpp'))

@section('content')
    <div class="">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="">
                    <div class="card">
                        <div class="card-body border-bottom">
                            <h4 class="card-title mb-0">Search & Filter</h4>
                            <div class="row">
                                <div class="col-lg my-1">
                                    <label class="form-label" for="select2-basic">Basic</label>
                                    <select class="select2 form-select">
                                        <option value="AK">Alaska</option>
                                        <option value="AK">Alaska</option>
                                    </select>
                                </div>
                                <div class="col-lg my-1">
                                    <label class="form-label" for="select2-basic">Basic</label>
                                    <select class="select2 form-select">
                                        <option value="AK">Alaska</option>
                                    </select>
                                </div>
                                <div class="col-lg my-1">
                                    <label class="form-label" for="select2-basic">Basic</label>
                                    <select class="select2 form-select">
                                        <option value="AK">Alaska</option>
                                    </select>
                                </div>
                                <div class="col-lg-auto my-1 d-flex">
                                    <button class="btn btn-primary mt-auto">
                                        <i data-feather="filter" class="ficon me-1"></i>
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th width="10%">Action</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>

    <!-- add new card modal  -->
    <div class="modal fade" id="frmbox" tabindex="-1" aria-labelledby="frmbox-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="frmbox-title">Form Role</h1>

                    <!-- form -->
                    <form id="frm" class="row gy-1 gx-2 mt-75">
                        @csrf
                        <input type="hidden" name="inp[role_id]">
                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Role Name</label>
                            <div class="input-group input-group-merge">
                                <input id="role_name" name="inp[role_name]" class="form-control add-credit-card-mask" type="text"/>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary me-1 mt-1" onclick="save()">Submit</a>
                            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ add new card modal  -->
@endsection

@section('js_section')
    <script>
        var dTable = $('#table'),
            select = $('.select2')

        // List datatable
        $(function() {
            dTable = dTable.DataTable({
                ajax: {
                    url: "{{ url('api/role/dt') }}",
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    { data: 'action', name: 'action', orderable: false, searchable: false, className: 'text-center' },
                    { data: 'role_name', name: 'role_name' }
                ],
                order: [
                    [1, 'desc']
                ],
                dom:
                    '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                    '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                    '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                    '>t' +
                    '<"d-flex justify-content-between mx-2 row mb-1"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    '>',
                // Buttons with Dropdown
                buttons: [{
                        extend: 'collection',
                        className: 'btn btn-sm btn-outline-secondary dropdown-toggle me-2',
                        text: feather.icons['external-link'].toSvg({
                            class: 'font-small-4 me-50'
                        }) + 'Export',
                        buttons: [{
                                extend: 'print',
                                text: feather.icons['printer'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Print',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'csv',
                                text: feather.icons['file-text'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Csv',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'excel',
                                text: feather.icons['file'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Excel',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'pdf',
                                text: feather.icons['clipboard'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Pdf',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            },
                            {
                                extend: 'copy',
                                text: feather.icons['copy'].toSvg({
                                    class: 'font-small-4 me-50'
                                }) + 'Copy',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [1, 2, 3, 4, 5]
                                }
                            }
                        ],
                        init: function(api, node, config) {
                            $(node).removeClass('btn-secondary');
                            $(node).parent().removeClass('btn-group');
                            setTimeout(function() {
                                $(node).closest('.dt-buttons').removeClass('btn-group').addClass(
                                    'd-inline-flex mt-50');
                            }, 50);
                        }
                    },
                    {
                        text: 'Add New',
                        className: 'add-new btn btn-primary btn-sm',
                        attr: {
                            'data-bs-toggle': 'modal',
                            'data-bs-target': '#frmbox'
                        },
                        init: function(api, node, config) {
                            $(node).removeClass('btn-secondary');
                        }
                    }
                ],
                language: {
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                },
                initComplete: function() {
                    // do something after table initialization

                }
            });

            $('.dataTables_filter input[type=search]').attr('placeholder', 'Pencarian').attr('class', 'form-control form-control-sm');
            $('.dataTables_filter select[name=table_length]').attr('class', 'form-select form-select-sm');
        })

        function save() {
            if ($("#frm").valid()) {
                var formData = new FormData($('#frm')[0]);

                $.ajax({
                    url: '{{ url("api/role") }}',
                    type: 'post',
                    data: formData,
                    contentType: false, //untuk upload image
                    processData: false, //untuk upload image
                    timeout: 300000, // sets timeout to 3 seconds
                    dataType: 'json',
                    success: function(e) {
                        if (e.status == 'success') {
                            alert(e.message)
                            $("#frmbox").modal('hide');
                            dTable.draw();
                        } else {
                            alert(e.message);
                        }
                    }
                });
            }
        }

        function edit(id) {
        $.ajax({
            url: '{{ url("api/role/") }}' + '/' + id,
            type: 'get',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(e) {
                $.each(e, function(key, value) {
                    if ($('#' + key).hasClass("select2")) {
                        $('#' + key).val(value).trigger('change');
                        $('#' + key).attr('disabled', true);
                    } else if ($('input[type=radio]').hasClass(key)) {
                        if (value != "") {
                            $("input[name='inp[" + key + "]'][value='" + value + "']").prop('checked', true);
                            $.uniform.update();
                        }
                    } else if ($('input[type=checkbox]').hasClass(key)) {
                        if (value != null) {
                            var temp = value.split('; ');
                            for (var i = 0; i < temp.length; i++) {
                                $("input[name='inp[" + key + "][]'][value='" + temp[i] + "']").prop('checked', true);
                            }
                            $.uniform.update();
                        }
                    } else {
                        $('#' + key).val(value);
                    }
                });

                $("#frmbox").modal('show');
            }
        });
    }

    function del(id) {
        if (confirm('Apakah anda yakin akan menghapus data ini?')) {
            $.ajax({
                url: '{{ url("api/role/") }}' + '/' + id,
                type: 'delete',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(e) {
                    if (e.status == 'success') {
                        alert(e.message)
                        dTable.draw();
                    } else {
                        alert(e.message);
                    }
                }
            });
        }
    }
    </script>
@endsection
