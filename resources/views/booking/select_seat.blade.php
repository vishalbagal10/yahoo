@extends('layouts.main')

    @section('content')
    <style>
        .seat {
            display: inline-block;
            border: 2px solid green;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        .selected {
            border-color: red;
        }
        .disabled {
            border-color: gray;
            cursor: not-allowed;
        }
        #single_row ul li{
            list-style-type: none;
            border: 1px solid red;
            padding: 10px;
            cursor: pointer;
            margin: 2px;    
        }

        #single_row ul{
           display: flex; 
        }

        .green {
        background-color: green;
        }
        .white {
            background-color: White;
        }
        
    </style>

    <div class="container">
    <h1>Select Your Seat for {{ $routeData['start_location'] }} to {{ $routeData['end_location'] }}</h1>
    <form action="{{ route('booking.confirm') }}" method="POST" id="bookingForm">
        @csrf
        <div>
            <h3>Prices</h3>
            <ul>
                <li>{{$routeData['seat_type']}} Seat Price: ₹{{ $routeData['price'] }}</li>

                {{-- <li>Double Seat Price: ₹{{ $routeData['price'] }}</li> --}}
            </ul>
        </div>

        <div>
            <label for="name"><h3>Enter Customer's Name:</h3> </label>
            <input type="text" name="customer_name" placeholder="Customer Name" required><br><br>
        </div>

        

        <div>
            <div class="row" id="single_row">
                <ul>
                    <li class="seatno" data="A1">A1</li>
                    <input type="hidden" value="A1" name="A1">
                    <li class="seatno" data="A2">A2</li>
                    <input type="hidden" value="A2" name="A2">
                    <li class="seatno" data="A3">A3</li>
                    <input type="hidden" value="A3" name="A3">
                    <li class="seatno" data="A4">A4</li>
                    <input type="hidden" value="A4" name="A4">
                    <li class="seatno" data="A5">A5</li>
                    <input type="hidden" value="A5" name="A5">
                    <li class="seatno" data="B1">B1</li>
                    <input type="hidden" value="B1" name="B1">
                    <li class="seatno" data="B2">B2</li>
                    <input type="hidden" value="B2" name="B2">
                    <li class="seatno" data="B3">B3</li>
                    <input type="hidden" value="B3" name="B3">
                    <li class="seatno" data="B4">B4</li>
                    <input type="hidden" value="B4" name="B4">
                    <li class="seatno" data="B5">B5</li>
                    <input type="hidden" value="B5" name="B5">
                    <li class="seatno" data="C1">C1</li>
                    <input type="hidden" value="C1" name="C1">
                    <li class="seatno" data="C2">C2</li>
                    <input type="hidden" value="C2" name="C2">
                    <li class="seatno" data="C3">C3</li>
                    <input type="hidden" value="C3" name="C3">
                    <li class="seatno" data="C4">C4</li>
                    <input type="hidden" value="C4" name="C4">
                    <li class="seatno" data="C5">C5</li>
                    <input type="hidden" value="C5" name="C5">
                   
                </ul>
            </div>
            <div class="row">

            </div>
        </div>
        
        <button type="submit">Confirm Booking</button><br><br>
        
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
       $('.seatno').on('click', function(e) {
            $(e.target).toggleClass('green white');
        });

        $('.seatno').on('click', function(e) {
        var currentColor = $(e.target).css('backgroundColor');
        
        if (currentColor === 'rgb(0, 128, 0)') {
            $(e.target).css('backgroundColor', 'white');
        } else {
            $(e.target).css('backgroundColor', 'green');
        }
    });



    </script>
    
    @endsection
