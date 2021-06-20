@extends('front-end.master')
@section('title')
    Home || Dashboard
    @endsection
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- .content -->
    <div style="margin: 10px;">
        <img src="{{ asset('/') }}/front-end/images/sfe.png" width="800px" height="150px" >
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <h3 style="margin: 15px;">Contact Details</h3>
                <p><i class="fa fa-map"></i>&nbsp;5th Floor, Bismillah Complex, Bahaddarhat</p>
                <p><i class="fa fa-phone"></i>&nbsp;+8801819-090965</p>
                <p><i class="fa fa-phone"></i>&nbsp;+8801919-931085</p>
                <p><i class="fa fa-mail-forward"></i>&nbsp;sfeelectrical2011@gmail.com</p>
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <p class="text-center" style="margin-top: 8%;">Developed By <a href="https://sohailulalamcse.tech"><strong>Sohailul Alam</strong></a></p>
    </div>
    @endsection
