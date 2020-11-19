@extends('layout.master')
@section('page_title', 'Appoinment Registration')
@section('body')
<section style="padding: 3rem">
    <h6 class="p-3" style="background: #2980b9; color: white">Patiant Record</h6>
    <div class="section_body">
        <div class="px-5 py-2">
            <table id="table_id" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Appointment To</th>
                        <th>Last Visit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Saif Ahamed Sporshow</td>
                        <td>Biswajit Biswas</td>
                        <td>19/Oct/20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
@endsection
