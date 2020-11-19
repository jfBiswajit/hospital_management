@extends('layout.master')
@section('page_title', 'Appoinment Registration')
@section('body')
<section style="padding: 3rem">
    <h6 class="p-3" style="background: #2980b9; color: white">Appoinment</h6>
    <div class="section_body">
        <div class="px-5 py-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Appoinment For</label>
                    <select name="" id="" class="form-control">
                        <option value="1">Sporshow</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Appoinment To</label>
                    <select name="" id="" class="form-control">
                        <option value="1">Biswajit</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="">Date and Time</label>
                <input class="form-control" type="datetime-local">
            </div>
            <button id="doctor_reg_btn" type="submit" class="btn btn-primary">Schedule</button>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
