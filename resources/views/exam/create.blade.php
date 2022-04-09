@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Exam</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('exam.store') }}" method="POST">

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
                <strong>รหัสการสอบ</strong>
                <input type="text" name="ex_id" class="form-control" placeholder="รหัสการสอบ">
            </div>
            <div class="form-group">
                <strong>ปีที่สอบ</strong>
                <input type="number" name="ex_year" class="form-control" min="2555" max="2575" placeholder="ปีที่สอบ">
            </div>
            <div class="form-group">
                <strong>เทอมที่สอบ</strong>
                <select class="form-control" id="ex_term" name="ex_term" require>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="S">S</option>
                </select>
            </div>
            <div class="form-group">
                <strong>วิชา</strong>
                <select class="form-control" id="enr_crs_code" name="enr_crs_code" require>
                    @foreach ($course as $crs)
                    <option value="{{ $crs->crs_code}}">{{ $crs->crs_code }}&nbsp;//&nbsp;{{ $crs->crs_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>กลุ่มที่สอบ</strong>
                <input type="text" name="ex_crs_sect" class="form-control" placeholder="กลุ่ม">
            </div>
            <div class="form-group">
                <strong>นักศึกษา</strong>
                <select class="form-control" id="enr_std_code" name="enr_std_code" require>
                    @foreach ($student as $std)
                    <option value="{{ $std->std_code}}">{{ $std->std_code }}&nbsp;//&nbsp;{{ $std->std_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>เวลาในการทำข้อสอบ(นาที)</strong>
                <input type="number" name="ex_time" class="form-control" min="1" max="180"placeholder="เวลาในการทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>วันที่เริ่มเปิดให้ทำข้อสอบ</strong>
                <input type="date" name="ex_date_time_start" class="form-control" placeholder="วันที่เริ่มเปิดให้ทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>วันที่ปิดให้ทำข้อสอบ</strong>
                <input type="date" name="ex_date_time_end" class="form-control" placeholder="วันที่ปิดให้ทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>คะแนนรวม</strong>
                <input type="number" name="ex_total_score" class="form-control" min="1" max="100" placeholder="คะแนนรวม">
            </div>
            <div class="form-group">
                <strong>วิธีการส่งข้อสอบ</strong>
                <input type="text" name="ex_commit_type" class="form-control" placeholder="วิธีการส่งข้อสอบ">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
