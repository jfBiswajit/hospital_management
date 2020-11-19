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
                    <select name="" id="patiant" class="form-control">
                        @foreach ($patiants as $patiant)
                        <option value="{{ $patiant->id }}">{{ $patiant->fname }} {{ $patiant->lname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Appoinment To</label>
                    <select name="" id="doctor" class="form-control">
                        @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->fname }} {{ $doctor->lname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="">Date and Time</label>
                <input id="booked_at" class="form-control" type="datetime-local">
            </div>
            <button id="appoinment_btn" type="submit" class="btn btn-primary">Schedule</button>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $('#appoinment_btn').click(function (e) {
        const patiant = $('#patiant');
        const doctor = $('#doctor');
        const bookedAt = $('#booked_at');

        $.ajax({
            url: 'appoinment',
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                patiant: patiant.val(),
                doctor: doctor.val(),
                bookedAt: bookedAt.val(),
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
