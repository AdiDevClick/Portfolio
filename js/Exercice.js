let ticket = {
    nomFilm: "Batman: The Dark Knight",
    prix: 30,
    numeroSalle: "4"
}

let nom = "Adi";
ticket.nombrePersonnes = 3;
console.log(ticket);

nomDuFilmVisionne = ticket.nomFilm;
console.log(nomDuFilmVisionne);
console.log("Bonjour "+ nom +", votre film " + ticket.nomFilm + " est en salle " + ticket.numeroSalle );

let texteAffichage = "Bonjour "+ nom +", votre film " + ticket.nomFilm + " est en salle " + ticket.numeroSalle ;
console.log(texteAffichage)

let monPersonnage = {
    nom: "Wayne",
    prenom: "Bruce",
    age: 35,
    couleurPreferee: "noir",
    hobbie: "Sortir la nuit"
}
//Ajouter une propriété vehiculeprefere
monPersonnage.vehiculePrefere = "Batmobile";
monPersonnage.costumePrefere = "Batsuit";

nomDeMonPersonnage = monPersonnage.nom
prenomDeMonPersonnage = monPersonnage.prenom
//monPersonnage = ticket.nom

console.log(nomDeMonPersonnage, prenomDeMonPersonnage)

/*const maCollectionDeFilms = [
    "Snatch",
    "Jurassic Park",
    "Le Seigneur des Anneaux",
    "One Piece"
];*/

let monFilmPrefere = "Snatch";
let monPremierFilm = "One Piece";

let maCollectionDeFilms = [monFilmPrefere, monPremierFilm];

let nombreDeFilms = maCollectionDeFilms.length;

maCollectionDeFilms.push("Le Seigneur des Anneaux");
console.log(maCollectionDeFilms + " test")



const maNouvelleCollection = maCollectionDeFilms;

console.log(maNouvelleCollection+ " test 2")


let nouveauFilm = "Astérix";
maCollectionDeFilms.push(nouveauFilm);
const NouvelleCollection = [maCollectionDeFilms, nouveauFilm];
maCollectionDeFilms.push("Mrs Butterfly");

NouvelleCollection.push("Batman")

console.log(NouvelleCollection+ " test 3");

console.log(maCollectionDeFilms + " Test 4")

// Copie par valeur
let variableSimple1 = 25
let variableSimple2 = variableSimple1
console.log(variableSimple1)

variableSimple2 += 11

console.log("variableSimple1", variableSimple1)
console.log("variableSimple2", variableSimple2)

///////////////////////
// Copie par référence
///////////////////////
let variableComplexe1 = ['pomme', 'cerise']
let variableComplexe2 = variableComplexe1
let variableComplexe3 = [...variableComplexe1];

variableComplexe2.push('poire')

// Le console.log va afficher pomme cerise ET poire. On a modifié la seconde variable, mais le contenu de la première a été changé aussi, parce que c’est le même contenu.
console.log('variableComplexe1', variableComplexe1)
console.log('variableComplexe2', variableComplexe2)
console.log('variableComplexe3', variableComplexe3)


///////////////////////
// Excercice
///////////////////////


/*morceaux
totalMorceaux*/
const titres = {
    Coldplay: "Ma petite soeur",
    Adele: "Ma grande soeur",
    Queen: "Ma toute petite soeur"
}

const playlist = [
    titres.Coldplay, titres.Queen, titres.Adele
]

let totalMorceaux = playlist

totalMorceaux.push("Bruno Mars","Beyoncé")

totalMorceaux.pop()

console.log(playlist)


