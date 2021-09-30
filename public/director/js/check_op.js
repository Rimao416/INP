$(function(){
    $('#send_post').on('submit',function(e){
        e.preventDefault()
        var login=$('#login').val()
        var password=$('#password').val()
        if(login.length==0 || password.length==0){
            
            alert("Tous les champs doivent être remplies")
        }else{
            $.ajax({
                url:'../includes/director/check_login.php',
                method:"post",
        //        dataType:"json",
        //        data:$(this).serialize(),
                dataType:"json",
                data:$(this).serialize(),
                success:function(data){
                    if(data.error==true){
                        alert("ERREUR DE CONNEXION")
                    }
                if(data.error==false){
                    location.href="index.php";
                }
            //dataTable.ajax.reload()
        }
              })
        }
    })
})