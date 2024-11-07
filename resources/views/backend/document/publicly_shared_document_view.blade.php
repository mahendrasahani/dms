<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Viewer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icon library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" integrity="sha384-He3RckdFB2wffiHOcESa3sf4Ida+ni/fw9SSzAcfY2EPnU1zkK/sLUzw2C5Tyuhj" crossorigin="anonymous">
</head>
<body>
   <div class="container-fluid">
        <div class="row"> 
            <div class="col-12" style=" height: 100%; width: 100%;">
            @if($file_type == 'doc' || $file_type == 'docx' || $file_type == 'xls' || $file_type == 'xlsx')
            <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ url($document->shared_url.'/'.$document->doc_file) }}" width="1366px" height="900px" frameborder="0">
                This is an embedded <a target="_blank" href="http://office.com">Microsoft Office</a> document, powered by
                <a target="_blank" href="http://office.com/webapps">Office Online</a>.
            </iframe> 
            @elseif($file_type == 'pdf')
            <div id="pdfViewer" style="height:900px; text-align:center;"></div> 
            @elseif($file_type == 'jpg' || $file_type == 'jpeg' || $file_type == 'png' || $file_type == 'gif' || $file_type == 'webp')
            <div style="height:900px; text-align:center;">
                <img src="{{ url($document->shared_url.'/'.$document->doc_file) }}" alt="Image" height="100%">
            </div>
            @endif 
    </div>
      </div>
    </div>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @if($file_type == 'pdf') 
        <script>
            const pdfUrl = "{{ url($document->shared_url.'/'.$document->doc_file) }}";
            const pdfViewer = document.getElementById('pdfViewer');
            pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
                const totalPages = pdf.numPages;
                function renderPage(pageNumber) {
                    pdf.getPage(pageNumber).then(function(page) {
                        const scale = 1.5;
                        const viewport = page.getViewport({ scale: scale });
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;
                        pdfViewer.appendChild(canvas);
                        const renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };
                        page.render(renderContext).promise.then(function() {
                            if (pageNumber < totalPages) {
                                renderPage(pageNumber + 1);
                            }
                        });
                    });
                } 
                renderPage(1);
            }).catch(function(error) {
                console.error('Error loading PDF:', error);
            });
        </script> 
@endif
</body>
</html>
