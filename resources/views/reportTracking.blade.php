@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="panel panel-widget align-middle">
                        <div class="block-page align-middle " style="direction: rtl; align-content: center; align-items: center;">
                            <br/>

                            <p class="lead align-middle" style="alignment: center; alignment-baseline: center; float: right; right: 50%; position: relative;"> تفاصيل البلاغ</p>
                            <br/>  <br/>

                            <div style="alignment: center; direction: rtl; align-self: center;" >
                              @if( !empty($report))

                                <table class=" table table-hover table-responsive w-auto"  style="align-content: center; padding: 20px">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th >رقم الطلب</th>
                                        <th > الاسم </th>
                                        <th >البريد الالكتروني </th>
                                        <th > العنوان</th>
                                        <th > الوصف</th>
                                        <th >الحالة </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td >{{$report->id}} </td>
                                        <td>{{$report->reporterName}} </td>
                                        <td> {{$report->reporterEmail}}</td>
                                        <td> {{$report->reportTitle}}</td>
                                        <td> {{$report->reportDescription}}</td>
                                        @if($report->reportStatus=='O')
                                            <td> <span class="badge badge-pill badge-success">جديد</span> </td>
                                        @elseif ($report->reportStatus=='P')
                                            <td> <span class="badge badge-pill badge-warning">تحت الاجراء</span> </td>
                                        @elseif ($report->reportStatus=='R')
                                            <td> <span  class="badge badge-pill badge-danger">تم الحل</span> </td>
                                        @endif
                                    </tr>
                                    </tbody>

                                </table>
                                  @else
                                <p>لا يوجد طلب</p>
                                  @endif
                            </div>

                        </div>


                        <div class="block-page align-middle " style="direction: rtl; align-content: center; align-items: center;">


                            <p class="lead align-middle" style="alignment: center; alignment-baseline: center; float: right; right: 50%; position: relative;"> اجراءات البلاغ</p>
                            <br/>  <br/>

                            <div style="alignment: center; direction: rtl; align-self: center;" >
                                <table class=" table table-hover table-responsive w-auto"  style="align-content: center; padding: 20px">
                                    <thead>
                                    <tr>
                                        <th >رقم الاجراء</th>
                                        <th >تاريخ الاجراء </th>
                                        <th > الاجراء</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($updates as $update )
                                    <tr>
                                        <td >{{$update->id}} </td>
                                        <td> {{$update->created_at->toDateString()}}</td>
                                        <td> {{$update->comment}}</td>

                                    </tr>
                                    @empty
                                        {{'No reports'}}
                                    @endforelse
                                    </tbody>

                                </table>
                            </div>
                            <br/>
                        </div>

                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
