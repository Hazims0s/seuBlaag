@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="\dashboard">Dashboard <span class="sr-only"></span></a>
                            </li></div>
                    <div class="panel panel-widget align-middle">
                        <div class="block-page align-middle " style="direction: rtl; align-content: center; align-items: center;">
                            <br/>

                            <p class="lead align-middle" style="alignment: center; alignment-baseline: center; float: right; right: 50%; position: relative;"> تفاصيل البلاغ</p>
                            <br/>  <br/>

                            <div style="alignment: center; direction: rtl; align-self: center;" >
                                <table class=" table table-hover table-responsive w-auto"  style="align-content: center; padding: 20px">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th >رقم الطلب</th>
                                        <th > الاسم </th>
                                        <th >البريد الالكتروني </th>
                                        <th >اليوم </th>
                                        <th >التاريخ </th>
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
                                        <td> {{$report->reportDay()}}</td>
                                        <td> {{$report->created_at}}</td>
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
                                        <th > الاسم </th>
                                        <th >تاريخ الاجراء </th>
                                        <th > الاجراء</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($updates as $update )
                                    <tr>
                                        <td >{{$update->id}} </td>
                                        <td>{{\App\User::find($update->user_id)->name}} </td>
                                        <td> {{$update->created_at->toDateString() }}</td>
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

                        <div style="padding:15px; direction: rtl; float: right; align-content: baseline; alignment: right;">
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" style=" float: right; padding-right: 15px " aria-expanded="false" aria-controls="collapseExample">
                                أضف تحديث للحالة
                            </a>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                        <form action="/dashboard/update" style=" text-align: right; direction: rtl;"  method="post" class="form-group"  >
                            {{csrf_field()}}

                            <label  style="display:block; text-align:right;">أضف اجراء</label>
                            <input type="TEXT" name="commentInput" class="form-control"  style="text-align: right" placeholder="تم التوجيه للاصلاح" required  /> &nbsp;
                            <br/>
                            <div class="form-group col-md-4">
                                <label for="inputState">تحديث الحالة</label>
                                <select name="inputState" class="form-control">
                                    <option selected value="P"> تحت الاجراء</option>
                                    <option value="R">تم الحل</option>
                                </select>
                            </div>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <input type="hidden" name="reportId"  value="{{$report->id}}">
                            <input type="submit" class="btn btn-info" value="ارسال"/>
                            <input type="button" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"  class="btn btn-info" value="إلغاء " />
                        </form>

                            </div> </div>
                        <br/>
                        <br/>

                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
