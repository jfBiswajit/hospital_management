@extends('layout.master')
@section('page_title', 'Doctor Registration')
@section('body')
<section style="padding: 3rem">
    <h6 class="p-3" style="background: #2980b9; color: white">Doctor Registration</h6>
    <div class="section_body">
        <div class="px-5 py-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input id="fname" type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Last Name</label>
                    <input id="lname" type="text" class="form-control" id="inputEmail4" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Specialist In</label>
                <select id="specialist_in" name="" id="" class="form-control">
                    <option value="1">Pediatrician</option>
                    <option value="2">Endocrinologist</option>
                    <option value="3">Neurologist</option>
                    <option value="4">Allergist/Immunologist</option>
                    <option value="5">Psychiatrist</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Available From</label>
                    <input id="available_from" type="time" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Available To</label>
                    <input id="available_to" type="time" class="form-control" id="inputCity">
                </div>
            </div>
            <button id="doctor_reg_btn" type="submit" class="btn btn-primary">Add Doctor</button>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $('#doctor_reg_btn').click(function (e) {
        const fname = $('#fname');
        const lname = $('#lname');
        const specialistIn = $('#specialist_in');
        const availableFrom = $('#available_from');
        const availableTo = $('#available_to');
        console.log(fname.val(), lname.val(), specialistIn.val(), availableFrom.val(), availableTo.val());
        $.ajax({
            url: 'doctor_registration',
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                fname: fname.val(),
                lname: lname.val(),
                specialistIn: specialistIn.val(),
                availableFrom: availableFrom.val(),
                availableTo: availableTo.val(),
            },
            success: function (response) {
                swal("Success!", "New book added!", "success");
                $('input').val('');
            },
            dataType: 'json',
        });
    });
</script>
@endsection
