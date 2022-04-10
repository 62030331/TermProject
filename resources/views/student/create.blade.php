@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>เพิ่มรายชื่อนิสิต</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('student.store') }}" method="POST">

    @csrf
    <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif   
    </div> 
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสนักศึกษา</strong>
                <input type="text" name="std_code" class="form-control" placeholder="รหัสนักศึกษา(20)">
            </div>

            <div class="form-group">
                <strong>ชื่อนักศึกษา</strong>
                <input type="text" name="std_name" class="form-control" placeholder="ชื่อนักศึกษา(45)">
            </div>

            <!-- <div class="form-group">
                <strong>std_email</strong>
                <input type="text" name="std_email" class="form-control" placeholder="vaChar(45)">
            </div> -->
            <div class="form-group">
                <strong>รหัสคณะที่สังกัด</strong>
                <input type="text" name="std_fac_code" class="form-control" placeholder="รหัสคณะที่สังกัด(3)">
            </div>

            <div class="form-group">
                <strong>ผู้ใช้งาน</strong>
                <input type="text" name="std_user_login" class="form-control" placeholder="ผู้ใช้งาน(20)">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
