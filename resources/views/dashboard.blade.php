@extends('layout.master')
@section('page_title', 'Dashboard')
@section('body')
  <section style="padding: 3rem">
    <h6 class="p-3" style="background: #2980b9; color: white">Dashboard</h6>
    <div class="section_body">
      <div class="row">
        <div class="col">
          <div class="reg_doctor p-3" style="background: #d35400; color: white; height: 10vh;text-align: center">
            Registered Doctors <br> <span style="font-weight: bold">10</span>
          </div>
        </div>
        <div class="col">
          <div class="reg_doctor p-3" style="background: #27ae60; color: white; height: 10vh;text-align: center">
              Registered Patients <br> <span style="font-weight: bold">8</span>
          </div>
        </div>
        <div class="col">
          <div class="reg_doctor p-3" style="background: #8e44ad; color: white; height: 10vh;text-align: center">
              Total Appointments <br> <span style="font-weight: bold">15</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
