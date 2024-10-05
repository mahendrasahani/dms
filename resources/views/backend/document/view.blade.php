@extends('layouts/backend/main')
@section('main-section')

<!-- <iframe src="{{ url('public/folders/Administration/ADMIN-1/1724649387.docx') }}" width="100%" height="600px"></iframe> -->
<!-- <embed src="{{ url('public/folders/Administration/ADMIN-1/1724649387.docx') }}" type="application/pdf" width="100%" height="600px"> -->
<iframe src='https://view.officeapps.live.com/op/embed.aspx?src={{ url($document->doc_path.'/'.$document->doc_file) }}' width='1366px' height='623px' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>

<br><br>
<br><br>
<br><br>
{{ url($document->doc_path.'/'.$document->doc_file) }}
@section('javascript-section') 
@endsection

@endsection
