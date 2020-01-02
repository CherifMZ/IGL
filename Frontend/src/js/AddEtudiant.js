import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import SignEtudiant from './SignEtudiant';
if(localStorage.getItem('user')){
    var session=JSON.parse(localStorage.getItem('user'));
}
class AddEtudiant extends Component{
     render() {
        return (
            <div class="cour_iscrp">
               
          
                 <div class="_separe"></div>
             <div class="_inscun">
              
              <div class="_ctninf">
              <div class="Insc_head">
                        
                        <h1>Inscription des étudiants</h1>
                        <h2>Formulaire pour inscrir les nouveaux étudiants</h2>
                    </div>
                  <div class="_rsltxlsx _sppd ">
                      <SignEtudiant/>
                  </div>
                  
              </div>
          </div>
        
          </div> 
        )
     }
}
export default AddEtudiant;