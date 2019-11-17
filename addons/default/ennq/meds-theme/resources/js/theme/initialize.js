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

        //http://www.runningcoder.org/jquerytypeahead/demo/
        //http://www.runningcoder.org/jquerytypeahead/
        $('#typeahead_search').typeahead({
            href: "{{SearchEntry.link}}",
            template: "{{SearchEntry.title}} <small style='color:#999;'>{{SearchEntry.content}}</small>",
            source: {
                SearchEntry: {
                    ajax:{
                        url: "/async-search",
                        path: "SearchEntry.title"
                    }
                }
            },
        });
    });


})(window, document);
