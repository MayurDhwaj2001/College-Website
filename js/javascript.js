function postedmessage() 
{
    // document.getElementById('notice').innerHTML = "Notice Posted";
    document.getElementById("notice").style.marginTop="0px";
    
    // setTimeout(function(){document.getElementById("notice").innerHTML="";}, 4000);
    setTimeout(function(){document.getElementById("notice").style.marginTop="-500px";}, 3000);
    
    // window.history.back();
}

function loginfailed() 
{
    document.getElementById("error").style.marginTop="0px";
    
    setTimeout(function(){document.getElementById("error").style.marginTop="-500px";}, 3000);
    
}

function accountCreated() 
{
    document.getElementById("accountCreated").style.marginTop="0px";
    
    setTimeout(function(){document.getElementById("accountCreated").style.marginTop="-500px";}, 3000);
    
}


function IDDELETED() 
{
    document.getElementById("accountCreated").style.marginTop="0px";
    
    setTimeout(function(){document.getElementById("accountCreated").style.marginTop="-500px";}, 3000);
    
}

