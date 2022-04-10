@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขการลงทะเบียน</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('enroll.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($enroll as $enr)
@endforeach

<form action="{{ route('enroll.update', $enr->enr_std_code) }}" method="POST">

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
                <strong>วิชาที่ลงทะเบียน</strong>
                <select class="form-control" id="enr_crs_code" name="enr_crs_code" >
                    <option value="{{$enr->enr_crs_code}}">{{ $enr->enr_crs_code }}&nbsp;//&nbsp;{{ $enr->crs_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <strong>นักศึกษา</strong>
                <select class="form-control" id="enr_std_code" name="enr_std_code" >
                    <option value="{{$enr->enr_std_code}}">{{ $enr->enr_std_code }}&nbsp;//&nbsp;{{ $enr->std_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <strong>กลุ่ม</strong>
                <input type="text" value="{{$enr->enr_sect }}" name="enr_sect" class="form-control" placeholder="กลุ่ม">
            </div>
            <div class="form-group">
                <strong>เลขที่</strong>
                <input type="text" value="{{$enr->enr_seq }}" name="enr_seq" class="form-control" placeholder="เลขที่">
            </div>
            <div class="form-group">
                <strong>ปีที่ลงทะเบียนรายวิชา</strong>
                <input type="text" value="{{ $enr->enr_year}}" name="enr_year" class="form-control" placeholder="ปีที่ลงทะเบียนรายวิชา">
            </div>
            <div class="form-group">
                <strong>เทอมที่ลงทะเบียนรายวิชา</strong>
                <input type="text" value="{{ $enr->enr_term }}" name="enr_term" class="form-control" placeholder="เทอมที่ลงทะเบียนรายวิชา">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
