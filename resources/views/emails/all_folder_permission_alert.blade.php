<!-- resources/views/emails/document_view.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folder Permission Update Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6e9f1; /* Light grey-blue background for contrast */
            padding: 20px;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            border: 2px solid #253a76; /* Blue border */
        }
        .header {
            text-align: center;
            background-color: #253a76;
            color: white;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
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
            background-color: #253a76;
            color: white;
            padding: 10px 0;
            border-radius: 0 0 8px 8px;
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
            <h2>Folder Permission Update Notification</h2>
        </div>
        <div class="content">
            <p>Hello {{$all_folder_permission_alert_data['user_name']}},</p>
            
            @if($all_folder_permission_alert_data['sub_folders'] != null)
            <p>We are notifying you that your permissions for a specific folder have been updated.</p>
            @php
            $sub_folder_list = App\Models\Backend\SubFolder::with('getMainFolder')->whereIn('id', $all_folder_permission_alert_data['sub_folders'])->get();
            
            @endphp
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr style="background-color: #253a76; color: white;">
            <th style="padding: 10px; border: 1px solid #253a76; text-align: left;">Main Folder</th>
            <th style="padding: 10px; border: 1px solid #253a76; text-align: left;">Sub Folder</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sub_folder_list as $s_folder) 
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">{{$s_folder->getMainFolder?->name}}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{$s_folder->name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<p>We are notifying you that your all folder permission have been removed. You no longer have access to view any folder</p>

@endif  

            <!-- <p>You now have the following access:</p> -->
            <!-- <p><strong>Access Status:</strong> Granted</p>   -->
            
            <!-- <div class="button-container">
                <a href="" class="view-button" style="color:white;">View Folder</a>
            </div>  -->
            
            <p>If you have any questions, feel free to contact us.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Cygnett. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
