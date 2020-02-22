@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
            $('#St_Payment_Gateway_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Payment Gatways</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Payment Gatways</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                    </div>
                </div>
            </div>
        
            <form action="" method="" siq_id="autopick_5541">
                <input type="hidden" name="_token" value="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Paypal Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-paragraph"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="paypal[username]" value="" placeholder="Enter Paypal Username . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Paypal Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-key"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="paypal[password]" value="" placeholder="Enter Paypal Password . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Paypal Signature</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-hand-drag"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="paypal[signature]" value="" placeholder="Enter Paypal Signature . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Paypal Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-email"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="paypal[email]" value="" placeholder="Enter Paypal Email Address . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Paypal Mode</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-server"></i></span>
                                        </div>
                                        <select class="custom-select" name="paypal[mode]">
                                            <option value="0" selected="">Sandbox</option>
                                            <option value="1">Live</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-check"></i></span>
                                        </div>
                                        <select class="custom-select" name="paypal[status]">
                                            <option value="1">Enable</option>
                                            <option value="0" selected="">Disable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                    </div>
                </div>
            </form>
    
    
        </div>
    </div>
@endsection
