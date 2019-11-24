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
            cancelButton: false,
            minLength: 3,
            delay: 500,
            dynamic:true,
            href: "{{SearchEntry.data.link}}",
            template: "{{SearchEntry.data.title}} <small style='color:#999;'>{{SearchEntry.data.content}}</small>",
            source: {
                SearchEntry: {
                    ajax: function (query) {
                        return {
                            url: "/async-search",
                            data: {
                                query: query
                            },
                            path: "SearchEntry.data.title"
                        }
                    }
                }
            },
        });
    });


})(window, document);
