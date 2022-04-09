@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add TeacherTeach</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('teacher_teach.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('teacher_teach.store') }}" method="POST">

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
                <strong>ปีการศึกษา</strong>
                <input type="text" name="tt_year" class="form-control" placeholder="ปีการศึกษา">
            </div>

            <div class="form-group">
                <strong>เทอม</strong>
                <input type="text" name="tt_term" class="form-control" placeholder="เทอม">
            </div>

            <div class="form-group">
                <strong>รายวิชา</strong>
                <select class="form-control" id="tt_crs_code" name="tt_crs_code" require>
                    @foreach ($course as $crs)
                    <option value="{{ $crs->crs_code}}">{{ $crs->crs_code }}&nbsp;//&nbsp;{{ $crs->crs_name }}</option>
                    @endforeach
                </select>
                <!-- <input type="text" name="tt_crs_code" class="form-control" placeholder="vaChar(10)"> -->
            </div>
            <div class="form-group">
                <strong>กลุ่ม</strong>
                <input type="text" name="tt_sect" class="form-control" placeholder="กลุ่ม">
            </div>

            <div class="form-group">
                <strong>อาจารย์</strong>
                <select class="form-control" id="tt_tch_code" name="tt_tch_code" require>
                    @foreach ($teacher as $tea)
                    <option value="{{ $tea->tch_code}}">{{ $tea->tch_code }}&nbsp;//&nbsp;{{ $tea->tch_name }}</option>
                    @endforeach
                </select>
                <!-- <input type="text" name="tt_tch_code" class="form-control" placeholder="Char(20)"> -->
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
