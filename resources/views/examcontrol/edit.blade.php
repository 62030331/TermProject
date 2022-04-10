@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขรายการควบคุมข้อสอบ</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam_control.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($exam_control as $exc)
@endforeach

<form action="{{ route('exam_control.update', $exc->exc_id) }}" method="POST">

    @csrf
    @method("PUT")

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

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ลำดับ</strong>
                <input type="text" readonly value="{{ $exc->exc_id}}" name="exc_id" class="form-control" placeholder="ลำดับ">
            </div>
            <div class="form-group">
                <strong>ปีการศึกษา</strong>
                <input type="text" value="{{ $exc->exc_year}}" name="exc_year" class="form-control" placeholder="ปีการศึกษา">
            </div>
            <div class="form-group">
                <strong>ภาคเรียน</strong>
                <input type="text" value="{{ $exc->exc_term}}" name="exc_term" class="form-control" placeholder="ภาคเรียน">
            </div>
            <div class="form-group">
                <strong>รหัสวิชา</strong>
                <input type="text" readonly value="{{ $exc->exc_crs_code}}" name="exc_crs_code" class="form-control" placeholder="รหัสวิชา">
            </div>
            <div class="form-group">
                <strong>กลุ่มที่ลงทะเบียน</strong>
                <input type="text" value="{{ $exc->exc_sect}}" name="exc_sect" class="form-control" placeholder="กลุ่มที่ลงทะเบียน">
            </div>
            <div class="form-group">
                <strong>รหัสอาจารย์</strong>
                <input type="text" readonly value="{{ $exc->exc_tch_code}}" name="exc_tch_code" class="form-control" placeholder="รหัสอาจารย์">
            </div>
            <div class="form-group">
                <strong>เวลาเริ่มทำข้อสอบ</strong>
                <input type="time" value="{{ $exc->exc_time }}" name="exc_time" class="form-control" placeholder="เวลาเริ่มทำข้อสอบ">
            </div>
            <!-- เปลี่ยน int(11) to varchar(11) for exam_control -->
            <div class="form-group">
                <strong>สถานะ</strong>
                <input type="radio" name="exc_status" id="exc_status" value="TRUE">TRUE
                <input type="radio" name="exc_status" id="exc_status" value="FALSE">FALSE
                <!-- <input type="text" value="{{ $exc->exc_status }}" name="exc_status" class="form-control" placeholder="exc_status"> -->
            </div>
            <div class="form-group">
                <strong>วันที่เริ่มทำข้อสอบ</strong>
                <input type="date" value="{{$exc->exc_date_start }}" name="exc_date_start" class="form-control" placeholder="วันที่เริ่มทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>วันที่หมดเวลาทำข้อสอบ</strong>
                <input type="date" value="{{$exc->exc_date_stop }}" name="exc_date_stop" class="form-control" placeholder="วันที่หมดเวลาทำข้อสอบ">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
