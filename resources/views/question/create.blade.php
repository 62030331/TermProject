@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>เพิ่มคำถาม</h2>
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
                <strong>ข้อ</strong>
                <input type="text" name="qs_id" class="form-control" placeholder="ข้อ">
            </div>

            <div class="form-group">
                <strong>คำถาม</strong>
                <input type="text"   name="qs_question" class="form-control" placeholder="คำถาม">
            </div>

            <div class="form-group">
                <strong>ข้อถูก</strong>
                <input type="text"  name="qs_ch_no_ans" class="form-control" placeholder="ข้อถูก">
            </div>
            <div class="form-group">
                <strong>เวลาในการทำ</strong>
                <input type="number"   name="qs_ex_time" class="form-control" placeholder="เวลาในการทำ">
                <!-- ใน php เราเป็น int(11) เป็น vachar ของ qs_ex_time -->
            </div>

            <div class="form-group">
                <strong>คะแนน</strong>
                <input type="text"    name="qs_score" class="form-control" placeholder="คะแนน">
            </div>

            <div class="form-group">
                <strong>วิชา</strong>
                <select class="form-control" id="qs_crs_code" name="qs_crs_code" require>
                    @foreach ($question as $qui)
                    <option value="{{ $qui->crs_code}}">{{ $qui->crs_code }}&nbsp;//&nbsp;{{ $qui->crs_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
            <strong>อาจารย์</strong>
            <select class="form-control" id="qs_tch_code" name="qs_tch_code" require>
                    @foreach ($question as $qui)
                    <option value="{{ $qui->tch_code}}">{{ $qui->tch_code }}&nbsp;//&nbsp;{{ $qui->tch_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <strong>วันที่ทำข้อสอบ</strong>
                <input type="date"  name="qs_ex_date" class="form-control">
            </div>
<!--  ---------------------------------------------------------------------------------------------- -->
            <div class="form-group">
                <strong>ชอยส์ที่ 1</strong>
                <input type="text" name="ch_no1" class="form-control" placeholder="ตัวเลือกที่ 1">
            </div>
            <div class="form-group">
                <strong>ชอยส์ที่ 2</strong>
                <input type="text" name="ch_no2" class="form-control" placeholder="ตัวเลือกที่ 2">
            </div>
            <div class="form-group">
                <strong>ชอยส์ที่ 3</strong>
                <input type="text" name="ch_no3" class="form-control" placeholder="ตัวเลือกที่ 3">
            </div>
            <div class="form-group">
                <strong>ชอยส์ที่ 4</strong>
                <input type="text" name="ch_no4" class="form-control" placeholder="ตัวเลือกที่ 4">
            </div>

        
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
