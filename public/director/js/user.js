var dataTable = $('#users_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
     url:"../includes/director/user_operation.php",
     type:"POST",
     data:{action:'fetch'}
    },
    "columnDefs":[
     {
      "targets":[0, 3, 4],
      "orderable":false,
     },
    ],
  
   });