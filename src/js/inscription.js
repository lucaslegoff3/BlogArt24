
function popUpInscription(){
    let pop_up_inscription = document.getElementById("pop-up-inscription");
    pop_up_inscription.classList.remove("hidden");
}



$(".bouton").click(function(){
	$("#modal .message").html("Contenu de ma modal");
	$("#modal").addClass("open");
});

$("#modal .mask, #modal a.close").click(function(){
	document.getElemenyById("modal").removeClass("open");
	return false;
});