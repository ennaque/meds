(function (window, document) {

    $(document).ready(function () {
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

        $('#typeahead_search').typeahead({
            href: "{{SearchEntry.data.link}}",
            template: "{{SearchEntry.data.title}} <small style='color:#999;'>{{SearchEntry.data.content}}</small>",
            source: {
                SearchEntry: {
                    ajax: {
                        url: "/async-search",
                        path: "SearchEntry.data.title"
                    }
                }
            },
            cancelButton: false,
            minLength: 3
        });
    });


})(window, document);
