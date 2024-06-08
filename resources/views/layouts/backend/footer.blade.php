<script src="{{ url('public/assets/backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/app.min.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/app.init.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
</script>
<script src="{{ url('public/assets/backend/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/waves.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/sidebarmenu.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/feather.min.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/custom.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/pages/dashboards/dashboard1.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/taskboard/js/jquery-ui.min.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/pages/chat/chat.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js') }}">
</script>
<script src="{{ url('public/assets/backend/assets/extra-libs/taskboard/js/lobilist.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/taskboard/js/lobibox.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/taskboard/js/task-init.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/popper.js/popper.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/moment/min/moment.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ url('public/assets/backend/dist/js/pages/calendar/cal-init.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}">
</script>
<script src="{{ url('public/assets/backend/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/prism/prism.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{ url('public/assets/backend/assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/jquery.repeater/repeater-init.js') }}"></script>
<script src="{{ url('public/assets/backend/assets/extra-libs/jquery.repeater/dff.js') }}"></script>

<script src="{{ url('public/assets/backend/assets/extra-libs/jqbootstrapvalidation/validation.js') }}"></script>



<script>
    (function() {
        "use strict";
        window.addEventListener(
            "load",
            function() {
                var forms = document.getElementsByClassName("needs-validation");
                var validation = Array.prototype.filter.call(
                    forms,
                    function(form) {
                        form.addEventListener(
                            "submit",
                            function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    }
                );
            },
            false
        );
    })();
</script>
</body>

</html>
