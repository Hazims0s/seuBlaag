@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="progressbar-heading grids-heading">
                        <a class="btn-dark" href="\categories">التصنيفات</a>
                        <h2 style="text-align: center">  طلبات الصيانة </h2>
                    </div>
                    <div class="panel panel-widget align-middle">
                        <div class="block-page " style="direction: rtl; align-content: center; align-items: center;">

                            <div class="table-responsive" style="align-content: center; padding: 15px">
                            <table class=" table table-bordered w-auto" >
                                <thead class="thead-dark">
                                <tr>
                                    <th >رقم الطلب</th>
                                    <th > الاسم </th>
                                    <th >البريد الالكتروني </th>
                                    <th >اليوم </th>
                                    <th >التاريخ </th>
                                    <th > العنوان</th>
                                    <th > الوصف</th>
                                    <th > </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($all_Reports as $report )
                                    <tr>
                                        <td >{{$report->id}} </td>
                                        <td>{{$report->reporterName}} </td>
                                        <td> {{$report->reporterEmail}}</td>
                                        <td> {{$report->reportDay()}}</td>
                                        <td> {{$report->created_at}}</td>
                                        <td> {{$report->reportTitle}}</td>
                                        <td> {{$report->reportDescription}}</td>
                                        @if($report->reportStatus=='O')
                                            <td> <a href="{{"/dashboard/".$report->id}}" class="btn btn-success"> تفاصيل الطلب </a></td>
                                        @elseif ($report->reportStatus=='P')
                                            <td> <a href="{{"/dashboard/".$report->id}}" class="btn btn-warning">تفاصيل الطلب </a></td>
                                        @elseif ($report->reportStatus=='R')
                                            <td> <a href="{{"/dashboard/".$report->id}}" class="btn btn-danger">تفاصيل الطلب </a></td>
                                        @endif

                                    </tr>
                                </tbody>
                                @empty
                                    {{'No reports'}}
                                @endforelse



                            </table>
                            </div>
                            <br/>
                            <br/>





                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
