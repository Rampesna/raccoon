@extends('layouts.master')
@section('title', __('titles.earnings.customers.create'))
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <form>
        @csrf
        <div class="row">
            <div class="col-xl-12 text-right">
                <button type="button" class="btn btn-success">@lang('user.earnings.customer.create.submit')</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label for="code">@lang('user.earnings.customer.create.code')</label>
                                    <input type="text" name="code" id="code" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <label for="title">@lang('user.earnings.customer.create.title')</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="name">@lang('user.earnings.customer.create.name')</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="surname">@lang('user.earnings.customer.create.surname')</label>
                                    <input type="text" name="surname" id="surname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="tax_office">@lang('user.earnings.customer.create.tax_office')</label>
                                    <input type="text" name="tax_office" id="tax_office" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="tax_number">@lang('user.earnings.customer.create.tax_number')</label>
                                    <input type="text" name="tax_number" id="tax_number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="email">@lang('user.earnings.customer.create.email')</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="phone_number">@lang('user.earnings.customer.create.phone_number')</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="balance">@lang('user.earnings.customer.create.balance')</label>
                                    <input type="text" name="balance" id="balance" class="form-control numberAndDot">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="starting_balance">@lang('user.earnings.customer.create.starting_balance')</label>
                                    <input type="text" name="starting_balance" id="starting_balance" class="form-control numberAndDot">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="starting_balance_date">@lang('user.earnings.customer.create.starting_balance_date')</label>
                                    <input type="date" name="starting_balance_date" id="starting_balance_date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label for="iban">@lang('user.earnings.customer.create.iban')</label>
                                    <input type="text" name="iban" id="iban" class="form-control" maxlength="26">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="currency_type">@lang('user.earnings.customer.create.currency_type')</label>
                                    <select name="currency_type" id="currency_type" class="form-control selectpicker">
                                        <option value="TRY" selected>TRY</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="GBP">GBP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="due_date">@lang('user.earnings.customer.create.due_date')</label>
                                    <input type="text" name="due_date" id="due_date" class="form-control onlyNumber" maxlength="26">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="discount_rate">@lang('user.earnings.customer.create.discount_rate')</label>
                                    <input type="text" name="discount_rate" id="discount_rate" class="form-control numberAndDot" maxlength="26">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="risk_limit">@lang('user.earnings.customer.create.risk_limit')</label>
                                    <input type="text" name="risk_limit" id="risk_limit" class="form-control numberAndDot" maxlength="26">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label for="notes">@lang('user.earnings.customer.create.notes')</label>
                                    <textarea name="notes" id="notes" class="form-control" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('page-styles')

@stop

@section('page-script')
    <script>
        $(".numberAndDot").keypress(function (e) {
            if (e.which !== 46 && e.which !== 110 && e.which !== 190 && e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        }).keyup(function () {
            if ($(this).val().replace(/[^.]/g, "").length > 1) {
                $(this).val(original);
            } else {
                original = $(this).val();
            }
        });

        $(".onlyNumber").keypress(function (e) {
            if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        });

        $("#discount_rate").keyup(function () {
            if ($(this).val() > 100) {
                $(this).val(100);
            } else if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
    </script>
@stop
