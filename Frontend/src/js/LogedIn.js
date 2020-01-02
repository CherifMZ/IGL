import React, { Component } from 'react';
import BarShow from './BarShow';
import AddEtudiant from './AddEtudiant';
import AddEnseignant from './AddEnseignant';
import NavAdmin from './NavAdmin';
import NavEtudiant from './NavEtudiant';
import NavEnseignant from './NavEnseignant';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
  } from "react-router-dom";
  if(localStorage.getItem('user')){
    var session=JSON.parse(localStorage.getItem('user'));
  }
class LogedIn extends Component{
    constructor(props){
        super(props)
    }
    navUser(){
        if(localStorage.getItem('user')){
            switch(session.data_user){
                case 'a':
                    return(<NavAdmin/>)
                case 'd':
                    return(<NavEtudiant/>)
                case 'n':
                    return(<NavEnseignant/>)
            }
        }
    }
     render() {
         if(localStorage.getItem('user')){
            return (
                <div onPress={this.test}>
                    <header>
                        <nav class="nav_bar">
                            <div class="element_bar">
                                <div class="bar_content">
                                    <div clas="guide-left_option">
                                       
                                        <a class="guide-logo_img" href="/">
                                        <img class="image_logo_name"  alt="esi-work-space" 
                                        title="esi-space de l'usage de l'ecole" src="/img/esilogo.png" /> 
                                        </a>
                                    </div>
                                    <div class="profile_control">
                                        <BarShow />
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </header>
                        <div class="list_option">
                        <div class="_listAll">
                            <div class="_list_view">
                                
                                <div class="number_block">
                                {this.navUser()}
                                </div>
                            </div>  
                        </div>
                        </div>
                        <div id="gread_contenair_option">
                        <div class="cour_page_select" id="cour_page_sel">
                            <Switch>
                               
                                <Route path="/etudiant/add">
                                    <AddEtudiant/>
                                </Route>
                                <Route path="/enseignant/add">
                                    <AddEnseignant/>
                                </Route>
                                
                                
                            </Switch>
                        </div>
                        </div>
                    </div>
            )
         }else{
             window.location="/login";
             return ('')
         }
     }
}
export default LogedIn;