function kebabToCamelCase(str) {
    return str.split('-').map((word, index) => {
        if (index === 0) {
            return word;
        }
        return word.charAt(0).toUpperCase() + word.slice(1);
    }).join('');
}

function getVariableName(obj, value) {
    return Object.keys(obj).find(key => obj[key] === value);
}

async function send(url = "", data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
      method: "POST", 
      mode: "same-origin", 
      cache: "no-cache",
      credentials: "same-origin", 
      headers: {
        "Content-Type": "application/json",
      },
      redirect: "follow", 
      referrerPolicy: "no-referrer", 
      body: JSON.stringify(data), 
    });
    return response.json(); 
}

let ids = [
    'prenom-expediteur',
    'nom-expediteur',
    'ville-expediteur',
    'telephone-expediteur',
    'address-expediteur',
    'whatsapp-expediteur',
    'code-secret-expediteur',
    'cin-expediteur',
    'prenom-destinataire',
    'nom-destinataire',
    'ville-destinataire',
    'telephone-destinataire',
    'whatsapp-destinataire',
    'cin-destinataire',
    'address-destinataire-1',
    'address-destinataire-2',
    'quartier-destinataire',
    'enregistrer-destinataire',
    'nature-yobal',
    'categorie-yobal',
    'ville-yobal',
    'tarif-yobal',
    'frais-yobal',
    'total-yobal',
    'info-yobal',
    'date-collect',
    'heure-collect',
    'date-destination',
    'heure-destination',
    'prenom-convoyeur',
    'nom-convoyeur',
    'telephone-convoyeur',
    'ville-convoyeur',
    'vehicule-convoyeur',
    'cin-convoyeur',
    'matricule-convoyeur',
    'enregistrer-convoyeur',
    'lieu-collecte',
    'numero-commande',
    'remuneration-convoyeur'
];

inputs={}

for(id of ids){
    let selector = "#"+id;
    inputs[kebabToCamelCase(id)]=document.querySelector(selector);
}

console.log(inputs);

handle={}

for(let key in inputs){
    let input=inputs[key];
    handle[key]=function(error=''){
        const attrMap = input.attributes;
        const small= input.nextElementSibling
        small.innerHTML=error
        if(attrMap["maximum"]){
            const value = attrMap.getNamedItem("maximum").value;
            console.log(`${Number(value)}::${input.value.length}`);
            if(Number(value)<input.value.length){
                if(attrMap["maximum-message"]){
                    small.innerHTML=attrMap.getNamedItem("maximum-message").value
                }else{
                    small.innerHTML='trop long'
                }
            }
        }
        if(attrMap["minimum"]){
            const value = attrMap.getNamedItem("minimum").value;
            console.log(`${Number(value)}::${input.value.length}`);
            if(Number(value)>input.value.length){
                if(attrMap["minimum-message"]){
                    small.innerHTML=attrMap.getNamedItem("minimum-message").value
                }else{
                    small.innerHTML='trop court'
                }
            }
        }
    }
    if(input.localName==="input"){
        input.addEventListener('input',e=>handle[key]())
    }else{
        input.addEventListener('change',e=>handle[key]())
    }
}


const printInvoiceBTN2=document.querySelector('#print-invoice-btn-2');
const finaliserCommandeBTN=document.querySelector('#finaliser-commande-btn');
const enregistrerCommandeBTN=document.querySelector('#enregistrer-commande-btn');
const checkedBTN=document.querySelector('#checked-btn');
const printInvoiceBTN=document.querySelector('#print-invoice-btn');

enregistrerCommandeBTN.addEventListener('click',(event)=>{
    send('/creer-commande.php',{
        expediteur:{
            prenomExpediteur:prenomExpediteur,
            nomExpediteur:nomExpediteur,
            villeExpediteur:villeExpediteur,
            telephoneExpediteur:telephoneExpediteur,
            addressExpediteur:addressExpediteur,
            whatsappExpediteur:whatsappExpediteur,
            codeSecretExpediteur:codeSecretExpediteur,
            CINExpediteur:CINExpediteur,
            enregistrerExpediteur:enregistrerExpediteur,
        },
        destinataire:{
            prenomDestinataire:prenomDestinataire,
            nomDestinataire:nomDestinataire,
            villeDestinataire:villeDestinataire,
            telephoneDestinataire:telephoneDestinataire,
            whatsappDestinataire:whatsappDestinataire,
            CINDestinataire:CINDestinataire,
            adressDestinataire1:adressDestinataire1,
            adressDestinataire2:adressDestinataire2,
            quartierDestinataire:quartierDestinataire,
            enregistrerDestinataire:enregistrerDestinataire,
        },
        yobal:{
            natureYobal:natureYobal,
            categorieYobal:categorieYobal,
            villeYobal:villeYobal,
            tarifYobal:tarifYobal,
            fraisYobal:fraisYobal,
            totalYobal:totalYobal,
            infoYobal:infoYobal,
        },
        meta:{
            dateCollect:dateCollect,
            heureCollect:heureCollect,
            dateDestination:dateDestination,
            heureDestination:heureDestination,
        },})
})

checkedBTN.addEventListener('click',(event)=>{
    
})

printInvoiceBTN.addEventListener('click',(event)=>{
    
})

printInvoiceBTN2.addEventListener('click',(event)=>{
    
})

finaliserCommandeBTN.addEventListener('click',(event)=>{
    
})



function logDatas(){
    console.log({
        expediteur:{
            prenomExpediteur:prenomExpediteur,
            nomExpediteur:nomExpediteur,
            villeExpediteur:villeExpediteur,
            telephoneExpediteur:telephoneExpediteur,
            addressExpediteur:addressExpediteur,
            whatsappExpediteur:whatsappExpediteur,
            codeSecretExpediteur:codeSecretExpediteur,
            CINExpediteur:CINExpediteur,
            enregistrerExpediteur:enregistrerExpediteur,
        },
        destinataire:{
            prenomDestinataire:prenomDestinataire,
            nomDestinataire:nomDestinataire,
            villeDestinataire:villeDestinataire,
            telephoneDestinataire:telephoneDestinataire,
            whatsappDestinataire:whatsappDestinataire,
            CINDestinataire:CINDestinataire,
            adressDestinataire1:adressDestinataire1,
            adressDestinataire2:adressDestinataire2,
            quartierDestinataire:quartierDestinataire,
            enregistrerDestinataire:enregistrerDestinataire,
        },
        yobal:{
            natureYobal:natureYobal,
            categorieYobal:categorieYobal,
            villeYobal:villeYobal,
            tarifYobal:tarifYobal,
            fraisYobal:fraisYobal,
            totalYobal:totalYobal,
            infoYobal:infoYobal,
        },
        meta:{
            dateCollect:dateCollect,
            heureCollect:heureCollect,
            dateDestination:dateDestination,
            heureDestination:heureDestination,
        },
        convoyeur:{
            prenomConvoyeur:prenomConvoyeur,
            nomConvoyeur:nomConvoyeur,
            telephoneConvoyeur:telephoneConvoyeur,
            villeConvoyeur:villeConvoyeur,
            vehiculeConvoyeur:vehiculeConvoyeur,
            CINConvoyeur:CINConvoyeur,
            matriculeConvoyeur:matriculeConvoyeur,
            enregistrerConvoyeur:enregistrerConvoyeur,
            remunerationConvoyeur:remunerationConvoyeur,
        },
        lieuCollecte:lieuCollecte,
        numeroCommande:numeroCommande,
    });
}
