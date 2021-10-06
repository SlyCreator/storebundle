@extends('app')

@section('title')
Store-shopify Promo
@endsection

@section('content')

<div class="promo-top-con">
    <div>
        <h6 class="mb-0 font-weight-bold">Lorem, ipsum.</h6>
        <p class="promo-top-description small text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi architecto quas atque ipsum qui, illo provident amet corrupti distinctio sed.</p>
    </div>

    <div class="d-flex justify-content-center promo-bar-switch-con">
        <p class="m-0 small"><span class="text-muted">Applications /</span> Promo Bar</p> <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>
</div>
<div class="all-applications-con p-5 py-3 mx-4">
    <div class="d-flex justify-content-between align-items-center mb-2">

        <h5 class="mt-4 mb-4">My Promo Bars</h5>
        <button class="btn top-promo-btn text-white">
            <p class="m-0 small"><i class="fa fa-plus mx-2"></i> Create Bar</p>
        </button>
    </div>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>
                    <div>
                        <p class="small m-0">Name</p>
                        <i class="fa fa-caret-up"></i>
                    </div>
                </th>
                <th>
                    <div>
                        <p class="small m-0">Type</p> <i class="fa fa-exchange-alt"></i>
                    </div>
                </th>
                <th>
                    <div>
                        <p class="small m-0">Status</p>
                    </div>
                </th>
                <th>
                    <div>
                        <p class="small m-0">Date</p><i class="fa fa-caret-down"></i>
                    </div>
                </th>
                <th>
                    <div>
                        <p class="small m-0">Action</p>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p class="small m-0">Email Capture Bar</p>
                </td>
                <td>
                    <p class="small m-0">Email Capture</p>
                </td>
                <td><button class="btn table-btns" id="green">Active</button>
                </td>
                <td>
                    <p class="small m-0">2021-01-04 02:46 PM</p>
                </td>
                <td>
                    <p class="small m-0" id="elipse">....</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="small m-0">Text Bar</p>
                </td>
                <td>
                    <p class="small m-0">Informational</p>
                </td>
                <td><button class="btn table-btns" id="red">Disabled</button>
                </td>
                <td>
                    <p class="small m-0">2021-02-07 01:23 PM</p>
                </td>
                <td>
                    <p class="small m-0" id="elipse">....</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="promo-bottom-con">
    <div>
        <h6 class="m-0 font-weight-bold">Settings</h6>
    </div>
    <div>
        <div class="mb-3">
            <input type="checkbox" name="" id="">
            <p class="d-inline">Enable Close Button</p>
        </div>
        <p class=" col-md-8 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi architecto quas atque ipsum qui, illo provident amet corrupti distinctio sed.</p>
    </div>
</div>

@endsection