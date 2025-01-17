import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/comités.jpg"
import { CommiteeList } from "@/components/CommiteeList"
import { Footer } from "@/components/Footer"
import NavMobile from "@/components/NavMobile"
import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"
export const CommiteePage=()=>{
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
        {!loading && <section>
            <section className="flex flex-col">
            <HeaderSection/>
                    <NavMobile/>
                    <NavSection/>
            </section>
            <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 max-sm:mt-0 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

            <section className="flex flex-col mt-12 max-sm:mx-6 ml-36">
                <div>
                                <h2 className='text-[#00723e] text-3xl font-bold'>Le Comité</h2>
                        </div>

                        <div className="mt-8">
                            <CommiteeList/>
                        </div>
            </section>
            <Footer/>
        </section>}

        {loading && <Loader/>}
        </>
    )
}