import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/motpresident.png"
import slide2 from "../assets/slide2.jpg"
import { Footer } from "@/components/Footer"
import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"
export const MotduPresidentPage=()=>{
    const [loading, setLoading] = useState(true);

    useEffect(() => {
  
      const fetchData = async () => {
  
        await new Promise(resolve => setTimeout(resolve, 1500));
        setLoading(false);
      };
  
      fetchData();
    }, []);
    return (
       <>
       {!loading &&  <section>
            <section className="flex flex-col">
                    <HeaderSection/>
                    <NavSection/>
            </section>
            <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 max-sm:mt-0 h-[28rem]  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

            <section className="flex flex-col mt-12 max-sm:mx-4 mx-36">
                    <div>
                            <h2 className='text-[#00723e] text-3xl max-sm:text-2xl font-bold'>Mot du Président</h2>
                    </div>
                    <div className="mt-6">
                        <p className="text-xl max-sm:text-lg mb-5 text-justify">Chers membres de la communauté mondiale du Scrabble Francophone,

                        </p>
                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                        c'est avec une immense gratitude et un profond sentiment d'honneur que je m'adresse à vous aujourd'hui en tant que nouveau président de la Fédération Internationale de Scrabble Francophone (FISF).
                                        Votre confiance et votre soutien marquent le début d'une nouvelle ère pour notre fédération,une ère placée sous le signe de la cohésion,de l'expérience,de la compétence et de la diversité.
                                        Je tiens à exprimer mes sincères remerciements à chacun d'entre vous pour la confiance que vous m'avez accordée.Votre soutien est la preuve de notre engagement collectif à promouvoir et à développer notre passion commune pour le Scrabble à travers le monde francophone.

                                    </p>

                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                        Un remerciement spécial est adressé au président sortant,Monsieur Patrice Jeanneret,votre leadership et votre dévouement ont été inestimables pour la fédération.Vous avez posé des bases solides et laissé un héritage dont nous sommes fiers.Votre soutien durant cette période de transition a été crucial,et je suis honoré de pouvoir continuer le travail remarquable que vous avez accompli.
                                    Notre programme,guidé par le slogan "Cohésion, expérience, compétence et diversité",se veux ambitieux et inclusif.Ensemble,nous allons préserver les acquis des dernieres decennies,en veuillant à ce que les initiatives actuelles telles que le Scrabble scolaire,les championnats du monde annuels,et les finances bien gérées continuent à prospérer et à s'améliorer.
                                    </p>

                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">Nous allons imprimer à la FISF une gouvernance davantage concertée,en nous assurant que chaque action soit inspirée par les aspirations de toutes les parties prenantes.Nous augmenterons la notoriété et la visibilité de la FISF grace à une stratégie de communication institutionnelle robuste, et nous développerons nos finances par des partenariats stratégique et du sponsoring.
                                        L'amélioration du fonctionnement de la FISF la structuration et le développement des  fédérations sur l'ensemble du monde francophone,l'l'amorçage de la "professionnalisation" du Scrabble d'Elite, et le déploiement de la FISF dans le domaine du E-Sport sont autant de défis que nous allons relever ensemble.Car si nous rêvons grand,il est temps d'agir.
                                    </p>
                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                    Nous n'oublierons pas non plus d'entretenir l'engouement des scrabbleurs seniors et
                                    de niveau moyen, car sans eux, notre communauté serait incomplète. Ils constituent
                                    notre socle granitique et méritent de pratiquer notre loisir, notre passion, dans des
                                    conditions davantage meilleures et conviviales.


                                    </p>

                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                    Chers amis, le chemin qui nous attend est pavé de défis, mais je suis convaincu que,
                                    grâce à notre passion partagée et à notre détermination collective, nous pouvons
                                    atteindre de nouveaux sommets.
                                    </p>
                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                    Merci encore pour votre confiance et votre soutien. Ensemble, faisons de cette
                                    nouvelle ère du Scrabble une période de croissance, de succès et de célébration de
                                      notre magnifique jeu.
                                    </p>
                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                    Avec toute ma gratitude,
                                    </p>
                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                    Amédée Assomo
                                    </p>
                                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                    Président de la Fédération Internationale de Scrabble Francophone
                                    </p>
                    </div>

                    
            </section>
            <Footer/>
        </section>}

        {loading && <Loader/>}
       </>
    )
}