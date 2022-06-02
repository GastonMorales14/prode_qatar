"use strict"
document.addEventListener("DOMContentLoaded", getPaises);
//pag = https://allsportsapi.com/admin
let API_URL = "apiv2.allsportsapi.com/football?met=Países";
let api_url = "https://apiv2.allsportsapi.com/football/?met=Teams&teamId=10&APIkey=";

let API_KEY = "fb63b4caf906159f715bcddef9fff63a6afed8564ca3d9818b7bbefc19b20523";
let api_jugador= 'https://apiv2.allsportsapi.com/football/?&met=Players&playerId=ACAVAIDJUGADOR&APIkey=fb63b4caf906159f715bcddef9fff63a6afed8564ca3d9818b7bbefc19b20523';

let idJugadores = [];
async function getPaises() {
    try {
        let response = await fetch(api_url+API_KEY);
        
        if (response.ok) {
            let paises = await response.json();
            console.log(paises.result);
            for (const p of paises.result) {
                document.getElementById("paises").innerHTML +=  `<p>
                                                                    ${p.team_name}
                                                                    </p>
                                                                    <img class="logoPais" src=${p.team_logo}>`
                                                                }

            for(const jugador of paises.result) {
               let jugadores= jugador.players;
               console.log(jugadores);
               for (const j of jugadores) {                    
                   idJugadores.push(j.player_key);
                   document.getElementById("jugadores").innerHTML +=  `<li>
                   ${j.player_name} - ${j.player_type}</li>`  
                   
                }
                console.log(idJugadores);
                for (const id of idJugadores) {
                   //habria que agregar id a la url para traer la foto del jugador api_jugador
        
                }
            }
            
            
        }
    }
    catch (e) {
        console.log(e);
    }
}

