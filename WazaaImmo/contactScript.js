document.getElementById("contact").addEventListener("submit",function (e){
    var erreur ;

    // const inputs =this ;
    // traitement cas par cas 
    // if (inputs["email"].value !=new RegExp("^[a-z0-9.-_]+@[a-z0-9.-]{2,}.[a-z]{2,4}$"))
    // {
	// 	erreur = "Adresse email incorrecte";
	// }

    // traitement générique
    // for (var i = 0; i < inputs.length; i++)
    // {
	// 	console.log(inputs[i]);
	// 	if (!inputs[i].value) {
	// 		erreur = "Veuillez renseigner tous les champs";
	// 		break;
	// 	}
	// }

var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var adresse = document.getElementById("adresse");
var postal = document.getElementById("postal");
var ville = document.getElementById("ville");
var tel = document.getElementById("tel");
var email = document.getElementById("email");
const question= document.getElementById("question");
if ( !question.value)
{
    erreur = "Veuillez posez votre question";
}

// const emailFiltre = /^[0-9][0-9]?\/[0-9][0-9]?\/[0-9]{4}$/;
// if (emailFiltre.test(email.value)==false)
// {
//     erreur = "Email incorrecte";
// }
// if (filtre !=(document.getElementById("email").value))
// {
//     erreur = "Email incorrecte";
// }
 test = document.getElementById("cgu").checked;
if (!test)
{
    erreur = "veuillez cocher la case la case";
}

if (!email.value){
    erreur = "veuillez renseigner le champ email"
}

if (!tel.value){
    erreur = "veuillez renseigner le champ téléphone"
}

if (!ville.value){
    erreur = "veuillez renseigner le champ ville"
}

if (!postal.value){
    erreur = "veuillez renseigner le champ code postal"
}

if (!adresse.value){
    erreur = "veuillez renseigner le champ adresse"
}

const regex = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
if (!prenom.value){
    erreur = "veuillez renseigner le champ prénom"
}




    if (!nom.value)
    {
        erreur = "veuillez renseigner le champ nom"
    }
    if(regex.test(nom.value)== false)
    {     
        erreur = 'Format incorrect';
    }

    
    




cgu.addEventListener("change",function ()
{
    erreur.innerHTML = "Veuillez cochez la case cgu";
});


if (erreur)
{
    e.preventDefault();
    document.getElementById("erreur").innerHTML = erreur ;
    return false;
}
else
{
    alert("formulaire envoyé !");
}


});

