<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Viewer</title>
</head>
<body>
    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src= {{ url($document->doc_path.'/'.$document->doc_file) }}" width="1366px" height="623px" frameborder="0">
        This is an embedded <a target="_blank" href="http://office.com">Microsoft Office</a> document, powered by
        <a target="_blank" href="http://office.com/webapps">Office Online</a>.
    </iframe>

    <br><br>
    <br><br>
    <br><br> 
    {{ url($document->doc_path.'/'.$document->doc_file) }}
</body>
</html>
