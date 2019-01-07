    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="align-content: center;text-align: center;">مرحبا بكم في صفحة البلاغات</div>

                        <div class="card-body align-middle res " style="align-items: center; padding: 25px " >


                            <form action="\repo\add" style="text-align: right; float:right; "  method="post" >
                                {{csrf_field()}}

                                <div class="form-group">
                              <label style="text-align: right;  float:right;"  for="reporter_name">الاسم </label>
                                    <label style="text-align: right;  float:left;"  for="report_title">Name</label><br/>
                              <input style="text-align: right;  float:right;" type="text" class="form-control" name="reporter_name" placeholder="الاسم">
                          </div>
                          <br/>
                          <br/>
                          <br/>

                          <div class="form-group">
                              <label style="text-align: right;  float:right;"  for="reporter_email">البريد الالكتروني </label>
                              <label style="text-align: right;  float:left;"  for="report_title">Email</label><br/>
                              <input style="text-align: right;  float:right;" type="email" class="form-control" name="reporter_email" placeholder="example@exapmle.com">
                          </div>
                          <br/>
                          <br/>
                          <br/>

                                <label style="text-align: right;  float:left;"  for="report_title">Boys section</label><br/>
                                <input type="radio" name="branch_section" value="b"> قسم الطلاب<br/>
                                <label style="text-align: right;  float:left;"  for="report_title">Girls section</label><br/>
                                <input type="radio" name="branch_section" value="g"> قسم الطالبات<br>
                          <br/>
                          <br/>
                          <br/>


                          <div class="form-group">
                              <label style="text-align: right;  float:right;"  for="report_title">عنوان البلاغ </label>
                              <label style="text-align: right;  float:left;"  for="report_title">Title</label>
                              <input style="text-align: right;  float:right;" type="text" class="form-control" name="report_title" placeholder="عنوان البلاغ">
                          </div>
                          <br/>
                          <br/>
                          <br/>
                          <div class="form-group">
                              <label style="text-align: right;  float:right;"  for="report_description">وصف البلاغ </label>
                              <br/>
                              <label style="text-align: right;  float:left;"  for="report_title">Description</label>
                              <textarea style="text-align: right;  resize: none; height:200px;  float:right;" type="text" class="form-control" name="report_description" placeholder="الوصف"></textarea>



                          </div>
                                <br/>

                          <br/>
                          <br/>
                          <br/>
                          <br/>

                                <br/>
                                <br/>
                          <input style="text-align: center;  float:left;" type="submit" class="btn btn-primary" name="submit" value="ارسال" >


                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


     <!--   <script  type="text/javascript">

            $("#carefresh").click(function() {
                $.ajax({
                    type: 'GET',
                    url: 'refresh_captcha',
                    success: function(data) {
                        $(".captcha span").html(data.captcha);
                    }
                })
            });

        </script> -->
    @endsection
