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
            // order:"asc",
            // asyncResult: true,
            // loadingAnimation: true,
            source: function (query, process) {
                return $.ajax({
                    //TODO:fix send request
                    url: "/async-search",
                        // $('#typeahead_search').data('link'),
                    type: 'GET',
                    data: { query: query },
                    // dataType: 'json',
                    success: function (result) {

                        var resultList = result.map(function (item) {
                            //<div>
                            var aItem = { title: item.title, content: item.content, link: item.link };
                            return JSON.stringify(aItem);
                        });

                        return process(resultList);

                    }
                });
            },
        });
    });


})(window, document);
