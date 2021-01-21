@extends('layouts.master')
@section('title', __('titles.expenses.suppliers.index'))
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <div class="row">
        <div class="col-xl-12 text-right">
            <div class="form-group">
                <label for="company_id"></label>
                <select name="company_id" id="company_id" class="selectpicker" data-live-search="true">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body" >
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="raccoon">
                                <table class="table table-hover" id="suppliers">
                                    <thead>
                                    <tr>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>E-posta</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>E-posta</th>
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
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

    <script>

        var company = $("#company_id");
        var suppliers = $("#suppliers");

        suppliers.DataTable({

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
                }
            },
            dom: 'Bfrtipl',

            buttons: [
                'export', 'copy',
                {
                    text: 'Yazdır',
                    extend: 'print',
                    autoPrint: true
                }
            ],

            responsive: true,

            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('example') }}',
                data: function (d) {
                    return $.extend({}, d, {
                        company_id: $("#company_id option:selected").val()
                    });
                }
            },
            columns: [
                {data: 'name', name: 'name'},
                {data: 'surname', name: 'surname'},
                {data: 'email', name: 'email'}
            ],
            initComplete: function () {
                var r = $('#suppliers tfoot tr');
                $('#suppliers thead').append(r);
                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement('input');
                    input.className = 'form-control';
                    $(input).appendTo($(column.footer()).empty())
                        .on('change', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                });
            }
        });

        company.change(function () {
            suppliers.DataTable().ajax.reload();
        });
    </script>
@stop
