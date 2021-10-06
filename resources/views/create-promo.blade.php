@extends('app')

@section('title')
Store-shopify

@endsection

@section('content')

<div class="jumbotron p-2 create-promo-bar">
    <div class="d-flex justify-content-center"><i class="fa fa-tag"></i>
        <h6 class="mx-3">Create Promo Bar</h6>
    </div>
    <div class="create-promo-bar-btns-con">
        <button id="exit" class="mx-1">Exit</button>
        <div class="save-btn-flex">
            <button id="save">Save</button><i class="fa fa-caret-down"></i>
        </div>
    </div>
</div>
<div class="inputs-con">
    <form>
        <div class="form-row text-inputs-flex mb-4">
            <div class="col-5 type-bar">
                <label for="">Type of Promo Bar</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Text Bar</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>

            </div>
            <div class="inputs-con-flex">
                <div class="col-6">

                    <label for="">Background Color</label>
                    <div class="fake-input">
                        <div class="palette" id="background-color"></div> <span>#504670</span>
                    </div>
                </div>
                <div class="col-6">

                    <label for="">Text Color</label>
                    <div class="fake-input">
                        <div class="palette" id="text-color"></div> <span>#FFFFFF</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row text-inputs-flex-2 mb-2">
            <div class="col-5 name-bar">
                <label for="">Bar Name</label>
                <input type="text" class="form-control " placeholder="Type Bar Name Here...">

            </div>
            <div class="message-con">
                <label for="">Message</label>
                <textarea type="text" class="form-control" placeholder="Type your promo messages here"></textarea>
            </div>
        </div>
    </form>
</div>

<div class="preview-con">
    <h6 class="mb-4 font-weight-bold">Preview</h6>
    <div class="preview-white">
        <div class="preview-colored">
            <div class="text-con">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate mollitia harum necessitatibus, veritatis voluptatem iste excepturi libero commodi.!</p>
            </div>
            <div>
                <i class="fa fa-plus-circle"></i>
            </div>
        </div>
    </div>
</div>


<style>
    .nav-impression-con {
        display: none !important;
    }

    .account-nav {
        display: block;
    }

    .left {
        display: none !important;
    }
</style>
@endsection