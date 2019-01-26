@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">الفروع</div>
                    <div class="progressbar-heading grids-heading">
                        <h2 style="text-align: center">  الفروع المضافة </h2>
                    </div>
                    <div class="panel panel-widget align-middle">
                        <div class="block-page " style="direction: rtl; align-content: center; align-items: center;">

                            <div class="table-responsive" style="align-content: center; padding: 15px">
                                <table class=" table table-bordered w-auto" >
                                    <thead class="thead-dark">
                                    <tr>
                                        <th >رقم الفرع</th>
                                        <th >اسم الفرع</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($branches as $branch )
                                        <tr>
                                            <td >{{$branch->id}} </td>

                                            <td >{{$branch->name}} </td>

                                        </tr>
                                    </tbody>
                                    @empty
                                        {{'No Branches'}}
                                    @endforelse



                                </table>

                                <div style="padding:15px; direction: rtl; float: right; align-content: baseline; alignment: right;">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" style=" float: right; padding-right: 15px " aria-expanded="false" aria-controls="collapseExample">
                                        أضف فرع جدبد
                                    </a>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <form action="/branches/add" style=" text-align: right; direction: rtl;"  method="post" class="form-group"  >
                                            {{csrf_field()}}

                                            <label  style="display:block; text-align:right;">أضف فرع</label>
                                            <input type="TEXT" name="name" class="form-control"  style="text-align: right" placeholder="المدينة المنورة" required  /> &nbsp;

                                            <br/>
                                            <br/>
                                            <br/>
                                            <input type="submit" class="btn btn-info" value="ارسال"/>
                                            <input type="button" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"  class="btn btn-info" value="إلغاء " />
                                        </form>

                                    </div> </div>
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
