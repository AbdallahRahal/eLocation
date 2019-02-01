function surligne(champ, erreur){
   
    if(erreur){
  
      champ.style.backgroundColor = "#fba";
    
    }else{
  
      champ.style.backgroundColor = "";
    
    }
  };
  
  function verifAdresse(champ){
  
    var regex = /^[0-9]{1,5}\s[a-zA-Z0-9éèàê ]+$/;
    if(champ.value.length < 8 || champ.value.length > 50 || !regex.test(champ.value)){
  
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };
  
  function verifPseudo(champ){
  
    if(champ.value.length < 2 || champ.value.length > 25){
      
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };
  
  function verifVille(champ){
  
    if(champ.value.length < 2 || champ.value.length > 15){
      
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };
  
  function verifPrenom(champ){
  
    var regex = /^[a-zA-Z-]+\s*[a-zA-Z]+$/;
    if(champ.value.length < 2 || champ.value.length > 25 || !regex.test(champ.value)){
      
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };
  
  function verifNom(champ){
  
    var regex = /^[a-z A-Z ]+$/;
    if(champ.value.length < 2 || champ.value.length > 25 || !regex.test(champ.value)){
  
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };

  function verifRelais(champ){
  
    var regex = /^[a-zA-Z ]+$/;
    if(champ.value.length < 2 || champ.value.length > 20 || !regex.test(champ.value)){
  
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };
  
  function verifCp(champ){
  
    var regex = /^[0-9]+$/;
    if(champ.value.length !== 5 || !regex.test(champ.value)){
  
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };
  
  function verifMdp(champ){
  
    if(champ.value.length < 8 || champ.value.length > 15){
   
      surligne(champ, true);
      return false;
    
    }else{
        
      surligne(champ, false);
      return true;
    }
  };
  
  function verifMail(champ){
    
     var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
     if(!regex.test(champ.value)){
      
      surligne(champ, true);
      return false;
      
    }else{
  
      surligne(champ, false);
      return true;
     
    }
  };
  
  
  
  function verifForm(f){
  
    var relaisOk = verifRelais(f.nom);
    var adresseOk = verifAdresse(f.adresse);
    var villeOk = verifVille(f.ville);
    var cpOk = verifCp(f.cp);
    var nomOk = verifNom(f.nom);
    var mdpOk = verifMdp(f.mdp);
    var prenomOk = verifPrenom(f.prenom);
    var pseudoOk = verifPseudo(f.pseudo);
    var mailOk = verifMail(f.mail); 
  
    if(pseudoOk && mailOk && prenomOk && nomOk && mdpOk && cpOk && villeOk && adresseOk && relaisOk){
  
      return true;
     
    }else{
  
      alert("Veuillez remplir correctement tous les champs");
      return false;
  
    }
  };
  