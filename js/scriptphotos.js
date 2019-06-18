/*
	Fichier de définition des JavaScripts
	Modifié le 05 Mai 2018 par Florian Laignez
*/

	// Déclaration des variables Globales
	var variableGlobale;  // Description de la variable
	var listeVignettes;
	
	// Fonctions d'initialisations diverses
	var init = function() {         // Javascript exécuté à l'ouverture de la page	
		telechargementListeDossiers('Paysages');
	}
	
	var declarationAbonnements = function() {         // Javascript exécuté à l'ouverture de la page
		document.getElementById('zoneListeDossiers').onchange = function() {choixDossier(this);} ;   // Declaration de l'abonnement
	}
	// On ne provoque l'appel à la fonction declarationAbonnements() qu'après le chargement complet de la page
	// Le chargement de la page provoque un événement "load"
	// En attendant la fin du chargement on est certain que tous les éléments ont été créés avant de mettre en place les abonnements
	window.addEventListener("load", declarationAbonnements);
	window.addEventListener("load", init);

	// Définition des fonctions appelées lors des événements
	var fonctionAbonnee = function() {
		// Code de la fonction abonnée

	}

	// Définition des autres fonctions 
	var autreFonction = function(parametre1,parametre2) {
		// Code de la fonction 
	}

	// Créer les div correspondant au contenu des images fournies par la liste transmise
	var afficheVignette = function(liste, p_id, id){
		var nbreVignettes=liste.length;
		zoneVignette=document.getElementById(p_id);
		zoneVignette.innerHTML="";
		

		for (numVignette=0; numVignette<nbreVignettes; numVignette++) {
			zoneVignette.innerHTML+='<img id="ApercuPhoto" onclick="onClick(this)"  id=imgV'+numVignette+' src="Photos/'+id+'/'+liste[numVignette]+' " alt="'+liste[numVignette]+'" />';
		}
		// Création des événements sur les div images
		for (numVignette=0; numVignette<nbreVignettes; numVignette++) {
			var iDiv='imgV'+numVignette;
			document.getElementById(iDiv).addEventListener('click', function() { clicVignettes(this.id); } );		
		}
	}	

	var telechargementVignettes = function(dossierSelectionne) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				//alert(this.responseText);
				if (this.responseText) {
					listeVignettes = JSON.parse(this.responseText);				
					afficheVignette(listeVignettes,'zonePhotos',dossierSelectionne);
				} else {
					document.getElementById('zonePhotos').innerHTML='';	// On efface la zone
				}
			}
		};
		xmlhttp.open('GET', 'listeVignettes.php?Dossier='+dossierSelectionne, true);
		xmlhttp.send();
	}
	// Remplissage de l'élément SELECT
	var afficheListeDossiers = function(liste, p_id) {
		var nbreDossiers=liste.length;
		document.getElementById('zoneBoutons').innerHTML = "";
		for (numDossier=nbreDossiers; numDossier>0; numDossier--) {
			zoneBoutons.innerHTML+='<button class="BoutonSelection" value='+liste[numDossier-1]+' onclick="telechargementListeDossiers(this.id);" id='+liste[numDossier-1]+'>'+liste[numDossier-1]+'</button>';
		}

	}
	var telechargementListeDossiers=function(id) {
		//alert(id);
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				listeDossiers = JSON.parse(this.responseText);
				//id = listeDossiers = JSON.parse(id);
				afficheListeDossiers(listeDossiers,'zoneListeDossiers');
				telechargementVignettes(id);
			}
		};
		xmlhttp.open("GET", "listeDossiers.php", true);
		xmlhttp.send();
	}

	var choixDossier = function(id) {
		//alert(id.value);
		telechargementVignettes(id.value);
	}
	
	function onClick(element) {
	    document.getElementById("image").src = element.src;
		document.getElementById("fenetremodale").style.display = "block";
	}