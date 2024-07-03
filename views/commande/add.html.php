<div class="flex-row  justify-between">
                <span>informations</span>
                <span>commande No001201001975</span>
            </div>
            <div class="flex-row justify-between">
                <span>Creer une Commande</span>
                <span>Code de Retrait 236 250 000 444</span>
            </div>
            <form class="flex-column p-10 mb-20 justify-center items-center " style="height: 80vh;" method="post" action=" <?=WEB_URL?>/commande/add">
                <div class="new-comande-grid w-full "> 
                    <div class="comande-section p-10">
                        <div class="flex-row justify-between items-center border-b-2 border-solid ">
                            <div class="p-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="" style="width: 16px; height:16px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                  </svg>
                                  
                                <span>informations sur l'expediteur</span> 
                            </div>
                            <div class="p-10">
                                <input type="checkbox" id="enregistrer-expediteur" name="enregistrer-expediteur" />
                                <label for="enregistrer-expediteur">enregistrer</label>
                            </div>
                            
                        </div>
                        <div class="flex-column">
                            <div class="flex-row ">
                                <div class="field ">
                                    <label for="prenom-expediteur"><span class="label-style">prenom</span></label>
                                    <input id="prenom-expediteur" maximum="10" maximum-message="ce texte est trop long" minimum-message="ce texte est trop court"  minimum="3" class="" title="prenom-expediteur" placeholder="prenom" type="text" name="prenom-expediteur"  />
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="nom-expediteur"><span class="label-style">nom</span></label>
                                    <input id="nom-expediteur" class="" title="nom-expediteur" placeholder="nom" type="text" name="nom-expediteur"  />  
                                    <small class="color-primary"></small>
                                </div>
                                
                                <div class="field ">
                                    <label for="ville-expediteur"><span class="label-style">Ville</span></label>
                                    <select name="ville-expediteur"  title="ville-expediteur" id="ville-expediteur">
                                        <option check>veuillez choisir</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <small class="color-primary"></small>   
                                </div>
                            </div>
                            
                            <div class="flex-row">
                                <div class="field ">
                                    <label for="telephone-expediteur"><span class="label-style">telephone</span></label>
                                    <input id="telephone-expediteur" class="" title="telephone-expediteur" placeholder="telephone" type="text" name="telephone-expediteur"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="address-expediteur"><span class="label-style">adresse</span></label>
                                    <input id="address-expediteur" class="" title="address-expediteur" placeholder="adresse" type="text" name="address-expediteur"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="whatsapp-expediteur"><span class="label-style">Whatsapp</span></label>
                                    <input id="whatsapp-expediteur" class="" title="whatsapp-expediteur" placeholder="Whatsapp" type="text" name="whatsapp-expediteur"  />  
                                    <small class="color-primary"></small>  
                                </div>
                            </div>
                            
                            <div class="flex-row">
                                <div class="field ">
                                    <label for="code-secret-expediteur"><span class="label-style">code secret</span></label>
                                    <input id="code-secret-expediteur" class="" title="code-secret-expediteur" placeholder="007" type="text" name="code-secret-expediteur"  />  
                                    <small class="color-primary"></small>  
                                </div>
                                <div class="field ">
                                    <label for="cin-expediteur"><span class="label-style">No CIN</span></label>
                                    <input id="cin-expediteur" class="" title="cin-expediteur" placeholder="carte d'identite nationale" type="text" name="cin-expediteur"  />  
                                    <small class="color-primary"></small>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comande-section p-10">
                        <div class="flex-row justify-between items-center border-b-2 border-solid ">
                            <div class="p-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="" style="width: 16px; height:16px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 4.5-15 15m0 0h11.25m-11.25 0V8.25" />
                                </svg>
                                <span>informations du Destinataire</span> 
                            </div>
                            <div class="p-10">
                                <input type="checkbox" id="enregistrer-destinataire" name="enregistrer-destinataire" />
                                <label for="enregistrer-destinataire">enregistrer</label>
                            </div>
                            
                        </div>
                        <div class="flex-column">
                            <div class="flex-row ">
                                <div class="field ">
                                    <label for="prenom-destinataire"><span class="label-style">prenom</span></label>
                                    <input id="prenom-destinataire" class="" title="prenom-destinataire" placeholder="prenom" type="text" name="prenom-destinataire"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="nom-destinataire"><span class="label-style">nom</span></label>
                                    <input id="nom-destinataire" minimum="10" minimum-message="" class="" title="nom-destinataire" placeholder="nom" type="text" name="nom-destinataire"  />  
                                    <small class="color-primary"></small>  
                                </div>
                                
                                <div class="field ">
                                    <label for="ville-destinataire"><span class="label-style">Ville</span></label>
                                    <select name="ville-destinataire"  title="ville-destinataire" id="ville-destinataire">
                                        <option check>veuillez choisir</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <small class="color-primary"></small>  
                                </div>

                            </div>

                            <div class="flex-row">
                                <div class="field ">
                                    <label for="telephone-destinataire"><span class="label-style">telephone</span></label>
                                    <input id="telephone-destinataire" class="" title="telephone-destinataire" placeholder="telephone" type="text" name="telephone-destinataire"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="whatsapp-destinataire"><span class="label-style">Whatsapp</span></label>
                                    <input id="whatsapp-destinataire" class="" title="whatsapp-destinataire" placeholder="Whatsapp" type="text" name="whatsapp-destinataire"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="cin-destinataire"><span class="label-style">No CIN</span></label>
                                    <input id="cin-destinataire" class="" title="cin-destinataire" placeholder="carte d'identite nationale" type="text" name="cin-destinataire"  />  
                                    <small class="color-primary"></small>  
                                </div>
                            </div>

                            <div class="flex-row">
                                <div class="field ">
                                    <label for="address-destinataire-1"><span class="label-style">Adresse 1</span></label>
                                    <input id="address-destinataire-1" class="" title="address-destinataire-1" placeholder="adresse" type="text" name="address-destinataire-1"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="address-destinataire-2"><span class="label-style">Adresse 2</span></label>
                                    <input id="address-destinataire-2" class="" title="address-destinataire-2" placeholder="adresse" type="text" name="address-destinataire-2"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="quartier-destinataire"><span class="label-style">Quartier</span></label>
                                    <input id="quartier-destinataire" class="" title="quartier-destinataire" placeholder="adresse" type="text" name="quartier-destinataire"  />  
                                    <small class="color-primary"></small>  
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="comande-section p-10">
                        <div class="flex-row justify-between items-center border-b-2 border-solid ">
                            <div class="p-10">
                                <span>informations du Yobal</span> 
                            </div>
                            <div class="p-10">
                            </div>
                            
                        </div>
                        <div class="flex-column">
                            <div class="flex-row ">
                                <div class="field ">
                                    <label for="nature-yobal"><span class="label-style">Nature</span></label>
                                    <select name="nature-yobal"  title="nature-yobal" id="nature-yobal">
                                        <option check>veuillez choisir</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <small class="color-primary"></small> 
                                </div>

                                <div class="field ">
                                    <label for="categorie-yobal"><span class="label-style">Catégorie</span></label>
                                    <select name="categorie-yobal"  title="categorie-yobal" id="categorie-yobal">
                                        <option checked>veuillez choisir</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <small class="color-primary"></small> 
                                </div>
                                
                                <div class="field ">
                                    <label for="ville-yobal"><span class="label-style">Ville</span></label>
                                    <select name="ville-yobal"  title="ville-yobal" id="ville-yobal">
                                        <option check>veuillez choisir</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <small class="color-primary"></small> 
                                </div>

                            </div>
                            <div class="flex-row">
                                <div class="field ">
                                    <label for="tarif-yobal"><span class="label-style">Tarif</span></label>
                                    <input id="tarif-yobal" class="" title="tarif-yobal" placeholder="tarif" type="text" name="tarif-yobal"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="frais-yobal"><span class="label-style">Frais</span></label>
                                    <input id="frais-yobal" class="" title="frais-yobal" placeholder="frais" type="text" name="frais-yobal"  />  
                                    <small class="color-primary"></small>  
                                </div>

                                <div class="field ">
                                    <label for="total-yobal"><span class="label-style">Total à payer</span></label>
                                    <input id="total-yobal" class="" title="total-yobal" placeholder="total" type="text" name="total-yobal"  />  
                                    <small class="color-primary"></small>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comande-section p-10">
                        <div class="flex-row justify-between items-center border-b-2 border-solid ">
                            <div class="p-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="" style="width: 14px; height:14px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                <span>informations supplémentaires</span> 
                            </div>
                            <div class="p-10">
                            </div>
                            
                        </div>
                        <div class=" flex-column">
                            <div class="flex-row mt-24">
                                <div class="field">
                                    <label for="info-yobal"><span class="label-style"> </span></label>
                                    <textarea id="info-yobal" class="" name="info-yobal" rows="4" placeholder="écrire un message (maximum 100 mots)" cols="40" ></textarea>
                                    <small class="color-primary"></small>  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="comande-section p-10">
                        <div class="flex-row justify-between items-center border-b-2 border-solid ">
                            <div class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="" style="width: 16px; height:16px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                <span>jour et heure de la collecte</span> 
                            </div>
                            <div class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="" style="width: 16px; height:16px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                <span>jour et heure estimés à destination</span> 
                            </div>
                            
                        </div>
                        <div class="flex-column">
                            <div class="flex-row justify-between">
                                <div class="flex-row mt-10">
                                    <div class="field ">
                                        <input id="date-collect" class="" title="date-collect" type="date" name="date-collect"  />
                                        <small class="color-primary"></small>  
                                    </div>      
                                    <div class="field ">
                                        <input id="heure-collect" class="" title="heure-collect" type="time" step="1" name="heure-collect"  />  
                                        <small class="color-primary"></small>  
                                    </div> 
                                </div>
                                <div class="flex-row mt-10">
                                    <div class="field ">
                                        <input id="date-destination" class="" title="date-destination" type="date" name="date-destination"  />
                                        <small class="color-primary"></small>  
                                    </div>      
                                    <div class="field ">
                                        <input id="heure-destination" class="" title="heure-destination" type="time" step="1" name="heure-destination"  />  
                                        <small class="color-primary"></small>  
                                    </div> 
                                </div>                         
                            </div>        
                        </div>
                    </div>
                    <div class="comande-section p-10">
                        <div class="flex-row justify-between items-center border-b-2 border-solid ">
                            <div class="p-4">
                                <span>Enregistrement de la commande et impression du recu client</span> 
                            </div>
                            <div class="p-4">
                            </div>
                            
                        </div>
                        <div class="flex-column-reverse">
                            <div class="flex-row justify-between items-center mt-10 gap-5">
                                <button type="button" id="enregistrer-commande-btn" class="main"><span>ENREGISTRER LA COMMANDE</span></button>
                                <img src="./assets/accept.png" id="checked-btn"  alt="checked" style="width: auto;height: 30px;">
                                <button type="button" id="print-invoice-btn" class="main"><span>IMPRIMER LE RECU CLIENT</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form class="flex-column p-10 mb-20 justify-center items-center " style="height: 20vh;" method="post" action="/endpoint-finaliser-commande.php">
                <div class="last-comande-grid w-full "> 
                    <div class="comande-section p-10">
                        <div class="grid grid-rows-1 grid-columns-2 w-full gap-10">
                            <div>
                                <div class="flex-row justify-between items-center">
                                    <div class="p-4">
                                        <span style="color:var(--primary-color);">informations du convoyeur</span> 
                                    </div>
                                    <div class="p-4">
                                        <input type="checkbox" id="enregistrer-convoyeur" name="enregistrer-convoyeur" />
                                        <label for="enregistrer-convoyeur">enregistrer</label>
                                    </div>
                                    
                                </div>
                                <div class="flex-column">
                                    <div class="flex-row ">
                                        <div class="field ">
                                            <label for="prenom-convoyeur"><span class="label-style">prenom</span></label>
                                            <input id="prenom-convoyeur" class="" title="prenom-convoyeur" placeholder="prenom" type="text" name="prenom-convoyeur"  />  
                                            <small class="color-primary"></small>  
                                        </div>

                                        <div class="field ">
                                            <label for="nom-convoyeur"><span class="label-style">nom</span></label>
                                            <input id="nom-convoyeur" class="" title="nom-convoyeur" placeholder="nom" type="text" name="nom-convoyeur"  />  
                                            <small class="color-primary"></small>  
                                        </div>
                                       
                                    </div>

                                    <div class="flex-row">
                                        <div class="field ">
                                            <label for="telephone-convoyeur"><span class="label-style">telephone</span></label>
                                            <input id="telephone-convoyeur" class="" title="telephone-convoyeur" placeholder="telephone" type="text" name="telephone-convoyeur"  />  
                                            <small class="color-primary"></small>  
                                        </div>

                                        <div class="field ">
                                            <label for="ville-convoyeur"><span class="label-style">Ville</span></label>
                                            <select name="ville-convoyeur"  title="ville-convoyeur" id="ville-convoyeur">
                                                <option check>veuillez choisir</option>
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select> 
                                            <small class="color-primary"></small>  
                                        </div>
        
                                        <div class="field ">
                                            <label for="vehicule-convoyeur"><span class="label-style">type de vehicule</span></label>
                                            <input id="vehicule-convoyeur" class="" title="vehicule-convoyeur" placeholder="type de vehicule" type="text" name="vehicule-convoyeur"  />  
                                            <small class="color-primary"></small>  
                                        </div>
                                    </div>

                                    <div class="flex-row">
                                        <div class="field ">
                                            <label for="cin-convoyeur"><span class="label-style">No CIN</span></label>
                                            <input id="cin-convoyeur" class="" title="cin-convoyeur" placeholder="carte d'identite nationale" type="text" name="cin-convoyeur"  />  
                                            <small class="color-primary"></small>  
                                        </div>

                                        <div class="field ">
                                            <label for="matricule-convoyeur"><span class="label-style">No Matricule</span></label>
                                            <input id="matricule-convoyeur" class="" title="matricule-convoyeur" placeholder="matricule du convoyeur" type="text" name="matricule-convoyeur"  />  
                                            <small class="color-primary"></small>  
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="grid grid-rows-1 grid-columns-2 w-full gap-10">
                                <div class="flex-row justify-between items-center mt-24">
                                    <div class="flex-column w-full">
                                        <div class="field ">
                                            <label for="lieu-collecte"><span class="label-style">Lieu de collecte</span></label>
                                            <select name="lieu-collecte"  title="lieu-collecte" id="lieu-collecte">
                                                <option check>veuillez choisir</option>
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select> 
                                            <small class="color-primary"></small>  
                                        </div>
    
                                        <div class="field ">
                                                <label for="numero-commande"><span class="label-style">No de la commande</span></label>
                                                <input id="numero-commande" class="" title="numero-commande" placeholder="numero de la commande" type="text" name="numero-commande"  />  
                                                <small class="color-primary"></small>  
                                        </div>
    
                                        <div class="field ">
                                            <label for="remuneration-convoyeur"><span class="label-style"> montant remuneration</span></label>
                                            <input id="remuneration-convoyeur" class="" title="remuneration-convoyeur" placeholder="remuneration" type="text" name="remuneration-convoyeur"  />  
                                            <small class="color-primary"></small>  
                                        </div>
                                           
                                    </div>
                                </div>
                                <div class="flex-column mt-32 p-10 gap-10">
                                        <button type="button" id="print-invoice-btn-2" class="main" style="height: 48px;"><span>IMPRIMER LE RECU</span></button>
                                        <button type="button" id="finaliser-commande-btn" class="primary"><span>FINALISER LA COMMANDE</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>