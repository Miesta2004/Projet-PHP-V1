<?php
   //definir un tableau de 5  demandes
     //une demande est caracterise
         //numero, chaine genere aleatoirement
         //date 
         //Etat(Encours,Accepte,Refuse)
         //Type (Suspension ou Annulation)
         //motif
         //etudiant (matricule,nom,prenom,
                //dateNaiss(Date php),
                //classe(filiere,niveau,code))

   // fonction qui retourne le tableau de demande
   // fonction qui retourne le tableau de demande par type
   // fonction qui retourne le tableau de demande par etat


    function getClasses(){
        return [
            [
                "id_C"=>1,
                "filiere"=>"ETSE",
                "niveau"=>"L1",
                "code"=>"A",
                "nom"=>"L1 A",
            ],
            [
                "id_C"=>2,
                "filiere"=>"GLRS",
                "niveau"=>"L2",
                "code"=>"A",
                "nom"=>"L2 GLRS-A",
            ],
            [
                "id_C"=>3,
                "filiere"=>"CDSD",
                "niveau"=>"L2",
                "code"=>"B",
                "nom"=>"L2 CDSD-B",
            ],
            [
                "id_C"=>4,
                "filiere"=>"ETSE",
                "niveau"=>"L3",
                "code"=>"A",
                "nom"=>"L3 ETSE-A",
            ],
            [
                "id_C"=>5,
                "filiere"=>"IAGE",
                "niveau"=>"L1",
                "code"=>"F",
                "nom"=>"L1 F",
            ],
        ];
    }


    function getAnnee(){
        return [
            [
                "id"=>1,
                "nom"=>"2023-2024",
                "etat"=>1
            ],
            [
                "id"=>2,
                "nom"=>"2022-2023",
                "etat"=>0
            ],
        ];
    }


    function getDemandes(){
        return [
            [
                "id"=>1,
                "date"=>"01/12/23",
                "etat"=>"En cours",
                "type"=>"Suspension",
                "motif"=>"changement d'avis",
                "etudiant_id"=>1,
                "annee_id"=>0,
                "etat"=>"En cours"
            ],
            [
                "id"=>2,
                "date"=>"23/09/23",
                "etat"=>"Accepté",
                "type"=>"Annulation",
                "motif"=>"rien",
                "etudiant_id"=>1,
                "annee_id"=>1,
                "etat"=>"Refusé"
            ],
            [
                "id"=>3,
                "date"=>"05/03/23",
                "type"=>"Suspension",
                "motif"=>"plus envie",
                "etudiant_id"=>1,
                "annee_id"=>1,
                "etat"=>"Validé"
            ],
            [
                "id"=>4,
                "date"=>"14/04/23",
                "etat"=>"En cours",
                "type"=>"Annulation",
                "motif"=>"Pas moyen",
                "etudiant_id"=>1,
                "annee_id"=>1,
                "etat"=>"En cours"
            ],
            [
                "id"=>5,
                "date"=>"02/10/23",
                "etat"=>"Refusé",
                "type"=>"Annulation",
                "motif"=>"je sais pas",
                "etudiant_id"=>1,
                "annee_id"=>0,
                "etat"=>"Validé"
            ],
            
         ];
    
    }
    $tableau=getDemandes();


    function getEtudiants(){
        return [
            [
                "id"=>1,
                "matricule"=>"MAT001",
                "nom"=>"FALL",
                "prenom"=>"Fatimata",
                "login"=>"etudiant@gmail.com",
                "password"=>"passer123",
                "class_id"=>1
            ],
            [
                "id"=>2,
                "matricule"=>"MAT002",
                "nom"=>"TALL",
                "prenom"=>"Aminata",
                "login"=>"etudiant@gmail.com",
                "password"=>"passer123",
                "class_id"=>2
            ],
            [
                "id"=>3,
                "matricule"=>"MAT003",
                "nom"=>"SOW",
                "prenom"=>"Khadidjatou",
                "login"=>"etudiant@gmail.com",
                "password"=>"passer123",
                "class_id"=>2
            ],
            [
                "id"=>4,
                "matricule"=>"MAT004",
                "nom"=>"BENGUE",
                "prenom"=>"Ndeye",
                "login"=>"etudiant@gmail.com",
                "password"=>"passer123",
                "class_id"=>1
            ],
            [
                "id"=>5,
                "matricule"=>"MAT005",
                "nom"=>"SY",
                "prenom"=>"Codou",
                "login"=>"etudiant@gmail.com",
                "password"=>"passer123",
                "class_id"=>1
            ]
        ];
    }
    $etudiants=getEtudiants();
    
   // fonction qui retourne le tableau de demande
   function show($tableau){
    foreach($tableau as $demande){
        foreach ($demande as $elements=>$val){
            if(is_array($elements)){
                foreach($elements as $element=>$valeur){
                    echo "$element: $valeur" ; 
                }
            }
            else{
                echo "$elements: $val";
            }
        }
    }
   };

   // fonction qui retourne le tableau de demande par type
   $typeDemande=[];
   function filterType($tableau,$typeDemande){
    foreach($tableau as $demande){
        if($demande['type']=="Suspension"){
            $typeDemande[]=$demande;
        }
    }
    return show($typeDemande);
   }
   

   // fonction qui retourne le tableau de demande par etat
   $etatDemande=[];
   function filterEtat($tableau,$etatDemande){
    foreach($tableau as $demande){
        if($demande['etat']=="Suspension"){
            $etatDemande[]=$demande;
        }
    };
    return show($etatDemande);
   }
   
?>