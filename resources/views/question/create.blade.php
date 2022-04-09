@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Question</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('question.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('question.store') }}" method="POST">

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
                <strong>รหัสคำถาม</strong>
                <input type="text" name="qs_id" class="form-control" placeholder="โปรดใส่รหัสคำถาม">
            </div>

            <div class="form-group">
                <strong>คำถาม</strong>
                <input type="text"   name="qs_question" class="form-control" placeholder="โปรดกรอกคำถาม">
            </div>

            <div class="form-group">
                <strong>ตัวเลือกที่ถูก</strong>
                <select class="form-control" id="qs_ch_no_ans" name="qs_ch_no_ans" require>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <!-- <input type="text"  name="qs_ch_no_ans" class="form-control" placeholder="int"> -->
            </div>
            <div class="form-group">
                <strong>เวลาในการทำ</strong>
                <input type="text"   name="qs_ex_time" class="form-control" placeholder="ระยะเวลาในการทำ">

                <!-- <input type="time"   name="qs_ex_time" class="form-control" placeholder="int"> -->
                <!-- ใน php เราเป็น int(11) เป็น vachar ของ qs_ex_time -->
            </div>

            <div class="form-group">
                <strong>คะแนน</strong>
                <input type="text"    name="qs_score" class="form-control" placeholder="คะแนนของข้อนี้">
            </div>

            <div class="form-group">
                <strong>คำถามของรายวิชา</strong>
                <select class="form-control" id="qs_crs_code" name="qs_crs_code" require>
                @foreach ($course as $crs)
                    <option value="{{ $crs->crs_code}}">{{ $crs->crs_code }}&nbsp;//&nbsp;{{ $crs->crs_name }}</option>
                @endforeach
                </select>
            <!-- <input type="text"   name="qs_crs_code" class="form-control" placeholder="vaChar(10)"> -->
            </div>
            <div class="form-group">
                <strong>คำถามของอาจารย์</strong>
                <select class="form-control" id="qs_tch_code" name="qs_tch_code" require>
                @foreach ($teacher as $tch)
                    <option value="{{ $tch->tch_code}}">{{ $tch->tch_code }}&nbsp;//&nbsp;{{ $tch->tch_name }}</option>
                @endforeach
                </select>
                <!-- <input type="text"   name="qs_tch_code" class="form-control" placeholder="vaChar(20)"> -->
            </div>

            <div class="form-group">
                <strong>เวลาที่ตั้งคำถาม</strong>
                <input type="date"    name="qs_ex_date" class="form-control" placeholder=" ">
            </div>
        
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
