$(function(){
    $.ajax({
        type:'get',
        url:'/admin/apiCategory',
        dataType:'json',
        success:function(response){
            // var treeDataSourceR = new DataSourceTree({data: response});
            // $('#categoryTree').ace_tree({
            //     dataSource: treeDataSourceR
            // });

        },error:function(response){

        }
    });

    $('#categoryTree').on('selected.fu.tree', function (e, info) {
        console.log('Select Event: ', info);
    });

    $('#categoryTree').on('loaded.fu.tree', function (e) {
        console.log('Loaded');
    });
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