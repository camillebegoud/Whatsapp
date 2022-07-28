//verification de tous les champs sur login


function validation_login()
{

    var php_mail = false;

    var php_mdp = false;

if (php_mail == false){
    var masque_mail= /^\w+([.-]?\w+)@\w+([.-]?\w+)(\.\w{2,3})+$/;

    var mail=document.getElementById('mail').value;

    if(!masque_mail.test(mail))
    {
        //afficher le nom en rouge
        document.getElementById('mail').className = 'input_resp text_rouge';
        document.getElementById('error_email').className = 'show';
    }
    else {
       document.getElementById('mail').className = 'input_resp';
       document.getElementById('error_email').className = 'hidden';
       php_mail = true;
    }
}

if(php_mdp == false){
    var masque_mdp= /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/;

    var mdp=document.getElementById('mdp').value;

    if(!masque_mdp.test(mdp))
    {
        //afficher le nom en rouge
        document.getElementById('mdp').className = 'input_resp text_rouge';
        document.getElementById('error_pwd').className = 'show'
    }
    else {
        document.getElementById('mdp').className = 'input_resp';
        document.getElementById('error_pwd').className = 'hidden'
        php_mdp = true;
    }
}

if(php_mail == true && php_mdp == true){
    document.getElementById('form_login').submit()
}
}



//verification du mot de passe

function validation()
{
var php_mail = false;

var php_mdp = false;

if (php_mail == false){
    var masque_mail= /^\w+([.-]?\w+)@\w+([.-]?\w+)(\.\w{2,3})+$/;

    var mail=document.getElementById('mail').value;
    
    var email_confirm=document.getElementById('mail_confirm').value;

    if(!masque_mail.test(mail))
    {
        //afficher le nom en rouge
        document.getElementById('mail').className = 'mail text_rouge';
        document.getElementById('error_email').className = 'show';
    }
    else {
       document.getElementById('mail').className = 'mail';
       document.getElementById('error_email').className = 'hidden';
       if( email_confirm == mail )
       {
           document.getElementById('mail_confirm').className = 'mail';
           document.getElementById('error_email_bis').className = 'hidden'
           php_mail = true
       }
       if(email_confirm!== mail) {
           document.getElementById('mail_confirm').className = 'mail text_rouge';
           document.getElementById('error_email_bis').className = 'show'
           php_mail = false
       }
    }
    
    }

    if (php_mdp == false){
    var masque_mdp= /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/;

    var mdp=document.getElementById('mdp').value;

    var mdp_confirm =document.getElementById('mdp_confirm').value;

    if(!masque_mdp.test(mdp))
    {
        //afficher le nom en rouge
        document.getElementById('mdp').className = 'mdp text_rouge';
        document.getElementById('error_pwd').className = 'show'
    }
    else {
        document.getElementById('mdp').className = 'mdp';
        document.getElementById('error_pwd').className = 'hidden'
        if( mdp_confirm == mdp )
        {
            document.getElementById('mdp_confirm').className = 'mdp';
            document.getElementById('error_pwd_bis').className = 'hidden'
            php_mdp = true;
        }
        if(mdp_confirm!== mdp) {
            document.getElementById('mdp_confirm').className = 'mdp text_rouge';
            document.getElementById('error_pwd_bis').className = 'show'
            php_mdp = false;
        }
    }
}
 if(php_mail == true && php_mdp == true){
    document.getElementById('form_signup').submit()
 }
}


function changeUrl()
{
  
    var url = document.getElementById("url").value;

    document.getElementById("userPicture").src=url;
}