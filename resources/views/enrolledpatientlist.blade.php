@extends('layouts.app');


@section('content')
<style>
    .patients{
      text-align:center;
      font-weight:bold;

    }
    .tab-patients{
      text-align:center;
      font-weight:900;
    }
    .p{
      color:red;
      font-weight:bold;
      text-align:center;
    }
</style>
<div class="black">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="patients">PATIENTSLIST</h2>
            @if ($patients_general->count())
                <div class="col-md-12">
                    <h4 class="tab-patients">TotalPatients<div class="p"> {{ $patients_total }}</> </h4>
                </div>
                <div class="col-md-12">
                    <p class="tab">PatientsByGeneralHospital</p>
                </div>
                <table class="table table-striped table-dark ">
                    <thead>
                      <tr>
                        <th scope="col">PatientID</th>
                        <th scope="col">PatientName</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Status</th>
                        <th scope="col">OFficerName</th>
                        <th scope="col">HospitalName</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients_general as $patient)
                        <tr>
                            <th scope="row">{{ $patient->patient_id }}</th>
                            <td>{{ $patient->patient_name }}</td>
                            <td>{{ $patient->gender }}</td>
                          
                            <td>{{ $patient->status }}</td>
                            <td>{{ $patient->officer_name }}</td>
                            <td>{{ $patient->hospital_name }}</td>
                          </tr>
                        @endforeach  
                    </tbody>
                  </table>
                

            @else
            <div class="mt-5">
                <h2>There are no patients yet in general hospital</h2>
            </div>

            @endif
            <div class="col-md-12 m-5 ">
                <p class="tab">PatientsByReferalHospital</p>
            </div>
              @if ($patients_referals->Count())
              <table class="table table-striped table-dark ">
                <thead>
                  <tr>
                    <th scope="col">PatientID</th>
                    <th scope="col">PatientName</th>
                    <th scope="col">Gender</th>
              
                    <th scope="col">Status</th>
                    <th scope="col">OFficerName</th>
                    <th scope="col">HospitalName</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($patients_referals as $patient)
                    <tr>
                        <th scope="row">{{ $patient->patient_id }}</th>
                        <td>{{ $patient->patient_name }}</td>
                        <td>{{ $patient->gender }}</td>
                        
                        <td>{{ $patient->status }}</td>
                        <td>{{ $patient->officer_name }}</td>
                        <td>{{ $patient->hospital_name }}</td>
                      </tr>
                    @endforeach  
                </tbody>
              </table>
          
                  
              @else
              <div class="mt-5">
                <h2>There are no patients yet in referal hospital</h2>
            </div>
              @endif
              <div class="col-md-12">
                <p class="tab">PatientsByNationalHospital</p>
            </div>
            
                 @if ($patients_nationals->count())
            
                
                    
                    
                    <table class="table table-striped table-dark ">
                        <thead>
                          <tr>
                            <th scope="col">PatientID</th>
                            <th scope="col">PatientName</th>
                            <th scope="col">Gender</th>
                            <th scope="col">DOI</th>
                            <th scope="col">Status</th>
                            <th scope="col">OFficerName</th>
                            <th scope="col">HospitalName</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients_nationals as $patient)
                            <tr>
                                <th scope="row">{{ $patient->patient_id }}</th>
                                <td>{{ $patient->patient_name }}</td>
                                <td>{{ $patient->gender }}</td>
                                <td>{{\Carbon\Carbon::parse($patient->created_at)->diffForHumans()}}</td>
                                <td>{{ $patient->status }}</td>
                                <td>{{ $patient->officer_name }}</td>
                                <td>{{ $patient->hospital_name }}</td>
                              </tr>
                            @endforeach  
                        </tbody>
                      </table>
                    
    
                @else
                <div class="mt-5">
                    <h2>There are no patients yet in national hospital</h2>
                </div>
                @endif 

        </div>
        

    </div>
    
   
</div>

    
@endsection