@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขคำถาม</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('question.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($question as $qui)
@endforeach

<form action="{{ route('question.update', $qui->qs_id) }}" method="POST">

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
                <strong>ข้อ</strong>
                <input type="text" readonly  value="{{ $qui->qs_id}}"name="qs_id" class="form-control" placeholder="int">
            </div>

            <div class="form-group">
                <strong>คำถาม</strong>
                <input type="text"   value="{{ $qui->qs_question}}"name="qs_question" class="form-control" placeholder="text">
            </div>
            <!--  ---------------------------------------------------------------------------------------------- -->
            <!-- <div class="form-group">
                <strong>ชอยส์ที่ 1</strong>
                <input type="text" name="ch_no1" class="form-control" value="{{ $qui->ch_desc }}">
            </div>
            <div class="form-group">
                <strong>ชอยส์ที่ 2</strong>
                <input type="text" name="ch_no2" class="form-control" value="{{ $qui->ch_desc }}">
            </div>
            <div class="form-group">
                <strong>ชอยส์ที่ 3</strong>
                <input type="text" name="ch_no3" class="form-control" value="{{ $qui->ch_desc }}">
            </div>
            <div class="form-group">
                <strong>ชอยส์ที่ 4</strong>
                <input type="text" name="ch_no4" class="form-control" value="{{ $qui->ch_desc }}">
            </div> -->
            @foreach($question as $qui)
                <strong>ชอยส์ที่ {!! $qui->ch_no !!}</strong>
                <input type="text" class="form-control" name = "choice{$qui->ch_no}" value="{!! $qui->ch_desc !!}"></input><br>
            @endforeach
<!--  ---------------------------------------------------------------------------------------------- -->
            <div class="form-group">
                <strong>ตัวเลือกที่ถูก</strong>
                <input type="text" value="{{ $qui->qs_ch_no_ans}}"name="qs_ch_no_ans" class="form-control">
            </div>
            <div class="form-group">
                <strong>เวลาในการทำ</strong>
                <input type="number"   value="{{ $qui->qs_ex_time}}"name="qs_ex_time" class="form-control">
                <!-- ใน php เราเป็น int(11) เป็น vachar ของ qs_ex_time -->
            </div>

            <div class="form-group">
                <strong>คะแนน</strong>
                <input type="number" value="{{ $qui->qs_score}}" name="qs_score" class="form-control">
            </div>

            <div class="form-group">
                <strong>วิชา</strong>
                <input type="text" readonly value="{{ $qui->crs_name}}"name="qs_crs_code" class="form-control">
            </div>
            <div class="form-group">
                <strong>อาจารย์</strong>
                <input type="text" readonly value="{{ $qui->tch_name}}"name="qs_tch_code" class="form-control">
            </div>

            <div class="form-group">
                <strong>วันที่ทำข้อสอบ</strong>
                <input type="date" value="{{ $qui->qs_ex_date}}" name="qs_ex_date" class="form-control" placeholder=" date">
            </div>
        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
