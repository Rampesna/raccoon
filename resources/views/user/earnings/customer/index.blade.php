@extends('layouts.master')
@section('title', __('titles.earnings.customers.index'))
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <div class="row">
        <div class="col-xl-4">
            <a href="{{ route('user.customer.create') }}" class="btn btn-success">Yeni Müşteri Oluştur</a>
        </div>
        <div class="col-xl-4"></div>
        <div class="col-xl-4 text-right">
            <div class="form-group">
                <label for="company_id"></label>
                <select name="company_id" id="company_id" class="selectpicker" data-live-search="true">
                    @foreach($companies as $company)
                        <option @if($company->id == $company_id) selected @endif value="{{ \Illuminate\Support\Facades\Crypt::encrypt($company->id) }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body" >
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="raccoon">
                                <table class="table table-hover" id="list">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>@lang('user.earnings.customer.index.table.columns.taxpayer.title')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.code')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.title')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.name')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.surname')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.tax_office')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.tax_number')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.email')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.phone_number')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.balance')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.starting_balance')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.starting_balance_date')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.iban')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.currency_type')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.due_date')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.discount_rate')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.risk_limit')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customers as $customer)
                                        <tr>
                                            <td class="text-left">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-ver"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-item">
                                                                <a href="#"
                                                                   data-toggle="modal"
                                                                   data-target="#EditModal"
                                                                   class="navi-link edit">
                                                                    <span class="navi-icon">
                                                                        <i class="fa fa-edit"></i>
                                                                    </span>
                                                                    <span class="navi-text">Düzenle</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#"
                                                                   data-toggle="modal"
                                                                   data-target="#DeleteModal"
                                                                   class="navi-link delete">
                                                                    <span class="navi-icon">
                                                                        <i class="fa fa-trash-alt text-danger"></i>
                                                                    </span>
                                                                    <span class="navi-text text-danger">Sil</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span style="color: {{ $customer->taxpayer == 1 ? 'green' : 'red' }}">
                                                    @if($customer->taxpayer == 1)
                                                        {{ __('user.earnings.customer.index.table.columns.taxpayer.yes') }}
                                                    @else
                                                        {{ __('user.earnings.customer.index.table.columns.taxpayer.no') }}
                                                    @endif
                                                </span>
                                            </td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->code }}</td>
                                            <td>{{ $customer->title }}</td>
                                            <td>{{ $customer->surname }}</td>
                                            <td>{{ $customer->tax_office }}</td>
                                            <td>{{ $customer->tax_number }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->phone_number }}</td>
                                            <td>{{ $customer->balance }}</td>
                                            <td>{{ $customer->starting_balance }}</td>
                                            <td>{{ $customer->starting_balance_date }}</td>
                                            <td>{{ $customer->iban }}</td>
                                            <td>{{ $customer->currency_type }}</td>
                                            <td>{{ $customer->due_date }}</td>
                                            <td>{{ $customer->discount_rate }}</td>
                                            <td>{{ $customer->risk_limit }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>@lang('user.earnings.customer.index.table.columns.taxpayer.title')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.code')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.title')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.name')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.surname')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.tax_office')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.tax_number')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.email')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.phone_number')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.balance')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.starting_balance')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.starting_balance_date')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.iban')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.currency_type')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.due_date')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.discount_rate')</th>
                                        <th>@lang('user.earnings.customer.index.table.columns.risk_limit')</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css"/>

@stop

@section('page-script')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/datatables/extensions/buttons.js?v=7.0.3') }}"></script>
{{--    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>--}}

    <script>
        var table = $('#list').DataTable({
            language: {
                info: "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                infoEmpty: "Gösterilecek Hiç Kayıt Yok.",
                loadingRecords: "Kayıtlar Yükleniyor.",
                zeroRecords: "Tablo Boş",
                search: "Arama:",
                infoFiltered: "(Toplam _MAX_ Kayıttan Filtrelenenler)",
                lengthMenu: "Sayfa Başı _MENU_ Kayıt Göster",
                sProcessing: "Yükleniyor...",
                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
                select: {
                    rows: {
                        "_": "%d kayıt seçildi",
                        "0": "",
                        "1": "1 kayıt seçildi"
                    }
                },
                buttons: {
                    print: {
                        title: 'Yazdır'
                    }
                }
            },

            initComplete: function () {
                var r = $('#list tfoot tr');
                $('#list thead').append(r);
                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement('input');
                    input.className = 'form-control';
                    $(input).appendTo($(column.footer()).empty())
                        .on('change', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                });
            },

            dom: 'Bfrtipl',

            buttons: [
                {
                    extend: 'collection',
                    text: '<i class="fa fa-download"></i> Dışa Aktar',
                    buttons: [
                        {
                            extend: 'pdf',
                            text: '<i class="fa fa-file-pdf"></i> PDF İndir'
                        },
                        {
                            extend: 'excel',
                            text: '<i class="fa fa-file-excel"></i> Excel İndir'
                        }
                    ]
                },
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel"></i> Excel İndir'
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> Yazdır'
                },
                {
                    extend: 'colvis',
                    text: '<i class="fa fa-columns"></i> Sütunlar'
                }
            ],

            columnDefs: [
                {
                    targets: 3,
                    width: "3%",
                    orderable: false,
                    order: false
                },
            ],

            responsive: true,
            colReorder: true,
            rowReorder: false,
            stateSave: true,
            select: false
        });

        $("#company_id").change(function () {
            window.location.replace("{{ route('user.customer.index') }}/" + $(this).val());
        });
    </script>
@stop
