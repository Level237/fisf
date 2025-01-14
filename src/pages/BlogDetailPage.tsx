import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/president.jpg"
import slide2 from "../assets/slide2.jpg"
import { Footer } from "@/components/Footer"
import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"
import AlaUneComponent from "@/components/AlaUneComponent"
import Blog from "@/components/Blog"
import { Button } from "@/components/ui/button"
export const BlogDetailPage=()=>{
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
    className='w-full z-10 mt-5 max-sm:mt-0 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>
       <div className="absolute left-24 bottom-[-50px] bg-red-500 text-white px-8 py-6 rounded-lg">
            <div className="text-3xl font-bold leading-tight">NOV</div>
            <div className="text-3xl font-bold leading-tight">2024</div>
          </div>
    </div>

            <section className="flex flex-col mt-24 max-sm:mx-4 mx-36">
            <h1 className="text-2xl md:text-3xl font-bold">
            Amédée ASSOMO est le nouveau président de la Fédération International de Scrabble Francophone
          </h1>
          
          <div className="w-20 h-2 mt-3 bg-green-600" />
          

                    <div className="mt-8">
                            
                    <p className="text-xl max-sm:text-lg mb-5 text-justify">
                            Lundi 16 juillet 2024 a eu lieu l'élection du nouveau CA de la FISF.
                                </p>

                                <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                                    Après 19 ans à la tête de la FISF (2005-2024), Patrice JEANNERET a décidé de passer le
                                    flambeau. Un grand MERCI et BRAVO pour tout son travail, son engagement et sa sympathie. 

                                    La liste d'Amédée ASSOMO (CM) a été élue 9 voix à 4 face à la liste emmenée par Edouard
                                    HUOT (QC).


                                </p>

                                <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                La nouvelle équipe de la FISF est la suivante :
                                </p>
                                <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                Amédée ASSOMO (CM) : Président <br />
                                Pascal GRAFFION (FR) : Vice-Président<br />
                                Rokhaya DIENG (SN) : Secrétaire Générale <br />
                                Diane POULIOT (QC) : Responsable développement sur le continent américain <br />
                                Benoît DELAFONTAINE (CH) : Promotion du Scrabble Jeune et Scrabble de compétition<br />
                                Alexis ALLAGNAT (FR) : Promotion du Scrabble Jeune et scrabble de compétition<br />
                                Yves BRENEZ (BE) : Trésorier en charge des finances <br />
                                </p>
                                <p className="text-xl max-sm:text-lg mb-5 text-justify">
                                Ce bureau sera accompagné d'une équipe technique composée de :<br />
                                Louis EGGERMONT ( BE) : Responsable technique
                                <br />
                                Olivier ASSINOU ( BN) : Directeur des opérations<br />
                                Danièle NONO (CMR) : Responsable de communication<br />
                                </p>
                                
                    </div>
                    <div className="mt-16">
                            <h2 className='text-[#00723e] text-3xl max-sm:text-2xl font-bold'>Autres articles</h2>
                    </div>
                    <Blog/>
                   
            </section>
            <div className="flex items-center justify-center mt-8">
                    <Button
                                className="w-full text-lg md:w-auto bg-red-500 text-white rounded-full py-6 px-12"
                                >
                            Voir plus
                    </Button>
            </div>
            
            <Footer/>
        </section>}

        {loading && <Loader/>}
       </>
    )
}