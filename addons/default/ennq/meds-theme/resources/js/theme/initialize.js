(function (window, document) {

    $(document).ready(function() {
        $('#meds-table').DataTable({
            responsive: true,
            ordering: false,
            "pageLength": 112,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Russian.json"
            },
            "scrollX": true,
            "bAutoWidth": true
        });
    } );


})(window, document);
