import React, { Component } from 'react';
import $ from 'jquery'
import {addenseignant} from './EnseignentFunction';
class AddEnseignant extends Component{
    Getemail(email){
        var email='space_'+$('#prenom').val()[0]+'.'+$('#nom').val()+'@esi.dz';
        $('#email').val(email)
    }
    onSubmit(e){
        e.preventDefault()
        const enseignant = {
            nom:$('#nom').val(),
            prenom:$('#prenom').val(),
            email_etud:$('#email').val(),
            date_ns:$('#datens').val(),
            date_recrt:$('#daterec').val(),
            grade:$('#grade').val()
        }
        addenseignant(enseignant)
    }
     render() {
        return (
            <div class="register_container">
               
             
              
                 <div class="container_1">
                    <div class="Insc_head">
                        
                        <h1>Inscription des enseignants</h1>
                        <h2>Formulaire pour inscrir les nouveaux enseignants</h2>
                    </div>
                    <div class="colonne_1">
                        <form  method="post" class="profinscr" onSubmit={this.onSubmit}>
                            <div class="___blcline">
                                <div class="___clnblc">
                                    <div class="_blc_frm _secndelem">
                                        <input type="text" id="nom" class="_identf" name="nom" onChange={this.Getemail} autocomplete="off" required />
                                        <label for="nom">Nom</label>
                                    </div>
                                </div>        
                                <div class="___clnblc">
                                    <div class="_blc_frm _secndelem">
                                        <input type="text" id="prenom" class="_identf" name="prenom" onChange={this.Getemail} autocomplete="off" required />
                                        <label for="prenom">Prénom</label>
                                    </div>
                                </div>           
                            </div>
                            <div class="___blcline">  
                                <div class="___clnblc">
                                    <div class="_blc_frm _secndelem">
                                        <input type="email" id="email" class="_identf __email_prof" name="email" autocomplete="off" required />
                                        <label for="email">Email</label>
                                    </div>
                                </div>   
                                <div class="___clnblc">
                                    <div class="_blc_frm _secndelem">
                                        <input type="text" id="grade" class="_identf" name="grade" autocomplete="off" required />
                                        <label for="grade">Grade</label>
                                    </div>
                                </div>         
                            </div>
                            <div class="___blcline">       
                                <div class="___clnblc">
                                    <div class="_blc_frm _secndelem">
                                        <input type="date" id="datens" name="datens" class="_motpass" autocomplete="off" required/>
                                        <label for="datens" class="__semivalid" >Date de naissance</label>
                                    </div>
                                </div> 
                                <div class="___clnblc">
                                    <div class="_blc_frm _secndelem">
                                        <input type="date" id="daterec" name="daterec" class="_motpass" autocomplete="off" required/>
                                        <label for="daterec" class="__semivalid" >Date de recrutement</label>
                                    </div>
                                </div>           
                            </div>
                            
                            <div class="_blc_frm btn_small_cntr">
                                <input type="submit" value="Inscrir" id="cnt_to" class="cnt_ct" name="cnt_to" required/>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
            
        )
     }
}
export default AddEnseignant;