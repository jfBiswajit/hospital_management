@extends('layout.master')
@section('page_title', 'Patiant Registration')
@section('body')
<section style="padding: 3rem">
    <h6 class="p-3" style="background: #2980b9; color: white">Patiant Registration</h6>
    <div class="section_body">
        <div class="px-5 py-2">
            <div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Phone</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <button type="submit" class="btn btn-primary">Add Patiant</button>
            </div>
        </div>
    </div>
</section>
@endsection
