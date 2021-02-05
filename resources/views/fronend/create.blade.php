@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Create Invoice
            </div>
            <div class="card-body">
                <form action="{{ route(("invoice.store")) }}" method="POST">
                    @csrf("")
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="customer_name">Customer Name</label>
                                <input type="text" name="customer_name" id="customer_name"
                                    class="form-control">
                                @error('customer_name')
                                <span class="help-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="customer_email">Customer Email</label>
                                <input type="email" name="customer_email" id="customer_email"
                                    class="form-control">
                                @error('customer_email')
                                <span class="help-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="customer_mobile">Customer Mobile</label>
                                <input type="num" name="customer_mobile" id="customer_mobile"
                                    class="form-control">
                                @error('customer_mobile')
                                <span class="help-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input type="text" name="company_name" id="company_name"
                                    class="form-control">
                                @error('company_name')
                                <span class="help-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="invoice_date">Invoice Number</label>
                                <input type="email" name="invoice_date" id="invoice_date"
                                    class="form-control">
                                @error("invoice_date")
                                <span class="help-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="invoice_date">Invoice Date</label>
                                <input type="num" name="invoice_date" id="invoice_date"
                                    class="form-control">
                                @error('customer_mobile')
                                <span class="help-block text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table" id="invoice_details">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>Product Name</td>
                                    <td>Unit</td>
                                    <td>Quntity</td>
                                    <td>Unit Price</td>
                                    <td>Subtotal</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>#</td>
                                    <td>
                                        <input type="text" name="product_name[]" id="product_name"
                                            class="product_name form-control">
                                        @error('product_name')
                                        <span class="help-block text-danger"> {{ $message }}</span>
                                        @enderror
                                    </td>
                                    <td>
                                        <select name="unit[]" id="unit" class="unit form-control">
                                            <option value=""></option>
                                            <option value="piece">Piece</option>
                                            <option value="g">Gram</option>
                                            <option value="kg">Kilo Gram</option>
                                        </select>
                                        @error('unit')
                                        <span class="help-block text-danger"> {{ $message }}</span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="quaintity[]" id="quaintity"
                                            class="quaintity form-control">
                                        @error('quantity')
                                        <span class="help-block text-danger"> {{ $message }}</span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="unit_price[]" id="unit_price"
                                            class="unit_price form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="row_sub_total[]" id="row_sub_total"
                                            class="row_sub_total form-control" readonly>
                                        @error('row_sub_total')
                                        <span class="help-block text-danger"> {{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <button type="button"
                                            class="btn_add btn btn-primary">{{ __('Frontend/frontend.add_another_product') }}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">{{ __('Frontend/frontend.sub_total') }}</td>
                                    <td><input type="number" step="0.01" name="sub_total"
                                            id="sub_total" class="sub_total form-control"
                                            readonly="readonly"></td>
                                </tr>

                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">{{ __('Frontend/frontend.discount') }}</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <select name="discount_type" id="discount_type"
                                                class="discount_type custom-select">
                                                <option value="fixed">
                                                    {{ __('Frontend/frontend.sr') }}</option>
                                                <option value="percentage">
                                                    {{ __('Frontend/frontend.percentage') }}
                                                </option>
                                            </select>
                                            <div class="input-group-append">
                                                <input type="number" step="0.01"
                                                    name="discount_value" id="discount_value"
                                                    class="discount_value form-control"
                                                    value="0.00">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">{{ __('Frontend/frontend.vat') }}</td>
                                    <td><input type="number" step="0.01" name="vat_value"
                                            id="vat_value" class="vat_value form-control"
                                            readonly="readonly"></td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">{{ __('Frontend/frontend.shipping') }}</td>
                                    <td><input type="number" step="0.01" name="shipping"
                                            id="shipping" class="shipping form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2">{{ __('Frontend/frontend.total_due') }}</td>
                                    <td><input type="number" step="0.01" name="total_due"
                                            id="total_due" class="total_due form-control"
                                            readonly="readonly"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>
    $(document).ready(function(){
        
    })
</script>
@endsection