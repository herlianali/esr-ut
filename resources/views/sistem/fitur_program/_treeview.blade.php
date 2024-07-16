<link href="{{ asset('stisla/assets/modules/jstree/jstree.bundle.css?v=7.0.9') }}" rel="stylesheet" type="text/css" />
<div id="tree_view_fitur_program" class="tree-demo mb-5" style="overflow-x: scroll;">
</div>
<script src="{{ asset('stisla/assets/modules/jstree/jstree.bundle.js?v=7.0.9') }}"></script>
<script>
    divTree = $("#tree_view_fitur_program");
    divTree.jstree({
        core: {
            themes: {
                responsive: false
            },
            check_callback: true,
            data: JSON.parse(`{!! json_encode($fitur_program) !!}`),
        },
        types: {
            default: {
                icon: "fa fa-folder text-primary"
            },
        },
        plugins: ["types"]
    }).on("refresh.jstree", function () {
        $(this).jstree("open_all");
    }).on("select_node.jstree", function (e, data) {
        console.log(data)
        // on_click_tree_view_fitur_program(data.node.original);
    });
    divTree.jstree(true).refresh(true);
</script>
