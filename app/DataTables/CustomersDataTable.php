<?php

namespace App\DataTables;

use App\Models\Customer;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CustomersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('action', function ($row) {
            return '
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
                    </div>';
        });

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Customer $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Customer $model)
    {
        $company = auth()->user()->companies()->find($this->company_id);
        return $customers = $company->customers->select(
            'id',
            'name',
            'surname',
            'email'
        )->where('type_id', 0);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('customers-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('colvis')->text('<i class="fa fa-columns"></i> Sütun Seçimi'),
                Button::make('export')->text('<i class="fa fa-download"></i> Dışa Aktar'),
                Button::make('print')->text('<i class="fa fa-print"></i> Yazdır'),
                Button::make('reset')->text('<i class="fa fa-redo"></i> Sıfırla'),
            )->parameters([
                'dom' => 'Bfrtip',
                'stateSave' => true,
                'colReorder' => true,
                'rowReorder' => true,
                'language' => [
                    'info' => "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                    'infoEmpty' => "Gösterilecek Hiç Kayıt Yok.",
                    'loadingRecords' => "Kayıtlar Yükleniyor.",
                    'zeroRecords' => "Tablo Boş",
                    'search' => "Arayın",
                    'infoFiltered' => "(Toplam _MAX_ Kayıttan Filtrelenenler)",
                    'lengthMenu' => "Sayfa Başı _MENU_ Kayıt Göster",
                    'sProcessing' => "Yükleniyor...",
                    'paginate' => [
                        'first' => "İlk",
                        'previous' => "Önceki",
                        'next' => "Sonraki",
                        'last' => "Son"
                    ]
                ],
                'columnDefs' => [
                    [
                        "width" => "3%",
                        "targets" => 4,
                        "orderable" => false
                    ]
                ],
                'initComplete' => "function () {
                var r = $('#customers-table tfoot tr');
                $('#customers-table thead').append(r);
                            this.api().columns().every(function () {
                                var column = this;
                                var input = document.createElement('input');
                                input.className = 'form-control';
                                $(input).appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }",
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->visible(false)->searchable(false)->printable(false)->exportable(false),
            Column::make('name')->title('Ad'),
            Column::make('surname')->title('Soyad'),
            Column::make('email')->title('E-posta'),
            Column::make('action')->title('')->className('text-right')->printable(false)->exportable(false),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Customers_' . date('YmdHis');
    }
}
