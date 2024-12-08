import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/mission1.jpg"
import slide2 from "../assets/slide2.jpg"
import { Footer } from "@/components/Footer"
export const MissionPage=()=>{

    return (
        <section>
            <section className="flex flex-col">
                    <HeaderSection/>
                    <NavSection/>
            </section>
            <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 max-sm:mt-0 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

            <section className="flex flex-col mt-12 max-sm:mx-4 mx-36">
                    <div>
                            <h2 className='text-[#00723e] text-3xl max-sm:text-2xl font-bold'>La Fédération</h2>
                    </div>
                    <div className="mt-6">
                        <p className="text-xl max-sm:text-lg mb-5 text-justify">Entrez dans le monde de la FISF, la réunion de toutes les fédérations et associations de
                        Scrabble® francophone et des près de 20 000 joueurs qui les composent !</p>
                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">Depuis sa création, la FISF a été guidée par la volonté d'aider les scrabbleurs de tous
                                            les pays à ses structurer, et poursuit son action, notamment, envers les prometteuses
                                            fédérations africaines.
                                    </p>

                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">La Fédération internationale de Scrabble® francophone (FISF) a pour missions
                                                    principales de promouvoir la pratique du jeu en langue française, mais aussi de lui
                                                    apporter un cadre réglementaire précis, applicable dans toute la francophonie
                                    </p>

                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">Par le travail de ses membres, et en particulier grâce à l’apport et à la réflexion de ses
                                                différentes commissions techniques, la FISF se donne les moyens de conduire
                                                différentes actions, parmi lesquelles :
                                    </p>
                    </div>

                    <div className="mx-6">
                                    <h2 className="text-2xl max-sm:text-xl max-sm:underline-offset-1 text-red-700 underline underline-offset-[15px] mb-4 text-justify">Sur Le plan de la promotion et du développement</h2>
                                    <div className="mx-4 max-sm:mx-2 mt-8">
                                                <li className="text-xl max-sm:text-lg mb-4">
                                                L'aide aux <span className="underline underline-offset-[2px] decoration-gray-600">fédérations nationales</span>, au niveau de l’organisation, de la logistique
                                                ou de leurs différents projets d’expansion.
                                                </li>
                                                <li className="text-xl max-sm:text-lg mb-4">
                                                La création et le soutien de nouvelles fédérations, en particulier dans les <span className="underline underline-offset-[2px] decoration-gray-600">pays émergents</span>,  (Afrique noire, Maghreb, Moyen-Orient)
                                                </li>
                                                <li className="text-xl max-sm:text-lg mb-4">
                                                La facilitation des échanges entre les différentes fédérations regroupées au
                                                sein de la FISF, pour diffuser de nouvelles idées à travers toute la
                                                francophonie
                                                </li>

                                                <li className="text-xl max-sm:text-lg mb-4">
                                                L’encouragement du <span className="underline underline-offset-[2px] decoration-gray-600"> Scrabble® scolaire,</span>vecteur essentiel pour élargir la
                                                pratique du jeu.
                                                </li>
                                                <li className="text-xl max-sm:text-lg mb-4">
                                                La bonne entente avec d’autres associations internationales, de Scrabble® ou
                                                d’autres jeux de sport et d’esprit
                                                </li>
                                                <li className="text-xl max-sm:text-lg mb-4">
                                                La participation aux événements visant à promouvoir la langue française
                                                </li>
                                                <li className="text-xl max-sm:text-lg mb-4">
                                                La reconnaissance du rôle pédagogique, culturel et social du Scrabble® auprès
                                                des pouvoirs publics et des instances nationales ou internationales.

                                                </li>
                                    </div>
                                    <div className="">
                                        <h2 className="text-2xl max-sm:text-xl max-sm:underline-offset-1 text-red-700 underline underline-offset-[15px] mb-4">Sur le plan du jeu et de sa pratique en compétition</h2>
                                        <div className="mx-4 max-sm:mx-2 mt-8">
                                                <li className="text-xl max-sm:text-lg mb-4 text-justify">
                                                La définition, la mise à jour et le respect de<span className="underline underline-offset-[2px] decoration-gray-600"> réglèments</span> valable  pour toutes les
                                                compétitions officielles, en 
                                                <span className="underline underline-offset-[2px] decoration-gray-600"> Scrabble® classique ou Duplicate</span>
                                                </li>
                                                <li className="text-xl max-sm:text-lg mb-4 text-justify">
                                                L’édition d’ <span className="underline underline-offset-[2px] decoration-gray-600">ouvrages </span>de référence <span className="underline underline-offset-[2px] decoration-gray-600">(dictionnaire officiel, règlements
                                                    internationaux</span> du jeu, guide d’arbitrage, ouvrages pédagogiques) qui prennent
                                                    appui sur les travaux et les réflexions des commissions de la FISF

                                                </li>
                                                <li className="text-xl max-sm:text-lg mb-4 text-justify">
                                                L’implémentation d’un <span className="underline underline-offset-[2px] decoration-gray-600">classement international,</span>
                                                fiable et dynamique
                                                </li>

                                                <li className="text-xl max-sm:text-lg mb-4 text-justify">
                                                L'organisation des <span className="underline underline-offset-[2px] decoration-gray-600"> championnats du monde francophones,</span> mais aussi d’autres
                                                événements comme les  <span className="underline underline-offset-[2px] decoration-gray-600"> simultanés mondiaux,</span>le circuit du <span className="underline underline-offset-[2px] decoration-gray-600">Grand Chelem</span>
                                                ,la Coupe d'Europe interclubs ou les Panafricains.
                                                </li>
                                                
                                    </div>
                                    </div>

                                    <div className="mt-12 mb-12">
                                        <img src={slide2} className="h-80 object-cover w-full" alt="" />
                                    </div>
                    </div>
            </section>
            <Footer/>
        </section>
    )
}