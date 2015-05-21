var oTable=null;
$(document).ready(function()
{
    oTable = $('#allBlogs').dataTable({
        "ajax": 'http://b2.com/getAllblogs',
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
    });

});
