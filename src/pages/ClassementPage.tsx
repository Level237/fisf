import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/BG-calendrier.jpg"
import slide2 from "../assets/classements.jpg"
import { Footer } from "@/components/Footer"
import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"
import champions2 from "../assets/champions2.jpg"
import alexis from "../assets/alexis.jpg"
import Champions from "@/components/Champions-classement"
import { CompetitionManager } from "@/components/Calender"
import NavMobile from "@/components/NavMobile"
export const ClassementPage=()=>{
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
                    <NavMobile/>
                    <NavSection/>
            </section>
            <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 max-sm:mt-0 h-56  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>
        <div className="absolute flex items-center justify-center">
                <h2 className="text-white text-5xl font-bold">Classements</h2>
        </div>
    </div>

    <div style={{ background:`url(${slide2})`,backgroundPosition:"bottom",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className=' mx-24 z-10 mt-5 max-sm:mt-12 h-96 max-sm:mx-3   bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

            <section className="flex flex-col mt-12 max-sm:mx-4 mx-36">
                    <div className="mb-8">
                            <h2 className='text-red-500 text-3xl max-sm:text-2xl font-bold'>Classement international de Scrabble Classique - Saison 2023-2024</h2>
                    </div>
                    <div className="">
                    <p className="text-xl max-sm:text-lg mb-5 text-justify">Le Français <span className="font-bold">Fabien DOUTÉ</span>, champion du Monde, est n°1 à l'issue de la saison 2023-2024 !
                    </p>
                    <p className="text-xl max-sm:text-lg mb-5 text-justify">Il devance Gauthier HOUILLON, vice-champion du Monde 2022 et Samson Tessier, sur le
                    podium des deux classements internationaux, tous deux de France.
                    </p>
                    </div>
                    <Champions/>
                   <section className="mt-12">
                   <div className="mb-8">
                            <h2 className='text-red-500 text-3xl max-sm:text-2xl text-center font-bold'>Classement international de Scrabble Duplicate au terme de la
                            saison 2023-2024</h2>
                    </div>
                    <div className="grid grid-cols-2 max-sm:grid-cols-1 gap-5">
                            <div>
                                    <p className="text-2xl underline max-sm:text-lg mb-5 text-justify">Le classement international de Scrabble
                            Duplicate au terme de la saison 2023-2024
                            est désormais disponible
                            </p>
                            <div className="mx-8">
                                
                                    <p className="text-2xl max-sm:text-xl">&#9679; Le Français
                                        Antonin
                                        MICHEL,
                                        champion de France, mène devant plus
                                        de 19 000 joueurs de la francophonie.
                                        10e fois premier mondial en fin de
                                        saison en 20 ans</p> <br /> 
                                        <p className="text-2xl max-sm:text-xl">&#9679; Le champion de France en Blitz et
                                        Parties originales Samson TESSIER, est
                                        2e du classement</p> <br />
                                        <p className="text-2xl  max-sm:text-xl">&#9679; Le champion du monde, également
                                        français, Jean-François LACHAUD, est
                                        3e. 21e podium sur 33 classements
                                        internationaux !</p>
                            </div>

                            </div>
                            <div className="bg-red-400">
                <img src={champions2} alt="" className="w-[35rem] h-[35rem] " />
            </div>
                    </div>
                   </section>
                    
                   
            </section>

            <div className="mt-12 mx-32 max-sm:mx-4">
                <CompetitionManager/>
            </div>
            
            <div>
            <div className="relative mt-8 overflow-hidden bg-white">
      <div className="flex flex-col md:flex-row   max-w-6xl mx-auto">
        {/* Image Section */}
        <div style={{ background:`url(${alexis})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='z-10  max-sm:mt-0 h-96 w-[50%] max-sm:w-full  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>
        
    </div>

        {/* Content Section */}
        <div className="md:w-1/2 bg-emerald-600 p-6 md:p-8 lg:p-12 flex flex-col justify-center">
          <div className="text-white space-y-4">
            <p className="text-lg md:text-xl font-medium leading-snug">
              Devenez un master du Scrabble grace aux conseils et astuces du Champion du monde
            </p>
            
            <h2 className="text-3xl md:text-4xl lg:text-5xl font-bold mt-2">
              Alexis
              <br />
              Allagnat
            </h2>

            
          </div>
        </div>
      </div>
    </div>
            </div>
            
            <Footer/>
        </section>}

        {loading && <Loader/>}
       </>
    )
}