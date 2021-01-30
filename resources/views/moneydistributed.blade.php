@extends('layouts.app')

@section('content')
<style>
    table.table.table-striped.table-dark:hover{
        cursor: pointer !important;
    }
    small{
        font-weight: bold;
    }
    .inputs{
      display: flex;
      flex-direction: column;
    }
    .inputs>input{
      width: 100%;
      flex: 1;
    }
    }
    span.invalid-feedback{
        text-align: center !important;
    }
    .invalid{
        color:#e3342f !important;
    }
    .form-group{
        display: flex !important;
        flex-direction: column ;
        flex: 1;
    }
    button.btn.btn-primary{
        flex: 1 !important;
        background: #1c478e !important;
        margin-left: 10px !important;
        margin-right: 8px !important;
    }
    .label{
      text-align: center;
      font-weight: bold;
      margin-top:12px;
      padding-top: 15px;

    }


</style>
<div class="money_background">
    <div class="container mt-4"
    >
   
        <div class="row justify-content-center">
            <div class="col-md-12 m-3">
                
            <div class="col-md-12 mt-3">
                <p class="tab">MoneyDistributionToStaffMembers</p>
            </div>
            @if (count($staff_payments))
            <table class="table table-striped table-dark ">
                <thead>
                  <tr>
                    <th scope="col">StaffMemberName</th>
              
                    <th scope="col">Payments</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($staff_payments as $payment)
                    <tr>
                        <th scope="row">{{ $payment->name }}</th>
                        
                        <td> <small>shs</small>{{  $payment->monthly_salary}}</td>
                      </tr>
                    @endforeach  
                </tbody>
              </table>
            
            @else
            <div class="mt-5">
                <h2>There was no payements this month</h2>
            </div>
            @endif

            <div class="col-md-12 mt-3">
                <p class="tab-money">MoneyDistributionToHealthOfficers</p>
            </div>

            <div class="col-md-12 mt-3">
                <p class="tab">HealthOfficersAtGeneralHospitals</p>
            </div>
            @if (count($officers_at_general))
            <table class="table table-striped table-dark ">
                <thead>
                  <tr>
                    <th scope="col">OfficerName</th>
                  
                    <th scope="col">Payments</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($officers_at_general as $payment)
                    <tr>
                        <th scope="row">{{ $payment->officer_name }}</th>
                        
                        <td> <small>shs</small>{{  $payment->monthly_salary }}</td>
                      </tr>
                    @endforeach  
                </tbody>
              </table>
            @else
            <div class="mt-5">
                <h2>There was no payements made for general officers this month</h2>
            </div>
            @endif
            <div class="col-md-12 mt-3">
                <p class="tab">HealthOfficersAtReferalHospitals</p>
            </div>
            @if (count($officers_at_referal))
            <table class="table table-striped table-dark ">
                <thead>
                  <tr>
                    <th scope="col">OfficerName</th>
                  
                    <th scope="col">Payments</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($officers_at_referal as $payment)
                    <tr>
                        <th scope="row">{{ $payment->officer_name }}</th>
                        
                        <td> <small>shs</small>{{  $payment->monthly_allowane }}</td>
                      </tr>
                    @endforeach  
                </tbody>
              </table>
            @else
            <div class="mt-5">
                <h2>There was no payements made for  officers in Referal Hospitals this month</h2>
            </div>
            @endif


            <div class="col-md-12 mt-3">
                <p class="tab">HealthOfficersAtNationalHospitals</p>
            </div>
            @if (count($officers_at_national))
            <table class="table table-striped table-dark ">
                <thead>
                  <tr>
                    <th scope="col">OfficerName</th>
                  
                    <th scope="col">Payments</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($officers_at_national as $payment)
                    <tr>
                        <th scope="row">{{ $payment->officer_name }}</th>
                        
                        <td> <small>shs</small>{{  $payment->monthly_allowane }}</td>
                      </tr>
                    @endforeach  
                </tbody>
              </table>
            @else
            <div class="mt-5">
                <h2>There was no payements made for  officers in National Hospitals this month</h2>
            </div>
            @endif

     </div>
       
    </div>
</div>

@endsection