import { Commitee } from "./Commitee"
import amede from "../assets/amede.jpg"
import pascal from "../assets/pascal.jpg"
import dianne from "../assets/dianne.jpg"
import dieng from "../assets/dieng.jpg"
import yves from "../assets/yves.jpg"
import alexis from "../assets/alexis.jpg"
import benoit from "../assets/benoit.jpg"
import louis from "../assets/louis.jpg"
import olivier from "../assets/olivier.jpg"
import danielle from "../assets/danielle.jpg"
import cmr from "../assets/cameroun.png"
import fr from "../assets/fr.png"
export const CommiteeList=()=>{

    return (

        <section>
                    <section className="grid grid-cols-4 gap-4 gap-y-6">
                <div>
                    <Commitee flag={cmr} picture={amede} username={"Amédée"} name={"ASSOMO"} post={"Président"}/>
                </div>
                <div>
                    <Commitee  picture={pascal} username={"Pascal"} name={"GRAFFION"} post={"Vice-Président"} flag={fr}/>
                </div>
                <div>
                    <Commitee picture={dianne} username={"Diane"} name={"POULIOT"} post={"Responsable Scrabble Continent Americain"} flag={fr}/>
                </div>
                <div>
                    <Commitee flag={cmr} picture={dieng} username={"Rokhaya"} name={"DIENG"} post={"Sécrétaire Général"}/>
                </div>
                <div>
                    <Commitee flag={fr} picture={yves} username={"Yves"} name={"BRENEZ"} post={"Trésorier en Charge des Finances"}/>
                </div>
                <div>
                    <Commitee flag={fr} picture={alexis} username={"Alexis"} name={"ALLAGNAT"} post={"Promotion Scrabble Jeune et Scrabble de Compétition"}/>
                </div>
                <div>
                    <Commitee flag={fr} picture={benoit} username={"Benoit"} name={"DELAFONTAINE"} post={"Promotion Scrabble Jeune et Scrabble de Compétition"}/>
                </div>
                <div>
                    <Commitee flag={fr} picture={louis} username={"Louis"} name={"EGGERMONT"} post={"Responsable Technique"}/>
                </div>
        </section>
        <div className="mt-8 flex justify-center gap-5 items-center mb-12">
                <Commitee flag={cmr} picture={olivier} username={"olivier"} name={"ASSINOU"} post={"Directeur des opérations"}/>
                <Commitee flag={cmr} picture={danielle} username={"Danièle"} name={"NONO"} post={"Response Communication"}/>
        </div>
        
        </section>
        
    )
}