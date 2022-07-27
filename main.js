
function validation_mail()
{

    var masque_mail= /^\w+([.-]?\w+)@\w+([.-]?\w+)(\.\w{2,3})+$/;

    var mail= document.getElementById('mail').value;
    var mail2= document.getElementById('conf_mail').value;

    if(!masque_mail.test(mail) || mail !== mail2)
    {

        //afficher le nom en rouge

        document.getElementById('mail').className = 'form-control  text-danger';
        document.getElementById('conf_mail').className = 'form-control  text-danger';
        return false

    }
    else {
       document.getElementById('mail').className = 'form-control';
       document.getElementById('conf_mail').className = 'form-control';
       return true
    }
    
}

function validation_mdp()
{

    var masque_mdp= /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/;

    var mdp=document.getElementById('mdp').value;
    var mdp2=document.getElementById('conf_mdp').value;

    if(!masque_mdp.test(mdp) || mdp !== mdp2)
    {

        //afficher le nom en rouge

        document.getElementById('mdp').className = 'form-control text-danger';
        document.getElementById('conf_mdp').className = 'form-control  text-danger';
        return false

    }
    else {
        document.getElementById('mdp').className = 'form-control';
        document.getElementById('conf_mdp').className = 'form-control';
        return true
    }
// console.log(mdp)
}

function validation_mail_log()
{

    var masque_mail= /^\w+([.-]?\w+)@\w+([.-]?\w+)(\.\w{2,3})+$/;

    var mail= document.getElementById('mail').value;

    if(!masque_mail.test(mail))
    {

        //afficher le nom en rouge

        document.getElementById('mail').className = 'form-control  text-danger';
        return false

    }
    else {
       document.getElementById('mail').className = 'form-control';
       return true
    }
    
}

function validation_mdp_log()
{

    var masque_mdp= /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/;

    var mdp=document.getElementById('mdp').value;

    if(!masque_mdp.test(mdp))
    {

        //afficher le nom en rouge

        document.getElementById('mdp').className = 'form-control text-danger';
        return false

    }
    else {
        document.getElementById('mdp').className = 'form-control';
        return true
    }
// console.log(mdp)
}

function valid() 
{
    if(validation_mail() == true && validation_mdp() == true) {
        document.getElementById("formu").submit();
    }
    else {
        alert("IL Y A UNE COUILLEEEEE")
    }

}

function valid_log() 
{
    if(validation_mail_log() == true && validation_mdp_log() == true) {
        document.getElementById("formu").submit();
    }
    else {
        alert("IL Y A UNE COUILLEEEEE")
    }

}


// Changement automatique de l'image DE profil
function changeUrl()
{
  
    var url = document.getElementById("url").value;

    document.getElementById("userPicture").src=url;
}