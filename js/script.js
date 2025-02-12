document.querySelector("#show-login").addEventListener("click",function(){
    console.log("click show-login");
    document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
});

document.querySelector("#login").addEventListener("click",function(){
    console.log("click login");
    
    var user = $('#user').val();
    var password = $('#password').val();
    
    $.ajax({  
        type: 'POST',  
        url: 'login.php', 
        data: { user: user, password: password },
        dataType: 'json',
        success: function(response) {
            var message = response.message;
            if (response.success) {
                var user = response.user;
                $('#result').html(message);
                document.querySelector(".popup").classList.remove("active");
            }
            else{
                $('#resultpopup').html(message);
            }
        }
    });
});