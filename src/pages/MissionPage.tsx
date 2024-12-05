import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/mission1.jpg"
export const MissionPage=()=>{

    return (
        <section>
            <section className="flex flex-col">
                    <HeaderSection/>
                    <NavSection/>
            </section>
            <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

            <section className="flex flex-col mt-12 mx-36">
                    <div>
                            <h2 className='text-[#00723e] text-3xl font-bold'>La Fédération</h2>
                    </div>
                    <div className="mt-6">
                        <p className="text-xl mb-5">Entrez dans le monde de la FISF, la réunion de toutes les fédérations et associations de
                        Scrabble® francophone et des près de 20 000 joueurs qui les composent !</p>
                                    <p className="text-xl mb-5">Depuis sa création, la FISF a été guidée par la volonté d'aider les scrabbleurs de tous
                                            les pays à ses structurer, et poursuit son action, notamment, envers les prometteuses
                                            fédérations africaines.
                                    </p>

                                    <p className="text-xl mb-5">La Fédération internationale de Scrabble® francophone (FISF) a pour missions
                                                    principales de promouvoir la pratique du jeu en langue française, mais aussi de lui
                                                    apporter un cadre réglementaire précis, applicable dans toute la francophonie
                                    </p>

                                    <p className="text-xl mb-5">Par le travail de ses membres, et en particulier grâce à l’apport et à la réflexion de ses
                                                différentes commissions techniques, la FISF se donne les moyens de conduire
                                                différentes actions, parmi lesquelles :
                                    </p>
                    </div>

                    <div className="mx-6">
                                    <h2 className="text-2xl text-red-700 underline underline-offset-[15px] mb-4">Sur Le plan de la promotion et du développement</h2>
                    </div>
            </section>
        </section>
    )
}