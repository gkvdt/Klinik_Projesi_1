@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Prescription_active').addClass('active') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Prescriptions</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Prescriptions</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="btn btn-white btn-sm text-left mr-2">
                            <i class="ti-filter text-danger pr-2"></i>
                            <input type="text" class="table-date-range">
                        </div>
                        <div class="dropdown d-inline-block mr-2">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                            <ul class="dropdown-menu dropdown-menu-right export-button">
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                            </ul>
                        </div>
                        <a href="{{url('Prescription_Add')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> New Prescription</a>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive" data-name="appointments">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-middle table-bordered table-striped datatable-table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 96px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Patient: activate to sort column ascending" style="width: 183px;">Patient</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Doctor: activate to sort column ascending" style="width: 178px;">Doctor</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Appointment ID: activate to sort column ascending" style="width: 321px;">Appointment ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 71px;"></th></tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last disabled" id="DataTables_Table_0_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
            
            <script>
                $(document).ready(function () {
                    $('.table-date-range').daterangepicker({
                        autoApply: false,
                        alwaysShowCalendars: true,
                        opens: 'left',
                        applyButtonClasses: 'btn-danger',
                        cancelClass: 'btn-white',
                        locale: {
                            format: $('.common_daterange_format').val(),
                            separator: " => ",
                        },
                        startDate: "18-02-2020",
                        endDate: "18-02-2020",
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Tomorrow': [moment().add(1, 'days'), moment().add(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                            'All Time': [moment('2015-01-01'), moment().add(30, 'days')]
                        },
                    });

                    $('.table-date-range').on('apply.daterangepicker', function(ev, picker) {
                        window.location.replace('http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescriptions'+'&start='+picker.startDate.format('YYYY-MM-DD')+'&end='+picker.endDate.format('YYYY-MM-DD'));
                    });
                });
            </script>
            
            <!-- Delete Modal -->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Are you sure you want to delete?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescription/delete" class="delete-card-button" method="post" siq_id="autopick_9904">
                                <input type="hidden" value="" class="delete-id" name="id">
                                <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
