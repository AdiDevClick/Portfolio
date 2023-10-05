///////////////////////////////////////////////////// 
// On recherche des insultes
///////////////////////////////////////////////////// 

function replaceAlert(noAlert) {
    let zoneInsults = document.querySelector(".header-main h2")
    zoneInsults.textContent = noAlert
}

function isInsulted (texte, insults) {  
    let zoneInsults = document.querySelector(".header-main h2")
    for (i = 0;
        i < insults.length;
        i++) {
        if (texte === insults[i]) {
        zoneInsults.textContent = alertInsult
    }}
} 

/* function checkInsults (userText, insultes, alertInsult) {

    let zoneInsults = document.querySelector(".header-main h2")
    console.log(zoneInsults)
    //let alerteInsults = "Surveillez votre langage, les insultes ne sont pas tolérées !"  
    //let noAlerts = "L'Application pour écrire plus vite! 2"  
    //insults.textContent = "L'Application pour écrire plus vite! 2" 
/*  for(let i = 0;
            i < insultes.length;
            i++) {    
                console.log(userText)   */
            //while (userText !== insultes[i]) {
            //mot = prompt("Surveillez votre langage, les insultes ne sont pas tolérées !Le mot est " +motApp)
            //mot = prompt("Surveillez votre langage, les insultes ne sont pas tolérées !"
            //zoneInsults.textContent = noAlerts
            
            /* for(let i = 0;
                    i < insultes.length;
                    i++) { 
                if (userText === insultes[i]) {                    
                //mot = prompt("Surveillez votre langage, les insultes ne sont pas tolérées !Le mot est " +motApp)
                //mot = prompt("Surveillez votre langage, les insultes ne sont pas tolérées !"
                zoneInsults.textContent = `${alertInsult}`
                consoletexte.value)
                //return true     
                }
            }
        return     */
    //}
    


/*function promptMotApp(mot, motApp) {
    mot = prompt("Entrez le mot : " + motApp)
    return mot, motApp    
} */   
    
///////////////////////////////////////////////////// 
// On demande à l'utilisateur quel type de jeu il souhaite 
// et avec choix obligatoire 
///////////////////////////////////////////////////// 

/*function gameType(motApp, phraseApp) {
    let choix = prompt("Veuillez choisir votre type de jeux : " + motApp + " ou " + phraseApp);
    while ((choix !== motApp) && (choix !== phraseApp)) {
        choix = prompt("Vous devez choisir votre jeux en tappant : " + motApp + " ou en tappant : " + phraseApp);
    }
    return choix
}*/

function checkGameType() {
    let listeRadioInputs = document.getElementsByName("optionSource") ; // les boutons radio 
        for(let i = 0;
                i < listeRadioInputs.length;
                i++) {  
                    listeRadioInputs[i].addEventListener("change", (event) => {
                        if (listeRadioInputs[i].checked == true) {
                            listeRadioInputs[i].value
                            //return listeRadioInputs[i].value
                }
                console.log(listeRadioInputs[i].value)
                //return listeRadioInputs[i].value
            })
            console.log(listeRadioInputs[i])
            //return listeRadioInputs[i].value
    } 
    //eturn listeRadioInputs[i].value
}


    console.log(checkGameType())
    
    
    typeMots
    typePhrases

///////////////////////////////////////////////////// 
// On récupère les boutons
///////////////////////////////////////////////////// 
/*function monBoutonUtilisé() {
    let listeBoutons = document.querySelectorAll(".button")
        for (i = 0;
             i < listeBoutons.length;
             i++) {                
                monBouton = listeBoutons[i]
                monBouton.addEventListener ("click", (event) => 
                    {
                    monBouton = event.target
                    console.log(`J'ai récupéré mon bouton ${monBouton.id}`)
                    })
            }
        console.log(`J'ai revérifié mon bouton ${monBouton.id}`)
        
}


///////////////////////////////////////////////////// 
// On exécute les questions en fonction du choix 
///////////////////////////////////////////////////// 



///////////////////////////////////////////////////// 
// On demande un mot à l'Utilisateur, on check ses insultes et il aura 3 essais
//////////////////////////

/*function checkWords(mot, motApp,insultes) {
    for (i2 = 0;
    i2 < insultes.length;
    i2++) {
    
    i = 1
    while ((mot !== motApp) && i < 3) { // 3 essais en tout
        mot = prompt("Essai : "+ i + "/3 C'est pas le bon mot... Le mot est : " + motApp);
        i++ 
        //score--   
     
        if (mot === insultes[i2]) {
        mot = prompt("Surveillez votre langage ! Le mot est : " +motApp)    
        } 
        return                      
        } 
    }score++ 
} */ 

/**
 * Cette fonction vérifie le score en 
 * fonction du nombre de mots/phrases à réécrire.
 * 
 * @returns 
 */



function retournerAffichageScore (score, nombreQuestions) {
    let affichageScore = `${score} / ${nombreQuestions}`;
    let span = document.querySelector(".score span")
    span.innerText = affichageScore
    return affichageScore
}

/*function checkWords(mot, motApp) {
    let i = 0
    while ((mot !== motApp) && i < 3) 
    { // 3 essais en tout
        i++ 
        mot = prompt("Essai : "+ i + "/3 C'est pas le bon mot... Le mot est : " + motApp);
        //score-- 
        for (   i2 = 0;
                i2 < insultes.length;
                i2++
            ) {
            if ((mot === insultes[i2]) && i < 3) {
                i++
                mot = prompt("Surveillez votre langage ! Le mot est : " +motApp)    
            }
        } 
    }     
    return mot
}*/



function afficherLeMot(proposition) {
    let listeDeMots = document.querySelector(".liste h4")       
    
    /* let i = 0;
            while (i < proposition.length )
            {   
                motApp = proposition[i]
                i++ 
                         
            }  */
    listeDeMots.innerText = proposition  
    //return proposition
}

/* function afficherLeMot(proposition) {
    let listeDeMots = document.querySelector(".liste h4")
       
    for (   let i = 0;
                i < proposition.length;
                i++) {
                    proposition = proposition[i]
                }
    listeDeMots.innerText = proposition               
    return proposition
} */

/**
 * Cette fonction lance le jeu.
 * Elle demande à l'utilisateur de choisir entre "mots" et "phrases" et lance la boucle
 */


                
            
/****
 * La bonne fonction de lancement
 * 
 *  */    



function lancerJeu() {;
    let i = 0;
    let score = 0;

    let boutonValider = document.getElementById("valider");
    let texte = document.getElementById("texte");
    
    afficherLeMot(listeMots[i]) ;
    
    boutonValider.addEventListener ("click", () => {
        if (texte.value === listeMots[i]) {
            score++ 
                             
        }; 
        replaceAlert(noAlert)
        i++;
        retournerAffichageScore (score, i) ;
                
        if (listeMots[i] === undefined) {
            
            afficherLeMot("Le jeu est fini !") ;
            isInsulted (texte.value, insultes)
            texte.value = ''
            boutonValider.disabled = true ;
        } else {
            isInsulted (texte.value, insultes)
            texte.value = ''
            afficherLeMot(listeMots[i]);  
        }
        })
    retournerAffichageScore (score, i) ;           
    //checkInsults(userText, insultes)
}
                    
//console.log(textUser)*/

//}) 
                




    /*let valider = document.getElementById("valider");
    let i = 0;
    while ((mot !== motApp) && i < 3) {          
            valider.addEventListener ("click", () => 
                {
                i++
                console.log(nombreClicks[i])
                console.log(nombreClicks[i] + "lol")
                })  
            console   
                
    }


/*function lancerJeu() {
    let nombreDeQuestions;
    //choix = gameType(typeMots, typePhrases);
    if (gameType(typeMots, typePhrases) === typeMots) {             
            lancerBoucleDeJeu (listeMotsApplication)
            nombreDeQuestions = listeMotsApplication.length 
        } else { lancerBoucleDeJeu(listePhrasesApplication)
            nombreDeQuestions = listePhrasesApplication.length
        }
    retournerMessageScore (score, nombreDeQuestions)
    return false
} */

//////////////////
// Non fonctionnel
//////////////////


///////////////////////////
// Excercice d'algorithêt
///////////////////////////


