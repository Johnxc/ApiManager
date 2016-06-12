$(function(){
    $(document).on("click",".fa-plus",function () {
        addHHKeyRow($(this));
    });

    $(document).on("keydown",".groupInputBehind>input",function (event) {
        if(event.keyCode === 9){
            addHHKeyRow($(this));
        }
    });
    $(document).on("click",".fa-minus",function () {
        $(this).parent().parent().remove();
    });

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
            $('#currentId').val(currentNode.currentId);
            $('#rootPath').val(currentNode.rootText);
            $('#parentPath').val(currentNode.parentText);
            $('#parentId').val(currentNode.parentId);
            $('#currentPath').val(currentNode.currentText);
        });
    });
    $('#btnAddApiCategory').click(function () {
        var selectedNode = $('#apiCategoryTree').tree('getSelected');
        $.get('/admin/getCategoryRelation?id='+selectedNode.id,function(response){
            var currentNode = eval('('+response+')');
            console.log(currentNode.currentText);
            $('#rootPath').val(currentNode.rootText);
            $('#parentPath').val(currentNode.parentText);
            $('#parentId').val(currentNode.parentId);
        });
    })
});

function clickTabAddNewRow(obj,event) {
    if(event.keyCode === 9){
        addHHKeyRow(obj);
    }
}

function addHHKeyRow(obj){
    var tmp1 = $(obj).parent().parent();
    var newRow = $(obj).parent().parent().prop("outerHTML");
    $(obj).parent().parent().after(newRow);
}
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