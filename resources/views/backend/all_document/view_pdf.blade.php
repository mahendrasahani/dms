@extends('layouts/backend/main')
@section('main-section')

<div class="container mt-5 pt-5">
    <div class="text-center mb-4">
        <h1>Event Schedule</h1>
    </div>
    <table class="table table-bordered table-striped" id="eventTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Main Category</th>
                <th>Sub Category</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sample Event 1</td>
                <td>Category 1</td>
                <td>Subcategory A</td>
                <td>2024-06-17</td>
                <td>2024-06-18</td>
                <td>10:00 AM</td>
                <td>4:00 PM</td>
            </tr>
            <tr>
                <td>Sample Event 2</td>
                <td>Category 2</td>
                <td>Subcategory B</td>
                <td>2024-06-19</td>
                <td>2024-06-20</td>
                <td>9:00 AM</td>
                <td>5:00 PM</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <div class="text-center">
        <button id="generatePDF" class="btn btn-primary">Generate PDF</button>
    </div>
</div>

@section('javascript-section')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script>
    document.getElementById('generatePDF').addEventListener('click', async () => {
        const { jsPDF } = window.jspdf;
        const canvas = await html2canvas(document.getElementById('eventTable'));
        const imgData = canvas.toDataURL('image/png');
        const pdf = new jsPDF();
        pdf.addImage(imgData, 'PNG', 10, 10, 190, 0);
        pdf.save('event_schedule.pdf');
    });
</script>
@endsection
@endsection
