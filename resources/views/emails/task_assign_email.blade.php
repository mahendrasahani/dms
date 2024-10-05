
<!-- See the settings for some head CSS styles -->
<table class="email" width="100%" border= 0; cellspacing=0; cellpadding="20" style="border-bottom-width: 10px; border-bottom-style: solid; border-bottom-color: #253a76">
  <tr>
    <td class="header" style="background-color: #253a76;">
      <table border="0" style="color: #fff; width: 600px; margin: 0 auto; font-family: Arial, Helvetica, sans-serif;" cellspacing="0"  width="600">
          <tr>
            <td colspan="2">
              <h1>{{$task_assign_data['assign_by']}} has assigned a task.</h1>
            </td>
          </tr>
        </table>
    </td>
  </tr>
 <tr>
    <td class="content" style="background-color: #e6f4ff;">
    <table border="0" style="color: #444; width: 600px; margin: 0 auto; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #ddd; font-family: Arial, Helvetica, sans-serif; line-height: 1.4;" cellpadding="15" cellspacing="1"  width="600">
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Assign By:</strong></td>
         <td>{{$task_assign_data['assign_by']}}</td>
       </tr>
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Document Title</strong></td>
         <td>{{$task_assign_data['document_title']}}</td>
       </tr>
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Start Date</strong></td>
         <td>{{Carbon\Carbon::parse($task_assign_data['start_date'])->format('d M, Y')}}</td>
       </tr>
       <tr  style="background-color:#fff">
         <td width="30%"><strong>End Date</strong></td>
         <td>{{Carbon\Carbon::parse($task_assign_data['end_date'])->format('d M, Y')}}</td>
       </tr>
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Task Url:</strong></td>
         <td><a href="{{$task_assign_data['task_url']}}">Click To View</td></a>
       </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td class="footer" width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #e6f4ff;">
      <table border="0" style="width: 600px; margin: 0 auto; font-family: Arial, Helvetica, sans-serif; margin-bottom: 20px; font-size: small; color: #999;" cellspacing="0" width="600">
          <tr>
            <td width="60%">
              <p style="font-size: 20px; font-weight: bold;">Cygnett Hotels</p>
              <p> 606, 6th Floor, Tower-D, Unitech Cyber Park, Sector 39, Gurgaon 122003, Haryana, India</p>
            </td>
            <td style="text-align: right;">centralreservations@cygnetthotels.com</td>
          </tr>
        </table>  
    </td>
  </tr>
</table>