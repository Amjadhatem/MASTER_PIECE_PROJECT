<!-- resources/views/success.blade.php -->

@extends('layouts.masterPage')

@section('title', 'Success')

@section('content')

<section id="success">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Reservation Successful!</h4>
                    <p>Your appointment has been successfully booked. Thank you for choosing our services.</p>
                    <hr>
                    <p class="mb-0">Feel free to contact us if you have any questions or need further assistance.</p>
                </div>

                <div style="text-align: center">
                    <a href="/" id="a_back"><img src="{{ asset('assets/img/logo.png') }}" style="width: 4.2rem "  alt=""></a> 
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
