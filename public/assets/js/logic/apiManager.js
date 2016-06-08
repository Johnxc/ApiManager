$(function(){
    $('#apiCategoryTree').tree({
        dnd: true,
        lines: true,
        method: 'get',
        url: 'apiCategory',
        onClick: function (node) {
            console.log(node);
        },
        onDrop: function (targetNode, source, point) {
            var targetId = $(this).tree('getNode', targetNode).id;
            console.log(targetId);
        }
    });
    $('#btnUpdateApiCategory').click(function () {
        var selectedNode = $('#apiCategoryTree').tree('getSelected');
        console.log(selectedNode);
        $.get('/admin/getCategoryRelation?id='+selectedNode.id,function(response){
            var currentNode = eval('('+response+')');
            console.log(currentNode.currentText);
            $('#currentId').val(currentNode.currentId);
            $('#rootPath').val(currentNode.rootText);
            $('#parentPath').val(currentNode.parentText);
            $('#currentPath').val(currentNode.currentText);
        });
    })
})
//
// function DataSourceTree(options,callback){
//     var $data = options.data;
//     if(!("text" in options) && !("type" in options)){
//         callback({ data: $data });
//         return;
//     }
//     else if("type" in options && options.type == "folder") {
//         if("additionalParameters" in options && "children" in options.additionalParameters)
//             $data = options.additionalParameters.children || {};
//         else $data = {}//no data
//     }
//
//     if($data != null)//this setTimeout is only for mimicking some random delay
//         setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);
//
//     //we have used static data here
//     //but you can retrieve your data dynamically from a server using ajax call
//     //checkout examples/treeview.html and examples/treeview.js for more info
// }