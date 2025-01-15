import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/BG-calendrier.jpg"
import { Footer } from "@/components/Footer"
import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"
import AlaUneComponent from "@/components/AlaUneComponent"
import Blog from "@/components/Blog"
import { Button } from "@/components/ui/button"
import NavMobile from "@/components/NavMobile"
import Title from "@/components/ui/title"
export const ActualityPage=()=>{
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
                <h2 className="text-white text-5xl font-bold">Actualités</h2>
        </div>
    </div>

            <section className="flex flex-col mt-24 max-sm:mx-4 mx-36">
                    <div>
                    <Title title="A la une"/>
                    </div>
                    <AlaUneComponent/>

                    <div className="mt-16">
                            <Title title="Autres articles"/>
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