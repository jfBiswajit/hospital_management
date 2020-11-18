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
                    <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Last Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Specialist In</label>
                <select name="" id="" class="form-control">
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
                    <input type="time" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Available To</label>
                    <input type="time" class="form-control" id="inputCity">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Doctor</button>
        </div>
    </div>
</section>
@endsection
