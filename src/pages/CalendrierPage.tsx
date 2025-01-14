import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/BG-calendrier.jpg"
import slide2 from "../assets/calendar.jpg"
import { Footer } from "@/components/Footer"
import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"
import AlaUneComponent from "@/components/AlaUneComponent"
import Blog from "@/components/Blog"
import { Button } from "@/components/ui/button"
import { CompetitionManager } from "@/components/Calender"
export const CalendrierPage=()=>{
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
       {!loading &&  <section className="">
            <section className="flex flex-col">
                    <HeaderSection/>
                    <NavSection/>
            </section>
            <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 max-sm:mt-0 h-56  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>
        <div className="absolute flex items-center justify-center">
                <h2 className="text-white text-5xl font-bold">Calendrier</h2>
        </div>
    </div>

    <div style={{ background:`url(${slide2})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className=' mx-24 z-10 mt-5 max-sm:mt-0 h-96   bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>
            <section className="flex flex-col mt-10 max-sm:mx-4 mx-36 mb-24">
                    <CompetitionManager/>

                    
                   
            </section>
           
            
            <Footer/>
        </section>}

        {loading && <Loader/>}
       </>
    )
}