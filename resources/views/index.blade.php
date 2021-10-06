@extends('app')

@section('title')
Store-shopify
@endsection

@section('content')

<div class="jumbotron p-2 right-nav">
    <p class="m-0 font-weight small">Your Current Plan: <span class="free">FREE</span></p>

    <div class="impression-con">
        <div class="progress-bar-con mx-2">
            <div class="progress">
                <div class="value"></div>
            </div>
            <p class="mx-4 my-0 small"> 5% (1500 of 1500 impressions left in this month)</p>

            <button class="btn btn-outline-dark px-1 py-0">Upgrade</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="top-cards">
        <div class="top-card-icon-con" id="con1">
            <i class="fa fa-th-large"></i>
        </div>
        <h6 class="m-3">Active Apps</h6>
        <p class="m-3 top-card-number">5</p>
    </div>
    <div class="top-cards">
        <div class="top-card-icon-con" id="con2">
            <i class="fa fa-signal"></i>
        </div>
        <h6 class="m-3">Active Bars</h6>
        <p class="m-3 top-card-number">319</p>
    </div>
    <div class="top-cards">
        <div class="top-card-icon-con" id="con3">
            <i class="fa fa-envelope"></i>
        </div>
        <h6 class="m-3">Captured Emails</h6>
        <p class="m-3 top-card-number">19</p>
    </div>
    <div class="top-cards">
        <div class="top-card-icon-con" id="con4">
            <i class="fa fa-window-maximize"></i>
        </div>
        <h6 class="m-3">Active Pop Ups</h6>
        <p class="m-3 top-card-number">2</p>
    </div>
</div>



<div class="all-applications-con p-4 mx-4">
    <h5 class="mb-4">All Applications</h5>
    <div class="d-flex justify-content-between application-top-section mb-0">
        <ul class="list-group list-group-horizontal applications-nav">
            <li class="list-group-item" id="active-nav">
                <p class="text-muted">All</p>
            </li>
            <li class="list-group-item">
                <p class="text-muted">Forms</p>
            </li>
            <li class="list-group-item">
                <p class="text-muted">e-Commerce</p>
            </li>
            <li class="list-group-item">
                <p class="text-muted">Polls</p>
            </li>
            <li class="list-group-item">
                <p class="text-muted">Counters</p>
            </li>
            <li class="list-group-item">
                <p class="text-muted">Social</p>
            </li>

        </ul>
        <form class="d-flex col-4">
            <input class="form-control rounded search-bar" type="search" placeholder="Search Apps" aria-label="Search">
        </form>
    </div>

    <hr class="mb-5">

    <div class="d-flex justify-content-between application-top-section">
        <div class="app-cards">
            <div class="app-cards-icon-con">
                <i class="fa fa-tag"></i>
            </div>
            <div class="app-cards-write-up">
                <h6>Lorem, ipsum.</h6>
                <p class="text-muted small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, sunt?</p>
            </div>
            <div><label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label></div>
        </div>
        <div class="app-cards">
            <div class="app-cards-icon-con">

                <i class="fa fa-window-maximize"></i>
            </div>
            <div class="app-cards-write-up">
                <h6>Lorem, ipsum.</h6>
                <p class="text-muted small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, sunt?</p>
            </div>
            <div><label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label></div>
        </div>
        <div class="app-cards">
            <div class="app-cards-icon-con">

                <i class="fa fa-book"></i>
            </div>
            <div class="app-cards-write-up">
                <h6>Lorem, ipsum.</h6>
                <p class="text-muted small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, sunt?</p>
            </div>
            <div><label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label></div>
        </div>
        <div class="app-cards">
            <div class="app-cards-icon-con">

                <i class="fa fa-chart-bar"></i>
            </div>
            <div class="app-cards-write-up">
                <h6>Lorem, ipsum.</h6>
                <p class="text-muted small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, sunt?</p>
            </div>
            <div><label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label></div>
        </div>
        <div class="app-cards">
            <div class="app-cards-icon-con">

                <i class="fa fa-comments"></i>
            </div>
            <div class="app-cards-write-up">
                <h6>Lorem, ipsum.</h6>
                <p class="text-muted small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, sunt?</p>
            </div>
            <div><label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label></div>
        </div>
        <div class="app-cards">
            <div class="app-cards-icon-con">

                <i class="fa fa-calculator"></i>
            </div>
            <div class="app-cards-write-up">
                <h6>Lorem, ipsum.</h6>
                <p class="text-muted small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, sunt?</p>
            </div>
            <div><label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label></div>
        </div>
    </div>
</div>

<style>
    .nav-impression-con {
        display: none !important;
    }
</style>
@endsection
