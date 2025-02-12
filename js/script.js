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
        success: function(response) {
            content.html(response);
        }
    });
});