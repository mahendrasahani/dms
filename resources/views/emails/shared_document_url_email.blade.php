<!-- resources/views/emails/document_view.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            background-color: #253a76;
            color: white;
            padding: 10px 0;
            border-radius: 10px 10px 0 0;
        }
        .content {
            margin-top: 20px;
        }
        .button-container {
            text-align: center;
            margin-top: 30px;
        }
        .view-button {
            background-color: #253a76;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .view-button:hover {
            background-color: #1b2b5a;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #999;
            margin-top: 40px;
        }
        .validation-date {
            font-style: italic;
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Document Notification</h2>
        </div>
        <div class="content">
            <p>Hello {{ $shared_document_url['user_email'] }},</p>
            <p>We are notifying you that a new document has been shared with you. You can view it using the link below.</p>
            <div class="button-container">
                <a href="{{ route('frontend.publicly_shared_document_view', [Crypt::encrypt($shared_document_url['doc_file']), Crypt::encrypt($shared_document_url['row_id'])]) }}" class="view-button" style="color:white;">View Document</a>
            </div>
            @if($shared_document_url['valid_until'] != NULL)
            <p class="validation-date">Please note: This link is valid until {{ Carbon\Carbon::parse($shared_document_url['valid_until'])->format('d M, Y') }}.</p>
            @endif
            <p>If you have any questions, feel free to contact us.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Cygnett. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
